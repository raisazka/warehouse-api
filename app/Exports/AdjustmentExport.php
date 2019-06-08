<?php

namespace App\Exports;

use App\AdjustStock;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AdjustmentExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return AdjustStock::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'User ID',
            'Qty Old',
            'Qty New',
        ];
    }
}
