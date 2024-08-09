<div class="main-header">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <div class="header-logo">
                <a href="/"><img src="images/full_logo_white.svg" alt=""></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center main-header-nav-block" id="main-menu">
                <ul class="navbar-nav main-navbar">
                    <li class="nav-item">
                        <a class="nav-link" href="/schedule">Расписание</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Мероприятия
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/corporate">Корпоративы</a>
                            <a class="dropdown-item" href="/girls">Девичники</a>
                            <a class="dropdown-item" href="/birthday">Дни рождения</a>
                            <a class="dropdown-item" href="/kids">Детские праздники</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/studio-rental">Аренда студии</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/catering">Кейтеринг</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/menu">Меню</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacts">Контакты</a>
                    </li>
                </ul>
                <div class="header-phone-block">
                    <a href="https://wa.me/79967794436">
                        <img src="/images/icons/soc-whatsapp.svg" alt="">
                    </a>
                    <a href="https://t.me/loft_cookforia">
                        <img src="/images/icons/soc-telegram.svg" alt="">
                    </a>

                    <a class="header-phone --desktop" href="tel:+78122131417">
                        <span class="phone-content">+7 (812) 2131417</span>
                    </a>
                    <script>
                        (function () {
                            document.addEventListener('DOMContentLoaded', function(){

                                let callTrackerScript = document.querySelector('[src^="https://cdn-ru.bitrix24.ru/b18339638/crm/tag/call.tracker.js"]');
                                // console.log(callTrackerScript != null)
                                // console.log(callTrackerScript)
                                if (callTrackerScript != null) {

                                    callTrackerScript.addEventListener('load', function(){
                                        correctPhone();
                                    })
                                }
                                else {

                                    // window.addEventListener('load', function () {
                                        correctPhone();
                                    // })
                                }
                            })

                            function correctPhone() {

                                let nodePhone = document.querySelector('.header-phone');
                                let tel = nodePhone.href.split(':')[1];
                                let phoneContent = nodePhone.querySelector('.phone-content');


                                phoneContent.innerHTML = '';

                                phoneContent.textContent = tel;

                                let formatTel = tel.slice(0, 2) + " (" + tel.slice(2, 5) + ") " + tel.slice(5, 12);

                                phoneContent.textContent = formatTel;
                            }
                        })()
                    </script>
                </div>
            </div>
        </div>
    </nav>
    <div class="mobile-header-phone-block">
        <div class="container">
            <a href="https://wa.me/79967794436">
                <img src="/images/icons/soc-whatsapp.svg" alt="">
            </a>
            <a href="t.me/loft_cookforia">
                <img src="/images/icons/soc-telegram.svg" alt="">
            </a>
            <a class="header-phone" id="header-phone_mobile" href="tel:+78122131417">+7 (812) 213-14-17</a>
			<div id="phone-captcha-container"></div>
        </div>
    </div>
</div>
