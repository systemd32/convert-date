<?php

return [
    'title' => 'Pretvorba Timestamp-a u Datum - Unix Timestamp Konverzija',
    'h1' => 'Unix Timestamp u Datum Konverter',
    'meta_keywords' => 'timestamp u datum konverter',
    'meta_description' => 'Lako pretvorite Unix timestamp-e u čitljive datume pomoću našeg besplatnog online konvertera timestamp-a u datum. Brzo, tačno i jednostavno za upotrebu.',
    'meta_title' => 'Konverter Timestamp-a u Datum - Instant Unix Timestamp Konverzija',
    'locale' => 'sr-RS',
    'select_language' => 'Izaberite jezik',
    'summary' => 'Lako pretvorite Unix timestamp-e',
    'copy_time' => 'Kopiraj',
    'done_copy' => 'Kopirano!',
    'begin_start' => 'Sekunde od 1. januara 1970. (UTC)',
    'enter_time' => 'Unesite Timestamp',
    'enter_date' => 'Unesite Datum i Vreme',
    'year' => 'Godina',
    'month' => 'Mesec',
    'day' => 'Dan',
    'hour' => 'Sat',
    'hour_24h' => 'Sat (24h)',
    'minutes' => 'Minute',
    'seconds' => 'Sekunde',
    'format' => 'Format',
    'your_time_zone' => 'Vaš vremenski pojas',
    'relative' => 'Relativno',
    'what_unix' => 'Šta je unix timestamp?',
    'unix_des' => 'Unix timestamp je način praćenja vremena kao ukupnog broja sekundi. Ovaj broj počinje od Unix Epoch-a 1. januara 1970. godine u 00:00 UTC. Dakle, unix timestamp je jednostavno broj sekundi između određenog datuma i Unix Epoch-a. Takođe treba napomenuti (zahvaljujući komentarima posetilaca ovog sajta) da se ta tačka u vremenu tehnički ne menja, bez obzira gde se nalazite na svetu. Ovo je vrlo korisno za računarstvo u sistemima za praćenje i sortiranje informacija zasnovanih na vremenu u dinamičnim i distribuiranim aplikacijama, kako na mreži, tako i na klijentskoj strani.',
    'human_time' => 'Ljudski čitljivo vreme',
    '1_minute' => '1 minut',
    '60_second' => '60 sekundi',
    '1_hour' => '1 sat',
    '3600_second' => '3600 sekundi',
    '1_day' => '1 dan',
    '86400_second' => '86400 sekundi',
    '1_week' => '1 nedelja',
    '604800_second' => '604800 sekundi',
    '1_month' => '1 mesec (30,44 dana)',
    '2629743_second' => '2629743 sekunde',
    '1_year' => '1 godina (365,24 dana)',
    '31556926_second' => '31556926 sekundi',
    '2038' => 'Šta se dešava 19. januara 2038. godine?',
    '2038_des_1' => 'Problem 2038. godine (takođe poznat kao Y2038, Epochalypse, Y2k38 ili Unix Y2K) odnosi se na predstavljanje vremena u mnogim digitalnim sistemima kao broj sekundi koji su prošli od 00:00:00 UTC 1. januara 1970. godine i čuvanje tog broja kao potpisanog celobrojnog broja sa 32 bita. Takve implementacije ne mogu kodirati vreme nakon 03:14:07 UTC 19. januara 2038. godine. Slično kao problem Y2K, problem 2038. godine izazvan je nedovoljnom kapacitetom za predstavljanje vremena.',
    '2038_des_2' => 'Poslednje vreme od 1. januara 1970. godine koje može biti sačuvano pomoću potpisanog celobrojnog broja sa 32 bita je 03:14:07 19. januara 2038. godine (231-1 = 2.147.483.647 sekundi nakon 1. januara 1970. godine). Programi koji pokušavaju da povećaju vreme iznad ove tačke će sačuvati vrednost kao negativan broj, koji će ovi sistemi interpretirati kao da se desilo u 20:45:52 13. decembra 1901. godine (2.147.483.648 sekundi pre 1. januara 1970. godine), a ne 19. januara 2038. godine. Ovo je uzrokovano prelivanjem celobrojne vrednosti, pri čemu brojač istroši dostupne bitove i prebacuje bit znaka. To daje maksimalno negativan broj, a zatim broji ka nuli i ponovo kroz pozitivne brojeve. Ove greške u računanju u sistemima verovatno će izazvati probleme za korisnike i druge zavisne strane.',
];
