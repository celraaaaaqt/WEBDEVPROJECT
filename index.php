<?php
    include('connect.php');
    include('delete.php');
  
    
    $select = "SELECT * FROM crud_table";
    $sqlSelect = mysqli_query($connect, $select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Project</title>
    <style>
        body {
            background: linear-gradient(45deg, #0a0a23, #000000 );
        }
        .asd{
            top: 10px;
            display: grid ;
            place-items: center;
            height: 500px;
            
        }
        a{
            position: absolute;
            right: 235px;
            top: 50%;
            
            display: flex;
            justify-content: flex-end;
            align-items: center;
            font-size: 25px;
            background-color: #1e90ff;
            color: white;
            text-decoration: none;
            padding: 8px;
            border-radius: 3px;
            border-style: solid;
            border-color: darkgreen;
            font-weight: bold;
        }
        table, th, td{
            border-collapse: collapse;
            border: 2px solid #00ffff;
            font-size: 20px;
            height: 85px;
            width: 50%;
            color: white;
            padding: 12px;
            background-color:  #151515;
            
        }
        button{
            font-size: 25px;
            cursor: pointer;
        }
        .btn{
            border: none;
            font-size: 25px;
            cursor: pointer;
        }
        .edit{
            background-color: #00ff00;
            color: white;
            border-radius: 6px;
            padding: 5px;
            width: 70px;
        }
        .delete{
            background-color: #ff3131;
            color: white;
            border-radius: 6px;
            padding: 5px;
            width: 100px;
        }
        th{
           color: #00ffff; 
           background-color: #1b0033;
           font-size: 35px;
        }
        h1{
            color: #00ffff;
            background: linear-gradient(45deg, #0a0a23, #000000);
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<a class="happy" href="add.php"> ADD+ </a>
   <div class="asd">
    <h1>Zamoraqt's CRUD Table</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th colspan="2">Action</th>
        </tr>

        <?php foreach($sqlSelect as $result => $value) {  ?>
            <tr>
                <td><?php echo $value['ID'] ?></td>
                <td><?php echo $value['NAME'] ?></td>
                <td><?php echo $value['AGE'] ?></td>
                <td><?php echo $value['ADDRESS'] ?></td>
                <td>
        
                    <form action="update.php" method="post">
                        <input class="btn edit" type="submit" value="Edit" name="edit">
                        <input type="hidden" name="edId" value="<?= $value['ID'] ?>">
                        <input type="hidden" name="edName" value="<?= $value['NAME'] ?>">
                        <input type="hidden" name="edAge" value="<?= $value['AGE'] ?>">
                        <input type="hidden" name="edAddress" value="<?= $value['ADDRESS'] ?>">
                    </form>

                </td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="delID" value="<?= $value['ID'] ?>">
                        <input class="btn delete" type="submit" value="Delete" name="delete">
                    </form>
                </td>
            </tr>
          
        <?php } ?>
    </table>
   

   </div>
    
</body>
</html>
