<?php

return [
    'title' => 'Timestampin muuntaminen päivämääräksi - Unix Timestamp -muunnos',
    'h1' => 'Unix Timestamp -pvm-muunnin',
    'meta_keywords' => 'timestamp to date converter',
    'meta_description' => 'Muuta helposti Unix-timestampit luettaviksi päivämääriksi ilmaisella verkkopohjaisella timestamp to date -muuntimellamme. Nopea, tarkka ja helppokäyttöinen.',
    'meta_title' => 'Timestamp to Date Converter - Heti Unix Timestamp -muunnos',
    'locale' => 'fi-FI',
    'select_language' => 'Valitse kieli',
    'summary' => 'Muuta helposti Unix-timestampit',
    'copy_time' => 'Kopioi',
    'done_copy' => 'Kopioitu!',
    'begin_start' => 'Sekunnit 1. tammikuuta 1970 alkaen (UTC)',
    'enter_time' => 'Syötä Timestamp',
    'enter_date' => 'Syötä päivämäärä ja kellonaika',
    'year' => 'Vuosi',
    'month' => 'Kuukausi',
    'day' => 'Päivä',
    'hour' => 'Tunti',
    'hour_24h' => 'Tunti (24h)',
    'minutes' => 'Minuutit',
    'seconds' => 'Sekunnit',
    'format' => 'Muoto',
    'your_time_zone' => 'Aikavyöhykkeesi',
    'relative' => 'Suhteellinen',
    'what_unix' => 'Mikä on Unix timestamp?',
    'unix_des' => 'Unix timestamp on tapa seurata aikaa kertomalla kuluneet sekunnit.
           Tämä laskenta alkaa Unix-epookista 1. tammikuuta 1970 UTC-aikavyöhykkeellä.
           Siksi Unix timestamp on yksinkertaisesti sekuntien määrä tietyn päivämäärän ja Unix-epookin välillä.
           On myös syytä huomata (kiitos tämän sivuston kommentoijille), että tämä aikapiste ei teknisesti muutu riippumatta siitä, missä olet maailmassa.
           Tämä on erittäin hyödyllistä tietokonesysteemeille, sillä se mahdollistaa aikojen seurannan ja lajittelun dynaamisissa ja hajautetuissa sovelluksissa verkossa ja asiakaspuolella.',
    'human_time' => 'Ihmisen luettavissa oleva aika',
    '1_minute' => '1 minuutti',
    '60_second' => '60 sekuntia',
    '1_hour' => '1 tunti',
    '3600_second' => '3600 sekuntia',
    '1_day' => '1 päivä',
    '86400_second' => '86400 sekuntia',
    '1_week' => '1 viikko',
    '604800_second' => '604800 sekuntia',
    '1_month' => '1 kuukausi (30,44 päivää)',
    '2629743_second' => '2629743 sekuntia',
    '1_year' => '1 vuosi (365,24 päivää)',
    '31556926_second' => '31556926 sekuntia',
    '2038' => 'Mitä tapahtuu 19. tammikuuta 2038?',
    '2038_des_1' => '2038 vuoden ongelma (tunnetaan myös nimillä Y2038, Epochalypse, Y2k38 tai Unix Y2K) liittyy aikaan tallentavien digitaalisten järjestelmien ongelmaan,
           joissa aikaa tallennetaan sekunteina 1. tammikuuta 1970 UTC-epookista lähtien ja se tallennetaan allekirjoitettuna 32-bittisenä kokonaislukuna. Tällaiset toteutukset eivät pysty koodaamaan aikoja 19. tammikuuta 2038 jälkeen kello 03:14:07 UTC.
           Samoin kuin Y2K-ongelma, 2038 vuoden ongelma johtuu ajan esittämiseen käytetyn kapasiteetin riittämättömyydestä.',
    '2038_des_2' => 'Viimeinen aika, joka voidaan tallentaa allekirjoitetulla 32-bittisellä kokonaisluvulla 1. tammikuuta 1970 jälkeen, on 03:14:07 19. tammikuuta 2038 (231-1 = 2 147 483 647 sekuntia 1. tammikuuta 1970 jälkeen).
           Ohjelmat, jotka yrittävät lisätä aikaa tämän päivämäärän jälkeen, saavat arvon tallentumaan sisäisesti negatiivisena, ja järjestelmät tulkitsevat sen tapahtuneeksi 13. joulukuuta 1901 kello 20:45:52 (2 147 483 648 sekuntia ennen 1. tammikuuta 1970),
           eikä 19. tammikuuta 2038. Tämä johtuu kokonaislukuvirheestä, jossa laskuri loppuu käytettävissä olevista numero-biteistä ja kääntää sen sijaan merkkibitin. Tämä raportoi äärimmäisen negatiivisen luvun ja jatkaa laskemista kohti nollaa ja sitten ylöspäin positiivisten kokonaislukujen suuntaan. Tällaiset virheelliset laskelmat voivat aiheuttaa ongelmia käyttäjille ja muille osapuolille.'
];
