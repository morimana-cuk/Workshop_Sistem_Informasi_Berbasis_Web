<?php
include("koneksi.php");

?>
<html>
    <head>
    </head>
    <body>
    <div class="container">
<h2 style="text-align: center;">UPLOAD MULTI FILE PHP</h2>

<?php
if(isset($_POST['alert'])){
if($_POST['alert']=="gagal_ukuran"){
?>
<div class="alert alert-warning">
<strong>Warning!</strong> Ukuran File Terlalu Besar
</div>
<?php
}elseif ($_POST['alert']=="gagal_ektensi") {
?>
<div class="alert alert-warning">
<strong>Warning!</strong> Ekstensi Gambar Tidak Diperbolehkan
</div>
<?php
}elseif ($_POST['alert']=="simpan") {
?>
<div class="alert alert-success">
<strong>Success!</strong> Gambar Berhasil Disimpan
</div>
<?php
} 
}
?>

<form action="proses_act.php" method="post" enctype="multipart/form-data"> 
<div class="form-group">
<label>Foto :</label>
<input type="file" name="foto[]" required="required" multiple />
<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
</div> 
<input type="submit" name="alert" value="Simpan" class="btn btn-primary">
</form>
</div>
    </body>
</html>