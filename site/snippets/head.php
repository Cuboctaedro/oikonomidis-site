<html lang="<?= $site->languages()->current()->code() ?>" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">

  <title><?= $page->title() ?></title>

  <script type="module">
    document.documentElement.classList.remove('no-js');
    document.documentElement.classList.add('js');
  </script>

    <?= css('assets/app.css') ?>
    <?= js('assets/app.js', ['defer' => true]) ?>

    <meta name="description" content="<?= $page->getDescription() ?>">
    <meta property="og:title" content="<?= $page->title() ?>">
    <meta property="og:description" content="<?= $page->getDescription() ?>">
    <meta property="og:image" content="<?= $page->getMetaImage() ?>">
    <meta property="og:locale" content="<?= $site->languages()->current()->code() ?>">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:url" content="<?= $page->url() ?>">
    <link rel="canonical" href="<?= $page->url() ?>">
    <link rel="alternate" hrefLang="x-default" href="<?= $page->url('el') ?>" key="meta-alternate-def" />
    <link rel="alternate" hrefLang="en-us" href="<?= $page->url('en') ?>" key="meta-alternate-eng" />
    <link rel="alternate" hrefLang="el" href="<?= $page->url('el') ?>" key="meta-alternate-el" />

    <link rel="icon" href="/favicon.ico">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="manifest" href="/my.webmanifest">
    <meta name="theme-color" content="#ffffff">
</head>

<body class="font-serif min-h-screen">
    <div class="navbar container mx-auto mb-12 lg:mb-24 flex flex-row items-center justify-between py-2 lg:py-4">
        <header class="">
            <?php if ($page->isHomePage()) : ?>
                <h1 class="text-2xl"><?= $site->title() ?></h1>
            <?php else : ?>
                <a class="text-2xl" href="<?= $site->url(); ?>"><?= $site->title() ?></a>
            <?php endif; ?>
        </header>
        <?php snippet('menu'); ?>
    </div>
    <div class="container mx-auto ">
