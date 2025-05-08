<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class AbUserSeeder extends Seeder
{
    public function run()
    {
        $filePath = database_path('seeders/data/user.csv');

        if (!File::exists($filePath)) {
            echo "CSV-Datei nicht gefunden: $filePath\n";
            return;
        }

        $file = fopen($filePath, 'r');
        $header = fgetcsv($file, 1000, ';');

        while ($row = fgetcsv($file, 1000, ';')) {
            $data = array_combine($header, $row);

            DB::table('ab_user')->insert([
                'ab_name' => $data['ab_name'],
                'ab_password' => Hash::make($data['ab_password']),
                'ab_mail' => $data['ab_mail'],
            ]);
        }

        fclose($file);
        echo "Benutzerdaten erfolgreich geladen!\n";
    }
}

