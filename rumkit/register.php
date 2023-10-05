<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Pengguna Web</title>
    <h2>Form Register</h2>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }

        form {
            background-color: #fff;
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 95%;
        }

        table tr {
            margin: 10px 0;
        }

        table td {
            text-align: left;
            padding: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <form action="do_register.php" method="post">
        <table>
            <tr>
                <td>ID User</td>
                <td><input type="text" name="id" maxlength="15" size="25"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" maxlength="25" size="25"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pwd" maxlength="15" size="25"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="daftar" value="Daftar"></td>
            </tr>
        </table>
    </form>
</body>

</html>
