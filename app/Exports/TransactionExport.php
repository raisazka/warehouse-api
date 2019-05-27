<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use App\Exports\StockInsExport;
use App\Exports\StockOutsExport;

class TransactionExport implements WithMultipleSheets
{
    use Exportable;

    protected $dateStart;
    protected $dateEnd;

    public function __construct($dateStart, $dateEnd)
    {
        $this->dateStart = $dateStart;
        $this->dateEnd = $dateEnd;
    }

    /**
    * @return \Illuminate\Support\Collection
    */

    public function sheets(): array
    {
        $sheets = [];
        $sheets[] = new StockInsExport($this->dateStart, $this->dateEnd);
        $sheets[] = new StockOutsExport($this->dateStart, $this->dateEnd);
    
        return $sheets;
    }
}
