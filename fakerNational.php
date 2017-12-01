<?php

require  "init.php";




echo '<table>
                <thead>
                <th>French</th>
                <th>Russian</th>
                <th>English</th>
                <th>Chinese</th>
                <th>Polish</th>
                </thead>
<tr><td>';
$faker = Faker\Factory::create('fr_FR'); // create a French faker
for ($i=0; $i < 10; $i++) {
  echo $faker->name;
  spacer();
}
spacer(2);
echo '</td><td>';
$faker = Faker\Factory::create('Ru_RU'); // create Russian
for ($i=0; $i < 10; $i++) {
  echo $faker->name;
  spacer();
}
spacer(2);
echo '</td><td>';
$faker = Faker\Factory::create('En_US'); // create English
for ($i=0; $i < 10; $i++) {
  echo $faker->name;
  spacer();

}

spacer(2);
echo '</td><td>';
$faker = Faker\Factory::create('zh_CN'); // create Chinese
for ($i=0; $i < 10; $i++) {
  echo $faker->name;
  spacer();
}
echo '</td></tr></table>';


spacer(2);
echo '</td><td>';
$faker = Faker\Factory::create('pl_PL'); // create polish
for ($i=0; $i < 10; $i++) {
  echo $faker->name;
  spacer();
}
echo '</td></tr></table>';





function spacer() {
    echo '<br>';
  }
 


?>