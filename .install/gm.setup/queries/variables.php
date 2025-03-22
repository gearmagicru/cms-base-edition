<?php
/**
 * Идентификаторы (переменные) запроса.
 * 
 * Применяются в качестве ключей при наполнении таблиц (см. queries.php).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

 /** @var array $vars */
$vars = array_merge_recursive(
    // «GearMagic: Управление сайтом», редакция «Базовая» (GM CMS:BASE)
    require('variables/cms-base.php')
);

// смещение всех идентификаторов
foreach ($vars as $name => &$items) {
    array_unshift($items, '');
    unset($items[0]);
    $items = array_flip($items);
}
return $vars;
