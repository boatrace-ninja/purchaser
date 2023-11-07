<?php

return [
    'Purchaser' => \DI\create('\Boatrace\Ninja\Purchaser')->constructor(
        \DI\get('MainPurchaser')
    ),
    'MainPurchaser' => function ($container) {
        return $container->get('\Boatrace\Ninja\MainPurchaser');
    },
    'ChromeOptions' => function ($container) {
        return $container->get('\Facebook\WebDriver\Chrome\ChromeOptions');
    },
];
