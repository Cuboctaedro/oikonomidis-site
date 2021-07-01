<?php snippet('head'); ?>

<article class="">
    <h1 class="visually-hidden"><?= $page->title() ?></h1>
    <section class="flex flex-col lg:flex-row">
        <div class="w-full lg:w-1/3 px-6">
            <?php $pic = $page->picture()->toFile(); ?>
            <?php if ($pic) : ?>
                <picture>
                    <source data-srcset="<?= $pic->resize(300)->url() ?>" media="(max-width: 360px)">
                    <source data-srcset="<?= $pic->resize(540)->url() ?>" media="(max-width: 600px)">
                    <source data-srcset="<?= $pic->resize(900)->url() ?>" media="(min-width: 601px)">
                    <img data-src="<?= $pic->resize(900)->url() ?>" alt="<?= $page->title() ?> Document" class="lazyload">
                </picture>
            <?php endif; ?>
        </div>

        <div class="w-full lg:w-2/3 px-6">
            <div class="generated"><?= $page->text()->kt(); ?></div>
        </div>
    </section>
</article>



<?php snippet('foot'); ?>