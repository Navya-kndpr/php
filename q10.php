<html>
<form method="action">
ENTER THE STRING<input type="text" name="text">
    <input type="radio" name="str" value="reverse">REVERSE
    <input type="radio" name="str" value="length">LENGTH OF STRING
    <input type="radio" name="str" value="substr">SUBSTRING
    <input type="radio" name="str" value="upper">UPPER CASE
    <input type="radio" name="str" value="lower">LOWER CASE
    <input type="radio" name="str" value="words">NO.OF WORDS
    <input type="submit" name="submit" value="submit">
</form>
<?php
    if($_POST)
    {
        $string=$_POST['string'];
        $txt=$_POST['txt'];
        switch($string)
        {
            case 'reverse':$rev=strrev($txt);
                    echo "the reversed string of" .$txt."is".$rev;
                    break;
            case 'length':$len=strlen($txt);
                    echo "the length of the string" .$txt. "is".$len;
                    break;
            case 'substring':$sub=substr($txt,5,13);
                    echo "the substring of the string" .$txt. "is".$txt;
                    break;
            case 'upper':$upper=strtoupper($txt);
                    echo "the string" .$txt. "is uppercase".$upper;
                    break;
             case 'lower':$lower=strlower($txt);
                    echo "the string" .$txt. "is uppercase".$lower;
                    break;
            case 'word':$word=str_word_count($txt);
                    echo "the number of words in the string" .$txt. "is".$word;
                    break;
        
        }
    }
    ?>