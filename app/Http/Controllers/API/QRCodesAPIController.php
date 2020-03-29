<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QRC;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodesAPIController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return QRC::all();
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $qrcode = QRC::create($request->all());
    $path = $_SERVER['SCRIPT_FILENAME'];
    $path_parts = pathinfo($path);
    $dir = $path_parts['dirname'] . '\storage\qrcodes' ;
    $qrc = QrCode::format('svg')->generate('https://qrcode.jssolucoeseservicos.com.br/v/'.$qrcode->id, $dir.'/' .$qrcode->id.'.svg');
    return $qrcode;
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    return QRC::findOrFail($id);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $qrcode = QRC::findOrFail($id);
    $qrcode->update($request->all());
    return $qrcode = QRC::findOrFail($id);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $qrcode = QRC::findOrFail($id);
    $qrcode->delete();
    return ["removed"];
  }

  public function getQrCode(Request $request, $id)
  {
    if (isset($request->query()['size'])) {
      $size = $request->query()['size'];
    } else {
      $size = '100';
    }
    $path = $_SERVER['SCRIPT_FILENAME'];
    $path_parts = pathinfo($path);
    $dir = $path_parts['dirname'] . '\storage\qrcodes';
    $qrc = QrCode::format('svg')->generate('https://qrcode.jssolucoeseservicos.com.br/v/' . $id, $dir . '/' . $id . '.svg');
    return $qrc;
  }

}
