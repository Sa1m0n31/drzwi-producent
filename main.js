const referencesDots = Array.from(document.querySelectorAll('.btn--dot'));
const referencesDotsInner = Array.from(document.querySelectorAll('.btn--dot>span'));

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

}

const closeMenu = () => {

}
