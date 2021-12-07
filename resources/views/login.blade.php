@extends('templates.master')
@section('header')
<center> <img src="https://media.discordapp.net/attachments/752319635491127377/917251832928174151/unknown.png" width="300px" /></center>
<hr>
 @stop
@section('contenido')
<form action="{{route('sesion')}}" method="POST">
    {{csrf_field()}}
    <div class="ab-3">
       <label for="inuser" class="form-label">Usuario</label>
       <input type="text" class="form-control" name="inuser" id="inuser">
    </div>
    <div class="ab-3">
       <label for="inpass" class="form-label">Contraseña</label>
       <input type="password" class="form-control" name="inpass" id="inpass">
    </div>
       <center><button type="submit" class="btn btn-outline-dark">Iniciar sesión</button></center>
    </form>
 @stop
 @section('barraL')
<font size="3" color="black" FACE="KG Ten Thousand Reasons">
<center>¿Que es Harrpy?</center>
<br>
Harrpy es un pagina donde puedes ingresar un recuerdo que te haya hecho feliz durante el dia y que proximamente lo podras recordar presionando "Recordar".
<br>
<br>
<center>*Pasos*</center>
<br>
<center>*ingresar un recuerdo*</center>
<br>

*Paso 1: ingresa el recuerdo.
<br>
*Paso 2: presiona ingresar.
<br>
<br>
<center>*para recordar*</center>
<br>
*Paso 1: presiona el boton de "Recordar".
<br>

</font>
@stop
@section('barra')
<br>
<center>
   <br>
   <form action="{{route('whoC')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">¿Quienes somos?</button>
   </form>
</center>
<br>
  

@stop
 
 @section('footer')
 <br>
 <center>
 <hr>
     <img src="https://media.discordapp.net/attachments/752319635491127377/917251832928174151/unknown.png" width="200px" />
 <br>
 ©️ 2021 by Rito Cortez, Marco Acosta, Diego Jimenez, Víctor Hernández
 </center>
 @stop