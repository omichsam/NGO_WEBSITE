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

    $sql =  'select * from (
        select `id`, `invoice`, `price`, date_format(`date`, "%d-%m-%Y") `date`, date_format(`date`, "%Y-%m-%d") `ordering_format` from `facturas_table`
     union all
        select null `id`, null `invoice`, `price`, `month` `date`, date_format(str_to_date(concat("01-", `month`), "%d-%m-%Y"), "%Y-%m-32") `ordering_format` from (
           select sum(`price`) `price`, date_format(`date`, "%m-%Y") `month` from `facturas_table` group by `month`
        ) `totals`
     ) `a` order by `ordering_format` asc';

    $facturas = $conn->query($sql);

    echo '<table>

<thead>

    <tr>

        <td>ID</td>
        <td>invoice</td>
        <td>price</td>
        <td>date</td>
        <td>ordering_format</td>

    </tr>

</thead>'; ?>


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
                <td><?= $row['invoice'] ?></td>
                <td><?= $row['price'] ?></td>
                <td><?= $row['date'] ?></td>
                <td><?= $row['ordering_format'] ?></td>

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