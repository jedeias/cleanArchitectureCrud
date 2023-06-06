<?php
function autoload($className) {
    $dirs = array(
        "interfaces/controllers/",
        "interfaces/models/",
        "interfaces/views/",
        "app/interfaces/controllers/",
        "app/interfaces/models/",
        "app/interfaces/views/",
        "app/infrastructure/database/",
        "app/infrastructure/persistence/",
        "app/domain/Entities/",
        "app/domain/Entities/validations/",
        "app/domain/UseCases/User/",
        "app/domain/UseCases/Note/",
        "app/domain/Repositories/"
    );

    foreach ($dirs as $dir) {
        $file = $_SERVER['DOCUMENT_ROOT'] . '/cleanArchitectureCrud/src/' . $dir . $className . '.php';
        if (file_exists($file)) {
            require_once($file);
            return;
        }
    }
}

spl_autoload_register('autoload');


?>