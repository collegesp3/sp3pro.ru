<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <script defer src="script.js"></script>
    <title>СП3</title>
</head>

<body>
    <div class="body_background_photo"></div>
    <header class="header">
        <div class="header_menu" id='header_menu'>
            <div class="header_menu-logo">
                <img src="logo.png">
                <p>ЩЕЛКОВСКИЙ КОЛЛЕДЖ СП3</p>
            </div>
            <div class="header_menu_nav">
                <a href="index.html" class="header_menu_nav_item but1">Главная</a>
                <a href="tutorials/tutorials.html" class="header_menu_nav_item but2">Учебные материалы</a>
                <!-- <a href="ocollege.html" class="header_menu_nav_item but3">О колледже</a> -->
                <div class="header_menu_nav_item but4 group">
                    <button class="dropbtn">Группы</button>
                    <div class="group-content">
                        <a href="#" target="_blank"> 3318 </a>
                        <a href="https://omaro228.github.io/" target="_blank"> 3319/1 *</a>
                        <a href="#" target="_blank"> 3319/2</a>
                        <a href="https://sp33319v.github.io" target="_blank">3319в *</a>
                        <a href="#" target="_blank"> 3339</a>
                        <a href="#" target="_blank"> 3320в</a>
                        <a href="#" target="_blank"> 3321в</a>
                        <a href="#" target="_blank"> 3207</a>
                        <a href="#" target="_blank"> 3210</a>
                        <a href="#" target="_blank"> 3218</a>
                        <a href="../3219\index.html" target="_blank">3219 *</a>
                        <a href="https://sp3-3219v.github.io" target="_blank">3219в *</a>
                        <a href="#" target="_blank"> 3239</a>
                        <a href="#" target="_blank">3220в</a>
                        <a href="#" target="_blank">3221в</a>
                        <a href="#" target="_blank"> 3107</a>
                        <a href="#" target="_blank"> 3110</a>
                        <a href="#" target="_blank"> 3118</a>
                        <a href="#" target="_blank">3119</a>
                        <a href="#" target="_blank"> 3139</a>
                        <a href="#" target="_blank"> 3120в</a>
                        <a href="#" target="_blank">3121в</a>
                        <a href="#" target="_blank"> 3019</a>
                        <a href="#" target="_blank"> 3039</a>
                    </div>
                </div>

            </div>

        </div>

    </header>
    <main class="main">
        <!-- <p class="main_pagename">~ Готовим специалистов в следующих областях:~</p> -->

        <div class="main_allnaprav">

            <div class="main_naprav mn1">
                <p>Сетевое и системное администрирование </p>
                <a href="nap_set.html">Подробнее...</a>
            </div>

            <div class="main_naprav mn2">
                <p>Землеустройство </p>
                <a href="nap_zem.html">Подробнее...</a>
            </div>

            <div class="main_naprav mn3">
                <p>Операционная деятельность в логистике </p>
                <a href="nap_oper.html">Подробнее...</a>

            </div>

            <div class="main_naprav mn4">
                <p>Информационные системы и программирование (профессионалитет Машиностроение)</p>
                <a href="nap_inf2.html">Подробнее...</a>
            </div>
        </div>

        <div class="blocknews">

            <div class="wrappNews">
                <input class="wrappNews_inpNews" type="radio" name="point" id="News1" checked>
                <input class="wrappNews_inpNews" type="radio" name="point" id="News2">
                <input class="wrappNews_inpNews" type="radio" name="point" id="News3">
                <input class="wrappNews_inpNews" type="radio" name="point" id="News4">
                <input class="wrappNews_inpNews" type="radio" name="point" id="News5">
                <input class="wrappNews_inpNews" type="radio" name="point" id="News6">
                <input class="wrappNews_inpNews" type="radio" name="point" id="News7">
                <input class="wrappNews_inpNews" type="radio" name="point" id="News8">
                <input class="wrappNews_inpNews" type="radio" name="point" id="News9">
                <input class="wrappNews_inpNews" type="radio" name="point" id="News10">
                <div class="wrappNews_inpNews_sliderNews">
                    <?php
                    require_once 'db/connection.php';

                    $news = $conn->prepare("SELECT img, content FROM news ORDER BY id DESC LIMIT 10");
                    $news->execute();
                    $news = $news->fetchAll();

                    $i = 1;

                    foreach ($news as $art): ?>
                    <div class="wrappNews_inpNews_sliderNews_slidesNews News<?=$i?>">
                        <div class="slidIN">

                            <div class="slidIN_img">
                                <img class="slidIN_img" src="<?=$art['img']?>" alt="picNEWS">
                            </div>
                            <div class="slidIN_textNEWS">
                                <?=$art['content']?>
                            </div>
                        </div>
                    </div>
                    <?php $i ++;
                    endforeach; ?>
                    <!-- <div class="wrappNews_inpNews_sliderNews_slidesNews News2">
                        <div class="slidIN">
                            <div class="slidIN_img">
                                <img class="slidIN_img" src="./img/парктика.png" alt="picNEWS">
                            </div>
                            <div class="slidIN_textNEWS">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, tempora accusamus
                                distinctio earum vel ipsam error sed qui? Rem quod in suscipit, et quis commodi odio
                                modi maxime nam rerum tempore inventore neque repellat, quasi quam consectetur tenetur,
                                illo corrupti repudiandae officia unde. Sunt veniam illum quae exercitationem doloribus
                                facere?
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, tempora accusamus
                                distinctio earum vel ipsam error sed qui? Rem quod in suscipit, et quis commodi odio
                                modi maxime nam rerum tempore inventore neque repellat, quasi quam consectetur tenetur,
                                illo corrupti repudiandae officia unde. Sunt veniam illum quae exercitationem doloribus
                                facere?
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, tempora accusamus
                                distinctio earum vel ipsam error sed qui? Rem quod in suscipit, et quis commodi odio
                                modi maxime nam rerum tempore inventore neque repellat, quasi quam consectetur tenetur,
                                illo corrupti repudiandae officia unde. Sunt veniam illum quae exercitationem doloribus
                                facere?
                            </div>
                        </div>
                    </div>
                    <div class="wrappNews_inpNews_sliderNews_slidesNews News3">
                        <div class="slidIN">
                            <div class="slidIN_img">
                                <img class="slidIN_img" src="../img/акция.png" alt="picNEWS">
                            </div>
                            <div class="slidIN_textNEWS">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, tempora accusamus
                                distinctio earum vel ipsam error sed qui? Rem quod in suscipit, et quis commodi odio
                                modi maxime nam rerum tempore inventore neque repellat, quasi quam consectetur tenetur,
                                illo corrupti repudiandae officia unde. Sunt veniam illum quae exercitationem doloribus
                                facere?
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, tempora accusamus
                                distinctio earum vel ipsam error sed qui? Rem quod in suscipit, et quis commodi odio
                                modi maxime nam rerum tempore inventore neque repellat, quasi quam consectetur tenetur,
                                illo corrupti repudiandae officia unde. Sunt veniam illum quae exercitationem doloribus
                                facere?
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, tempora accusamus
                                distinctio earum vel ipsam error sed qui? Rem quod in suscipit, et quis commodi odio
                                modi maxime nam rerum tempore inventore neque repellat, quasi quam consectetur tenetur,
                                illo corrupti repudiandae officia unde. Sunt veniam illum quae exercitationem doloribus
                                facere?
                            </div>
                        </div>
                    </div>
                    <div class="wrappNews_inpNews_sliderNews_slidesNews News4"> </div>
                    <div class="wrappNews_inpNews_sliderNews_slidesNews News5"> </div>
                    <div class="wrappNews_inpNews_sliderNews_slidesNews News6"> </div>
                    <div class="wrappNews_inpNews_sliderNews_slidesNews News7"> </div>
                    <div class="wrappNews_inpNews_sliderNews_slidesNews News8"> </div>
                    <div class="wrappNews_inpNews_sliderNews_slidesNews News9"> </div>
                    <div class="wrappNews_inpNews_sliderNews_slidesNews News10"></div> -->
                </div>
                <div class="wrappNews_controlsNews">
                    <?php $i = 1; foreach ($news as $art): ?>
                    <label class="wrappNews_controlsNews_labNews" for="News<?=$i?>"><?=$i?></label>
                    <?php $i++; endforeach; 
                    if ($i > 10): ?>
                    <input type="hidden" id="wrappNews_position" value="10">
                    <button onclick="openOlderNews()">=></button>
                    <?php endif; ?>
                </div>

            </div>


    </main>

    <footer class="footer">
        <div class="footer__copyright">
            Работа Коваленко А.А. 3219
        </div>
        <div class="footer__info">
            <p>ГБПОУ МО "Щелковский колледж"
                Структурное подразделение № 3 &nbsp;&nbsp;&nbsp;&nbsp;
                г. Щёлково, ул.Малопролетарская 28
            </p>
            <div class="footer__news">

                <p>Приглашаются желающие научиться делать сайты. Обучение в к.405 бесплатно. Все вопросы в телелеграм.
                </p>

                <a class="telega-ssilka" href="https://t.me/+AmhiwlexPJIwMGRi"><img src="css/img/telegram-logo.svg"
                        alt=""></a>
            </div>
        </div>

    </footer><!--  -->

</body>
<script defer src="script.js"></script>
<!-- <script src="https://kit.fontawesome.com/33cfc8cf2b.js" crossorigin="anonymous"></script> -->

</html>