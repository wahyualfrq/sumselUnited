<?php

namespace App\Imports;

use App\Models\Player;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PlayersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Player([
            'name' => $row['name'],
            'position' => $row['position'],
            'category' => $row['category'] ?? null,
            'number' => $row['number'] ?? null,
            'age' => $row['age'] ?? null,
            'country' => $row['country'] ?? null,
            'photo_url' => $row['photo_url'] ?? null,
        ]);
    }
}
