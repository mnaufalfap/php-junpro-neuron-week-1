<?php

// Variabel
$angka = 10;
$huruf = 'A';
$boolean = true;
$float = 3.14;
$array = array(1, 2, 3);
$objek = new stdClass();

// Konstanta
define('PI', 3.14159);
define('APP_NAME', 'MyApp');

// Operator
// Operator Aritmatika
$angka1 = 10;
$angka2 = 5;
$hasilTambah = $angka1 + $angka2;
$hasilKurang = $angka1 - $angka2;
$hasilKali = $angka1 * $angka2;
$hasilBagi = $angka1 / $angka2;
$hasilModulo = $angka1 % $angka2;
$hasilPangkat = $angka1 ** $angka2;

// Operator Penugasan
$x = 10;
$y = 5;
$x += $y; // $x = $x + $y;
$x -= $y; // $x = $x - $y;
$x *= $y; // $x = $x * $y;
$x /= $y; // $x = $x / $y;
$x %= $y; // $x = $x % $y;

// Operator Pembanding
$nilai1 = 10;
$nilai2 = 5;
$lebihBesar = $nilai1 > $nilai2;
$lebihKecil = $nilai1 < $nilai2;
$samaDengan = $nilai1 == $nilai2;
$tidakSama = $nilai1 != $nilai2;
$lebihBesarSama = $nilai1 >= $nilai2;
$lebihKecilSama = $nilai1 <= $nilai2;

// Operator Logika
$benar = true;
$salah = false;
$and = $benar && $salah;
$or = $benar || $salah;
$not = !$benar;

// Operator Increment dan Decrement
$a = 5;
$a++; // $a = $a + 1;
$b = 10;
$b--; // $b = $b - 1;

// Operator String
$namaDepan = "John";
$namaBelakang = "Doe";
$namaLengkap = $namaDepan . " " . $namaBelakang;

// Operator Ternary
$umur = 20;
$status = ($umur >= 18) ? "Dewasa" : "Anak-anak";

// Operator Array
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$arrayGabungan = $array1 + $array2;

// Operator Bitwise
$x = 5; // Representasi biner: 00000101
$y = 3; // Representasi biner: 00000011
$andBitwise = $x & $y; // Hasil: 00000001 (1 dalam desimal)
$orBitwise = $x | $y; // Hasil: 00000111 (7 dalam desimal)
$xorBitwise = $x ^ $y; // Hasil: 00000110 (6 dalam desimal)
$notBitwise = ~$x; // Hasil: 11111010 (-6 dalam desimal)
$geserKiri = $x << 1; // Hasil: 00001010 (10 dalam desimal)
$geserKanan = $x >> 1; // Hasil: 00000010 (2 dalam desimal)

// Percabangan 
// Percabangan if
$nilai = 80;

if ($nilai >= 80) {
    echo "Selamat, Anda lulus!";
}

// Percabangan if-else
$nilai = 70;

if ($nilai >= 80) {
    echo "Selamat, Anda lulus!";
} else {
    echo "Maaf, Anda tidak lulus.";
}

// Percabangan if-elseif-else
$nilai = 75;

if ($nilai >= 80) {
    echo "Selamat, Anda lulus dengan baik!";
} elseif ($nilai >= 70) {
    echo "Selamat, Anda lulus!";
} else {
    echo "Maaf, Anda tidak lulus.";
}

// Percabangan switch-case
$hari = "Selasa";

switch ($hari) {
    case "Senin":
        echo "Hari ini adalah Senin.";
        break;
    case "Selasa":
        echo "Hari ini adalah Selasa.";
        break;
    case "Rabu":
        echo "Hari ini adalah Rabu.";
        break;
    default:
        echo "Hari ini bukan Senin, Selasa, atau Rabu.";
}

// Percabangan nested if
$nilai = 75;
$absensi = 80;

if ($nilai >= 70) {
    if ($absensi >= 75) {
        echo "Selamat, Anda lulus!";
    } else {
        echo "Maaf, Anda tidak lulus karena absensi rendah.";
    }
} else {
    echo "Maaf, Anda tidak lulus karena nilai rendah.";
}

// Percabangan ternary
$nilai = 85;
$keterangan = ($nilai >= 80) ? "Lulus" : "Tidak Lulus";
echo $keterangan;

// Percabangan dengan operator logika
$nilai = 75;
$absensi = 80;

if ($nilai >= 70 && $absensi >= 75) {
    echo "Selamat, Anda lulus!";
} else {
    echo "Maaf, Anda tidak lulus.";
}

// Percabangan dengan operator logika alternatif
$nilai = 75;
$absensi = 80;

if ($nilai >= 70 || $absensi >= 75) {
    echo "Selamat, Anda lulus!";
} else {
    echo "Maaf, Anda tidak lulus.";
}

// Percabangan dengan operator logika dan operator perbandingan
$nilai = 75;
$absensi = 80;

if (($nilai >= 70 && $absensi >= 75) || $nilai == 100) {
    echo "Selamat, Anda lulus!";
} else {
    echo "Maaf, Anda tidak lulus.";
}

// Percabangan dengan operator in_array
$buah = "apel";

if (in_array($buah, array("apel", "jeruk", "mangga"))) {
    echo "Buah tersedia.";
} else {
    echo "Buah tidak tersedia.";
}

// Percabangan dengan operator instanceof
class Mobil
{
}

$mobil = new Mobil();

if ($mobil instanceof Mobil) {
    echo "Variabel ini adalah instance dari kelas Mobil.";
} else {
    echo "Variabel ini bukan instance dari kelas Mobil.";
}

// Percabangan dengan isset
$nama = "John";
$umur = 25;

if (isset($nama, $umur)) {
    echo "Variabel nama dan umur telah di-set.";
} else {
    echo "Variabel nama dan umur belum di-set.";
}


