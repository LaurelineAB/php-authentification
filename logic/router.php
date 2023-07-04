<?php

function checkroute(string $route)  : void
{
    if ($route === "connexion")
    {
        require "./pages/login.php";
    }
    if ($route === "creer-un-compte")
    {
        require "./pages/register.php";
    }
    if ($route === "mon-compte" && (isset($_SESSION["user"])))
    {
        require "./pages/account.php";
    }
    else
    {
        require "./pages/homepage.php";
    }
}

?>