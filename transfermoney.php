<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>
<body>
<?php include 'navigation.php';
?>

<?php
    include 'dbconn.php';
    $conn = OpenCon();
    //echo '<script>alert("Db Connected Successfully")</script>';
    $sql="select * from users";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  /*while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " E-mail : " . $row["email"]. " Balance: " . $row["balance"]. "<br>";
  }
} else {
  echo "0 results";
}*/
?>

<div class="container">
        <h2 class="text-center pt-4">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td class="py-2"><?php echo $row['id'] ?></td>
                        <td class="py-2"><?php echo $row['name']?></td>
                        <td class="py-2"><?php echo $row['email']?></td>
                        <td class="py-2"><?php echo $row['balance']?></td>
                        <td><a href="userdetail.php?id= <?php echo $row['id'] ;?>"> <button type="button" class="btn">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 




</body>
</html>