// Perulangan
// Perulangan for
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

// Perulangan while
$j = 1;
while ($j <= 10) {
    echo $j . " ";
    $j++;
}

// Perulangan do-while
$k = 1;
do {
    echo $k . " ";
    $k++;
} while ($k <= 10);

// Perulangan foreach pada array
$buah = array("apel", "jeruk", "mangga");
foreach ($buah as $item) {
    echo $item . " ";
}

// Perulangan foreach pada array dengan indeks
$buah = array("apel", "jeruk", "mangga");
foreach ($buah as $index => $item) {
    echo $index . ": " . $item . " ";
}

// Perulangan foreach pada associative array
$nilai = array("Matematika" => 90, "Fisika" => 85, "Kimia" => 95);
foreach ($nilai as $mapel => $skor) {
    echo $mapel . ": " . $skor . " ";
}

// Perulangan while dengan break
$x = 1;
while ($x <= 10) {
    echo $x . " ";
    if ($x == 5) {
        break;
    }
    $x++;
}

// Perulangan for dengan continue
for ($y = 1; $y <= 10; $y++) {
    if ($y % 2 == 0) {
        continue;
    }
    echo $y . " ";
}

// Perulangan nested for
for ($a = 1; $a <= 3; $a++) {
    for ($b = 1; $b <= 3; $b++) {
        echo $a . "-" . $b . " ";
    }
}

// Perulangan nested while
$c = 1;
while ($c <= 3) {
    $d = 1;
    while ($d <= 3) {
        echo $c . "-" . $d . " ";
        $d++;
    }
    $c++;
}

// Perulangan nested do-while
$e = 1;
do {
    $f = 1;
    do {
        echo $e . "-" . $f . " ";
        $f++;
    } while ($f <= 3);
    $e++;
} while ($e <= 3);

// Perulangan while dengan label
$g = 1;
while ($g <= 3) {
    $h = 1;
    while ($h <= 3) {
        echo $g . "-" . $h . " ";
        if ($g == 2 && $h == 2) {
            break;
        }
        $h++;
    }
    $g++;
}

// Perulangan for dengan label
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo $i . "-" . $j . " ";
        if ($i == 2 && $j == 2) {
            break;
        }
    }
}

// Perulangan do-while dengan label
$k = 1;
do {
    $l = 1;
    do {
        echo $k . "-" . $l . " ";
        if ($k == 2 && $l == 2) {
            break;
        }
        $l++;
    } while ($l <= 3);
    $k++;
} while ($k <= 3);

// Perulangan while dengan continue dan label
$m = 1;
while ($m <= 3) {
    $n = 1;
    while ($n <= 3) {
        if ($m == 2 && $n == 2) {
            $n++;
            continue;
        }
        echo $m . "-" . $n . " ";
        $n++;
    }
    $m++;
}

// Perulangan for dengan continue dan label
for ($o = 1; $o <= 3; $o++) {
    for ($p = 1; $p <= 3; $p++) {
        if ($o == 2 && $p == 2) {
            continue;
        }
        echo $o . "-" . $p . " ";
    }
}

// Perulangan do-while dengan continue dan label
$q = 1;
do {
    $r = 1;
    do {
        if ($q == 2 && $r == 2) {
            $r++;
            continue;
        }
        echo $q . "-" . $r . " ";
        $r++;
    } while ($r <= 3);
    $q++;
} while ($q <= 3);

// Fungsi
// Fungsi tanpa parameter dan tanpa nilai kembalian
function helloWorld()
{
    echo "Hello, World!";
}

helloWorld();

// Fungsi dengan parameter
function tambah($a, $b)
{
    return $a + $b;
}

$hasil = tambah(5, 3);
echo $hasil;

// Fungsi dengan nilai kembalian berupa array
function getInfo()
{
    $nama = "John Doe";
    $umur = 25;
    $hobi = "Membaca";

    return array($nama, $umur, $hobi);
}

$info = getInfo();
echo $info[0]; // Output: John Doe

// Fungsi dengan nilai kembalian berupa multiple values (sejak PHP 7.0)
function getInfoAgain()
{
    $nama = "John Doe";
    $umur = 25;
    $hobi = "Membaca";

    return [$nama, $umur, $hobi];
}

[$nama, $umur, $hobi] = getInfoAgain();
echo $nama; // Output: John Doe

// Fungsi dengan parameter default
function greet($nama = "Guest")
{
    echo "Hello, " . $nama . "!";
}

greet(); // Output: Hello, Guest!
greet("John"); // Output: Hello, John!

// Fungsi dengan parameter variadic
function jumlahkan(...$angka)
{
    $total = 0;
    foreach ($angka as $nilai) {
        $total += $nilai;
    }
    return $total;
}

$hasil = jumlahkan(1, 2, 3, 4);
echo $hasil; // Output: 10

// Fungsi dengan referensi parameter
function tambahSatu(&$angka)
{
    $angka++;
}

$a = 5;
tambahSatu($a);
echo $a; // Output: 6

// Fungsi rekursif
function faktorial($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return $n * faktorial($n - 1);
    }
}

$hasil = faktorial(5);
echo $hasil; // Output: 120

// Fungsi anonim (anonymous function)
$salam = function ($nama) {
    echo "Halo, " . $nama . "!";
};

$salam("John"); // Output: Halo, John!

// Fungsi dengan menggunakan closure
function createCounter()
{
    $count = 0;

    return function () use (&$count) {
        return ++$count;
    };
}

$counter = createCounter();
echo $counter(); // Output: 1
echo $counter(); // Output: 2

// Fungsi dengan menggunakan static variable
function increment()
{
    static $count = 0;
    $count++;
    echo $count;
}

increment(); // Output: 1
increment(); // Output: 2

// Fungsi dengan argumen fungsi lainnya
function applyFunction($value, $function)
{
    return $function($value);
}

