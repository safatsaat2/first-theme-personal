document.addEventListener('DOMContentLoaded', function () {
    /** Swiper Slider Initialization */
    new Swiper('.swiper-container.sef-slider-parent', {
        loop: true,
        autoplay: { delay: 3000, disableOnInteraction: false },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        slidesPerView: 4,
        spaceBetween: 10,
        breakpoints: {
            1024: { slidesPerView: 4 },
            767: { slidesPerView: 2 },
            0: { slidesPerView: 1 },
        },
    });

    /** Get Elements */
    const menuItemsContainer = document.querySelector('.sef-menu-items');
    const itemsWrapper = document.querySelector('.sef-items-wrapper');
    const quantitySpan = document.querySelector('.add-to-list span');
    const clearListBtn = document.querySelector('.primary-btn');
    const menuToggle = document.querySelector('.hamBurg');
    const menuItems = document.querySelector('.srs-header .sef-header-pr .items-parent');
    const hamIcon = document.querySelector('.hamBurg .ham');
    const crossIcon = document.querySelector('.hamBurg .cross');
    const addToList = document.querySelector('.add-to-list');

    /** Update Quantity */
    function updateQuantity() {
        const itemList = JSON.parse(localStorage.getItem('itemList')) || [];
        quantitySpan.textContent = itemList.length;
    }

    /** Add Items to the Menu */
    function addItemsToMenu() {
        const itemList = JSON.parse(localStorage.getItem('itemList')) || [];
        itemsWrapper.innerHTML = '';

        if (itemList.length) {
            menuItemsContainer.classList.add('open');
            itemList.forEach(({ image, name, price }) => {
                const itemElement = document.createElement('div');
                itemElement.classList.add('sef-item');
                itemElement.innerHTML = `
                    <img src="${image}" alt="${name}">
                    <span class="item-name">${name}</span>
                    <span class="item-price">$${price}</span>
                `;
                itemsWrapper.appendChild(itemElement);
            });
        } else {
            menuItemsContainer.classList.remove('open');
        }
    }

    /** Handle "Order Now" Click */
    document.body.addEventListener('click', function (e) {
        if (e.target.classList.contains('order-now')) {
            e.preventDefault();
            const button = e.target;
            const item = {
                id: button.getAttribute('data-item-id'),
                name: button.getAttribute('data-item-name'),
                price: button.getAttribute('data-item-price'),
                image: button.getAttribute('data-item-image'),
            };

            let itemList = JSON.parse(localStorage.getItem('itemList')) || [];
            itemList.push(item);
            localStorage.setItem('itemList', JSON.stringify(itemList));

            addItemsToMenu();
            updateQuantity();
        }
    });

    /** Clear List */
    clearListBtn.addEventListener('click', function () {
        localStorage.removeItem('itemList');
        itemsWrapper.innerHTML = '';
        updateQuantity();
        menuItemsContainer.classList.remove('open'); 
    });

    /** Toggle Mobile Menu */
    menuToggle.addEventListener('click', function () {
        menuItems.classList.toggle('show');
        hamIcon.classList.toggle('hide');
        crossIcon.classList.toggle('hide');
    });

    /** Toggle Menu Items */
    addToList.addEventListener('click', function () {
        menuItemsContainer.classList.toggle('open');
    });

    /** Initialize */
    addItemsToMenu();
    updateQuantity();
});
