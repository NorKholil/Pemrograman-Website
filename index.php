

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <style>
        * {
            font-family: 'Poppins';
            margin: 0;
            padding: 0;
        }
        .tabel1{
        border: 3px solid black;
        border-spacing: 3px;
        width: 500px;
        height: 200px;
        margin: 200px 434px 222px 434px;
        position: absolute;
        font-family: sans-serif;
        font-size: 18px;   
        background-color: white;

        }
		.button{
		background: radial-gradient(159.97% 67694.69% at 0% 50%, #093BF7 0%, rgba(11, 238, 253, 0.633947) 86.46%, rgba(9, 236, 251, 0.28886) 99.98%, rgba(44, 223, 239, 0.140625) 99.99%, rgba(0, 221, 208, 0) 100%);
		color: white;
        margin: auto;
        border-radius: 5px;
        padding: 4px;
        font-size: 15px;
		}

        .tabel1 th {
            background: radial-gradient(159.97% 67694.69% at 0% 50%, #093BF7 0%, rgba(11, 238, 253, 0.633947) 86.46%, rgba(9, 236, 251, 0.28886) 99.98%, rgba(44, 223, 239, 0.140625) 99.99%, rgba(0, 221, 208, 0) 100%);
			color: white;
        }

        .tabel1,th,td {
            padding: 3px 3px 3px 3px;
        }
        .message{
            color: red;
        }
        .parent {
            height: 800px;
            background-image: url(Bocah.png);
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="parent">
            <form action="login.php" method="POST">
                <table class="tabel1">
                    <tr>
                        <th colspan="3">Form Login</th>
                    </tr>
                    <tr>
                        <td colspan="3"> <hr> </td>
                    </tr> 
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="username" placeholder="Username"> 
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td>
                            <input type="password" name="password" placeholder="Password">
                        </td>
                    </tr>  <tr>
                        <td>
                            <input class="button" type="submit" name="submit" value = "Login">
                        </td>
                    </tr> 
                </table>
            </form>
    </div>
</body>
</html>