$hasil = applyFunction(5, function ($x) {
    return $x * 2;
});

echo $hasil; // Output: 10

// Array
// Array numerik
$buah = array("apel", "jeruk", "mangga");
echo $buah[0]; // Output: apel

// Array asosiatif
$person = array(
    "nama" => "John Doe",
    "umur" => 25,
    "pekerjaan" => "Programmer"
);
echo $person["nama"]; // Output: John Doe

// Array multidimensi
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
echo $matrix[1][2]; // Output: 6

// Array dengan indeks kustom
$days = array(
    "senin" => "Monday",
    "selasa" => "Tuesday",
    "rabu" => "Wednesday"
);
echo $days["selasa"]; // Output: Tuesday

// Array dengan fungsi range()
$numbers = range(1, 5);
print_r($numbers); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

// Array dengan fungsi array()
$fruits = array("apel", "jeruk", "mangga");
print_r($fruits); // Output: Array ( [0] => apel [1] => jeruk [2] => mangga )

// Array dengan fungsi compact()
$nama = "John Doe";
$umur = 25;
$pekerjaan = "Programmer";
$info = compact("nama", "umur", "pekerjaan");
print_r($info); // Output: Array ( [nama] => John Doe [umur] => 25 [pekerjaan] => Programmer )

// Array dengan fungsi count()
$buah = array("apel", "jeruk", "mangga");
$jumlah = count($buah);
echo $jumlah; // Output: 3

// Array dengan fungsi sizeof()
$days = array("senin", "selasa", "rabu");
$jumlah = sizeof($days);
echo $jumlah; // Output: 3

// Array dengan fungsi array_push()
$buah = array("apel", "jeruk");
array_push($buah, "mangga");
print_r($buah); // Output: Array ( [0] => apel [1] => jeruk [2] => mangga )

// Array dengan fungsi array_pop()
$buah = array("apel", "jeruk", "mangga");
$lastFruit = array_pop($buah);
echo $lastFruit; // Output: mangga

// Array dengan fungsi array_shift()
$buah = array("apel", "jeruk", "mangga");
$firstFruit = array_shift($buah);
echo $firstFruit; // Output: apel

// Array dengan fungsi array_unshift()
$buah = array("jeruk", "mangga");
array_unshift($buah, "apel");
print_r($buah); // Output: Array ( [0] => apel [1] => jeruk [2] => mangga )

// Array dengan fungsi array_merge()
$buah1 = array("apel", "jeruk");
$buah2 = array("mangga", "pisang");
$hasil = array_merge($buah1, $buah2);
print_r($hasil); // Output: Array ( [0] => apel [1] => jeruk [2] => mangga [3] => pisang )

// Array dengan fungsi array_reverse()
$buah = array("apel", "jeruk", "mangga");
$reversed = array_reverse($buah);
print_r($reversed); // Output: Array ( [0] => mangga [1] => jeruk [2] => apel )

// Array dengan fungsi array_slice()
$buah = array("apel", "jeruk", "mangga", "pisang");
$slice = array_slice($buah, 1, 2);
print_r($slice); // Output: Array ( [0] => jeruk [1] => mangga )

// Array dengan fungsi array_splice()
$buah = array("apel", "jeruk", "mangga");
array_splice($buah, 1, 1, "pisang");
print_r($buah); // Output: Array ( [0] => apel [1] => pisang [2] => mangga )

// Array dengan fungsi array_search()
$buah = array("apel", "jeruk", "mangga");
$index = array_search("jeruk", $buah);
echo $index; // Output: 1

// Array dengan fungsi in_array()
$buah = array("apel", "jeruk", "mangga");
$exist = in_array("pisang", $buah);
echo $exist; // Output: false

// Array dengan fungsi array_key_exists()
$person = array(
    "nama" => "John Doe",
    "umur" => 25,
    "pekerjaan" => "Programmer"
);
$exist = array_key_exists("umur", $person);
echo $exist; // Output: true

// Array dengan fungsi array_unique()
$numbers = array(1, 2, 3, 2, 4, 3, 5);
$unique = array_unique($numbers);
print_r($unique); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [4] => 4 [6] => 5 )

// Array dengan fungsi array_flip()
$days = array(
    "senin" => "Monday",
    "selasa" => "Tuesday",
    "rabu" => "Wednesday"
);
$flipped = array_flip($days);
print_r($flipped); // Output: Array ( [Monday] => senin [Tuesday] => selasa [Wednesday] => rabu )

// Array dengan fungsi array_keys()
$person = array(
    "nama" => "John Doe",
    "umur" => 25,
    "pekerjaan" => "Programmer"
);
$keys = array_keys($person);
print_r($keys); // Output: Array ( [0] => nama [1] => umur [2] => pekerjaan )

// Array dengan fungsi array_values()
$person = array(
    "nama" => "John Doe",
    "umur" => 25,
    "pekerjaan" => "Programmer"
);
$values = array_values($person);
print_r($values); // Output: Array ( [0] => John Doe [1] => 25 [2] => Programmer )

// Array dengan fungsi array_combine()
$keys = array("nama", "umur", "pekerjaan");
$values = array("John Doe", 25, "Programmer");
$combined = array_combine($keys, $values);
print_r($combined); // Output: Array ( [nama] => John Doe [umur] => 25 [pekerjaan] => Programmer )

// Array dengan fungsi array_push() dan array_pop()
$buah = array("apel", "jeruk");
array_push($buah, "mangga");
echo array_pop($buah); // Output: mangga

// Array dengan fungsi array_shift() dan array_unshift()
$buah = array("jeruk", "mangga");
array_unshift($buah, "apel");
echo array_shift($buah); // Output: apel

// Array dengan fungsi sort()
$buah = array("jeruk", "mangga", "apel");
sort($buah);
print_r($buah); // Output: Array ( [0] => apel [1] => jeruk [2] => mangga )

