<?php
    $coffee = $_POST['coffee'];
    $size = $_POST['size'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/TimHortons.css">
    <title>Tim Hortons Payment</title>
</head>
<body>
    <header>Thank you for your order! Here you go </header><br><br>
    <div class="container2">
        <?php
            if(isset($_POST['original'])){
                if($coffee > 0){
                    $creams = $_POST['creams'];
                    $sugars = $_POST['sugars'];

                    for($i=0;$i<$coffee;$i++){
                        if($size=="small"){
                            echo "<img src='./Tim Hortons Images/cup.jpg' style='width:5%;height:5%'>";
                        }
                        elseif($size=="medium"){
                            echo "<img src='./Tim Hortons Images/cup.jpg' style='width:10%;height:10%'>";
                        }
                        elseif($size=="large"){
                            echo "<img src='./Tim Hortons Images/cup.jpg' style='width:15%;height:15%'>";
                        }
                        elseif($size=="extraLarge"){
                            echo "<img src='./Tim Hortons Images/cup.jpg' style='width:20%;height:20%'>";
                        }
                    }
                    if($creams > 0){
                        echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                        for($i=0;$i<$creams;$i++){
                        echo "<img src='./Tim Hortons Images/cream.jpg' style='width:5%;height:5%'>";
                        }
                    }
                    if($sugars > 0){
                        echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                        for($i=0;$i<$sugars;$i++){
                        echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                        }
                    }
                }
                else{
                    echo "<h1>Please enter number of coffees</h1>";
                }
            }
            elseif(isset($_POST['slang'])){
                $type = $_POST['type'];
                if($coffee > 0){
                    if($size=="small"){
                        for($i=0;$i<$coffee;$i++){
                            echo "<img src='./Tim Hortons Images/cup.jpg' style='width:5%;height:5%'>";
                        }
                        if($type=="DD"){
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*2;$i++){
                                echo "<img src='./Tim Hortons Images/cream.jpg' style='width:5%;height:5%'>";
                            }
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*2;$i++){
                                echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                            }
                        }
                        elseif($type=="TT"){
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*3;$i++){
                                echo "<img src='./Tim Hortons Images/cream.jpg' style='width:5%;height:5%'>";
                            }
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*3;$i++){
                                echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                            }
                        }
                        elseif($type=="Black1S"){
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee;$i++){
                                echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                            }
                        }
                        elseif($type=="Black2S"){
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*2;$i++){
                                echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                            }
                        }
                        elseif($type=="Black3S"){
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*3;$i++){
                                echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                            }
                        }
                    }
                    elseif($size=="medium"){
                        for($i=0;$i<$coffee;$i++){
                            echo "<img src='./Tim Hortons Images/cup.jpg' style='width:10%;height:10%'>";
                        }
                        if($type=="DD"){
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*2;$i++){
                                echo "<img src='./Tim Hortons Images/cream.jpg' style='width:5%;height:5%'>";
                            }
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*2;$i++){
                                echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                            }
                        }
                        elseif($type=="TT"){
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*3;$i++){
                                echo "<img src='./Tim Hortons Images/cream.jpg' style='width:5%;height:5%'>";
                            }
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*3;$i++){
                                echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                            }
                        }
                        elseif($type=="Black1S"){
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee;$i++){
                            echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                            }
                        }
                        elseif($type=="Black2S"){
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*2;$i++){
                                echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                            }
                        }
                        elseif($type=="Black3S"){
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*3;$i++){
                                echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                            }
                        }
                    }
                    elseif($size=="large"){
                        for($i=0;$i<$coffee;$i++){
                            echo "<img src='./Tim Hortons Images/cup.jpg' style='width:15%;height:15%'>";
                        }
                        if($type=="DD"){
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*2;$i++){
                                echo "<img src='./Tim Hortons Images/cream.jpg' style='width:5%;height:5%'>";
                            }
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*2;$i++){
                                echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                            }
                        }
                        elseif($type=="TT"){
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*3;$i++){
                                echo "<img src='./Tim Hortons Images/cream.jpg' style='width:5%;height:5%'>";
                            }
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*3;$i++){
                                echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                            }
                        }
                        elseif($type=="Black1S"){
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee;$i++){
                            echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                            }
                        }
                        elseif($type=="Black2S"){
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*2;$i++){
                                echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                            }
                        }
                        elseif($type=="Black3S"){
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*3;$i++){
                                echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                            }
                        }
                    }
                    elseif($size=="extraLarge"){
                        for($i=0;$i<$coffee;$i++){
                            echo "<img src='./Tim Hortons Images/cup.jpg' style='width:20%;height:20%'>";
                        }
                        if($type=="DD"){
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*2;$i++){
                                echo "<img src='./Tim Hortons Images/cream.jpg' style='width:5%;height:5%'>";
                            }
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*2;$i++){
                                echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                            }
                        }
                        elseif($type=="TT"){
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*3;$i++){
                                echo "<img src='./Tim Hortons Images/cream.jpg' style='width:5%;height:5%'>";
                            }
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*3;$i++){
                                echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                            }
                        }
                        elseif($type=="Black1S"){
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee;$i++){
                            echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                            }
                        }
                        elseif($type=="Black2S"){
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*2;$i++){
                                echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                            }
                        }
                        elseif($type=="Black3S"){
                            echo "<img src='./Tim Hortons Images/plus.jpg' style='width:5%;height:5%'>";
                            for($i=0;$i<$coffee*3;$i++){
                                echo "<img src='./Tim Hortons Images/sugar.jpg' style='width:5%;height:5%'>";
                            }
                        }
                    }
                }
                else{
                    echo "<h1>Please enter number of coffees</h1>";
                }
            }
        
        ?>
    </div><br><br>
    <div class="price">
        <?php 
            if(isset($_POST['original'])){
                if ($size=="small"){
                    for($i=0;$i<$coffee;$i++){
                        $quantity = $i+1;
                        $cost = 1.59 * $quantity;
                        $total = ($cost * .13) + $cost;
                        }
                    echo "<header> Cost: $cost x $quantity + tax = $total </header>";
                }
                elseif ($size=="medium"){
                    for($i=0;$i<$coffee;$i++){
                        $quantity = $i+1;
                        $cost = 1.79 * $quantity;
                        $total = ($cost * .13) + $cost;
                    }
                    echo "Cost: $cost x $i + tax = $total";
                }
                elseif ($size=="large"){
                    for($i=0;$i<$coffee;$i++){
                        $quantity = $i+1;
                        $cost = 1.99 * $quantity;
                        $total = ($cost * .13) + $cost;
                    }
                    echo "Cost: $cost x $i + tax = $total";
                }
                elseif ($size=="extraLarge"){
                    for($i=0;$i<$coffee;$i++){
                        $quantity = $i+1;
                        $cost = 2.19 * $quantity;
                        $total = ($cost * .13) + $cost;
                    }
                    echo "Cost: $cost x $i + tax = $total";
                }
            }
            elseif(isset($_POST['slang'])){
                if ($size=="small"){
                    for($i=0;$i<$coffee;$i++){
                        $quantity = $i+1;
                        $cost = 1.59 * $quantity;
                        $total = ($cost * .13) + $cost;
                    }
                    echo "<header> Cost: $cost x $quantity + tax = $total </header>";
                }
                elseif ($size=="medium"){
                    for($i=0;$i<$coffee;$i++){
                        $quantity = $i+1;
                        $cost = 1.79 * $quantity;
                        $total = ($cost * .13) + $cost;
                    }
                    echo "Cost: $cost x $i + tax = $total";
                }
                elseif ($size=="large"){
                    for($i=0;$i<$coffee;$i++){
                        $quantity = $i+1;
                        $cost = 1.99 * $quantity;
                        $total = ($cost * .13) + $cost;
                    }
                    echo "Cost: $cost x $i + tax = $total";
                }
                elseif ($size=="extraLarge"){
                    for($i=0;$i<$coffee;$i++){
                        $quantity = $i+1;
                        $cost = 2.19 * $quantity;
                        $total = ($cost * .13) + $cost;
                    }
                    echo "Cost: $cost x $i + tax = $total";
                }
            }
        ?>
    </div>
</body>
</html>