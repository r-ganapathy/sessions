<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <style>
        body{
            background-color: rgb(7, 7, 17);
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            padding: 50px 450px 50px 450px;
        }
        .top-div{
            padding: 30px;
            background: linear-gradient(black,rgb(21, 10, 21),black);
            color: rgb(148, 145, 145);
            display: flex;
            justify-content: center;
            box-shadow: rgb(135, 10, 104) 5px 5px 30px;
            border-radius: 40px;
        }
        .inp{
            background: linear-gradient(to right,black,rgb(21, 10, 21));
            border-radius: 10px;
            padding: 10px;
            color: rgb(148, 145, 145);
            border-top-color: rgb(131, 15, 110);
            border-bottom-color: rgb(131, 15, 110);
            transition: all;
        }
        .inp:hover{
            transform: translateY(2px);
        }

        #btn{
            background: linear-gradient(to right,black,rgb(32, 44, 71));
            color: rgb(148, 145, 145);
            padding: 10px;
            border-radius: 20px;
            box-shadow: rgb(85, 85, 85) 5px 5px 10px;
            transition: all;
        }
        #btn:hover{
            transform: translateY(2px);
            background: linear-gradient(to right,black,rgb(71, 32, 32));
            color: rgb(107, 107, 107);
        }
        .failed{
            color: Red;
            display: flex;
            justify-content: center;
        }
    </style>
    <div class="top-div">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <table cellspacing="20">
                <tr><td><label for="usname">Username</label></td></tr>
                <tr><td><input class="inp" type="text" name="UNO" id="usname"></td></tr>
                <tr><td><label for="password">Password</label></td></tr>
                <tr><td><input class="inp" type="password" name="PWD" id="password"></td></tr>
                <tr>
                    <td><input id="btn" type="submit" name="NEW" value="New User?">
                        <input id="btn" type="submit" name="LOG" value="Log In"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if($_POST["LOG"]){
            $username1 = trim($_POST["UNO"]);
            $password1 = trim($_POST["PWD"]);
            $fileArray = file('text.txt');  
            $username2 = trim($fileArray[0]);
            $password2 = trim($fileArray[1]);
            if($username1==$username2 && $password1==$password2){
                header("Location: index3.php");
                session_start();
                $_SESSION["names"] = $username1;
            }
            else{
                echo "<div class='failed'> ";
                echo "<h3> Failed To Login :( </h3>";
                echo "</div>";
            }
        }
        else{
            header("Location: index2.php");
        }
    }
?>