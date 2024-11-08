<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>

<body>
    <h1>Berlatih Function PHP</h1>

    <?php
    // Soal No 1: Greetings
    echo "<h3>Soal No 1 Greetings</h3>";

    // Membuat function greetings
    function greetings($name)
    {
        echo "Halo " . ucfirst($name) . ", Selamat Datang di Garuda Cyber Institute!<br>";
    }
    // Hapus komentar untuk menjalankan code!
    greetings("Bagas");
    greetings("Wahyu");
    greetings("nama peserta");

    echo "<br>";
    echo "<h3>Soal No 2 Reverse String</h3>";

    // Soal No 2: Reverse String
    // Membuat function reverseString yang mengembalikan string terbalik
    function reverseString($str)
    {
        $reversed = '';
        // Looping untuk membalikkan string
        for ($i = strlen($str) - 1; $i >= 0; $i--) {
            $reversed .= $str[$i];
        }
        return $reversed; // Mengembalikan hasil string terbalik
    }
    // Hapus komentar di bawah ini untuk menjalankan code
    echo reverseString("nama peserta") . "<br>";
    echo reverseString("Garuda Cyber Institute") . "<br>";
    echo reverseString("We Are GC-Ins Developer") . "<br>";

    echo "<br>";
    echo "<h3>Soal No 3 Palindrome</h3>";

    // Soal No 3: Palindrome
    // Membuat function palindrome yang memeriksa apakah string adalah palindrome
    function palindrome($str)
    {
        // Menggunakan fungsi reverseString untuk membalikkan string
        $reversedStr = reverseString($str);  // Mendapatkan string yang terbalik
        if ($str == $reversedStr) {
            echo "true<br>";
        } else {
            echo "false<br>";
        }
    }
    // Hapus komentar di bawah ini untuk menjalankan code
    palindrome("civic"); // true
    palindrome("nababan"); // true
    palindrome("jambaban"); // false
    palindrome("racecar"); // true

    echo "<h3>Soal No 4 Tentukan Nilai</h3>";

    // Soal No 4: Tentukan Nilai
    // Membuat function tentukan_nilai
    function tentukan_nilai($nilai)
    {
        if ($nilai >= 85 && $nilai <= 100) {
            return "Sangat Baik";
        } elseif ($nilai >= 70 && $nilai < 85) {
            return "Baik";
        } elseif ($nilai >= 60 && $nilai < 70) {
            return "Cukup";
        } else {
            return "Kurang";
        }
    }
    // Hapus komentar di bawah ini untuk menjalankan code
    echo tentukan_nilai(98); //Sangat Baik<br>
    echo tentukan_nilai(76); //Baik<br>
    echo tentukan_nilai(67); //Cukup<br>
    echo tentukan_nilai(43); //Kurang<br>
    ?>

</body>

</html>
