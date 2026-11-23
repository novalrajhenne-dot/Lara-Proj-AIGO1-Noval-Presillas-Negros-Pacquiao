
document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('.menu-filter');
    const menuCards = document.querySelectorAll('.menu-card');

    filterButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const selectedCategory = button.dataset.filter;

            filterButtons.forEach(function (btn) {
                btn.classList.remove('active');
                btn.setAttribute('aria-pressed', 'false');
            });

            button.classList.add('active');
            button.setAttribute('aria-pressed', 'true');

            menuCards.forEach(function (card) {
                card.hidden = !(
                    selectedCategory === 'all' ||
                    card.dataset.category === selectedCategory
                );
            });
        });
    });
});
