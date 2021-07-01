<?php snippet('head'); ?>

<article class="">
    <h1 class="visually-hidden"><?= $page->title() ?></h1>
    <section class="w-full flex flex-col items-center justify-center">
        <?php foreach ($page->children() as $child) : ?>
            <h2 class="text-xl ">
                <a href="<?= $child->url() ?>" class="block py-2">
                    <?= $child->title() ?>
                </a>
            </h2>
        <?php endforeach; ?>
    
    </section>
</article>



<?php snippet('foot'); ?>