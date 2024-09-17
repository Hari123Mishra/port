<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class DownloadAbout implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = [
            ["hari", "hari@thesileo.com", "83034844484", "08-04-2002"]
        ];
        
        return collect($data);
    }
}
