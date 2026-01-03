<?php

namespace App\Imports;

use App\Models\Club;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ClubsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return Club::updateOrCreate(
            ['name' => $row['nama_klub']],
            [
                'city' => $row['kota'],
                'stadium' => $row['stadion'],
                // SIMPAN URL LANGSUNG
                'logo' => $row['link_logo_klub'] ?? null,
            ]
        );
    }
}

