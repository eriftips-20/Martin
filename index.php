<?php
$title = "My Landing Page";
$message = "Welcome to our website!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #4f46e5, #06b6d4);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            text-align: center;
            background: rgba(255,255,255,0.1);
            padding: 50px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            max-width: 600px;
            width: 90%;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 15px 30px;
            background: #fff;
            color: #4f46e5;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background: #f3f4f6;
            transform: translateY(-2px);
        }

        footer {
            margin-top: 30px;
            font-size: 0.9rem;
            opacity: 0.8;
        }
    </style>
</head>
<body>

<div class="container">
    <h1><?php echo $message; ?></h1>

    <p>
        Build beautiful websites with PHP, HTML, and CSS.
        This is a simple landing page template.
    </p>

    <a href="#contact" class="btn">Get Started</a>

    <footer>
        &copy; <?php echo date("Y"); ?> My Company. All rights reserved.
    </footer>
</div>

</body>
</html>