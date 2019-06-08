<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\StockInsExport;
use App\Exports\StockOutsExport;
use App\Exports\TransactionExport;
use App\Exports\AdjustmentExport;
use Carbon\Carbon;
use Excel;
use Maatwebsite\Excel\HttpFoundation\BinaryFileResponse;

class ReportController extends Controller
{
    public function getWeeklyStockInReport($warehouseId)
    {
        return Excel::download(new StockInsExport(Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek(), $warehouseId), 'stock_in.csv');
    }
    
    /**
     * @return BinaryFileResponse
     */

    public function getWeeklyStockOutReport($warehouseId)
    {
       return Excel::download(new StockOutsExport(Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek(), $warehouseId), 'stock_out.csv');
    }

    public function getMonthlyReport($warehouseId)
    {
        return (new TransactionExport(Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth(), $warehouseId))->download('transaction.xlsx');
    }

    public function getAdjustmentReport()
    {
        return Excel::download(new AdjustmentExport, 'adjustment.csv');
    }
}
