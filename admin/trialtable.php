<!DOCTYPE html>
<html>

<head>
    <title>FACTURAS</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "charity_ngo";

    $conn = new mysqli($server, $user, $password, $db);

    if ($conn->connect_error) {

        die("CONNECTION ERROR " . $conn->connect_error);
    }

    $sql = "SELECT * FROM facturas_table ORDER BY id";
    $facturas = $conn->query($sql);

    echo '<table>

<thead>

    <tr>

        <td>ID</td>
        <td>DATE</td>
        <td>INVOICE</td>
        <td>PRICE</td>

    </tr>

</thead>'; ?>

    <!-- // while ($row = $facturas->fetch_assoc()) {

    // $month = substr($row['date'], 3);

    // // $totalMonths = "SELECT SUM(monto) as montoTotal FROM facturas_table WHERE fecha = ''"

    // echo '
    // // <tbody>

        // // <tr>


            // // <td>' . $row['id'] . '</td>
            // // <td>' . $row['invoice'] . '</td>
            // // <td>' . $row['price'] . '</td>
            // // <td>' . $row['date'] . '</td>

            // // </tr>

        // // </tbody>';
 -->


    <tbody>
        <?php
        $total = 0;
        $lastMonth = "";
        $first = true;
        while ($row = $facturas->fetch_assoc()) :
            $month = substr($row['date'], 3);
            $total += $row['price']; ?>

            <?php if (!$first && $lastMonth != $month) : ?>
                <tr>
                    <th colspan="2">Total (<?= $month ?>): </th>
                    <th colspan="2"><?= $total ?></th>
                </tr>
            <?php $total = 0;
            endif; ?>

            <tr>

                <td><?= $row['id'] ?></td>
                <td><?= $row['date'] ?></td>
                <td><?= $row['invoice'] ?></td>
                <td><?= $row['price'] ?></td>

            </tr>



        <?php $first = false;
            $lastMonth = $month;
        endwhile; ?>


        <tr>
            <th colspan="2">Total (<?= $month ?>): </th>
            <th colspan="2"><?= $total ?></th>
        </tr>
    </tbody>


    </table>


</body>

</html>