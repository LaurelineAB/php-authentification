<?php

// $host = "db.3wa.io";
// $port = "3306";
// $dbname = "laurelineagabibrac_phpj6";
// $connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

// $user = "laurelineagabibrac";
// $password = "c8b4d35a0077655c5f327ec2af4c0eac";

// $db = new PDO(
//     $connexionString,
//     $user,
//     $password
// );
session_start();

require "./logic/router.php";
require "models/User.php";
require "logic/database.php";


// require "templates/register/_register-form.phtml";

if(isset($_POST['submit-register']))
{
    if (!empty($_POST['firstName']))
    {
        $firstName = $_POST['firstName'];
    }
    if (!empty($_POST['lastName']))
    {
        $lastName = $_POST['lastName'];
    }
    if (!empty($_POST['email']))
    {
        $email = $_POST['email'];
    }
    if (!empty($_POST['password']) && !empty($_POST['confirmPassword']) && $_POST['password'] === $_POST['confirmPassword'])
    {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        // print_r($password);
    }
    $user = new User($firstName, $lastName, $email, $password);
    saveUser($user, $db);
    echo "<pre>";
    print_r($user);
    echo "/<pre>";
}

if (isset($_POST['submit-login']))
{
    if (!empty($_POST['login']))
    {
        $login = $_POST['login'];
    }
    if (!empty($_POST['password']))
    {
        $password = $_POST['password'];
    }
    $user = loadUser($login, $db);
    
    if (password_verify($password, $user->getPassword()))
    {
        $_SESSION["user"] = $user;
        $_GET['route'] = "mon-compte";
    }
    else {
        echo "Invalid password";
    }
}

if (isset($_GET['route']))
{
    checkroute($_GET['route']);
}
else
{
    checkroute("");
}


?>