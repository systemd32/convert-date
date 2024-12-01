<?php

return [
    'title' => 'Converteix una marca de temps a data - Conversió de marca de temps Unix',
    'h1' => 'Convertidor de marca de temps Unix a data',
    'meta_keywords' => 'convertidor de marca de temps a data',
    'meta_description' => 'Converteix fàcilment les marques de temps Unix a dates llegibles amb el nostre convertidor en línia gratuït. Ràpid, precís i fàcil d’utilitzar.',
    'meta_title' => 'Convertidor de marca de temps a data - Conversió instantània de marca de temps Unix',
    'locale' => 'ca-ES',
    'select_language' => 'Selecciona l’idioma',
    'summary' => 'Converteix fàcilment marques de temps Unix',
    'copy_time' => 'Copia',
    'done_copy' => 'Copiat!',
    'begin_start' => 'Segons des de l’1 de gener de 1970. (UTC)',
    'enter_time' => 'Introdueix una marca de temps',
    'enter_date' => 'Introdueix una data i hora',
    'year' => 'Any',
    'month' => 'Mes',
    'day' => 'Dia',
    'hour' => 'Hora',
    'hour_24h' => 'Hora (24h)',
    'minutes' => 'Minuts',
    'seconds' => 'Segons',
    'format' => 'Format',
    'your_time_zone' => 'El teu fus horari',
    'relative' => 'Relatiu',
    'what_unix' => 'Què és la marca de temps Unix?',
    'unix_des' => 'La marca de temps Unix és una manera de fer un seguiment del temps mitjançant el recompte de segons.
           Aquest recompte comença amb l’època Unix, l’1 de gener de 1970, a UTC.
           Per tant, la marca de temps Unix és el nombre de segons entre una data determinada i l’època Unix.
           És important destacar (gràcies als comentaris dels visitants d’aquest lloc) que aquest punt de temps no canvia tècnicament, independentment d’on et trobis al món.
           Això és molt útil per als sistemes informàtics per fer un seguiment i ordenar informació basada en dates en aplicacions dinàmiques i distribuïdes, tant en línia com al costat del client.',
    'human_time' => 'Temps llegible per a humans',
    '1_minute' => '1 minut',
    '60_second' => '60 segons',
    '1_hour' => '1 hora',
    '3600_second' => '3600 segons',
    '1_day' => '1 dia',
    '86400_second' => '86400 segons',
    '1_week' => '1 setmana',
    '604800_second' => '604800 segons',
    '1_month' => '1 mes (30,44 dies)',
    '2629743_second' => '2629743 segons',
    '1_year' => '1 any (365,24 dies)',
    '31556926_second' => '31556926 segons',
    '2038' => 'Què passarà el 19 de gener de 2038?',
    '2038_des_1' => 'El problema de l’any 2038 (també conegut com a Y2038, Epochalypse, Y2k38 o Unix Y2K) es refereix a la representació del temps en molts sistemes digitals com el nombre de segons passats des de les 00:00:00 UTC
           de l’1 de gener de 1970 i la seva emmagatzematge com un enter de 32 bits amb signe. Aquestes implementacions no poden codificar temps després de les 03:14:07 UTC del 19 de gener de 2038.
           De manera similar al problema de l’any 2000 (Y2K), el problema de l’any 2038 està causat per una capacitat insuficient per representar el temps.',
    '2038_des_2' => 'L’últim moment des de l’1 de gener de 1970 que es pot emmagatzemar utilitzant un enter de 32 bits amb signe és el 19 de gener de 2038 a les 03:14:07
           (2³¹-1 = 2.147.483.647 segons després de l’1 de gener de 1970). Els programes que intentin incrementar el temps més enllà d’aquesta data faran que el valor s’emmagatzemi internament com un nombre negatiu,
           que aquests sistemes interpretaran com si hagués ocorregut el 13 de desembre de 1901 a les 20:45:52 (2.147.483.648 segons abans de l’1 de gener de 1970), en lloc del 19 de gener de 2038.
           Això es deu a un desbordament d’enters, durant el qual el comptador es queda sense bits disponibles i capgira el bit de signe.
           Això produeix càlculs erronis que probablement causaran problemes als usuaris i altres parts dependents.'
];
