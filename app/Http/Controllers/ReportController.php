<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\StockInsExport;
use App\Exports\StockOutsExport;
use App\Exports\TransactionExport;
use Carbon\Carbon;
use Excel;
use Maatwebsite\Excel\HttpFoundation\BinaryFileResponse;

class ReportController extends Controller
{
    public function getWeeklyStockInReport()
    {
        return Excel::download(new StockInsExport(Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()), 'stock_in.csv');
    }
    
    /**
     * @return BinaryFileResponse
     */

    public function getWeeklyStockOutReport()
    {
       return Excel::download(new StockOutsExport(Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()), 'stock_out.csv');
    }

    public function getMonthlyReport()
    {
        return (new TransactionExport(Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()))->download('transaction.xlsx');
    }
}
