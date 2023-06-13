<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Introduzca su cuenta de usuario</title>
    </head>
    <body>
        Introduzca su cuenta de usuario :
        
        <form method="post" action="Controller.php">
            <br>
            Nombre <input type="text" name="name">
            <br>
            <input type="hidden"  name="opt" value="log">
            <input type="submit">
        </form>
    </body>
</html>