<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="js/jquery-3.5.1.min.js">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <meta charset="UTF-8">
        <title>Calculo de un Triangulo</title>
    </head>
    <body>
        <form action="calcular.php" method="POST">
        <div class="container">
            <div class="login-form" >
                <div class="form-header">
                    <a style="font-family: cursive">Ingrese las Medidas del Triangulo</a>
                    <img class="img-responsive" src="Imagenes/area-triangulo.jpg" style="width: 400px; height: 300px">
                </div>
                <div class="form-signin">
                    Lado 1: <input class="form-control" type="text"  name="lado1">
                    Lado 2: <input class="form-control" type="text"  name="lado2">
                    Base: <input class="form-control" type="text"  name="base">
                    Altura: <input class="form-control" type="text"  name="altura">
                </div>
                <div class="form-footer" style="align-items: center">
                    <button class="btn btn-primary">Calcular</button>
                </div>
            </div>
        </div>
    </form>
    </body>
</html>
