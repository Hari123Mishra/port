<?php

namespace App\Exports;

use App\Models\About;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportAbout implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return About::select('name','email','mobile')->get();
    }
}
