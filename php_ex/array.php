<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>
    <?php
    $code = array('one', 'two','three','four','five');
    var_dump(count($code)).'<br>';
    array_push($code,'six').'<br>';
    var_dump($code).'<br>';
    echo $code[1].'<br>';
    $code[1] = 'seven'.'<br>';
    echo $code[1].'<br>';
    var_dump($code).'<br>';
    ?>
</body>
</html>