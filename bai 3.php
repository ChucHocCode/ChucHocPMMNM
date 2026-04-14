<?php
$kq = "";
$a = $b = $c = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    if ($a+$b>$c && $a+$c>$b && $b+$c>$a) {
        if ($a==$b && $b==$c)
            $kq = "Tam giác đều";
        elseif ($a*$a+$b*$b==$c*$c || $a*$a+$c*$c==$b*$b || $b*$b+$c*$c==$a*$a)
            $kq = ($a==$b || $a==$c || $b==$c) ? "Tam giác vuông cân" : "Tam giác vuông";
        elseif ($a==$b || $a==$c || $b==$c)
            $kq = "Tam giác cân";
        else
            $kq = "Tam giác thường";
    } else {
        $kq = "Không phải tam giác";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 3</title>
</head>
<body>

<h2>Bài 3: Kiểm tra tam giác</h2>

<form method="post">
    a:
    <input type="number" name="a" value="<?= $a ?>" required><br><br>
    b:
    <input type="number" name="b" value="<?= $b ?>" required><br><br>
    c:
    <input type="number" name="c" value="<?= $c ?>" required><br><br>

    <input type="submit" value="Kiểm tra">
</form>

<p><?= $kq ?></p>

</body>
</html>
