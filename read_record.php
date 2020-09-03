<?php
    require 'db_con.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read From Database</title>
</head>
<body>
    <table align="center">
        <h2 align="center">Read Record From Database</h2>
        <form action="#" method="post">
           <tr>
           <th>Enter Id</th>
                <td><input type="text" name="id" required></td>
                <td><button type="submit" name="search">Search</button></td>

               

           <tr>
				<th>Name</th>
				<th>Email</th>
				<th>Location</th>
        </tr>       
        <?php
                    if(isset($_POST['search'])){
                        $id = mysqli_real_escape_string($con, $_POST['id']);
                        $query = "SELECT * FROM record WHERE id='$id'";
                        $q_run = mysqli_query($con, $query);
                        while($row = mysqli_fetch_array($q_run)){
                ?>
            <tr>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['loc']?></td>
			</tr>

            <?php
                        }
                    }
            ?>
       </form>
    </table>
</body>
</html>