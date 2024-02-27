@extends('layouts.plantilla')

@section ('title','RestuBar')

@section('content')

<style>
body {
    border: 20px dashed ; 
    background-color:burlywood;
    }

h1{
    color:black;
    font-family:cursive;
    font-size: 500%;
    text-align: center;
    text-shadow: 2px 2px 5px gray;
    

}
p{
    font-family: cursive;
    color:black;
    text-align: center;
    font-size: 290%;
    text-shadow: 2px 2px 5px gray;

}


</style>


<br><br>
<h1> Bienvenidos a RestuBar</h1> <br>

<p><strong>Comidas rapidas </strong></p> <br>

<p><strong> -----Nuevos Sabores-----</strong><br>
    <a href="Menu">Menu </a> </p>
 



@endsection


