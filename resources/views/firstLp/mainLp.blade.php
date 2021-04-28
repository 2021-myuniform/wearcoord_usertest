<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>wearcoord</title>


    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lp/lp.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.7/css/swiper.min.css">

</head>
<body>
    <header class="lpHeader">
        <div class="headerList">
            <a href="#top" class="titleIcon">
                <img class="titleImg" src="{{asset('img/logo/0080E4-short.png')}}" alt="">
            </a>
        </div>
        <div class="headerBtn">
            <div class="headerBtnItem">
                <a class="login" href="{{ route('login') }}">
                    ログイン
                </a>
            </div>
            <div class="headerBtnItem signinBtn">
                <a  href="{{ route('register') }}">新規登録</a>
            </div>
        </div>
    </header>

    <div class="mannequinImg">
        <div class="swiper-container tops-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide-item">
                    <img class="toplist" src="{{asset('img/testImg/wearlist-top.png')}}" alt="">
                </div>
                <div class="swiper-slide slide-item">
                    <img class="toplist" src="{{asset('img/testImg/wearlist-top.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="swiper-container pants-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide-item">
                    <img class="pantslist" src="{{asset('img/testImg/wearlist-pants.png')}}" alt="">
                </div>
                <div class="swiper-slide slide-item">
                    <img class="pantslist" src="{{asset('img/testImg/wearlist-pants.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <section id="top">
        <div class="skewed"></div>
    </section>
    <section class="catchSect">
    </section>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.js" integrity="sha512-sAHYBRXSgMOV2axInO6rUzuKKM5SkItFLlLHQ8YjRD+FBwowtATOs4njP9oim3/MzyAGrB52SLDjpAOLcOT9TA==" crossorigin="anonymous"></script>
    <script src="{{ asset('js/lp.js') }}"></script>
</body>
</html>
