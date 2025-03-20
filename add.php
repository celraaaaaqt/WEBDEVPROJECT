<?php
    include('connect.php');


    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $insert = "INSERT INTO crud_table VALUES (NULL,'$name', $age, '$address')";
        $insertSQL = mysqli_query($connect, $insert);

        echo "<script>alert('Data Added')</script>";
        echo "<script>window.location.href='index.php'</script>";

    }
   

?>

<!DOCTYPE html>
<html lang="en">
    <style>
        body{
            background: linear-gradient(45deg, #0a0a23, #000000 );
            display: flex;
            justify-content: center;
            align-items: center;
        }
     .addBTN {
        background: linear-gradient(#0a0a23, #000000);
        position: relative;
        border-radius: 15px;
        border:solid 5px  #00ffff;
        top: 10px;
        display: grid;
        justify-content: center;
        place-items: center;
        height: 500px;
        width: 50%;
     }
     form{
        display: grid;
     }
     label{
        color: #00ffff;
        
     }
     input{
        background-color: transparent;
        border: solid 2px #00ffff;
        border-radius: 10px;
        height: 35px;
        color: white;
        width: 200px;
        border-radius: 7px;a
     }
     .sub{
        background: linear-gradient(45deg, #0a0a23, #000000 );
        position: relative;
        left: 55px;
        width: 100px;
        padding: 5px;
        color: white;
     }
     .back{
        position: relative;
        right: 150px;
        background-color: #0a0a23;
        text-decoration: none;
        padding: 5px;
        font-size: 1.5em;
        font-weight: bold;
        color: white;
        border-radius: 3px;
        text-align: center;
        
        width: 50px;
        height: 15px;
     }
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <style>
        form{
            margin-right: 0;
            margin-left: 0;
            padding: 1em;
        }
    </style>
</head>
<body>
     <div class="addBTN">
    <a class="back" href="index.php">Back</a>
    <form action="add.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name"><br>

        <label for="age">AGE</label>
        <input type="number" name="age" id="age"><br>
        
        <label for="address">Address</label>
        <input type="text" name="address" id="address"><br>
        
        <input class="sub" type="submit" name="submit" id="submit"><br>
    </form>
    </div>
</body>
</html>
