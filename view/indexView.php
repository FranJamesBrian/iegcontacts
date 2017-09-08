<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--Proyecto usando como base micro framework de Victor Robles
    https://www.youtube.com/watch?v=U5lP8aOjKfw
-->
<html lang ="es">
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Ejemplo MVC </title>
    </head>
    <body>
        
        <form action="<?php echo $helper->url("usuarios","crear");?>" method="post" class="col-lg-5">
            <h3>>Añadir Usuario </h3>
            <hr/>
            Alias: <input type="text" name="alias" class="form-control"/>
            Email: <input type="text" name="email" class="form-control"/>
            Pass: <input type="password" name="pass" class="form-control"/>
            <input type="submit" value="value" class="btn-success"/>
           
        </form>
   </body>
</html>