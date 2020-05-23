<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class SendEmailController extends Controller
{
    function index()
    {
     return view('index');
    }
    
function send(Request $request)
{
 $this->validate($request, [
    'nombre'     =>  'required',
    'mensaje' =>  'required',
    'email'  =>  'required|email'
 ]);

    $data = array(
        'nombre'      =>  $request->nombre,
        'email'  =>   $request->email,
        'mensaje'   =>   $request->mensaje
    );

 Mail::to('cotizaciones@obrasocialya.com.ar')->send(new SendMail($data));
 return back()->with('success', '¡Gracias por contactarnos!');
}
}
?>