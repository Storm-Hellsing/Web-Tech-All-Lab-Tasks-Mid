<?php

    session_start();
    require_once("../models/db_connection.php");

    if(isset($_REQUEST['delete']))
    {
        $productID = $_REQUEST['productid'];

        $sql = "SELECT * FROM `products` WHERE `product_id` = '{$productID}'";
        $result = sqlReadQuery($sql);

        if($result == 1)
        {

            $result = sqlgetTableData($sql);

            if($result)
            {
                
                $productData = mysqli_fetch_assoc($result)
?>


<html>
    <head>
        <title>
            Delete Product
        </title>
    </head>

    <body>
        <form method="POST" action="../controllers/delete_Product_Check.php" enctype="">
            <input type="hidden" name="productid" id="productid" value="<?php echo($productData['product_id']) ?>">
            <fieldset>
                <legend>Delete Products</legend>
                <label for="productname">Product Name: <?php echo($productData['product_name']) ?></label> <br/>
                <label for="buyingprice">Buying Price: <?php echo($productData['buying_price']) ?></label> <br/>
                <label for="sellingprice">Selling Price: <?php echo($productData['selling_price']) ?></label> <br/>
                <label for="display">Displable: <?php echo($productData['displayable']) ?></label> <br/>
                <hr>
                <input type="submit" name="delete" id="delete" value="Delete"/>
                <br/>
            </fieldset>

            <br/><br/>

            <h3 align="center"><a href="product_list.php">View Product List</a></h3>

        </form>
    </body>
</html>

<?php

            }
        }
        else
        {
            echo("<h3 align='center'>Product Doesn't Exsist</h3>");
        }
    }
    else
    {
        header('location: ../views/product_list.php');
    }

?>