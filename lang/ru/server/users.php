<?php

return [
    'permissions' => [
        'websocket_*' => 'Разрешает доступ к веб-сайту для этого сервера.',
        'control_console' => 'Позволяет пользователю отправлять данные на консоль сервера.',
        'control_start' => 'Позволяет пользователю запустить экземпляр сервера.',
        'control_stop' => 'Позволяет пользователю остановить экземпляр сервера.',
        'control_restart' => 'Позволяет пользователю перезапустить экземпляр сервера.',
        'control_kill' => 'Позволяет пользователю уничтожить экземпляр сервера.',
        'user_create' => 'Позволяет пользователю создавать новые учетные записи пользователей для сервера.',
        'user_read' => 'Разрешает пользователю просматривать пользователей, связанных с этим сервером.',
        'user_update' => 'Позволяет пользователю изменять других пользователей, связанных с этим сервером.',
        'user_delete' => 'Позволяет пользователю удалять других пользователей, связанных с этим сервером.',
        'file_create' => 'Разрешает пользователю создавать новые файлы и каталоги.',
        'file_read' => 'Позволяет пользователю просматривать файлы и папки, связанные с этим экземпляром сервера, а также просматривать их содержимое.',
        'file_update' => 'Позволяет пользователю обновлять файлы и папки, связанные с сервером.',
        'file_delete' => 'Позволяет пользователю удалять файлы и каталоги.',
        'file_archive' => 'Позволяет пользователю создавать файловые архивы и распаковывать существующие архивы.',
        'file_sftp' => 'Позволяет пользователю выполнять вышеуказанные действия с файлами с помощью SFTP-клиента.',
        'allocation_read' => 'Разрешает доступ к страницам управления распределением серверов.',
        'allocation_update' => 'Разрешает пользователю вносить изменения в распределение сервера.',
        'database_create' => 'Разрешает пользователю создавать новую базу данных для сервера.',
        'database_read' => 'Разрешает пользователю просматривать базы данных сервера.',
        'database_update' => 'Разрешает пользователю вносить изменения в базу данных. Если у пользователя также нет разрешения "Просмотр пароля", он не сможет изменить пароль.',
        'database_delete' => 'Разрешает пользователю удалять экземпляр базы данных.',
        'database_view_password' => 'Разрешает пользователю просматривать пароль базы данных в системе.',
        'schedule_create' => 'Позволяет пользователю создавать новое расписание для сервера.',
        'schedule_read' => 'Разрешает пользователю просматривать расписания для сервера.',
        'schedule_update' => 'Разрешает пользователю вносить изменения в существующее расписание сервера.',
        'schedule_delete' => 'Позволяет пользователю удалять расписание для сервера.',
    ],
];