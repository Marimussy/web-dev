<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to hw21!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        /* General styling */
        body, html {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow-x: hidden;
        }

        hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #ddd;
        }

        /* Navbar styling */
        .navbar {
            background-color: #C0E6F5;
            border: 1px solid #ddd;
            padding: 10px;
        }

        .navbar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            font-size: 1.5em;
            text-decoration: none;
            color: #007bff;
        }

        #navbar-toggle {
            display: none;
        }

        .navbar-toggle {
            display: none;
            cursor: pointer;
            font-size: 1.5em;
            background: none;
            border: none;
            padding: 0;
        }

        .navbar-toggle span {
            display: block;
            width: 25px;
            height: 3px;
            margin: 5px 0;
            background-color: #333;
        }

        .nav {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .nav li {
            margin-right: 15px;
        }

        .nav a {
            text-decoration: none;
            color: #333;
            font-size: 1em;
        }

        @media (max-width: 768px) {
            .navbar-toggle {
                display: block;
            }

            .nav {
                display: none;
                flex-direction: column;
                background-color: #C0E6F5;
                border-top: 1px solid #ddd;
                padding: 10px;
            }

            #navbar-toggle:checked + .nav {
                display: flex;
            }
        }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">Welcome to Ahlea's Website!</a>
        <label for="navbar-toggle" class="navbar-toggle">
            <span></span>
            <span></span>
            <span></span>
        </label>
    </div>
    <input type="checkbox" id="navbar-toggle">
    <ul class="nav">
        <li><a href="?page=home">Home</a></li>
        <li><a href="?page=work">Work</a></li>
        <li><a href="?page=school">School</a></li>
        <li><a href="?page=hobbies">Hobbies</a></li>
        <li><a href="?page=contact">Contact</a></li>
        <li><a href="?page=login">Log In</a></li>
    </ul>
</nav>

<hr>

<div class="container">
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : '';
    switch ($page) {
        case "work":
            include("work.php");
            break;
        case "school":
            include("school.php");
            break;
        case "hobbies":
            include("hobbies.php");
            break;
        case "contact":
            include("contact.php");
            break;
        case "login":
            include("login.php");
            break;
        default:
            include("home.php");
            break;
    }
    ?>
</div>

</body>
</html>
