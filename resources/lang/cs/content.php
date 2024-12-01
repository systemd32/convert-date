<?php

return [
    'title' => 'Převod časového razítka na datum - Unix časové razítko',
    'h1' => 'Převodník Unix časového razítka na datum',
    'meta_keywords' => 'převodník časového razítka na datum',
    'meta_description' => 'Snadno převedete Unix časová razítka na čitelná data pomocí našeho bezplatného online převodníku. Rychlé, přesné a snadné použití.',
    'meta_title' => 'Převodník časového razítka na datum - Okamžitý převod Unix časového razítka',
    'locale' => 'cs-CZ',
    'select_language' => 'Vyberte jazyk',
    'summary' => 'Snadno převádějte Unix časová razítka',
    'copy_time' => 'Kopírovat',
    'done_copy' => 'Zkopírováno!',
    'begin_start' => 'Sekundy od 1. ledna 1970. (UTC)',
    'enter_time' => 'Zadejte časové razítko',
    'enter_date' => 'Zadejte datum a čas',
    'year' => 'Rok',
    'month' => 'Měsíc',
    'day' => 'Den',
    'hour' => 'Hodina',
    'hour_24h' => 'Hodina (24h)',
    'minutes' => 'Minuty',
    'seconds' => 'Sekundy',
    'format' => 'Formát',
    'your_time_zone' => 'Vaše časová zóna',
    'relative' => 'Relativní',
    'what_unix' => 'Co je Unix časové razítko?',
    'unix_des' => 'Unix časové razítko je způsob sledování času jako běžný součet sekund.
           Tento počet začíná od Unix epochy 1. ledna 1970 (UTC).
           Unix časové razítko je tedy pouze počet sekund mezi konkrétním datem a Unix epochou.
           Mělo by být také zdůrazněno (díky komentářům návštěvníků této stránky), že tento bod v čase technicky nemění, bez ohledu na to, kde se nacházíte na světě.
           Je to velmi užitečné pro počítačové systémy pro sledování a třídění datových informací v dynamických a distribuovaných aplikacích, jak online, tak na straně klienta.',
    'human_time' => 'Čas čitelný pro lidi',
    '1_minute' => '1 minuta',
    '60_second' => '60 sekund',
    '1_hour' => '1 hodina',
    '3600_second' => '3600 sekund',
    '1_day' => '1 den',
    '86400_second' => '86400 sekund',
    '1_week' => '1 týden',
    '604800_second' => '604800 sekund',
    '1_month' => '1 měsíc (30.44 dní)',
    '2629743_second' => '2629743 sekundy',
    '1_year' => '1 rok (365.24 dní)',
    '31556926_second' => '31556926 sekund',
    '2038' => 'Co se stane 19. ledna 2038?',
    '2038_des_1' => 'Problém z roku 2038 (také známý jako Y2038, Epochalypse, Y2k38 nebo Unix Y2K) se týká reprezentace času v mnoha digitálních systémech jako počet sekund od 00:00:00 UTC 1.
           ledna 1970 a ukládání tohoto čísla jako podepsaného 32bitového celého čísla. Takové implementace nemohou kódovat čas po 03:14:07 UTC 19. ledna 2038.
           Podobně jako problém Y2K, problém z roku 2038 je způsoben nedostatečnou kapacitou pro reprezentaci času.',
    '2038_des_2' => 'Nejpozdější čas od 1. ledna 1970, který může být uložen pomocí podepsaného 32bitového celého čísla, je 19. ledna 2038 v 03:14:07
           (2³¹-1 = 2,147,483,647 sekund po 1. lednu 1970). Programy, které se pokusí zvýšit čas po tomto datu, způsobí, že se hodnota uloží interně jako negativní číslo,
           které budou systémy interpretovat jako čas 13. prosince 1901 v 20:45:52 (2,147,483,648 sekund před 1. lednem 1970), nikoli 19. ledna 2038.
           Tento problém vzniká kvůli přetečení celého čísla, kdy se čítač vyčerpá a přepne znaménko. Tento maximálně negativní počet se bude zvyšovat směrem k nule a pak opět k pozitivním celým číslům.
           Takové chybné výpočty v těchto systémech pravděpodobně způsobí problémy pro uživatele a ostatní závislé strany.'
];
