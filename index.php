<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <style>
        body {
            font-family: Arial;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        header {
            background: rgb(40, 40, 112);
            color: #fff;
            padding: 1em 0;
            text-align: center;
        }
        main {
            flex: 1;
            padding: 2em;
        }
       h1{
        text-align: center;
       }
    </style>
</head>
<body>
    <header>
        <h1> Resource Index</h1>
        <p>Explore various resources through the links below.</p>
    </header>
    <main>
    <a href="index.php">HomePage</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="contact.php">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="about.php">About</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="search.php">Search</a>
        
        <section>
            <h1>Welcome to JEData</h1>
            
        </section>
    </main>
    
</body>
</html>
