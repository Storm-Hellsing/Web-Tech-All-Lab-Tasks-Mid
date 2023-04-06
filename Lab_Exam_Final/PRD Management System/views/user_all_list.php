<html>
    <head>
        <title>View User</title>
    </head>
        
    <body>
        <form align="center" method="POST" action="CheckOut.php" enctype="">
            <div class="main-block">
                <h1 align="center">Users</h1>
                <a href="ViewUsers_Admin.php" target="_blank">Admin's List</a>
                <a href="ViewUsers_Customer.php" target="_blank">Customer's List</a>
                <a href="ViewUsers_Merchant.php?" target="_blank">Merchant's List</a>
                <br/> <br/>
                <label for="search">Search User: </label>
                <input type="text" name="search" id="search" value=""/> 
                <br/> <br/>
                <table align="center" border="1" width="1500px">
                    <tr>
                        <th width="100px">Serial No:</th>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Account Type</th>
                        <th>Business Name</th>
                        <th>Business Link</th>
                        <th>Action</th>
                    </tr>
                    
                
                    <?php 
                        
                        foreach($userData as $user): 

                    ?>
                    <tr align="center">
                        <td><?php echo $count ?></td>
                        <td><?php echo $user[0]; ?></td>
                        <td><?php echo $user[1]; ?></td>
                        <td><?php echo $user[2]; ?></td>
                        <td><?php echo $user[4]; ?></td>
                        <td><?php echo isset($user[5]) ? $user[5] : ''; ?></td> <?php //Check whether the field for that specific row is empty ?>
                        <td><?php echo isset($user[6]) ? $user[6] : ''; ?></td> <?php //Check whether the field for that specific row is empty ?>
                        <td><u>Remove</u></td>
                    </tr>
                    <?php 
                        $count++;
                    endforeach; 
                    ?>
                    </tr>
                </table>
                </br> </br>
            </div>
        </form>
    </body>
</html>