<?php

require  "init.php";


$faker = Faker\Factory::create();
$width=320;
$height=240;
echo '<img src="'.$faker->imageUrl($width, $height).'"/>';

spacer();

spacer();

spacer();

echo '<img src="'.$faker->imageUrl($width, $height, 'cats', true, 'Faker', true) .'"/>';


 function spacer() {
   echo '<br>';
 }


?>