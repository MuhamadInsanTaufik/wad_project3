<?php
    $conn = mysqli_connect("localhost","root","","wad_project3");
    $result = mysqli_query($conn,"SELECT * FROM students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href = "styles.css">
</head>
<body>
    <table class="table">
    <thead>
        <tr>
            <th>Nomor</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($data = mysqli_fetch_object($result)) {
            echo
            "<tr>".
                "<td>". $data->id ."</td>".
                "<td>". $data->nim ."</td>".
                "<td>". $data->name ."</td>".
                "<td>". $data->address ."</td>".
            "</tr>";
        }
        ?>
    </tbody>
    </table>
</body>
</html>