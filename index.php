<?php

require "./logic/router.php";

if (isset($_GET['route']))
{
    checkroute($_GET['route']);
}
else
{
    checkroute("");
}

require "models/User.php";
// require "templates/register/_register-form.phtml";

if(isset($_POST['submit']))
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
    // echo "<pre>";
    // print_r($user);
    // echo "/<pre>";
}

?>