<?php
include_once "Stack.php";

$stack = new Stack(10);

?>
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
<form action="#" method="get">
    <input type="text" name="decimal" placeholder="type decimal">
    <button>Convert</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $decimal = $_GET['decimal'];
    while ($decimal != 0) {
        $remainder = $decimal % 2;
        $stack->push($remainder);
        $decimal /= 2;
    }
//    echo join(' ', $stack);
    echo "<pre>";
    var_dump($stack);
}

?>