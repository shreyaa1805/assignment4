<html>

<head>
    <title>Random</title>
</head>

<body>
    <p><h1>Number generated randomly is
        <?php
    $choice = rand(1, 100);
    echo $choice;
?>.And its square root is
            <?php
    echo sqrt($choice);
?>.</h1></p>
</body>

</html>