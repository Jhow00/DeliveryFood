<?
$servidor = 'localhost';
$banco      = 'lanchonete';
$usuario  = 'root';
$senha    = '';
$link     = mysql_connect($servidor, $usuario, $senha);
$db          = mysql_select_db($banco,$link);
if(!$link)
{
    echo "erro ao conectar ao banco de dados!";exit();
}

$SQL = "SELECT * FROM produtos";
$RS  = mysql_query($SQL);
while($RF = mysql_fetch_array($RS))
{
    echo '<pre>';
    print_r($RF);
    echo '</pre>';
}

/*
RESULTADO:
Array
(
    [0] => 1
    [id] => 1
    [1] => registro 1
    [descricao] => registro 1
)
Array
(
    [0] => 2
    [id] => 2
    [1] => registro 2 para teste
    [descricao] => registro 2 para teste
)
*/
?>