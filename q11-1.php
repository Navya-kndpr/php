<html>
<head><title></title></head>
<body >
     <h2>
        Bill
    </h2>
     <?php
     if($_POST)  
    {   
        $names = $_POST['names']; 
        $price = $_POST['price'];

        $nme = explode(',',$names);
        $x = count($nme);

        $prc = explode(',',$price);

        echo '<body ><table>
            <tr>
                <th>Item Name</th><th>Item Price</th>
            </tr>';
            for($i=0;$i<$x;$i++){
    echo "<tr>";
        echo "<td>{$nme[$i]}</td><td>{$prc[$i]}</td>";
    }
    echo "<tr>";
echo "</table>";

        echo '<br>';
        $total = 0;
        for($i=0; $i<$x;$i++)
        {
            $total = $total + $prc[$i];
        }

        echo 'Total Amount Is: '.$total;

        $mx= max($prc);
        $ky = array_search($mx, $prc);
        echo '<br>';
        echo 'Costliest item Is: '.$nme[$ky];

        $mn= min($prc);
        $key = array_search($mn, $prc);
        echo '<br>';
        echo 'Cheapest item Is: '.$nme[$key];
}     
?>
<br>
    <form method="post" action="q11.php">
        <input type="submit" name="submit" value="Back"/>
    </form>
</body>
</html>
