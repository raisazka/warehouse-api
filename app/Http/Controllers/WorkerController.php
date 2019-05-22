<?php

namespace App\Http\Controllers;

use App\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function getAllWorker()
    {
        $workers = Worker::all();
        return response()->json([
            'code' => 200,
            'workers' => $workers
        ]);
    }
}
