<?php

require_once 'config.php';
require_once 'database.php';
$datas = $_GET;
$dataSave = array(
    'from_account' => $datas['from_account'],
    'amount' => $datas['amount'],
    'currency' => $datas['eg_currency'],
    'forced' => $datas['forced'],
    'option1' => $datas['option1'],
    'option2' => $datas['option2'],
    'option3' => $datas['option3'],
    'date' => date('Y-m-d H:i:s', time()),
    'status' => 'Failed',
);
if (insert('transfer', $dataSave)) {
    redir('listtransfer.php');
} else {
    echo 'Error can not update';
}
?>
