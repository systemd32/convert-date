<?php

return [
    'title' => 'Timestamp in Datum umwandeln - Unix Timestamp-Konvertierung',
    'h1' => 'Unix Timestamp in Datum Konverter',
    'meta_keywords' => 'Timestamp in Datum Konverter',
    'meta_description' => 'Konvertieren Sie Unix-Timestamps einfach in lesbare Daten mit unserem kostenlosen Online-Timestamp-in-Datum-Konverter. Schnell, genau und einfach zu bedienen.',
    'meta_title' => 'Timestamp in Datum Konverter - Sofortige Unix Timestamp-Konvertierung',
    'locale' => 'de-DE',
    'select_language' => 'Sprache auswählen',
    'summary' => 'Unix-Timestamps einfach konvertieren',
    'copy_time' => 'Kopieren',
    'done_copy' => 'Kopiert!',
    'begin_start' => 'Sekunden seit dem 1. Januar 1970. (UTC)',
    'enter_time' => 'Timestamp eingeben',
    'enter_date' => 'Datum und Uhrzeit eingeben',
    'year' => 'Jahr',
    'month' => 'Monat',
    'day' => 'Tag',
    'hour' => 'Stunde',
    'hour_24h' => 'Stunde (24h)',
    'minutes' => 'Minuten',
    'seconds' => 'Sekunden',
    'format' => 'Format',
    'your_time_zone' => 'Ihre Zeitzone',
    'relative' => 'Relativ',
    'what_unix' => 'Was ist der Unix Timestamp?',
    'unix_des' => 'Der Unix Timestamp ist eine Methode, um die Zeit als laufende Anzahl von Sekunden zu verfolgen.
           Diese Zählung beginnt mit der Unix-Epoche am 1. Januar 1970 um UTC.
           Daher ist der Unix Timestamp einfach die Anzahl der Sekunden zwischen einem bestimmten Datum und der Unix-Epoche.
           Es sollte auch darauf hingewiesen werden (danke für die Kommentare von Besuchern dieser Seite), dass dieser Zeitpunkt technisch gesehen nicht verändert wird, egal wo auf der Welt man sich befindet.
           Dies ist sehr nützlich für Computersysteme, um zeitbasierte Informationen in dynamischen und verteilten Anwendungen sowohl online als auch auf der Client-Seite zu verfolgen und zu sortieren.',
    'human_time' => 'Lesbare Zeit für den Menschen',
    '1_minute' => '1 Minute',
    '60_second' => '60 Sekunden',
    '1_hour' => '1 Stunde',
    '3600_second' => '3600 Sekunden',
    '1_day' => '1 Tag',
    '86400_second' => '86400 Sekunden',
    '1_week' => '1 Woche',
    '604800_second' => '604800 Sekunden',
    '1_month' => '1 Monat (30,44 Tage)',
    '2629743_second' => '2629743 Sekunden',
    '1_year' => '1 Jahr (365,24 Tage)',
    '31556926_second' => '31556926 Sekunden',
    '2038' => 'Was passiert am 19. Januar 2038?',
    '2038_des_1' => 'Das Jahr 2038-Problem (auch Y2038, Epochalypse, Y2k38 oder Unix Y2K genannt) bezieht sich darauf, wie viele digitale Systeme Zeit als Anzahl von Sekunden seit 00:00:00 UTC am 1.
           Januar 1970 darstellen und es als vorzeichenbehaftete 32-Bit-Ganzzahl speichern. Solche Implementierungen können keine Zeiten nach 03:14:07 UTC am 19. Januar 2038 kodieren. Ähnlich wie das Y2K-Problem wird das 2038-Problem
           durch unzureichende Kapazität zur Darstellung von Zeit verursacht.',
    '2038_des_2' => 'Die späteste Zeit seit dem 1. Januar 1970, die mit einer vorzeichenbehafteten 32-Bit-Ganzzahl gespeichert werden kann, ist 03:14:07 am Dienstag, den 19. Januar 2038 (231-1 = 2.147.483.647 Sekunden nach dem 1. Januar 1970).
           Programme, die versuchen, die Zeit über dieses Datum hinaus zu erhöhen, führen dazu, dass der Wert intern als negative Zahl gespeichert wird, was diese Systeme als 20:45:52 am Freitag, den 13. Dezember 1901 (2.147.483.648 Sekunden vor dem 1. Januar 1970)
           interpretieren, anstatt den 19. Januar 2038. Dies wird durch Überlauf von Ganzzahlen verursacht, wobei der Zähler keine verwendbaren Ziffern mehr hat und stattdessen das Vorzeichenbit umkehrt. Dadurch wird eine maximal negative Zahl angezeigt,
           die weiterhin nach oben zählt, bis sie Null erreicht und dann wieder durch die positiven Ganzzahlen steigt. Fehlerhafte Berechnungen in solchen Systemen könnten zu Problemen für Benutzer und andere betroffene Parteien führen.'
];
