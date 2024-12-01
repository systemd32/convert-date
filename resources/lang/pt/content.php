<?php

return [
    'title' => 'Converter Timestamp para Data - Conversão de Unix Timestamp',
    'h1' => 'Conversor de Unix Timestamp para Data',
    'meta_keywords' => 'conversor de timestamp para data',
    'meta_description' => 'Converta facilmente os timestamps Unix em datas legíveis com nosso conversor de timestamp para data online gratuito. Rápido, preciso e fácil de usar.',
    'meta_title' => 'Conversor de Timestamp para Data - Conversão Instantânea de Unix Timestamp',
    'locale' => 'pt-PT',
    'select_language' => 'Selecionar Idioma',
    'summary' => 'Converta facilmente timestamps Unix',
    'copy_time' => 'Copiar',
    'done_copy' => 'Copiado!',
    'begin_start' => 'Segundos desde 1 de janeiro de 1970. (UTC)',
    'enter_time' => 'Digite um Timestamp',
    'enter_date' => 'Digite uma Data e Hora',
    'year' => 'Ano',
    'month' => 'Mês',
    'day' => 'Dia',
    'hour' => 'Hora',
    'hour_24h' => 'Hora (24h)',
    'minutes' => 'Minutos',
    'seconds' => 'Segundos',
    'format' => 'Formato',
    'your_time_zone' => 'Seu Fuso Horário',
    'relative' => 'Relativo',
    'what_unix' => 'O que é o unix timestamp?',
    'unix_des' => 'O unix timestamp é uma forma de rastrear o tempo como uma contagem total de segundos. Essa contagem começa no Unix Epoch, em 1º de janeiro de 1970, à meia-noite UTC. Portanto, o unix timestamp é simplesmente o número de segundos entre uma data específica e o Unix Epoch. Também vale a pena notar (graças aos comentários dos visitantes deste site) que esse ponto no tempo tecnicamente não muda, não importa onde você esteja no mundo. Isso é muito útil para sistemas de computador para rastrear e organizar informações datadas em aplicações dinâmicas e distribuídas, tanto online quanto no lado do cliente.',
    'human_time' => 'Tempo legível por humanos',
    '1_minute' => '1 Minuto',
    '60_second' => '60 Segundos',
    '1_hour' => '1 Hora',
    '3600_second' => '3600 Segundos',
    '1_day' => '1 Dia',
    '86400_second' => '86400 Segundos',
    '1_week' => '1 Semana',
    '604800_second' => '604800 Segundos',
    '1_month' => '1 Mês (30,44 dias)',
    '2629743_second' => '2629743 Segundos',
    '1_year' => '1 Ano (365,24 dias)',
    '31556926_second' => '31556926 Segundos',
    '2038' => 'O que acontece em 19 de janeiro de 2038?',
    '2038_des_1' => 'O problema do ano 2038 (também conhecido como Y2038, Epochalypse, Y2k38 ou Unix Y2K) está relacionado à representação do tempo em muitos sistemas digitais como o número de segundos passados desde 00:00:00 UTC em 1º de janeiro de 1970 e armazenados como um número inteiro com sinal de 32 bits. Essas implementações não conseguem codificar horários após 03:14:07 UTC em 19 de janeiro de 2038. Semelhante ao problema Y2K, o problema do ano 2038 é causado pela falta de capacidade para representar o tempo.',
    '2038_des_2' => 'O último horário desde 1º de janeiro de 1970 que pode ser armazenado usando um número inteiro com sinal de 32 bits é 03:14:07 em 19 de janeiro de 2038 (231-1 = 2.147.483.647 segundos após 1º de janeiro de 1970). Programas que tentarem incrementar o tempo além dessa data farão com que o valor seja armazenado internamente como um número negativo, o que esses sistemas interpretarão como tendo ocorrido em 20:45:52 de sexta-feira, 13 de dezembro de 1901 (2.147.483.648 segundos antes de 1º de janeiro de 1970), em vez de 19 de janeiro de 2038. Isso é causado pelo estouro de inteiro, onde o contador fica sem bits utilizáveis e vira o bit de sinal. Isso reporta o número mais negativo possível, e o contador começa a contar até zero e, em seguida, avança novamente pelos números positivos. Cálculos errôneos em tais sistemas provavelmente causarão problemas para os usuários e outras partes dependentes.',
];
