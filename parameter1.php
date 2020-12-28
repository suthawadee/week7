<?php
    //Addition and Subtraction
    //1.Adding two numbrers
    function add($x , $y){
        $sum = $x + $y;
        echo "Sum of two number is : $sum<br />";
    }
    add(5,10);
    //2.Subtraction two numbers
    function sub($x, $y){
        $sum = $x - $y;
        echo "Subtraction of two number is : $sum<br />";
    }
    sub(30, 20); //10


    //3.Adding two numbers
    function add2($x , $y){
        $sum = $x + $y;
        echo "Sum of two number is : $sum<br />";
    }
    if(isset($_POST['add'])){
        add2($_POST['first'],$_POST['second']);
    }

    //4.Subtraction two numbers
    function sub2($x, $y){
        $sum = $x - $y;
        echo "Sum of two number is : $sum<br />";
    }
    if(isset($_POST['sub']))}
        sub2($_POST['first'],$_POST['second']);
    }
?>

<form method="post">
    Enter First number:<input type="text" name="first " /><br />
    Enter Secound number:<input type="text" name="secound" /><br />
    <input type="submit" name ="add" value="Addtion" />
    <input type="submit" name ="sub" value="Sub" />
</form>