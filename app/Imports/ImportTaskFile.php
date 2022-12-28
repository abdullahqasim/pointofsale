<?php

namespace App\Imports;

use App\Models\TaskFile;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportTaskFile implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TaskFile([
            'name' => $row[0],
            'roll_no' => $row[1],
            'class' => $row[2],
            'department' => $row[3],
            'title' => $row[4],
        ]);
    }
}
