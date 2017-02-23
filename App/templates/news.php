<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Статьи по бухгалтерии и налогам</title>
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
        style="background-image: url(/App/templates/img/gold.jpg);  background-size: cover;">
        <div
            style="height: 210px; background: linear-gradient(to right, rgba(0,0,0,0.6), rgba(0,0,0,0.3), transparent, transparent); color: white; text-align: left;">

            <div class="block3-4">
                <h1 style="margin: 0; position: relative;
    top:-40px; left: 50px">Статьи по бухгалтерии и налогам</h1>

                <p class="lead" style="margin: 0; color: yellow; position: relative; font-size: 17px;
    top:-30px; left: 50px">FAQ по бухгалтерскому учету и налогам
                </p>
                <div class="block1" style="margin: 0;">
                    <div class="block2-3"><p style="margin: 0; width:80%; position: relative;
    top:-15px; left: 50px; line-height: 1.5">Ответы на часто-задаваемые вопросы и статьи по темам бухгалтерского учета и
                            налогообложения,
                            которые могут помочь сориентироваться в вопросах финансовой безопасности</p>
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

    <p><a class="link2" href="index.php">Главная страница</a> -- Бухгалтерия и налоги</p>
    <h2>Актуальная подборка статей по бухгалтерии и налогам</h2>


    <?php foreach ($news as $article) { ?>

        <div>
            <p style="font-size: 13px; line-height: 1.7;">
                <a class="link2"
                   href="index.php?action=Article&id=<?php echo $article->id ?>"><?php echo $article->title ?></a>
                <br>

                <?php if (!empty($article->author)): ?>
                    Автор <?php echo $article->author->author ?>
                <?php endif; ?>

            </p>
        </div>
    <?php } ?>


</article>

<footer>
    <?php include __DIR__ . '/footer.php'; ?>
</footer>

</body>
</html>