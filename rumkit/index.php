<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
    <h2>Form Login</h2>
    Belum terdaftar sebagai user? [<a href="register.php">Daftar Sekarang</a>]
    <br /><br />
    <form action="do_login.php" method="post">
        <table>
            <tr>
                <td>ID User</td>
                <td>
                    <input type="text" name="id" maxlength="15" size="25" />
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="pwd" maxlength="15" size="25" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="login" value="Login" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
