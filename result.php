<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
    $movie = array("action"=>0, "love"=>0, "plot"=>0, "fantacy"=>0, "horror"=>0, "comedy"=>0); // (action, love, plot, fantacy, horror, comedy);
    
    for($i=1; $i<=4; $i++) {
        $index="a".$i;
        $value="{$_POST["$index"]}";
        addPoint($value);
    }

    function addPoint($value) {
        global $movie;
        $movie["action"]+=(int)$value[1];
        $movie["love"]+=(int)$value[3];
        $movie["plot"]+=(int)$value[5];
        $movie["fantacy"]+=(int)$value[7];
        $movie["horror"]+=(int)$value[9];
        $movie["comedy"]+=(int)$value[11];
    }
    $max_value=max($movie);
    $kind = array_search($max_value, $movie);
    echo "$kind";


?>
</body>
</html>