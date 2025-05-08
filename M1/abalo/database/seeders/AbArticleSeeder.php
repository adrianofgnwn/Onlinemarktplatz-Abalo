<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AbArticleSeeder extends Seeder
{
    public function run()
    {
        $filePath = database_path('seeders/data/articles.csv');

        if (!File::exists($filePath)) {
            echo "CSV-Datei nicht gefunden: $filePath\n";
            return;
        }

        $file = fopen($filePath, 'r');
        $header = fgetcsv($file, 1000, ';');

        while ($row = fgetcsv($file, 1000, ';')) {
            $data = array_combine($header, $row);

            DB::table('ab_article')->insert([
                'ab_name' => $data['ab_name'],
                'ab_price' => (int) $data['ab_price'],
                'ab_description' => $data['ab_description'],
                'ab_creator_id' => (int) $data['ab_creator_id'],
                'ab_createdate' => $data['ab_createdate'],
            ]);
        }

        fclose($file);
        echo "Artikel erfolgreich geladen!\n";
    }
}

