<?php
/**
 * Таблицы используемые картой SQL запросов (раздел "insert").
 * 
 * Веб-приложения «GearMagic: Управление сайтом» (GM СMS).
 * Редакции «Базовая» (GM CMS:BASE).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    // api
    '{{api}}' => require('cms-base/api.php'),
    // роли пользователей
    '{{role}}' => require('cms-base/role.php'),
        // автозапуск модулей и расширений
        '{{panel_autorun}}' => require('cms-base/panel_autorun.php'),
        // права доступа к элементам панели разделов
        '{{panel_partitionbar_roles}}' => require('cms-base/panel_partitionbar_roles.php'),
        // права доступа к элементам панели уведомлений
        '{{panel_traybar_roles}}' => require('cms-base/panel_traybar_roles.php'),
        // права доступа к информарционным панелям
        '{{panel_dashboard_roles}}' => require('cms-base/panel_dashboard_roles.php'),
        // права доступа к элементам меню панели управления
        '{{panel_menu_roles}}' => require('cms-base/panel_menu_roles.php'),
    // панель разделов
    '{{panel_partitionbar}}' => require('cms-base/panel_partitionbar.php'),
        // модули панели разделов
        '{{panel_partitionbar_modules}}' => require('cms-base/panel_partitionbar_modules.php'),
        // расширения модулей панели разделов
        '{{panel_partitionbar_extensions}}' => require('cms-base/panel_partitionbar_extensions.php'),
    // информационная панель
    '{{panel_dashboard}}' => require('cms-base/panel_dashboard.php'),
        // виджеты информационных панелей
        '{{panel_dashboard_widgets}}' => require('cms-base/panel_dashboard_widgets.php'),
    // меню панели управления
    '{{panel_menu}}' => require('cms-base/panel_menu.php'),
    // панель уведомлений
    '{{panel_traybar}}' => require('cms-base/panel_traybar.php')
];
