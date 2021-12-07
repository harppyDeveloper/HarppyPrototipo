@extends('templates.master')
@section('header')
<center> <img src="https://media.discordapp.net/attachments/752319635491127377/917251832928174151/unknown.png" width="300px" /></center>
<hr>
 @stop
@section('contenido')
    

    

      <h2><em>{{$msg}}</em></h2>
    
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
   <form action="{{route('whoB')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">¿Quienes somos?</button>
   </form>
   <br>
   <form action="{{route('login')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">Atras</button>
   </form>
</center>
   
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