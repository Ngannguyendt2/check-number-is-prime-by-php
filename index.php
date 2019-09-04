<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
function isPrime($number)
{
    if ($number < 2) {
        return false;
    } else {
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

echo "Cac so nguyen to nho hon 100 la: ";
for ($i = 0; $i < 100; $i++) {
    if (isPrime($i)) {
        echo $i." ";
    }
}
?>

</body>
</html>
