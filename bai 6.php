<?php
$uscln = $bscnn = "";
$a = $b = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];

    // Tìm USCLN (Euclid)
    $x = abs($a);
    $y = abs($b);
    while ($y != 0) {
        $r = $x % $y;
        $x = $y;
        $y = $r;
    }
    $uscln = $x;

    // Tìm BSCNN
    $bscnn = abs($a * $b) / $uscln;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 6</title>
</head>
<body>

<h2>Bài 6: Tìm USCLN và BSCNN</h2>

<form method="post">
    Nhập a:
    <input type="number" name="a" value="<?= $a ?>" required><br><br>

    Nhập b:
    <input type="number" name="b" value="<?= $b ?>" required><br><br>

    <input type="submit" value="Tính">
</form>

<?php if ($uscln !== ""): ?>
    <p>USCLN: <?= $uscln ?></p>
    <p>BSCNN: <?= $bscnn ?></p>
<?php endif; ?>

</body>
</html>
