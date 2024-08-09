<?php

namespace App\Services;

class MyClassApiService
{
    protected $key;

    public function __construct()
    {
        $this->key = '7M09Cub9aAMtUH0boTJYJh8e1ggBWypFdG1ZhM8vXngnZGv5p1';
    }

    public function getMenu($group = null)
    {
        $token = $this->getApiToken();

        $lessons = $this->getRequest(
            'https://api.moyklass.com/v1/company/lessons',
            [
                'date[]' => [date('Y-m-d'), date('Y-m-d', mktime(0, 0, 0, 1, 1, 2100))],
                'classId' => '93791',
            ],
            'x-access-token: '.$token
        )->lessons;

        $result = [];

        foreach ($lessons as $lesson) {
            //$lesson->id id для записи в группу
            //$lesson->date дата
            //$lesson->beginTime время начала
            //$lesson->endTime время окончания
            //$lesson->comment картинки разделенные переносом строки
            //$lesson->topic название
            //$lesson->description цена и названия блюд разделенные переносом строки

            if (strpos($lesson->comment, 'images') !== false) {
                $images = explode("\n", $lesson->comment);
                // Добавляем слеш в начало пути к изображению
                $images = array_map(function ($el) {
                    return "/$el";
                }, $images);
                $descByStrings = explode("\n", $lesson->description);

                $price = intval($descByStrings[0]);
                $composition = array_slice($descByStrings, 1, 3);
                $details = null;
                if (count($descByStrings) > 6) {
                    $details = [
                        'description' => $descByStrings[4],
                        'title' => $descByStrings[5],
                        'text' => array_slice($descByStrings, 6),
                    ];
                }

                $result[] = [
                    'id' => $lesson->id,
                    'date' => $lesson->date,
                    'name' => $lesson->topic,
                    'price' => $price,
                    'composition' => $composition,
                    'details' => $details,
                    'images' => $images,
                    'date' => strtotime($lesson->date),
                    'beginTime' => $lesson->beginTime,
                    'endTime' => $lesson->endTime,
                ];
            }
        }

        $this->revokeApiToken($token);

        return $result;
    }

    public function sendScheduleRequest($data)
    {
        $status = 9166; //новый клиент
        $token = $this->getApiToken();

        $name = $data['name'];
        $phone = preg_replace('/[ +()-]/', '', $data['phone']);
        $lessonId = intval($data['lesson']);
        //        $guestCount = $data['guest_count'];

        //        echo $phone;

        //проверка существования клиента
        $users = $this->getRequest('https://api.moyklass.com/v1/company/users', ['phone' => $phone], 'x-access-token: '.$token)->users;

        //        print_r($users);

        if (count($users) > 0) {
            $user_id = $users[0]->id;
        } else {
            //создаем нового клиента
            $user = $this->postRequest(
                'https://api.moyklass.com/v1/company/users',
                [
                    'name' => $name,
                    'phone' => $phone,
                    'clientStateId' => $status,
                ],
                'x-access-token: '.$token);
            $user_id = $user->id;
            //            print_r($user);
        }

        //запись в группу
        $join = $this->postRequest(
            'https://api.moyklass.com/v1/company/joins',
            [
                'userId' => $user_id,
                'classId' => 93791,
                'statusId' => 26930,
            ],
            'x-access-token: '.$token);
        //        print_r($join);

        //запись на занятие
        $record = $this->postRequest(
            'https://api.moyklass.com/v1/company/lessonRecords',
            [
                'userId' => $user_id,
                'lessonId' => $lessonId,
                //                'user.kolichestvo_gostei' => $guestCount,
            ],
            'x-access-token: '.$token);
        //        print_r($record);

        $this->revokeApiToken($token);

        return $record;
    }

    protected function getApiToken()
    {
        $key = $this->key;

        return $this->postRequest('https://api.moyklass.com/v1/company/auth/getToken', ['apiKey' => $key])->accessToken;
    }

    protected function revokeApiToken($token)
    {
        return $this->postRequest(
            'https://api.moyklass.com/v1/company/auth/revokeToken',
            [],
            'x-access-token: '.$token
        );
    }

    /**
     * @param  string  $headers
     * @return mixed
     */
    protected function getRequest($url, $args, $headers = '')
    {
        $content = http_build_query($args);
        $content = preg_replace('/%5B(?:[0-9]|[1-9][0-9]+)%5D=/', '=', $content);
        $content = preg_replace('/%5B%5D/', '[]', $content);
        $options = [
            'http' => [
                'ignore_errors' => true,
                'method' => 'GET',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n"."Accept: application/json\r\n".$headers,
            ],
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($url.'?'.$content, false, $context);

        return json_decode($result);
    }

    /**
     * @param  string  $headers
     * @return mixed
     */
    protected function postRequest($url, $args, $headers = '')
    {
        $content = json_encode($args);
        $content_type = "Content-Type: application/json\r\n"."Accept: application/json\r\n";
        $options = [
            'http' => [
                'ignore_errors' => true,
                'method' => 'POST',
                'content' => $content,
                'header' => $content_type.$headers,
            ],
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        return json_decode($result);
    }
}
