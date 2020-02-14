<?php
require '../vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;

$faker = Faker\Factory::create();

//$users =  Capsule::table('users')->get();
////dd($users);
//foreach ($users as $user)
//{
//    echo "ID: ".$user->id."<br>";
//    echo "Name: ".$user->name."<br>";
//    echo "Phone: ".$user->phone."<br>";
//    echo "Email: ".$user->email;
//    echo "<hr>";
//}



//for($i = 0; $i < 50; $i++)
//{
//    Capsule::table('users')->insert([
//        'name' => $faker->name,
//        'phone' => $faker->phoneNumber,
//        'email' => $faker->email
//    ]);
//}
//echo "done";

// update
//$id = 12;
//$users =  Capsule::table('users')->where('id', $id)->update(['name' => 'buzz lightyear']);

// Creating new data
//$user = new User();
//$user->name = $faker->name;
//$user->email = $faker->email;
//$user->phone = $faker->phoneNumber;
//$value = $user->save();
//dump($value);


// inserting data using eloquent
//for ($i = 0; $i < 50; $i++)
//{
//    $user = new User();
//    $user->name = $faker->name;
//    $user->email = $faker->email;
//    $user->phone = $faker->phoneNumber;
//    $value = $user->save();
//}


// delete
//Capsule::table('users')->where('id', '>', 1)->delete();