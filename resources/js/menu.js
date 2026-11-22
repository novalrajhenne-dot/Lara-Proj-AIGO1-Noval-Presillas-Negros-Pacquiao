
// =================================
// SILONG MENU PAGE - CATEGORY FILTER
// =================================

document.addEventListener('DOMContentLoaded', function () {

    // Get all category filter buttons
    const filterButtons = document.querySelectorAll('.menu-filter');

    // Get all menu product cards
    const menuCards = document.querySelectorAll('.menu-card');

    // Check if the required elements exist
    if (filterButtons.length === 0 || menuCards.length === 0) {
        return;
    }

    // Add click event to every filter button
    filterButtons.forEach(function (button) {

        button.addEventListener('click', function () {

            // Get the selected category
            const selectedCategory = button.getAttribute('data-filter');

            // Show or hide menu products
            menuCards.forEach(function (card) {

                const productCategory = card.getAttribute('data-category');

                if (selectedCategory === 'all' || selectedCategory === productCategory) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }

            });

            // Remove active class from all buttons
            filterButtons.forEach(function (filter) {
                filter.classList.remove('active');
            });

            // Highlight the selected button
            button.classList.add('active');

        });

    });

});
