<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Otentikasi User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }

        h2 {
            color: #007BFF;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        table {
            width: 300px;
            margin: 0 auto;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        table td {
            padding: 5px;
        }

        strong {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h2>Status Registrasi</h2>
    <?php
        if(isset($_POST['daftar'])){
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $pwd = $_POST['pwd'];

            require("connectdb.php");
            $sql = "insert into webuser(id,nama,pwd) values('$id','$nama','$pwd')";
            mysqli_query($conn, $sql);
            $num = mysqli_affected_rows($conn);
            if($num > 0){
                ?>
    Selamat anda sudah terdaftar di website kami. <br>
    [ <a href="index.php">Login</a> ] <br><br>
    <table>
        <tr>
            <td>ID</td>
            <td>:</td>
            <td><strong><?php echo $id; ?></strong></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><strong><?php echo $nama; ?></strong></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><strong><?php echo $pwd; ?></strong></td>
        </tr>
    </table>
    <?php
            } else {
                ?>
    Proses registrasi gagal. Silahkan ulangi. <br>
    [ <a href="register.php">Registrasi Kembali</a> ]
    <?php
            }
        }
    ?>
</body>

</html>
