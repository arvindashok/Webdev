<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
            display: flexbox;
            background-image: url("login2.jpg");
            background-position: center;
            /* background-size: contain; */
        }

        .button {
            background-color: red;
            padding: auto;
            margin: auto;
            border: 3px;
            border-color: black;
            border-radius: 5px;
        }

        p {
            color: aliceblue;
            font-size: large;
        }

        .h {
            color: antiquewhite;
            outline: none;
        }

        h2 {
            color: aliceblue
        }

        #User_name {
            border: none;
            color: aliceblue;
            background: transparent;
            font-size: large;
        }

        #password {
            border-radius: 5px;
            background: transparent;
            color:aliceblue;
            border: none;
            font-size: large;
        }

        button:hover {
            opacity: 0.8;
        }
        .sign{
            color: aliceblue;
            text-decoration: none;
        }

        form {
            border: none;
            outline: none;
            background: none;
            color: white;
            font-size: 25px;
            width: 100%;
            /* margin: 0 5px; */
        }
        .back{
            color: aliceblue;
        }
        
    </style>
</head>

<body onload="myalert()">
<script>
    function myalert() {
        alert("Incorrect email or password!\n");
    }
</script>
    
    <h1 class="h">Welcome to login page</h1>
    <button class="button">login with your gmail</button>
    <h2>OR</h2>
    <form action="./login_check.php" method="POST">
        <h3>Enter user name</h3>
        <input type="text" User_name="my_name" id="User_name" name="gmail"  placeholder="Enter User Name" required>
        <h3>Enter password</h3>
        <input type="password" password="my password" id="password" name="password" placeholder="Enter Password" required /><br><br>
        <button class="submit">Submit</button><br>

        
    </form><br><br> 
    <a class="sign"  href="signup_new.html">Register if new user</a><br><br>
    <a class="back"  href="index.php">Back</a>
    
    <script>
        let p=document.getElementById("password");  
        let u=document.getElementById("gmail"); 
        function verify(){
            if(p.value==""&&u.value==""){
                document.getElementById("submit").disabled=true;
            }else{ 
                let c="<?php $message?>";
                console.log(c);
                if(c=="error"){
                    document.getElementById("incomplete").innerHTML="Incorrect username/password combination";
            }
        }
    }
</script>
</body>

</html>