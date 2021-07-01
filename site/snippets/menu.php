<nav class="font-sans">
    <button class="block lg:hidden h-6 w-6 bg-transparent border-0" type="button" data-menu-burger>
        <span class="visually-hidden">Menu</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="h-6 w-6" viewBox="0 0 24 24">
            <defs/>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>
    <ul class="flex flex-col lg:flex-row items-center justify-center lg:justify-end" data-menu-list>
        <?php foreach ($pages->listed() as $item) : ?>
            <?php if ($item->intendedTemplate()->name() === 'works'): ?>
                <li class="lg:pl-8 relative">
                    <button type="button" class="h-8 flex items-center uppercase tracking-wide <?= $item->isOpen() ? ' font-bold' : '' ?>" data-submenu-open><?= $item->title() ?></button>
                    <ul class="submenu is-hidden absolute w-48 z-50 bg-white shadow-md top-10" data-submenu-list>
                        <?php foreach($item->children() as $child): ?>
                            <li class="">
                                <a href="<?= $child->url() ?>" class="px-3 py-3 block hover:bg-gray-100"><?= $child->title() ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

            <?php else: ?>
                <li class="lg:pl-8 uppercase tracking-wide">
                    <a href="<?= $item->url() ?>" class="h-8 flex items-center <?= $item->isOpen() ? ' font-bold' : '' ?>"><?= $item->title() ?></a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</nav>