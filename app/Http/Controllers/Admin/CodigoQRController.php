<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use QrCode;
use Zipper;

class CodigoQRController extends Controller
{
    /**
     * Method index() donde se listan los códigos Qr
     *
     * @param
     * @return admin.codigoQR.index 
     */
    public function index()
    {
        $count = 1;     // Variable si es 1 => muestra sólo 8 0 10 registros
        return view('admin.codigoQR.index', compact('count'));
    }

    /**
     * Method create() Donde se creara los código Qr
     *
     * @param Request $request , Datos del formulario
     * @return /codigoQr 
     */
    public function create(Request $request)
    {
        $cantidad = $request->input('cantidad');            // Cantidad de códigos Qr a generar
        $numer_start = $request->input('numer_start');      // Número de inicio para genrar códigos Qr
        
        for($i = 0 ; $i < $cantidad ; $i++ ) {
            // "simplesoftwareio/simple-qrcode": "~2"
            QrCode::format('png')->size(500)->errorCorrection('H')->generate(''.$numer_start, '../public/codeQR/'.$numer_start.'.png');
            $numer_start++;             // Ingrementa para que el número Qr sea igual al nombre del .png
        }
        $notification = 'CodigosQr generados correctamente.';   // Return Notificación
        return redirect('/codigoQr')->with(compact('notification'));
    }

    /**
     * Method dowload() donde se descargará los códigos Qr, en formato Zip
     *
     * @param
     * @return dowload
     */
    public function dowload()
    {
        $files = glob('../public/codeQR');  // Carpeta donde estan los códigos Qr en formato .png
        
        /* Le indicamos en que carpeta queremos que se genere el zip y los comprimimos*/
        Zipper::make('../public/dowload.zip')->add($files)->close();
        
        /* Por último, si queremos descarlos, indicaremos la ruta del archiv, su nombre y lo descargaremos*/
        return response()->download(storage_path('../public/dowload.zip'));
    }

    /**
     * Method show() donde se visualizará todos los códigos Qr
     *
     * @param
     * @return admin.codigoQR.index
     */
    public function show()
    {
        $count = 2;         // Variable si es 2 => muestra Todos los registros
        return view('admin.codigoQR.index', compact('count'));
    }
}
