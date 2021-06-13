<html>
<body>
<form action="" method="post">
<label>ENTER TWO NUMBER:</lable>
    <input type="text" name="no1">
    <input type="text" name="no2">
      <select name="operations">
        <option value="1">ADDITION</option>
        <option value="2">SUBTRACTION</option>
        <option value="3">MULTIPLICATION</option>
        <option value="4">DIVISION</option>
    </select>
    <button name="submit">OK</button>
</form>
<?php
if(isset($_POST['submit']))
{
    $a=$_POST['no1'];
    $b=$_POST['no2'];
    $c=$_POST['operations'];
    switch($c)
    {
        case 1:$r=$a+$b;
        break;
        case 2:$r=$a-$b;
        break;
        case 3:$r=$a*$b;
        break;
        case 4:$r=$a/$b;
        break;
    }
    echo "RESULT IS: $r";
}
?>
</body>
</html>