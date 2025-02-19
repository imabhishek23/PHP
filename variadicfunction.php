<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Greetings</title>
    <style>
        h1{
            background-color: brown;
            color: white;
            border: .5rem double blue;
            border-radius: 1rem;
            width: fit-content;
            margin-inline: auto;
            padding: .5rem;
            text-transform: uppercase;
        }
        h3{
            background-color: aquamarine;
            border: .1rem inset blue;
            padding: .1rem;
            text-align: center;
            width: 60%;
            margin-inline:auto;
        }
        div h3:nth-child(1){
            background-color: lightgreen;
            transform: translate(-1rem);
        }
    </style>
</head>
<body>
</body>
</html>
<?php
include('newmenu.php');
function familygreeting($familyname, ...$names) {
    echo "<h1>$familyname Family</h1>";
    echo "<div>";
    foreach ($names as $name) {
        echo "<h3>Hello $name $familyname </h3>";
    }
    echo "</div>";
}
familygreeting("Smith","John","Jane","Doe","Tom");
familygreeting("William","Jenny","Tim");
familygreeting("Greec","Adam","Anna","Angel","Alex","Ava");
?>