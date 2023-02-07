<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>function</title>
</head>
<body>
    <h1>function</h1>
    <?php 
    $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum harum nam sapiente! Nesciunt perspiciatis laborum repudiandae dolorum quis repellendus,
    
    iusto cumque ipsam, delectus dolores accusamus, officiis odio perferendis natus blanditiis.";
    echo $str;
    ?>
    <h2>strlen()</h2>
    <?php
    echo strlen($str);
    ?>
    <h2>nl2br()</h2>
    <?php
    echo nl2br($str);
    ?>
</body>
</html>