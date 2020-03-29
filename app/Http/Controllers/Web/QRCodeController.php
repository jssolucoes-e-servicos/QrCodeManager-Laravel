<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Redirect;

use App\Models\QRC;

class QRCodeController extends Controller
{
  public function Index($code)
  {
    $c = QRC::find($code);
    if ($c != null) {
      return redirect($c->url);
    } else {
      $notification = array(
        'message' => 'QR Code ' . $code . 'não localizado!',
        'alert-type' => 'error'
      );
      return Redirect::to('qrcode/invalido')->with($notification);
    }
  }
}
