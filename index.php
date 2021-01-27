<?php

// Premiere ligne

$day = date('w');
echo $day." ième jour de la semaine <br>";

$dateTime = new DateTime('2018-12-10');
echo $dateTime->format('Y.m.d')."<br>";

$hourTime = new DateTime('11:35:07');
echo $hourTime->format('H:i:s');