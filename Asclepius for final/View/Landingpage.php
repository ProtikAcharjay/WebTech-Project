<html>
    <head>
        <title>Landing Page</title>
        <style>
            body{
                margin: 0px;
                background: url(../Resources/start.jpg);
                background-size:100%;
                text-align: center;
                border: 3px solid black;
                border-radius: 23px;
                margin: 7px;
                
            }
           
            p{
                color:black;
                font-size: 17px;
            }
            button {
            height: 60px;
            width: 120px;
            margin-top: 5px;
            border-radius: 23px;
            cursor: pointer;
        }
        button:hover{
            color: azure;
            background-color: gray;
        }


        </style>
        <link rel="stylesheet" href="everything.css">
    </head>
    <body>

        <div id="logo">
            <img src="../Resources/mainlogo.jpg" alt="Logo">
            <h1 id="title">Asclepius</h1>
        </div>
        <hr><hr>
        <p>..Welcome to Asclepius. We are the fastest and secured health-care service provider..</p>
        <form action="Login.php">
            <button>Get Started-></button>
        </form>
    </body>
</html>
<?php
    include 'Footer.php';
    ?>