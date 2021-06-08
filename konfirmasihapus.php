<?php
    include ('crudmhs.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Data Mahasiswa</title>
</head>

<body>
    <?php
        $koneksi = koneksiAkademik();
        $nim = $_GET['nim'];
        $data = mysqli_query($koneksi, "select * from mahasiswa where nim='$nim'");
        $edit = mysqli_fetch_array($data);
    ?>

    <h2><?php echo 'Apakah anda akan menghapus Mahasiswa dengan nim: '.$nim ?></h2>
    <form action="proseshapus.php" method="GET">
        <input type="text" hidden name="nim" id="nim" value="<?php echo $edit['nim']; ?>">
        <input type="submit" value="OK">
        <a href="hapusmhs.php"><input type="button" value="Batal"></a>
    </form>

</body>

</html>