<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Kannada</title>
    <style>
        body{
            background-color: aliceblue;
        }
        .navbar {
            display: inline-block;
            padding: 5px;
            margin: 5px;
            text-decoration: none;
            color: #fff;
            border: solid black;
        }

        .head {
            background-color: black;
            color: #fff;
            margin: 5px;
            padding: 6PX;
            border: 3px solid whitesmoke;
            border-radius: 5px;
            display: block;
            text-decoration: none;

        }

        .finance {
            text-align: top;
            color: #fff;
            text-decoration: none;
            font-size: medium;
        }

        #Financial_literacy {
            background-origin: padding-box;
            width: 440px;
            height: 240px;
            margin: auto;
            padding: auto;
            animation:new;
            animation-duration: 20s;
            animation-iteration-count: infinite;
        }

        #Investing {
            background-origin: padding-box;
            width: 440px;
            height: 240px;
            margin: auto;
            padding: auto;
            animation:new;
            animation-duration: 20s;
            animation-iteration-count: infinite;
        }

        #Nifty {
            
            width: 440px;
            height: 240px;
            margin: auto;
            padding: auto;
            animation:new;
            animation-duration: 20s;
            animation-iteration-count: infinite;
        }

        .section {
            display: inline-block;
            border: 5px solid black;
            text-decoration: none;
        }

        footer {
            background-color: black;
            color: #fff;
            height: 200px;
        }

        logo {
            font-size: large;
            border: 5px solid black;
        }

        .Animation {
            width: 100%;
            height: 500px;
            animation: examples;
            animation-duration: 10s;
            animation-iteration-count: infinite;
        }

        @keyframes examples {
            0% {
                background-image: url("image1.jpg");
            }

            25% {
                background-image: url("image2.jpg");
            }

            50% {
                background-image: url("image3.jpg");
            }

            100% {
                background-image: url("image4.jpg");
            }
        }
        .links{
            text-decoration: none;
            color: blue;
        }
        @keyframes new{
            0% {
                background-color:#aed1de ;
            }

            25% {
                background-color:rgb(226, 226, 210) ;
            }

            50% {
                background-color:bisque ;
            }

            100% {
                background-color:rgb(210, 193, 161);
            }
        }
    </style>
</head>

<body>
    <header class="head">
        <div><a class="finance" href="index.php">
                <img src="logo.jpg" width="100px" height="50px" alt="NO LOGO" class="logo">Finance Kannada
            </a>
            <nav>
                <a class="navbar" href="index.php">Home</a>
                <a class="navbar" href="courses.php">Courses</a>
                <a class="navbar" href="login1.php">Login</a>
                <a class="navbar" href="signup_new.html">Sign up</a>
                <input type="text" name="Search" id="Search" placeholder="Search">
            </nav>
        </div>
    </header>
    <hr>
    <section>
        <div id="Financial_literacy" class="section">
            <a name="Financial_literacy"></a>
            <h2>Financial literacy</h2>
            <p><span>Includes the ability to understand financial choices, plan for the future, spend wisely, and
                    manage the challenges associated with life events such as a job loss, saving for retirement, or
                    paying for a child's education</span></p>
            <a class="links" href="Financial _litrecy.php">Financial
                literacy</a>
        </div>
        <div id="Investing" class="section">
            <a name="Investing"></a>
            <h2>Investing</h2>
            <p><span>Investing is the process of buying assets that increase in value over time and provide returns in
                    the form of income payments or capital gains. In a larger sense, investing can also be about
                    spending time or money to improve your own life or the lives of others.</span></p>
            <a class="links" href="Investing.php">Investing</a>
        </div>
        <div id="Nifty" class="section">
            <a name="Nifty"></a>
            <h2>Nifty</h2>
            <p><span>Nifty stands for National Stock Exchange Fifty and is the equity benchmark index of the National
                    Stock Exchange (NSE). It was introduced by NSE in 1996, and its other aliases are Nifty 50 and CNX
                    Nifty.</span></p>
            <a class="links" href="Nifty.php">Nifty</a><br>
            
        </div>
        <div id="Images" class="Animation">
        </div>
        <div>
            <p>Learn to reduce your risk and maximise profits</p>
            <why class="why">95% of investors lose money in the market. Only 5% of investors make money. Have you
                ever wondered what these 5% people have in common?<br>
                It's the amount of resources these people have. We understand it's not possible for everyone to get the
                right set of resources. That's why finance kannada is here for you.</why><br>
            <a href="/index.php"></a><input type="button" value="GET STARTED">
            </form>
        </div>
    </section>

    <footer>
        <h2>Contact us</h2>
        <a href="https://www.instagram.com/finance_kannada/" target="_blank" translate="yes">Instagram</a>
    </footer>
</body>

</html>