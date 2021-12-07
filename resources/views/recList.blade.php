@extends('templates.master')
@section('header')
<center> <img src="https://media.discordapp.net/attachments/752319635491127377/917251832928174151/unknown.png" width="300px" /></center>
<hr>
 @stop


@section('contenido')
<div class="table">
<table border="3">

    <caption>Listado de Recuerdos</caption>
       <tr width="1"size="500" BGCOLOR="" >
       <th width="1"size="500" BGCOLOR="">#</th>
       <th >Recuerdo</th>
       <th>Fecha</th>
       <th>Borrar</th>
       </tr>
       @foreach($recuerdos as $rec)
       <tr>
       <td>{{$n++}}</td>
       <td>{{$rec->recuerdo }}ㅤㅤ</td>
       <td>{{$rec->date}}ㅤㅤ</td>
       <td><form action="{{route('borrar')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">Borrar Recuerdo</button>
   </form></td>
       </tr>
       @endforeach
       
</table>

</div>
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
<font size="3" color="" FACE="KG Ten Thousand Reasons">
<center>

   
   <br>
   <form action="{{route('random')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">Recordar</button>
   </form>
   <br>
   <form action="{{route('menuP')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">Volver a ingresar un recuerdo</button>
   </form>
   <br>
   <form action="{{route('who')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">¿Quienes somos?</button>
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