<?php snippet('head'); ?>

<article class="">
    <h1 class="text-center text-2xl pb-8"><?= $page->title() ?></h1>
    <section class="flex flex-col lg:flex-row">

        <div class="w-full lg:w-1/2 px-6">
            <?= $page->text()->kt(); ?>
        </div>
        <div class="w-full lg:w-1/2 px-6 lg:order-first">
            <?php foreach($page->pictures()->toFiles() as $pic) : ?>
                <picture class="mb-12">
                    <source data-srcset="<?= $pic->resize(300)->url() ?>" media="(max-width: 360px)">
                    <source data-srcset="<?= $pic->resize(540)->url() ?>" media="(max-width: 600px)">
                    <source data-srcset="<?= $pic->resize(900)->url() ?>" media="(min-width: 601px)">
                    <img data-src="<?= $pic->resize(900)->url() ?>" alt="<?= $page->title() ?> Document" class="lazyload w-full block">
                </picture>
            <?php endforeach; ?>
        </div>
    </section>
</article>



<?php snippet('foot'); ?>

