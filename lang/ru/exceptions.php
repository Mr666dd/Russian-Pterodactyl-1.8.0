<?php

return [
    'daemon_connection_failed' => 'Произошло исключение при попытке связаться с демоном, что привело к HTTP/:code код ответа. Это исключение было зарегистрировано.',
    'node' => [
        'servers_attached' => 'Нода не должна иметь серверов, связанных с ней, чтобы быть удаленной.',
        'daemon_off_config_updated' => 'Конфигурация демона <strong>была обновлена</strong>, however there was an error encountered while attempting to automatically update the configuration file on the Daemon. You will need to manually update the configuration file (config.yml) for the daemon to apply these changes.однако при попытке автоматического обновления файла конфигурации на демоне произошла ошибка. Вам потребуется вручную обновить файл конфигурации (config.yml), чтобы демон применил эти изменения.',
    ],
    'allocations' => [
        'server_using' => 'В настоящее время этому расположению назначен сервер. Выделение может быть удалено только в том случае, если в данный момент сервер не назначен.',
        'too_many_ports' => 'Одновременное добавление более 1000 портов в одном диапазоне не поддерживается.',
        'invalid_mapping' => 'Отображение, предусмотренное для :port было недействительно и не могло быть обработано.',
        'cidr_out_of_range' => 'Нотация CIDR позволяет использовать маски только в диапазоне от /25 до /32.',
        'port_out_of_range' => 'Порты в выделении должны быть больше 1024 и меньше или равны 65535.',
    ],
    'nest' => [
        'delete_has_servers' => 'Ядроо с подключенными к нему активными серверами нельзя удалить с панели.',
        'egg' => [
            'delete_has_servers' => 'Ядро с подключенными к нему активными серверами не может быть удалено с панели.',
            'invalid_copy_id' => 'Ядро, выбранное для копирования сценария, либо не существует, либо копирует сам сценарий.',
            'must_be_child' => 'Директива "Копировать настройки из" для этого ядра должна быть дочерней опцией для выбранного ядра.',
            'has_children' => 'Это ядро является родителем одного или нескольких других ядер. Пожалуйста, удалите эти ядра, прежде чем удалять это ядро.',
        ],
        'variables' => [
            'env_not_unique' => 'The environment variable :name must be unique to this Egg.',
            'reserved_name' => 'The environment variable :name is protected and cannot be assigned to a variable.',
            'bad_validation_rule' => 'The validation rule ":rule" is not a valid rule for this application.',
        ],
        'importer' => [
            'json_error' => 'There was an error while attempting to parse the JSON file: :error.',
            'file_error' => 'The JSON file provided was not valid.',
            'invalid_json_provided' => 'The JSON file provided is not in a format that can be recognized.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Editing your own subuser account is not permitted.',
        'user_is_owner' => 'You cannot add the server owner as a subuser for this server.',
        'subuser_exists' => 'A user with that email address is already assigned as a subuser for this server.',
    ],
    'databases' => [
        'delete_has_databases' => 'Cannot delete a database host server that has active databases linked to it.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'The maximum interval time for a chained task is 15 minutes.',
    ],
    'locations' => [
        'has_nodes' => 'Cannot delete a location that has active nodes attached to it.',
    ],
    'users' => [
        'node_revocation_failed' => 'Failed to revoke keys on <a href=":link">Node #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'No nodes satisfying the requirements specified for automatic deployment could be found.',
        'no_viable_allocations' => 'No allocations satisfying the requirements for automatic deployment were found.',
    ],
    'api' => [
        'resource_not_found' => 'The requested resource does not exist on this server.',
    ],
];
