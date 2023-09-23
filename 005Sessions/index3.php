<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <style>
        body{
            background-color: rgb(7, 7, 17);
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            padding: 50px 100px 50px 100px;
        }
        .top-div{
            padding: 30px;
            background: linear-gradient(black,rgb(21, 10, 21),black);
            color: rgb(148, 145, 145);
            display: flex;
            justify-content: center;
            box-shadow: rgb(135, 10, 104) 5px 5px 30px;
            border-radius: 60px;
        }

        #btn{
            background: linear-gradient(to right,black,rgb(32, 44, 71));
            color: rgb(148, 145, 145);
            padding: 10px;
            border-radius: 20px;
            box-shadow: rgb(65, 64, 64) 5px 5px 10px;
            transition: all;
        }
        #btn:hover{
            transform: translateY(2px);
            color: rgb(107, 107, 107);
            background: linear-gradient(to right,black,rgb(71, 32, 32));
        }
    </style>
    <?php
        session_start();
        $name1 = $_SESSION["names"];
    ?>
    <div class="top-div">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <p>Welcome,"<?php echo strtoupper($name1); ?>" Thank You for LogIn </p>
            <p>Would you like to Logout? </p>
            <input id="btn" type="submit" name="log" value="Logout">
        </form>
    </div>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if($_POST["log"]=="Logout"){
            session_destroy();
            header("Location: index1.php");
        }
    }
?>
