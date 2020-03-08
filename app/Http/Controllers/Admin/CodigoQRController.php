<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use QrCode;
use Zipper;

class CodigoQRController extends Controller
{
    public function index()
    {
        $count = 1;
        return view('admin.codigoQR.index', compact('count'));
    }

    public function create(Request $request)
    {
        $cantidad = $request->input('cantidad');
        $numer_start = $request->input('numer_start');
        
        for($i = 0 ; $i < $cantidad ; $i++ ) {
            QrCode::format('png')->size(500)->errorCorrection('H')->generate(''.$numer_start, '../public/codeQR/'.$numer_start.'.png');
            $numer_start++;
        }
        $notification = 'CodigosQr generados correctamente.';
        return redirect('/codigoQr')->with(compact('notification'));
    }

    public function dowload()
    {
        $files = glob('../public/codeQR');
        
        /* Le indicamos en que carpeta queremos que se genere el zip y los comprimimos*/
        Zipper::make('../public/dowload.zip')->add($files)->close();
        
        /* Por último, si queremos descarlos, indicaremos la ruta del archiv, su nombre
        y lo descargaremos*/
        return response()->download(storage_path('../public/dowload.zip'));
    }

    public function show()
    {
        $count = 2;
        return view('admin.codigoQR.index', compact('count'));
    }
}
