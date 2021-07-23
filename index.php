<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<?php
    //php intro
    echo "Hello world!<br>";

    //php install
    $a = "Hoai An";
    $b = "Hoang Anh";
    echo $b." yeu ".$a;

    //php syntax
    $color = "red";
    echo "My car is " .$color ."<br>";
    Echo "Mty house is " .$color ."<br>";
    echo "My boat is " .$color ."<br>";

    //php variable scope
    $x = 5; //global scope
    $y = 10;

    function myTest() {
        // using x inside this function will generate an error
        echo "<p>Variable x inside function is: </p>";
    }

    myTest();
    echo "<p>Variable x outside function is: $x</p>";
    function myTest1() {
        global $x, $y;
        $x = $x + $y;
    }

    myTest1();
    echo $x; // output15

    function myTest2() {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    myTest2();
    echo $y;

?>
</body>
</html>