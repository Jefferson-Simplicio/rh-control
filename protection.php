<?php

if (!isset($_SESSION)){

    session_start();

}
if (!isset($_SESSION['id'])) {
    die("Você não pode acessar essa página porque não está logado ou não tem permissão. Fale com seu administrador para mais detalhes. <p><a href = \"login.php\">ENTRAR</a></p>");
}


?>