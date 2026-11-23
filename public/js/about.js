
document.addEventListener('DOMContentLoaded', function () {

    const readMoreBtn = document.getElementById('readMoreBtn');
    const moreContent = document.getElementById('moreContent');

    if (!readMoreBtn || !moreContent) {
        return;
    }

    readMoreBtn.addEventListener('click', function () {

        const isExpanded =
            readMoreBtn.getAttribute('aria-expanded') === 'true';

        if (isExpanded) {

            moreContent.hidden = true;

            readMoreBtn.textContent = 'Read More';

            readMoreBtn.setAttribute('aria-expanded', 'false');

        } else {

            moreContent.hidden = false;

            readMoreBtn.textContent = 'Read Less';

            readMoreBtn.setAttribute('aria-expanded', 'true');

        }

    });

});
