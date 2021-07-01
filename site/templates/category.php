<?php snippet('head'); ?>

<article class="">
    <h1 class="text-center text-2xl pb-8"><?= $page->title() ?></h1>
    <section class="flex flex-row flex-wrap">
        <?php $i = 0; ?>
        <?php foreach ($page->artworks()->toStructure() as $artwork) : ?>
            <?php
                $pic = $artwork->image()->tofile();
                $caption = $artwork->caption();
                $i++;
                ?>
            <div class="px-6 w-full sm:w-1/2 lg:w-1/3 xl:w-1/4">
                <a href="#work-<?= $i ?>" data-type="html" class="lightbox block w-full h-0 relative" style="padding-top:100%;">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <img data-src="<?= $pic->resize(300, 300)->url() ?>" class="lazyload" alt="<?= $caption ?>" />
                    </div>
                </a>

                <div id="work-<?= $i ?>">
                    <div class="">
                        <figure class="">
                            <picture>
                                <source srcset="<?= $pic->resize(300, 460)->url() ?>" media="(max-width: 360px)">
                                <source srcset="<?= $pic->resize(540, 800)->url() ?>" media="(max-width: 600px)">
                                <source srcset="<?= $pic->resize(900, 600)->url() ?>" media="(max-width: 960px)">
                                <source srcset="<?= $pic->resize(1200, 700)->url() ?>" media="(min-width: 961px)">
                                <img src="<?= $pic->resize(1200)->url() ?>" alt="<?= $caption ?>">
                            </picture>
                            <figcaption class="<?= $caption ?>"></figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    
    </section>
</article>



<?php snippet('foot'); ?>