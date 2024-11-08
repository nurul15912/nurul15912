<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>

<body>
    <h1>Berlatih Looping</h1>

    <?php
    // Soal No 1: Looping I Love PHP
    echo "<h3>Soal No 1 Looping I Love PHP</h3>";

    echo "LOOPING PERTAMA<br>";
    // Looping pertama (Ascending)
    for ($i = 10; $i <= 20; $i += 2) {
        echo $i . " - I Love PHP<br>";
    }

    echo "LOOPING KEDUA<br>";
    // Looping kedua (Descending)
    for ($i = 20; $i >= 2; $i -= 2) {
        echo $i . " - I Love PHP<br>";
    }

    // Soal No 2: Looping Array Modulo
    echo "<h3>Soal No 2 Looping Array Modulo</h3>";

    $numbers = [18, 45, 29, 61, 47, 34];
    echo "Array numbers: ";
    print_r($numbers);
    echo "<br>";

    $rest = [];
    // Looping untuk menghitung sisa bagi dengan angka 5
    foreach ($numbers as $number) {
        $rest[] = $number % 5;
    }

    echo "Array sisa bagi dengan 5 adalah: ";
    print_r($rest);
    echo "<br>";

    // Soal No 3: Looping Associative Array
    echo "<h3>Soal No 3 Looping Associative Array</h3>";

    $items = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
        ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
    ];

    // Membuat array asosiatif dari array $items
    $asociativeItems = [];
    foreach ($items as $item) {
        $asociativeItems[] = [
            'id' => $item[0],
            'name' => $item[1],
            'price' => $item[2],
            'description' => $item[3],
            'source' => $item[4]
        ];
    }

    // Menampilkan array asosiatif
    echo "<pre>";
    print_r($asociativeItems);
    echo "</pre>";

    // Soal No 4: Asterix 5x5
    echo "<h3>Soal No 4 Asterix 5x5</h3>";
    echo "Asterix: <br>";
    // Looping untuk menampilkan pola bintang
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    ?>

</body>

</html>