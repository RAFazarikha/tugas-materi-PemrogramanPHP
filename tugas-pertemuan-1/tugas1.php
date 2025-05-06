<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 Pemrograman PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 30px;
            display: flex;
            justify-content: center;
        }

        form {
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }

        div {
            margin-top: 20px;
            margin-left: 20px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        h2 {
            margin-top: 30px;
            color: #333;
        }

        p {
            background-color: #e7f3fe;
            padding: 10px;
            border-left: 4px solid rgb(243, 33, 33);
            margin-top: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br><br>
        <label for="nilai">Nilai:</label><br>
        <input type="text" id="nilai" name="nilai"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <div>
        <?php
            if(isset($_POST['submit'])) {
                $nama = $_POST['nama'];
                $email = $_POST['email'];
                $nilai = $_POST['nilai'];

                echo "<h2>Data yang Dikirim:</h2>";
                echo "Nama: " . htmlspecialchars($nama) . "<br>";
                echo "Email: " . htmlspecialchars($email) . "<br>";
                echo "Nilai: " . htmlspecialchars($nilai) . "<br>";
            }

            if(isset($_POST['nilai'])) {
                $nilai = $_POST['nilai'];
                if($nilai > 70) {
                    echo "<p>Selamat Anda Telah Lulus dengan nilai $nilai</p>";
                } elseif($nilai < 70) {
                    echo "<p>Maaf Anda Remedial dengan nilai $nilai</p>";
                } else {
                    echo "<p>Nilai Anda Tidak Valid</p>";
                }
            }
        ?>
    </div>
        
</body>
</html>