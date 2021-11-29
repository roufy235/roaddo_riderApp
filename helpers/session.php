<?php
function isLoggedIn() : bool {
    return (bool)($_SESSION['isLogin'] ?? false);
}

function setUserData (array $data, bool $isLogin) : void {
    $_SESSION['userData'] = $data;
    $_SESSION['isLogin'] = $isLogin;
}

function getUserData () : array {
    return $_SESSION['userData'] ?? [];
}
