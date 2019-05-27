<?php

namespace App\Exports;

use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StockInsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $dateStart;
    protected $dateEnd;

    public function __construct($dateStart, $dateEnd)
    {
        $this->dateStart = $dateStart;
        $this->dateEnd = $dateEnd;
    }

    public function collection()
    {
        //return StockIn::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        return DB::table('stock_ins')
                ->join('users', 'users.id', '=', 'stock_ins.user_id')
                ->join('items', 'stock_ins.item_id', '=', 'items.id')
                ->select('stock_ins.id','users.name', 'items.item_description', 'qty', 'stock_ins.remarks', DB::raw('convert(varchar, stock_ins.created_at, 107) AS TRDATE'))
                ->whereBetween('stock_ins.created_at', [$this->dateStart, $this->dateEnd])
                ->get();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'User Name',
            'Item Name',
            'Qty',
            'Remarks',
            'Transaction Date',
        ];
    }

    public function title(): string
    {
        return 'Stock In';
    }
}
