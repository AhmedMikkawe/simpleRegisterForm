<?php
function isDay($day){
    if ($day > 0 && $day <= 31){
        return true;
    }else{
        return false;
    }
}
function isMonth($month){
    if ($month > 0 && $month <= 12){
        return true;
    }else{
        return false;
    }
}
function isYear($year){
    if (is_numeric($year)){
        return true;
    }else{
        return false;
    }
}
function isPhone($phone){
    if (strlen($phone) == 11 && is_numeric($phone)){
        return true;
    }else{
        return false;
    }
}