// Array dengan fungsi rsort()
$buah = array("jeruk", "mangga", "apel");
rsort($buah);
print_r($buah); // Output: Array ( [0] => mangga [1] => jeruk [2] => apel )

// Array dengan fungsi asort()
$buah = array("jeruk", "mangga", "apel");
asort($buah);
print_r($buah); // Output: Array ( [2] => apel [0] => jeruk [1] => mangga )

// Array dengan fungsi arsort()
$buah = array("jeruk", "mangga", "apel");
arsort($buah);
print_r($buah); // Output: Array ( [1] => mangga [0] => jeruk [2] => apel )

// Array dengan fungsi ksort()
$days = array(
    "senin" => "Monday",
    "selasa" => "Tuesday",
    "rabu" => "Wednesday"
);
ksort($days);
print_r($days); // Output: Array ( [rabu] => Wednesday [senin] => Monday [selasa] => Tuesday )

// Array dengan fungsi krsort()
$days = array(
    "senin" => "Monday",
    "selasa" => "Tuesday",
    "rabu" => "Wednesday"
);
krsort($days);
print_r($days); // Output: Array ( [selasa] => Tuesday [senin] => Monday [rabu] => Wednesday )

// Array dengan fungsi array_sum()
$numbers = array(1, 2, 3, 4, 5);
$sum = array_sum($numbers);
echo $sum; // Output: 15

// Array dengan fungsi array_product()
$numbers = array(2, 3, 4);
$product = array_product($numbers);
echo $product; // Output: 24

// Array dengan fungsi array_rand()
$buah = array("apel", "jeruk", "mangga");
$randomKey = array_rand($buah);
echo $buah[$randomKey]; // Output: jeruk

// Array dengan fungsi array_flip() dan array_rand()
$days = array(
    "senin" => "Monday",
    "selasa" => "Tuesday",
    "rabu" => "Wednesday"
);
$randomKey = array_rand(array_flip($days));
echo $randomKey; // Output: selasa

// Array dengan fungsi array_fill()
$numbers = array_fill(0, 5, 10);
print_r($numbers); // Output: Array ( [0] => 10 [1] => 10 [2] => 10 [3] => 10 [4] => 10 )

// Array dengan fungsi array_chunk()
$numbers = array(1, 2, 3, 4, 5, 6);
$chunks = array_chunk($numbers, 3);
print_r($chunks); // Output: Array ( [0] => Array ( [0] => 1 [1] => 2 [2] => 3 ) [1] => Array ( [0] => 4 [1] => 5 [2] => 6 ) )

// Array dengan fungsi array_reverse()
$buah = array("apel", "jeruk", "mangga");
$reversed = array_reverse($buah);
print_r($reversed); // Output: Array ( [0] => mangga [1] => jeruk [2] => apel )

// Array dengan fungsi array_merge()
$buah1 = array("apel", "jeruk");
$buah2 = array("mangga", "pisang");
$hasil = array_merge($buah1, $buah2);
print_r($hasil); // Output: Array ( [0] => apel [1] => jeruk [2] => mangga [3] => pisang )

// Array dengan fungsi array_intersect()
$buah1 = array("apel", "jeruk", "mangga");
$buah2 = array("mangga", "pisang");
$intersect = array_intersect($buah1, $buah2);
print_r($intersect); // Output: Array ( [2] => mangga )

// Array dengan fungsi array_diff()
$buah1 = array("apel", "jeruk", "mangga");
$buah2 = array("mangga", "pisang");
$diff = array_diff($buah1, $buah2);
print_r($diff); // Output: Array ( [0] => apel [1] => jeruk )

// Array dengan fungsi array_push() dan array_pop()
$stack = array();
array_push($stack, "elemen 1");
array_push($stack, "elemen 2");
echo array_pop($stack); // Output: elemen 2

// Array dengan fungsi array_shift() dan array_unshift()
$queue = array();
array_unshift($queue, "elemen 1");
array_unshift($queue, "elemen 2");
echo array_shift($queue); // Output: elemen 2

// Array dengan fungsi array_key_exists()
$person = array(
    "nama" => "John Doe",
    "umur" => 25,
    "pekerjaan" => "Programmer"
);
$exist = array_key_exists("umur", $person);
echo $exist; // Output: true

// Array dengan fungsi in_array()
$buah = array("apel", "jeruk", "mangga");
$exist = in_array("pisang", $buah);
echo $exist; // Output: false

// Array dengan fungsi array_search()
$buah = array("apel", "jeruk", "mangga");
$index = array_search("jeruk", $buah);
echo $index; // Output: 1

// Array dengan fungsi array_unique()
$numbers = array(1, 2, 3, 2, 4, 3, 5);
$unique = array_unique($numbers);
print_r($unique); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [4] => 4 [6] => 5 )

// Array dengan fungsi array_count_values()
$numbers = array(1, 2, 3, 2, 4, 3, 5);
$count = array_count_values($numbers);
print_r($count); // Output: Array ( [1] => 1 [2] => 2 [3] => 2 [4] => 1 [5] => 1 )

// Array dengan fungsi array_fill_keys()
$keys = array("a", "b", "c");
$value = "Hello";
$filled = array_fill_keys($keys, $value);
print_r($filled); // Output: Array ( [a] => Hello [b] => Hello [c] => Hello )

// Array dengan fungsi array_walk()
$buah = array("apel", "jeruk", "mangga");
array_walk($buah, function (&$value, $key) {
    $value = strtoupper($value);
});
print_r($buah); // Output: Array ( [0] => APEL [1] => JERUK [2] => MANGGA )

// Array dengan fungsi array_map()
$buah = array("apel", "jeruk", "mangga");
$uppercase = array_map('strtoupper', $buah);
print_r($uppercase); // Output: Array ( [0] => APEL [1] => JERUK [2] => MANGGA )

