<?php

namespace App\Exports;

use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;

class StockOutsExport implements FromCollection, WithHeadings, WithTitle
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $dateStart;
    protected $dateEnd;
    protected $warehouseId;

    public function __construct($dateStart, $dateEnd, $warehouseId)
    {
        $this->dateStart = $dateStart;
        $this->dateEnd = $dateEnd;
        $this->warehouseId = $warehouseId;
    }

    public function collection()
    {
        $data = DB::table('stock_outs')
        ->join('users', 'users.id', '=', 'stock_outs.user_id')
        ->join('stock_out_details', 'stock_outs.id', '=', 'stock_out_details.stock_out_id')
        ->join('items', 'stock_out_details.item_id', '=', 'items.id')
        ->join('installers', 'stock_outs.installer_id', 'installers.id')
        ->join('workers', 'stock_outs.worker_id', 'workers.id')
        ->select('stock_outs.id','users.name', 'installers.installer_name', 'workers.worker_name','items.item_description', 'qty', 'stock_out_details.remarks', DB::raw('convert(varchar, stock_outs.created_at, 107) AS TRDATE'))
        ->whereBetween('stock_outs.created_at', [$this->dateStart, $this->dateEnd])
        ->where('items.warehouse_id', $this->warehouseId)
        ->get();
        return $data;
    }

    public function headings(): array
    {
        return [
            'ID',
            'User Name',
            'Worker Name',
            'Installer Name',
            'Item Name',
            'Qty',
            'Remarks',
            'Transaction Date',
        ];
    }

    public function title(): string
    {
        return 'Stock Out';
    }
}
