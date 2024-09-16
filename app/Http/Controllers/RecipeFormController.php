<?php

namespace App\Http\Controllers;

use Google\Client;
use Google\Service\Sheets;
use Google\Service\Sheets\ValueRange;
use Illuminate\Support\Facades\Storage;

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
        $creds = json_decode(Storage::get('key.json'), true);

        // Create a new Google Client instance
        $client = new Client;
        $client->setApplicationName('Google Sheets API Service Account');
        $client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
        $client->setAuthConfig($creds);

        // Build the service client
        $sheetsService = new Sheets($client);

        // Use the service client to make API requests
        $spreadsheetId = '1xAVwKC28pL88itUXDL0GQeMM2TR-9ymfdZaCiCPviH0';
        $range = 'A1'; // The service will detect the last row of this sheet
        $newRow = [
            request('id', ''),
            request('surname', ''),
            request('name', ''),
            request('patronymic', ''),
            request('bday', ''),
            request('email', ''),
            request('notify', 'off'),
        ];

        // Create a ValueRange object
        $valueRange = new ValueRange;
        $valueRange->setValues([$newRow]);

        // Set the value input option
        $options = ['valueInputOption' => 'RAW'];

        // Append the data to the sheet
        $result = $sheetsService->spreadsheets_values->append($spreadsheetId, $range, $valueRange, $options);

        return back();
    }
}
