<?php 

$conn   = mysqli_connect("localhost","root","","testdb");

if (mysqli_connect_errno()) {
    echo "gagal melakukan koneksi database" . mysqli_connect_errno();
}

function showData()
{
    global $conn;

    $query      = mysqli_query($conn,"SELECT * FROM person");

    return $query;
}


function searchData($nama,$alamat)
{
    global $conn;

    $query_1  = "SELECT * FROM person WHERE nama LIKE '$nama' OR alamat LIKE '$alamat'";

    $query  = mysqli_query($conn,$query_1);

    return($query);
}

?>