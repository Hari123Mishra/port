<?php

namespace App\Imports;

use App\Models\About;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ImportAbout implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            // Assuming $row is an array with the expected columns
            About::updateOrCreate(
                [
                    'name' => $row[0],
                    'email' => $row[1],
                    'mobile' => $row[2],
                    'dob' => $row[3],
                ]
            );
        }
    }
}
