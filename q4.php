<html>
<body>
<form action="" method="post">
<label>ENTER A NUMBER:</lable>
    <input type="text" name="num">
    <button name="submit">OK</button>
</form>
<?php
if(isset($_POST['submit']))
{
    $a=$_POST['num'];
    $n=$a;
    $t=0;
    while($n!=0)
    {
        $r=$n%10;
        $t=$t+$r*$r*$r;
        $n=$n/10;
    }
    if($a==$t)
    {
        echo "It is an armstrong number";
    }
    else
    {
        echo "It is not an armstrong number";
    }
}
?>
</body>
</html>