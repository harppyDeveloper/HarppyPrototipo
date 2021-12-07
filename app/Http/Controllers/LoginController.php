<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Muestra el login o inicio
        public function login(){
        return view('login');
    }
    
    //inicias sesion y te manda a la pagina principal
    public function MuestraLogin(Request $request){
        $user=$request->input('inuser');
        $password=$request->input('inpass');
    if($user=='Harppy' and $password=='Harppy123'){
        return view('menu');
    }else if($user!='Harppy'){
        $mensaje='Tu USUARIO es incorrecto por favor escribe correctamente.';
        return view('showLogin',['msg'=>$mensaje]);
    }else{
        $mensaje='Tu CONTRASEÑA es incorrecta por favor escribe correctamente.';
        return view('showLogin',['msg'=>$mensaje]);
    }
}
//Guardar un recuerdo
    function showRec(Request $request){
        $rec=$request->input('inrec');
        $d=$request->input('indate');
        $mensaje='Recuerdo Guardado';
        return view('showRec',['msg'=>$mensaje,'rec'=>$rec,'d'=>$d]);
        }

//Recuerdo Random
    function showRandom(){
            return view('randomRec');
        }
        
//menu
function menuP(){
            return view('menu');
        }
//Lista de Recuerdos
    function showList(){
        return view('recList');
       }
//Nosotros
    function showUs(){
        return view('nosotros');
       }
function showUsB(){
        return view('nosotrosB');
       }
function showUsC(){
        return view('nosotrosC');
       }

//Borrar
function borrar(){
    $mensaje='Recuerdo borrado';
    return view('delete',['msg'=>$mensaje]);
}




}