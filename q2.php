<!DOCTYPE HTML>
<html>
    <head>
        <style>
        p{
            color:red;
            font-size:80px;
            position:absolute;
            top:40%;
            left:50%;
            transform: translate(-50%, -50%);
        }
        body{background-color:pink;}
        </style>
    <p>
    <?php 
        echo date(" h: m : s A");
    ?>
    </p>
    </head>
</html>