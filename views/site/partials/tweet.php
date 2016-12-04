<?php
use app\components\HtmlHelper;
?>
<!-- tweet -->
<div class="tweet">
    <div class="content">
        <div class="item-header">
            <a href="https://twitter.com/<?=$tweet['user']['screen_name']?>" target="_blank">
                <img src="<?=$tweet['user']['profile_image_url']?>">
                <strong class="fullname"><?=$tweet['user']['name']?></strong>
                <span class="username"><s>@</s><b><?=$tweet['user']['screen_name']?></b></span>
                <small class="time"><?=date('M d Y', strtotime($tweet['created_at']))?></small>
            </a>
        </div>
        <div class="tweet-text-container">
            <p class="tweet-text"><?=HtmlHelper::makeClickable($tweet['text'])?></p>
        </div>
        <div class=""></div>
    </div>
</div>
<!-- end of tweet -->