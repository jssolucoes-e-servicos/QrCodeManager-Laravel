<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Entities\QRC;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function Index()
    {
      //$qrcs = QRC::all();
  //    $qrcs = DB::table('qrcodes')
    //          ->join('qrcodes_groups', 'qrcodes_groups.id', '=', 'qrcodes.group_id')
              //->select(' qrcodes.* , qrcodes_groups.id,qrcodes_groups.name ')
     //         ->get();
     $qrcs = QRC::all();

      return view('app.dashboard', compact('qrcs'));
    }
}
