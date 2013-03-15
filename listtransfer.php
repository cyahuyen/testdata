<?php
require_once 'config.php';
require_once 'database.php';


$sql = "SELECT * FROM transfer";
$datas = getDatas($sql);
?>

<table style="width: 100%;"> 
    <thead> 
        <tr> 
            <th style="width:10%;text-align: center;">From User</th> 
            <th style="width:10%;text-align: center;">Amount</th>
            <th style="width:10%;text-align: center;">Currency</th>
            <th style="width:10%;text-align: center;">Forced</th>
            <th style="width:10%;text-align: center;">Option 1</th>
            <th style="width:10%;text-align: center;">Option 2</th>
            <th style="width:10%;text-align: center;">Option 3</th>
            <th style="width:20%;text-align: center;">Date</th>
            <th style="width:10%;text-align: center;">Status</th>
        </tr> 
    </thead> 
    <?php if ($datas) { ?>
        <tbody> 
            <?php foreach ($datas as $data) { ?>
                <tr> 
                    <td style="width:10%;text-align: center;"><?php echo $data['from_account']; ?></td> 
                    <td style="width:10%;text-align: center;"><?php echo $data['amount']; ?></td> 
                    <td style="width:10%;text-align: center;"><?php echo $data['currency']; ?></td> 
                    <td style="width:10%;text-align: center;"><?php echo $data['forced']; ?></td> 
                    <td style="width:10%;text-align: center;"><?php echo $data['option1']; ?></td> 
                    <td style="width:10%;text-align: center;"><?php echo $data['option2']; ?></td> 
                    <td style="width:10%;text-align: center;"><?php echo $data['option3']; ?></td> 
                    <td style="width:20%;text-align: center;"><?php echo $data['date']; ?></td> 
                    <td style="width:10%;text-align: center;"><?php echo $data['status']; ?></td> 
                </tr> 
            <?php } ?>
        </tbody> 
    <?php } ?>
</table>

