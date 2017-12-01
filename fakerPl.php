<?php


//https://code.tutsplus.com/tutorials/using-faker-to-generate-filler-data-for-automated-testing--cms-26824

require  "init.php";

$faker = new Faker\Generator();
$faker->addProvider(new Faker\Provider\en_US\Person($faker));
$faker->addProvider(new Faker\Provider\en_US\Address($faker));
$faker->addProvider(new Faker\Provider\en_US\PhoneNumber($faker));
$faker->addProvider(new Faker\Provider\en_US\Company($faker));
$faker->addProvider(new Faker\Provider\Lorem($faker));
$faker->addProvider(new Faker\Provider\Internet($faker));
//polskie
$faker->addProvider(new Faker\Provider\pl_PL\Person($faker));
$faker->addProvider(new Faker\Provider\pl_PL\Company($faker));
$faker->addProvider(new Faker\Provider\pl_PL\Payment($faker));


$fakerNazwiska = Faker\Factory::create('pl_PL'); // create polish
for ($i=0; $i < 10; $i++) {
  echo $fakerNazwiska->name;
  spacer();
  
}

spacer();


echo $faker->pesel;
spacer();
echo $faker->personalIdentityNumber;
spacer();
echo 'nip:' . $faker->taxpayerIdentificationNumber;
spacer();
echo $faker->regon;
spacer();
echo $faker->regonLocal;
spacer();
echo $faker->regon;
spacer();
echo $faker->bank;
spacer();
echo $faker->bankAccountNumber;


//generowanie bez providera danych kart kredytowych

$faker = Faker\Factory::create();
for ($i=0;$i<10;$i++) {
  $cc = $faker->creditCardDetails;
  $cc['security']=$faker->numberBetween(199,499);
  var_dump ($cc);spacer(2);
}



//generowanie bez prowidera adresow mailowych

$values = array();
for ($i=0; $i < 25; $i++) {
  // get a random digit, but also null sometimes
  $values []= $faker->freeEmail();
}
print_r($values);
exit;








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

