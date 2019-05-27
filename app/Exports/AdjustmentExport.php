<?php

namespace App\Exports;

use App\AdjustStock;
use Maatwebsite\Excel\Concerns\FromCollection;

class AdjustmentExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return AdjustStock::all();
    }
}
