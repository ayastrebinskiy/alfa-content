<?php
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="ru" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.1, maximum-scale=1, minimal-ui">
        <title>Alfa-Content &mdash; сочный контент-маркетинг</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="csrf" content="<?php echo generateValidationKey() ?>">
        <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
        <link rel="stylesheet" href="/assets/styles/main.css?">
        <link rel="stylesheet" href="assets/scripts/magnific-popup/magnific-popup.css">
        <link rel="stylesheet" href="/assets/styles/animate.css?">
        <link rel="stylesheet" href="/assets/styles/style.css">
        <link rel="stylesheet" href="/assets/scripts/owl.carousel.2.1.0/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="/assets/scripts/owl.carousel.2.1.0/assets/owl.theme.default.min.css">
        <script type="text/javascript" src="/assets/scripts/main.js?"></script>
        <script type="text/javascript" src="/assets/scripts/engine.js"></script>
        <script src="/assets/scripts/wow.min.js"></script>
        <script type="text/javascript">new WOW().init();</script>
        <script src="assets/scripts/magnific-popup/jquery.magnific-popup.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.8/jquery.form-validator.min.js"></script>
        <script type="text/javascript" src="/assets/scripts/plugins.js"></script>
        <link sizes="57x57" href="/apple-touch-icon-57x57.png" rel="apple-touch-icon">
        <link sizes="60x60" href="/apple-touch-icon-60x60.png" rel="apple-touch-icon">
        <link sizes="72x72" href="/apple-touch-icon-72x72.png" rel="apple-touch-icon">
        <link sizes="76x76" href="/apple-touch-icon-76x76.png" rel="apple-touch-icon">
        <link sizes="114x114" href="/apple-touch-icon-114x114.png" rel="apple-touch-icon">
        <link sizes="120x120" href="/apple-touch-icon-120x120.png" rel="apple-touch-icon">
        <link sizes="144x144" href="/apple-touch-icon-144x144.png" rel="apple-touch-icon">
        <link sizes="152x152" href="/apple-touch-icon-152x152.png" rel="apple-touch-icon">
        <link sizes="180x180" href="/apple-touch-icon-180x180.png" rel="apple-touch-icon">
        <link sizes="16x16" href="/favicon-16x16.png" rel="icon" type="image/png">
        <link sizes="32x32" href="/favicon-32x32.png" rel="icon" type="image/png">
        <link sizes="96x96" href="/favicon-96x96.png" rel="icon" type="image/png">
        <link sizes="160x160" href="/favicon-160x160.png" rel="icon" type="image/png">
        <link sizes="192x192" href="/favicon-192x192.png" rel="icon" type="image/png">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" sizes="192x192" href="/favicon-192x192.png">
        <link rel="apple-touch-icon" href="/favicon-192x192.png">
        <meta name="msapplication-TileImage" content="/ifavicon-144x144.png">
        <meta itemprop="name" content="Alfa-Content &amp;mdash; сочный контент-маркетинг">
        <meta itemprop="description" content="Alfa-Content &amp;mdash; сочный контент-маркетинг">

        <?php /*

          <meta itemprop="image" content="http://www.example.com/image.jpg">
          <link rel="manifest" href="manifest.json">
          <link rel="yandex-tableau-widget" href="/manifest.json">

          <!-- Twitter Card data
          meta(name='twitter:card', content='product')
          meta(name='twitter:site', content='@publisher_handle')
          meta(name='twitter:title', content='Page Title')
          meta(name='twitter:description', content='Page description less than 200 characters')
          meta(name='twitter:creator', content='@author_handle')
          meta(name='twitter:image', content='http://www.example.com/image.html')
          meta(name='twitter:data1', content='$3')
          meta(name='twitter:label1', content='Price')
          meta(name='twitter:data2', content='Black')
          meta(name='twitter:label2', content='Color')

          -->
          <!-- Open Graph data
          meta(property='og:title', content='Title Here')
          meta(property='og:type', content='article')
          meta(property='og:url', content='http://www.example.com/')
          meta(property='og:image', content='http://example.com/image.jpg')
          meta(property='og:description', content='Description Here')
          meta(property='og:site_name', content='Site Name, i.e. Moz')
          meta(property='og:price:amount', content='15.00')
          meta(property='og:price:currency', content='USD')

          -->

         */ ?>
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="">
        <meta name="msapplication-TileColor" content="#f46470">
        <meta name="theme-color" content="#f46470">

    </head>
    <body class="it-did-not-work">
        <!-- .ac-header-->
        <div class="ac-header">
            <div class="header__bg">
                <?php require('_include/_slider-container.html'); ?>
            </div>
            <div class="ac-header-warp _ac-header-warp">
                <div class="ac-header-warp__bg">
                    <div class="container">
                        <a href="/" class="ac-logo">
                            <div class="logo-box">
                                <div class="logo-box__img">
                                    <svg id="logo" xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56"><path id="green" class="logo_ac-green" d="M88.392,70.816a43.582,43.582,0,0,1-44.8-.027L38,80.494a56.046,56.046,0,0,0,56,.017Z" transform="translate(-38 -32)"/><path id="red" class="logo_ac-red" d="M65.942,32L44.993,68.359a41.991,41.991,0,0,0,41.994.029ZM61.361,62.448L66,54c1.383,2.391,2.791,5.227,4.655,8.45A31.23,31.23,0,0,1,66,63,30.851,30.851,0,0,1,61.361,62.448Z" transform="translate(-38 -32)"/></svg>
                                </div>
                                <div class="logo-box__text">
                                    <h2>Alfa-Content</h2><span>Сочный контент-маркетинг </span>
                                </div>
                            </div>
                        </a>
                        <ul id="ac-topmenu" class="menu">
                            <li class="menu-item"><a href="#ac-i-whatformats">каналы<br>контент-<br>маркетинга</a></li>
                            <li class="menu-item"><a href="#ac-i-wefine">почему мы<br>молодцы</a></li>
                            <li class="menu-item"><a href="#ac-i-youadv">как проходит<br>рекламная<br>кампания</a></li>
                            <li class="menu-item"><a href="#ac-i-tariff">тарифы</a></li>
                            <li class="menu-item"><a href="#ac-i-getresult">Что вы<br>получите</a></li>
                            <li class="menu-item"><a href="#ac-i-work">примеры<br>работ</a></li>
                        </ul>
                        <div class="tel"><a href="tel:+74959802621">+7 (495) 980-26-21</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.ac-header-->
        <!-- .ac-whatformats-->
        <div id="ac-i-whatformats" class="ac-whatformats">
            <div class="container">
                <div class="row bb1">
                    <div class="col-f6 wow fadeIn" data-wow-delay=".1s">
                        <h2 class="ac-head youadv-head whatformats-head">Какие форматы и&nbsp;каналы <nobr>контент-маркетинга</nobr> <span class="ac-head-green">работают</span></h2>
                        <h3 class="ac-head__mini whatformats-head-mini">на качественный трафик и продажи, и&nbsp;обязательно должны быть в вашем медиаплане</h3>
                    </div>
                    <div class="col-f3">
                        <div class="whatformats-block wow fadeIn" data-wow-delay=".2s">
                            <div class="whatformats-block__header">
                                <div class="whatformats-block__ico"><img src="assets/images/whatformats/whatformats1.png" alt="Посты в Instagram, FaceBook, вКонтакте"></div>
                                <div class="whatformats-block__heads">
                                    <h2 class="whatformats-block__head">Посты в Instagram, FaceBook, вКонтакте</h2>
                                </div>
                            </div>
                            <div class="whatformats-block__description">
                                <p class="whatformats-block__description-text">В соцсетях можно делать отличные таргетированные кампании в ленте (в виде креативных постов с картинками и остроумным текстом). Можно работать непосредственно напрямую с популярными блогерами, лидерами мнений и ТОПовыми пабликами. К сожалению, не все тематики «монтируются» с соцстеями, но большинство всё-таки могут успешно работать с этим каналом и получать оттуда превосходный трафик.</p><a href="#" title="Развернуть описание" class="ac-more-link"><span class="ac-more-link__circle ac-more-link__circle-green"></span><span class="ac-more-link__circle ac-more-link__circle-green"></span><span class="ac-more-link__circle ac-more-link__circle-green"></span><span class="ac-more-link__text hide-text">Развернуть описание</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-f3">
                        <div class="whatformats-block wow fadeIn" data-wow-delay=".3s">
                            <div class="whatformats-block__header">
                                <div class="whatformats-block__ico"><img src="assets/images/whatformats/whatformats2.png" alt="Интеграции в ролики YouTube-блогеров"></div>
                                <div class="whatformats-block__head">
                                    <h2 class="whatformats-block__head">Интеграции в ролики YouTube-блогеров</h2>
                                </div>
                            </div>
                            <div class="whatformats-block__description">
                                <p class="whatformats-block__description-text">Это новый musthave в любом медиаплане для бизнеса любой тематики. YouTube – один из основных поставщиков трафика в Рунете, который уже несколько лет как сравнялся с аудиторией федеральных ТВ-каналов в прайм-таймовые часы. На YouTube вы найдёте отличную женскую аудиторию с интересами Дом, Семья, Дети, Красота, Здоровье, Шопинг и пр. Аудиторию мужчин, которые увлекаются или занимаются профессионально строительством, отделкой, проектированием, дизайном. Аудиторию фанатов авто. Аудиторию «новых классов»: хипстеров, яппи, миллениумов и пр. А также весь класс офисных работников всех городов России. Игнорировать YouTube уже просто невозможно! А думать, что там только лишь аудитория школьников и студентов – большая ошибка.</p><a href="#" title="Развернуть описание" class="ac-more-link"><span class="ac-more-link__circle ac-more-link__circle-green"></span><span class="ac-more-link__circle ac-more-link__circle-green"></span><span class="ac-more-link__circle ac-more-link__circle-green"></span><span class="ac-more-link__text hide-text">Развернуть описание</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bb2">
                    <div class="col-3">
                        <div class="whatformats-block wow fadeIn" data-wow-delay=".4s">
                            <div class="whatformats-block__header">
                                <div class="whatformats-block__ico"><img src="assets/images/whatformats/whatformats3.png" alt="Отзывы в женских сообществах"></div>
                                <div class="whatformats-block__head">
                                    <h2 class="whatformats-block__head">Отзывы в женских сообществах</h2>
                                </div>
                            </div>
                            <div class="whatformats-block__description">
                                <p class="whatformats-block__description-text">Таких каналов, где кипит жизнь и любой пост набирает тысячи и десятки тысяч настоящих просмотров и сотни комментариев, на самом деле не много. Но они «золотые», и с ними однозначно стоит работать.</p><a href="#" title="Развернуть описание" class="ac-more-link"><span class="ac-more-link__circle ac-more-link__circle-green"></span><span class="ac-more-link__circle ac-more-link__circle-green"></span><span class="ac-more-link__circle ac-more-link__circle-green"></span><span class="ac-more-link__text hide-text">Развернуть описание</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="whatformats-block wow fadeIn" data-wow-delay=".5s">
                            <div class="whatformats-block__header">
                                <div class="whatformats-block__ico"><img src="assets/images/whatformats/whatformats4.png" alt="Посты у ТОПовых блогеров"></div>
                                <div class="whatformats-block__head">
                                    <h2 class="whatformats-block__head">Посты у ТОПовых блогеров</h2>
                                </div>
                            </div>
                            <div class="whatformats-block__description">
                                <p class="whatformats-block__description-text">К сожалению, эффективных блогеров осталось уже не так много. Поэтому мы стараемся включать в медиапланы именно ТОПовых, с которыми у нас долгая история сотрудничества и хорошие условия работы и которые способны отработать для сайта «на ура». </p><a href="#" title="Развернуть описание" class="ac-more-link"><span class="ac-more-link__circle ac-more-link__circle-green"></span><span class="ac-more-link__circle ac-more-link__circle-green"></span><span class="ac-more-link__circle ac-more-link__circle-green"></span><span class="ac-more-link__text hide-text">Развернуть описание</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="whatformats-block wow fadeIn" data-wow-delay=".6s">
                            <div class="whatformats-block__header">
                                <div class="whatformats-block__ico"><img src="assets/images/whatformats/whatformats5.png" alt="Посты на нишевых сайтах"></div>
                                <div class="whatformats-block__head">
                                    <h2 class="whatformats-block__head">Посты на нишевых сайтах</h2>
                                </div>
                            </div>
                            <div class="whatformats-block__description">
                                <p class="whatformats-block__description-text">Практически в каждой тематике есть хотя бы несколько узконишевых сайтов, где сконцентрировано самое ядро целевой аудитории. Здесь нет миллионной посещаемости, зато собраны все те люди, которым следует узнать о вашем продукте//услуге в первую очередь. И такие сайты обязательно будут в вашем медиаплане.</p><a href="#" title="Развернуть описание" class="ac-more-link"><span class="ac-more-link__circle ac-more-link__circle-green"></span><span class="ac-more-link__circle ac-more-link__circle-green"></span><span class="ac-more-link__circle ac-more-link__circle-green"></span><span class="ac-more-link__text hide-text">Развернуть описание</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="whatformats-block wow fadeIn" data-wow-delay=".7s">
                            <div class="whatformats-block__header">
                                <div class="whatformats-block__ico"><img src="assets/images/whatformats/whatformats6.png" alt="Публикации в СМИ"></div>
                                <div class="whatformats-block__head">
                                    <h2 class="whatformats-block__head">Публикации в СМИ</h2>
                                </div>
                            </div>
                            <div class="whatformats-block__description">
                                <p class="whatformats-block__description-text">К сожалению, это ОЧЕНЬ дорогой канал и он скорее имиджевый, нежели нацеленный на трафик и продажи. Но если у вас серьёзные планы, действительно весомые инфоповоды и авторитетные спикеры – мы без проблем сделаем для вас серию публикаций в СМИ, в том числе деловых СМИ. </p><a href="#" title="Развернуть описание" class="ac-more-link"><span class="ac-more-link__circle ac-more-link__circle-green"></span><span class="ac-more-link__circle ac-more-link__circle-green"></span><span class="ac-more-link__circle ac-more-link__circle-green"></span><span class="ac-more-link__text hide-text">Развернуть описание</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bb1">
                    <div class="col-12">
                        <h3 class="ac-head__mini whatformats-head-mini">Какие форматы и каналы <span class="ac-head-red">отжили свой век</span>, <br>и мы точно не рекомендуем с ними работать</h3>
                    </div>
                </div>
                <div class="row whatformats-red">
                    <div class="col-3">
                        <div class="whatformats-block whatformats-block__nonono wow fadeIn" data-wow-delay=".2s">
                            <div class="whatformats-block__header">
                                <div class="whatformats-block__ico whatformats-block__ico-press"><img src="assets/images/whatformats/whatformats7.png" alt="Пресс-релизы по релизоприёмникам"></div>
                                <div class="whatformats-block__head">
                                    <h2 class="whatformats-block__head">Пресс-релизы по релизоприёмникам</h2>
                                </div>
                            </div>
                            <div class="whatformats-block__description">
                                <p class="whatformats-block__description-text">Это позапрошлый век. Если у вас есть классный инфоповод и вы хотите попасть с ним в СМИ, ваш путь – это только адресные письма журналистам. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="whatformats-block wow fadeIn" data-wow-delay=".4s">
                            <div class="whatformats-block__header">
                                <div class="whatformats-block__ico whatformats-block__ico-top"><img src="assets/images/whatformats/whatformats8.png" alt="Очень дорогие ТОПовые сайты"></div>
                                <div class="whatformats-block__head">
                                    <h2 class="whatformats-block__head">Очень многие дорогие ТОПовые сайты</h2>
                                </div>
                            </div>
                            <div class="whatformats-block__description">
                                <p class="whatformats-block__description-text">К сожалению, счётчики с миллионной посещаемостью и ТОПовые позиции в liveinternet – это не гарант того, что ваш пост на таких ресурсах прочитают хотя бы 1 000 уникальных человек. Зато гарант того, что за размещение такого поста вы заплатите десятки тысяч рублей. Мы не стремимся любой ценой включать в медиапланы ТОПОвые площадки. Во-первых, потому что они очень дорогие и слабо реагируют на попытки выбить скидки. Во-вторых, потому что они крайне слабо работают на трафик. Многие такие площадки до сих пор не перестроились и не позаботились, чтобы к ним приходили читатели из мобильников и соцсетей. И это очень сильно бьёт по их рекламодателям, которые переплачивают втридорога за бренд сайта, который по старой памяти продолжает считаться «крутым». </p><a href="#" title="Развернуть описание" class="ac-more-link"><span class="ac-more-link__circle ac-more-link__circle-red"></span><span class="ac-more-link__circle ac-more-link__circle-red"></span><span class="ac-more-link__circle ac-more-link__circle-red"></span><span class="ac-more-link__text hide-text">Развернуть описание</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="whatformats-block wow fadeIn" data-wow-delay=".6s">
                            <div class="whatformats-block__header">
                                <div class="whatformats-block__ico whatformats-block__ico-top"><img src="assets/images/whatformats/whatformats9.png" alt="Спам в комментариях о_О"></div>
                                <div class="whatformats-block__head">
                                    <h2 class="whatformats-block__head">Спам в комментариях</h2>
                                </div>
                            </div>
                            <div class="whatformats-block__description">
                                <p class="whatformats-block__description-text">Этого очень много в соцсетях. Но такой метод мало того, что не работает, так и ещё и явно дурной тон, level down для всего бизнеса. Да, можно работать в комментариях к тематичным статьям на посещаемых сайтах, в комментариях к тематичным постам в сообществах. Но опускаться до уровня спама ради ссылки – точно не стоит. </p><a href="#" title="Развернуть описание" class="ac-more-link"><span class="ac-more-link__circle ac-more-link__circle-red"></span><span class="ac-more-link__circle ac-more-link__circle-red"></span><span class="ac-more-link__circle ac-more-link__circle-red"></span><span class="ac-more-link__text hide-text">Развернуть описание</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="whatformats-block wow fadeIn" data-wow-delay=".8s">
                            <div class="whatformats-block__header">
                                <div class="whatformats-block__ico whatformats-block__ico-top"><img src="assets/images/whatformats/whatformats10.png" alt="Форумы"></div>
                                <div class="whatformats-block__head">
                                    <h2 class="whatformats-block__head">Форумы</h2>
                                </div>
                            </div>
                            <div class="whatformats-block__description">
                                <p class="whatformats-block__description-text">Немногим форумам удалось до сих пор сохранить активную, живую аудиторию в сколько-то значимом количестве. Ещё меньшему числу форумов удалось перестроиться на современную архитектуру, юзабилити, чтобы с ними было удобно работать и посты//ветки//отзывы получали приемлемую видимость. И, надо понимать, что модераторы и владельцы оставшихся приличных форумов, конечно же, не позволят спамить в их ветках или «забивать эфиры» фейковыми аккаунтами, созданными под рекламу. Здесь имеет смысл работать либо через платное закрепление коммерческих веток, либо через старых, авторитетных пользователей. Второе – очень кропотливая, ювелирная работа. </p><a href="#" title="Развернуть описание" class="ac-more-link"><span class="ac-more-link__circle ac-more-link__circle-red"></span><span class="ac-more-link__circle ac-more-link__circle-red"></span><span class="ac-more-link__circle ac-more-link__circle-red"></span><span class="ac-more-link__text hide-text">Развернуть описание</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.ac-whatformats-->
        <!-- .ac-wefine-->
        <div id="ac-i-wefine" class="ac-wefine">
            <div class="wefine-warp">
                <div class="wefine-warp__bg">
                    <div class="container">
                        <div class="row we-head-h">
                            <div class="col-12">
                                <h2 class="wefine-head">Почему мы молодцы</h2>
                                <h3 class="ac-head__mini wefine-head_small">и с нами точно стоит работать</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="wefine-block wow fadeIn" data-wow-delay=".3s">
                                    <div class="wefine-block__description">
                                        <div class="wefine-block__icon"><img src="assets/images/wefine/wefine1.png" alt="В пуле площадок сотни проверенных СМИ"></div>
                                        <div class="wefine-block__text">
                                            <p class="wefine-text"><span class="wefine-text-accent">В пуле площадок, с которыми мы работаем, сотни проверенных СМИ</span>, блогеров, влогеров, пабликов, сообществ и пр. И каждый день мы перерабатываем «тонну руды», чтобы находить новые достойные площадки.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="wefine-block wow fadeIn" data-wow-delay=".6s">
                                    <div class="wefine-block__description">
                                        <div class="wefine-block__icon"><img src="assets/images/wefine/wefine2.png" alt="Видим картину всех современных медиа"></div>
                                        <div class="wefine-block__text">
                                            <p class="wefine-text"><span class="wefine-text-accent">Мы очень ясно и реалистично видим картину всех современных медиа</span> Рунета и точно знаем, на что способны одни, чего стоят другие, какого эффекта ждать от третьих, а с четвёртыми вообще нет смысла работать.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="wefine-block wow fadeIn" data-wow-delay=".9s">
                                    <div class="wefine-block__description">
                                        <div class="wefine-block__icon"><img src="assets/images/wefine/wefine3.png" alt="У нас богатейший опыт работы с московским трафиком"></div>
                                        <div class="wefine-block__text">
                                            <p class="wefine-text"><span class="wefine-text-accent">У нас богатейший опыт работы с московским трафиком</span>, который считается самым сложным, дорогим, трудно привлекаемым. И не зря.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="wefine-block wow fadeIn" data-wow-delay=".3s">
                                    <div class="wefine-block__description">
                                        <div class="wefine-block__icon"><img src="assets/images/wefine/wefine4.png" alt="У нас честный, человеческий подход"></div>
                                        <div class="wefine-block__text">
                                            <p class="wefine-text"><span class="wefine-text-accent">У нас честный, человеческий подход</span>, мы берёмся работать с микробюджетами, чего не скажешь об абсолютном большинстве рекламных агентств.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="wefine-block wow fadeIn" data-wow-delay=".6s">
                                    <div class="wefine-block__description">
                                        <div class="wefine-block__icon"><img src="assets/images/wefine/wefine5.png" alt="У нас хорошие ценники, потому что мы работаем в больших объёмах"></div>
                                        <div class="wefine-block__text">
                                            <p class="wefine-text"><span class="wefine-text-accent">У нас хорошие ценники, потому что мы работаем в больших объёмах</span> и есть основание для торга и скидок.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="wefine-block wow fadeIn" data-wow-delay=".9s">
                                    <div class="wefine-block__description">
                                        <div class="wefine-block__icon"><img src="assets/images/wefine/wefine6.png" alt="Сложнейшие B2B-тематики"></div>
                                        <div class="wefine-block__text">
                                            <p class="wefine-text"><span class="wefine-text-accent">У нас богатейший опыт работы со сложнейшими B2B-тематиками</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="wefine-btn-block"><a href="#ac-popup-order" class="wefine-btn-link popup-modal__order-link">Оставить заявку</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.ac-wefine-->
        <!-- .ac-youadv-->
        <div id="ac-i-youadv" class="ac-youadv">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="ac-head youadv-head">Как будет проходить<br>ваша рекламная кампания</h2>
                    </div>
                    <!-- /.col-12-->
                </div>
                <!-- /.row-->
                <div class="row slider-step-row">
                    <div class="slider-nav step-blocks-nav" data-slidernav="#sliderStep">
                        <div class="slider-nav_next" data-route="next">></div>
                        <div class="slider-nav_prev hide" data-route="prev"><</div>
                    </div>
                    <div class="col-12">
                        <div class="flightroute">
                            <div class="line-step">
                                <ul class="step-indicator">
                                    <li class="step-indicator__item step-indicator__item-completed"><span class="step-indicator__bubble"></span><span class="step-indicator__rocket"><span class="step-indicator__rocket-item">1</span></span></li>
                                    <li class="step-indicator__item"><span class="step-indicator__bubble"></span></li>
                                    <li class="step-indicator__item"><span class="step-indicator__bubble"></span></li>
                                    <li class="step-indicator__item"><span class="step-indicator__bubble"></span></li>
                                    <li class="step-indicator__item"><span class="step-indicator__bubble"></span></li>
                                </ul>
                            </div>
                            <!-- /.line-step-->
                        </div>
                        <!-- /.flightroute-->
                    </div>
                    <!-- /.col-12-->
                </div>
                <!-- /.row-->
                <div class="row">

                    <!-- /.col-12-->
                </div>
                <!-- /.row-->
            </div>
            <!-- /.container-->
            <div class="col-12">
                <div class="step-blocks owl-carousel owl-theme" id="sliderStep">
                    <div class="step-block">
                        <div class="step-block__ico"><img src="assets/images/youadv/youadv1.png" alt="Вы оставляете заявку с указанием сайта"></div>
                        <!-- /.step-block__ico-->
                        <div class="step-block__description">
                            <div class="step-block__description-head">
                                <div class="step-block__item"><span class="step-item">1</span></div>
                                <h2 class="step-block__head">Вы оставляете заявку с указанием сайта, региона, ваших пожеланий (на что хотели бы обратить внимание, как видите свою целевую аудиторию и пр.).</h2>
                            </div>
                            <div class="step-block__description-text">
                                <p class="step-block__text">Оставляя заявку, вы сразу же выбираете бюджет, на который хотели бы сделать кампанию. Это может быть 50 000р., 75 000р., 100 000р., 150 000р., 200 000р., произвольный бюджет от 200 000р. </p>
                            </div>
                        </div>
                    </div>
                    <div class="step-block">
                        <div class="step-block__ico"><img src="assets/images/youadv/youadv2.png" alt="Менеджер в течение 3 дней составляет для вас медиаплан"></div>
                        <!-- /.step-block__ico-->
                        <div class="step-block__description">
                            <div class="step-block__description-head">
                                <div class="step-block__item"><span class="step-item">2</span></div>
                                <h2 class="step-block__head">Менеджер в течение 3 дней составляет для вас медиаплан со всеми площадками, их описанием, форматами размещений. И присылает на согласование.</h2>
                            </div>
                            <div class="step-block__description-text">
                                <p class="step-block__text">В ходе согласований вы можете отказаться от некоторых или всех площадок и попросить заменить их другими. Мы готовы итерировать медиаплан разумное количество раз.</p>
                            </div>
                        </div>
                    </div>
                    <div class="step-block">
                        <div class="step-block__ico"><img src="assets/images/youadv/youadv3.png" alt="После согласования медиаплана мы начинаем готовить контент"></div>
                        <!-- /.step-block__ico-->
                        <div class="step-block__description">
                            <div class="step-block__description-head">
                                <div class="step-block__item"><span class="step-item">3</span></div>
                                <h2 class="step-block__head">После согласования медиаплана мы начинаем готовить контент и согласовывать его с вами.</h2>
                            </div>
                            <div class="step-block__description-text">
                                <p class="step-block__text">Вы, разумеется, можете указывать, где и какие внести правки. Мы готовы итерировать тексты разумное количество раз. </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.step-block-->
                    <div class="step-block">
                        <div class="step-block__ico"><img src="assets/images/youadv/youadv4.png" alt="После подготовки контента начинается процесс размещения на площадках"></div>
                        <div class="step-block__description">
                            <div class="step-block__description-head">
                                <div class="step-block__item"><span class="step-item">4</span></div>
                                <h2 class="step-block__head">После подготовки контента начинается процесс размещения на площадках. Он занимает порядка 1-1,5 месяцев. После размещения вы сразу получаете ссылку на публикацию/пост/видео и можете работать в комментариях. </h2>
                            </div>
                            <div class="step-block__description-text">
                                <p class="step-block__text">Мы просим работать в комментариях именно вас, потому что вы больше погружены в бизнес. Разумеется, наш менеджер тоже будет следить за ходом обсуждения и в случае необходимости попробует «потушить пожар», но он вряд ли будет настолько хорошо знаком с рынком и продуктом, насколько заказчик.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.step-block-->
                    <div class="step-block">
                        <div class="step-block__ico"><img src="assets/images/youadv/youadv5.png" alt="Как только все размещения выполнены, мы собираем статистику прочтений материалов"></div>
                        <!-- /.step-block__ico-->
                        <div class="step-block__description">
                            <div class="step-block__description-head">
                                <div class="step-block__item"><span class="step-item">5</span></div>
                                <!-- /.step-block__item-->
                                <h2 class="step-block__head">Как только все размещения выполнены, мы собираем статистику прочтений материалов, переходов на ваш сайт, статистику конверсий (если у вас настроены Цели или Электронная коммерция) и сдаём отчёт. </h2>
                            </div>
                            <!-- /.step-block__description-head-->
                            <div class="step-block__description-text">
                                <p class="step-block__text">Примеры выполненных кампаний с отчётами вы можете посмотреть ниже. </p>
                            </div>
                            <!-- /.step-block__description-text-->
                        </div>
                        <!-- /.step-block__description-->
                    </div>
                    <!-- /.step-block-->
                </div>
                <!-- /.step-blocks-->
            </div>
        </div>
        <!-- /.ac-youadv-->
        <!-- .ac-tariff-->
        <div id="ac-i-tariff" class="ac-tariff">
            <div class="tariff__bg">
                <div class="tariff__bg-warp">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="fsdfsdf">
                                    <h2 class="ac-head tariff-head">Тарифы</h2>
                                    <div class="tariff-navigator" data-slidernav="#tariffSlider">
                                        <div data-route="prev" class="tariff-navigator__item previous_tariff"><span class="item-ico-previous">
                                                <svg id="tariff-navigator__ico-knife" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 121 29" width="94" height="23"><path class="tariff-navigator__ico tariff-navigator__ico-knife" d="M76.57,22.26c-1.43,0-3.82-.6-3.82-4.61V3.82c0-1.72,0-2.58.62-3.2S74.78,0,76.13,0h37.1l1.71,0c2.34,0,3.89-.06,4.93,1S121,3.41,121,5.38c0,7.64-2.06,10.48-7.61,10.48H85.48c-0.89,0-2,1.28-3.06,2.52C80.85,20.2,79.08,22.26,76.57,22.26ZM74.8,2.07a13.37,13.37,0,0,0,0,1.74V17.64c0,2.41.94,2.61,1.82,2.61,1.59,0,3-1.62,4.33-3.18s2.77-3.21,4.57-3.21h27.91c3.39,0,5.61-.59,5.61-8.48,0-1.67-.17-2.62-0.53-3S116.75,2,115,2l-1.75,0H76.11A10.74,10.74,0,0,0,74.8,2.07Z"/><path class="tariff-navigator__ico tariff-navigator__ico-knife" d="M75.93,29C56.28,29,4.34,24,0,1.23A1,1,0,0,1,1,0L75.93,0V2L2.26,2C7.36,20,48.75,26.83,74.93,27V21.26a1,1,0,0,1,2,0V28A1,1,0,0,1,75.93,29Z"/><path class="tariff-navigator__ico tariff-navigator__ico-knife" d="M110.32,11.37a3.43,3.43,0,1,1,3.43-3.43A3.44,3.44,0,0,1,110.32,11.37Zm0-4.87a1.43,1.43,0,1,0,1.43,1.43A1.43,1.43,0,0,0,110.32,6.5Z"/><path class="tariff-navigator__ico tariff-navigator__ico-knife" d="M88.64,11.37a3.43,3.43,0,1,1,3.43-3.43A3.44,3.44,0,0,1,88.64,11.37Zm0-4.87a1.43,1.43,0,1,0,1.43,1.43A1.43,1.43,0,0,0,88.64,6.5Z"/></svg>
                                            </span><span>Мало</span></div>
                                        <div data-route="next" class="tariff-navigator__item next_tariff"><span>Много</span><span class="item-ico-next"><svg id="tariff-navigator__ico-watermelon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.9 67.99" width="52" height="53"><path class="tariff-navigator__ico tariff-navigator__ico-watermelon" d="M26.35,47.64a3,3,0,0,1-2.88-2.21h0a3,3,0,0,1,2.1-3.65c1.09-.29,4.77-0.35,5.31,1.67A2,2,0,0,1,30.62,45a6.91,6.91,0,0,1-3.51,2.57A3,3,0,0,1,26.35,47.64Zm-1-2.73a1,1,0,0,0,1.2.7A5.15,5.15,0,0,0,28.89,44a5.15,5.15,0,0,0-2.81-.27,1,1,0,0,0-.59.45,1,1,0,0,0-.1.75h0Z"/><path class="tariff-navigator__ico tariff-navigator__ico-watermelon" d="M25,36.83h0a3,3,0,0,1-3-3,3,3,0,0,1,3-3c1.14,0,4.73.92,4.74,3a1.94,1.94,0,0,1-.63,1.4A6.93,6.93,0,0,1,25,36.83Zm-0.05-4a1,1,0,0,0-.69.28,0.93,0.93,0,0,0-.28.67,1,1,0,0,0,1,1h0a5.25,5.25,0,0,0,2.64-.95,5.39,5.39,0,0,0-2.69-1h0Z"/><path class="tariff-navigator__ico tariff-navigator__ico-watermelon" d="M27.06,26.14A6.06,6.06,0,0,1,25.53,26a3,3,0,0,1-2.14-3.65h0a2.9,2.9,0,0,1,1.37-1.8,3,3,0,0,1,2.29-.29c1.1,0.3,4.34,2.12,3.82,4.12a1.93,1.93,0,0,1-1,1.19A6.09,6.09,0,0,1,27.06,26.14Zm-0.81-4a1,1,0,0,0-.48.13,0.91,0.91,0,0,0-.43.57h0A1,1,0,0,0,26.07,24a5.18,5.18,0,0,0,2.81-.21,5.49,5.49,0,0,0-2.36-1.67A1,1,0,0,0,26.24,22.12Zm-1.88.44h0Z"/><path class="tariff-navigator__ico tariff-navigator__ico-watermelon" d="M39.31,43.54a2.34,2.34,0,0,1-2.25-1.73h0A2.33,2.33,0,0,1,38.7,39c0.93-.24,3.55-0.2,4,1.35a1.65,1.65,0,0,1-.21,1.28,5,5,0,0,1-2.55,1.87A2.31,2.31,0,0,1,39.31,43.54ZM39,41.29a0.33,0.33,0,0,0,.4.24,3.39,3.39,0,0,0,1-.62,3.42,3.42,0,0,0-1.22,0A0.31,0.31,0,0,0,39,41,0.33,0.33,0,0,0,39,41.29Z"/><path class="tariff-navigator__ico tariff-navigator__ico-watermelon" d="M38.37,36.29h0A2.36,2.36,0,0,1,36,34h0a2.29,2.29,0,0,1,.67-1.64,2.32,2.32,0,0,1,1.66-.68c1,0,3.5.74,3.51,2.34a1.62,1.62,0,0,1-.52,1.18A5,5,0,0,1,38.37,36.29ZM38,33.94a0.36,0.36,0,0,0,.36.34A3.21,3.21,0,0,0,39.53,34a3.53,3.53,0,0,0-1.2-.34h0a0.32,0.32,0,0,0-.23.09,0.3,0.3,0,0,0-.09.22h0Z"/><path class="tariff-navigator__ico tariff-navigator__ico-watermelon" d="M39.79,29.11A4.43,4.43,0,0,1,38.67,29,2.37,2.37,0,0,1,37,26.14h0a2.27,2.27,0,0,1,1.07-1.41,2.31,2.31,0,0,1,1.79-.22c0.93,0.26,3.19,1.62,2.79,3.16a1.62,1.62,0,0,1-.8,1A4.37,4.37,0,0,1,39.79,29.11Zm-0.56-2.7a0.32,0.32,0,0,0-.16,0,0.28,0.28,0,0,0-.13.18h0a0.36,0.36,0,0,0,.27.42,3.43,3.43,0,0,0,1.19,0,3.6,3.6,0,0,0-1.07-.64h-0.1Zm-1.26,0h0Z"/><path class="tariff-navigator__ico tariff-navigator__ico-watermelon" d="M17.66,63l-0.51-.87-0.65.36a59,59,0,0,1,0-57.42,1,1,0,0,1,1.38-.37L66.43,33.38a1,1,0,0,1-.19,1.81c-0.41.17-4.89,2.32-48.36,27.73h0l-0.06,0ZM17.72,7a57,57,0,0,0,0,53.68c15.48-9,39.14-22.81,46.1-26.49Z"/><path class="tariff-navigator__ico tariff-navigator__ico-watermelon" d="M9.78,68a1,1,0,0,1-.87-0.5,68.3,68.3,0,0,1-.28-67A1,1,0,0,1,10,.14L66.43,33.38a1,1,0,0,1,0,1.73c-0.21.13-21.88,12.73-56.14,32.75A1,1,0,0,1,9.78,68ZM9.89,2.38a66.31,66.31,0,0,0,.27,63.23C38.87,48.83,58.57,37.36,63.94,34.23Z"/></svg>

                                            </span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-full">
                        <div class="row-full">
                            <div class="col-12 owl-carousel owl-theme" id="tariffSlider">
                                <div class="tariff-block" data-tariff="50000">
                                    <div class="tariff-navigator__ico"><img src="../assets/images/tariff/Watermelon.png" alt=""></div>
                                    <div class="row">
                                        <div class="col-6 infob-left">
                                            <div class="tariff-block__description">
                                                <div class="tariff-block__header">
                                                    <h2 class="tariff-block__head">Самый доступный</h2>
                                                </div>
                                                <!-- /.tariff-block__header-->
                                                <div class="tariff-block__text">
                                                    <p>Публикации в группах в соцсетях <br>Размещение в роликах на YouTube <br>Размещение платных постов в Facebook <br>Размещение постов с внешними ссылками в Instagram</p>
                                                </div>
                                                <!-- /.tariff-block__text-->
                                            </div>
                                            <!-- /.tariff-block__description-->
                                        </div>
                                        <div class="col-6 infob-right">
                                            <div class="tariff-block__what">
                                                <div class="tariff-block__what-item">
                                                    <div class="tariff-block__what-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34" height="35" viewBox="0 0 34 35">
                                                        <image id="Vector_Smart_Object_copy_4" data-name="Vector Smart Object copy 4" width="34" height="35" xlink:href="data:img/png;base64,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"/>
                                                        </svg>

                                                    </div>
                                                    <div class="tariff-block__what-text"><span class="tariff-block__what-head">Охват аудитории:</span><span class="tariff-block__what-value">30 000 чел.</span></div>
                                                </div>
                                                <!-- /.tariff-block__what-item-->
                                                <div class="tariff-block__what-item">
                                                    <div class="tariff-block__what-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="33" height="31" viewBox="0 0 33 31">
                                                        <image id="Vector_Smart_Object_copy_5" data-name="Vector Smart Object copy 5" width="33" height="31" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAfCAMAAABeSlSAAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABnlBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAACd0Be+AAAAiHRSTlMAb+r3mgpX6UgREC3ItG2N8OsnCeXtNcBQEzAsAiYuA+Hf0NPLh1szsQwY464BBsWf23+cBynxbOYZTUHzNnveEiDsXqm90tFgXGr2jxWssC/1jHrGoHnUSrxj+w75GnG6BNxU4k62ZtZ+KkMFH+5FOMSbc6b4D806gPRuyWVwi7fyw1KY2asjjLoweQAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAFeSURBVDjLY2BgZOrADZhZWBnY2Dk4uXACbh4WBl4+Bn4BDCAoxCAsIiAgKsbNzCAuwSAphQGkZRgYZKWk5OS5OhgUFJXwAeUOBhVVCXxArQNkCz7ARY4KdQ1N/Cq0tBV1dPGp0NM34DQ0wqfCmMeEwdRMArcKcwtLIGllJo1LhbWNLZi2s3fArsLRyRnC0HVxlcemQtjN3cMDaIiMp4eXtw82Fb5+/v7KOgwMAYH+/v5BuPwSzMLAIBGCz7ehYQwMRsb4VIRHMDBERuFRYRkdw+AQG4dHRXwCAwOjOJ6YS0xKZjBJSUVTkcaH4KZnyDBk8iBHLUMWM4Mae3YOlJebl89QYBOAJK+bVVjEwFCcB88/JQyypag5KjaUFaSyDJx5ZMvTEivY7VBzlDySgVYioWWVVekMOIBeqrigeXVKDTc2ydq6+PqGxg7BptimZl2s2lvcG4FZvLWNsR2H+QD2RGfxRBI9CgAAAABJRU5ErkJggg=="/>
                                                        </svg>

                                                    </div>
                                                    <div class="tariff-block__what-text"><span class="tariff-block__what-head">Переходов на сайт:</span><span class="tariff-block__what-value">~ 700-1500</span></div>
                                                </div>
                                                <!-- /.tariff-block__what-item-->
                                                <div class="tariff-block__what-item">
                                                    <div class="tariff-block__what-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="35" viewBox="0 0 32 35">
                                                        <image id="Vector_Smart_Object_copy_6" data-name="Vector Smart Object copy 6" width="32" height="35" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAjCAMAAADCMPhoAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABklBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAADxnp81AAAAhHRSTlMAE2Kk0vMqp/fBe0QjEAyV9JAf2LohN+2AAWmBkrwCTnIe+Mhzo5EoGF2zItNPD1mtzXhfw31YoHws8QfJ0EZNEfWLg55g7LIkLe4FsdQK3Ui+iJ1hlwNCM+oS4KXeQ64Vwo3V+xc4ieKF147cHPDPqJ+a5mdX8j8atelwf8ehWgTE/hQIyP7oAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAALEgAACxIB0t1+/AAAAhFJREFUOMttVPlD2jAY/TzQii0WK2IVZDLrpi3sqIhjw2O4DRwiuqljZ52yw23Modb77h++9EpJ6fdD8tLvJfmavBcAHC2tbe0+TfO1t7W2QHN0dFJd/m6aYehufxfV2eFKB3rYYK8z7A2yPQFiOtcXImeE+riGRfrDA7x7S34g3I/nhwc9ioLBsLVGgBsCzxjizDoi0WGA2J2RJsJwNGJswNKo9VPxu6NuDs3qmwhjOr7H3h+fQByRYIwJAEzc/EEpAZB88JB69Jhu+Nk4A/KkiVOCWfEUwZmUIT1twieZp/apTj3TRi08nYbsjIW5WQvMBeefJy08k4WMXVZuwexfvHyVx0WIGdAYCxcWXxt9cankVMlooM3Zg+Wy0ZVWVkoEAZ/O6huAt2vrBGMEETbswbvK+vvFDx8JxgYipPB6nz5HvigSwUhpQG1iwtfovAiKtMA7jE0KtrarNuGb9h21irSGGD9+6l+q21uQ3sFq4H8Z56MzVn//MRSxkwY5W8NLWKFIf818tZaV0W0Wd91KUf4ZedgtotsEob63D56xv1cXDEUdqDGvfEw9MBSFNJnwyc152ZcwNamr+rBST5LpZL1yaKta98XR8clpwyWWTk+Oj7AvdGed8eVz9eIyfwVwlb+8UM/L/JnjLMubhdy1elOr3ajXuYLLm467b0OhW/BwN9jvg8gwouf7oIf3C/Mf881dmFPP9tUAAAAASUVORK5CYII="/>
                                                        </svg>

                                                    </div>
                                                    <div class="tariff-block__what-text"><span class="tariff-block__what-head">Стоимость контакта:</span><span class="tariff-block__what-value">~ 1.67 руб.</span></div>
                                                </div>
                                                <!-- /.tariff-block__what-item-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row tariff-block-line">
                                        <div class="col-12">
                                            <div class="col-4">
                                                <div class="line-block">
                                                    <div class="price">50 000 &#8381;</div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="btn-block"><a href="#ac-popup-order" class="btn-green popup-modal__order-link">Заказать</a></div>
                                            </div>
                                            <div class="col-4">
                                                <div class="line-block-right">
                                                    <!--
                                                    <div class="tariff-block__free">
                                                        <div class="tariff-block__free-head"><span>+ Бесплатно:</span></div>
                                                        <div class="tariff-block__free-icons">
                                                            <div class="free-icon__item"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19" height="23" viewBox="0 0 19 23"><image id="tariff-icon__item1" class="tariff-icon__item tariff-icon__item1" width="19" height="23" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAAXCAMAAADeH4ToAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAXVBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAC5BxTwAAAAHnRSTlMATTwvQj8CCxAPJTEwKTcRAwUBDiFHLC5KTBZJS0hbvLisAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAALEgAACxIB0t1+/AAAAF1JREFUGNNjYGRCB4wMTAzogIk2YswsEMDKRrpedg4I4EQS4+KGAB4yzOPlAwF+FDEBQRAQosi/wiJAIIoqJiYuIiIhiSYmxcAkyYYuxgoUQhOTlgY5CCXeZGRBQgCV4gSIZB/kHgAAAABJRU5ErkJggg=="/></svg>

                                                            </div>
                                                            <div class="free-icon__item"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28" height="21" viewBox="0 0 28 21"><image id="tariff-icon__item2" class="tariff-icon__item tariff-icon__item2" width="28" height="21" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAVCAMAAABi3H5uAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAq1BMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA0NbREAAAAOHRSTlMACCQ6QT0/QDMaAg05IAsBEytEKQMRIjcJGzEmFkUnCjsGHEIhDAQHGTQFNh48Fxg1Ly5DTUg+D2BYwbUAAAABYktHRACIBR1IAAAACXBIWXMAAAsSAAALEgHS3X78AAAA00lEQVQoz32RaxeBQBCGp9pMqFZJFkWUCOXO//9nTltLtMd8mJ05z5l35wLwNkXVCNE7SIxuD76tb+qWzSM6cNyh12RDHDUy6ruDTzJ26LcQw4kIpzP4NY/UtYEJbWNh1RYyCYS5X/pFJGOw7JR+NZNCiEuXWHLIKyf/KtemlKXIH7KRQb8S3GYStgvTKtgfWozm2zpKnNaHkSoUXO+HFa7YO42OfBdFfRnFwkwR7DQv58nPF0TTOOVXXRXds1XsAw3GOT+2YttpQ1273R8EL0/ZpC90UAzWm+jGTQAAAABJRU5ErkJggg=="/></svg>

                                                            </div>
                                                            <div class="free-icon__item"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="20" viewBox="0 0 24 20"><image id="tariff-icon__item3" class="tariff-icon__item tariff-icon__item3" width="24" height="20" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAUCAMAAACgaw2xAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAkFBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADDIYgjAAAAL3RSTlMAAxYmNkBCQT80JBQEKi0cDAECDh4uKQU8Hz0+MAkaMRkKRiwIMhJDJUU7NzoNOdzRoUgAAAABYktHRACIBR1IAAAACXBIWXMAAAsSAAALEgHS3X78AAAAqElEQVQY03XQ2xKCMAwE0AVJWxGRm0JBFC1aUfH/P0+YcbzGferseUhSAHDciUdCSkUkhJr6M2coEcxJhYsoxiNJmi2JVjkK7eAngS5RgU2FgofiCeW65kFs5LZmAWje6AMGEtMdC4C7Nyy0B3VkIDC2YWYkp07HzHDdTRJu3SLM+QP/fslXStiI61OL9Gw9321fXe2eLvbaj89em6uUJBQJkvJmsrG9A/bGC7jW+0nGAAAAAElFTkSuQmCC"/></svg>

                                                            </div>
                                                            <div class="free-icon__item"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21" height="21" viewBox="0 0 21 21"><image id="tariff-icon__item4" class="tariff-icon__item tariff-icon__item4" width="21" height="21" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAMAAACeyVWkAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAdVBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB5WX1YAAAAJnRSTlMAEkU+PAoCIzY3DDgnDgsxFhg5FS0rMyYHBiIsHg8XGUoQA0dBCPCEdiwAAAABYktHRACIBR1IAAAACXBIWXMAAAsSAAALEgHS3X78AAAAf0lEQVQY073R2w6CMAwG4J9uAyq64gEHInhA3/8VTYiHrOza/6r50jRNi4yMjWMoAznoOILBMgb2U+ZFybyaS/vTar3xUit1Fvl2p3V/QHMMbazdqYecB8Qq1YiLXL3S27zSPdYwBTT0UBNQ9+/+/6j4cqmemZ9fTd83/Yvk315DrQbs/HxOYgAAAABJRU5ErkJggg=="/></svg>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tariff-block-->
                                <div class="tariff-block" data-tariff="75000">
                                    <div class="tariff-navigator__ico"><img src="../assets/images/tariff/Watermelon.png" alt=""></div>
                                    <div class="row">
                                        <div class="col-6 infob-left">
                                            <div class="tariff-block__description">
                                                <div class="tariff-block__header">
                                                    <h2 class="tariff-block__head">Увеличенный охват</h2>
                                                </div>
                                                <!-- /.tariff-block__header-->
                                                <div class="tariff-block__text">
                                                    <p>Публикации в СМИ <br>Посты в соцсетях <br>Размещение в роликах на YouTube <br>Посты и отзывы в сообществах <br>Отзывы на форумах</p>
                                                </div>
                                                <!-- /.tariff-block__text-->
                                            </div>
                                            <!-- /.tariff-block__description-->
                                        </div>
                                        <div class="col-6 infob-right">
                                            <div class="tariff-block__what">
                                                <div class="tariff-block__what-item">
                                                    <div class="tariff-block__what-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34" height="35" viewBox="0 0 34 35">
                                                        <image id="Vector_Smart_Object_copy_4" data-name="Vector Smart Object copy 4" width="34" height="35" xlink:href="data:img/png;base64,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"/>
                                                        </svg>

                                                    </div>
                                                    <div class="tariff-block__what-text"><span class="tariff-block__what-head">Охват аудитории:</span><span class="tariff-block__what-value">60 000 чел.</span></div>
                                                </div>
                                                <!-- /.tariff-block__what-item-->
                                                <div class="tariff-block__what-item">
                                                    <div class="tariff-block__what-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="33" height="31" viewBox="0 0 33 31">
                                                        <image id="Vector_Smart_Object_copy_5" data-name="Vector Smart Object copy 5" width="33" height="31" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAfCAMAAABeSlSAAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABnlBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAACd0Be+AAAAiHRSTlMAb+r3mgpX6UgREC3ItG2N8OsnCeXtNcBQEzAsAiYuA+Hf0NPLh1szsQwY464BBsWf23+cBynxbOYZTUHzNnveEiDsXqm90tFgXGr2jxWssC/1jHrGoHnUSrxj+w75GnG6BNxU4k62ZtZ+KkMFH+5FOMSbc6b4D806gPRuyWVwi7fyw1KY2asjjLoweQAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAFeSURBVDjLY2BgZOrADZhZWBnY2Dk4uXACbh4WBl4+Bn4BDCAoxCAsIiAgKsbNzCAuwSAphQGkZRgYZKWk5OS5OhgUFJXwAeUOBhVVCXxArQNkCz7ARY4KdQ1N/Cq0tBV1dPGp0NM34DQ0wqfCmMeEwdRMArcKcwtLIGllJo1LhbWNLZi2s3fArsLRyRnC0HVxlcemQtjN3cMDaIiMp4eXtw82Fb5+/v7KOgwMAYH+/v5BuPwSzMLAIBGCz7ehYQwMRsb4VIRHMDBERuFRYRkdw+AQG4dHRXwCAwOjOJ6YS0xKZjBJSUVTkcaH4KZnyDBk8iBHLUMWM4Mae3YOlJebl89QYBOAJK+bVVjEwFCcB88/JQyypag5KjaUFaSyDJx5ZMvTEivY7VBzlDySgVYioWWVVekMOIBeqrigeXVKDTc2ydq6+PqGxg7BptimZl2s2lvcG4FZvLWNsR2H+QD2RGfxRBI9CgAAAABJRU5ErkJggg=="/>
                                                        </svg>

                                                    </div>
                                                    <div class="tariff-block__what-text"><span class="tariff-block__what-head">Переходов на сайт:</span><span class="tariff-block__what-value">~ 1500-2000</span></div>
                                                </div>
                                                <!-- /.tariff-block__what-item-->
                                                <div class="tariff-block__what-item">
                                                    <div class="tariff-block__what-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="35" viewBox="0 0 32 35">
                                                        <image id="Vector_Smart_Object_copy_6" data-name="Vector Smart Object copy 6" width="32" height="35" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAjCAMAAADCMPhoAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABklBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAADxnp81AAAAhHRSTlMAE2Kk0vMqp/fBe0QjEAyV9JAf2LohN+2AAWmBkrwCTnIe+Mhzo5EoGF2zItNPD1mtzXhfw31YoHws8QfJ0EZNEfWLg55g7LIkLe4FsdQK3Ui+iJ1hlwNCM+oS4KXeQ64Vwo3V+xc4ieKF147cHPDPqJ+a5mdX8j8atelwf8ehWgTE/hQIyP7oAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAALEgAACxIB0t1+/AAAAhFJREFUOMttVPlD2jAY/TzQii0WK2IVZDLrpi3sqIhjw2O4DRwiuqljZ52yw23Modb77h++9EpJ6fdD8tLvJfmavBcAHC2tbe0+TfO1t7W2QHN0dFJd/m6aYehufxfV2eFKB3rYYK8z7A2yPQFiOtcXImeE+riGRfrDA7x7S34g3I/nhwc9ioLBsLVGgBsCzxjizDoi0WGA2J2RJsJwNGJswNKo9VPxu6NuDs3qmwhjOr7H3h+fQByRYIwJAEzc/EEpAZB88JB69Jhu+Nk4A/KkiVOCWfEUwZmUIT1twieZp/apTj3TRi08nYbsjIW5WQvMBeefJy08k4WMXVZuwexfvHyVx0WIGdAYCxcWXxt9cankVMlooM3Zg+Wy0ZVWVkoEAZ/O6huAt2vrBGMEETbswbvK+vvFDx8JxgYipPB6nz5HvigSwUhpQG1iwtfovAiKtMA7jE0KtrarNuGb9h21irSGGD9+6l+q21uQ3sFq4H8Z56MzVn//MRSxkwY5W8NLWKFIf818tZaV0W0Wd91KUf4ZedgtotsEob63D56xv1cXDEUdqDGvfEw9MBSFNJnwyc152ZcwNamr+rBST5LpZL1yaKta98XR8clpwyWWTk+Oj7AvdGed8eVz9eIyfwVwlb+8UM/L/JnjLMubhdy1elOr3ajXuYLLm467b0OhW/BwN9jvg8gwouf7oIf3C/Mf881dmFPP9tUAAAAASUVORK5CYII="/>
                                                        </svg>

                                                    </div>
                                                    <div class="tariff-block__what-text"><span class="tariff-block__what-head">Стоимость контакта:</span><span class="tariff-block__what-value">~ 1.25 руб.</span></div>
                                                </div>
                                                <!-- /.tariff-block__what-item-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row tariff-block-line">
                                        <div class="col-12">
                                            <div class="col-4">
                                                <div class="line-block">
                                                    <div class="price">75 000 &#8381;</div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="btn-block"><a href="#ac-popup-order" class="btn-green popup-modal__order-link">Заказать</a></div>
                                            </div>
                                            <div class="col-4">
                                                <div class="line-block-right">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tariff-block-->
                                <div class="tariff-block" data-tariff="100000">
                                    <div class="tariff-navigator__ico"><img src="../assets/images/tariff/Watermelon.png" alt=""></div>
                                    <div class="row">
                                        <div class="col-6 infob-left">
                                            <div class="tariff-block__description">
                                                <div class="tariff-block__header">
                                                    <h2 class="tariff-block__head">Широкое покрытие</h2>
                                                </div>
                                                <!-- /.tariff-block__header-->
                                                <div class="tariff-block__text">
                                                    <p>Публикации в СМИ <br>Посты в соцсетях <br>Размещение в роликах на YouTube <br>Посты и отзывы в сообществах <br>Отзывы на форумах</p>
                                                </div>
                                                <!-- /.tariff-block__text-->
                                            </div>
                                            <!-- /.tariff-block__description-->
                                        </div>
                                        <div class="col-6 infob-right">
                                            <div class="tariff-block__what">
                                                <div class="tariff-block__what-item">
                                                    <div class="tariff-block__what-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34" height="35" viewBox="0 0 34 35">
                                                        <image id="Vector_Smart_Object_copy_4" data-name="Vector Smart Object copy 4" width="34" height="35" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAjCAMAAADGxShVAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACJVBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAABEEyGDAAAAtXRSTlMAO9q8GGvw+ZQDBp777WIE53Qdqi/zQyxmctIoTPYlIPo837iCm6fGVgXpbRakrDPyJNVpeMsfQo7iXwkBOrL+yT1RphWz97eKndjuXjTWqYyIkLurE0jsRBB3/Vs3gRK/bIYMoHDgMIBQwNelNd2uCFhPw/iSYfHHYCGhvZVAhM++xYll01x7VFr1Y9uYkZOjnEk5MZdu3mfBzfzhONS6JhTRtcivHhxv0HMXhw/jS3HrMkbksCWcXgAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxIAAAsSAdLdfvwAAALXSURBVDjLxdP5W9JwHMDxj6iDFEQzKo/JLDo0KTNFzSkd4IGKhYhOvOUYiBribV5dpFmKleWR5n3f7v/ru02fB/OXfuv7y97PZ6+H7bsxAIAAARMYBPwKxoSiS3yGhIolYXxKwyMuR0byfUV29ZrgOt9R0TGxeByXcgIg/gY/DrsJoLjF9+0IgDt3uUxIvJekvM+PHyQHPEx5xHdqmiodj+EyLiOZyXycxSaZnUOonzwl2c56Fq0WPmcvpNHm5mXkF+gKiwCK9Ykl+S9KEvXFAEWFuoKXhrxcrQZKjWXcb5nKKyhJZQi3lUoJVVFu4sZlxlIwa6qqUdbU5tXVl0NDI0BjA5TX1+XV1qBxdZXGDAxlsaK22WmDwwmYHO0QA6fDQNttaGy1UMy/kSYXamEsR8zNAM1mjsQK0djVxJGWVngFYrfC0OYBdbxUGq8GT5tB4RajcWsLInpje0dnF+Ddtp5eWZ86xumMUffJents3Th0dXa0G/XQq3htteKQ2d9DwsCgTD40JJcNDgDZ058JuNU6rOhF17OwxGbnHgPGEoxLdLuIWLg+JdlvWt5KT8m7lPcfLpKAQm9FUypP0rGPI6MjF8inMfRXCOTJ4Ge03S9+ZHzCR0ziX/FvUuN3wdTY2JSgU09pfvzETYRvYpwjqukZl8BbFjornPs1Ob+wMG/6nTZrdiZ5Ba6ZaRWcrUUlsZSz7MntRhuzd+d6tMtLhHIR/Ba5srrGHhtpbH0doxvZXltdIf1IMZHgZr+BDVInEunIDZRB7gSi2I/Yu2DTgY4MpYyKUqLXAuDYhC67P8HOCHoCljOC/UUkWyzZZsk2S7YkFwi+wxIVS1Qs2cHPk91R2hxMzwAj2tvf3xMxMEMHm+nRXf9dm1xzDl84MCUHJHlQwkC4zzHnmoTza5MjFJsURzYB/hcZ3tIeHon5D1Z8dKjdGr5AjiUnQ4SXby8xdCI5PjvzB4uJ9P8klPv4AAAAAElFTkSuQmCC"/>
                                                        </svg>

                                                    </div>
                                                    <div class="tariff-block__what-text"><span class="tariff-block__what-head">Охват аудитории:</span><span class="tariff-block__what-value">100 000 чел.</span></div>
                                                </div>
                                                <!-- /.tariff-block__what-item-->
                                                <div class="tariff-block__what-item">
                                                    <div class="tariff-block__what-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="33" height="31" viewBox="0 0 33 31">
                                                        <image id="Vector_Smart_Object_copy_5" data-name="Vector Smart Object copy 5" width="33" height="31" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAfCAMAAABeSlSAAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABnlBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAACd0Be+AAAAiHRSTlMAb+r3mgpX6UgREC3ItG2N8OsnCeXtNcBQEzAsAiYuA+Hf0NPLh1szsQwY464BBsWf23+cBynxbOYZTUHzNnveEiDsXqm90tFgXGr2jxWssC/1jHrGoHnUSrxj+w75GnG6BNxU4k62ZtZ+KkMFH+5FOMSbc6b4D806gPRuyWVwi7fyw1KY2asjjLoweQAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAFeSURBVDjLY2BgZOrADZhZWBnY2Dk4uXACbh4WBl4+Bn4BDCAoxCAsIiAgKsbNzCAuwSAphQGkZRgYZKWk5OS5OhgUFJXwAeUOBhVVCXxArQNkCz7ARY4KdQ1N/Cq0tBV1dPGp0NM34DQ0wqfCmMeEwdRMArcKcwtLIGllJo1LhbWNLZi2s3fArsLRyRnC0HVxlcemQtjN3cMDaIiMp4eXtw82Fb5+/v7KOgwMAYH+/v5BuPwSzMLAIBGCz7ehYQwMRsb4VIRHMDBERuFRYRkdw+AQG4dHRXwCAwOjOJ6YS0xKZjBJSUVTkcaH4KZnyDBk8iBHLUMWM4Mae3YOlJebl89QYBOAJK+bVVjEwFCcB88/JQyypag5KjaUFaSyDJx5ZMvTEivY7VBzlDySgVYioWWVVekMOIBeqrigeXVKDTc2ydq6+PqGxg7BptimZl2s2lvcG4FZvLWNsR2H+QD2RGfxRBI9CgAAAABJRU5ErkJggg=="/>
                                                        </svg>

                                                    </div>
                                                    <div class="tariff-block__what-text"><span class="tariff-block__what-head">Переходов на сайт:</span><span class="tariff-block__what-value">~ 2000-3000</span></div>
                                                </div>
                                                <!-- /.tariff-block__what-item-->
                                                <div class="tariff-block__what-item">
                                                    <div class="tariff-block__what-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="35" viewBox="0 0 32 35">
                                                        <image id="Vector_Smart_Object_copy_6" data-name="Vector Smart Object copy 6" width="32" height="35" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAjCAMAAADCMPhoAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABklBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAADxnp81AAAAhHRSTlMAE2Kk0vMqp/fBe0QjEAyV9JAf2LohN+2AAWmBkrwCTnIe+Mhzo5EoGF2zItNPD1mtzXhfw31YoHws8QfJ0EZNEfWLg55g7LIkLe4FsdQK3Ui+iJ1hlwNCM+oS4KXeQ64Vwo3V+xc4ieKF147cHPDPqJ+a5mdX8j8atelwf8ehWgTE/hQIyP7oAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAALEgAACxIB0t1+/AAAAhFJREFUOMttVPlD2jAY/TzQii0WK2IVZDLrpi3sqIhjw2O4DRwiuqljZ52yw23Modb77h++9EpJ6fdD8tLvJfmavBcAHC2tbe0+TfO1t7W2QHN0dFJd/m6aYehufxfV2eFKB3rYYK8z7A2yPQFiOtcXImeE+riGRfrDA7x7S34g3I/nhwc9ioLBsLVGgBsCzxjizDoi0WGA2J2RJsJwNGJswNKo9VPxu6NuDs3qmwhjOr7H3h+fQByRYIwJAEzc/EEpAZB88JB69Jhu+Nk4A/KkiVOCWfEUwZmUIT1twieZp/apTj3TRi08nYbsjIW5WQvMBeefJy08k4WMXVZuwexfvHyVx0WIGdAYCxcWXxt9cankVMlooM3Zg+Wy0ZVWVkoEAZ/O6huAt2vrBGMEETbswbvK+vvFDx8JxgYipPB6nz5HvigSwUhpQG1iwtfovAiKtMA7jE0KtrarNuGb9h21irSGGD9+6l+q21uQ3sFq4H8Z56MzVn//MRSxkwY5W8NLWKFIf818tZaV0W0Wd91KUf4ZedgtotsEob63D56xv1cXDEUdqDGvfEw9MBSFNJnwyc152ZcwNamr+rBST5LpZL1yaKta98XR8clpwyWWTk+Oj7AvdGed8eVz9eIyfwVwlb+8UM/L/JnjLMubhdy1elOr3ajXuYLLm467b0OhW/BwN9jvg8gwouf7oIf3C/Mf881dmFPP9tUAAAAASUVORK5CYII="/>
                                                        </svg>

                                                    </div>
                                                    <div class="tariff-block__what-text"><span class="tariff-block__what-head">Стоимость контакта:</span><span class="tariff-block__what-value">~ 1.00 руб.</span></div>
                                                </div>
                                                <!-- /.tariff-block__what-item-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row tariff-block-line">
                                        <div class="col-12">
                                            <div class="col-4">
                                                <div class="line-block">
                                                    <div class="price">100 000 &#8381;</div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="btn-block"><a href="#ac-popup-order" class="btn-green popup-modal__order-link">Заказать</a></div>
                                            </div>
                                            <div class="col-4">
                                                <div class="line-block-right">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tariff-block-->
                                <div class="tariff-block" data-tariff="150000">
                                    <div class="tariff-navigator__ico"><img src="../assets/images/tariff/Watermelon.png" alt=""></div>
                                    <div class="row">
                                        <div class="col-6 infob-left">
                                            <div class="tariff-block__description">
                                                <div class="tariff-block__header">
                                                    <h2 class="tariff-block__head">Огромный охват</h2>
                                                </div>
                                                <!-- /.tariff-block__header-->
                                                <div class="tariff-block__text">
                                                    <p>Публикации в СМИ <br>Посты в соцсетях <br>Размещение в роликах на YouTube <br>Посты и отзывы в сообществах <br>Отзывы на форумах</p>
                                                </div>
                                                <!-- /.tariff-block__text-->
                                            </div>
                                            <!-- /.tariff-block__description-->
                                        </div>
                                        <div class="col-6 infob-right">
                                            <div class="tariff-block__what">
                                                <div class="tariff-block__what-item">
                                                    <div class="tariff-block__what-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34" height="35" viewBox="0 0 34 35">
                                                        <image id="Vector_Smart_Object_copy_4" data-name="Vector Smart Object copy 4" width="34" height="35" xlink:href="data:img/png;base64,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"/>
                                                        </svg>

                                                    </div>
                                                    <div class="tariff-block__what-text"><span class="tariff-block__what-head">Охват аудитории:</span><span class="tariff-block__what-value">165 000 чел.</span></div>
                                                </div>
                                                <!-- /.tariff-block__what-item-->
                                                <div class="tariff-block__what-item">
                                                    <div class="tariff-block__what-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="33" height="31" viewBox="0 0 33 31">
                                                        <image id="Vector_Smart_Object_copy_5" data-name="Vector Smart Object copy 5" width="33" height="31" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAfCAMAAABeSlSAAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABnlBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAACd0Be+AAAAiHRSTlMAb+r3mgpX6UgREC3ItG2N8OsnCeXtNcBQEzAsAiYuA+Hf0NPLh1szsQwY464BBsWf23+cBynxbOYZTUHzNnveEiDsXqm90tFgXGr2jxWssC/1jHrGoHnUSrxj+w75GnG6BNxU4k62ZtZ+KkMFH+5FOMSbc6b4D806gPRuyWVwi7fyw1KY2asjjLoweQAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAFeSURBVDjLY2BgZOrADZhZWBnY2Dk4uXACbh4WBl4+Bn4BDCAoxCAsIiAgKsbNzCAuwSAphQGkZRgYZKWk5OS5OhgUFJXwAeUOBhVVCXxArQNkCz7ARY4KdQ1N/Cq0tBV1dPGp0NM34DQ0wqfCmMeEwdRMArcKcwtLIGllJo1LhbWNLZi2s3fArsLRyRnC0HVxlcemQtjN3cMDaIiMp4eXtw82Fb5+/v7KOgwMAYH+/v5BuPwSzMLAIBGCz7ehYQwMRsb4VIRHMDBERuFRYRkdw+AQG4dHRXwCAwOjOJ6YS0xKZjBJSUVTkcaH4KZnyDBk8iBHLUMWM4Mae3YOlJebl89QYBOAJK+bVVjEwFCcB88/JQyypag5KjaUFaSyDJx5ZMvTEivY7VBzlDySgVYioWWVVekMOIBeqrigeXVKDTc2ydq6+PqGxg7BptimZl2s2lvcG4FZvLWNsR2H+QD2RGfxRBI9CgAAAABJRU5ErkJggg=="/>
                                                        </svg>

                                                    </div>
                                                    <div class="tariff-block__what-text"><span class="tariff-block__what-head">Переходов на сайт:</span><span class="tariff-block__what-value">~ 4000</span></div>
                                                </div>
                                                <!-- /.tariff-block__what-item-->
                                                <div class="tariff-block__what-item">
                                                    <div class="tariff-block__what-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="35" viewBox="0 0 32 35">
                                                        <image id="Vector_Smart_Object_copy_6" data-name="Vector Smart Object copy 6" width="32" height="35" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAjCAMAAADCMPhoAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABklBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAADxnp81AAAAhHRSTlMAE2Kk0vMqp/fBe0QjEAyV9JAf2LohN+2AAWmBkrwCTnIe+Mhzo5EoGF2zItNPD1mtzXhfw31YoHws8QfJ0EZNEfWLg55g7LIkLe4FsdQK3Ui+iJ1hlwNCM+oS4KXeQ64Vwo3V+xc4ieKF147cHPDPqJ+a5mdX8j8atelwf8ehWgTE/hQIyP7oAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAALEgAACxIB0t1+/AAAAhFJREFUOMttVPlD2jAY/TzQii0WK2IVZDLrpi3sqIhjw2O4DRwiuqljZ52yw23Modb77h++9EpJ6fdD8tLvJfmavBcAHC2tbe0+TfO1t7W2QHN0dFJd/m6aYehufxfV2eFKB3rYYK8z7A2yPQFiOtcXImeE+riGRfrDA7x7S34g3I/nhwc9ioLBsLVGgBsCzxjizDoi0WGA2J2RJsJwNGJswNKo9VPxu6NuDs3qmwhjOr7H3h+fQByRYIwJAEzc/EEpAZB88JB69Jhu+Nk4A/KkiVOCWfEUwZmUIT1twieZp/apTj3TRi08nYbsjIW5WQvMBeefJy08k4WMXVZuwexfvHyVx0WIGdAYCxcWXxt9cankVMlooM3Zg+Wy0ZVWVkoEAZ/O6huAt2vrBGMEETbswbvK+vvFDx8JxgYipPB6nz5HvigSwUhpQG1iwtfovAiKtMA7jE0KtrarNuGb9h21irSGGD9+6l+q21uQ3sFq4H8Z56MzVn//MRSxkwY5W8NLWKFIf818tZaV0W0Wd91KUf4ZedgtotsEob63D56xv1cXDEUdqDGvfEw9MBSFNJnwyc152ZcwNamr+rBST5LpZL1yaKta98XR8clpwyWWTk+Oj7AvdGed8eVz9eIyfwVwlb+8UM/L/JnjLMubhdy1elOr3ajXuYLLm467b0OhW/BwN9jvg8gwouf7oIf3C/Mf881dmFPP9tUAAAAASUVORK5CYII="/>
                                                        </svg>

                                                    </div>
                                                    <div class="tariff-block__what-text"><span class="tariff-block__what-head">Стоимость контакта:</span><span class="tariff-block__what-value">~ 0.91 руб.</span></div>
                                                </div>
                                                <!-- /.tariff-block__what-item-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row tariff-block-line">
                                        <div class="col-12">
                                            <div class="col-4">
                                                <div class="line-block">
                                                    <div class="price">150 000 &#8381;</div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="btn-block"><a href="#ac-popup-order" class="btn-green popup-modal__order-link">Заказать</a></div>
                                            </div>
                                            <div class="col-4">
                                                <div class="line-block-right">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tariff-block-->
                                <div class="tariff-block" data-tariff="200000">
                                    <div class="tariff-navigator__ico"><img src="../assets/images/tariff/Watermelon.png" alt=""></div>
                                    <div class="row">
                                        <div class="col-6 infob-left">
                                            <div class="tariff-block__description">
                                                <div class="tariff-block__header">
                                                    <h2 class="tariff-block__head">Лучшая стоимость</h2>
                                                </div>
                                                <!-- /.tariff-block__header-->
                                                <div class="tariff-block__text">
                                                    <p>Публикации в СМИ <br>Посты в соцсетях <br>Размещение в роликах на YouTube <br>Посты и отзывы в сообществах <br>Отзывы на форумах</p>
                                                </div>
                                                <!-- /.tariff-block__text-->
                                            </div>
                                            <!-- /.tariff-block__description-->
                                        </div>
                                        <div class="col-6 infob-right">
                                            <div class="tariff-block__what">
                                                <div class="tariff-block__what-item">
                                                    <div class="tariff-block__what-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34" height="35" viewBox="0 0 34 35">
                                                        <image id="Vector_Smart_Object_copy_4" data-name="Vector Smart Object copy 4" width="34" height="35" xlink:href="data:img/png;base64,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"/>
                                                        </svg>

                                                    </div>
                                                    <div class="tariff-block__what-text"><span class="tariff-block__what-head">Охват аудитории:</span><span class="tariff-block__what-value">230 000 чел.</span></div>
                                                </div>
                                                <!-- /.tariff-block__what-item-->
                                                <div class="tariff-block__what-item">
                                                    <div class="tariff-block__what-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="33" height="31" viewBox="0 0 33 31">
                                                        <image id="Vector_Smart_Object_copy_5" data-name="Vector Smart Object copy 5" width="33" height="31" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAfCAMAAABeSlSAAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABnlBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAACd0Be+AAAAiHRSTlMAb+r3mgpX6UgREC3ItG2N8OsnCeXtNcBQEzAsAiYuA+Hf0NPLh1szsQwY464BBsWf23+cBynxbOYZTUHzNnveEiDsXqm90tFgXGr2jxWssC/1jHrGoHnUSrxj+w75GnG6BNxU4k62ZtZ+KkMFH+5FOMSbc6b4D806gPRuyWVwi7fyw1KY2asjjLoweQAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAFeSURBVDjLY2BgZOrADZhZWBnY2Dk4uXACbh4WBl4+Bn4BDCAoxCAsIiAgKsbNzCAuwSAphQGkZRgYZKWk5OS5OhgUFJXwAeUOBhVVCXxArQNkCz7ARY4KdQ1N/Cq0tBV1dPGp0NM34DQ0wqfCmMeEwdRMArcKcwtLIGllJo1LhbWNLZi2s3fArsLRyRnC0HVxlcemQtjN3cMDaIiMp4eXtw82Fb5+/v7KOgwMAYH+/v5BuPwSzMLAIBGCz7ehYQwMRsb4VIRHMDBERuFRYRkdw+AQG4dHRXwCAwOjOJ6YS0xKZjBJSUVTkcaH4KZnyDBk8iBHLUMWM4Mae3YOlJebl89QYBOAJK+bVVjEwFCcB88/JQyypag5KjaUFaSyDJx5ZMvTEivY7VBzlDySgVYioWWVVekMOIBeqrigeXVKDTc2ydq6+PqGxg7BptimZl2s2lvcG4FZvLWNsR2H+QD2RGfxRBI9CgAAAABJRU5ErkJggg=="/>
                                                        </svg>

                                                    </div>
                                                    <div class="tariff-block__what-text"><span class="tariff-block__what-head">Переходов на сайт:</span><span class="tariff-block__what-value">~ 4500</span></div>
                                                </div>
                                                <!-- /.tariff-block__what-item-->
                                                <div class="tariff-block__what-item">
                                                    <div class="tariff-block__what-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="35" viewBox="0 0 32 35">
                                                        <image id="Vector_Smart_Object_copy_6" data-name="Vector Smart Object copy 6" width="32" height="35" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAjCAMAAADCMPhoAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABklBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAADxnp81AAAAhHRSTlMAE2Kk0vMqp/fBe0QjEAyV9JAf2LohN+2AAWmBkrwCTnIe+Mhzo5EoGF2zItNPD1mtzXhfw31YoHws8QfJ0EZNEfWLg55g7LIkLe4FsdQK3Ui+iJ1hlwNCM+oS4KXeQ64Vwo3V+xc4ieKF147cHPDPqJ+a5mdX8j8atelwf8ehWgTE/hQIyP7oAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAALEgAACxIB0t1+/AAAAhFJREFUOMttVPlD2jAY/TzQii0WK2IVZDLrpi3sqIhjw2O4DRwiuqljZ52yw23Modb77h++9EpJ6fdD8tLvJfmavBcAHC2tbe0+TfO1t7W2QHN0dFJd/m6aYehufxfV2eFKB3rYYK8z7A2yPQFiOtcXImeE+riGRfrDA7x7S34g3I/nhwc9ioLBsLVGgBsCzxjizDoi0WGA2J2RJsJwNGJswNKo9VPxu6NuDs3qmwhjOr7H3h+fQByRYIwJAEzc/EEpAZB88JB69Jhu+Nk4A/KkiVOCWfEUwZmUIT1twieZp/apTj3TRi08nYbsjIW5WQvMBeefJy08k4WMXVZuwexfvHyVx0WIGdAYCxcWXxt9cankVMlooM3Zg+Wy0ZVWVkoEAZ/O6huAt2vrBGMEETbswbvK+vvFDx8JxgYipPB6nz5HvigSwUhpQG1iwtfovAiKtMA7jE0KtrarNuGb9h21irSGGD9+6l+q21uQ3sFq4H8Z56MzVn//MRSxkwY5W8NLWKFIf818tZaV0W0Wd91KUf4ZedgtotsEob63D56xv1cXDEUdqDGvfEw9MBSFNJnwyc152ZcwNamr+rBST5LpZL1yaKta98XR8clpwyWWTk+Oj7AvdGed8eVz9eIyfwVwlb+8UM/L/JnjLMubhdy1elOr3ajXuYLLm467b0OhW/BwN9jvg8gwouf7oIf3C/Mf881dmFPP9tUAAAAASUVORK5CYII="/>
                                                        </svg>

                                                    </div>
                                                    <div class="tariff-block__what-text"><span class="tariff-block__what-head">Стоимость контакта:</span><span class="tariff-block__what-value">~ 0.87 руб.</span></div>
                                                </div>
                                                <!-- /.tariff-block__what-item-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row tariff-block-line">
                                        <div class="col-12">
                                            <div class="col-4">
                                                <div class="line-block">
                                                    <div class="price">200 000 &#8381;</div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="btn-block"><a href="#ac-popup-order" class="btn-green popup-modal__order-link">Заказать</a></div>
                                            </div>
                                            <div class="col-4">
                                                <div class="line-block-right">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tariff-block-->
                                <div class="tariff-block" data-tariff=">200000">
                                    <div class="tariff-navigator__ico"><img src="../assets/images/tariff/Watermelon.png" alt=""></div>
                                    <div class="row">
                                        <div class="col-6 infob-left">
                                            <div class="tariff-block__description">
                                                <div class="tariff-block__header">
                                                    <h2 class="tariff-block__head">Индивидуальный</h2>
                                                </div>
                                                <!-- /.tariff-block__header-->
                                                <div class="tariff-block__text">
                                                    <p>Публикации в СМИ <br>Посты в соцсетях <br>Размещение в роликах на YouTube <br>Посты и отзывы в сообществах <br>Отзывы на форумах</p>
                                                </div>
                                                <!-- /.tariff-block__text-->
                                            </div>
                                            <!-- /.tariff-block__description-->
                                        </div>
                                        <div class="col-6 infob-right">
                                            <div class="tariff-block__what">
                                                <div class="tariff-block__what-item">
                                                    <div class="tariff-block__what-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34" height="35" viewBox="0 0 34 35">
                                                        <image id="Vector_Smart_Object_copy_4" data-name="Vector Smart Object copy 4" width="34" height="35" xlink:href="data:img/png;base64,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"/>
                                                        </svg>

                                                    </div>
                                                    <div class="tariff-block__what-text"><span class="tariff-block__what-head">Охват аудитории:</span><span class="tariff-block__what-value">от 250 000 чел.</span></div>
                                                </div>
                                                <!-- /.tariff-block__what-item-->
                                                <div class="tariff-block__what-item">
                                                    <div class="tariff-block__what-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="33" height="31" viewBox="0 0 33 31">
                                                        <image id="Vector_Smart_Object_copy_5" data-name="Vector Smart Object copy 5" width="33" height="31" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAfCAMAAABeSlSAAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABnlBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAACd0Be+AAAAiHRSTlMAb+r3mgpX6UgREC3ItG2N8OsnCeXtNcBQEzAsAiYuA+Hf0NPLh1szsQwY464BBsWf23+cBynxbOYZTUHzNnveEiDsXqm90tFgXGr2jxWssC/1jHrGoHnUSrxj+w75GnG6BNxU4k62ZtZ+KkMFH+5FOMSbc6b4D806gPRuyWVwi7fyw1KY2asjjLoweQAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAFeSURBVDjLY2BgZOrADZhZWBnY2Dk4uXACbh4WBl4+Bn4BDCAoxCAsIiAgKsbNzCAuwSAphQGkZRgYZKWk5OS5OhgUFJXwAeUOBhVVCXxArQNkCz7ARY4KdQ1N/Cq0tBV1dPGp0NM34DQ0wqfCmMeEwdRMArcKcwtLIGllJo1LhbWNLZi2s3fArsLRyRnC0HVxlcemQtjN3cMDaIiMp4eXtw82Fb5+/v7KOgwMAYH+/v5BuPwSzMLAIBGCz7ehYQwMRsb4VIRHMDBERuFRYRkdw+AQG4dHRXwCAwOjOJ6YS0xKZjBJSUVTkcaH4KZnyDBk8iBHLUMWM4Mae3YOlJebl89QYBOAJK+bVVjEwFCcB88/JQyypag5KjaUFaSyDJx5ZMvTEivY7VBzlDySgVYioWWVVekMOIBeqrigeXVKDTc2ydq6+PqGxg7BptimZl2s2lvcG4FZvLWNsR2H+QD2RGfxRBI9CgAAAABJRU5ErkJggg=="/>
                                                        </svg>

                                                    </div>
                                                    <div class="tariff-block__what-text"><span class="tariff-block__what-head">Переходов на сайт:</span><span class="tariff-block__what-value">расчитываем<br>индивидуально</span></div>
                                                </div>
                                                <!-- /.tariff-block__what-item-->
                                                <div class="tariff-block__what-item">
                                                    <div class="tariff-block__what-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="35" viewBox="0 0 32 35">
                                                        <image id="Vector_Smart_Object_copy_6" data-name="Vector Smart Object copy 6" width="32" height="35" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAjCAMAAADCMPhoAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABklBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAADxnp81AAAAhHRSTlMAE2Kk0vMqp/fBe0QjEAyV9JAf2LohN+2AAWmBkrwCTnIe+Mhzo5EoGF2zItNPD1mtzXhfw31YoHws8QfJ0EZNEfWLg55g7LIkLe4FsdQK3Ui+iJ1hlwNCM+oS4KXeQ64Vwo3V+xc4ieKF147cHPDPqJ+a5mdX8j8atelwf8ehWgTE/hQIyP7oAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAALEgAACxIB0t1+/AAAAhFJREFUOMttVPlD2jAY/TzQii0WK2IVZDLrpi3sqIhjw2O4DRwiuqljZ52yw23Modb77h++9EpJ6fdD8tLvJfmavBcAHC2tbe0+TfO1t7W2QHN0dFJd/m6aYehufxfV2eFKB3rYYK8z7A2yPQFiOtcXImeE+riGRfrDA7x7S34g3I/nhwc9ioLBsLVGgBsCzxjizDoi0WGA2J2RJsJwNGJswNKo9VPxu6NuDs3qmwhjOr7H3h+fQByRYIwJAEzc/EEpAZB88JB69Jhu+Nk4A/KkiVOCWfEUwZmUIT1twieZp/apTj3TRi08nYbsjIW5WQvMBeefJy08k4WMXVZuwexfvHyVx0WIGdAYCxcWXxt9cankVMlooM3Zg+Wy0ZVWVkoEAZ/O6huAt2vrBGMEETbswbvK+vvFDx8JxgYipPB6nz5HvigSwUhpQG1iwtfovAiKtMA7jE0KtrarNuGb9h21irSGGD9+6l+q21uQ3sFq4H8Z56MzVn//MRSxkwY5W8NLWKFIf818tZaV0W0Wd91KUf4ZedgtotsEob63D56xv1cXDEUdqDGvfEw9MBSFNJnwyc152ZcwNamr+rBST5LpZL1yaKta98XR8clpwyWWTk+Oj7AvdGed8eVz9eIyfwVwlb+8UM/L/JnjLMubhdy1elOr3ajXuYLLm467b0OhW/BwN9jvg8gwouf7oIf3C/Mf881dmFPP9tUAAAAASUVORK5CYII="/>
                                                        </svg>

                                                    </div>
                                                    <div class="tariff-block__what-text"><span class="tariff-block__what-head">Стоимость контакта:</span><span class="tariff-block__what-value"></span></div>
                                                </div>
                                                <!-- /.tariff-block__what-item-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row tariff-block-line">
                                        <div class="col-12">
                                            <div class="col-4">
                                                <div class="line-block">
                                                    <div class="price">от 200 000 &#8381;</div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="btn-block"><a href="#ac-popup-order" class="btn-green popup-modal__order-link">Заказать</a></div>
                                            </div>
                                            <div class="col-4">
                                                <div class="line-block-right">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tariff-block-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.ac-tariff-->
        <!-- .ac-getresult-->
        <div id="ac-i-getresult" class="ac-getresult">
            <div class="getresult-warp">
                <div class="getresult-warp__bg">
                    <div class="container">
                        <div class="row bb1">
                            <div class="row-eq-height">
                                <div class="col-6">
                                    <h2 class="ac-head getresult-head">Что <span class="ac-head-green">вы получите <br>в результате</span> рекламной кампании</h2>
                                </div>
                                <div class="col-3">
                                    <div class="getresult-block">
                                        <div class="getresult-block__header">
                                            <div class="getresult-block__head">
                                                <h2 class="getresult-block__head">Плавный рост прямых заходов на сайт</h2>
                                            </div>
                                        </div>
                                        <div class="getresult-block__description">
                                            <p class="getresult-block__description-text">За таким ростом вы можете следить сами по графикам Яндекс.Вордстат. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="getresult-block">
                                        <div class="getresult-block__ico"><img src="assets/images/getresult/getresult1.png" alt="Плавный рост прямых заходов на сайт"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row bb2">
                            <div class="row-eq-height">
                                <div class="col-3">
                                    <div class="getresult-block">
                                        <div class="getresult-block__header">
                                            <div class="getresult-block__ico"><img src="assets/images/getresult/getresult2.png" alt="Массовое покрытие новой целевой аудитории"></div>
                                            <div class="getresult-block__head">
                                                <h2 class="getresult-block__head">Массовое покрытие новой целевой аудитории уже в первый месяц работы</h2>
                                            </div>
                                        </div>
                                        <div class="getresult-block__description">
                                            <p class="getresult-block__description-text">Ни один другой инструмент интернет-рекламы не даёт такого покрытия новой аудитории, как контент-маркетинг. Именно контент-маркетинг уже в первые месяцы работы знакомит с вашим продуктом//услугой десятки тысяч новых людей, которые раньше вообще ничего о вас не знали, а теперь вполне могут оказаться вашими покупателями. Да, понятно, что все эти десятки тысяч не станут вашими покупателями с «первого выстрела».</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="getresult-block">
                                        <div class="getresult-block__header">
                                            <div class="getresult-block__ico"><img src="assets/images/getresult/getresult3.png" alt="Очень целевые переходы на сайт"></div>
                                            <div class="getresult-block__head">
                                                <h2 class="getresult-block__head">Очень целевые переходы на сайт, которые могут оказаться даже качественнее, чем из контекста</h2>
                                            </div>
                                        </div>
                                        <div class="getresult-block__description">
                                            <p class="getresult-block__description-text">Особенно часто так бывает у сложных и новых продуктов//услуг, о которых человеку надо сначала почитать, понять, что это, зачем именно ему и пр. Или же у дорогих товаров//услуг. Человек не может купить это сразу, моментально. Например, из контекста. Ему нужно почитать обзоры, посмотреть видеообзоры, изучить отзывы. И только потом купить. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="getresult-block">
                                        <div class="getresult-block__header">
                                            <div class="getresult-block__ico"><img src="assets/images/getresult/getresult4.png" alt="Плавный рост популярности, узнаваемости"></div>
                                            <div class="getresult-block__head">
                                                <h2 class="getresult-block__head">Плавный рост популярности, узнаваемости</h2>
                                            </div>
                                        </div>
                                        <div class="getresult-block__description">
                                            <p class="getresult-block__description-text">Не всегда и не везде возможно оставить прямую ссылку на сайт. Не всегда это будет выглядеть уместно. Но, не зависимо от того, как много у вас отзывов со ссылками на сайт или без них, через 3-4 месяца кампаний контент-маркетинга, вы начнёте замечать рост прямых заходов на сайт: люди начнут сами искать ваши продукты//услуги. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="getresult-block">
                                        <div class="getresult-block__header">
                                            <div class="getresult-block__ico"><img src="assets/images/getresult/getresult5.png" alt="SEO-эффект"></div>
                                            <div class="getresult-block__head">
                                                <h2 class="getresult-block__head">SEO-эффект</h2>
                                            </div>
                                        </div>
                                        <div class="getresult-block__description">
                                            <p class="getresult-block__description-text">Так или иначе, но контент-маркетинг тоже подразумевает работу со ссылками. И 7-8 тех публикаций и постов, что будут у вас выходить, будут выходить со ссылками на сайт. При этом ссылки будут с очень авторитетных площадок. Так что SEO-эффект неизбежен, но для этого нужно хотя бы от полугода регулярных кампаний контент-маркетинга. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row bb3">
                            <div class="col-9">
                                <div class="getresult-block">
                                    <div class="getresult-block__header">
                                        <h2 class="ac-head__mini getresult-head-mini">Чего вы не получите в результате рекламной кампании <br>ни от нас, ни от какого-либо другого исполнителя </h2>
                                    </div>
                                    <div class="getresult-block__descriptiono">
                                        <div class="text">
                                            <p class="getresult-block__description-text-blod">Мгновенного взрыва продаж, звонков, заявок, обращений</p>
                                            <p class="getresult-block__description-text">Простите, но не получится вечером посадить рубль, а с утра получить денежное дерево. Интернет-реклама в 2016 – это не рог изобилия и не чудо. Конкуренция очень высокая, цена внимания – ещё выше. Да, в интернете есть такие каналы и площадки, после размещения на которых у людей «ложатся» сайты от количества переходов и обрываются телефоны от количества звонков. И мы знаем все такие каналы и площадки наперечёт. Но их – единицы. А тематики в большинстве своём – либо сложные (и нужна серия публикаций, пока люди поймут, о чём идёт речь), либо типичные (ещё один магазин духов), так что лавинообразные эффекты от размещений бывают, мягко говоря, не каждый день. Плюс – такие площадки, конечно же, не дешёвые. Порог входа начинается где-то от 50-80 тыс. руб. за одно размещение.</p>
                                        </div>
                                        <div class="ico wow pulse" data-wow-delay=".0s" data-wow-iteration="2"><img src="assets/images/getresult/getresult6.png" alt="НЕ мгновенный взрыв продаж"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.ac-getresult-->
        <!-- .ac-order-->
        <div class="ac-order">
            <div class="order-warp">
                <div class="order-warp__bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="order-block">
                                    <h2 class="ac-head__mini order-head-mini">Оставьте заявку и мы подберём <br>для вас идеальное решение</h2>
                                    <div class="order-block__btn-block"><a href="#ac-popup-order" class="order-block__btn-link popup-modal__order-link">Заказать</a></div>
                                    <!-- /.order-block__btn-block-->
                                </div>
                                <!-- /.order-block-->
                            </div>
                            <!-- /.col-12-->
                        </div>
                        <!-- /.row-->
                    </div>
                    <!-- /.container-->
                </div>
                <!-- /.order-warp__bg-->
            </div>
            <!-- /.order-warp-->
        </div>
        <!-- /.ac-order-->
        <!-- .ac-popup-modal-->
        <div id="ac-popup-order" class="ac-popup-modal popup-modal__order mfp-hide">
            <div class="ac-popup-modal__header">
                <div class="col-12">
                    <h2 class="ac-head ac-popup-modal__head">Заявка на рекламную кампанию</h2>
                </div>
            </div>
            <div class="ac-popup-modal__body">
                <div class="container-modal">
                    <div class="row lb-tariff-slider">
                        <div class="slider-nav some-tariffs-nav" data-slidernav="#lbTariffSlider">
                            <div class="slider-nav_next" data-route="next">></div>
                            <div class="slider-nav_prev" data-route="prev"><</div>
                        </div>
                        <div class="some-tariffs owl-carousel owl-theme" id="lbTariffSlider">
                            <div class="col-tariff">
                                <div class="some-tariff">
                                    <div class="some-tariff__block selected" data-tariff="50000">
                                        <div class="some-tariff__block-header">
                                            <div class="waterlemon-w-icon waterlemon-16"><img src="../assets/images/tariff/watermelon_16.png" alt=""></div>
                                            <h2 class="some-tariff__head">Самый доступный</h2>
                                        </div>
                                        <div class="some-tariff__block-inside">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="tariff-inside__item">
                                                        <div class="tariff-inside__item-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34" height="35" viewBox="0 0 34 35">
                                                            <image id="Vector_Smart_Object_copy_4" data-name="Vector Smart Object copy 4" width="34" height="35" xlink:href="data:img/png;base64,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"/>
                                                            </svg>

                                                        </div>
                                                        <div class="tariff-inside__item-text"><span class="inside-text">30 000 чел.</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="tariff-inside__item">
                                                        <div class="tariff-inside__item-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="33" height="31" viewBox="0 0 33 31">
                                                            <image id="Vector_Smart_Object_copy_5" data-name="Vector Smart Object copy 5" width="33" height="31" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAfCAMAAABeSlSAAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABnlBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAACd0Be+AAAAiHRSTlMAb+r3mgpX6UgREC3ItG2N8OsnCeXtNcBQEzAsAiYuA+Hf0NPLh1szsQwY464BBsWf23+cBynxbOYZTUHzNnveEiDsXqm90tFgXGr2jxWssC/1jHrGoHnUSrxj+w75GnG6BNxU4k62ZtZ+KkMFH+5FOMSbc6b4D806gPRuyWVwi7fyw1KY2asjjLoweQAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAFeSURBVDjLY2BgZOrADZhZWBnY2Dk4uXACbh4WBl4+Bn4BDCAoxCAsIiAgKsbNzCAuwSAphQGkZRgYZKWk5OS5OhgUFJXwAeUOBhVVCXxArQNkCz7ARY4KdQ1N/Cq0tBV1dPGp0NM34DQ0wqfCmMeEwdRMArcKcwtLIGllJo1LhbWNLZi2s3fArsLRyRnC0HVxlcemQtjN3cMDaIiMp4eXtw82Fb5+/v7KOgwMAYH+/v5BuPwSzMLAIBGCz7ehYQwMRsb4VIRHMDBERuFRYRkdw+AQG4dHRXwCAwOjOJ6YS0xKZjBJSUVTkcaH4KZnyDBk8iBHLUMWM4Mae3YOlJebl89QYBOAJK+bVVjEwFCcB88/JQyypag5KjaUFaSyDJx5ZMvTEivY7VBzlDySgVYioWWVVekMOIBeqrigeXVKDTc2ydq6+PqGxg7BptimZl2s2lvcG4FZvLWNsR2H+QD2RGfxRBI9CgAAAABJRU5ErkJggg=="/>
                                                            </svg>

                                                        </div>
                                                        <div class="tariff-inside__item-text"><span class="inside-text">~ 750-1500</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="tariff-inside__item">
                                                        <div class="tariff-inside__item-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="35" viewBox="0 0 32 35">
                                                            <image id="Vector_Smart_Object_copy_6" data-name="Vector Smart Object copy 6" width="32" height="35" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAjCAMAAADCMPhoAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABklBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAADxnp81AAAAhHRSTlMAE2Kk0vMqp/fBe0QjEAyV9JAf2LohN+2AAWmBkrwCTnIe+Mhzo5EoGF2zItNPD1mtzXhfw31YoHws8QfJ0EZNEfWLg55g7LIkLe4FsdQK3Ui+iJ1hlwNCM+oS4KXeQ64Vwo3V+xc4ieKF147cHPDPqJ+a5mdX8j8atelwf8ehWgTE/hQIyP7oAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAALEgAACxIB0t1+/AAAAhFJREFUOMttVPlD2jAY/TzQii0WK2IVZDLrpi3sqIhjw2O4DRwiuqljZ52yw23Modb77h++9EpJ6fdD8tLvJfmavBcAHC2tbe0+TfO1t7W2QHN0dFJd/m6aYehufxfV2eFKB3rYYK8z7A2yPQFiOtcXImeE+riGRfrDA7x7S34g3I/nhwc9ioLBsLVGgBsCzxjizDoi0WGA2J2RJsJwNGJswNKo9VPxu6NuDs3qmwhjOr7H3h+fQByRYIwJAEzc/EEpAZB88JB69Jhu+Nk4A/KkiVOCWfEUwZmUIT1twieZp/apTj3TRi08nYbsjIW5WQvMBeefJy08k4WMXVZuwexfvHyVx0WIGdAYCxcWXxt9cankVMlooM3Zg+Wy0ZVWVkoEAZ/O6huAt2vrBGMEETbswbvK+vvFDx8JxgYipPB6nz5HvigSwUhpQG1iwtfovAiKtMA7jE0KtrarNuGb9h21irSGGD9+6l+q21uQ3sFq4H8Z56MzVn//MRSxkwY5W8NLWKFIf818tZaV0W0Wd91KUf4ZedgtotsEob63D56xv1cXDEUdqDGvfEw9MBSFNJnwyc152ZcwNamr+rBST5LpZL1yaKta98XR8clpwyWWTk+Oj7AvdGed8eVz9eIyfwVwlb+8UM/L/JnjLMubhdy1elOr3ajXuYLLm467b0OhW/BwN9jvg8gwouf7oIf3C/Mf881dmFPP9tUAAAAASUVORK5CYII="/>
                                                            </svg>

                                                        </div>
                                                        <div class="tariff-inside__item-text"><span class="inside-text">~ 1.67 руб.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="some-tariff__block-price"><span class="some-tariff__price">50 000 &#8381;</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-tariff">
                                <div class="some-tariff">
                                    <div class="some-tariff__block" data-tariff="75000">
                                        <div class="some-tariff__block-header">
                                            <div class="waterlemon-w-icon waterlemon-26"><img src="../assets/images/tariff/watermelon_26.png" alt=""></div>
                                            <h2 class="some-tariff__head">Увеличенный охват</h2>
                                        </div>
                                        <div class="some-tariff__block-inside">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="tariff-inside__item">
                                                        <div class="tariff-inside__item-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34" height="35" viewBox="0 0 34 35">
                                                            <image id="Vector_Smart_Object_copy_4" data-name="Vector Smart Object copy 4" width="34" height="35" xlink:href="data:img/png;base64,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"/>
                                                            </svg>

                                                        </div>
                                                        <div class="tariff-inside__item-text"><span class="inside-text">60 000 чел.</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="tariff-inside__item">
                                                        <div class="tariff-inside__item-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="33" height="31" viewBox="0 0 33 31">
                                                            <image id="Vector_Smart_Object_copy_5" data-name="Vector Smart Object copy 5" width="33" height="31" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAfCAMAAABeSlSAAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABnlBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAACd0Be+AAAAiHRSTlMAb+r3mgpX6UgREC3ItG2N8OsnCeXtNcBQEzAsAiYuA+Hf0NPLh1szsQwY464BBsWf23+cBynxbOYZTUHzNnveEiDsXqm90tFgXGr2jxWssC/1jHrGoHnUSrxj+w75GnG6BNxU4k62ZtZ+KkMFH+5FOMSbc6b4D806gPRuyWVwi7fyw1KY2asjjLoweQAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAFeSURBVDjLY2BgZOrADZhZWBnY2Dk4uXACbh4WBl4+Bn4BDCAoxCAsIiAgKsbNzCAuwSAphQGkZRgYZKWk5OS5OhgUFJXwAeUOBhVVCXxArQNkCz7ARY4KdQ1N/Cq0tBV1dPGp0NM34DQ0wqfCmMeEwdRMArcKcwtLIGllJo1LhbWNLZi2s3fArsLRyRnC0HVxlcemQtjN3cMDaIiMp4eXtw82Fb5+/v7KOgwMAYH+/v5BuPwSzMLAIBGCz7ehYQwMRsb4VIRHMDBERuFRYRkdw+AQG4dHRXwCAwOjOJ6YS0xKZjBJSUVTkcaH4KZnyDBk8iBHLUMWM4Mae3YOlJebl89QYBOAJK+bVVjEwFCcB88/JQyypag5KjaUFaSyDJx5ZMvTEivY7VBzlDySgVYioWWVVekMOIBeqrigeXVKDTc2ydq6+PqGxg7BptimZl2s2lvcG4FZvLWNsR2H+QD2RGfxRBI9CgAAAABJRU5ErkJggg=="/>
                                                            </svg>

                                                        </div>
                                                        <div class="tariff-inside__item-text"><span class="inside-text">~ 1500-2000</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="tariff-inside__item">
                                                        <div class="tariff-inside__item-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="35" viewBox="0 0 32 35">
                                                            <image id="Vector_Smart_Object_copy_6" data-name="Vector Smart Object copy 6" width="32" height="35" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAjCAMAAADCMPhoAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABklBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAADxnp81AAAAhHRSTlMAE2Kk0vMqp/fBe0QjEAyV9JAf2LohN+2AAWmBkrwCTnIe+Mhzo5EoGF2zItNPD1mtzXhfw31YoHws8QfJ0EZNEfWLg55g7LIkLe4FsdQK3Ui+iJ1hlwNCM+oS4KXeQ64Vwo3V+xc4ieKF147cHPDPqJ+a5mdX8j8atelwf8ehWgTE/hQIyP7oAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAALEgAACxIB0t1+/AAAAhFJREFUOMttVPlD2jAY/TzQii0WK2IVZDLrpi3sqIhjw2O4DRwiuqljZ52yw23Modb77h++9EpJ6fdD8tLvJfmavBcAHC2tbe0+TfO1t7W2QHN0dFJd/m6aYehufxfV2eFKB3rYYK8z7A2yPQFiOtcXImeE+riGRfrDA7x7S34g3I/nhwc9ioLBsLVGgBsCzxjizDoi0WGA2J2RJsJwNGJswNKo9VPxu6NuDs3qmwhjOr7H3h+fQByRYIwJAEzc/EEpAZB88JB69Jhu+Nk4A/KkiVOCWfEUwZmUIT1twieZp/apTj3TRi08nYbsjIW5WQvMBeefJy08k4WMXVZuwexfvHyVx0WIGdAYCxcWXxt9cankVMlooM3Zg+Wy0ZVWVkoEAZ/O6huAt2vrBGMEETbswbvK+vvFDx8JxgYipPB6nz5HvigSwUhpQG1iwtfovAiKtMA7jE0KtrarNuGb9h21irSGGD9+6l+q21uQ3sFq4H8Z56MzVn//MRSxkwY5W8NLWKFIf818tZaV0W0Wd91KUf4ZedgtotsEob63D56xv1cXDEUdqDGvfEw9MBSFNJnwyc152ZcwNamr+rBST5LpZL1yaKta98XR8clpwyWWTk+Oj7AvdGed8eVz9eIyfwVwlb+8UM/L/JnjLMubhdy1elOr3ajXuYLLm467b0OhW/BwN9jvg8gwouf7oIf3C/Mf881dmFPP9tUAAAAASUVORK5CYII="/>
                                                            </svg>

                                                        </div>
                                                        <div class="tariff-inside__item-text"><span class="inside-text">~ 1.25 руб.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="some-tariff__block-price"><span class="some-tariff__price">75 000 &#8381;</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-tariff">
                                <div class="some-tariff">
                                    <div class="some-tariff__block" data-tariff="100000">
                                        <div class="some-tariff__block-header">
                                            <div class="waterlemon-w-icon waterlemon-36"><img src="../assets/images/tariff/watermelon_36.png" alt=""></div>
                                            <h2 class="some-tariff__head">Широкое покрытие</h2>
                                        </div>
                                        <div class="some-tariff__block-inside">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="tariff-inside__item">
                                                        <div class="tariff-inside__item-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34" height="35" viewBox="0 0 34 35">
                                                            <image id="Vector_Smart_Object_copy_4" data-name="Vector Smart Object copy 4" width="34" height="35" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAjCAMAAADGxShVAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACJVBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAABEEyGDAAAAtXRSTlMAO9q8GGvw+ZQDBp777WIE53Qdqi/zQyxmctIoTPYlIPo837iCm6fGVgXpbRakrDPyJNVpeMsfQo7iXwkBOrL+yT1RphWz97eKndjuXjTWqYyIkLurE0jsRBB3/Vs3gRK/bIYMoHDgMIBQwNelNd2uCFhPw/iSYfHHYCGhvZVAhM++xYll01x7VFr1Y9uYkZOjnEk5MZdu3mfBzfzhONS6JhTRtcivHhxv0HMXhw/jS3HrMkbksCWcXgAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxIAAAsSAdLdfvwAAALXSURBVDjLxdP5W9JwHMDxj6iDFEQzKo/JLDo0KTNFzSkd4IGKhYhOvOUYiBribV5dpFmKleWR5n3f7v/ru02fB/OXfuv7y97PZ6+H7bsxAIAAARMYBPwKxoSiS3yGhIolYXxKwyMuR0byfUV29ZrgOt9R0TGxeByXcgIg/gY/DrsJoLjF9+0IgDt3uUxIvJekvM+PHyQHPEx5xHdqmiodj+EyLiOZyXycxSaZnUOonzwl2c56Fq0WPmcvpNHm5mXkF+gKiwCK9Ykl+S9KEvXFAEWFuoKXhrxcrQZKjWXcb5nKKyhJZQi3lUoJVVFu4sZlxlIwa6qqUdbU5tXVl0NDI0BjA5TX1+XV1qBxdZXGDAxlsaK22WmDwwmYHO0QA6fDQNttaGy1UMy/kSYXamEsR8zNAM1mjsQK0djVxJGWVngFYrfC0OYBdbxUGq8GT5tB4RajcWsLInpje0dnF+Ddtp5eWZ86xumMUffJents3Th0dXa0G/XQq3htteKQ2d9DwsCgTD40JJcNDgDZ058JuNU6rOhF17OwxGbnHgPGEoxLdLuIWLg+JdlvWt5KT8m7lPcfLpKAQm9FUypP0rGPI6MjF8inMfRXCOTJ4Ge03S9+ZHzCR0ziX/FvUuN3wdTY2JSgU09pfvzETYRvYpwjqukZl8BbFjornPs1Ob+wMG/6nTZrdiZ5Ba6ZaRWcrUUlsZSz7MntRhuzd+d6tMtLhHIR/Ba5srrGHhtpbH0doxvZXltdIf1IMZHgZr+BDVInEunIDZRB7gSi2I/Yu2DTgY4MpYyKUqLXAuDYhC67P8HOCHoCljOC/UUkWyzZZsk2S7YkFwi+wxIVS1Qs2cHPk91R2hxMzwAj2tvf3xMxMEMHm+nRXf9dm1xzDl84MCUHJHlQwkC4zzHnmoTza5MjFJsURzYB/hcZ3tIeHon5D1Z8dKjdGr5AjiUnQ4SXby8xdCI5PjvzB4uJ9P8klPv4AAAAAElFTkSuQmCC"/>
                                                            </svg>

                                                        </div>
                                                        <div class="tariff-inside__item-text"><span class="inside-text">100 000 чел.</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="tariff-inside__item">
                                                        <div class="tariff-inside__item-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="33" height="31" viewBox="0 0 33 31">
                                                            <image id="Vector_Smart_Object_copy_5" data-name="Vector Smart Object copy 5" width="33" height="31" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAfCAMAAABeSlSAAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABnlBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAACd0Be+AAAAiHRSTlMAb+r3mgpX6UgREC3ItG2N8OsnCeXtNcBQEzAsAiYuA+Hf0NPLh1szsQwY464BBsWf23+cBynxbOYZTUHzNnveEiDsXqm90tFgXGr2jxWssC/1jHrGoHnUSrxj+w75GnG6BNxU4k62ZtZ+KkMFH+5FOMSbc6b4D806gPRuyWVwi7fyw1KY2asjjLoweQAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAFeSURBVDjLY2BgZOrADZhZWBnY2Dk4uXACbh4WBl4+Bn4BDCAoxCAsIiAgKsbNzCAuwSAphQGkZRgYZKWk5OS5OhgUFJXwAeUOBhVVCXxArQNkCz7ARY4KdQ1N/Cq0tBV1dPGp0NM34DQ0wqfCmMeEwdRMArcKcwtLIGllJo1LhbWNLZi2s3fArsLRyRnC0HVxlcemQtjN3cMDaIiMp4eXtw82Fb5+/v7KOgwMAYH+/v5BuPwSzMLAIBGCz7ehYQwMRsb4VIRHMDBERuFRYRkdw+AQG4dHRXwCAwOjOJ6YS0xKZjBJSUVTkcaH4KZnyDBk8iBHLUMWM4Mae3YOlJebl89QYBOAJK+bVVjEwFCcB88/JQyypag5KjaUFaSyDJx5ZMvTEivY7VBzlDySgVYioWWVVekMOIBeqrigeXVKDTc2ydq6+PqGxg7BptimZl2s2lvcG4FZvLWNsR2H+QD2RGfxRBI9CgAAAABJRU5ErkJggg=="/>
                                                            </svg>

                                                        </div>
                                                        <div class="tariff-inside__item-text"><span class="inside-text">~ 2000-3000</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="tariff-inside__item">
                                                        <div class="tariff-inside__item-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="35" viewBox="0 0 32 35">
                                                            <image id="Vector_Smart_Object_copy_6" data-name="Vector Smart Object copy 6" width="32" height="35" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAjCAMAAADCMPhoAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABklBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAADxnp81AAAAhHRSTlMAE2Kk0vMqp/fBe0QjEAyV9JAf2LohN+2AAWmBkrwCTnIe+Mhzo5EoGF2zItNPD1mtzXhfw31YoHws8QfJ0EZNEfWLg55g7LIkLe4FsdQK3Ui+iJ1hlwNCM+oS4KXeQ64Vwo3V+xc4ieKF147cHPDPqJ+a5mdX8j8atelwf8ehWgTE/hQIyP7oAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAALEgAACxIB0t1+/AAAAhFJREFUOMttVPlD2jAY/TzQii0WK2IVZDLrpi3sqIhjw2O4DRwiuqljZ52yw23Modb77h++9EpJ6fdD8tLvJfmavBcAHC2tbe0+TfO1t7W2QHN0dFJd/m6aYehufxfV2eFKB3rYYK8z7A2yPQFiOtcXImeE+riGRfrDA7x7S34g3I/nhwc9ioLBsLVGgBsCzxjizDoi0WGA2J2RJsJwNGJswNKo9VPxu6NuDs3qmwhjOr7H3h+fQByRYIwJAEzc/EEpAZB88JB69Jhu+Nk4A/KkiVOCWfEUwZmUIT1twieZp/apTj3TRi08nYbsjIW5WQvMBeefJy08k4WMXVZuwexfvHyVx0WIGdAYCxcWXxt9cankVMlooM3Zg+Wy0ZVWVkoEAZ/O6huAt2vrBGMEETbswbvK+vvFDx8JxgYipPB6nz5HvigSwUhpQG1iwtfovAiKtMA7jE0KtrarNuGb9h21irSGGD9+6l+q21uQ3sFq4H8Z56MzVn//MRSxkwY5W8NLWKFIf818tZaV0W0Wd91KUf4ZedgtotsEob63D56xv1cXDEUdqDGvfEw9MBSFNJnwyc152ZcwNamr+rBST5LpZL1yaKta98XR8clpwyWWTk+Oj7AvdGed8eVz9eIyfwVwlb+8UM/L/JnjLMubhdy1elOr3ajXuYLLm467b0OhW/BwN9jvg8gwouf7oIf3C/Mf881dmFPP9tUAAAAASUVORK5CYII="/>
                                                            </svg>

                                                        </div>
                                                        <div class="tariff-inside__item-text"><span class="inside-text">~ 1.00 руб.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="some-tariff__block-price"><span class="some-tariff__price">100 000 &#8381;</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-tariff">
                                <div class="some-tariff">
                                    <div class="some-tariff__block" data-tariff="150000">
                                        <div class="some-tariff__block-header">
                                            <div class="waterlemon-w-icon waterlemon-46"><img src="../assets/images/tariff/watermelon_46.png" alt=""></div>
                                            <h2 class="some-tariff__head">Огромный охват</h2>
                                        </div>
                                        <div class="some-tariff__block-inside">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="tariff-inside__item">
                                                        <div class="tariff-inside__item-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34" height="35" viewBox="0 0 34 35">
                                                            <image id="Vector_Smart_Object_copy_4" data-name="Vector Smart Object copy 4" width="34" height="35" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAjCAMAAADGxShVAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACJVBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAABEEyGDAAAAtXRSTlMAO9q8GGvw+ZQDBp777WIE53Qdqi/zQyxmctIoTPYlIPo837iCm6fGVgXpbRakrDPyJNVpeMsfQo7iXwkBOrL+yT1RphWz97eKndjuXjTWqYyIkLurE0jsRBB3/Vs3gRK/bIYMoHDgMIBQwNelNd2uCFhPw/iSYfHHYCGhvZVAhM++xYll01x7VFr1Y9uYkZOjnEk5MZdu3mfBzfzhONS6JhTRtcivHhxv0HMXhw/jS3HrMkbksCWcXgAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxIAAAsSAdLdfvwAAALXSURBVDjLxdP5W9JwHMDxj6iDFEQzKo/JLDo0KTNFzSkd4IGKhYhOvOUYiBribV5dpFmKleWR5n3f7v/ru02fB/OXfuv7y97PZ6+H7bsxAIAAARMYBPwKxoSiS3yGhIolYXxKwyMuR0byfUV29ZrgOt9R0TGxeByXcgIg/gY/DrsJoLjF9+0IgDt3uUxIvJekvM+PHyQHPEx5xHdqmiodj+EyLiOZyXycxSaZnUOonzwl2c56Fq0WPmcvpNHm5mXkF+gKiwCK9Ykl+S9KEvXFAEWFuoKXhrxcrQZKjWXcb5nKKyhJZQi3lUoJVVFu4sZlxlIwa6qqUdbU5tXVl0NDI0BjA5TX1+XV1qBxdZXGDAxlsaK22WmDwwmYHO0QA6fDQNttaGy1UMy/kSYXamEsR8zNAM1mjsQK0djVxJGWVngFYrfC0OYBdbxUGq8GT5tB4RajcWsLInpje0dnF+Ddtp5eWZ86xumMUffJents3Th0dXa0G/XQq3htteKQ2d9DwsCgTD40JJcNDgDZ058JuNU6rOhF17OwxGbnHgPGEoxLdLuIWLg+JdlvWt5KT8m7lPcfLpKAQm9FUypP0rGPI6MjF8inMfRXCOTJ4Ge03S9+ZHzCR0ziX/FvUuN3wdTY2JSgU09pfvzETYRvYpwjqukZl8BbFjornPs1Ob+wMG/6nTZrdiZ5Ba6ZaRWcrUUlsZSz7MntRhuzd+d6tMtLhHIR/Ba5srrGHhtpbH0doxvZXltdIf1IMZHgZr+BDVInEunIDZRB7gSi2I/Yu2DTgY4MpYyKUqLXAuDYhC67P8HOCHoCljOC/UUkWyzZZsk2S7YkFwi+wxIVS1Qs2cHPk91R2hxMzwAj2tvf3xMxMEMHm+nRXf9dm1xzDl84MCUHJHlQwkC4zzHnmoTza5MjFJsURzYB/hcZ3tIeHon5D1Z8dKjdGr5AjiUnQ4SXby8xdCI5PjvzB4uJ9P8klPv4AAAAAElFTkSuQmCC"/>
                                                            </svg>

                                                        </div>
                                                        <div class="tariff-inside__item-text"><span class="inside-text">165 000 чел.</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="tariff-inside__item">
                                                        <div class="tariff-inside__item-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="33" height="31" viewBox="0 0 33 31">
                                                            <image id="Vector_Smart_Object_copy_5" data-name="Vector Smart Object copy 5" width="33" height="31" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAfCAMAAABeSlSAAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABnlBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAACd0Be+AAAAiHRSTlMAb+r3mgpX6UgREC3ItG2N8OsnCeXtNcBQEzAsAiYuA+Hf0NPLh1szsQwY464BBsWf23+cBynxbOYZTUHzNnveEiDsXqm90tFgXGr2jxWssC/1jHrGoHnUSrxj+w75GnG6BNxU4k62ZtZ+KkMFH+5FOMSbc6b4D806gPRuyWVwi7fyw1KY2asjjLoweQAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAFeSURBVDjLY2BgZOrADZhZWBnY2Dk4uXACbh4WBl4+Bn4BDCAoxCAsIiAgKsbNzCAuwSAphQGkZRgYZKWk5OS5OhgUFJXwAeUOBhVVCXxArQNkCz7ARY4KdQ1N/Cq0tBV1dPGp0NM34DQ0wqfCmMeEwdRMArcKcwtLIGllJo1LhbWNLZi2s3fArsLRyRnC0HVxlcemQtjN3cMDaIiMp4eXtw82Fb5+/v7KOgwMAYH+/v5BuPwSzMLAIBGCz7ehYQwMRsb4VIRHMDBERuFRYRkdw+AQG4dHRXwCAwOjOJ6YS0xKZjBJSUVTkcaH4KZnyDBk8iBHLUMWM4Mae3YOlJebl89QYBOAJK+bVVjEwFCcB88/JQyypag5KjaUFaSyDJx5ZMvTEivY7VBzlDySgVYioWWVVekMOIBeqrigeXVKDTc2ydq6+PqGxg7BptimZl2s2lvcG4FZvLWNsR2H+QD2RGfxRBI9CgAAAABJRU5ErkJggg=="/>
                                                            </svg>

                                                        </div>
                                                        <div class="tariff-inside__item-text"><span class="inside-text">~ 4000</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="tariff-inside__item">
                                                        <div class="tariff-inside__item-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="35" viewBox="0 0 32 35">
                                                            <image id="Vector_Smart_Object_copy_6" data-name="Vector Smart Object copy 6" width="32" height="35" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAjCAMAAADCMPhoAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABklBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAADxnp81AAAAhHRSTlMAE2Kk0vMqp/fBe0QjEAyV9JAf2LohN+2AAWmBkrwCTnIe+Mhzo5EoGF2zItNPD1mtzXhfw31YoHws8QfJ0EZNEfWLg55g7LIkLe4FsdQK3Ui+iJ1hlwNCM+oS4KXeQ64Vwo3V+xc4ieKF147cHPDPqJ+a5mdX8j8atelwf8ehWgTE/hQIyP7oAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAALEgAACxIB0t1+/AAAAhFJREFUOMttVPlD2jAY/TzQii0WK2IVZDLrpi3sqIhjw2O4DRwiuqljZ52yw23Modb77h++9EpJ6fdD8tLvJfmavBcAHC2tbe0+TfO1t7W2QHN0dFJd/m6aYehufxfV2eFKB3rYYK8z7A2yPQFiOtcXImeE+riGRfrDA7x7S34g3I/nhwc9ioLBsLVGgBsCzxjizDoi0WGA2J2RJsJwNGJswNKo9VPxu6NuDs3qmwhjOr7H3h+fQByRYIwJAEzc/EEpAZB88JB69Jhu+Nk4A/KkiVOCWfEUwZmUIT1twieZp/apTj3TRi08nYbsjIW5WQvMBeefJy08k4WMXVZuwexfvHyVx0WIGdAYCxcWXxt9cankVMlooM3Zg+Wy0ZVWVkoEAZ/O6huAt2vrBGMEETbswbvK+vvFDx8JxgYipPB6nz5HvigSwUhpQG1iwtfovAiKtMA7jE0KtrarNuGb9h21irSGGD9+6l+q21uQ3sFq4H8Z56MzVn//MRSxkwY5W8NLWKFIf818tZaV0W0Wd91KUf4ZedgtotsEob63D56xv1cXDEUdqDGvfEw9MBSFNJnwyc152ZcwNamr+rBST5LpZL1yaKta98XR8clpwyWWTk+Oj7AvdGed8eVz9eIyfwVwlb+8UM/L/JnjLMubhdy1elOr3ajXuYLLm467b0OhW/BwN9jvg8gwouf7oIf3C/Mf881dmFPP9tUAAAAASUVORK5CYII="/>
                                                            </svg>

                                                        </div>
                                                        <div class="tariff-inside__item-text"><span class="inside-text">~ 0.91 руб.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="some-tariff__block-price"><span class="some-tariff__price">150 000 &#8381;</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-tariff">
                                <div class="some-tariff">
                                    <div class="some-tariff__block" data-tariff="200000">
                                        <div class="some-tariff__block-header">
                                            <div class="waterlemon-w-icon waterlemon-56"><img src="../assets/images/tariff/watermelon_56.png" alt=""></div>
                                            <h2 class="some-tariff__head">Лучшая стоимость</h2>
                                        </div>
                                        <div class="some-tariff__block-inside">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="tariff-inside__item">
                                                        <div class="tariff-inside__item-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34" height="35" viewBox="0 0 34 35">
                                                            <image id="Vector_Smart_Object_copy_4" data-name="Vector Smart Object copy 4" width="34" height="35" xlink:href="data:img/png;base64,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"/>
                                                            </svg>

                                                        </div>
                                                        <div class="tariff-inside__item-text"><span class="inside-text">130 000 чел.</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="tariff-inside__item">
                                                        <div class="tariff-inside__item-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="33" height="31" viewBox="0 0 33 31">
                                                            <image id="Vector_Smart_Object_copy_5" data-name="Vector Smart Object copy 5" width="33" height="31" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAfCAMAAABeSlSAAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABnlBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAACd0Be+AAAAiHRSTlMAb+r3mgpX6UgREC3ItG2N8OsnCeXtNcBQEzAsAiYuA+Hf0NPLh1szsQwY464BBsWf23+cBynxbOYZTUHzNnveEiDsXqm90tFgXGr2jxWssC/1jHrGoHnUSrxj+w75GnG6BNxU4k62ZtZ+KkMFH+5FOMSbc6b4D806gPRuyWVwi7fyw1KY2asjjLoweQAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAFeSURBVDjLY2BgZOrADZhZWBnY2Dk4uXACbh4WBl4+Bn4BDCAoxCAsIiAgKsbNzCAuwSAphQGkZRgYZKWk5OS5OhgUFJXwAeUOBhVVCXxArQNkCz7ARY4KdQ1N/Cq0tBV1dPGp0NM34DQ0wqfCmMeEwdRMArcKcwtLIGllJo1LhbWNLZi2s3fArsLRyRnC0HVxlcemQtjN3cMDaIiMp4eXtw82Fb5+/v7KOgwMAYH+/v5BuPwSzMLAIBGCz7ehYQwMRsb4VIRHMDBERuFRYRkdw+AQG4dHRXwCAwOjOJ6YS0xKZjBJSUVTkcaH4KZnyDBk8iBHLUMWM4Mae3YOlJebl89QYBOAJK+bVVjEwFCcB88/JQyypag5KjaUFaSyDJx5ZMvTEivY7VBzlDySgVYioWWVVekMOIBeqrigeXVKDTc2ydq6+PqGxg7BptimZl2s2lvcG4FZvLWNsR2H+QD2RGfxRBI9CgAAAABJRU5ErkJggg=="/>
                                                            </svg>

                                                        </div>
                                                        <div class="tariff-inside__item-text"><span class="inside-text">~ 4500</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="tariff-inside__item">
                                                        <div class="tariff-inside__item-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="35" viewBox="0 0 32 35">
                                                            <image id="Vector_Smart_Object_copy_6" data-name="Vector Smart Object copy 6" width="32" height="35" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAjCAMAAADCMPhoAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABklBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAADxnp81AAAAhHRSTlMAE2Kk0vMqp/fBe0QjEAyV9JAf2LohN+2AAWmBkrwCTnIe+Mhzo5EoGF2zItNPD1mtzXhfw31YoHws8QfJ0EZNEfWLg55g7LIkLe4FsdQK3Ui+iJ1hlwNCM+oS4KXeQ64Vwo3V+xc4ieKF147cHPDPqJ+a5mdX8j8atelwf8ehWgTE/hQIyP7oAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAALEgAACxIB0t1+/AAAAhFJREFUOMttVPlD2jAY/TzQii0WK2IVZDLrpi3sqIhjw2O4DRwiuqljZ52yw23Modb77h++9EpJ6fdD8tLvJfmavBcAHC2tbe0+TfO1t7W2QHN0dFJd/m6aYehufxfV2eFKB3rYYK8z7A2yPQFiOtcXImeE+riGRfrDA7x7S34g3I/nhwc9ioLBsLVGgBsCzxjizDoi0WGA2J2RJsJwNGJswNKo9VPxu6NuDs3qmwhjOr7H3h+fQByRYIwJAEzc/EEpAZB88JB69Jhu+Nk4A/KkiVOCWfEUwZmUIT1twieZp/apTj3TRi08nYbsjIW5WQvMBeefJy08k4WMXVZuwexfvHyVx0WIGdAYCxcWXxt9cankVMlooM3Zg+Wy0ZVWVkoEAZ/O6huAt2vrBGMEETbswbvK+vvFDx8JxgYipPB6nz5HvigSwUhpQG1iwtfovAiKtMA7jE0KtrarNuGb9h21irSGGD9+6l+q21uQ3sFq4H8Z56MzVn//MRSxkwY5W8NLWKFIf818tZaV0W0Wd91KUf4ZedgtotsEob63D56xv1cXDEUdqDGvfEw9MBSFNJnwyc152ZcwNamr+rBST5LpZL1yaKta98XR8clpwyWWTk+Oj7AvdGed8eVz9eIyfwVwlb+8UM/L/JnjLMubhdy1elOr3ajXuYLLm467b0OhW/BwN9jvg8gwouf7oIf3C/Mf881dmFPP9tUAAAAASUVORK5CYII="/>
                                                            </svg>

                                                        </div>
                                                        <div class="tariff-inside__item-text"><span class="inside-text">~ 0.87 руб.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="some-tariff__block-price"><span class="some-tariff__price">200 000 &#8381;</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-tariff">
                                <div class="some-tariff">
                                    <div class="some-tariff__block" data-tariff=">200000">
                                        <div class="some-tariff__block-header">
                                            <div class="waterlemon-w-icon waterlemon-66"><img src="../assets/images/tariff/watermelon_66.png" alt=""></div>
                                            <h2 class="some-tariff__head">Индивидуальный заказ</h2>
                                        </div>
                                        <div class="some-tariff__block-inside">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="tariff-inside__item">
                                                        <div class="tariff-inside__item-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34" height="35" viewBox="0 0 34 35">
                                                            <image id="Vector_Smart_Object_copy_4" data-name="Vector Smart Object copy 4" width="34" height="35" xlink:href="data:img/png;base64,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"/>
                                                            </svg>

                                                        </div>
                                                        <div class="tariff-inside__item-text"><span class="inside-text">от 250 000 чел.</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="tariff-inside__item">
                                                        <div class="tariff-inside__item-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="33" height="31" viewBox="0 0 33 31">
                                                            <image id="Vector_Smart_Object_copy_5" data-name="Vector Smart Object copy 5" width="33" height="31" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAfCAMAAABeSlSAAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABnlBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAACd0Be+AAAAiHRSTlMAb+r3mgpX6UgREC3ItG2N8OsnCeXtNcBQEzAsAiYuA+Hf0NPLh1szsQwY464BBsWf23+cBynxbOYZTUHzNnveEiDsXqm90tFgXGr2jxWssC/1jHrGoHnUSrxj+w75GnG6BNxU4k62ZtZ+KkMFH+5FOMSbc6b4D806gPRuyWVwi7fyw1KY2asjjLoweQAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAFeSURBVDjLY2BgZOrADZhZWBnY2Dk4uXACbh4WBl4+Bn4BDCAoxCAsIiAgKsbNzCAuwSAphQGkZRgYZKWk5OS5OhgUFJXwAeUOBhVVCXxArQNkCz7ARY4KdQ1N/Cq0tBV1dPGp0NM34DQ0wqfCmMeEwdRMArcKcwtLIGllJo1LhbWNLZi2s3fArsLRyRnC0HVxlcemQtjN3cMDaIiMp4eXtw82Fb5+/v7KOgwMAYH+/v5BuPwSzMLAIBGCz7ehYQwMRsb4VIRHMDBERuFRYRkdw+AQG4dHRXwCAwOjOJ6YS0xKZjBJSUVTkcaH4KZnyDBk8iBHLUMWM4Mae3YOlJebl89QYBOAJK+bVVjEwFCcB88/JQyypag5KjaUFaSyDJx5ZMvTEivY7VBzlDySgVYioWWVVekMOIBeqrigeXVKDTc2ydq6+PqGxg7BptimZl2s2lvcG4FZvLWNsR2H+QD2RGfxRBI9CgAAAABJRU5ErkJggg=="/>
                                                            </svg>

                                                        </div>
                                                        <div class="tariff-inside__item-text"><span class="inside-text">индивидуальный</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="tariff-inside__item">
                                                        <div class="tariff-inside__item-ico"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="35" viewBox="0 0 32 35">
                                                            <image id="Vector_Smart_Object_copy_6" data-name="Vector Smart Object copy 6" width="32" height="35" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAjCAMAAADCMPhoAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABklBMVEUAAAACAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMCAwMAAADxnp81AAAAhHRSTlMAE2Kk0vMqp/fBe0QjEAyV9JAf2LohN+2AAWmBkrwCTnIe+Mhzo5EoGF2zItNPD1mtzXhfw31YoHws8QfJ0EZNEfWLg55g7LIkLe4FsdQK3Ui+iJ1hlwNCM+oS4KXeQ64Vwo3V+xc4ieKF147cHPDPqJ+a5mdX8j8atelwf8ehWgTE/hQIyP7oAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAALEgAACxIB0t1+/AAAAhFJREFUOMttVPlD2jAY/TzQii0WK2IVZDLrpi3sqIhjw2O4DRwiuqljZ52yw23Modb77h++9EpJ6fdD8tLvJfmavBcAHC2tbe0+TfO1t7W2QHN0dFJd/m6aYehufxfV2eFKB3rYYK8z7A2yPQFiOtcXImeE+riGRfrDA7x7S34g3I/nhwc9ioLBsLVGgBsCzxjizDoi0WGA2J2RJsJwNGJswNKo9VPxu6NuDs3qmwhjOr7H3h+fQByRYIwJAEzc/EEpAZB88JB69Jhu+Nk4A/KkiVOCWfEUwZmUIT1twieZp/apTj3TRi08nYbsjIW5WQvMBeefJy08k4WMXVZuwexfvHyVx0WIGdAYCxcWXxt9cankVMlooM3Zg+Wy0ZVWVkoEAZ/O6huAt2vrBGMEETbswbvK+vvFDx8JxgYipPB6nz5HvigSwUhpQG1iwtfovAiKtMA7jE0KtrarNuGb9h21irSGGD9+6l+q21uQ3sFq4H8Z56MzVn//MRSxkwY5W8NLWKFIf818tZaV0W0Wd91KUf4ZedgtotsEob63D56xv1cXDEUdqDGvfEw9MBSFNJnwyc152ZcwNamr+rBST5LpZL1yaKta98XR8clpwyWWTk+Oj7AvdGed8eVz9eIyfwVwlb+8UM/L/JnjLMubhdy1elOr3ajXuYLLm467b0OhW/BwN9jvg8gwouf7oIf3C/Mf881dmFPP9tUAAAAASUVORK5CYII="/>
                                                            </svg>

                                                        </div>
                                                        <div class="tariff-inside__item-text"><span class="inside-text">~ </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="some-tariff__block-price"><span class="some-tariff__price">от 200 000 &#8381;</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ac-popup-modal__footer">
                <form id="ac-order-form" action="request.php" method="post" class="order-form-wapr">
                    <input type="hidden" id="tariff" name="Client[tariff]" value=""/>
                    <div class="container-modal">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <input type="text" id="name" name="Client[name]" placeholder="Контактное лицо" class="form-control">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <input type="email" id="email" placeholder="E-mail" name="Client[email]" class="form-control">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <input type="text" id="phone" placeholder="Телефон" name="Client[phone]" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row bb1">
                            <div class="form-group">
                                <button class="btn">Отправить</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.ac-popup-modal-->
        <!-- .ac-popup-modal__ok-->
        <div id="ac-popup-ok" class="ac-popup-modal popup-modal__ok mfp-hide">
            <div class="ac-popup-modal__body">
                <div class="container-modal">
                    <div class="row">
                        <div class="ok-header-block">
                            <h2 class="modal-ok-header">Спасибо! Мы приняли вашу заявку!<br>Менеджер свяжется с вами в ближайшее время!</h2>
                        </div>
                        <div class="ok-close-block">
                            <button title="Закрыть (Esc)" type="button" class="ok-close-btn" onclick="$.magnificPopup.close();"><span class="ok-close-btn-cross">×</span> Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.ac-popup-modal__ok-->
        <!-- .ac-work-->
        <div id="ac-i-work" class="ac-work">
            <div class="work-warp">
                <div class="work-warp__bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="ac-head work-head">Примеры работ</h2>
                            </div>
                        </div>
                        <div class="row bb1">
                            <div class="col-6">
                                <div class="work-block__big">
                                    <div class="work-block__big-header">
                                        <div class="work-block__big-header-logo"><img src="assets/images/work/work1.png" alt=""></div>
                                    </div>
                                    <div class="work-block__big-description">
                                        <div class="work-block__header-name">
                                            <h2 class="work-block__head">Audi.ru</h2>
                                            <p class="work-block__big-description-text">Краткое описание проекта и то что было сделно. Да, понятно, что все эти десятки тысяч не станут вашими покупателями с «первого выстрела». Краткое описание проекта и то что было сделно. Да, понятно, что все эти десятки тысяч не станут вашими покупателями с «первого выстрела».</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="work-block">
                                    <div class="work-block__header">
                                        <div class="work-block__header-logo"><img src="assets/images/work/work2.png" alt=""></div>
                                        <div class="work-block__header-name">
                                            <h2 class="work-block__head">Snob.ru</h2>
                                        </div>
                                    </div>
                                    <div class="work-block__header-description">
                                        <p class="work-block__description-text">Краткое описание проекта и то что было сделно. Да, понятно, что все эти десятки тысяч не станут вашими покупателями с «первого выстрела».</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="work-block">
                                    <div class="work-block__header">
                                        <div class="work-block__header-logo"><img src="assets/images/work/work3.png" alt=""></div>
                                        <div class="work-block__header-name">
                                            <h2 class="work-block__head">Tinkoff.ru</h2>
                                        </div>
                                    </div>
                                    <div class="work-block__header-description">
                                        <p class="work-block__description-text">Краткое описание проекта и то что было сделно. Да, понятно, что все эти десятки тысяч не станут вашими покупателями с «первого выстрела».</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="work-block">
                                    <div class="work-block__header">
                                        <div class="work-block__header-logo"><img src="assets/images/work/work4.png" alt=""></div>
                                        <div class="work-block__header-name">
                                            <h2 class="work-block__head">Shelton.com</h2>
                                        </div>
                                    </div>
                                    <div class="work-block__header-description">
                                        <p class="work-block__description-text">Краткое описание проекта и то что было сделно. Да, понятно, что все эти десятки тысяч не станут вашими покупателями с «первого выстрела».</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="work-block">
                                    <div class="work-block__header">
                                        <div class="work-block__header-logo"><img src="assets/images/work/work5.png" alt=""></div>
                                        <div class="work-block__header-name">
                                            <h2 class="work-block__head">Mediamarkt.ru</h2>
                                        </div>
                                    </div>
                                    <div class="work-block__header-description">
                                        <p class="work-block__description-text">Краткое описание проекта и то что было сделно. Да, понятно, что все эти десятки тысяч не станут вашими покупателями с «первого выстрела».</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="work-block">
                                    <div class="work-block__header">
                                        <div class="work-block__header-logo"><img src="assets/images/work/work6.png" alt=""></div>
                                        <div class="work-block__header-name">
                                            <h2 class="work-block__head">Shelton.com</h2>
                                        </div>
                                    </div>
                                    <div class="work-block__header-description">
                                        <p class="work-block__description-text">Краткое описание проекта и то что было сделно. Да, понятно, что все эти десятки тысяч не станут вашими покупателями с «первого выстрела».</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="work-block">
                                    <div class="work-block__header">
                                        <div class="work-block__header-logo"><img src="assets/images/work/work7.png" alt=""></div>
                                        <div class="work-block__header-name">
                                            <h2 class="work-block__head">Podarki.ru</h2>
                                        </div>
                                    </div>
                                    <div class="work-block__header-description">
                                        <p class="work-block__description-text">Краткое описание проекта и то что было сделно. Да, понятно, что все эти десятки тысяч не станут вашими покупателями с «первого выстрела».</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="work__btn-block"><a href="#ac-popup-order" class="work__btn-link popup-modal__order-link">хочу также</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.ac-work-->
        <div class="ac-smi">
            <div class="container">
                <div class="row bb1">
                    <div class="col-12">
                        <h2 class="ac-head smi-head">Мы в СМИ</h2>
                    </div>
                </div>
                <div class="row bb2">
                    <div class="row-eq-height">
                        <div class="col-4">
                            <div class="smi-block wow fadeIn" data-wow-delay=".2s">
                                <div class="smi-block__header">
                                    <a href="#" class="smi-block-head-link" target="_blank">
                                        <div class="smi-block__header-ico"><img src="assets/images/smi/smi1.png" alt=""></div>
                                        <div class="smi-block__header-head">
                                            <h2 class="smi-block-head">Результаты модуля «Контент-маркетинг»</h2>
                                        </div>
                                    </a>
                                </div>
                                <div class="smi-block__text">
                                    <p class="smi-block__text-txt">В ноябре 2015 года в SeoPult была запущена услуга «Контент-маркетинг» – как мы можем судить сегодня, невероятно востребованная среди представителей самых разных сфер бизнеса. Об эффективности услуги говорят как показатели роста прямого трафика на сайты наших пользователей, так и реальные конверсии с этих переходов. Представляем вашему вниманию первые кейсы и результаты продвижения.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="smi-block wow fadeIn" data-wow-delay=".4s">
                                <div class="smi-block__header">
                                    <a href="#" class="smi-block-head-link" target="_blank">
                                        <div class="smi-block__header-ico"><img src="assets/images/smi/smi2.png" alt=""></div>
                                        <div class="smi-block__header-head">
                                            <h2 class="smi-block-head">Поисковая видимость в списке проектов</h2>
                                        </div>
                                    </a>
                                </div>
                                <div class="smi-block__text">
                                    <p class="smi-block__text-txt">Теперь по SEO-проектам доступны данные о поисковой видимости продвигаемого ресурса и размерах привлеченной из поиска аудитории. Поисковая видимость – это показатель, отражающий насколько легко потенциальные клиенты могут найти ваш сайт в поисковых системах по продвигаемым вами ключевым словам. Расчет поисковой видимости учитывает так же популярность поисковых машин по количеству трафика из различных регионов. Для удобства, вы можете</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="smi-block wow fadeIn" data-wow-delay=".6s">
                                <div class="smi-block__header">
                                    <a href="#" class="smi-block-head-link" target="_blank">
                                        <div class="smi-block__header-ico"><img src="assets/images/smi/smi3.png" alt=""></div>
                                        <div class="smi-block__header-head">
                                            <h2 class="smi-block-head">Технологически Система представляет собой комплекс модулей</h2>
                                        </div>
                                    </a>
                                </div>
                                <div class="smi-block__text">
                                    <p class="smi-block__text-txt">Благодаря применению оптимальных схем и постоянного мониторинга Система SeoPult позволяет достигать максимальных результатов при минимальных бюджетах. За счет автоматизации всех технических операций Система полностью избавляет оптимизатора от рутинной работы и экономит его время. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="row">
                  <div class="col-4">
                    <div class="smi-more-block"><a href="" class="smi-more-btn">показать ещё</a></div>
                  </div>
                </div>-->
            </div>
        </div>
        <!-- /.ac-smi-->
        <!-- .ac-footer-->
        <footer class="ac-footer">
            <div class="container">
                <div class="col-6">
                    <div class="ac-footer__logo-box">
                        <div class="logo-box">
                            <div class="logo-box__img"><svg id="logo" xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56"><path id="green" class="logo_ac-green" d="M88.392,70.816a43.582,43.582,0,0,1-44.8-.027L38,80.494a56.046,56.046,0,0,0,56,.017Z" transform="translate(-38 -32)"/><path id="red" class="logo_ac-red" d="M65.942,32L44.993,68.359a41.991,41.991,0,0,0,41.994.029ZM61.361,62.448L66,54c1.383,2.391,2.791,5.227,4.655,8.45A31.23,31.23,0,0,1,66,63,30.851,30.851,0,0,1,61.361,62.448Z" transform="translate(-38 -32)"/></svg>

                            </div>
                            <!-- /.logo-box__img-->
                            <div class="logo-box__text">
                                <h2>Alfa-Content</h2><span>Сочный контент-маркетинг</span>
                            </div>
                            <!-- /.logo-box__text-->
                        </div>
                    </div>
                    <!-- /.ac-footer__logo-box-->

                    <?php /*                     * ** Пока нет групп — скрываем ***

                      <div class="ac-footer__social-box"><a href="#" title="Alfa Content в FaceBook" target="_blank" class="ac-footer__social-link ac-footer__social-link_fb"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><path id="ac-social-ico_fb" class="ac-social-ico ac-social-ico_fb" d="M415,7937.01a15,15,0,1,1-15,15A15,15,0,0,1,415,7937.01Zm2.072,8.5a0.923,0.923,0,0,0-1.118,1.03v1.92h2.656l-0.279,3.1h-2.377v9.45h-3.636v-9.45H410.5v-3.1h1.818v-2.51c0-2.15,1.212-3.69,3.5-3.69h2.936v3.25h-1.678Z" transform="translate(-400 -7937)"/></svg>
                      </a><a href="#" title="Alfa Content в VK" target="_blank" class="ac-footer__social-link ac-footer__social-link_vk"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><path id="ac-social-ico_vk" class="ac-social-ico ac-social-ico_vk" d="M452.5,7937.01a15,15,0,1,1-15,15A15,15,0,0,1,452.5,7937.01Zm-9.475,10.87c-0.493,0-1.375.05-.882,0.94s3.659,9.19,9.291,9.19c1.617,0,1.972-.17,1.972-0.81s0.467-2.39,1.531-1.3,1.713,2.11,3.141,2.11h1.868c0.95,0,2.076-.34,1.22-1.45a28.367,28.367,0,0,0-2.518-2.58c-0.389-.42-0.57-0.64-0.025-1.3s2.154-2.73,2.647-3.54,0.13-1.26-.493-1.26H457.87a0.919,0.919,0,0,0-1.142.69,15.769,15.769,0,0,1-2.336,3.66c-0.752.64-.986-0.1-0.986-0.51v-3.15a1.178,1.178,0,0,0-1.272-1.06c-1.049,0-3.2-.08-3.607.5-0.294.41,0.309,0.09,0.753,0.51a2.966,2.966,0,0,1,.363,1.87c0,0.66.028,3.03-1.064,1.82a18.227,18.227,0,0,1-2.258-3.49,1.106,1.106,0,0,0-1.323-.84h-1.973Z" transform="translate(-437.5 -7937)"/></svg>
                      </a><a href="#" title="Alfa Content в Одноклассниках" target="_blank" class="ac-footer__social-link ac-footer__social-link_ok"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><path id="ac-social-ico_ok" class="ac-social-ico ac-social-ico_ok" d="M490,7937.01a15,15,0,1,1-15,15A15,15,0,0,1,490,7937.01Zm4.678,18.04a7.877,7.877,0,0,1-2.737,1.19l2.544,2.64a1.457,1.457,0,0,1,0,2,1.325,1.325,0,0,1-1.921,0l-2.574-2.68-2.574,2.68a1.323,1.323,0,0,1-1.92,0,1.455,1.455,0,0,1,0-2l2.57-2.67a8.467,8.467,0,0,1-2.8-1.2c-1.323-.89.131-3.28,1.435-2.46a6.235,6.235,0,0,0,3.3,1.06,5.727,5.727,0,0,0,3.276-1.04C494.5,7951.72,496.1,7954.07,494.678,7955.05Zm-4.672-2.75a4.789,4.789,0,1,1,4.6-4.78A4.694,4.694,0,0,1,490.006,7952.3Zm0-6.78a2,2,0,1,0,1.921,2A1.958,1.958,0,0,0,490.006,7945.52Z" transform="translate(-475 -7937)"/></svg>
                      </a><a href="#" title="Alfa Content в Twitter" target="_blank" class="ac-footer__social-link ac-footer__social-link_twi"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><path id="ac-social-ico_twi" class="ac-social-ico ac-social-ico_twi" d="M527.5,7937.01a15,15,0,1,1-15,15A15,15,0,0,1,527.5,7937.01Zm7.014,14.33a3.408,3.408,0,0,0,1.988.15,2.636,2.636,0,0,1-2.278.82c-0.736,3.86-5.33,5.84-9.244,5.69a9.057,9.057,0,0,1-6.324-3.11c-0.412-.48.067-0.23,0.191-0.13,1.861,1.63,4.643,1.07,6.21-.36-1.49-.02-1.643-1.05-0.592-1.49a2.311,2.311,0,0,1-2.045-.83c-0.111-.12-0.1-0.22.058-0.35a1.631,1.631,0,0,1,.955-0.37,2.191,2.191,0,0,1-1.873-1.58c-0.057-.24.039-0.21,1.032-0.34a2,2,0,0,1-1.471-1.89c-0.019-.32-0.087-0.32,1.146.2,3.989,1.68,4.433,2.25,4.834,2.58a10.49,10.49,0,0,1,2.064-3.55c0.726-.76.815-0.76,0.649-0.26,1.529-.89,1.319-0.41.936-0.06,1.434-.53,1.243.19,0.765,0.37a7.684,7.684,0,0,0-1.032.33,3.957,3.957,0,0,1,3.77,3.19,2.8,2.8,0,0,0,2.077-.11C536.275,7950.69,535.7,7951.23,534.514,7951.34Z" transform="translate(-512.5 -7937)"/></svg>
                      </a></div>
                      <!-- /.ac-footer__social-box-->

                     */ ?>
                </div>
                <div class="col-6">
                    <div class="ac-footer__right-block">
                        <div class="ac-footer__mail-box"><a href="mailto:info@alfa-content.ru" class="footer-mail-link">info@alfa-content.ru</a></div>
                        <div class="ac-footer__tel-box"><a href="tel:+74959802621" class="footer-tel-link">+7 (495) 980-26-21</a></div>
                    </div>
                    <!-- /.ac-footer__right-block-->
                </div>
            </div>
        </footer>
        <!-- /.ac-footer-->
        <div id="scroller" style="" class="b-top"><span class="b-top-but"><svg id="ac-up-icosvg" style="enable-background:new 0 0 48 48" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 48 48" height="48px" width="48px" version="1.1" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill-rule="evenodd" clip-rule="evenodd" class="ac-totop" d="m44 0h-40c-2.2 0-4 1.8-4 4v40c0 2.2 1.8 4 4 4h40c2.2 0 4-1.8 4-4v-40c0-2.2-1.8-4-4-4zm-30.4 26.6l9-9c0.781-0.781 2.05-0.781 2.83 0l9 9c0.781 0.781 0.781 2.05 0 2.83-0.781 0.781-2.05 0.781-2.83 0l-7.6-7.6-7.59 7.59c-0.781 0.781-2.05 0.781-2.83 0-0.8-0.8-0.8-2 0-2.8z"/></svg></span><!-- /.b-top-but-->
        </div><!-- /.b-top-->
    </body>
</html>
