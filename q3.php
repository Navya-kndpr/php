<html>
<body>
    <form action="" method="post">
        <label>Enter a no:</label>
            <input type="text" name="no">
            <button name="submit">OK</button>
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $a=$_POST['no'];
            $n=$a;
            $r=0;
            $s=0;
            while($n!=0)
            {
                $d=$n%10;
                $s=$s+$d;
                $n=$n/10;
            }
            echo "sum of digits: $s";
            echo "<br>";
            $n=$a;
            while($n!=0)
            {
                $d=$n%10;
                $r=$r*10+$d;
                $n=(int)($n/10);
            }
            echo "Reversed no: $r";
            echo "<br>";
            if($r==$a)
            {
                echo "It is a pakindrome no";
            }
            else
            {
                echo "It is not a palindrome";
            }
        }
    ?>
    </body>
</html>