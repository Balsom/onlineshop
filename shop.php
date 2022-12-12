<!DOCTYPE html>
<html lang="en">
<head>
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | المنتجات </title>
    <style>
        h3{
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
        }
        .card{
            float: right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;
        }
        .card img{
            width: 100%;
            height: 200px;
        }
        main{
            width: 60%;
        }
        .btn {
            border:none;
            padding: 10px;
            width: 40%;
            font-weight: bold;
            font-size: 15px;
            background-color: lightcoral;
            cursor: pointer;
            font-family: 'Cairo', sans-serif;
            margin-bottom: 15px;
        }
        .navbar-brand{
            margin-left:70px ;
            text-decoration:none;
            list-style-type:none;
            color:white;
        }
        
    </style>
</head>
<body>
    <ul style='background-color:black;cursor: pointer'> 
        <li>
            <a class="navbar-brand" href="card.php">mycard| عربتي</a>
    </ul>
    <center>
        <h3> المنتجات المتوفره</h3>
    </center>
    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM prod");
    while($row = mysqli_fetch_array($result)){
        echo "
        <center>
        <main>
            <div class='card' style='width: 15rem;'>
                <img src='$row[image]' class='card-img-top'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[name]</h5>
                    <p class='card-text'>$row[price]</p>
                    <a href='val.php? id=$row[id]' class='btn btn-success' style= text-decoration:none;>اضافة المنتج للعربه</a>
                </div>
            </div>
        </main>
        <center>
        ";
    }
    ?>
</body>
</html>