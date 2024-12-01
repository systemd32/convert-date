<?php

return [
    'title' => 'Convertir Timestamp a Fecha - Conversión de Unix Timestamp',
    'h1' => 'Convertidor de Unix Timestamp a Fecha',
    'meta_keywords' => 'convertidor de timestamp a fecha',
    'meta_description' => 'Convierte fácilmente los Unix timestamps a fechas legibles con nuestro convertidor de timestamp a fecha gratuito en línea. Rápido, preciso y fácil de usar.',
    'meta_title' => 'Convertidor de Timestamp a Fecha - Conversión Instantánea de Unix Timestamp',
    'locale' => 'es-ES',
    'select_language' => 'Seleccionar Idioma',
    'summary' => 'Convierte fácilmente Unix timestamps',
    'copy_time' => 'Copiar',
    'done_copy' => '¡Copiado!',
    'begin_start' => 'Segundos desde el 1 de enero de 1970. (UTC)',
    'enter_time' => 'Ingresa un Timestamp',
    'enter_date' => 'Ingresa una Fecha y Hora',
    'year' => 'Año',
    'month' => 'Mes',
    'day' => 'Día',
    'hour' => 'Hora',
    'hour_24h' => 'Hora (24h)',
    'minutes' => 'Minutos',
    'seconds' => 'Segundos',
    'format' => 'Formato',
    'your_time_zone' => 'Tu Zona Horaria',
    'relative' => 'Relativo',
    'what_unix' => '¿Qué es el Unix Timestamp?',
    'unix_des' => 'El Unix timestamp es una forma de rastrear el tiempo como un total acumulado de segundos.
Este conteo comienza en el Unix Epoch el 1 de enero de 1970 a UTC.
Por lo tanto, el Unix timestamp es solo el número de segundos entre una fecha determinada y el Unix Epoch.
También debe señalarse (gracias a los comentarios de los visitantes de este sitio) que este punto en el tiempo técnicamente no cambia sin importar dónde te encuentres en el mundo.
Esto es muy útil para los sistemas informáticos al rastrear y ordenar información con fecha en aplicaciones dinámicas y distribuidas tanto en línea como en el lado del cliente.',
    'human_time' => 'Tiempo Legible para Humanos',
    '1_minute' => '1 Minuto',
    '60_second' => '60 Segundos',
    '1_hour' => '1 Hora',
    '3600_second' => '3600 Segundos',
    '1_day' => '1 Día',
    '86400_second' => '86400 Segundos',
    '1_week' => '1 Semana',
    '604800_second' => '604800 Segundos',
    '1_month' => '1 Mes (30.44 días)',
    '2629743_second' => '2629743 Segundos',
    '1_year' => '1 Año (365.24 días)',
    '31556926_second' => '31556926 Segundos',
    '2038' => '¿Qué sucede el 19 de enero de 2038?',
    '2038_des_1' => 'El problema del Año 2038 (también llamado Y2038, Epochalypse, Y2k38 o Unix Y2K) está relacionado con la representación del tiempo en muchos sistemas digitales como el número de segundos que han pasado desde las 00:00:00 UTC del 1 de enero de 1970 y almacenarlo como un número entero con signo de 32 bits. Tales implementaciones no pueden codificar tiempos después de las 03:14:07 UTC del 19 de enero de 2038. Al igual que con el problema del Y2K, el problema del Año 2038 es causado por una capacidad insuficiente para representar el tiempo.',
    '2038_des_2' => 'El último tiempo desde el 1 de enero de 1970 que puede ser almacenado usando un número entero con signo de 32 bits es a las 03:14:07 del martes 19 de enero de 2038 (231-1 = 2,147,483,647 segundos después del 1 de enero de 1970). Los programas que intenten incrementar el tiempo más allá de esta fecha harán que el valor se almacene internamente como un número negativo, que estos sistemas interpretarán como si hubiera ocurrido a las 20:45:52 del viernes 13 de diciembre de 1901 (2,147,483,648 segundos antes del 1 de enero de 1970) en lugar del 19 de enero de 2038. Esto se debe a un desbordamiento de enteros, durante el cual el contador se queda sin bits de dígitos utilizables y cambia el bit de signo. Esto reporta un número maximamente negativo, y continúa contando hacia cero, luego hacia arriba a través de los números enteros positivos. Los cálculos erróneos en tales sistemas probablemente causarán problemas para los usuarios y otras partes dependientes.'
];
