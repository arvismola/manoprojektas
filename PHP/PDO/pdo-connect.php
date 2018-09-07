<?php
$srv = "localhost";
$sch = "arvydasdb";
$usr = "arvydas";
$psw = "qwertyQWERTY123!@#";
$cnn = new PDO("mysql:host={$srv};dbname={$sch}", $usr, $psw); // rysys su db atidaromas
$cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);