<?php

/**
 *    Copyright 2015-2018 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'index' => [
        'header' => [
            'subtitle' => 'Список активных, официально признанных турниров',
            'title' => 'Турниры сообщества',
        ],
        'none_running' => 'На данный момент нет турниров, пожалуйста, попробуйте позже!',
        'registration_period' => 'Регистрация: с :start до :end',
    ],
    'show' => [
        'button' => [
            'register' => 'Записаться!',
            'cancel' => 'Отменить регистрацию',
        ],
        'entered' => 'Вы зарегистрированы на этот турнир.<br><br>Обратите внимание: это не значит что вас назначили в команду.<br><br>Дальнейшие инструкции будут отправлены на вашу почту, ближе к дате турнира, поэтому пожалуйста, проверьте, действительна ли почта, к которой привязан ваш osu! аккаунт!',
        'login_to_register' => 'Пожалуйста :login чтобы видеть больше информации о турнире!',
        'not_yet_entered' => 'Вы не зарегистрированы на этом турнире.',
        'rank_too_low' => 'Простите, но вы не подходите по требованиям, необходимым на данный турнир!',
        'registration_ends' => 'Регистрация закрыта до :date',
    ],
    'tournament_period' => ':start до :end',
];
