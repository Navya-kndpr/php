<html>
<body>
<form action="" method="post">
<lable>ENTER THE PREVIOUS READING</label>
    <input type="text" name="num1"/>
<lable>ENTER THE CURRENT READING</label>
    <input type="text" name="num2"/>
    <button name="submit">OK</button>
</form>
<?php
    if($_POST)
    $prev=$_POST['num1'];
    $cur=$_POST['num2'];
    $unit=$cur-$prev;
    $total=0;
    if($unit<=100)
    {
        $total=$unit*3;
    }
    elseif($unit<=200)
    {
        $total=(100*3)+($unit-100)*4;
    }
    elseif($unit<=300)
    {
        $total=(100*3)+(100*4)+($unit-200)*5;
    }
    else
    {
        $total=(100*3)+(100*4)+(100*5)+($unit-200)*5;  
    }
    echo "PREVIOUS READING:".$prev;
    
    echo "CURRENT READING:".$cur;
    
    echo "UNIT CONSUMED:".$unit;
    
    echo "TOTAL AMOUNT:".$total;
?>
</body>
</html>