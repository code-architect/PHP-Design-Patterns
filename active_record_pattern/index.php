<?php
require '../vendor/autoload.php';

$users = User::all();

foreach ($users as $user)
{
    echo "ID: ".$user->id."<br>";
    echo "Name: ".$user->name."<br>";
    echo "Email: ".$user->email;
    echo "<hr>";
}