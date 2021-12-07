@extends('templates.master')

@section('barra')
<br>
<font size="3" color="#5668" FACE="KG Ten Thousand Reasons">
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
<form action="{{route('login')}}" method="GET">
   <button type="submit" class="btn btn-outline-dark">Cerrar Sesión</button>
   </form>
</center>
   
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
@section('header')
<center> <img src="https://media.discordapp.net/attachments/752319635491127377/917251832928174151/unknown.png" width="300px" /></center>
<hr>
 @stop

 @section('nav')
 <img src="https://media.discordapp.net/attachments/779519197847748660/915815757198295060/export202112012050511620.png?width=412&height=585" width="300px" />
 
 @stop

 @section('content')

<font size="3" color="black" FACE="KG Ten Thousand Reasons">
   <form action="{{route('showRec')}}" method="POST">
    {{csrf_field()}}
    <div class="ab-3">
       <label for="inrec" class="form-label">Recuerdo</label>
       <input type="text" class="form-control" name="inrec" placeholder="Ingresa un recuerdo feliz" id="inrec" required>
    </div>
       <label for="indate" class="form-label">Fecha</label>
       <input type="date" class="form-control" name="indate" id="indate" required>
       <center><button type="submit" class="btn btn-outline-dark">Enviar</button></center>
    </form>
    

</font>

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