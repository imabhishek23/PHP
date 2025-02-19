<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color:aqua;
        }
        nav ul li {
            float: left;
            margin: .1rem;
            border: .2rem solid red;
            border-radius: 1rem;
        }
        nav ul li a {
            display: block;
            text-align: center;
            font-weight: bolder;
            font-style: oblique;
            text-transform: uppercase;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav ul li a:hover {
            background-color: #111;
            color: white;
            border-radius: .8rem;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="variadicfunction.php">Variadic</a></li>
            <li><a href="multidimensional.php">MDimension</a></li>
            <li><a href="arrayreverse.php">Array Reverse</a></li>
        </ul>
    </nav>
</body>
</html>