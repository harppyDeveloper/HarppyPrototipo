@extends('templates.master')
@section('header')
<center> <img src="https://media.discordapp.net/attachments/752319635491127377/917251832928174151/unknown.png" width="300px" /></center>
<hr>
 @stop
@section('contenido')
¿QUIENES SOMOS?
<br>Somos un grupo de estudiantes de nivel medio superior del plantel CBTis 122 cursando la carrera de programación. Este es un prototipo de página web.
Nuestro equipo consiste en 4 presonas que son Marco Antonio acosta sanchez,Rito Cortez Almeida ,Víctor Manuel Hernández Hinojos y Juan Diego Jiménez Martínez del 5to F.
Haciendo una investigación de que podría tratar nuestro prototipo y una lluvia de ideas decimos encontrar la solución a una problemática que ha incrementado desde los inicios de la pandemia causada por el COVID-19 y de ahí salió la idea de "Harrpy".</h1>

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
   <form action="{{route('login')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">Atras
   
   </button>
   </form>
   <br>
   
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