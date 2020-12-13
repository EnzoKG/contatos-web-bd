<?php
function rotaBase($url="public/pages/pagina_inicial.php") 
{
    return "http://".$_SERVER['HTTP_HOST']."/$url";
}

function rotaPages($url="pagina_inicial.php")
{
    return "http://".$_SERVER['HTTP_HOST']."/public/pages/$url";
}