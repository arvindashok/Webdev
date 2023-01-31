<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Kannada</title>
    <style>
       .navbar {
            display: inline-block;
            padding: 5px;
            margin: 5px;
            text-decoration: none;
            color: #fff;
            border: solid black;
        }
        footer {
            background-color: black;
            color: #fff;
            height: 200px;
        }
       .head{
        /* background-color: black; */
        margin: 5px;
        padding: 6PX;
        border: 3px solid whitesmoke;
        border-radius: 5px;  
        background-color: black;
        display: block;

       }
       .finance {
            text-align: top;
            color: #fff;
            text-decoration: none;
            font-size: medium;
        }
        body {
            display: flexbox;
            background-image: url("courses.jpeg");
            /* background-repeat: no-repeat; */
            background-position: center;
            /* background-size: contain; */
        }
    </style>

</head>
<body>
    <header class="head">
        <div><a class="finance" href="index.php">
            <img src="logo.jpg" width="100px" height="50px" alt="NO LOGO">Finance Kannada
                
            </a>
            <nav>
                <a class = "navbar" href="index.php">Home</a>
                <a class = "navbar" href="courses.php">Course</a>
                <a class = "navbar" href="login1.php">Login</a>
                <a class = "navbar" href="signup_new.html">Sign up</a>
                <input type="text" name="Search" id="Search" placeholder="Search">
            </nav>
        </div>
    </header>
    <hr>
    <div style = "position:relative; left:80px; top:2px;">
        
     
    <p>
        <h2>Courses</h2>
    </p>
    <p>
        <h4>Demo Video</h4>
        <h5></h5>
        <video controls width="500">
            <source src="video.mp4">
            <source src="video.WebM">
            This video is not available at the moment!
        </video>
        </video>
    </p>
</div>
<footer>
        <h2>Contact us</h2>
        <a href="https://www.instagram.com/finance_kannada/" target="_blank" translate="yes">Instagram</a>
</footer>
</body>
</html>