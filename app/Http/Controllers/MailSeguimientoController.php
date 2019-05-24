<?php

namespace App\Http\Controllers;

use App\Trabajador;
use App\Obra;
use App\Mail\Seguimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSeguimientoController extends Controller
{
        /**
     * Muestra un listado de trabajador con enlaces para enviar correo.
     * @return type
     */
    /*public function listaTrabajadores()
    {
        $obras = Obra::paginate(8);
        return view('seguimiento.lista_trabajadores_correo', compact('obras'));
    }*/
    /**
     * Envía correo a usuario con documentos recibidos por dicho usuario.
     * @param User $user 
     * @return type
     */
    /*public function enviaCorreo(Obra $obra)
    {
        foreach ($obra->trabajadores as $trabajador)
            Mail::to($trabajador->email)->send(new Seguimiento($obra));
        
        return redirect()->back()->with(['alerta' => 'Correo Enviado']);
    }*/

    public function enviaCorreo(Trabajador $trabajador, Obra $obra)
    {
        Mail::to($trabajador->email)->send(new Seguimiento($trabajador, $obra));
        return redirect()->back()->with(['alerta' => 'Correo Enviado']);
    }
}
