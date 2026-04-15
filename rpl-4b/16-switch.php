<?php

$grade = "CC";

switch($grade) {
    case "A":
        echo "sangat bagus";
        break;
    case "B":
        echo "bagus";
        break;
    case "C":
        echo "cukup";
        break;
    case "D":
        echo "kurang";
        break;
    case "E":
        echo "sangat kurang";
        break;
    default:
        echo "nilai tidak valid";
}