// Array dengan fungsi array_reduce()
$numbers = array(1, 2, 3, 4, 5);
$sum = array_reduce($numbers, function ($carry, $item) {
    return $carry + $item;
});
echo $sum; // Output: 15


// GET dan POST
// GET request: Mengambil data dari URL

// 1. Mendapatkan nilai parameter dari URL
$id = $_GET['id'];

// 2. Mengambil seluruh parameter dari URL
$params = $_GET;

// 3. Memastikan parameter ada dan tidak kosong
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $search = $_GET['search'];
}

// 4. Menampilkan data dari URL dengan escape
$name = htmlspecialchars($_GET['name']);

// POST request: Mengirim data ke server

// 5. Menangkap data dari form dengan method POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

// 6. Menangkap data dari form dengan escape
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
}

// 7. Menggunakan filter untuk validasi data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    if (!$email) {
        // Tindakan jika email tidak valid
    }
}

// 8. Menggunakan filter untuk membersihkan data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
}

// 9. Mengecek apakah ada file yang diunggah
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file'])) {
        // Proses file yang diunggah
    }
}

// 10. Membuat redirect setelah POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Proses data
    header("Location: success.php");
    exit;
}

// 11. Menggunakan sesi untuk menyimpan data
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['username'] = $_POST['username'];
}

// 12. Menghapus sesi
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    unset($_SESSION['username']);
}

// 13. Menggunakan CSRF token untuk keamanan
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['token'];
    if ($_SESSION['token'] === $token) {
        // Validasi sukses
    } else {
        // Validasi gagal
    }
}

// Fungsi Built-in yang belum ditampilkan
// Fungsi String

// 1. Menggabungkan string
$string1 = "Hello";
$string2 = "World";
$concatenated = $string1 . " " . $string2;

// 2. Mengubah string menjadi huruf kecil
$lowercase = strtolower($concatenated);

// 3. Mengubah string menjadi huruf besar
$uppercase = strtoupper($concatenated);

// 4. Mengganti bagian string dengan string lain
$replaced = str_replace("Hello", "Hi", $concatenated);

// 5. Memotong string menjadi substring
$substring = substr($concatenated, 0, 5);

// Fungsi Debugging

// 6. Menampilkan pesan ke layar
$message = "Debugging message";
echo $message;

// 7. Menampilkan informasi variabel
$number = 123;
var_dump($number);

// 8. Menampilkan pesan error
$error = "Something went wrong";
trigger_error($error, E_USER_ERROR);

// 9. Mengecek apakah fungsi atau kelas tersedia
if (function_exists("myFunction")) {
    // Melakukan sesuatu jika fungsi tersedia
}

// 10. Melakukan log pesan
$logMessage = "Log this message";
error_log($logMessage);

// Fungsi Tanggal

// 11. Mendapatkan tanggal sekarang
$currentDate = date("Y-m-d");

// 12. Mendapatkan waktu sekarang
$currentTime = date("H:i:s");

// 13. Mendapatkan tanggal dan waktu sekarang
$currentDateTime = date("Y-m-d H:i:s");

// 14. Mengubah format tanggal
$originalDate = "2023-05-25";
$formattedDate = date("d-m-Y", strtotime($originalDate));

// 15. Menghitung selisih antara dua tanggal
$startDate = "2023-05-25";
$endDate = "2023-05-30";
$diff = date_diff(date_create($startDate), date_create($endDate));
$daysDiff = $diff->days;

// 16. Menambahkan atau mengurangi waktu
$dateTime = date_create("2023-05-25 12:00:00");
date_add($dateTime, date_interval_create_from_date_string("1 day"));
date_sub($dateTime, date_interval_create_from_date_string("2 hours"));

// 17. Mendapatkan nama bulan
$monthName = date("F");

// 18. Mendapatkan nama hari
$dayName = date("l");

// 19. Mendapatkan jumlah hari dalam bulan tertentu
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, 5, 2023);

// 20. Mengubah zona waktu
date_default_timezone_set("Asia/Jakarta");

// Membaca File

// 1. Membuka file untuk dibaca
$file = fopen("data.txt", "r");

// 2. Membaca seluruh isi file ke dalam string
$contents = file_get_contents("data.txt");

// 3. Membaca file baris per baris
$file = fopen("data.txt", "r");
while (!feof($file)) {
    $line = fgets($file);
}

// Menulis ke File

// 4. Membuka file untuk ditulis
$file = fopen("data.txt", "w");

// 5. Menulis string ke dalam file
$string = "Hello, World!";
fwrite($file, $string);

// 6. Menulis baris per baris ke dalam file
$file = fopen("data.txt", "w");
$lines = array("Line 1", "Line 2", "Line 3");
foreach ($lines as $line) {
    fwrite($file, $line . "\n");
}

// Menggabungkan dan Memecah File

// 7. Menggabungkan beberapa file menjadi satu file
$file1 = "data1.txt";
$file2 = "data2.txt";
$combinedFile = "combined.txt";
file_put_contents($combinedFile, file_get_contents($file1) . file_get_contents($file2));

// 8. Membagi file menjadi beberapa bagian
$file = "large_file.txt";
$chunkSize = 1024 * 1024; // 1MB
$handle = fopen($file, "r");
$index = 1;
while (!feof($handle)) {
    $chunk = fread($handle, $chunkSize);
    file_put_contents("chunk_" . $index . ".txt", $chunk);
    $index++;
}
fclose($handle);

// Menghapus dan Memindahkan File

// 9. Menghapus file
$file = "data.txt";
unlink($file);

// 10. Memindahkan file ke lokasi baru
$file = "data.txt";
$newLocation = "folder/data.txt";
rename($file, $newLocation);

