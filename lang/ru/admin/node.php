<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'validation' => [
        'fqdn_not_resolvable' => 'FQDN или IP адрес не верны.',
        'fqdn_required_for_ssl' => 'Полное доменное имя(если используете SSL) или IP адреса машины.',
    ],
    'notices' => [
        'allocations_added' => 'Распределение было успешно создано для этого сервера.',
        'node_deleted' => 'Нода была успешно удалена с этой панели.',
        'location_required' => 'У вас должно быть настроено хотя бы одно распределение, прежде чем вы сможете добавить ноду на эту панель.',
        'node_created' => 'Нода успешно создана. Вы можете автоматически настроить демона на этой машине, посетив вкладку \'Конфигурация\'. <strong>Прежде чем вы сможете добавить какие-либо сервера, вы должны сначала выделить по крайней мере один IP адрес и порт.</strong>',
        'node_updated' => 'Информация об узле была обновлена. Если какие-либо настройки демона были изменены, вам потребуется перезагрузить его, чтобы эти изменения вступили в силу.',
        'unallocated_deleted' => 'Удаление всех распределений ноды <code>:ip</code>.',
    ],
];
