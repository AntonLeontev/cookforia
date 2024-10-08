<!doctype html>
<html lang="ru">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5KTSCHC');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta property="og:title" content="@yield('og_title')"/>
    <meta property="og:description" content="@yield('og_description')"/>
    <meta property="og:image" content="@yield('og_image')"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content= "https://cookforia" />
    <meta property="og:site_name" content="Кулинарная студия 'Cookforia'" />

	<meta name="robots" content="@yield('robots', 'all')" />

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')" />

    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/owlCarousel/dist/assets/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/owlCarousel/dist/assets/owl.theme.default.min.css" type="text/css">
    <link rel="stylesheet" href="/fonts/fonts.css" type="text/css">
    <link rel="stylesheet" href="/css/styles.css?v29" type="text/css">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#333333">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	m[i].l=1*new Date();
	for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
	k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	ym(57334753, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true,
			ecommerce:"dataLayer"
	});
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/57334753" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

	<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src='https://vk.com/js/api/openapi.js?169',t.onload=function(){VK.Retargeting.Init("VK-RTRG-1582237-b7Psv"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1582237-b7Psv" style="position:fixed; left:-999px;" alt=""/></noscript>

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KTSCHC"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@yield('content')

<div class="footer">
    <div class="footer-logo">
        <img src="images/full_logo_white.svg" alt="">
    </div>
    <div class="footer-text">
        <p>&copy; Все права защищены <br>
            Копирование информации с сайта запрещено.</p>

        <a target="_blank" href="/offer_01.10.2023.pdf">Условия предоставления услуг</a>
		<br>
        <a target="_blank" href="/policy.pdf?ver=20.09.2023">Политика обработки персональных данных</a>
		<br>
        <a target="_blank" href="/offer.pdf?ver=14.06.2024">Оферта</a>
    </div>

    <div class="footer-right">
        <iframe class="footer-rating" src="https://yandex.ru/sprav/widget/rating-badge/74180715342" width="150" height="50" frameborder="0"></iframe>
        <div class="footer-social">
            <a href="https://vk.com/cookforia">
                <img src="/images/icons/soc-vk.svg" alt="">
            </a>
            <a href="https://instagram.com/cookforia">
                <img src="/images/icons/soc-insta.svg" alt="">
            </a>
            <!-- <a href="https://wa.me/79291795999">
                <img src="/images/icons/soc-whatsapp.svg" alt="">
            </a> -->
            <a href="https://t.me/loft_cookforia">
                <img src="/images/icons/soc-telegram.svg" alt="">
            </a>
        </div>
    </div>
</div>

<x-booking_widget />

<!-- MoyKlass widget begin -->
<!-- Виджет записи на Мастер-Класс на все страницах кроме расписания -->
{{--<script src="https://app.moyklass.com/api/site/widget/?id=sDTZwdrqSTOKqOs0OBXHo95BnyVwQgHxJG" type="text/javascript" charset="UTF-8"></script>--}}
<!-- MoyKlass widget end -->

<!-- MoyKlass widget begin -->
<!-- Виджет "Отрпавить заявку в начале страницы" -->
{{--<script src="https://app.moyklass.com/api/site/widget/?id=zATP0l4CCB7Wmy3LLqSyWd1WBHrmxB5ZsV" type="text/javascript" charset="UTF-8"></script>--}}
<!-- MoyKlass widget end -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script async src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/owlCarousel/dist/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

<script
  src="https://smartcaptcha.yandexcloud.net/captcha.js?render=onload&onload=onloadFunc"
  defer
></script>

@vite(['resources/js/app.js'])

@php
    if (isset($_GET["utm_source"])) setcookie("utm_source",$_GET["utm_source"],time()+3600*24*30*12,"/");
    if (isset($_GET["utm_medium"])) setcookie("utm_medium",$_GET["utm_medium"],time()+3600*24*30*12,"/");
    if (isset($_GET["utm_campaign"])) setcookie("utm_campaign",$_GET["utm_campaign"],time()+3600*24*30*12,"/");
    if (isset($_GET["utm_content"])) setcookie("utm_content",$_GET["utm_content"],time()+3600*24*30*12,"/");
    if (isset($_GET["utm_term"])) setcookie("utm_term",$_GET["utm_term"],time()+3600*24*30*12,"/");
@endphp

</body>
</html>
