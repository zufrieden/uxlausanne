<?php $this->includeSnippet('header'); ?>


<div class="section">
    <div class="container section-title">
        <h1><?php echo $this->title(); ?></h1>
    </div>
    <div class="isolated">
        <div class="isolated">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <?php echo $this->content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->includeSnippet('footer'); ?>
