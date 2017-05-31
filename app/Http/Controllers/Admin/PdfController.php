<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use App\User;




class PdfController extends Controller
{
	public function pdf (){
		$usuario = User::all();
		$pdf = PDF::loadView('admin\usuarios\pdf', ['usuario' => $usuario]);
		return $pdf->stream('Relatório_Usuários.pdf');
	}
    


    }
