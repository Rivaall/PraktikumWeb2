<?php

$nilai1 = ["id" => 1, "nim" => "011022", "uas" => 90, "uts" => 80, "tugas" => 90];
$nilai2 = ["id" => 2, "nim" => "011023", "uas" => 50, "uts" => 70, "tugas" => 97];
$nilai3 = ["id" => 3, "nim" => "011024", "uas" => 86, "uts" => 60, "tugas" => 70];
$nilai4 = ["id" => 4, "nim" => "011025", "uas" => 91, "uts" => 90, "tugas" => 100];

//buat array multi
$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">N0</th>
                <th scope="col">NIM</th>
                <th scope="col">Tugas</th>
                <th scope="col">UTS</th>
                <th scope="col">UAS</th>
        </thead>
        <tbody>
            <?php foreach ($kumpulan_nilai as $nilai) : ?>
                <tr>
                    <td> <?php echo $nilai["id"]; ?> </td>
                    <td> <?php echo $nilai["nim"]; ?> </td>
                    <td> <?php echo $nilai["tugas"]; ?> </td>
                    <td> <?php echo $nilai["uts"]; ?> </td>
                    <td> <?php echo $nilai["uas"]; ?> </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>