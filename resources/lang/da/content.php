<?php

return [
    'title' => 'Konverter tidsstempel til dato - Unix tidsstempel konvertering',
    'h1' => 'Unix tidsstempel til dato konverter',
    'meta_keywords' => 'tidsstempel til dato konverter',
    'meta_description' => 'Konverter nemt Unix tidsstempler til læsbare datoer med vores gratis online tidsstempel til dato konverter. Hurtigt, præcist og nemt at bruge.',
    'meta_title' => 'Tidsstempel til dato konverter - Øjeblikkelig Unix tidsstempel konvertering',
    'locale' => 'da-DK',
    'select_language' => 'Vælg sprog',
    'summary' => 'Konverter nemt Unix tidsstempler',
    'copy_time' => 'Kopier',
    'done_copy' => 'Kopieret!',
    'begin_start' => 'Sekunder siden 1. januar 1970. (UTC)',
    'enter_time' => 'Indtast et tidsstempel',
    'enter_date' => 'Indtast en dato og tid',
    'year' => 'År',
    'month' => 'Måned',
    'day' => 'Dag',
    'hour' => 'Time',
    'hour_24h' => 'Time (24t)',
    'minutes' => 'Minutter',
    'seconds' => 'Sekunder',
    'format' => 'Format',
    'your_time_zone' => 'Din tidszone',
    'relative' => 'Relativ',
    'what_unix' => 'Hvad er Unix tidsstempel?',
    'unix_des' => 'Unix tidsstempel er en måde at spore tid som et løbende total af sekunder.
           Denne optælling starter ved Unix-epoken den 1. januar 1970 (UTC).
           Derfor er Unix tidsstempel blot antallet af sekunder mellem en bestemt dato og Unix-epoken.
           Det bør også påpeges (takket være kommentarer fra besøgende på denne side), at dette tidspunkt teknisk set ikke ændrer sig, uanset hvor du er i verden.
           Det er meget nyttigt for computersystemer til at spore og sortere tidsbestemte oplysninger i dynamiske og distribuerede applikationer både online og på klientsiden.',
    'human_time' => 'Menneskeligt læselig tid',
    '1_minute' => '1 minut',
    '60_second' => '60 sekunder',
    '1_hour' => '1 time',
    '3600_second' => '3600 sekunder',
    '1_day' => '1 dag',
    '86400_second' => '86400 sekunder',
    '1_week' => '1 uge',
    '604800_second' => '604800 sekunder',
    '1_month' => '1 måned (30,44 dage)',
    '2629743_second' => '2629743 sekunder',
    '1_year' => '1 år (365,24 dage)',
    '31556926_second' => '31556926 sekunder',
    '2038' => 'Hvad sker der den 19. januar 2038?',
    '2038_des_1' => '2038-problemet (også kaldet Y2038, Epochalypse, Y2k38 eller Unix Y2K) handler om at repræsentere tid i mange digitale systemer som antallet af sekunder siden 00:00:00 UTC den 1. januar 1970
           og gemme det som et signeret 32-bit heltal. Sådanne implementeringer kan ikke kode tider efter 03:14:07 UTC den 19. januar 2038.
           Ligesom Y2K-problemet er 2038-problemet forårsaget af utilstrækkelig kapacitet til at repræsentere tid.',
    '2038_des_2' => 'Den seneste tid siden den 1. januar 1970, der kan gemmes ved hjælp af et signeret 32-bit heltal, er 03:14:07 den 19. januar 2038
           (2³¹-1 = 2.147.483.647 sekunder efter den 1. januar 1970). Programmer, der forsøger at øge tiden efter denne dato, vil få værdien til at blive gemt internt som et negativt tal,
           som disse systemer vil tolke som at have fundet sted den 13. december 1901 kl. 20:45:52 (2.147.483.648 sekunder før den 1. januar 1970) i stedet for den 19. januar 2038.
           Dette er forårsaget af integer overflow, hvor tælleren løber tør for anvendelige cifferbits og skifter tegnbit i stedet. Dette rapporterer et maksimalt negativt tal og fortsætter med at tælle op mod nul, og derefter op gennem de positive heltal igen.
           Fejlberegninger på sådanne systemer vil sandsynligvis forårsage problemer for brugere og andre afhængige parter.'
];
