<?php

include_once "connection.php";

$k = $_POST['id1'];
$k = trim($k);

$t = $_POST['id2'];
$t = trim($t);

$sql1 = "Select * from materials where kind_of_materials='{$k}'";
$results = mysqli_query($connection, $sql1);
$tPrice = 0;
while ($rows = mysqli_fetch_array($results)) {
    $tPrice += $rows['Unit/Price'];
    ?>

    <tr>
        <td class="text-center">
            <?php echo $rows['kind_of_test']; ?>
        </td>
        <td class="text-center">
            <?php echo "( ",$t," )"; ?>
        </td>
        <td class="text-center">
            <?php echo $rows['Unit/Price'],".00"; ?>
        </td>
        <td class="text-center">
            <?php echo $rows['Unit/Price']*(int)$t, ".00"; ?>
        </td>
    </tr>

    <?php
}
?>
<tr style="border: 0;">
    <td colspan="4" class="" style="border: 0; text-align: right;" >
        <br>
        <br>
        TOTAL: <u><?php echo $tPrice*(int)$t, ".00";?></u>
    </td>
</tr>
