<?php

return [
    'title' => 'Convert Timestamp to Date - Unix Timestamp Conversion',
    'h1' => 'Unix Timestamp to Date Converter',
    'meta_keywords' => 'timestamp to date converter',
    'meta_description' => 'Easily convert Unix timestamps to readable dates with our free online timestamp to date converter. Fast, accurate, and simple to use.',
    'meta_title' => 'Timestamp to Date Converter - Instant Unix Timestamp Conversion',
    'locale' => 'en-US',
    'select_language' => 'Select Language',
    'summary' => 'Easily convert Unix timestamps',
    'copy_time' => 'Copy',
    'done_copy' => 'Copied!',
    'begin_start' => 'Seconds since Jan 01 1970. (UTC)',
    'enter_time' => 'Enter a Timestamp',
    'enter_date' => 'Enter a Date & Time',
    'year' => 'Year',
    'month' => 'Month',
    'day' => 'Day',
    'hour' => 'Hour',
    'hour_24h' => 'Hour(24h)',
    'minutes' => 'Minutes',
    'seconds' => 'Seconds',
    'format' => 'Format',
    'your_time_zone' => 'Your Time Zone',
    'relative' => 'Relative',
    'what_unix' => 'What is the unix time stamp?',
    'unix_des' => 'The unix time stamp is a way to track time as a running total of seconds.
           This count starts at the Unix Epoch on January 1st, 1970 at UTC.
           Therefore, the unix time stamp is merely the number of seconds between a particular date and the Unix Epoch.
           It should also be pointed out (thanks to the comments from visitors to this site) that this point in time technically does not change no matter where you are located on the globe.
           This is very useful to computer systems for tracking and sorting dated information in dynamic and distributed applications both online and client side.',
    'human_time' => 'Human Readable Time',
    '1_minute' => '1 Minute',
    '60_second' => '60 Seconds',
    '1_hour' => '1 Hour',
    '3600_second' => '3600 Seconds',
    '1_day' => '1 Day',
    '86400_second' => '86400 Seconds',
    '1_week' => '1 Week',
    '604800_second' => '604800 Seconds',
    '1_month' => '1 Month (30.44 days)',
    '2629743_second' => '2629743 Seconds',
    '1_year' => '1 Year (365.24 days)',
    '31556926_second' => '31556926 Seconds',
    '2038' => 'What happens on January 19, 2038?',
    '2038_des_1' => 'The Year 2038 problem (also called Y2038, Epochalypse, Y2k38, or Unix Y2K) relates to representing time in many digital systems as the number of seconds passed since 00:00:00 UTC on 1
           January 1970 and storing it as a signed 32-bit integer. Such implementations cannot encode times after 03:14:07 UTC on 19 January 2038. Similar to the Y2K problem, the Year 2038 problem is
           caused by insufficient capacity used to represent time.',
    '2038_des_2' => 'The latest time since 1 January 1970 that can be stored using a signed 32-bit integer is 03:14:07 on Tuesday, 19 January 2038 (231-1 = 2,147,483,647 seconds after 1 January 1970). Programs
           that attempt to increment the time beyond this date will cause the value to be stored internally as a negative number, which these systems will interpret as having occurred at 20:45:52 on
           Friday, 13 December 1901 (2,147,483,648 seconds before 1 January 1970) rather than 19 January 2038. This is caused by integer overflow, during which the counter runs out of usable digit
           bits, and flips the sign bit instead. This reports a maximally negative number, and continues to count up, towards zero, and then up through the positive integers again. Resulting erroneous
           calculations on such systems are likely to cause problems for users and other reliant parties.'
];
