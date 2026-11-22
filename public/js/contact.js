const form = document.getElementById('contact-form');

if (form) {
    const fields = form.querySelectorAll('input, textarea');
    const statusMessage = document.getElementById('contact-status');

    function getErrorMessage(field) {
        if (field.value.trim() === '') {
            return 'Please complete this field.';
        }

        if (field.type === 'email' && field.validity.typeMismatch) {
            return 'Please enter a valid email address.';
        }

        return '';
    }

    function showFieldError(field, message) {
        const error = document.getElementById(field.id + '-error');
        error.textContent = message;
        field.setAttribute('aria-invalid', message ? 'true' : 'false');
    }

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        statusMessage.textContent = '';

        let firstInvalidField = null;

        for (const field of fields) {
            const message = getErrorMessage(field);
            showFieldError(field, message);

            if (message && firstInvalidField === null) {
                firstInvalidField = field;
            }
        }

        if (firstInvalidField) {
            firstInvalidField.focus();
        } else {
            statusMessage.textContent =
                'Your inquiry passed validation. No email was sent.';
        }
    });

    for (const field of fields) {
        field.addEventListener('input', function () {
            statusMessage.textContent = '';

            if (field.getAttribute('aria-invalid') === 'true') {
                showFieldError(field, getErrorMessage(field));
            }
        });
    }
}