// Mengelola Direktori

// 11. Membuat direktori
$directory = "new_directory";
mkdir($directory);

// 12. Menghapus direktori beserta isinya
$directory = "old_directory";
$files = glob($directory . "/*");
foreach ($files as $file) {
    unlink($file);
}
rmdir($directory);

// 13. Membaca isi direktori
$directory = "directory";
$files = scandir($directory);

// Menyalin File

// 14. Menyalin file ke lokasi baru
$source = "data.txt";
$destination = "backup/data.txt";
copy($source, $destination);

// 15. Menyalin direktori beserta isinya
$source = "source_directory";
$destination = "destination_directory";
recursiveCopy($source, $destination);

function recursiveCopy($source, $destination)
{
    $dir = opendir($source);
    @mkdir($destination);
    while (($file = readdir($dir))) {
        if ($file != "." && $file != "..") {
            if (is_dir($source . '/' . $file)) {
                recursiveCopy($source . '/' . $file, $destination . '/' . $file);
            } else {
                copy($source . '/' . $file, $destination . '/' . $file);
            }
        }
    }
    closedir($dir);
}

// Mendapatkan Informasi File

// 16. Mendapatkan ukuran file
$file = "data.txt";
$size = filesize($file);

// 17. Mendapatkan tipe file
$file = "data.txt";
$type = mime_content_type($file);

// 18. Mendapatkan waktu modifikasi file
$file = "data.txt";
$modifiedTime = filemtime($file);

// 19. Mendapatkan atribut file
$file = "data.txt";
$attributes = stat($file);

// Mengompres dan Mengextract File

// 20. Mengompres file menjadi ZIP
$files = array("file1.txt", "file2.txt");
$zipFile = "archive.zip";
createZip($files, $zipFile);

function createZip($files, $zipFile)
{
    $zip = new ZipArchive();
    if ($zip->open($zipFile, ZipArchive::CREATE) === TRUE) {
        foreach ($files as $file) {
            $zip->addFile($file);
        }
        $zip->close();
    }
}

// Inisialisasi Session
session_start();

// Mengatur data session
$_SESSION['username'] = 'john_doe';
$_SESSION['email'] = 'john_doe@example.com';

// Mendapatkan nilai session
$username = $_SESSION['username'];
$email = $_SESSION['email'];

// Memeriksa apakah session ada
if (isset($_SESSION['username'])) {
    echo "Username: " . $_SESSION['username'] . "<br>";
}

// Menghapus session
unset($_SESSION['email']);

// Menghapus semua session
session_unset();

// Menghancurkan session
session_destroy();

// Memeriksa apakah session aktif
if (session_status() == PHP_SESSION_ACTIVE) {
    echo "Session aktif";
}

// Memeriksa apakah session ada
if (isset($_SESSION['username'])) {
    echo "Username: " . $_SESSION['username'] . "<br>";
} else {
    echo "Session tidak ada";
}

// Memeriksa apakah session kosong
if (empty($_SESSION['username'])) {
    echo "Session kosong";
}

// Memeriksa apakah session telah diinisialisasi
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

// Mengatur waktu kedaluwarsa session
$_SESSION['username'] = 'john_doe';
$_SESSION['email'] = 'john_doe@example.com';
$_SESSION['expiry_time'] = time() + (60 * 60); // Session berakhir dalam 1 jam

// Memeriksa waktu kedaluwarsa session
if (isset($_SESSION['expiry_time']) && time() > $_SESSION['expiry_time']) {
    // Session telah berakhir
    session_unset();
    session_destroy();
    echo "Session berakhir";
}

// Membuat session dengan waktu kedaluwarsa
function createSessionWithExpiry($key, $value, $expiry)
{
    $_SESSION[$key] = $value;
    $_SESSION[$key . '_expiry'] = time() + $expiry;
}

createSessionWithExpiry('username', 'john_doe', 3600); // Session berakhir dalam 1 jam

// Memeriksa waktu kedaluwarsa session dengan fungsi terpisah
function isSessionExpired($key)
{
    if (isset($_SESSION[$key . '_expiry']) && time() > $_SESSION[$key . '_expiry']) {
        return true;
    }
    return false;
}

if (isSessionExpired('username')) {
    // Session telah berakhir
    session_unset();
    session_destroy();
    echo "Session berakhir";
}

// Mengatur session dengan enkripsi
$_SESSION['username'] = encryptData('john_doe');

function encryptData($data)
{
    // Kode enkripsi
    return $encryptedData;
}

// Mendekripsi session
$username = decryptData($_SESSION['username']);

function decryptData($encryptedData)
{
    // Kode dekripsi
    return $decryptedData;
}

// Mengatur session hanya tersedia pada HTTPS
ini_set('session.cookie_secure', 1);
ini_set('session.use_only_cookies', 1);

// Mengatur domain session
ini_set('session.cookie_domain', '.example.com');

// Mengatur waktu kedaluwarsa cookie session
ini_set('session.cookie_lifetime', 3600); // Cookie session berakhir dalam 1 jam

// Mengatur path cookie session
ini_set('session.cookie_path', '/');

// Mengatur session hanya tersedia pada subdomain tertentu
ini_set('session.cookie_domain', 'subdomain.example.com');

// Mengatur session untuk pengguna tertentu
session_id('user123');
session_start();

// Membuat session flash message
function setFlashMessage($message)
{
    $_SESSION['flash_message'] = $message;
}

// Menampilkan flash message dan menghapusnya
if (isset($_SESSION['flash_message'])) {
    echo $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
}

// Mengatur session dengan menggunakan filter
session_filter('encrypt'); // Menggunakan filter enkripsi

// Menyimpan session dalam file
ini_set('session.save_handler', 'files');
ini_set('session.save_path', '/tmp/sessions');

