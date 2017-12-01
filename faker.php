<?php


require  "init.php";

$faker = Faker\Factory::create();


/*


for ($i=0;$i<10;$i++){

    $query = "INSERT INTO `users` (`name`, `username`, `city`, `state`,`country`,`email`, `company`) VALUES 
    ('$faker->name', '$faker->userName', '$faker->city', '$faker->state', '$faker->country', '$faker->email', '$faker->company')";

    mysqli_query($connection, $query);
}


*/


//tylko 1 kolumna

for ($i=0;$i<10;$i++){
    
        $query = "INSERT INTO `users` (`name`) VALUES 
        ('$faker->name')";
    
        mysqli_query($connection, $query);
    }
    











?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fake data created</title>
</head>
<body style ="margin-top: 200px; text-align:center;">

    <p>Fake data created!</p>

    <a href="index.php"><button>Want to create more?</button></a>

    
</body>
</html>