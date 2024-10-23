<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Bakso</title>
    <style>
        body {
            background-color: #0f0f0f;
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            overflow-y: auto;
        }

        h2 {
            text-align: center;
            color: #ff006e;
        }
        h3 {
            text-align: center;
            color: #A02334;
        }

        form {
            background-color: #1a1a1a;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 0, 110, 0.6);
        }

        .nota-container {
            width: 300px; 
            height: auto; 
            background-color: #1a1a1a;
            padding: 20px;
            border-radius: 10px; 
            box-shadow: 0 0 20px rgba(255, 0, 110, 0.6);
            margin: 100px; 
            text-align: center; 
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #1a1a1a;
        }

        td, th {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ff006e;
        }

        th {
            color: #ffcc00;
            text-transform: uppercase;
        }

        td:hover {
            background-color: #ff006e;
            color: #0f0f0f;
            transition: 0.3s;
        }

        button {
            background-color: #ffcc00;
            color: #0f0f0f;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }


        button:hover {
            background-color: #ff006e;
            color: #ffffff;
        }

        td:hover {
            background-color: #ff006e;
            color: #0f0f0f;
            transition: 0.3s;
        }

        form {
            border: 2px solid #ff006e;
            animation: neon 1.5s infinite;
        }

        @keyframes neon {
            0% {
                box-shadow: 0 0 5px #ff006e, 0 0 10px #ff006e, 0 0 20px #ff006e;
            }
            50% {
                box-shadow: 0 0 10px #ff006e, 0 0 20px #ffcc00, 0 0 30px #ff006e;
            }
            100% {
                box-shadow: 0 0 5px #ff006e, 0 0 10px #ff006e, 0 0 20px #ff006e;
            }
        }
    </style>
</head>
<body>
    <?php
    // Daftar harga barang
    $harga = array(
        "urat" => 15000,
        "beranak" => 17000,
        "kerikil" => 16000,
        "mercon" => 25000,
        "iga" => 20000,
        "lava" => 25000,
        "ayam" => 12000,
        "ayam2" => 15000,
        "teh" => 3000,
        "jeruk" => 4000,
        "lemon" => 5000
    );

    // Daftar nama barang
    $nama = array(
        "urat" => "Bakso Urat",
        "beranak" => "Bakso Beranak",
        "kerikil" => "Bakso Kerikil",
        "mercon" => "Bakso Mercon",
        "iga" => "Bakso IGA",
        "lava" => "Bakso Lava",
        "ayam" => "Mie Ayam",
        "ayam2" => "Mie Ayam Bakso",
        "teh" => "Es Teh",
        "jeruk" => "Es Jeruk",
        "lemon" => "Lemon Tea"
    );

    // Jika form disubmit, tampilkan nota pembelian
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $total = 0;
        $item_terpilih = [];

        // Mengecek barang yang dipilih
        foreach ($harga as $key => $value) {
            if (isset($_POST[$key])) {
                $item_terpilih[$key] = $value;
                $total += $value;
            }
        }

        // Menampilkan tabel nota pembelian
        if (count($item_terpilih) > 0) {
            echo "<div class='nota-container'>";
            echo "<h2>Bakso Suka Suka Gesang</h2>";
            echo "<h3>Nota Pembelian</h3>";
            echo "<table>";
            echo "<tr><th>Nama Barang</th><th>Harga</th></tr>";

            foreach ($item_terpilih as $key => $value) {
                echo "<tr><td>" . $nama[$key] . "</td><td>" . $value . "</td></tr>";
            }

            echo "<tr><td><strong>Total</strong></td><td><strong>$total</strong></td></tr>";
            echo "</table>";
            echo "</div>";
        } else {
            echo "<p class='center'>Tidak ada barang yang dipilih.</p>";
        }
    } else {
    ?>

    <form action="" method="post">
        <h2>Bakso Suka-Suka Gesang</h2>
        <h3>Silahkan Pilih Barang</h3>
        <table>
            <tr>
                <td>Pilih Menu</td>
                <td>Nama Makanan</td>
                <td>Harga</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="urat"></td>
                <td>Bakso Urat</td>
                <td>15000</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="beranak"></td>
                <td>Bakso Beranak</td>
                <td>17000</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="kerikil"></td>
                <td>Bakso Kerikil</td>
                <td>16000</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mercon"></td>
                <td>Bakso Mercon</td>
                <td>25000</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="iga"></td>
                <td>Bakso IGA</td>
                <td>20000</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="lava"></td>
                <td>Bakso Lava</td>
                <td>25000</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="ayam"></td>
                <td>Mie Ayam</td>
                <td>12000</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="ayam2"></td>
                <td>Mie Ayam Bakso</td>
                <td>15000</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="teh"></td>
                <td>Es Teh</td>
                <td>3000</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="jeruk"></td>
                <td>Es Jeruk</td>
                <td>4000</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="lemon"></td>
                <td>Lemon Tea</td>
                <td>5000</td>
            </tr>
        </table>
        <button type="submit">Beli</button>
    </form>

    <?php
    }
    ?>
</body>
</html>
