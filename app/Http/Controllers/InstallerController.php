<?php

namespace App\Http\Controllers;

use App\Installer;
use Illuminate\Http\Request;

class InstallerController extends Controller
{
    public function getAllInstaller()
    {
        $installers = Installer::all();
        return response()->json([
            'code' => 200,
            'installers' => $installers
        ]);
    }
}
