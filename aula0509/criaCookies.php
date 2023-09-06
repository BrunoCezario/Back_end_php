$cookie_name = "site";
$cookie_value = "Portal Visual Dicas";
//setcookie($cookie_name, $cookie_value, time() + (86400 * 30)); // 86400 = 1 dia

if(!isset($_COOKIE[$cookie_name])) { // verifica se o cookie_name está definido
     echo "O cookie'" . $cookie_name . "' não está definido!";
} else {
     echo "O valor do cookie '" . $cookie_name . "' é ".$_COOKIE['site']." !<br>";
}

//setcookie(nome, valor, expira);

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de cookies</title>
</head>
<body>
    
</body>
</html>