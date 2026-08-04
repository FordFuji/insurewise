<?php
function date2date($date) {
    $date_exp = explode('-', $date);

    if(!empty($date_exp)) {
        return $date_exp[2].'/'.$date_exp[1].'/'.$date_exp[2];
    }
}

function priceInsurewise($price) {
    if($price == 0) {
        return '-';
    } else {
        return $price.' ฿';
    }
}
?>