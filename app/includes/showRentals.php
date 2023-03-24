<?php

include_once "connection.php";

$j = $_POST['id3'];
$j = trim($j);

$f = $_POST['id4'];
$f = trim($f);

$sql1 = "Select * from rentals where kind_of_rentals='{$j}'";
$results = mysqli_query($connection, $sql1);
$fPrice = 0;
while ($rows = mysqli_fetch_array($results)) {
    $fPrice += $rows['Unit/Price'];
    ?>

    <tr>
        <td class="text-center">
            <?php echo $rows['kind_of_rentals']; ?>
        </td>
        <td class="text-center">
            <?php echo "( ",$f," )"; ?>
        </td>
        <td class="text-center">
            <?php echo $rows['Unit/Price'],".00"; ?>
        </td>
        <td class="text-center">
            <?php echo $rows['Unit/Price']*(int)$f, ".00"; ?>
        </td>
    </tr>

    <?php
}
?>
<tr style="border: 0;">
    <td colspan="4" class="" style="border: 0; text-align: right;" >
        <br>
        <br>
        TOTAL: <u><?php echo $fPrice*(int)$f, ".00";?></u>
    </td>
</tr>
