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
        "app/domain/useCases/validations/",
        "app/domain/UseCases/User/",
        "app/domain/UseCases/Note/",
        "app/domain/Repositories/",
        "app/domain/UseCases/interfaces/Note/",
        "app/domain/useCases/interfaces/people/",
        "app/domain/useCases/interfaces/authentication/",
        "src/infrastructure/repositores/",
        "infrastructure/repositores/people/",
        "src/infrastructure/authentication/",
        "src/infrastructure/people/",
        "app/domain/useCases/interfaces/",
        "infrastructure/repositores/",
        "infrastructure/repositores/authentication/",
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