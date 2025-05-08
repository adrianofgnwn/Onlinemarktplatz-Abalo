<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AbArticleCategorySeeder extends Seeder
{
    public function run()
    {
        $filePath = database_path('seeders/data/articlecategory.csv');

        if (!File::exists($filePath)) {
            echo "CSV-Datei nicht gefunden: $filePath\n";
            return;
        }

        $file = fopen($filePath, 'r');
        $header = fgetcsv($file, 1000, ';');

        while ($row = fgetcsv($file, 1000, ';')) {
            $data = array_combine($header, $row);

            DB::table('ab_articlecategory')->insert([
                'ab_name' => $data['ab_name'],
                'ab_description' => $data['ab_description'] ?? null,
                'ab_parent' => $data['ab_parent'] !== "NULL" ? $data['ab_parent'] : null,
            ]);
        }

        fclose($file);
        echo "Artikelkategorien erfolgreich geladen!\n";
    }
}

