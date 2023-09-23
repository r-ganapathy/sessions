<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
</head>
<body>
    <style>
        body{
            background-color: rgb(7, 7, 17);
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            padding: 50px 300px 50px 300px;
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
            box-shadow: rgb(65, 64, 64) 5px 5px 10px;
            transition: all;
        }
        #btn:hover{
            transform: translateY(-5px);
            background: linear-gradient(to right,black,rgb(71, 32, 32));
        }
        .success{
            color: Green;
            display: flex;
            justify-content: center;
        }
        .failed{
            color: Red;
            display: flex;
            justify-content: center;
        }
    </style>
    <div class="top-div">
        <form action="index2.php" method="post">
            <table cellspacing="20">
                <tr>
                    <td>1.</td>
                    <td><label for="name">Name</label></td>
                    <td><input type="text" name="NAME" id="name" class="inp"></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td><label for="email">Email</label></td>
                    <td><input type="text" name="EMAIL" id="email" class="inp"></td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td><label for="gender">Gender</label></td>
                    <td><input type="radio" name="GENDER" id="gender" value="Male"> Male 
                        <input type="radio" name="GENDER" id="gender" value="Female"> Female
                        <input type="radio" name="GENDER" id="gender" value="Others"> Others</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td><label for="age">Age</label></td>
                    <td><input type="text" name="AGE" id="age" class="inp"></td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td><label for="place">Place</label></td>
                    <td><input type="text" name="PLACE" id="place" class="inp"></td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td><label for="password">Create Your Password</label></td>
                    <td><input type="password" name="PWD" id="password" class="inp"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input id="btn" type="submit" name="LOG" value="Login?"></td>
                    <td><input id="btn" type="submit" name="REG" value="Register"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
<?php

    if($_POST){
        if($_POST["REG"]){
            $fileWrite="";
            $username = $_POST["NAME"];
            $password = $_POST["PWD"];
            if($username && $password){
                $file = fopen("text.txt",'w');
                $fileWrite = fwrite($file,"$username\n$password\n");
            }
            if($fileWrite){
                echo "<div class='success'> ";
                echo "<h3> Success :)  </h3>";
                echo "</div>";
            }
            else{
                echo "<div class='failed'> ";
                echo "<h3> Failed :( </h3>";
                echo "</div>";
            }
            fclose($file);
        }
        else{
            header("Location: index1.php");
        }   
    }

?>