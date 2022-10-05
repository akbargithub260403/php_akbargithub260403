<?php 

$nama   = $_POST['nama'];
$umur   = $_POST['umur'];

?>

<form action='result.php' method='post'>
    <label>hobi anda :</label>
    <input type='text' name='hobi'>
    <input type="hidden" name="nama" value="<?= $nama; ?>">
    <input type="hidden" name="umur" value="<?= $umur; ?>">
    <br><br>
    <button type='submit' name='submit'>Submit</button>
</form>