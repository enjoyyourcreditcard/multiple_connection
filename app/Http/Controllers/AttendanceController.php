<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocalAttendance;
use App\Models\IstudioAttendance;

class AttendanceController extends Controller
{
    public function index(Request $request)
    {
        $server = $request->query('server');

        switch ($server) {
            case '1':
                dd(LocalAttendance::all());
                break;

            case '2':
                dd(IstudioAttendance::all());
                break;
            
            default:
                dd("Gagal");
                break;
        }
    }
}
