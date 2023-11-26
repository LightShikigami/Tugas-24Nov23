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
        color: #fff;
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

    <form method="post" action="">
        <h2>Basic Calculation</h2>
        <input type="text" id="angka1" name="angka1" placeholder="Masukkan angka pertama" required>

        <br>
        <select id="pilihan" name="pilihan">
            <option value="1"> + </option>
            <option value="2"> x </option>
            <option value="3"> : </option>
            <option value="4"> - </option>
        </select>

        <br>

        <input type="text" id="angka2" name="angka2" placeholder="Masukkan Angka kedua" required >

        

        <input type="submit" value="Hitung">

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["angka1"];
        $num2 = $_POST["angka2"];
        $pilihan = $_POST["pilihan"];
    
        if ($num1 != null && $num2 != null) {
            if ($pilihan == 1) {
                $total = $num1 + $num2;
            } elseif ($pilihan == 2) {
                $total = $num1 * $num2;
            } elseif ($pilihan == 3) {
                $total = $num1 / $num2;
            } elseif ($pilihan == 4) { 
                $total = $num1 - $num2;
            }
            echo "<p>Hasilnya = $total</p>";
        } else {
            echo "<p>Masukkan angka</p>";
        }
    }
    ?>
    </form>

    

</body>
</html>