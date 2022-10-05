<?php 

$nama   = $_POST['nama'];

?>

<form action='soal3b.php' method='post'>
    <label>umur anda :</label>
    <input type='text' name='umur'>
    <input type="hidden" name="nama" value="<?= $nama; ?>">
    <br><br>
    <button type='submit'>Submit</button>
</form>