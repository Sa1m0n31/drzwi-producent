const referencesDotsInner = Array.from(document.querySelectorAll('.btn--dot>span'));
const mobileMenu = document.querySelector('.menuMobile');
const mobileMenuInner = document.querySelector('.menuMobile__inner');
const mobileMenuChildren = Array.from(document.querySelectorAll('.menuMobile__inner>*'));

let currentReferencesSlide = 0;

const referencesCarousel = new Siema({
    selector: '.references',
    perPage: {
        100: 1,
        768: 2
    },
    // draggable: false,
    loop: true,
    duration: 400
});

const referencesNext = () => {
    referencesCarousel.next();

    if(currentReferencesSlide === 2) {
        currentReferencesSlide = 0;
    }
    else {
        currentReferencesSlide++;
    }

    changeReferencesDotsStyle(currentReferencesSlide);
}

const referencesPrev = () => {
    referencesCarousel.prev();

    if(currentReferencesSlide === 0) {
        currentReferencesSlide = 2;
    }
    else {
        currentReferencesSlide--;
    }

    changeReferencesDotsStyle(currentReferencesSlide);
}

const referencesSlide = (n) => {
    referencesCarousel.goTo(n);
    currentReferencesSlide = n;

    changeReferencesDotsStyle(n);
}

const changeReferencesDotsStyle = (n) => {
    referencesDotsInner.forEach((item, index) => {
        if(index === n) {
            item.style.visibility = 'visible';
        }
        else {
            item.style.visibility = 'hidden';
        }
    });
}

const openMenu = () => {
    mobileMenu.style.zIndex = '100';
    mobileMenu.style.opacity = '1';

    setTimeout(() => {
        mobileMenuInner.style.transform = 'scaleX(1)';

        setTimeout(() => {
            mobileMenuChildren.forEach((item) => {
               item.style.opacity = '1';
            });
        }, 200);
    }, 200);
}

const closeMenu = () => {
    mobileMenuChildren.forEach((item) => {
        item.style.opacity = '0';
    });

    setTimeout(() => {
        mobileMenuInner.style.transform = 'scaleX(0)';

        setTimeout(() => {
            mobileMenu.style.opacity = '0';
            setTimeout(() => {
                mobileMenu.style.zIndex = '-3';
            }, 200);
        }, 200);
    }, 200);
}
