<?php
include("DB_Scripts/povezava_na_bazo.php");
       session_start();
if(empty($_SESSION['logged_in']))
{
    header('Location: prijava.php');
    exit;
}
 ?>
Čestitke ;)
<a href="odjava.php">        <div class="">
<b>Izpiši me</b>
        </div></a>

        <br /> <br />

        <a href="kreirajNovoDatoteko.php">
          <b> kreirajNovoDatoteko </b>
        </a>
        <br />
<a href="funkcije/posljiMail.php">Pošlji mail</a>
