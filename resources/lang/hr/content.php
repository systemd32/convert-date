<?php

return [
    'title' => 'Pretvori vremenski žig u datum - Unix vremenski žig pretvorba',
    'h1' => 'Unix vremenski žig u datum pretvornik',
    'meta_keywords' => 'vremenski žig u datum pretvornik',
    'meta_description' => 'Jednostavno pretvorite Unix vremenske žigove u čitljive datume pomoću našeg besplatnog online pretvornika. Brzo, točno i jednostavno za korištenje.',
    'meta_title' => 'Pretvornik vremenskog žiga u datum - Trenutna Unix vremenska žig pretvorba',
    'locale' => 'hr-HR',
    'select_language' => 'Odaberite jezik',
    'summary' => 'Jednostavno pretvorite Unix vremenske žigove',
    'copy_time' => 'Kopiraj',
    'done_copy' => 'Kopirano!',
    'begin_start' => 'Sekunde od 1. siječnja 1970. (UTC)',
    'enter_time' => 'Unesite vremenski žig',
    'enter_date' => 'Unesite datum i vrijeme',
    'year' => 'Godina',
    'month' => 'Mjesec',
    'day' => 'Dan',
    'hour' => 'Sat',
    'hour_24h' => 'Sat (24h)',
    'minutes' => 'Minute',
    'seconds' => 'Sekunde',
    'format' => 'Format',
    'your_time_zone' => 'Vaša vremenska zona',
    'relative' => 'Relativno',
    'what_unix' => 'Što je Unix vremenski žig?',
    'unix_des' => 'Unix vremenski žig je način praćenja vremena kao broj sekundi.
           Ovaj broj počinje od Unix epohe 1. siječnja 1970. u UTC vremenu.
           Stoga, Unix vremenski žig je samo broj sekundi između određenog datuma i Unix epohe.
           Također treba napomenuti (zahvaljujući komentarima posjetitelja ove stranice) da se ovaj trenutak u vremenu tehnički ne mijenja bez obzira na vašu lokaciju na svijetu.
           Ovo je vrlo korisno za računalne sustave za praćenje i sortiranje podataka temeljenih na datumima u dinamičkim i distribuiranim aplikacijama, bilo online ili na klijentskoj strani.',
    'human_time' => 'Vrijeme u formatu za ljude',
    '1_minute' => '1 minuta',
    '60_second' => '60 sekundi',
    '1_hour' => '1 sat',
    '3600_second' => '3600 sekundi',
    '1_day' => '1 dan',
    '86400_second' => '86400 sekundi',
    '1_week' => '1 tjedan',
    '604800_second' => '604800 sekundi',
    '1_month' => '1 mjesec (30.44 dana)',
    '2629743_second' => '2629743 sekundi',
    '1_year' => '1 godina (365.24 dana)',
    '31556926_second' => '31556926 sekundi',
    '2038' => 'Što će se dogoditi 19. siječnja 2038.?',
    '2038_des_1' => 'Problem iz 2038. godine (također poznat kao Y2038, Epochalypse, Y2k38 ili Unix Y2K) odnosi se na predstavljanje vremena u mnogim digitalnim sustavima kao broj sekundi od 00:00:00 UTC 1.
           siječnja 1970. godine i pohranjivanje ga kao potpisani 32-bitni cijeli broj. Takve implementacije ne mogu kodirati vrijeme nakon 03:14:07 UTC 19. siječnja 2038.
           Slično problemu Y2K, problem iz 2038. godine nastaje zbog nedostatne kapacitete za predstavljanje vremena.',
    '2038_des_2' => 'Posljednje vrijeme od 1. siječnja 1970. godine koje se može pohraniti korištenjem potpisanog 32-bitnog cijelog broja je 19. siječnja 2038. u 03:14:07
           (231-1 = 2,147,483,647 sekundi nakon 1. siječnja 1970.). Programi koji pokušavaju povećati vrijeme nakon ovog datuma uzrokovat će da se vrijednost interno pohrani kao negativni broj,
           koji će ti sustavi interpretirati kao da se dogodilo 13. prosinca 1901. u 20:45:52 (2,147,483,648 sekundi prije 1. siječnja 1970.) umjesto 19. siječnja 2038.
           To je uzrokovano preljevanjem cijelog broja, pri čemu brojač istroši dostupne bitove i promijeni znak. To prijavljuje maksimalno negativni broj, a zatim nastavlja brojati prema nuli, a zatim opet prema pozitivnim cijelim brojevima.
           Takvi pogrešni izračuni u sustavima vjerojatno će uzrokovati probleme za korisnike i druge ovisne strane.'
];
