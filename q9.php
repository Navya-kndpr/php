<html>
<script findSelected(Val)
{
    var cat=val;
    if(cat ="part_time")
    {
        document.getElementById('hours').disabled=false;
    }
    else
    {
        document.getElementById('hours').disabled=true;
    }
}
</script>
form action="" method="post">
    PHOTO<input type="file" name="pic"/>
    EMPLOYEE NUMBER<input type="text" name="fname" placeholder="enter employee no"/>
    FIRST NAME<input type="text" name="fname" placeholder="enter first name"/>
    LAST NAME<input type="text" name="lname" placeholder="enter last name"/>
    ADDRESS<input type="textarea" name="address" placeholder="enter full address"/>
    GENDER<input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female
    DESIGNATION<input type="text" name="desig">
    CONTACT NUMBER<input type="number" name="phone" placeholder="enter phone number"/>
    EMPLOYEE CATEGORY<input type="radio" name="cat" value="full-time" onchange="findSelected(this.value)">FULL-TIME 
    <input type="radio" name="cat" value="part-time" onchange="findSelected(this.value)">PART-TIME
    <input type="radio" name="cat" value="contract" onchange="findSelected(this.value)">CONTRACT
    NUMBER OF HOURS<input type="number" name="hours" value="0" placeholder="number of hours"/>
    BASIC SALARY<input type="number" name="salary" placeholder="salary"/>
    <input type="submit" name="submit" value="submit">

<?php
    if($_POST)
    {
        $cat=$_POST['cat'];
        $basic=$_POST['salary'];
        $salary=0;
        $da-0;
        $hra=0;
        $pf=0;
        $tax=0;
        if($cat=='PART-time')
        {
            $hrs=$_POST['hours'];
            $salary=$hrs*100;
        }
        elseif($cat=='FULL-time')
        {
            if($basic<1000)
            {
                $da=$basic*0.45;
                $hra=$basic*0.10;
                $pf=0;
                $tax=0;
                $gross=$basic+$da+$hra;
                $salary=$gross-$pf-$tax;
              }
              else if($basic<5000 and $basic>=1000)
              {
                  $da=$basic*0.75;
                  $hra=$basic*0.20;
                  $pf=1200;
                  $tax=$basic*0.05;
                  $gross=$basic+$da+$hra;
                  $salary=$gross-$pf-$tax;
                }
                else if($basic>5000)
              {
                  $da=$basic*0.90;
                  $hra=$basic*0.30;
                  $pf=$basic*0.05;
                  $tax=$basic*0.15;
                  $gross=$basic+$da+$hra;
                  $salary=$gross-$pf-$tax;
                }
                elseif($cat=='CONTRACT')
            {
                if(basic<5000)
                {
                    $da=200;
                    $hra=0;
                     
                     $tax=0;
                     $gross=$basic+$da+$hra;
                    $salary=$gross-$pf-$tax;
                }
                elseif($basic>5000 and $basic<25000)
                {
                    $da=$basic*0.15;
                    $hra=1000;
                    $tax=$basic*0.03;
                    $gross=$basic+$da+$hra;
                    $salary=$gross-$pf-$tax;
                }
                elseif($basic>25000)
                {
                    $da=$basic*0.20;
                  $hra=$basic*0.00;
                  
                  $tax=$basic*0.09;
                  $gross=$basic+$da+$hra;
                  $salary=$gross-$pf-$tax;
                }
            }
            if($cat=='PART_TIME')
            {
                echo "the basic salary is:".$basic;
                echo "the net salary is".$salary;

            }
            elseif($cat=='FULL-TIME')
            {
                echo "the basic salary is:".$basic;
                echo "the da is:".$da;
                echo "the hra is:".$hra;
                echo "the pf is:".$pf;
                echo "the tax is:".$tax;
                echo "the gross salary is:".$gross;
                echo "the net salary is".$salary;
            }
            elseif($cat=='CONTRACT')
            {
                echo "the basic salary is:".$basic;
                echo "the da is:".$da;
                echo "the hra is:".$hra;
                echo "the pf is:".$pf;
                echo "the tax is:".$tax;
                echo "the gross salary is:".$gross;
                echo "the net salary is".$salary;
            }
        }
    }
    ?>
    </html>