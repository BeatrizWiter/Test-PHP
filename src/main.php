<?php
echo "Arquivo main.php rodou <br>";

include_once __DIR__ . "/../vendor/autoload.php";

use App\model\task;

$taskEstProv = new task("Estudar para a prova");
echo $taskEstProv->title;