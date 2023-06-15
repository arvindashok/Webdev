<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Litrecy</title>
    <style>
        header{
            text-align: center;
            transition: transform .2s;
            color: white;
            padding: 10px;
        }
        body{
            background-color: black;
        }
        header:hover {
            transform: scale(2);
        }
        .Animation {
            width: 100%;
            height: 500px;
            animation: examples;
            animation-duration: 20s;
            animation-iteration-count: infinite;
        }

        @keyframes examples {
            0% {
                background-image: url("fl1.jfif");
            }

            20% {
                background-image: url("fl2.jfif");
            }

            40% {
                background-image: url("fl3.jpg");
            }

            60% {
                background-image: url("fl4.jpg");
            }
            80%{
                background-image: url("fl5.jpg");
            }
            100%{
                background-image: url("fl6.jfif");
            }
        }
        section{
            color: white;
            align-items: center;
            text-align: center;
            color: white;
            text-decoration: none;
            opacity: 1;
            padding:20px 500px;
            /* display:inline-block; */
        }
        p{
            border: 5px solid silver;
            width: 400px;
            height:100px;
            display: block;
            align-items: center;
            /* display: inline-block; */
        }
        a{
            text-decoration: none;
            color:white
        }
        p.a{
            animation: identifier;
            /* display: none; */
            animation-duration: 20s;
            animation-iteration-count: infinite;
        }
        @keyframes identifier{
            0% {
                border: 5px solid silver;
                color: white;
            }

            20% {
                border: none;
                color: black;
            }

            40% {
                color: black;
                border: none;
            }

            60% {
                color: black;
                border: none;
            }
            80%{
                color: black;
                border: none;
            }
            100%{
                border: 5px solid silver;
                color: white
            }            
        }
        p.b{
            animation: identifier1;
            /* display: none; */
            animation-duration: 20s;
            animation-iteration-count: infinite;
        }
        @keyframes identifier1{
            0% {
                border: none;
                color: black;
            }

            20% {
                border: 5px solid silver;
                color: white;
            }

            40% {
                color: black;
                border: none;
            }

            60% {
                color: black;
                border: none;
            }
            80%{
                color: black;
                border: none;
            }
            100%{
                color: black;
                border: none;
            }            
        }
        p.c{
            animation: identifier2;
            /* display: none; */
            animation-duration: 20s;
            animation-iteration-count: infinite;
        }
        @keyframes identifier2{
            0% {
                border: none;
                color: black;
            }

            20% {
                color: black;
                border: none;
            }

            40% {
                border: 5px solid silver;
                color: white;
            }

            60% {
                color: black;
                border: none;
            }
            80%{
                color: black;
                border: none;
            }
            100%{
                color: black;
                border: none;
            }            
        }
        p.d{
            animation: identifier3;
            /* display: none; */
            animation-duration: 20s;
            animation-iteration-count: infinite;
        }
        @keyframes identifier3{
            0% {
                border: none;
                color: black;
            }

            20% {
                border: none;
                color: black;
            }

            40% {
                color: black;
                border: none;
            }

            60% {
                border: 5px solid silver;
                color: white;
            }
            80%{
                color: black;
                border: none;
            }
            100%{
                color: black;
                border: none;
            }            
        }
        p.e{
            animation: identifier4;
            /* display: none; */
            animation-duration: 20s;
            animation-iteration-count: infinite;
        }
        @keyframes identifier4{
            0% {
                border: none;
                color: black;
            }

            20% {
                color: black;
                border: none;
            }

            40% {
                color: black;
                border: none;
            }

            60% {
                color: black;
                border: none;
            }
            80%{
                border: 5px solid silver;
                color: white;
            }
            100%{
                color: black;
                border: none;
            }            
        }
    </style>
</head>
<body>
    <header><h1>Financial Litrecy</h1></header>
    <div id="Images" class="Animation">
    </div>
    <section>
        <p class="a">Financial literacy is the ability to understand and effectively use various financial skills, including
            personal financial management, budgeting, and investing. The meaning of financial literacy is the foundation of your
            relationship with money, and it is a lifelong journey of learning.</p>
        
        <p class="b">The term financial literacy refers to a variety of important financial skills and concepts.
            People who are financially literate are generally less vulnerable to financial fraud.</p>
        
        <p class="c"> A strong foundation of financial literacy can help support various life goals, such as saving for
            education or retirement, using debt responsibly, and running a business.</p>
        <p class="d">Key aspects to financial literacy include knowing how to create a budget, plan for retirement, manage debt,
            and track personal spending.</p>
        <p class="e">Financial literacy can be obtained through reading books, listening to podcasts, subscribing to financial
            content, or talking to a financial professional.</p><br>
        <a href="index.php">back</a>
    
</body>
</html>