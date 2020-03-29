<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HireController extends Controller
{
    public function Index($plain)
    {
        if ($plain == "starter")
        {
          return view('web.contract.starter');
        } else if ($plain == "advanced")
        {
          return view('web.contract.advanced');
        } else if ($plain == "professional")
        {
          return view('web.contract.professional');
        } else {
            $notification = array(
                'message' => 'Link incorreto',
                'alert-type' => 'error'
            );
            return Redirect::to('site')->with($notification);
        }
    }
}
