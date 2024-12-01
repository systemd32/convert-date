<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4DQNB32C8E"></script>
    <script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-4DQNB32C8E');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>

    <title>{{ __('content.title') }}</title>

    <meta name="keywords" content="{{ __('content.meta_keywords') }}"/>
    <meta name="description" content="{{ __('content.meta_description') }}"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="{{ __('content.meta_title') }}"/>
    <meta name="twitter:description" content="{{ __('content.meta_description') }}"/>
    <meta name="twitter:image" content="link_image"/>

    <meta property="og:title" content="{{ __('content.meta_title') }}"/>
    <meta property="og:description" content="{{ __('content.meta_description') }}"/>
    <meta property="og:url" content="https://dateconvertor.com"/>
    <meta property="og:image" content="/img/instant.png"/>
    <meta property="og:locale" content="{{ __('content.locale') }}"/>
    <meta property="og:type" content=website/>
    <meta property="og:site_name" content="dateconvertor"/>
    <meta property="og:image:secure_url" content="/img/instant.png"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="628"/>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

    <!-- Optional: Bootstrap 5 JavaScript with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('/js/home.js') }}"></script>
</head>
<body>
<!-- menu -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand text-danger" href="/"><i style="color: #6cb2eb">dateconvertor.com</i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('content.select_language') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        <!-- Example of many items -->
                        <li><a class="dropdown-item" href="/af/">Afrikaans</a></li>
                        <li><a class="dropdown-item" href="/sq/">Albanian</a></li>
                        <li><a class="dropdown-item" href="/am/">Amharic</a></li>
                        <li><a class="dropdown-item" href="/ar/">Arabic</a></li>
                        <li><a class="dropdown-item" href="/hy/">Armenian</a></li>
                        <li><a class="dropdown-item" href="/az/">Azerbaijani</a></li>
                        <li><a class="dropdown-item" href="/bn/">Bengali</a></li>
                        <li><a class="dropdown-item" href="/bs/">Bosnian</a></li>
                        <li><a class="dropdown-item" href="/bg/">Bulgarian</a></li>
                        <li><a class="dropdown-item" href="/ca/">Catalan</a></li>
                        <li><a class="dropdown-item" href="/zh/">Chinese (Simplified)</a></li>
                        <li><a class="dropdown-item" href="/zh-TW/">Chinese (Traditional)</a></li>
                        <li><a class="dropdown-item" href="/hr/">Croatian</a></li>
                        <li><a class="dropdown-item" href="/cs/">Czech</a></li>
                        <li><a class="dropdown-item" href="/da/">Danish</a></li>
                        <li><a class="dropdown-item" href="/fa-AF/">Dari</a></li>
                        <li><a class="dropdown-item" href="/nl/">Dutch</a></li>
                        <li><a class="dropdown-item" href="/en/">English</a></li>
                        <li><a class="dropdown-item" href="/et/">Estonian</a></li>
                        <li><a class="dropdown-item" href="/fa/">Farsi (Persian)</a></li>
                        <li><a class="dropdown-item" href="/tl/">Filipino Tagalog</a></li>
                        <li><a class="dropdown-item" href="/fi/">Finnish</a></li>
                        <li><a class="dropdown-item" href="/fr/">French</a></li>
                        <li><a class="dropdown-item" href="/fr-CA/">French (Canada)</a></li>
                        <li><a class="dropdown-item" href="/ka/">Georgian</a></li>
                        <li><a class="dropdown-item" href="/de/">German</a></li>
                        <li><a class="dropdown-item" href="/el/">Greek</a></li>
                        <li><a class="dropdown-item" href="/gu/">Gujarati</a></li>
                        <li><a class="dropdown-item" href="/ht/">Haitian Creole</a></li>
                        <li><a class="dropdown-item" href="/ha/">Hausa</a></li>
                        <li><a class="dropdown-item" href="/he/">Hebrew</a></li>
                        <li><a class="dropdown-item" href="/hi/">Hindi</a></li>
                        <li><a class="dropdown-item" href="/hu/">Hungarian</a></li>
                        <li><a class="dropdown-item" href="/is/">Icelandic</a></li>
                        <li><a class="dropdown-item" href="/id/">Indonesian</a></li>
                        <li><a class="dropdown-item" href="/it/">Italian</a></li>
                        <li><a class="dropdown-item" href="/ja/">Japanese</a></li>
                        <li><a class="dropdown-item" href="/kn/">Kannada</a></li>
                        <li><a class="dropdown-item" href="/kk/">Kazakh</a></li>
                        <li><a class="dropdown-item" href="/ko/">Korean</a></li>
                        <li><a class="dropdown-item" href="/lv/">Latvian</a></li>
                        <li><a class="dropdown-item" href="/lt/">Lithuanian</a></li>
                        <li><a class="dropdown-item" href="/mk/">Macedonian</a></li>
                        <li><a class="dropdown-item" href="/ms/">Malay</a></li>
                        <li><a class="dropdown-item" href="/ml/">Malayalam</a></li>
                        <li><a class="dropdown-item" href="/mt/">Maltese</a></li>
                        <li><a class="dropdown-item" href="/mn/">Mongolian</a></li>
                        <li><a class="dropdown-item" href="/no/">Norwegian</a></li>
                        <li><a class="dropdown-item" href="/fa-PS/">Persian</a></li>
                        <li><a class="dropdown-item" href="/ps/">Pashto</a></li>
                        <li><a class="dropdown-item" href="/pl/">Polish</a></li>
                        <li><a class="dropdown-item" href="/pt/">Portuguese</a></li>
                        <li><a class="dropdown-item" href="/ro/">Romanian</a></li>
                        <li><a class="dropdown-item" href="/ru/">Russian</a></li>
                        <li><a class="dropdown-item" href="/sr/">Serbian</a></li>
                        <li><a class="dropdown-item" href="/si/">Sinhala</a></li>
                        <li><a class="dropdown-item" href="/sk/">Slovak</a></li>
                        <li><a class="dropdown-item" href="/sl/">Slovenian</a></li>
                        <li><a class="dropdown-item" href="/so/">Somali</a></li>
                        <li><a class="dropdown-item" href="/es/">Spanish</a></li>
                        <li><a class="dropdown-item" href="/es-MX/">Spanish (Mexico)</a></li>
                        <li><a class="dropdown-item" href="/sw/">Swahili</a></li>
                        <li><a class="dropdown-item" href="/sv/">Swedish</a></li>
                        <li><a class="dropdown-item" href="/tl-TL/">Tagalog</a></li>
                        <li><a class="dropdown-item" href="/ta/">Tamil</a></li>
                        <li><a class="dropdown-item" href="/te/">Telugu</a></li>
                        <li><a class="dropdown-item" href="/th/">Thai</a></li>
                        <li><a class="dropdown-item" href="/tr/">Turkish</a></li>
                        <li><a class="dropdown-item" href="/uk/">Ukrainian</a></li>
                        <li><a class="dropdown-item" href="/ur/">Urdu</a></li>
                        <li><a class="dropdown-item" href="/uz/">Uzbek</a></li>
                        <li><a class="dropdown-item" href="/vi/">Vietnamese</a></li>
                        <li><a class="dropdown-item" href="/cy/">Welsh</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    <h1 class="text-success text-center">{{ __('content.h1') }}</h1>
    <div class="text-center">{{ __('content.summary') }}</div>

    <div class="row mt-lg-4">
        <h2 class="text-center"><span id="current-time">1724766645</span>
            <button id="copyCurrentTime" type="button" class="btn btn-outline-secondary btn-sm" style="margin-left: 10px">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z"></path>
                </svg>
                {{ __('content.copy_time') }}
            </button>
            <span id="tooltip" style="visibility: hidden; position: absolute; background-color: black; color: white; border-radius: 3px; padding: 5px;">{{ __('content.done_copy') }}</span>
        </h2>

        <div class="text-center">{{ __('content.begin_start') }}</div>
    </div>

    <div class="row" style="margin-top: 20px">
        <div class="col-12 col-md-6">
            <strong>{{ __('content.enter_time') }}</strong>

            <input min="0" type="number" class="form-control mt-2" id="unix_time" placeholder="1724687212">
            <div style="height: 10px"></div>

            <div class="input-group">
                <button id="copy2" type="button" class="btn btn-outline-primary form-control">{{ __('content.copy_time') }}</button>
                <span id="tooltip2" style="visibility: hidden; position: absolute; background-color: black; color: white; border-radius: 3px; padding: 5px;">{{ __('content.done_copy') }}</span>
            </div>



        </div>
        <div class="col-12 col-md-6">
            <strong>{{ __('content.enter_date') }}</strong>
            <div style="height: 10px"></div>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="{{ __('content.year') }}" aria-label="{{ __('content.year') }}" disabled value="{{ __('content.year') }}">
                <input type="text" class="form-control" placeholder="{{ __('content.month') }}" aria-label="{{ __('content.month') }}" disabled value="{{ __('content.month') }}">
                <input type="text" class="form-control" placeholder="{{ __('content.day') }}" aria-label="{{ __('content.day') }}" disabled value="{{ __('content.day') }}">
                <input type="text" class="form-control" placeholder="{{ __('content.hour') }}" aria-label="{{ __('content.hour_24h') }}" disabled value="{{ __('content.hour_24h') }}">
                <input type="text" class="form-control" placeholder="{{ __('content.minutes') }}" aria-label="{{ __('content.minutes') }}" disabled value="{{ __('content.minutes') }}">
                <input type="text" class="form-control" placeholder="{{ __('content.seconds') }}" aria-label="{{ __('content.seconds') }}" disabled value="{{ __('content.seconds') }}">
            </div>
            <div class="input-group mt-2">
                <input id="year" type="number" min="0" class="form-control input-date" placeholder="{{ __('content.year') }}" aria-label="{{ __('content.year') }}">
                <input id="month" type="number" min="1" max="12" class="form-control input-date" placeholder="{{ __('content.month') }}" aria-label="{{ __('content.month') }}">
                <input id="day" type="number" min="1" max="31" class="form-control input-date" placeholder="{{ __('content.day') }}" aria-label="{{ __('content.day') }}">
                <input id="hour" type="number" min="0" max="23" class="form-control input-date" placeholder="{{ __('content.hour') }}" aria-label="{{ __('content.hour_24h') }}">
                <input id="minute" type="number" min="0" max="59" class="form-control input-date" placeholder="{{ __('content.minutes') }}" aria-label="{{ __('content.minutes') }}">
                <input id="second" type="number" min="0" max="59" class="form-control input-date" placeholder="{{ __('content.seconds') }}" aria-label="{{ __('content.seconds') }}">
            </div>

            <div style="height: 20px"></div>

        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-6">
            <table class="table table-bordered table-stripeds">
                <thead>
                <tr>
                    <th scope="col">{{ __('content.format') }}</th>
                    <td scope="col">{{ __('content.seconds') }}</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>GMT</th>
                    <td><span id="gmt-timestamp">Mon Aug 26 2024 15:46:52 GMT+0000</span></td>
                </tr>
                <tr>
                    <th>{{ __('content.your_time_zone') }}</th>
                    <td id="local-timestamp">Mon Aug 26 2024 22:46:52 GMT+0700 (Indochina Time)</td>
                </tr>
                <tr>
                    <th>{{ __('content.relative') }}</th>
                    <td id="relative-timestamp">12 minutes ago</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col-12 col-md-6">
            <table class="table table-bordered table-stripeds">
                <thead>
                <tr>
                    <th class="bg-light" colspan="2">The current epoch translates to</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th><a href="https://en.wikipedia.org/wiki/Coordinated_Universal_Time">UTC</a></th>
                    <td><span id="utc-format">11/30/2024 @ 2:43pm</span></td>
                </tr>
                <tr>
                    <th><a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a></th>
                    <td><span id="iso8601-format">2024-11-30T14:43:05+00:00	</span></td>
                </tr>
                <tr>
                    <th>RFC <a href="https://tools.ietf.org/html/rfc822"> 822</a>, <a href="https://tools.ietf.org/html/rfc1036">1036</a>, <a href="https://tools.ietf.org/html/rfc1123">1123</a>, <a href="https://tools.ietf.org/html/rfc2822">2822</a></th>
                    <td><span id="rfc-format">Sat, 30 Nov 2024 14:43:05 +0000</span></td>
                </tr>
                <tr>
                    <th><a href="https://tools.ietf.org/html/rfc2822">RFC 2822</a></th>
                    <td><span id="rfc2822-format">Saturday, 30-Nov-24 14:43:05 UTC</span></td>
                </tr>
                <tr>
                    <th><a href="https://tools.ietf.org/html/rfc3339">RFC 3339</a></th>
                    <td><span id="rfc3339-format">2024-11-30T14:43:05+00:00</span></td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>

    <div class="row">
        <h2>{{ __('content.what_unix') }}</h2>
        <p>{{ __('content.unix_des') }}</p>

        <div class="row">
            <div class="col-md-12">
                <table class="table caption-top table-bordered table-striped">
                    <thead>
                    <tr>
                        <th scope="col">{{ __('content.human_time') }}</th>
                        <th scope="col">{{ __('content.seconds') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ __('content.1_minute') }}</td>
                        <td>{{ __('content.60_second') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('content.1_hour') }}</td>
                        <td>{{ __('content.3600_second') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('content.1_day') }}</td>
                        <td>{{ __('content.86400_second') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('content.1_week') }}</td>
                        <td>{{ __('content.604800_second') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('content.1_month') }}</td>
                        <td>{{ __('content.2629743_second') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('content.1_year') }}</td>
                        <td>{{ __('content.31556926_second') }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <div class="row">
        <h2>{{ __('content.2038') }}</h2>
        <p>{{ __('content.2038_des_1') }}
        </p>
        <p>{{ __('content.2038_des_2') }}</p>
    </div>
</div>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">©2024 dateconvertor.com</span>
    </div>
</footer>

</body>

</html>
