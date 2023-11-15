<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        print("<br> <strong> PHP- Variable Types </strong> <br>");
        print("<br> Integers <br>");
        $int_var = 12345;
        $another_int = -12345 + 12345;
        echo($int_var);
        print("<br>");
        echo($another_int);
        print("<br>");
        
        print("<br> Doubles <br>");
        $many = 2.2888800;
        $many_2 = 2.2111200;
        $few = $many + $many_2;
        print("$many + $many_2 = $few <br>");
        
        print("<br> Strings <br>");
        $variable = "name";
        $literally = 'My $variable will not print!<br>';
        print($literally);
        $literally = "My $variable will print!<br>";
        print($literally);
        
        print("<br> PHP Local Variables <br>");
        $x = 4;
        function assignx () {
        $x = 0;
        print "\$x inside function is $x. <br>";
        }
        assignx();
        print "\$x outside of function is $x.<br>";
        
        
        print("<br> PHP Function Parameters <br>");
        // multiply a value by 10 and return it to the caller
        function multiply ($value) {
        $value = $value * 10;
        return $value;
        }
        $retval = multiply (10);
        print "Return value is $retval<br>";
        
        print("<br> PHP Global Variables <br>");
        $somevar = 15;
        function addit() {
        GLOBAL $somevar;
        $somevar++;
        print "Somevar is $somevar <br>";
        }
        addit();
        
        //document.write("<br> PHP Static Variables <br>");
        print("<br> PHP Static Variables <br>");
        function keep_track() {
        STATIC $count = 0;
        $count++;
        print $count;
        print "";
        }
        keep_track();
        keep_track();
        keep_track();
        
        print("<br>");
        print("<br> <strong> PHP- Constraints </strong> <br>");
        print("<br>");
        define("MINSIZE", 50);
        echo MINSIZE;
        echo constant("MINSIZE");
        
        print("<br><br> Valid and invalid constant names");
        //Valid constant names
        print("<br> Valid constant names <br>");
        define("ONE", "first thing <br>");
        define("TWO2", "second thing <br>");
        define("THREE_3", "third thing <br>");
        echo ONE, TWO2, THREE_3;
        //Invalid constant names
        print(" <br> Invalid constant names <br>");
        define("2TWO", "second thing <br>");
        define("__THREE__", "third value");
        echo constant("2TWO");
        echo(__THREE__);
        print("<br>");
        
        print("<br>");
        print("<br> <strong> PHP- Operator Types</strong> <br>");
        print("<br>");
        $a = 50;
        $b = 25;
        
        $c = $a + $b;
        echo "<br> Addition Operation Result: $c <br/>";
        $c = $a - $b;
        echo "Subtraction Operation Result: $c <br/>";
        $c = $a * $b;
        echo "Multiplication Operation Result: $c <br/>";
        $c = $a / $b;
        echo "Division Operation Result: $c <br/>";
        $c = $a % $b;
        echo "Modulus Operation Result: $c <br/>";
        $c = $a++;
        echo "Increment Operation Result: $c </br>";
        $c = $a--;
        echo "Decrement Operation Result: $c </br>";
    ?>
</body>
</html>