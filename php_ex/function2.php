<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function</title>   
</head>
<body>
    <h2>Function2</h2>
    <h2>Basic</h2>
    <?php
    function basic(){
        print("lorem is 1<br>");
        print("lorem is 2<br>");
    }

    basic();
    ?>
    <h2>parameter &amp; argument</h2>
    <?php
    function sum($a,$b){
        print($a+$b);
    }

    sum(1,4);
    ?>

    <h2>return</h2>
    <?php
    function sum2($a, $b){
        return $a+$b;
    }

    print(sum2(2,4));
    ?>

</body>
</html>