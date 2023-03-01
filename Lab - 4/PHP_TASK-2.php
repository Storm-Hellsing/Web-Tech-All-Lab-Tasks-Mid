<?php 

    $amount = 100;
    $vat = 15;
    $total = $amount+($vat/100);

    echo("Amount: {$amount}\r\n");
    echo("VAT: {$vat}\r\n");
    echo("Amount Including Vat: {$total}");
?>