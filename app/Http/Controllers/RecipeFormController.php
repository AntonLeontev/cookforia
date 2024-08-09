<?php

namespace App\Http\Controllers;

class RecipeFormController extends Controller
{
    public function show()
    {
        switch (request('studio')) {
            case '209':
                $studio = 'Московский пр. 183-185 А';
                break;
            case '211':
                $studio = 'Дыбенко 8, к. 1';
                break;
            case '213':
                $studio = 'Ильюшина, д. 5, к. 1';
                break;

            default:
                $studio = '';
                break;
        }

        return view('receipt-form', compact('studio'));
    }

    public function handle()
    {
        $sheetId = '1xAVwKC28pL88itUXDL0GQeMM2TR-9ymfdZaCiCPviH0';
        $refreshToken = config('services.google.refresh_token');
        $clientId = config('services.google.client_id');
        $clientSecret = config('services.google.client_secret');

        // getting access token
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://oauth2.googleapis.com/token');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, [
            'refresh_token' => $refreshToken,
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'grant_type' => 'refresh_token',
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $accessToken = json_decode($response)->access_token;

        // writing to google sheets
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://sheets.googleapis.com/v4/spreadsheets/$sheetId/values/A1:append?valueInputOption=RAW");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Bearer $accessToken", 'Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
            'values' => [
                [
                    request('id', ''),
                    request('surname', ''),
                    request('name', ''),
                    request('patronymic', ''),
                    request('bday', ''),
                    request('email', ''),
                    request('notify', 'off'),
                ],
            ],
        ]));
        curl_exec($ch);
        curl_close($ch);

        return back();
    }
}
