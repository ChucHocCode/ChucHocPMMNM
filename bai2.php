<?php
$kq = "";
$a = $b = $c = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    if ($a == 0) {
        $kq = "Không phải phương trình bậc II";
    } else {
        $delta = $b*$b - 4*$a*$c;
        if ($delta < 0)
            $kq = "Phương trình vô nghiệm";
        elseif ($delta == 0) {
            $x = -$b / (2*$a);
            $kq = "Nghiệm kép x = $x";
        } else {
            $x1 = (-$b + sqrt($delta)) / (2*$a);
            $x2 = (-$b - sqrt($delta)) / (2*$a);
            $kq = "x1 = $x1 ; x2 = $x2";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 2</title>
</head>
<body>

<h2>Bài 2: Giải phương trình bậc II</h2>

<form method="post">
    a:
    <input type="number" name="a" value="<?= $a ?>" required><br><br>
    b:
    <input type="number" name="b" value="<?= $b ?>" required><br><br>
    c:
    <input type="number" name="c" value="<?= $c ?>" required><br><br>

    <input type="submit" value="Giải">
</form>

<p><?= $kq ?></p>

</body>
</html>
