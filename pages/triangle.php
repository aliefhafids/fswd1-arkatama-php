<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle</title>
</head>
<body>
    <?php
    
    function upsideLeft(){
        for($i=1; $i<=5; $i++){
            for($j= 1; $j<=$i; $j++){
                echo "*";
            }
            echo "<br>";
        }
    }

    function downsideLeft(){
        for($i=5; $i>=1; $i--){
            for($j= 1; $j<=$i; $j++){
                echo "*";
            }
            echo "<br>";
        }

    }

    function upsideRight(){
        for($i=5; $i>=1; $i--){
            for($j=1; $j<=$i; $j++){
                echo "&nbsp;&nbsp;";
            }
            for($k=5; $k>=$i; $k--){
                echo"*";
            }
            echo"<br>";
        }
    }

    function downsideRight(){
        for($i=1; $i<=5; $i++){
            for($j= 1; $j<=$i; $j++){
                echo "&nbsp;&nbsp";
            }
            for($k=$i; $k<=5; $k++){
                echo "*";
            }
            echo "<br>";
        }
    }

    upsideLeft();
    echo "<br>";
    downsideLeft();
    echo "<br>";
    upsideRight();
    echo "<br>";
    downsideRight();
    echo "<br>";

    function conditionalTr($triangleName, $row = 5, $symbol = '*') {
        if ($triangleName === 'upsideLeft') {
            for($i=1; $i<=$row; $i++){
                for($j= 1; $j<=$i; $j++){
                    echo $symbol;
                }
                echo "<br>";
            }
        } elseif ($triangleName === 'upsideRight') {
            for ($i = $row; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "&nbsp;&nbsp;";
                }
                for($k=$row; $k>=$i; $k--){
                    echo $symbol;
                }
                echo "<br>";
            }
        } elseif ($triangleName === 'downsideLeft') {
            for ($i = $row; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo $symbol;
                }
                echo "<br>";
            }
        } elseif ($triangleName === 'downsideRight') {
            for ($i = 1; $i <= $row; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "&nbsp;&nbsp;";
                }
                for($k=$i; $k<=$row; $k++){
                    echo $symbol;
                }
                echo "<br>";
            }
        } else {
            echo "Nama tidak valid!!";
        }
    }

    conditionalTr('downsideRight', 8, '*')

    ?>
</body>
</html>