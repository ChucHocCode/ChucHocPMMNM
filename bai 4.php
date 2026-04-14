<?php
$kq = "";
$n = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["n"];
    for ($i = 1; $i <= 10; $i++) {
        $kq .= "$n x $i = " . ($n * $i) . "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 4</title>
</head>
<body>

<h2>Bài 4: Bảng cửu chương</h2>

<form method="post">
    Nhập n:
    <input type="number" name="n" value="<?= $n ?>" required>
    <input type="submit" value="Xuất">
</form>

<p><?= $kq ?></p>

</body>
</html>
