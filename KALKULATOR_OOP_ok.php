<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KALKULATOR 4.0</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: grey;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 10;
        }

        .calculator-box {
            background-color: cyan;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 400px;
            margin-bottom: 15px;
           
        }
        
        .calculator-box select, .calculator-box input[type="text"] {
            padding: 10px;
            font-size: 18px;
            border: 2px solid #ccc;
            border-radius: 2px;
            margin: 0px;
        }

        .calculator-box select {
            width: 80px;
        }
        
        .calculator-box label {
            font-size: 20px;
           
        }

        .calculator-box input[type="submit"] {
            background-color: black;
            color: white;
            border: none;
            padding: 16px;
            border-radius: 2px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3
        }

        .calculator-box input[type="submit"]:hover {
            background-color: #0054A5;
        }

        .hasil {
            font-size: 20px;
            font-weight: bold;
         
        }
    </style>
</head>
<body>
    <div class="calculator-box">
        <center>
            <h2>KALKULATOR SEDERHANA</h2>
        </center>
        <form action="" method="POST">
            <table class="calculator-table">
                <tr>
                    <td><label for="x">Angka pertama</label></td>
                    <td><input type="number" name="x" id="x" required></td>
                </tr>
                <tr>
                    <td><label for="y">Angka kedua</label></td>
                    <td><input type="number" name="y" id="y" required></td>
                </tr>
                <tr>
                    <td><label for="operasi">Operasi</label></td>
                    <td>
                        <select name="operasi">
                            <option value="Tambah">+</option>
                            <option value="Kurang">-</option>
                            <option value="Kali">*</option>
                            <option value="Bagi">/</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Hitung"></td>
                </tr>
            </table>
        </form>
        <div class="hasil">
        <?php
        //kalkulator dengan oop
        class Hitung
        {
            private $x;
            private $y;

            public function Tambah($x, $y)
            {
                $this->x = $x;
                $this->y = $y;
                $hasil = $this->x + $this->y;
                return $hasil;    
            }
            public function Kurang($x, $y)
            {
                $this->x = $x;
                $this->y = $y;
                $hasil = $this->x - $this->y;
                return $hasil;

            }
            public function Kali ($x,$y)
            {
                $this->x = $x;
                $this->y = $y;
                $hasil = $this->x * $this->y;
                return $hasil;

            }
            public function Bagi ($x,$y)
            {
                $this->x = $x;
                $this->y = $y;
                $hasil = $this->x / $this->y;
                return $hasil;
            }
        }

        $data = new Hitung();

        if (isset($_POST['operasi'])) {
            $x = $_POST['x'];
            $y = $_POST['y'];
            if ($_POST['operasi'] == "Tambah") {
                echo "Hasil ".$x." + ".$y." = ".$data->Tambah($x, $y);
            }  elseif($_POST['operasi'] == "Kurang") {
                echo "Hasil ".$x." - ".$y." = ".$data->Kurang($x, $y);
            }  elseif($_POST['operasi'] == "Kali") {
                echo "Hasil ".$x." * ".$y." = ".$data->Kali($x, $y);
            }  elseif($_POST['operasi'] == "Bagi") {
                echo "Hasil ".$x." / ".$y." = ".$data->Bagi($x, $y);
            }
        }
        ?>
        </div>
    </div>
</body>
</html>
