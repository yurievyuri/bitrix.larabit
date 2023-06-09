<?php
$arClasses = [
    "\\Dev\\Larabit\\Handlers" => "lib/Handlers.php",
    "\\Dev\\Larabit\\Config" => "lib/Config.php",
    "\\Dev\\Larabit\\Agent" => "lib/Agent.php",
    "\\Dev\\Larabit\\Http" => "lib/Http.php",
    "\\Dev\\Larabit\\Option" => "lib/Option.php",
    "\\Dev\\Larabit\\Dumper" => "lib/Dumper.php",
    "\\Dev\\Larabit\\Reflect" => "lib/Reflect.php",
    "\\Dev\\Larabit\\Scope" => "lib/Scope.php",
    "\\Dev\\Larabit\\Hooks" => "lib/Hooks.php",

    "\\Dev\\Larabit\\Api\\Auth" => "lib/Api/Auth.php",
    "\\Dev\\Larabit\\Api\\Handler" => "lib/Api/Handler.php",
    "\\Dev\\Larabit\\Api\\Action" => "lib/Api/Action.php",
    "\\Dev\\Larabit\\Api\\Reaction" => "lib/Api/Reaction.php",
];
\Bitrix\Main\Loader::registerAutoLoadClasses(basename(__DIR__), $arClasses);