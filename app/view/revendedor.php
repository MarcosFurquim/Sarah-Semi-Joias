Revendedor View
<?php
require_once (dirname(__DIR__).'/model/Revendedor.php');
$revendedor = Revendedor::getRevendedor(1);
var_dump($revendedor);