document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.swiper-container.sef-slider-parent', {
        loop: true, // Enables infinite scrolling
        autoplay: {
            delay: 3000, // Autoplay delay in ms
            disableOnInteraction: false, // Keeps autoplay running after interaction
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: 4, // Default: 4 slides visible
        spaceBetween: 10, // Space between slides in px
        breakpoints: {
            1024: {
                slidesPerView: 4,
            },
            // When the screen width is 768px or less (for tablets and mobile)
            767: {
                slidesPerView: 2, // Show 2 slides
            },
            // When the screen width is 480px or less (for mobile)
            0: {
                slidesPerView: 1, // Show 1 slide
            },
        },
    });
});
document.addEventListener('DOMContentLoaded', function() {
    // Get necessary elements
    const menuItemsContainer = document.querySelector('.sef-menu-items');
    const itemsWrapper = document.querySelector('.sef-items-wrapper');
    const quantitySpan = document.querySelector('.add-to-list span');
    const clearListBtn = document.querySelector('.primary-btn');

    // Function to update the quantity in the <span>
    function updateQuantity() {
        const itemList = JSON.parse(localStorage.getItem('itemList')) || [];
        quantitySpan.textContent = itemList.length;
    }

    // Function to add items to the menu
    function addItemsToMenu() {
        const itemList = JSON.parse(localStorage.getItem('itemList')) || [];

        // Clear previous items before adding (avoiding duplicates)
        itemsWrapper.innerHTML = '';

        if (itemList.length === 0) {
            menuItemsContainer.classList.remove('open'); // Hide menu if empty
        } else {
            menuItemsContainer.classList.add('open'); // Show menu if items exist
        }

        itemList.forEach(function(item) {
            // Create the item element
            const itemElement = document.createElement('div');
            itemElement.classList.add('sef-item');

            // Add the image
            const itemImage = document.createElement('img');
            itemImage.src = item.image;
            itemImage.alt = item.name;

            // Add the item name
            const itemName = document.createElement('span');
            itemName.classList.add('item-name');
            itemName.textContent = item.name;

            // Add the item price
            const itemPrice = document.createElement('span');
            itemPrice.classList.add('item-price');
            itemPrice.textContent = `$${item.price}`;

            // Append elements to the item container
            itemElement.appendChild(itemImage);
            itemElement.appendChild(itemName);
            itemElement.appendChild(itemPrice);

            // Append the item to the wrapper
            itemsWrapper.appendChild(itemElement);
        });
    }

    // Add event listener to all "Order Now" buttons
    document.querySelectorAll('.order-now').forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();

            // Get item details from data attributes
            const itemId = button.getAttribute('data-item-id');
            const itemName = button.getAttribute('data-item-name');
            const itemPrice = button.getAttribute('data-item-price');
            const itemImage = button.getAttribute('data-item-image');

            // Create an item object
            const item = {
                id: itemId,
                name: itemName,
                price: itemPrice,
                image: itemImage
            };

            // Retrieve existing items from localStorage or initialize an empty array
            let itemList = JSON.parse(localStorage.getItem('itemList')) || [];

            // Add the new item to the list
            itemList.push(item);

            // Save the updated list back to localStorage
            localStorage.setItem('itemList', JSON.stringify(itemList));

            // Update the menu items display
            addItemsToMenu();
            updateQuantity();
        });
    });

    // Clear list functionality
    clearListBtn.addEventListener('click', function() {
        localStorage.removeItem('itemList'); // Remove items from localStorage
        itemsWrapper.innerHTML = ''; // Clear displayed items
        updateQuantity(); // Reset quantity count
        menuItemsContainer.classList.remove('open'); // Ensure open class is removed
    });


    // Load existing items from localStorage when the page loads
    addItemsToMenu();
    updateQuantity();
});
document.addEventListener('DOMContentLoaded', function() {
    // Get references to the elements
    const menuToggle = document.querySelector('.hamBurg');
    const menuItems = document.querySelector('.srs-header .sef-header-pr .items-parent');
    const hamIcon = document.querySelector('.hamBurg .ham');
    const crossIcon = document.querySelector('.hamBurg .cross');

    // Add event listener for toggling the menu
    menuToggle.addEventListener('click', function() {
        // Toggle the 'show' class to display the menu
        menuItems.classList.toggle('show');

        // Toggle the visibility of the hamburger and cross icons
        hamIcon.classList.toggle('hide');
        crossIcon.classList.toggle('hide');
    });
    const addToList = document.querySelector(".add-to-list");
    const menuItems2 = document.querySelector(".sef-menu-items");

    addToList.addEventListener("click", function() {
        menuItems2.classList.toggle("open");
    });
});