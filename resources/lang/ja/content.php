<?php

return [
    'title' => 'タイムスタンプを日付に変換 - Unixタイムスタンプ変換',
    'h1' => 'Unixタイムスタンプから日付への変換ツール',
    'meta_keywords' => 'タイムスタンプから日付への変換ツール',
    'meta_description' => 'Unixタイムスタンプを読みやすい日付に簡単に変換できる無料のオンラインツールです。高速、正確、簡単に使用できます。',
    'meta_title' => 'タイムスタンプから日付への変換ツール - 即時Unixタイムスタンプ変換',
    'locale' => 'ja-JP',
    'select_language' => '言語を選択',
    'summary' => 'Unixタイムスタンプを簡単に変換',
    'copy_time' => 'コピー',
    'done_copy' => 'コピーしました!',
    'begin_start' => '1970年1月1日からの秒数 (UTC)',
    'enter_time' => 'タイムスタンプを入力',
    'enter_date' => '日付と時刻を入力',
    'year' => '年',
    'month' => '月',
    'day' => '日',
    'hour' => '時',
    'hour_24h' => '時（24時間形式）',
    'minutes' => '分',
    'seconds' => '秒',
    'format' => '形式',
    'your_time_zone' => 'あなたのタイムゾーン',
    'relative' => '相対的',
    'what_unix' => 'Unixタイムスタンプとは?',
    'unix_des' => 'Unixタイムスタンプは、時間を秒数として追跡する方法です。
           このカウントは、1970年1月1日00:00 UTCから始まります。
           そのため、Unixタイムスタンプは、特定の日付とUnixエポックとの間の秒数にすぎません。
           また、この時点は技術的に世界中どこにいても変更されることはないということも指摘するべきです（このサイトの訪問者のコメントに感謝します）。
           これは、動的で分散型のオンラインアプリケーションやクライアント側のアプリケーションでの日付に関連する情報を追跡および整理するために、コンピュータシステムにとって非常に便利です。',
    'human_time' => '人間が読みやすい時間',
    '1_minute' => '1分',
    '60_second' => '60秒',
    '1_hour' => '1時間',
    '3600_second' => '3600秒',
    '1_day' => '1日',
    '86400_second' => '86400秒',
    '1_week' => '1週間',
    '604800_second' => '604800秒',
    '1_month' => '1ヶ月（30.44日）',
    '2629743_second' => '2629743秒',
    '1_year' => '1年（365.24日）',
    '31556926_second' => '31556926秒',
    '2038' => '2038年1月19日に何が起こるのか?',
    '2038_des_1' => '2038年問題（Y2038、Epochalypse、Y2k38、Unix Y2Kとも呼ばれる）は、多くのデジタルシステムが、1970年1月1日00:00:00 UTCから経過した秒数として時間を表現し、32ビット符号付き整数として保存する方法に関する問題です。このような実装では、2038年1月19日03:14:07 UTC以降の時間をエンコードすることができません。Y2K問題に似て、2038年問題は時間を表現するための容量不足が原因です。',
    '2038_des_2' => '1970年1月1日以降、符号付き32ビット整数を使用して保存できる最後の時刻は、2038年1月19日火曜日03:14:07（1970年1月1日から2,147,483,647秒後）です。この日付を超えて時間を進めようとするプログラムは、その値を内部的に負の数として保存し、これらのシステムはそれを1901年12月13日金曜日20:45:52（1970年1月1日より2,147,483,648秒前）に発生したものとして解釈します。これは整数オーバーフローが原因で、カウンターが使用可能な桁を使い果たし、代わりに符号ビットが反転するためです。これにより、最大の負の数が報告され、その後ゼロに向かってカウントし、再び正の整数に向かってカウントされ続けます。このようなシステムでの誤った計算は、ユーザーや依存する他の関係者に問題を引き起こす可能性があります。',
];