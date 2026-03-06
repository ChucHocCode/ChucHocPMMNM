<?php
$kq = "";
$a = $b = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];

    if ($a == 0) {
        $kq = ($b == 0) ? "Phương trình vô số nghiệm" : "Phương trình vô nghiệm";
    } else {
        $x = -$b / $a;
        $kq = "Nghiệm x = $x";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 1</title>
</head>
<body>

<h2>Bài 1: Giải phương trình bậc I</h2>

<form method="post">
    Nhập a:
    <input type="number" name="a" value="<?= $a ?>" required><br><br>

    Nhập b:
    <input type="number" name="b" value="<?= $b ?>" required><br><br>

    <input type="submit" value="Giải">
</form>

<p><?= $kq ?></p>

</body>
</html>
