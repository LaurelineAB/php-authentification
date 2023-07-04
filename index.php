<?php

require "./logic/router.php";

if (isset($_GET["route"]))
{
    checkroute($_GET["route"]);
}
else
{
    checkroute("");
}

?>