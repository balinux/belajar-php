<?php

// function dengan nilai default
function checkStatusKelulusan($grade=50, $remidial = 0){
    if($grade > 75 && $remidial < 75){
        echo "anda lulus";
    }else{
        echo "tidak lulus";
    }
}


checkStatusKelulusan();