// Menyimpan session dalam database
ini_set('session.save_handler', 'user');
ini_set('session.save_path', 'db_session_table');

// Menggunakan session dalam kelas
class User
{
    private $id;
    private $username;

    public function __construct($id, $username)
    {
        $this->id = $id;
        $this->username = $username;

        $_SESSION['user'] = $this;
    }

    public static function getCurrentUser()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        return null;
    }
}

$user = new User(1, 'john_doe');
$current_user = User::getCurrentUser();


// Class dan Object

// 1. Mendefinisikan class
class MyClass
{
    // Properties
    private $property;

    // Constructor
    public function __construct($value)
    {
        $this->property = $value;
    }

    // Methods
    public function getProperty()
    {
        return $this->property;
    }

    public function setProperty($value)
    {
        $this->property = $value;
    }
}

// 2. Membuat object dari class
$object = new MyClass('Nilai Awal');
$value = $object->getProperty();

// Inheritance (Pewarisan)

// 3. Mendefinisikan class turunan (subclass)
class ChildClass extends MyClass
{
    // Menambahkan method tambahan
    public function additionalMethod()
    {
        // Melakukan sesuatu
    }
}

// 4. Membuat object dari class turunan
$childObject = new ChildClass('Nilai Awal');
$value = $childObject->getProperty();
$childObject->additionalMethod();

// Encapsulation (Pembungkusan)

// 5. Menggunakan access modifier (public, protected, private)
class EncapsulationExample
{
    private $privateProperty;
    protected $protectedProperty;
    public $publicProperty;

    private function privateMethod()
    {
        // Melakukan sesuatu
    }

    protected function protectedMethod()
    {
        // Melakukan sesuatu
    }

    public function publicMethod()
    {
        // Melakukan sesuatu
    }
}

// 6. Mengakses property dan method dari object
$encapsulationObj = new EncapsulationExample();
$encapsulationObj->publicProperty = 'Nilai';
$value = $encapsulationObj->publicMethod();

// Abstraction (Abstraksi)

// 7. Mendefinisikan class abstrak
abstract class AbstractClass
{
    // Mendefinisikan method abstrak
    abstract public function abstractMethod();

    // Mengimplementasikan method non-abstrak
    public function concreteMethod()
    {
        // Melakukan sesuatu
    }
}

// 8. Membuat class turunan yang mengimplementasikan class abstrak
class ConcreteClass extends AbstractClass
{
    // Mengimplementasikan method abstrak
    public function abstractMethod()
    {
        // Melakukan sesuatu
    }
}

// 9. Membuat object dari class turunan
$concreteObj = new ConcreteClass();
$concreteObj->abstractMethod();
$concreteObj->concreteMethod();

// Polymorphism (Polimorfisme)

// 10. Mendefinisikan interface
interface ShapeInterface
{
    public function calculateArea();
}

// 11. Mengimplementasikan interface pada class
class Circle implements ShapeInterface
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return 3.14 * $this->radius * $this->radius;
    }
}

class Square implements ShapeInterface
{
    private $sideLength;

    public function __construct($sideLength)
    {
        $this->sideLength = $sideLength;
    }

    public function calculateArea()
    {
        return $this->sideLength * $this->sideLength;
    }
}

// 12. Menggunakan objek dengan polimorfisme
$circle = new Circle(5);
$square = new Square(4);

$shapes = array($circle, $square);

foreach ($shapes as $shape) {
    echo "Area: " . $shape->calculateArea() . "<br>";
}

// Getters dan Setters

// 13. Menggunakan getters dan setters untuk mengakses property private
class GetterSetterExample
{
    private $property;

    public function getProperty()
    {
        return $this->property;
    }

    public function setProperty($value)
    {
        $this->property = $value;
    }
}

// 14. Mengakses property dengan getters dan setters
$gsObj = new GetterSetterExample();
$gsObj->setProperty('Nilai');
$value = $gsObj->getProperty();

// Magic Methods (Metode Ajaib)

// 15. Menggunakan magic methods seperti __construct, __get, dan __set
class MagicMethodsExample
{
    private $data = array();

    public function __construct()
    {
        // Melakukan sesuatu saat objek dibuat
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
}

// 16. Menggunakan objek dengan magic methods
$magicObj = new MagicMethodsExample();
$magicObj->property = 'Nilai';
$value = $magicObj->property;

// Namespaces

// 17. Menggunakan namespace untuk mengelompokkan class
namespace MyNamespace;

use Iterator;

class MyClass
{
    // Melakukan sesuatu
}

// 18. Menggunakan class dari namespace yang berbeda
$object = new MyClass();

// Autoloading

// 19. Menggunakan autoloading untuk menghindari require atau include manual
spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

// 20. Menggunakan class yang di-autoload
$object = new MyClass();

// Traits

// 21. Mendefinisikan trait
trait MyTrait
{
    public function myTraitMethod()
    {
        // Melakukan sesuatu
    }
}

// 22. Menggunakan trait pada class
class TraitExample
{
    use MyTrait;

    // Melakukan sesuatu dengan menggunakan method dari trait
    public function doSomething()
    {
        $this->myTraitMethod();
    }
}

// 23. Membuat objek dari class yang menggunakan trait
$traitObj = new TraitExample();
$traitObj->doSomething();

// Static Methods dan Properties

// 24. Mendefinisikan method dan property static
class StaticExample
{
    private static $counter = 0;

    public static function incrementCounter()
    {
        self::$counter++;
    }

