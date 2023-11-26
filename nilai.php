<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-color: #252525;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    h2{
        background-color: slategray;
        padding: 7px;
        border-radius: 6px;
    }

    form{
        border: 1px solid #fff;
        padding: 20px;
        background-color: azure;
        top: 50%;
        left: 50%;
        width: 25% ;
        text-align: center;
        border-radius: 12px;
    }

    label{
        display: block;
        margin-bottom: 8px;
        text-align: start;
    }

    input,select{
        width: 100%;
        padding: 8px;
        margin-bottom: 12px;
        box-sizing: border-box;
    }

    select{
        text-align-last: center;
        font-weight: bold;
        font-size: 1.6rem;
    }

    input[type="submit"]{
        background-color: #252525;
        color: white;
        cursor: pointer;
    }

</style>

</head>
<body>
    
    <form action="" method="post">
        <h2>Student Check</h2>  
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="NIM">NIM</label>
        <input type="text" name="nim" id="nim">
        <br>
        <label for="nilai">Nilai</label>
        <input type="text" name="nilai" id="nilai">
        <br>
        <label for="Absen">Total Absensi</label>
        <input type="text" name="absen" id="absen">
        <br>
        <input type="submit" value="Cek">

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"] ;
        $nim = $_POST["nim"] ;
        $nilai = $_POST["nilai"] ;
        $absen = $_POST["absen"] ;

        if ($nilai >= 70 && $absen >= 60) {
            echo "<p>$nama dinyatakan Lulus</p>";
        } else {
            echo "<p>$nama dinyatakan Tidak Lulus</p>";
        }
        }
        ?>
    </form>

    
</body>
</html>