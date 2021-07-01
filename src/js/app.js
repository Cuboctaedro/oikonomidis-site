import Tobii from '@midzer/tobii';
import 'lazysizes';

const tobii = new Tobii();

const burger = () => {
    const burgerButton = document.querySelector('[data-menu-burger]');
    const burgerMenu = document.querySelector('[data-menu-list]');
    if (burgerButton && burgerMenu) {
        burgerMenu.classList.add('is-hidden');
        burgerButton.addEventListener('click', () => {
            burgerMenu.classList.toggle('is-hidden');
        });
    }
}

const submenu = () => {
    const submenuButtons = document.querySelectorAll('[data-submenu-open]');
    submenuButtons.forEach((submenuButton) => {
        const submenuMenu = submenuButton.nextElementSibling;
        submenuButton.addEventListener('click', () => {
            submenuMenu.classList.toggle('is-hidden');
        });
    })
}

const caps = () => {
    const uppercase = document.querySelectorAll('.uppercase');
    uppercase.forEach((item) => {
        const text = item.textContent;
        text.
        replace( /\u0386/g, "\u0391" ). // 'Ά':'Α'
        replace( /\u0388/g, "\u0395" ). // 'Έ':'Ε'
        replace( /\u0389/g, "\u0397" ). // 'Ή':'Η'
        replace( /\u038A/g, "\u0399" ). // 'Ί':'Ι'
        replace( /\u038C/g, "\u039F" ). // 'Ό':'Ο'
        replace( /\u038E/g, "\u03A5" ). // 'Ύ':'Υ'
        replace( /\u038F/g, "\u03A9" ). // 'Ώ':'Ω'
        replace( /\u0390/g, "\u03CA" ). // 'ΐ':'ϊ'
        replace( /\u03AC/g, "\u03B1" ). // 'ά':'α'
        replace( /\u03AD/g, "\u03B5" ). // 'έ':'ε'
        replace( /\u03AE/g, "\u03B7" ). // 'ή':'η'
        replace( /\u03AF/g, "\u03B9" ). // 'ί':'ι'
        replace( /\u03B0/g, "\u03CB" ). // 'ΰ':'ϋ'
        replace( /\u03CC/g, "\u03BF" ). // 'ό':'ο'
        replace( /\u03CD/g, "\u03C5" ). // 'ύ':'υ'
        replace( /\u03CE/g, "\u03C9" ); // 'ώ':'ω'
    });
}

burger();
submenu();
caps();