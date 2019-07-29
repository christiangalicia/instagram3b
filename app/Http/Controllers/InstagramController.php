<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Publicacion;
class InstagramController extends Controller
{
    
    public function login(){
        
         return view('usuarios.login',[]);
    }
    
    public function panel(){
        $publicaciones = Publicacion::paginate(9);
        
        return view('usuarios.muroPrincipal',
                ['publicaciones'=>$publicaciones]);
    }
    
    public function mostrarFoto(Request $request){
        $p = Publicacion::find($request->id);
       return view('usuarios.mostrarFoto',
                ["publicacion"=>$p]);
    }
}
