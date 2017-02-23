<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Квалифицированный бухгалтерский учет</title>
    <link rel="stylesheet" type="text/css" href="/App/templates/css/style.css">
    <script type="text/javascript">
        function showModalWin() {

            var darkLayer = document.createElement('div'); // слой затемнения
            darkLayer.id = 'shadow'; // id чтобы подхватить стиль
            document.body.appendChild(darkLayer); // включаем затемнение

            var modalWin = document.getElementById('popupWin'); // находим наше "окно"
            modalWin.style.display = 'block'; // "включаем" его

            darkLayer.onclick = function () {  // при клике на слой затемнения все исчезнет
                darkLayer.parentNode.removeChild(darkLayer); // удаляем затемнение
                modalWin.style.display = 'none'; // делаем окно невидимым
                return false;
            };
        }
    </script>

</head>
<body>

<?php include __DIR__ . '/header.php'; ?>

<article class="article container">
    <div
        style="background-image: url(/App/templates/img/woman.jpg);  background-size: cover;">
        <div
            style="height: 210px; background: linear-gradient(to right, rgba(0,0,0,0.6), rgba(0,0,0,0.3), transparent, transparent); color: white; text-align: left;">

            <div class="block3-4">
                <h1 style="margin: 0; position: relative;
    top:-40px; left: 50px">Квалифицированный бухгалтерский учет</h1>

                <p class="lead" style="margin: 0; color: yellow; position: relative; font-size: 17px;
    top:-30px; left: 50px">Профессионализм - залог финансовой безопасности
                </p>
                <div class="block1" style="margin: 0;">
                    <div class="block2-3"><p style="margin: 0; width:80%; position: relative;
    top:-15px; left: 50px; line-height: 1.5">Мы экономим деньги клиентов за счет грамотного выбора систем
                            налогообложения, снижения затрат времени на объемы операций и комплексного подхода к
                            задачам</p>
                    </div>
                    <div class="block3">
                        <h3 style="margin: 0; width:80%; position: relative;
    top:-25px;">Два вида договоров:</h3>
                        <ul style="margin: 0; font-size: 12px; position: relative;
    top:-20px; line-height: 1.7;">
                            <li><a class="link" href="index.php">Консалтинг</a></li>
                            <li><a class="link" href="index.php">Аутсорсинг (Функции бухгалтера)</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="block4">

                <form>
                    <input style="position: relative;
    top: -20px; left: 70px" class="button6" type="button" value="Я - БOHУC" onclick="showModalWin()">
                </form>
                <div style="text-align: center" id="popupWin" class="modalwin">
                    <h2>Бесплатный бонус</h2>
                    <h3>Экспресс-проверка бухучета</h3>
                    <div class="block1">
                        <p>Проведите у нас проверку и<br>узнайте свои налоговые риски!</p>
                        <p>Для получения бонуса заполните<br>простую форму ниже</p>
                    </div>
                    <div class="block1">
                        <hr>
                    </div>

                    <div class="block1" style="text-align: center">
                        <form action="/App/templates/action.php" method="post">
                            <p><input class="input" style="height: 30px;width: 300px;" type="text" name="name"
                                      placeholder="Ваше имя" size="50"/></p>
                            <p><input class="input" style="height: 30px;width: 300px;" type="text" name="e-mail"
                                      placeholder="Телефон или e-mail для связи"
                                      size="50"/></p>
                            <p><textarea class="input" name="message"
                                         placeholder="Для скорейшей обработки запроса опишите более подробно Вашу ситуацию"
                                         cols="40" rows="4"></textarea></p>
                            <p style="position: relative;
    top: 10px;"><input class="button3"
                       style="margin: 0 0 10px 0; font-size: 11pt" type="submit"
                       value="Отправить"/></p>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <p><a class="link2" href="index.php">Главная страница</a> -- Квалификация</p>
    <div class="block1">

        <div class="block2" style="position: relative;
    top: 9px;">
            <div class="block1">

                <div class="block3">
                    <img src="/App/templates/images/NK.jpg"
                         style="height: 100%">
                </div>
                <div class="block2-3" style="text-align: center">
                    <a href="/App/templates/images/doc1.jpg" target="_blank"><img src="/App/templates/images/doc1.jpg"
                                                                                  style="width: 90%"></a>

                </div>

            </div>
            <div class="block1">
                <p><strong>Надежда Красикова</strong> - руководитель бухгалтерской службы FinID (Фин-id)</p>
                <p style="text-align: justify; width: 95%">Свыше 15 лет опыта работы в сфере бухгалтерского учета и
                    финансов на руководящих должностях, в том числе консалтинг и аудит в компании big4.<br>
                    Ключевая деятельность связана с проектами по улучшению бизнес-процессов, внедрению 1С, постановке
                    учета, оптимизации налогообложения.<br><br>
                    Сертификаты: Профбухгалтер (2009), DipIFR (2009).
                </p>
            </div>
        </div>
        <div class="block2" style="position: relative;
    top: -16px;">
            <h2>Аутсорсинг бухгалтерии недорого</h2>
            <p style="text-align: justify;">Многие уверенны, что привлечение квалифицированных специалистов стоит
                дорого.
                Мы экономим деньги клиентов за счет грамотного выбора систем налогообложения, снижения затрат времени на
                объемы операций и комплексного подхода к задачам.<br><br>
                Кроме очевидных факторов экономии, таких как исключение расходов на организацию рабочего места, покупку
                лицензионных программ и выплат во внебюджетные фонды, существуют показатели не столь явные. Например,
                адаптация к стандартам компании и обучение сотрудника, транспортные и иные административные расходы.<br><br>
                В то время, как обязательства бухгалтера, которому доверена финансовая безопасность компании, ограничены
                простым трудовым соглашением, защищающим его интересы, заключение договора на аутсорсинг бухгалтерских
                услуг с репутационно-зависимой организацией, гарантировано отвечающей по финансовым рискам своего
                заказчика, такой как FinID (Фин-id), приобретает явные преимущества.<br><br>
                Предварительный расчет стоимости услуг FinID (Фин-id) на <a class="link2" href="index.php">онлайн-калькуляторе.</a>
            </p>
        </div>
    </div>
    <div class="block1">
        <hr>
    </div>
    <div class="block2">
        <h2>Наши клиенты</h2>
        <p style="text-align: justify; width: 95%">Большинство клиентов продолжают сотрудничество на постоянной основе.
            Среди них: АО Лакталис Восток, ООО Лакталис Истра, АО Ефремовский сыродельный комбинат, Автошкола
            Автомобилист, Салон текстиля Дизайка
        </p>
        <div class="block1" style="text-align: center">
            <div class="block3">
                <a href="http://www.lactalis.ru/"><img src="/App/templates/images/lactalis_groupe.jpg"
                                                       style="width: 100%"></a>
            </div>
            <div class="block2-3">
                <a href="http://www.lactalis.ru/"><img src="/App/templates/images/lactalis.jpg" style="width: 100%"></a>
            </div>
        </div>
        <div class="block1" style="text-align: center">
            <div class="block3">
                <a href="http://1avtomobilist.ru/"><img src="/App/templates/images/avtomobilist.jpg"></a>
            </div>
            <div class="block3">
                <a href="http://dizayka.com/"><img src="/App/templates/images/dizayka.png" style="width: 70%"></a>
            </div>
        </div>
    </div>
    <div class="block2">
        <h2>Мы сотрудничаем</h2>
        <p style="text-align: justify; width: 95%">Компания FinID (Фин-id) проводит семинары для руководителей малого и
            среднего бизнеса по вопросам бухгалтерского учета и налогообложения в рамках программы поддержки
            предпринимателей ГБУ Малый бизнес Москвы.
        </p>

        <a href="http://www.mbm.ru/"><img src="/App/templates/images/MBM.png" style="width: 50%"></a>
    </div>

</article>

<footer>
    <?php include __DIR__ . '/footer.php'; ?>
</footer>

</body>
</html>


