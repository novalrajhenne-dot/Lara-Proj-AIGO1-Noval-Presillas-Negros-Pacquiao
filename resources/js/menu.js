
document.addEventListener('DOMContentLoaded', function () {

    // TEST IF JAVASCRIPT IS LOADING
    alert('MENU JAVASCRIPT IS WORKING!');

    // GET FILTER BUTTONS AND MENU CARDS
    const filterButtons = document.querySelectorAll('.menu-filter');
    const menuCards = document.querySelectorAll('.menu-card');
    const menuGrid = document.querySelector('.menu-grid');

    // CHECK IF MENU ELEMENTS EXIST
    if (!filterButtons.length || !menuCards.length || !menuGrid) {
        console.error('Menu elements not found!');
        return;
    }

    // CATEGORY FILTER FUNCTION
    filterButtons.forEach(function (button) {

        button.addEventListener('click', function () {

            const selectedCategory = button.dataset.filter;

            // UPDATE ACTIVE BUTTON
            filterButtons.forEach(function (btn) {
                btn.classList.remove('active');
                btn.setAttribute('aria-pressed', 'false');
            });

            button.classList.add('active');
            button.setAttribute('aria-pressed', 'true');

            // SHOW OR HIDE MENU PRODUCTS
            menuCards.forEach(function (card) {

                const cardCategory = card.dataset.category;

                if (
                    selectedCategory === 'all' ||
                    cardCategory === selectedCategory
                ) {
                    card.hidden = false;
                } else {
                    card.hidden = true;
                }

            });

        });

    });

    console.log('SILONG menu filters initialized successfully!');

});
