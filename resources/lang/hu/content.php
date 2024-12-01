<?php

return [
    'title' => 'Timestamp átalakítása dátummá - Unix Timestamp átalakítás',
    'h1' => 'Unix Timestamp to Date átalakító',
    'meta_keywords' => 'timestamp to date átalakító',
    'meta_description' => 'Könnyen átalakíthatja a Unix timestampokat olvasható dátumokká ingyenes online timestamp to date átalakítónkkal. Gyors, pontos és könnyen használható.',
    'meta_title' => 'Timestamp to Date átalakító - Azonnali Unix Timestamp átalakítás',
    'locale' => 'hu-HU',
    'select_language' => 'Válasszon nyelvet',
    'summary' => 'Könnyen átalakíthatja a Unix timestampokat',
    'copy_time' => 'Másolás',
    'done_copy' => 'Másolva!',
    'begin_start' => 'Másodpercek 1970. január 1-jétől (UTC)',
    'enter_time' => 'Adjon meg egy Timestamp-ot',
    'enter_date' => 'Adjon meg egy dátumot és időt',
    'year' => 'Év',
    'month' => 'Hónap',
    'day' => 'Nap',
    'hour' => 'Óra',
    'hour_24h' => 'Óra (24h)',
    'minutes' => 'Perc',
    'seconds' => 'Másodpercek',
    'format' => 'Formátum',
    'your_time_zone' => 'Az Ön időzónája',
    'relative' => 'Relatív',
    'what_unix' => 'Mi az a unix timestamp?',
    'unix_des' => 'A Unix timestamp egy módszer az idő mérésére másodpercekben.
           Ez a számlálás az Unix Epoch-ból indul, 1970. január 1-jén UTC idő szerint.
           Tehát a Unix timestamp csupán a másodpercek száma egy adott dátum és az Unix Epoch között.
           Érdemes megjegyezni (köszönet a látogatók megjegyzéseiért), hogy ez az időpont technikailag nem változik, függetlenül attól, hogy hol tartózkodik a világon.
           Ez nagyon hasznos a számítógépes rendszerek számára, hogy nyomon kövessék és rendezett módon tárolják az időhöz kötött információkat dinamikus és elosztott alkalmazásokban, online és kliens oldalon egyaránt.',
    'human_time' => 'Emberi olvasható idő',
    '1_minute' => '1 perc',
    '60_second' => '60 másodperc',
    '1_hour' => '1 óra',
    '3600_second' => '3600 másodperc',
    '1_day' => '1 nap',
    '86400_second' => '86400 másodperc',
    '1_week' => '1 hét',
    '604800_second' => '604800 másodperc',
    '1_month' => '1 hónap (30.44 nap)',
    '2629743_second' => '2629743 másodperc',
    '1_year' => '1 év (365.24 nap)',
    '31556926_second' => '31556926 másodperc',
    '2038' => 'Mi történik 2038. január 19-én?',
    '2038_des_1' => 'A 2038-as probléma (más néven Y2038, Epochalypse, Y2k38 vagy Unix Y2K) azzal kapcsolatos, hogy sok digitális rendszerben az időt másodpercekben mérik, amelyeket 1970. január 1-jei 00:00:00 UTC-től számítanak
           és aláírt 32-bites egész számként tárolják. Az ilyen rendszerek nem képesek kódolni az időt 2038. január 19-én 03:14:07 UTC után. A Y2K problémához hasonlóan a 2038-as probléma is
           a nem elegendő kapacitásból adódik, amelyet az idő reprezentálásához használnak.',
    '2038_des_2' => 'Az utolsó időpont, amelyet 1970. január 1-je óta aláírt 32-bites egész számként tárolhatunk, 2038. január 19-én kedd 03:14:07 (231-1 = 2,147,483,647 másodperc 1970. január 1. után).
           Azok a programok, amelyek megpróbálják növelni az időt ezen a dátumon túl, az értéket negatív számként tárolják, amit a rendszerek úgy értelmeznek, mintha 1901. december 13-án pénteken 20:45:52 (2,147,483,648 másodperc 1970. január 1. előtt)
           történt volna, nem pedig 2038. január 19-én. Ez az egész szám túlcsordulása miatt történik, amikor a számláló kimeríti a használható számjegy biteket, és a helyett a jelző bitet fordítja el. Ez maximális negatív számot eredményez,
           majd tovább növekszik, elérve a nullát, és ismét növekvő pozitív számokat ad.',
];
