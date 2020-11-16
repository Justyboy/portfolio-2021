
<?php


if($_POST["message"]) {


mail("justin.lovett@aol.com", "Justins Portfoilo",


$_POST["message"]. "From: Justins Portfoilo");


}


?>