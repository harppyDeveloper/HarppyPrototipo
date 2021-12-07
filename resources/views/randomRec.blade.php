@extends('templates.master')
@section('header')
<center> <img src="https://media.discordapp.net/attachments/752319635491127377/917251832928174151/unknown.png" width="300px" /></center>
<hr>
 @stop
@section('contenido')

<table border="2px" class="default">
    <caption>Listado de Recuerdos</caption>
       <tr>
       <th>Id</th>
       <th>Recuerdo</th>
       <th>Fecha</th>
       </tr>
       @foreach($recuerdos as $rec)
       <tr>
       <td>{{$rec->idRec}}</td>
       <td>{{$rec->recuerdo}}</td>
       <td>{{$rec->date}}</td>
       </tr>
       @endforeach
</table>

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
   <form action="{{route('random')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">Recordar</button>
   </form>
   <br>
   <form action="{{route('list')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">Lista de Recuerdos</button>
   </form>
   <br>
   <form action="{{route('who')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">¿Quienes somos?</button>
   </form>
   <br>
   <form action="{{route('menuP')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">Volver a ingresar un recuerdo</button>
   </form>
   <br>
   <form action="{{route('login')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">Cerrar Sesión</button>
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