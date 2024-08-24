<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="site-about">

        <div class='row frst'>
            <div class='col-6'>
                <h1>О компании TechRescue</h1>
            </div>
            <div class='col-6 empty1'>
                <p></p>
            </div>
        </div>

        <div class='row sec'>
            <div class='col-6 hellowords'>
                <a>
                    Добро пожаловать на сайт TechRescue - вашего надежного партнера в мире технических решений и
                    ремонта!
                    Мы - молодая и динамичная компания, стремящаяся предоставить вам выдающиеся услуги по починке
                    комплектующих для ПК,
                    ремонту персональных компьютеров и восстановлению телефонов.
                </a>
            </div>
            <div class='col-5 ab'>
                <p><i class="bi bi-hash"></i>TechRescue</p>
            </div>
        </div>

        <div class='row thr'>
            <div class='col-6 hAbout'>
                <a>Команда TR</a>
            </div>
            <div class='col-6 empty1'>
                <a>
                </a>
            </div>
        </div>

        <div class='row frth'>
            <div class='col-6 About'>
                <a>
                    Мы — команда профессионалов:
                    TechRescue - это объединение опытных и преданных специалистов,
                    готовых решать самые сложные технические задачи.
                    Наша команда состоит из экспертов в области ремонта комплектующих,
                    специалистов по персональным компьютерам и опытных мастеров по восстановлению мобильных устройств.
                </a>
                <p></p>
                <a>
                    Мы призваны сделать вашу технику вновь работоспособной. Наша миссия - обеспечивать вас надежными и
                    высококачественными услугами ремонта, создавая пространство для вашего комфорта и эффективности.
                </a>
            </div>

            <div class='col-5 crslworkers'>
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <div class="card mb-2 border-light" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://i.pinimg.com/236x/05/d0/e3/05d0e3691c10c2ee4e1b7c32305cecb3.jpg"
                                            class="img-fluid rounded-start"
                                            style="padding: 20px 0px 20px 20px;width:177px;height:177px;" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Кот Предпринимателев</h5>
                                            <p class="card-text">Предпринимает самые важные решения.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card border-light" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="data:image/jpeg;base64,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"
                                            class="img-fluid rounded-start"
                                            style="padding: 20px 0px 20px 20px;width:177px;height:177px;" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Кот Исполнителевых</h5>
                                            <p class="card-text">Исполняет предпринятые решения.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">

                            <div class="card mb-2 border-light" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://img.freepik.com/premium-photo/a-cat-in-a-formal-business-suit-an-animal-in-human-clothes-generative-ai_888418-1677.jpg"
                                            class="img-fluid rounded-start"
                                            style="padding: 20px 0px 20px 20px;width:177px;height:177px;" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Кот Чинилов</h5>
                                            <p class="card-text">Чинит Ваши устройства с удовольствием.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card border-light" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://celes.club/uploads/posts/2022-10/1666880881_3-celes-club-p-kot-v-delovom-kostyume-instagram-3.jpg"
                                            class="img-fluid rounded-start"
                                            style="padding: 20px 0px 20px 20px;width:177px;height:177px;" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Кот Улыбалов</h5>
                                            <p class="card-text">Поддерживает благоприятную обстановку в команде.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="card mb-2 border-light" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://avatars.mds.yandex.net/i?id=58a0a815bd75830158c5ce5a33f8142f9a924847-9152516-images-thumbs&n=13"
                                            class="img-fluid rounded-start"
                                            style="padding: 20px 0px 20px 20px;width:177px;height:177px;" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Кот Бухгалтеров</h5>
                                            <p class="card-text">Платит всем зарплаты.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card border-light" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://s1.1zoom.ru/big0/790/Cats_Creative_White_background_Necktie_Sitting_523697_1165x1024.jpg"
                                            class="img-fluid rounded-start"
                                            style="padding: 20px 0px 20px 20px;width:177px;height:177px;" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Кот Директоренко</h5>
                                            <p class="card-text">Руководитель компании.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <button class="carousel-control-prev per" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon per" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next per" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon per" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
                </div>
            </div>
        </div>

        <div class='row fifth'>
            <div class='col hserv'>
                <a>Наши услуги</a>
            </div>
        </div>

        <div class='row six'>
            <div class="col">
                <div class="card border-light serv">
                    <div class="card-body">
                        <img src="http://drive.google.com/uc?export=view&id=1e0IeGnzmXbp81ejV3pjI1UkCx8fmQQd0"
                            style="width:340px;height:250px;text-align:center" class="card-img-bottom" alt="">
                        <h5 class="card-title" style="padding-top:16px">Ремонт комплектующих для ПК</h5>
                        <p class="card-text">Наши специалисты занимаются ремонтом и
                            восстановлением всех видов комплектующих для вашего ПК. Независимо от уровня сложности, мы
                            гарантируем качественное обслуживание.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-light serv">
                    <div class="card-body">
                        <img src="http://drive.google.com/uc?export=view&id=1Q9FkU3RC6TDHkLShqJTUrNHSSMBcywAF"
                            style="width:340px;height:250px;text-align:center" class="card-img-bottom" alt="">
                        <h5 class="card-title" style="padding-top:16px">Ремонт персональных компьютеров</h5>
                        <p class="card-text">Мы предоставляем полный спектр услуг по диагностике и ремонту персональных
                            компьютеров. Независимо от того, является ли ваш компьютер рабочим столом, ноутбуком или
                            игровой станцией - мы восстановим его.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-light serv">
                    <div class="card-body">
                        <img src="http://drive.google.com/uc?export=view&id=1mYqO7atsHqaAaEFRqq5N6MrjobwP0L8a"
                            style="width:340px;height:250px;text-align:center" class="card-img-bottom" alt="">
                        <h5 class="card-title" style="padding-top:16px">Восстановление телефонов</h5>
                        <p class="card-text">Будь то треснутый экран, проблемы с батареей или программное обновление -
                            наши мастера знают, как вернуть ваш телефон к жизни. Мы специализируемся на ремонте
                            различных марок и моделей мобильных устройств.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class='row svf'>
            <div class='col hserv'>
                <a>Положитесь на нас!</a>
            </div>
        </div>
        <div class='row six'>
            <div class='col endabout'>Присоединяйтесь к TechRescue - мы здесь, чтобы помочь вам восстановить и
                поддерживать вашу технику в отличной форме, предоставляя не только профессиональные услуги, но и заботу,
                которая делает наше обслуживание неповторимым. Вместе мы делаем ваше техническое оборудование
                работающим, а вашу жизнь более удобной и эффективной. <p></p>
                Полный список услуг можно посмотреть по <a href="/services" style="text-decoration:none">ссылке</a>.
                <p>
                    Если возникли какие-то вопросы, то Вы можете связаться с нами <a href="/site/contact"
                        style="text-decoration:none">здесь</a>.
                <p>
                    Для того, чтобы перейти в свои заказы можете нажать <a href="/tasks"
                        style="text-decoration:none">сюда</a>.
                <p>
            </div>
        </div>

    </div>

    <button id="btnScrollToTop"><i class="bi bi-arrow-up"></i>ВВЕРХ<i class="bi bi-arrow-up"></i></button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var btnScrollToTop = document.getElementById("btnScrollToTop");

            window.onscroll = function () {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    btnScrollToTop.style.display = "block";
                } else {
                    btnScrollToTop.style.display = "none";
                }
            };

            btnScrollToTop.addEventListener("click", function () {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        });
    </script>
</body>

</html>