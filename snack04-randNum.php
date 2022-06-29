<?php 
    //same as we saw at lesson
    $randomNums = [];
    // create fifteen random unique random num
    for ($i=0; $i<=15; $i++) {
        //random php function
        $randomNum = rand(1,100);
        //if first arg is not in second argument
        if (!in_array($randomNum,$randomNums)) {
            //array push
            $randomNums[] = $randomNum;
        }
    };


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack04 - RandomNumberArray</title>
</head>
<body>
    <h1>Array of Random Num</h1>
    <?php 
    for($i=0; $i<count($randomNums); $i++){
        echo "<div> $randomNums[$i] </div>";
    }

    ?>
    
</body>
</html>