    public static function getCounter()
    {
        return self::$counter;
    }
}

// 25. Menggunakan method dan property static
StaticExample::incrementCounter();
$count = StaticExample::getCounter();

// Final Classes dan Methods

// 26. Mendefinisikan class final
final class FinalClass
{
    // Melakukan sesuatu
}

// 27. Mendefinisikan method final pada class
class ParentClass
{
    final public function finalMethod()
    {
        // Melakukan sesuatu
    }
}

// 28. Membuat class turunan yang tidak bisa mengoverride method final
class ChildClass extends ParentClass
{
    // Memberikan error karena mencoba mengoverride method final
}

// Iterator

// 29. Mengimplementasikan Iterator pada class
class MyIterator implements Iterator
{
    private $position = 0;
    private $data = array('A', 'B', 'C');

    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->data[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        $this->position++;
    }

    public function valid()
    {
        return isset($this->data[$this->position]);
    }
}

// 30. Menggunakan objek dengan iterator
$iterator = new MyIterator();

foreach ($iterator as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "<br>";
}

// Dependency Injection

// 31. Menggunakan dependency injection pada constructor
class DependencyClass
{
    private $dependency;

    public function __construct($dependency)
    {
        $this->dependency = $dependency;
    }

    public function doSomething()
    {
        // Melakukan sesuatu dengan menggunakan dependency
        $this->dependency->doSomething();
    }
}

// 32. Menggunakan objek dengan dependency injection
$dependencyObj = new DependencyClass(new DependencyClass());
$dependencyObj->doSomething();

// Singleton

// 33. Menerapkan singleton pada class
class SingletonClass
{
    private static $instance;

    private function __construct()
    {
        // Melakukan sesuatu saat objek dibuat
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

// 34. Menggunakan objek singleton
$singletonObj = SingletonClass::getInstance();

// Factory

// 35. Menerapkan factory pattern pada class
class ProductFactory
{
    public static function createProduct($type)
    {
        switch ($type) {
            case 'A':
                return new ProductA();
                break;
            case 'B':
                return new ProductB();
                break;
            default:
                return null;
                break;
        }
    }
}

// 36. Menggunakan factory untuk membuat objek
$productA = ProductFactory::createProduct('A');
$productB = ProductFactory::createProduct('B');

// Observer

// 37. Menerapkan observer pattern pada class
interface Observer
{
    public function update($data);
}

class Subject
{
    private $observers = array();

    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function notifyObservers($data)
    {
        foreach ($this->observers as $observer) {
            $observer->update($data);
        }
    }
}

// 38. Menggunakan observer untuk menerima pembaruan
class ConcreteObserver implements Observer
{
    public function update($data)
    {
        // Melakukan sesuatu dengan data yang diterima
    }
}

// 39. Membuat objek observer dan subject
$observer = new ConcreteObserver();
$subject = new Subject();
$subject->addObserver($observer);
$subject->notifyObservers($data);

// Model

class User
{
    private $id;
    private $username;
    private $email;

    public function __construct($id, $username, $email)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

class UserRepository
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getById($id)
    {
        // Kode untuk mengambil data pengguna dari database berdasarkan ID
        // ...

        // Contoh penggunaan data palsu
        $data = [
            'id' => 1,
            'username' => 'john_doe',
            'email' => 'john_doe@example.com'
        ];

        return new User($data['id'], $data['username'], $data['email']);
    }
}

class Product
{
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

class ProductRepository
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getById($id)
    {
        // Kode untuk mengambil data produk dari database berdasarkan ID
        // ...

        // Contoh penggunaan data palsu
        $data = [
            'id' => 1,
            'name' => 'Product A',
            'price' => 10.99
        ];

        return new Product($data['id'], $data['name'], $data['price']);
    }
}

// View

class UserView
{
    public function renderUser($user)
    {
        echo "User ID: " . $user->getId() . "<br>";
        echo "Username: " . $user->getUsername() . "<br>";
        echo "Email: " . $user->getEmail() . "<br>";
    }
}

class ProductView
{
    public function renderProduct($product)
    {
        echo "Product ID: " . $product->getId() . "<br>";
        echo "Name: " . $product->getName() . "<br>";
        echo "Price: $" . $product->getPrice() . "<br>";
    }
}

// Controller

class UserController
{
    private $userRepository;
    private $userView;

    public function __construct($userRepository, $userView)
    {
        $this->userRepository = $userRepository;
        $this->userView = $userView;
    }

    public function getUserById($id)
    {
        return $this->userRepository->getById($id);
    }

    public function renderUserById($id)
    {
        $user = $this->getUserById($id);
        $this->userView->renderUser($user);
    }
}

class ProductController
{
    private $productRepository;
    private $productView;

    public function __construct($productRepository, $productView)
    {
        $this->productRepository = $productRepository;
        $this->productView = $productView;
    }

    public function getProductById($id)
    {
        return $this->productRepository->getById($id);
    }

    public function renderProductById($id)
    {
        $product = $this->getProductById($id);
        $this->productView->renderProduct($product);
    }
}

// Database Connection

class Database
{
    // Kode untuk mengatur koneksi ke database
}

// Routing

class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = [];
    }

    public function addRoute($url, $controller, $action)
    {
        $this->routes[$url] = ['controller' => $controller, 'action' => $action];
    }

    public function handleRequest($url)
    {
        if (array_key_exists($url, $this->routes)) {
            $route = $this->routes[$url];
            $controllerName = $route['controller'];
            $actionName = $route['action'];

            $controller = new $controllerName();

            if (method_exists($controller, $actionName)) {
                $controller->$actionName();
            } else {
                echo "Action not found.";
            }
        } else {
            echo "Route not found.";
        }
    }
}

// Usage

$router = new Router();
$database = new Database();
$userRepository = new UserRepository($database);
$userView = new UserView();
$userController = new UserController($userRepository, $userView);

$productRepository = new ProductRepository($database);
$productView = new ProductView();
$productController = new ProductController($productRepository, $productView);

// Add routes
$router->addRoute('/user', 'UserController', 'renderUserById');
$router->addRoute('/product', 'ProductController', 'renderProductById');

// Handle request
$router->handleRequest('/user');
$router->handleRequest('/product');
