
// =================================
// SILONG MENU PAGE - CATEGORY FILTER
// =================================

document.addEventListener('DOMContentLoaded', function () {

    // Get all category filter buttons
    const filterButtons = document.querySelectorAll('.menu-filter');

    // Get all menu product cards
    const menuCards = document.querySelectorAll('.menu-card');

    // Get the menu product container
    const menuGrid = document.querySelector('.menu-grid');

    // Check if required elements exist
    if (filterButtons.length === 0 || menuCards.length === 0 || !menuGrid) {
        return;
    }

    // Create the empty-results message
    const emptyMessage = document.createElement('p');
    emptyMessage.className = 'menu-empty-message';
    emptyMessage.textContent = 'No menu items found in this category.';
    emptyMessage.setAttribute('role', 'status');
    emptyMessage.setAttribute('aria-live', 'polite');
    emptyMessage.hidden = true;

    menuGrid.insertAdjacentElement('afterend', emptyMessage);

    // Add click event to every filter button
    filterButtons.forEach(function (button) {

        button.addEventListener('click', function () {

            // Get the selected category
            const selectedCategory = button.getAttribute('data-filter');

            // Track visible products
            let visibleProducts = 0;

            // Show or hide menu products
            menuCards.forEach(function (card) {

                const productCategory = card.getAttribute('data-category');

                const shouldShow =
                    selectedCategory === 'all' ||
                    selectedCategory === productCategory;

                card.hidden = !shouldShow;

                if (shouldShow) {
                    visibleProducts++;
                }

            });

            // Show message if no products match
            emptyMessage.hidden = visibleProducts > 0;

            // Update active button and accessibility state
            filterButtons.forEach(function (filter) {

                const isSelected = filter === button;

                filter.classList.toggle('active', isSelected);
                filter.setAttribute('aria-pressed', String(isSelected));

            });

        });

    });

});
