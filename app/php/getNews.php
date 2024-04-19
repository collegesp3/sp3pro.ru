<?php
if (isset($_GET['pos'])
&& !empty($_GET['pos'])): ?>
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
    require_once '../db/connection.php';

    $news = $conn->query("SELECT img, content FROM news ORDER BY id DESC LIMIT 10 OFFSET ".$_GET['pos']);
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
    <?php $i++; endforeach; ?>
</div>
<div class="wrappNews_controlsNews">
    <?php $i = 1; foreach ($news as $art): ?>
    <label class="wrappNews_controlsNews_labNews" for="News<?=$i?>"><?=$_GET['pos'] + $i?></label>
    <?php $i++; endforeach; 
    if ($i > 10): ?>
    <input type="hidden" id="wrappNews_position" value="<?=$_GET['pos'] + $i - 1?>">
    <button onclick="openOlderNews()">=></button>
    <?php endif; ?>
</div>
<?php endif; ?>