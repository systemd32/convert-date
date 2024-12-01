<?php

return [
    'title' => 'Pretvori Timestamp u Datum - Unix Timestamp Konverzija',
    'h1' => 'Unix Timestamp u Datum Konverter',
    'meta_keywords' => 'timestamp u datum konverter',
    'meta_description' => 'Jednostavno pretvorite Unix timestamp u čitljive datume uz naš besplatni online konverter. Brzo, precizno i jednostavno za korištenje.',
    'meta_title' => 'Konverter Timestamp-a u Datum - Trenutna Unix Timestamp Konverzija',
    'locale' => 'bs-BA',
    'select_language' => 'Odaberite Jezik',
    'summary' => 'Jednostavno pretvorite Unix timestamp',
    'copy_time' => 'Kopiraj',
    'done_copy' => 'Kopirano!',
    'begin_start' => 'Sekundi od 01. januara 1970. (UTC)',
    'enter_time' => 'Unesite Timestamp',
    'enter_date' => 'Unesite Datum i Vrijeme',
    'year' => 'Godina',
    'month' => 'Mjesec',
    'day' => 'Dan',
    'hour' => 'Sat',
    'hour_24h' => 'Sat (24h)',
    'minutes' => 'Minute',
    'seconds' => 'Sekunde',
    'format' => 'Format',
    'your_time_zone' => 'Vaša Vremenska Zona',
    'relative' => 'Relativno',
    'what_unix' => 'Šta je Unix Timestamp?',
    'unix_des' => 'Unix timestamp je način praćenja vremena kroz brojanje sekundi.
           Ovaj broj počinje od Unix Epoch-a, 1. januara 1970. u UTC vremenu.
           Unix timestamp je broj sekundi između određenog datuma i Unix Epoch-a.
           Važno je napomenuti (zahvaljujući komentarima posjetitelja ove stranice) da se ova vremenska tačka tehnički ne mijenja bez obzira gdje se nalazite na svijetu.
           Ovo je vrlo korisno za kompjuterske sisteme za praćenje i sortiranje podataka po datumu u dinamičnim i distribuiranim aplikacijama, kako online, tako i na klijentskoj strani.',
    'human_time' => 'Čitljivo Vrijeme za Ljude',
    '1_minute' => '1 Minuta',
    '60_second' => '60 Sekundi',
    '1_hour' => '1 Sat',
    '3600_second' => '3600 Sekundi',
    '1_day' => '1 Dan',
    '86400_second' => '86400 Sekundi',
    '1_week' => '1 Sedmica',
    '604800_second' => '604800 Sekundi',
    '1_month' => '1 Mjesec (30,44 dana)',
    '2629743_second' => '2629743 Sekundi',
    '1_year' => '1 Godina (365,24 dana)',
    '31556926_second' => '31556926 Sekundi',
    '2038' => 'Šta će se desiti 19. januara 2038. godine?',
    '2038_des_1' => 'Problem godine 2038. (također poznat kao Y2038, Epochalypse, Y2k38 ili Unix Y2K) odnosi se na predstavljanje vremena u mnogim digitalnim sistemima kao broj sekundi od 00:00:00 UTC
           1. januara 1970. i njegovo spremanje kao potpisan 32-bitni integer. Takve implementacije ne mogu kodirati vremena poslije 03:14:07 UTC 19. januara 2038. godine.
           Slično problemu Y2K, problem godine 2038. uzrokovan je nedovoljnim kapacitetom za predstavljanje vremena.',
    '2038_des_2' => 'Najkasnije vrijeme od 1. januara 1970. koje se može pohraniti koristeći potpisan 32-bitni integer je 19. januara 2038. u 03:14:07 (2³¹-1 = 2.147.483.647 sekundi nakon 1. januara 1970.).
           Programi koji pokušavaju povećati vrijeme poslije ovog datuma uzrokovat će da se vrijednost interno pohrani kao negativan broj, što će sistemi interpretirati kao da se dogodilo
           13. decembra 1901. u 20:45:52 (2.147.483.648 sekundi prije 1. januara 1970.), umjesto 19. januara 2038. godine. Ovo je uzrokovano preljevanjem integera, gdje brojač izlazi iz raspoloživih bitova i prebacuje bit za znak.
           Rezultat su pogrešni proračuni koji vjerovatno izazivaju probleme korisnicima i drugim ovisnim stranama.'
];
