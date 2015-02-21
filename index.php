<?php
/**
 * Created by PhpStorm.
 * User: 
 * Date: 2/21/2015
 * Time: 6:44 AM
 */
function primesInAnInterval(){
    $from = $_GET['from'];
    $to = $_GET['to'];
    if (!isset($to) || !isset($from) || $from==null || $to==null || $from <0 || $to < 0 || $from >=$to){
    //} || !(is_int($from)) || !(is_int($to))) {
        if ($from == null || !isset($from)) $from = 'null';
        if ($to == null || !isset($to)) $to = 'null';
        echo $answer = "primesInAnInterval($from, $to) -> invalid input";}

    else {
        $answer = "primesInAnInterval($from, $to) -> [";
        for ($i=$from; $i<$to; $i++){
            if(isPrime($i)) $answer .= $i.', ';
        }
            echo $answer.']';
        }
    }

    //else echo "<script type='text/javascript'>alert('primesInAnInterval($from, $to)');</script>";
    //if ($from==null) {echo "<script type='text/javascript'>alert('primesInAnInterval($from, $to) -> invalid input');</script>";}

function isPrime($n){
    $ans=true;
    for ($i=2;$i<$n;$i++){
        if ($n%$i==0) $ans = false;
    }
    return $ans;
}

primesInAnInterval();
?>

<html>
<head>
    <title></title>
</head>
<body>
<h1>Find all prime numbers in a range</h1>
<form method="get" target="_self">
    <table width="450">
        <tr><td><label>Enter an integer for start of the range  &nbsp;</label><input type="text" name="from"> <br /></td></tr>
        <tr><td><label>Enter an integer for end of the range  &nbsp; </label><input type="text" name="to"> <br /></td></tr>
        <tr><td><input type="submit" value="Check" style="width:415px"></td></tr>
    </table>
</form>
<p id="answer"></p>
</body>
</html>