<!DOCTYPE html>
<html lang="ru" class="page">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="theme-color" content="#fff"/>
    <title>Добро пожаловать в VOXYS | Начни карьеру сегодня</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Raleway:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
    <script defer="defer" src="{{ asset('js/main.js') }}"></script>
</head>
<body class="page__body">
<div class="site-container">
    <header class="header">
        <div class="container header__container">
            <div class="logo header__logo">
                <span class="header__subtitle">call-центр</span>
                <img
                    loading="lazy"
                    src="{{ asset('img/logo.svg') }}"
                    class="image"
                    width="193"
                    height="46"
                    alt="Voxys"
                />
            </div>
            <nav class="nav" title="menu" data-menu>
                <ul class="list-reset nav__list">
                    <li class="nav__item">
                        <a href="#about-company" class="nav__link" data-menu-item
                        >О компании</a
                        >
                    </li>
                    <li class="nav__item">
                        <a href="#work" class="nav__link" data-menu-item
                        >Условия труда</a
                        >
                    </li>
                    <li class="nav__item">
                        <a href="#carrer" class="nav__link" data-menu-item
                        >Карьера у нас</a
                        >
                    </li>
                    <li class="nav__item">
                        <a href="#connect" class="btn btn--border" data-menu-item
                        >Оставить заявку</a
                        >
                    </li>
                </ul>
                <button
                    class="btn-reset burger-close burger--active"
                    aria-label="Закрыть меню"
                    data-menu-close
                >
                    <span class="burger__line"></span>
                    <span class="burger__line"></span>
                </button>
            </nav>
            <button
                class="btn-reset burger"
                aria-label="Открыть меню"
                aria-expanded="false"
                data-burger
            >
                <span class="burger__line"></span>
                <span class="burger__line"></span>
                <span class="burger__line"></span>
            </button>
        </div>
    </header>
    <main class="main">
        <section class="hero section">
            <div class="hero__container container">
                <h1 class="hero__title">Добро пожаловать в <span>Voxys</span></h1>
                <p class="hero__descr">
                    Начни карьеру сегодня в любом из наших городов присутствия.
                </p>
                <a href="#" class="hero__link btn">Стать частью команды</a>
            </div>
        </section>
        <section class="about-company section" id="about-company">
            <div class="about-company__container container">
                <h2 class="title title--h2 about-company__title">О компании</h2>
                <p class="about-company__descr">
              <span>VOXYS СЕГОДНЯ — ЛИДЕР РЫНКА КЛИЕНТСКОГО СЕРВИСА.</span
              ><br/>Центр коммуникаций VOXYS образован в 2020 году в результате
                    масштабного объединения четыре компаний: BEEPER, Comfortel,
                    TELECOMEXPRESS и Лоджиколл —российских контакт-центров c более чем
                    20-ти летним опытом работы в отрасли клиентского сервиса.
                </p>
                <ul class="list-reset about-company__list">
                    <li class="about-company__item company-item">
                        <div class="company-item__value">100000</div>
                        <div class="company-item__name">Сотрудников</div>
                    </li>
                    <li class="about-company__item company-item">
                        <div class="company-item__value">20</div>
                        <div class="company-item__name">Лет на рынке</div>
                    </li>
                    <li class="about-company__item company-item">
                        <div class="company-item__value">36</div>
                        <div class="company-item__name">Центров коммуникаций</div>
                    </li>
                    <li class="about-company__item company-item">
                        <div class="company-item__value">26%</div>
                        <div class="company-item__name">
                            Российского рынка коммунации
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="work section" id="work">
            <div class="container work__container">
                <h2 class="title title--h2 work__title">Условия труда</h2>
                <div class="work__block work-block">
                    <div class="work-block__info">
                        <h3 class="work-block__title title title--h3">
                            Чем тебе предстоит заниматься:
                        </h3>
                        <ul class="work-block__list">
                            <li class="work-block__item">Консультировать клиентов.</li>
                            <li class="work-block__item">
                                Вести коммуникации по различным каналам связи.
                            </li>
                            <li class="work-block__item">Совершать исходящие звонки.</li>
                            <li class="work-block__item">
                                Принимать входящие запросы и решать нестандартные задачи.
                            </li>
                        </ul>
                    </div>
                    <div class="work-block__img">
                        <picture
                        >
                            <source srcset="{{ asset('img/career-1.avif') }}" type="image/avif"/>
                            <source srcset="{{ asset('img/career-1.webp') }}" type="image/webp"/>
                            <img
                                loading="lazy"
                                src="{{ asset('img/career-1.png') }}"
                                class="image"
                                width="476"
                                height="300"
                                alt="Человек говорит по телефону"
                            /></picture>
                    </div>
                </div>
                <div class="work__block work-block">
                    <div class="work-block__info">
                        <h3 class="work-block__title title title--h3">
                            Чем требуется от тебя:
                        </h3>
                        <ul class="work-block__list">
                            <li class="work-block__item">Стремление помогать людям.</li>
                            <li class="work-block__item">
                                Умение грамотно и четко выражать мысли;
                            </li>
                            <li class="work-block__item">
                                Способность быстро искать нужную информацию;
                            </li>
                            <li class="work-block__item">
                                Отличная память и внимание к деталям.
                            </li>
                            <li class="work-block__item">Желание учиться и расти.</li>
                        </ul>
                    </div>
                    <div class="work-block__img">
                        <picture
                        >
                            <source srcset="{{ asset('img/career-2.avif') }}" type="image/avif"/>
                            <source srcset="{{ asset('img/career-2.webp') }}" type="image/webp"/>
                            <img
                                loading="lazy"
                                src="{{ asset('img/career-1.png') }}"
                                class="image"
                                width="476"
                                height="300"
                                alt="Человек говорит по телефону"
                            /></picture>
                    </div>
                </div>
                <div class="work__block work-block work-block--big">
                    <div class="work-block__info">
                        <h3 class="work-block__title title title--h3">
                            Почему стоит начать работу в Voxys?
                        </h3>
                        <ul class="work-block__list">
                            <li class="work-block__item">
                                Мы говорим с потребителями от имени крупнейших российских
                                и международных компаний.
                            </li>
                            <li class="work-block__item">
                                Умение грамотно и четко выражать мысли;
                            </li>
                            <li class="work-block__item">
                                У нас масштабные и комплексные задачи, требующие
                                нестандартного подхода.
                            </li>
                            <li class="work-block__item">
                                Просторные операторские залы, индивидуальное рабочее место,
                                оборудованные учебные классы, комфортные условия — все,
                                чтобы сосредоточиться и выполнить рабочие задачи.
                            </li>
                            <li class="work-block__item">
                                Ты будешь участвовать в регулярных тренингах и развивать
                                soft skills.
                            </li>
                            <li class="work-block__item">
                                У тебя будет высококомпетентный руководитель, наставник
                                и индивидуальный коучинг от старших коллег.
                            </li>
                            <li class="work-block__item">
                                Мы фокусируемся на командной работе, взаимовыручке
                                и поддержке на всех уровнях.
                            </li>
                            <li class="work-block__item">
                                Мы воспринимаем ошибки как неотъемлемую часть опыта.
                            </li>
                            <li class="work-block__item">
                                У нас объективная система премирования по результатам
                                усердной работы.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="career section" id="carrer">
            <div class="career__container container">
                <h2 class="title title--h2 career__title">Карьера у нас</h2>
                <div class="career__content">
                    <ul class="list-reset accordion__list career__list">
                        <li class="accordion__item test">
                            <button class="accordion__button">
                                Voxys — это классное место работы
                            </button>
                            <div class="accordion__panel">
                                <p class="accordion__descr">
                                    Просторные операторские залы, индивидуальное рабочее
                                    место, оборудованные учебные классы, комфортные условия —
                                    все, чтобы сосредоточиться и выполнить рабочие задачи.
                                </p>
                                <p class="accordion__descr">
                                    Время перерыва можно провести в комнате отдыха или
                                    перекусить на кухне и пообщаться с коллегами.
                                </p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <button class="accordion__button active">
                                Успех одного — это успех команды
                            </button>
                            <div class="accordion__panel" style="max-height: fit-content">
                                <p class="accordion__descr">
                                    Мы всегда поддерживаем и направляем друг друга. Сложность
                                    и разнообразие проектов, работа с крупнейшими брендами
                                    делают наших консультантов экспертами во многих областях.
                                </p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <button class="accordion__button">
                                Корпоративная культура уровня Voxys!
                            </button>
                            <div class="accordion__panel">
                                <p class="accordion__descr">
                                    VOXYS поощряет своих сотрудников за личные достижения,
                                    организует для них корпоративные праздники и мероприятия.
                                    А также мы систематически участвуем в социальных
                                    и благотворительных проектах городов присутствия.
                                </p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <button class="accordion__button">
                                Это настройщий вызов! Примешь его?
                            </button>
                            <div class="accordion__panel">
                                <p class="accordion__descr">
                                    Предполагает не только достойные условия, работу
                                    со сложными и интересными задачами, но также комфортный
                                    рабочий климат и сплочённую команду.
                                </p>
                                <p class="accordion__descr">
                                    Сотрудники компании — не просто эксперты в своих областях,
                                    но и приятные в общении люди, которые всегда готовы
                                    не только поддержать друг друга в непростой ситуации,
                                    но и просто весело провести свободное от работы время.
                                    У нас коллеги становятся хорошими друзьями.
                                </p>
                            </div>
                        </li>
                    </ul>
                    <div class="career__img">
                        <img
                            loading="lazy"
                            src=" {{ asset('img/career-logo.svg') }}"
                            class="image"
                            width="116"
                            height="502"
                            alt="Voxys"
                        />
                    </div>
                </div>
            </div>
        </section>
        <section class="connect section" id="connect">
            <div class="container connect__container">
                <h2 class="title title--h2 connect__title">Стать частью команды</h2>
                <div class="connect__content">
                    <div class="connect__left">
                        <h3 class="title title--h3 connect__title">
                            Напишите нам,<br/>и мы с вами свяжемся
                        </h3>
                        <form action="#" class="form connect__form">
                            <label class="form__label"
                            ><input
                                    type="text"
                                    v-model="name"
                                    name="Имя"
                                    class="input-reset form__input"
                                    placeholder="Имя"
                                /></label>
                            <label class="form__label"
                            ><input
                                    type="tel"
                                    name="Телефон"
                                    v-model="phone"
                                    class="input-reset form__input"
                                    placeholder="Номер телефона"
                                    onkeypress="validate(event)"
                                /></label>
                            <label class="form__label"
                            ><input
                                    type="date"
                                    name="Дата"
                                    v-model="date"
                                    class="input-reset form__input"
                                    placeholder="Дата, когда с вами связаться"
                                /></label>

                            <label class="form__label"
                            ><input
                                    type="time"
                                    name="Время"
                                    v-model="time"
                                    class="input-reset form__input"
                                    placeholder="Время, когда с вами связаться"
                                /></label>
                            <button class="btn-reset btn form__btn" type="button" v-on:click="sendMeet()">
                                Оставить заявку
                            </button>

                            <h1 v-if="successMsg">Спасибо за проявленный интерес к нашей компании! </h1>
                        </form>
                    </div>
                    <div class="connect__right">
                        <h3 class="title title--h3 connect__title">
                            Автозапись <span>Рекомендуем</span>
                        </h3>
                        <p class="connect__descr">
                            Вы можете воспользоваться функцией автозаписи через телеграм
                            бота. Это гораздо удобнее и практичнее.
                        </p>
                        <button class="btn-reset btn form__btn">
                            Стать частью команды
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container footer__container">
            <span class="footer__text">ООО «Воксис»</span>
            <ul class="list-reset footer__list">
                <li class="footer__item">
                    <a href="tel:88003337928" class="footer__link"
                    >8 (800) 333-7928</a
                    >
                </li>
                <li class="footer__item">
                    <a href="tel:88003333553" class="footer__link"
                    >8 (800) 333-3553</a
                    >
                </li>
            </ul>
        </div>
    </footer>
</div>
<script>
    function validate(event) {
        const theEvent = event || window.event;
        let key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
        var regex = /[0-9]|\./;
        if (!regex.test(key)) {
            theEvent.returnValue = false;
            if (theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>

</body>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('js/sendMeeting.js') }}"></script>
</html>
