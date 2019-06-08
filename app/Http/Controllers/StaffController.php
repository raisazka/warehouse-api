<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function getAllStaff(Request $request)
    {
        $staff = Staff::where('position', 'LIKE', $request->staff)->get();
        return response()->json([
            'code' => 200,
            'staffs' => $staff
        ]);
    }
}
