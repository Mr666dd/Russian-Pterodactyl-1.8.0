<?php

return [
    'email' => [
        'title' => 'Изменить ваш email',
        'updated' => 'Ваш email успешно обновлен.',
    ],
    'password' => [
        'title' => 'Изменить ваш пароль',
        'requirements' => 'Ваш новый пароль должен содержать не менее 8 символов.',
        'updated' => 'Ваш пароль успешно обновлен.',
    ],
    'two_factor' => [
        'button' => 'Настройка 2-Факторной аутентификации',
        'disabled' => 'Двухфакторная аутентификация в вашей учетной записи отключена. Вам больше не будет предложено ввести токен при входе в систему.',
        'enabled' => 'В вашей учетной записи включена двухфакторная аутентификация! Отныне при входе в систему вам будет необходимо указать код, сгенерированный вашим устройством.',
        'invalid' => 'Неправильный токен авторизации.',
        'setup' => [
            'title' => 'Настройка двухфакторной аутентификации',
            'help' => 'Не можете отсканировать код? Введите приведенный ниже код в свое приложение:',
            'field' => 'Введите токен.',
        ],
        'disable' => [
            'title' => 'Отключить 2-факторную аутентификацию.',
            'field' => 'Введите токен',
        ],
    ],
];
