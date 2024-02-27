@extends('layouts.plantilla')

@section ('title','Menu')

@section('content')

<style>
body{
    background-color:burlywood;
    font-family:cursive;
}
h1 {
    text-align: center;
    color:black;
    font-size: 350%;
    border: 10px dashed;
}

h2 {
    color:black;
    font-size: 250%;
}

h3{
    color: black;
    font-size: 250%;
}

h4{

    color:black;
    font-size: 180%;
}

h5{

    color:black;
    font-size: 180%;
}

p2{
    font-size: 150%;
    }

p3{

    font-size:150%;
}

p4{
    font-size:110%;
}

p5{
    font-size:110%;
}
</style>



<h1>  Menu RestuBar</h1>
<h2>Hamburgesas</h2>
<p2 id="hamburgesa"><strong>Hamburgesa Sencilla</strong> <br>(carne, queso mozarella, salsas, cebolla, tomate ) <br> <strong>$16.000 </strong> <br><br>
<strong>Hamburgesa Doble</strong> <br>
(doble carne, doble queso mozarella, doble salsas, doble cebolla, doble tomate)<br> <strong>$25.000 </strong><br><br>
<strong>Hamburgesa de Pollo</strong> <br> (pollo, queso mozarella, salsa, cebolla, tomate) <br> <strong>20.000 </strong><br><br>
<strong>Hamburgesa Combo</strong><br> (hamburgesa + papas+ gaseosa 250mml)<br> <strong>$30.000 </strong><br><br></p2>

<h3> Perros</h3>
<p3><strong>Perro Sencillo</strong> <br> (salchica americana, papas, salsas, queso) <br><strong> $16.000 </strong><br><br>
<strong>Perro Hawaiano </strong><br> (salchica americana, papas, piña, salsa de piña, queso) <br><strong> $20.000 </strong><br><br>
<strong>Perro Loco </strong><br> (salchica grande, doble de papas, salsas, queso) <br><strong> $23.000 </strong><br><br>
<strong>Perro Doble Queso </strong><br> (salchicha americana, papas, salsas, doble queso)<br><strong> $25.000</strong> <br><br>

<h4> Picadas</h4>
<p4><strong>Picada 1 </strong><br> (500 gramos de costilla, 1 arepa, 1 chorizo)<br><strong> $12.000 </strong><br><br>
<strong>Picada 2 </strong><br>(250 gramos de costillas, 1 chorizo, 1 chuzo de pollo, 2 arepas)<br><strong> $16.000 </strong><br><br>
<strong>Picada 3</strong><br> (250 gramos de costillas, 2 chorizos, 1 chuzo y 2 arepas)<br><strong> $19.000</strong> <br><br>
<strong>Picada Super</strong><br> (500 gramos de costilla, 1 chorizo, 1 chuzo y 3 arepas)<br><strong>$25.000</strong> <br><br>


<h5> Tacos</h5>
<p5><strong>Taco de Chicharron</strong><br><strong>$16.000</strong><br><br>
    <strong>Taco Carne Asada</strong><br><strong>$20.000</strong><br><br>
    <strong>Taco de Chorizo</strong><br><strong>$23.000</strong><br><br>
    <strong>Taco Volcan</strong><br><strong>$25.000</strong><br><br>

    <a href="javascript: history.go(-1)">Volver atrás</a>
@endsection