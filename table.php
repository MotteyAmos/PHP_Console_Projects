<?php 
require_once "index.php";

$product = new Product('Router', "dkskdskdsj","Sky");

$color ="";
if (strlen($product->getName()) > 10){
    $color = "#54f";
}else{
    $color = "#f42";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
</head>
<body>
    <table border="2" border-collapse="collapse" border-spacing="1px">
        <thead>
            <tr>
                <th>Name</th>
                <th>Barcode</th>
                <th>Manufacture</th>
            </tr>
        </thead>
        <tbody>
            <td
                style="background-color: <?php echo $color?>;"
            ><?php echo $product->getName() ?></td>
            <td><?php echo $product->getBarCode() ?></td>
            <td><?php echo $product->getManufacture() ?></td>
        </tbody>
        <?php 
            $count = 0;
            while($count < 100){
                $count ++;
                echo "
                    <table border='1' cell-spacing='1'>
                        <tr>
                            <td>$count </td>
                        </tr>   
                    </table>
                ";
            }
        ?>
    </table>

    <?php 

            $numbers = ["one" => 1, "two"=> 2, "three" =>3, 1,2,3,4,5];
            foreach ($numbers as $key => $value){
                echo $key .":". $value ."<br>";
            }
    ?>
</body>
</html>