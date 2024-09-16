<?php

namespace App\Http\Controllers;

use App\Services\MyClassApiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SiginController extends Controller
{
    //    protected $apiUrl = 'https://gk-olimp.bitrix24.ru/rest/1/l383a23u2zzl6nm7/';
    protected $apiUrl = 'https://gk-olimp.bitrix24.ru/rest/81/aidg3ds4wpb4vvmi/';

    public function scheduleRequest(Request $request, MyClassApiService $myClassApiInstance)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            //            'guest_count' => '',
            'lesson' => 'required',
        ]);

        $record = $myClassApiInstance->sendScheduleRequest($validatedData);

        if (property_exists($record, 'id')) {
            return redirect(route('schedule', []).'#sign-in-form')->with('success', 'Вы успешно записаны!');
        } else {
            $message = (property_exists($record, 'message')) ? $record->message : '';

            return redirect(route('schedule', []).'#sign-in-form')->with('error', "Что-то пошло не так: {$message}");
        }
    }

    public function mainRequest(Request $request)
    {
        $validatedData = $request->validate([
            'phone' => 'required|max:255',
        ]);

        $response = Http::get('https://smartcaptcha.yandexcloud.net/validate', [
            'secret' => config('services.ya_captcha.server_key'),
            'token' => $request->get('smart-token'),
        ]);

        if ($response->json('status') === 'ok') {
            $this->sendApiRequest('Форма с сайта (без имени)', $validatedData['phone'], $request->get('metrika_client_id'));
        }
    }

    public function signinRequest(Request $request)
    {
        $validatedData = $request->validate([
            'phone' => 'required|max:255',
            'name' => 'required|max:255',
        ]);

        $response = Http::get('https://smartcaptcha.yandexcloud.net/validate', [
            'secret' => config('services.ya_captcha.server_key'),
            'token' => $request->get('smart-token'),
        ]);

        if ($response->json('status') === 'ok') {
            $this->sendApiRequest($validatedData['name'], $validatedData['phone'], $request->get('metrika_client_id'));
        }

    }

    protected function sendApiRequest($name, $phone, $metricaClientId)
    {
        $phone = str_replace(['(', ')', '-', ' ', '+'], [], $phone);

        if (isset($_COOKIE['utm_campaign'])) {
            $utm_campaign = $_COOKIE['utm_campaign'];
        } else {
            $utm_campaign = 'UTM campaign not specified';
        }

        if (isset($_COOKIE['utm_medium'])) {
            $utm_medium = $_COOKIE['utm_medium'];
        } else {
            $utm_medium = 'UTM medium not specified';
        }

        if (isset($_COOKIE['utm_source'])) {
            $utm_source = $_COOKIE['utm_source'];
        } else {
            $utm_source = $_SERVER['HTTP_REFERER'];
            //$utm_source = "UTM source not specified";
        }

        if (isset($_COOKIE['utm_term'])) {
            $utm_term = $_COOKIE['utm_term'];
        } else {
            $utm_term = 'UTM term not specified';
        }

        if (isset($_COOKIE['utm_content'])) {
            $utm_content = $_COOKIE['utm_content'];
        } else {
            $utm_content = 'UTM content not specified';
        }

        $weekday = date('w', mktime(0, 0, 0, date('m'), date('d'), date('Y')));

        if ($weekday > 6) {
            $respinsible_id = 645;
        } else {
            $respinsible_id = 13;
        }

        $apiLeadData = [
            'FIELDS' => [
                'TITLE' => 'Заявка с сайта cookforia.ru',
                'NAME' => $name,
                'PHONE' => [[
                    'VALUE' => $phone,
                    'VALUE_TYPE' => 'WORK',
                ]],
                'SOURCE_ID' => 'WEB',
                'UTM_CAMPAIGN' => $utm_campaign,
                'UTM_MEDIUM' => $utm_medium,
                'UTM_SOURCE' => $utm_source,
                'UTM_TERM' => $utm_term,
                'UTM_CONTENT' => $utm_content,
                'ASSIGNED_BY_ID' => $respinsible_id,
                'metrika_client_id' => $metricaClientId,
            ],
        ];

        $leadUrl = $this->apiUrl.'crm.lead.add.json?'.http_build_query($apiLeadData);

        return file_get_contents($leadUrl);
    }
}
