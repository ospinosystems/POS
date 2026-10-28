<?php

return [

    /*
    | Correos que reciben el cierre del día y las cuentas por cobrar,
    | separados por coma.
    */
    'correos_cierre' => array_values(array_filter(array_map('trim', explode(',', env('POS_CORREOS_CIERRE', ''))))),

    /*
    | URL del servidor central con el que se sincroniza (opcional).
    | Un POS independiente puede dejar el valor por defecto.
    */
    'central_url' => env('POS_CENTRAL_URL', 'http://127.0.0.1:8001'),

];
