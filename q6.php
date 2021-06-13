<html>
<body>
<form action="" method="post">
<label>ENTER A NUMBER</label>
    <input  type="text" name="no">
    <button name="submit">OK</button>
</form>
<?php
if(isset($_POST['submit']))
{
    $a=$_POST['no'];
    $n=2;
    $f1=0;
    $f2=1;
    echo "FIBONACCI SERIES: $f1 $f2 ";
    while($n<$a)
    {
        $f3=$f2+$f1;
        echo "$f3 ";
        $f1=$f2;
        $f2=$f3;
        $n=$n+1;
    }
}
?>
</body>
</html>