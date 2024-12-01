<?php

return [
    'title' => 'Epoch Converter - TimeStamp Converter - Conversion',
    'h1' => 'Convertisseur de Unix Timestamp en Date',
    'meta_keywords' => 'convertisseur de timestamp en date',
    'meta_description' => 'Unix TimeStamp - Convertissez facilement les Unix timestamps en dates lisibles avec notre convertisseur en ligne gratuit. Rapide, précis et facile à utiliser.',
    'meta_title' => 'Convertisseur de Timestamp en Date - Conversion Instantanée de Unix Timestamp',
    'locale' => 'fr-CA',
    'select_language' => 'Sélectionner la langue',
    'summary' => 'Convertissez facilement les Unix timestamps',
    'copy_time' => 'Copier',
    'done_copy' => 'Copié!',
    'begin_start' => 'Secondes depuis le 1er janvier 1970. (UTC)',
    'enter_time' => 'Entrez un Timestamp',
    'enter_date' => 'Entrez une Date et Heure',
    'year' => 'Année',
    'month' => 'Mois',
    'day' => 'Jour',
    'hour' => 'Heure',
    'hour_24h' => 'Heure (24h)',
    'minutes' => 'Minutes',
    'seconds' => 'Secondes',
    'format' => 'Format',
    'your_time_zone' => 'Votre Fuseau Horaire',
    'relative' => 'Relatif',
    'what_unix' => 'Qu\'est-ce que le unix timestamp?',
    'unix_des' => 'Le unix timestamp est un moyen de suivre le temps sous forme d\'un total cumulatif de secondes.
           Ce comptage commence à l\'époque Unix du 1er janvier 1970 à UTC.
           Par conséquent, le unix timestamp est simplement le nombre de secondes entre une date particulière et l\'époque Unix.
           Il convient également de noter (merci aux commentaires des visiteurs de ce site) que ce point dans le temps ne change techniquement pas peu importe où vous vous trouvez dans le monde.
           Cela est très utile pour les systèmes informatiques afin de suivre et trier les informations datées dans des applications dynamiques et distribuées, à la fois en ligne et côté client.',
    'human_time' => 'Temps lisible par l\'homme',
    '1_minute' => '1 Minute',
    '60_second' => '60 Secondes',
    '1_hour' => '1 Heure',
    '3600_second' => '3600 Secondes',
    '1_day' => '1 Jour',
    '86400_second' => '86400 Secondes',
    '1_week' => '1 Semaine',
    '604800_second' => '604800 Secondes',
    '1_month' => '1 Mois (30,44 jours)',
    '2629743_second' => '2629743 Secondes',
    '1_year' => '1 An (365,24 jours)',
    '31556926_second' => '31556926 Secondes',
    '2038' => 'Que se passe-t-il le 19 janvier 2038?',
    '2038_des_1' => 'Le problème de l\'année 2038 (également appelé Y2038, Epochalypse, Y2k38 ou Unix Y2K) concerne la manière de représenter le temps dans de nombreux systèmes numériques sous forme du nombre de secondes écoulées depuis le 00:00:00 UTC du 1er
           janvier 1970 et de le stocker sous forme d\'un entier signé de 32 bits. De telles implémentations ne peuvent pas encoder des temps après 03:14:07 UTC le 19 janvier 2038. Comme pour le problème Y2K, le problème de l\'année 2038 est
           causé par une capacité insuffisante utilisée pour représenter le temps.',
    '2038_des_2' => 'Le dernier temps depuis le 1er janvier 1970 pouvant être stocké avec un entier signé de 32 bits est 03:14:07 le mardi 19 janvier 2038 (231-1 = 2 147 483 647 secondes après le 1er janvier 1970). Les programmes
           tentant d\'incrémenter le temps au-delà de cette date provoqueront un stockage interne de la valeur sous forme de nombre négatif, que ces systèmes interpréteront comme s\'étant produit à 20:45:52 le
           vendredi 13 décembre 1901 (2 147 483 648 secondes avant le 1er janvier 1970) au lieu du 19 janvier 2038. Cela est dû à un dépassement d\'entier, lorsque le compteur n\'a plus de bits numériques utilisables
           et inverse le bit de signe. Cela donne un nombre négatif maximal, et continue à compter vers zéro, puis à augmenter à nouveau à travers les entiers positifs. Les calculs erronés dans ces systèmes risquent de provoquer des problèmes pour les utilisateurs et autres parties concernées.'
];
