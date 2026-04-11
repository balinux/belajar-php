<?php

$nilaiMahasiswa = "Z";

switch ($nilaiMahasiswa) {
    case "A":
        echo "Anda lulus dengan nilai yang sangat baik";
        break;
    case "B":
        echo "Anda lulus dengan nilai yang baik";
        break;
    case "C":
        echo "Anda lulus dengan nilai yang cukup";
        break;
    case "D":
        echo "Anda lulus dengan nilai yang kurang";
        break;
    default:
        echo "Anda tidak lulus";
        break;
}