<html>
<body>
<form action="" method="post">
    <lable>STUDENT APPLICATION FORM FOR NITTE PG COURSE</label>
        FIRST NAME<input type="text" name="fname" placeholder="enter first name"/>

        MIDDLE NAME<input type="text" name="mname" placeholder="enter middle name"/>

        LAST NAME<input type="text" name="lname" placeholder="enter last name"/>

        PHOTO<input type="file" name="pic"/>

        FATHER NAME<input type="text" name="fname" placeholder="enter father name"/>

        ADDRESS<input type="textarea" name="address" placeholder="enter full address"/>

        PHONE NUMBER<input type="number" name="phone" placeholder="enter student phone number"/>

        EMAIL ID<input type="email" name="email" placeholder="enter email ID"/>

        DATE OF BIRTH<input type="date" name="dob" placeholder="enter date of birth"/>

        GENDER<input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female

        DEGREE PERCENTAGE<input type="number" name="grade" placeholder="enter percentage"/>

        HOBBIES<input type="checkbox" name="hobbies" value="sports">SPORTS
        <input type="checkbox" name="hobbies" value="music">MUSIC
        <input type="checkbox" name="hobbies" value="dance">dance

        INSTITUTION STUDIED<input type="text" name="college" placeholder="enter college name"/>

        COURSE STUDIED<input type="radio" name="course" value="BCA">BCA
        <input type="radio" name="course" value="BSC">BSC
        <input type="radio" name="course" value="BCOM">BCOM
        <input type="radio" name="course" value="BE">BE

        COURSE OFFERED<"select" name="option">
        <option value="MCA">MCA</option>
        <option value="MBA">MBA</option>
        <option value="MTECH">MTECH</option>
        <option value="MSC">MSC</option>
        </select>
        <input type="submit" name="submit" value="submit">
        <input type="submit" name="reset" value="reset">
</form>
<?php
    if($_POST)
    {
        $option=$_POST['option'];
        $course=$_POST['course'];
        $ug=$_POST['ug'];
        if($option=='MCA' or $course=='MTECH')
        {
            if($ug>=70)
            {
                if($option=='MTECH' and $course=='BE')
                {
                    echo '<script> alert("REGISTRATION SUCESSFUL");</script>';
                }
                else
                {
                    echo '<script> alert("SHOULD BE STUDIED BE");</script>';
                }
                if($option=='MCA' and ($course=='BSC' or $course=='BCA'))
                {
                    echo '<script> alert("REGISTRATION SUCESSFUL");</script>';
                }
                else
                {
                    echo '<script> alert("PERCENTAGE IN DEGREE SHOULD BE ATLEAST 70%");</script>';
                }

            }
            else
             {
                echo '<script> alert("SHOULD BE STUDIED BSC OR BCA");</script>';
            }
        }
        elseif($option=='MBA')
        {
            if($ug>=60)
            {
                echo '<script> alert("REGISTRATION SUCESSFUL");</script>';
            }
            else
            {
                echo '<script> alert("PERCENTAGE OF DEGREE SHOULD BE ATLEAST 60%");</script>';
            }
    
        }
        else 
            {
                if($ug>=40)
                {
                    if($option=='MSC' and ($course=='BCA' or $course=='BSC'))
                    {
                        echo '<script> alert("REGISTRATION SUCESSFUL");</script>';
                    }
                    else 
                    {
                        echo '<script> alert("SHOULD BE STUDIED BSC OR BCA");</script>';
                    }
                
                 }
                else 
                 {
                    echo '<script> alert("PERCENTAGE OF DEGREE SHOULD BE ATLEAST 40%");</script>';
                }
            }
        }
    
    ?>
</html> 