const select = document.querySelectorAll('.select');
const selected = document.querySelectorAll('.selected');
const arrow = document.querySelectorAll('.arrow');
const selectList = document.querySelectorAll('.select__list');
const logisticsTabs = document.querySelectorAll('.logistics__btn');
const logisticsTabItems = document.querySelectorAll('.logistics__select-items');
const searchBtn = document.querySelector('.searchBtn');
const searchField = document.querySelector('.search__field');
const searchInput = document.querySelector('.search__field-input');
const searchInputBtn = document.querySelector('.search__field-button');
const burgerBtn = document.querySelector('.burger__btn');
const mobMenu = document.querySelector('.dhl-links');

function closeSelect(i) {
    arrow[i].classList.remove('rotate-arrow');
    selectList[i].classList.remove('select__list-active');
    select[i].classList.remove('select__active')
    window.removeEventListener('click', outsideClick);
}

function outsideClick(e) {
    if (!e.target.closest('.select')) {
        select.forEach((item, i) => {
            closeSelect(i);
        })
    }
}

function toggleSelect(i) {
    if (arrow[i].classList.contains('rotate-arrow')) {
        closeSelect(i);
    } else {
        arrow[i].classList.add('rotate-arrow');
        selectList[i].classList.add('select__list-active');
        select[i].classList.add('select__active')
    }
}

function closeOtherSelects(i) {
    for (s = 0; s < select.length; s++) {
        if (s != i) {
            closeSelect(s);
        }
    }
}

select.forEach((item, i) => {
    item.addEventListener('click', () => {
        closeOtherSelects(i);
        window.addEventListener('click', outsideClick);
        toggleSelect(i);
    });
});

selectList.forEach((item, i) => {
    item.addEventListener('click', (e) => {
        if (e.target && e.target.classList.contains('select__item')) {
            selected[i].innerHTML = e.target.innerHTML;
            closeSelect(i);
        }
    });
});

logisticsTabs.forEach((item, i) => {
    item.addEventListener('click', (e) => {
        if (e.target && e.target.classList.contains('logistics__btn-active')) {
            return;
        } else {
            for (t = 0; t < logisticsTabs.length; t++) {
                if (t != i) {
                    logisticsTabs[t].classList.remove('logistics__btn-active');
                    logisticsTabItems[t].classList.remove('logistics__show-tab');
                } else {
                    logisticsTabs[t].classList.add('logistics__btn-active');
                    logisticsTabItems[t].classList.add('logistics__show-tab');
                }
            }
        }
    });
});

function searchActive() {
    if (searchField.classList.contains('search__field-active')) {
        searchField.classList.remove('search__field-active');
        searchInput.classList.remove('search__field-input-active');
        searchInputBtn.classList.remove('search__field-button-active');
    } else {
        searchField.classList.add('search__field-active');
        searchInput.classList.add('search__field-input-active');
        searchInputBtn.classList.add('search__field-button-active');
    }
}

searchBtn.addEventListener('click', () => searchActive())

burgerBtn.addEventListener('click', () => {
    if (burgerBtn.classList.contains('burger__btn-x')) {
        burgerBtn.classList.remove('burger__btn-x');
        mobMenu.classList.remove('dhl-links-active');
        document.querySelector('body').removeAttribute('style');
    } else {
        burgerBtn.classList.add('burger__btn-x');
        mobMenu.classList.add('dhl-links-active');
        document.querySelector('body').style.overflow = 'hidden';
    }
    searchActive();
})