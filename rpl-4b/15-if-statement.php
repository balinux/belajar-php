<?php

$grade = 60;
$remidial = 60;

if($grade > 75) {
    echo"kamu lulus";
} else if($remidial >= 75) {
    echo "kamu lulus remidial";
} else {
    echo "kamu tidak lulus";
}