<?php
$hostname = "localhost";
$user = "iruri";
$password = "test123";

$database = mysqli_connect($hostname, $user, $password);
if (!$database) {
    die("데이터베이스 연결 실패 [ERROR] : ".mysqli_connect_error());
}

$sql = "SELECT * FROM sushi_2022";
$fetch_all = mysqli_query($database, $sql);

    echo "<table class='table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th scope='col'>code</th>";
    echo "<th scope='col'>location</th>";
    echo "<th scope='col'>name</th>";
    echo "<th scope='col'>type</th>";
    echo "<th scope='col'>low</th>";
    echo "<th scope='col'>high</th>";
    echo "<th scope='col'>avg</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_array($fetch_all)) {
        echo "<tr>";
        echo "<td>" . $row['code']."<td>";
        echo "<td>" . $row['location'] . "<td>";
        echo "<td>" . $row['name'] . "<td>";
        echo "<td>" . $row['type'] . "<td>";
        echo "<td>" . $row['low'] . "<td>";
        echo "<td>" . $row['high'] . "<td>";
        echo "<td>" . $row['avg'] . "<td>";
        echo "</tr>";
    }
echo "</tbody>";
echo "</table>";


mysqli_close($database);
