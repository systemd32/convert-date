<?php

return [
    'title' => 'Konwersja Timestamp na datę - Konwersja Unix Timestamp',
    'h1' => 'Konwerter Unix Timestamp na datę',
    'meta_keywords' => 'konwerter timestamp na datę',
    'meta_description' => 'Łatwo konwertuj Unix timestamp na czytelne daty za pomocą naszego darmowego narzędzia online. Szybko, dokładnie i łatwo w użyciu.',
    'meta_title' => 'Konwerter Timestamp na datę - Natychmiastowa konwersja Unix Timestamp',
    'locale' => 'pl-PL',
    'select_language' => 'Wybierz język',
    'summary' => 'Łatwo konwertuj Unix timestamps',
    'copy_time' => 'Kopiuj',
    'done_copy' => 'Skopiowano!',
    'begin_start' => 'Sekundy od 1 stycznia 1970 roku. (UTC)',
    'enter_time' => 'Wprowadź Timestamp',
    'enter_date' => 'Wprowadź datę i godzinę',
    'year' => 'Rok',
    'month' => 'Miesiąc',
    'day' => 'Dzień',
    'hour' => 'Godzina',
    'hour_24h' => 'Godzina (24h)',
    'minutes' => 'Minuty',
    'seconds' => 'Sekundy',
    'format' => 'Format',
    'your_time_zone' => 'Twoja strefa czasowa',
    'relative' => 'Relatywne',
    'what_unix' => 'Czym jest unix timestamp?',
    'unix_des' => 'Unix timestamp to sposób śledzenia czasu jako liczba sekund, które upłynęły od Unix Epoch, czyli 1 stycznia 1970 roku o godzinie 00:00 UTC. Dlatego Unix timestamp to po prostu liczba sekund między określoną datą a Unix Epoch. Należy również zauważyć (dzięki komentarzom odwiedzających tę stronę), że ten punkt czasowy technicznie nie zmienia się, niezależnie od tego, gdzie na świecie się znajdujesz. Jest to bardzo przydatne dla systemów komputerowych, które muszą śledzić i sortować dane czasowe w dynamicznych i rozproszonych aplikacjach zarówno online, jak i po stronie klienta.',
    'human_time' => 'Czas w formacie czytelnym dla człowieka',
    '1_minute' => '1 minuta',
    '60_second' => '60 sekund',
    '1_hour' => '1 godzina',
    '3600_second' => '3600 sekund',
    '1_day' => '1 dzień',
    '86400_second' => '86400 sekund',
    '1_week' => '1 tydzień',
    '604800_second' => '604800 sekund',
    '1_month' => '1 miesiąc (30.44 dni)',
    '2629743_second' => '2629743 sekundy',
    '1_year' => '1 rok (365.24 dni)',
    '31556926_second' => '31556926 sekund',
    '2038' => 'Co się wydarzy 19 stycznia 2038 roku?',
    '2038_des_1' => 'Problem z rokiem 2038 (znany również jako Y2038, Epochalypse, Y2k38 lub Unix Y2K) dotyczy reprezentowania czasu w wielu systemach cyfrowych jako liczba sekund, które upłynęły od 00:00:00 UTC 1 stycznia 1970 roku i przechowywania jej jako liczbę całkowitą 32-bitową ze znakiem. Takie implementacje nie będą w stanie zakodować czasu po 03:14:07 UTC 19 stycznia 2038 roku. Podobnie jak problem Y2K, problem z rokiem 2038 wynika z niewystarczającej pojemności do reprezentowania czasu.',
    '2038_des_2' => 'Najpóźniejszy czas, który można przechować za pomocą liczby całkowitej 32-bitowej ze znakiem, to 03:14:07 w dniu 19 stycznia 2038 roku (231-1 = 2,147,483,647 sekund po 1 stycznia 1970 roku). Programy, które próbują zwiększyć czas po tej dacie, zapiszą wartość jako liczbę ujemną, którą systemy te zinterpretują jako wystąpienie o 20:45:52 w piątek, 13 grudnia 1901 roku (2,147,483,648 sekund przed 1 stycznia 1970 roku), a nie 19 stycznia 2038 roku. Jest to spowodowane przepełnieniem liczby całkowitej, podczas którego licznik kończy się na dostępnych bitach cyfr, a następnie odwraca bit znaku. To zgłasza największą liczbę ujemną, a następnie licznik zaczyna liczyć w stronę zera, a potem znowu przechodzi przez liczby dodatnie. Takie błędne obliczenia w tych systemach mogą powodować problemy dla użytkowników i innych stron zależnych.',
];
