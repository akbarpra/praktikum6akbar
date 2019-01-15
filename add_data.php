<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="add_data.css">
    <title>Tambah Data</title>
</head>
<body>
<div class="form" >
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="form-container">
    <h2 class="form-header">Tambah Data</h2>
       <br>
    <input type="text" class="form-input" name="nis" placeholder="nis">
   <br>
    <input type="text" class="form-input" name="nama" placeholder="nama" >
    <br>
    <input type="text" class="form-input" name="alamat" placeholder="alamat">
    <br>
    <input type="text" class="form-input" name="password" placeholder="password" >
    <br>
    <input type="submit" value="simpan"</input>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
    require_once "connect.php";

    //jika field nis dan nama diisi lalu disubmit
    if(isset($_POST['nis']) && isset($_POST['nama'])){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $password = $_POST['password'];

        //tambakan data baru ke tabel
        $sql = "INSERT INTO tb_siswa VALUES ('" .$nis. "','" .$nama. "', '" .$alamat. "','" .$password. "')";
        $result = mysqli_query($connect, $sql);
        if($result){
            echo 'Data Berhasil Ditambahkan';
        }
        else {
            echo 'Gagal Menambahkan Data <br>';
            echo mysqli_error($connect);
        }
    }

    echo '<hr />';
    //memanggil file record.php untuk menampilkan hasil
    require_once "record.php";
?>

</body>
</html>
