<html>
    <head>
        <title>
            Add Products
        </title>
    </head>

    <body>
        <form method="POST" action="../controllers/add_Product_Check.php" enctype="">
            <fieldset>
                <legend>Add Products</legend>
                <label for="productname">Product Name:</label> <br/>
                <input type="text" name="productname" id="productname" value=""/> <br/><br/>
                <label for="buyingprice">Buying Price:</label> <br/>
                <input type="number" name="buyingprice" id="buyingprice" value=""/> <br/><br/>
                <label for="sellingprice">Selling Price:</label> <br/>
                <input type="number" name="sellingprice" id="sellingprice" value=""/> <br>
                <hr>
                <input type="checkbox" name="display" id="display" value=""/>
                <label for="display">Display</label> <br/>
                <hr>
                <input type="submit" name="submit" id="submit"/>
                <br/><br/>

                <?php

                    if(isset($_REQUEST['msg']))
                    {
                        if($_REQUEST['msg'] == 'nullInputs')
                        {
                            echo("Please fillup all the fileds.");
                        }
                        elseif($_REQUEST['msg'] == 'invalidInputs')
                        {
                            echo("Sellng Price Can not be lower than Buying Price.");
                        }
                        elseif($_REQUEST['msg'] == 'success')
                        {
                            echo("Added to Product List.");
                        }
                        elseif($_REQUEST['msg'] == 'failed')
                        {
                            echo("Operation Failed.");
                        }
                    }

                ?>
            </fieldset>
        </form>
    </body>
</html>