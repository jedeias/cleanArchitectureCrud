<?php
function autoload($className) {
    $dirs = array(
        "interfaces/controllers/",
        "interfaces/models/",
        "interfaces/views/",
        "app/lib/database/",
        "app/lib/persistence/",
        "app/domain/Entities/",
        "app/domain/useCases/validations/",
        "app/domain/UseCases/User/",
        "app/domain/UseCases/notes/",
        "app/domain/Repositories/",
        "app/domain/UseCases/interfaces/Notes/",
        "app/domain/useCases/interfaces/people/",
        "app/domain/useCases/interfaces/authentication/",
        "app/domain/useCases/notes/",
        "src/lib/repositores/",
        "lib/repositores/people/",
        "src/lib/authentication/",
        "lib/repositores/notes/",
        "app/domain/useCases/interfaces/",
        "lib/repositores/",
        "lib/repositores/authentication/",
        "interfaces/middleware/",
        "interfaces/controller/",
        "interfaces/model/middleware/",
        "app/domain/useCases/",
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