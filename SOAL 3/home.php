<?php 

include 'function.php';

$query = mysqli_query($conn,"SELECT * FROM person");

if (isset($_POST['cari'])) {
    $query  = searchData($_POST['nama'],$_POST['alamat']);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>
</head>

<body>

    <form action="" method="post">
        <label for="">Nama :</label>
        <input type="text" name="nama"><br><br>
        <label for="">Alamat :</label>
        <input type="text" name="alamat">
        <button type="submit" name="cari">Search</button>
    </form>
    <br><hr>

    <table border=1>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Hobi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($query as $key): ?>
            <tr>
                <td><?= $key['nama']; ?></td>
                <td><?= $key['alamat']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>