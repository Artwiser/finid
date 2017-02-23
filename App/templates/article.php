<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title><?php echo $news->title ?> - Статьи по бухгалтерии и налогам</title>
    <link rel="stylesheet" type="text/css" href="/App/templates/css/style.css">

</head>
<body>

<?php include __DIR__ . '/header.php'; ?>

<article class="article container">
    <?php if (!empty($news->picture)): ?>
        <div
            style="background-image: url(/App/templates/img/<?php echo $news->picture ?>);  background-size: cover;">
            <div
                style="height: 210px; background: linear-gradient(to right, rgba(0,0,0,0.6), rgba(0,0,0,0.3), transparent, transparent); color: white; text-align: left;">

                <div class="block3-4">
                    <h1 style="margin: 0; position: relative;
    top:-40px; left: 50px"><?php echo $news->title ?></h1>

                    <p class="lead" style="margin: 0; color: yellow; position: relative; font-size: 17px;
    top:-30px; left: 50px"><?php echo $news->lead ?></p>
                    <div class="block1" style="margin: 0;">
                        <div class="block2-3"><p style="margin: 0; width:80%; position: relative;
    top:-15px; left: 50px; line-height: 1.5">Компания FinID (Фин-id) оказывает бухгалтерские услуги стартапам и
                                компаниям малого и
                                среднего бизнеса в части бухгалтерского сопровождения и налогового консалтинга</p>
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
    <?php endif; ?>


    <p><a class="link2" href="index.php">Главная страница</a> -- <a class="link2" href="index.php?action=News">Бухгалтерия
            и налоги</a> -- <?php echo $news->title ?></p>

    <div class="block1">
        <div class="block2">
            <?php if (!empty($news->author)): ?>
                <h3>Автор статьи <?php echo $news->author->author ?></h3>
            <?php endif; ?>
        </div>
        <div class="block2" style="text-align: center">
            <h3>Вопрос по теме <?php echo $news->title ?></h3>
        </div>
    </div>
    <div class="block1">
        <div class="block2">

            <p style="text-align: justify"><?php echo str_replace("\n", "<br><br>", $news->text); ?></p>
        </div>
        <div class="block2" style="text-align: center">


            <form action="/App/templates/action.php" method="post">
                <p><input class="input" style="height: 30px;width: 300px;" type="text" name="name"
                          placeholder="Ваше имя" size="50"/></p>
                <p style="margin: 25px"><input class="input" style="height: 30px;width: 300px;" type="text"
                                               name="e-mail" placeholder="Телефон или e-mail для связи"
                                               size="50"/></p>
                <p style="margin: 25px"><textarea class="input" name="message"
                                                  placeholder="Для скорейшей обработки запроса опишите более подробно Вашу ситуацию"
                                                  cols="40" rows="4"></textarea></p>
                <p style="margin: 25px"><input class="button3"
                                               style="margin: 0 0 10px 0; font-size: 11pt" type="submit"
                                               value="Отправить"/></p>
            </form>

        </div>
    </div>
</article>

<footer>
    <?php include __DIR__ . '/footer.php'; ?>
</footer>

</body>