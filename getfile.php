<html>
<head>
    <meta charset="UTF-8">
    <title >Document</title>
</head>


<body>

<?php 
    $filePath = "superglobals/uploads/file.txt";

    $output = file_get_contents($filePath);

    $ages = explode("\n", $output);

    $totalAge = 0;

    $i = 0;

    foreach($ages as $age) {
        echo $age . "<br>";

        $totalAge = $totalAge + $age;
        $i++;

        echo "\nThe average is " . ($totalAge / $i);
    }
    echo "eoi?";

    echo "The average is " . ($totalAge / $i);

    echo "oi";
?>
</body>

</html>