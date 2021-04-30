<?php

spl_autoload_register(function($nameClass) {
    $dirClass = "Model";
    $fileName = $dirClass . DIRECTORY_SEPARATOR . $nameClass . "php"; //Todo nome do arquivo e suas pastas : todo o caminho

    if (file_exists($fileName)) {
        require_once($fileName);
    }
});
