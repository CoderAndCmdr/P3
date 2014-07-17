<?php

use fzaninotto\faker\Factory;
$faker = Faker\Factory::create();

for ($i=0; $i < 5; $i++) {
  echo 'name: ';
  echo $faker->name;
  echo '<br>';
  echo 'address: ';
  echo $faker->address;
  echo '<br>';
  echo 'phone number: ';
  echo $faker->phoneNumber;
  echo '<br>';
  echo 'email: ';
  echo $faker->email;
  echo '<br>';
  echo '<br>';
}

 ?>