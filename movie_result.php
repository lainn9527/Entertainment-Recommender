<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Here is your result</title>
    </head>
    <body>
        <?php
        // class[0] => action, class[1] => love, class[2] => plot, 
        // class[3] => fantacy, class[4] => horror, class[5] => comedy
            for ($i=0; $i < 6; $i++)
                $class[$i] = 0;
                        
            $q1_str_arr = str_split($_REQUEST['q1']);
            $q2_str_arr = str_split($_REQUEST['q2']);
            $q3_str_arr = str_split($_REQUEST['q3']);
            $q4_str_arr = str_split($_REQUEST['q4']);
            
            for ($i=0; $i < 6; $i++) { 
                $class[$i] = $class[$i] + $q1_str_arr[$i] + $q2_str_arr[$i] + $q3_str_arr[$i] + $q4_str_arr[$i];
                echo $class[$i].'<br>';
            }


            
        ?>
    </body>
</html>