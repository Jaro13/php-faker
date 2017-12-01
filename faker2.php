<?php

require  "init.php";



//https://code.tutsplus.com/tutorials/using-faker-to-generate-filler-data-for-automated-testing--cms-26824




// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

// generate data by accessing properties
echo $faker->name;
 // 'Lucy Cechtelar';
 spacer();
echo $faker->address;
 // "426 Jordy Lodge
 // Cartwrightshire, SC 88120-6700"
 spacer();
echo $faker->text;
 // Dolores sit sint laboriosam dolorem culpa et autem. Beatae nam sunt fugit
 // et sit et mollitia sed.
 // Fuga deserunt tempora facere magni omnis. Omnis quia temporibus laudantium
 // sit minima sint.
 spacer();



 

 function spacer() {
   echo '<br>';
 }




/*

Faker\Provider\pl_PL\Person

<?php

// Generates a random PESEL number
echo $faker->pesel; // "40061451555"
// Generates a random personal identity card number
echo $faker->personalIdentityNumber; // "AKX383360"
// Generates a random taxpayer identification number (NIP)
echo $faker->taxpayerIdentificationNumber; // '8211575109'



Faker\Provider\pl_PL\Company

<?php

// Generates a random REGON number
echo $faker->regon; // "714676680"
// Generates a random local REGON number
echo $faker->regonLocal; // "15346111382836"



Faker\Provider\pl_PL\Payment

<?php

// Generates a random bank name
echo $faker->bank; // "Narodowy Bank Polski"
// Generates a random bank account number
echo $faker->bankAccountNumber; // "PL14968907563953822118075816"


szkoda ze nie ma nazwisk

mozna użyć angielskich

$faker->name;






*/

