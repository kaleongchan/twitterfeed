<?php $this->title = 'Search Twitter Feeds';?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
                <?php echo $this->render('partials/search_form', ['q' => $q]); ?>
            </div>
        </div>

        <div class="row">
            <?php if (empty($q)) {?>

            <?php } else if (empty($tweets)) {?>
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        No tweet found!
                    </div>
                </div>
            <?php } else {?>
                <?php foreach ($tweets as $tweet) {?>
                    <div class="col-lg-12">
                        <?php echo $this->render('partials/tweet', ['tweet' => $tweet]); ?>
                    </div>
                <?php }?>
            <?php }?>

        </div>

    </div>
</div>
