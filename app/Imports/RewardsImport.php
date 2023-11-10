<?php

namespace App\Imports;

use App\Models\Reward;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class RewardsImport implements ToModel
{
    public function model(array $row)
    {
        // dd($row);
        return new Reward([
            'name' => $row[0],      
            'points' => $row[1],     
            'status' => $row[2],     
            'code_data' => $row[3],  
        ]);
    }
}

