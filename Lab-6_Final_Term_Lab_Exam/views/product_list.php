<?php

    require_once("../models/db_connection.php");

?>

<html>
    <head>
        <title>Product List</title>
    </head>

    <body>
        <h1 align="center">Product Details</h1>
        <form  align="center" method="GET" action="../controllers/product_list_check.php" enctype="">
            <label for="search">Search:</label>
            <input type="text" name="search" id="search" placeholder="Search by name" value=""/><br/><br/>
            <input type="submit" name="searchname" id="searchname" value="Search"/>
        </form>
        <?php

            $sql = "SELECT * FROM `products`";
            $result = sqlReadQuery($sql);

            if($result > 0)
            {

        ?>

        <table border="1" align="center">
            <tr>
                <th width="250px">Product</th>
                <th width="250px">Profit</th>
                <th colspan="2" width="250px"></th>
            </tr>

            <?php
                
                $sql = "SELECT * FROM `products` WHERE `displayable` = 'Yes'";
                $result = sqlgetTableData($sql);

                if($result)
                {
                    
                    while($productData = mysqli_fetch_assoc($result))
                    {

            ?>

            <tr align="center">
                <td width="250px"><?php echo($productData['product_name']) ?></td>
                <td width="250px"><?php echo($productData['profit']) ?></td>

                <form action="edit_Product.php" method="GET">
                    <input type="hidden" name="productid" id="productid" value="<?php echo($productData['product_id']) ?>">
                    <td width="250px"><button type="submit" name="edit">edit</button></td>
                </form>

                <form action="../views/delete_Product.php" method="GET">
                    <input type="hidden" name="productid" id="productid" value="<?php echo($productData['product_id']) ?>">
                    <td width="250px"><button type="submit" name="delete">delete</button></td>
                </form>
            </tr>

            <?php
                    }
                }

            ?>
        </table>

        <br/> <br/>

        <h3 align="center"><a href="add_Product.php">Goto Add Products</a></h3>


        <?php

                if(isset($_REQUEST['msg']))
                {
                    if($_REQUEST['msg'] == 'editsuccess')
                    {
                        echo("<h3 align='center'><b>Updated Successfully.</b></h3>");
                    }
                    elseif($_REQUEST['msg'] == 'editfailed')
                    {
                        echo("<h3 align='center'><b>Failed to update the product.</b></h3>");
                    }
                    elseif($_REQUEST['msg'] == 'deletesuccess')
                    {
                        echo("<h3 align='center'><b>Deleted Successfully.</b></h3>");
                    }
                    elseif($_REQUEST['msg'] == 'deletefailed')
                    {
                        echo("<h3 align='center'><b>Failed to delete the product.</b></h3>");
                    }
                }

            }
            else
            {
                echo("<p><b>The List is Empty</b></p>");
            }

        ?>

    </body>
</html>