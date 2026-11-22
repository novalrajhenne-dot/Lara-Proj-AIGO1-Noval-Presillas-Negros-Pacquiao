const form = document.getElementById('contact-form');

if (form) {
    const fields = form.querySelectorAll('input, textarea');
    const statusMessage = document.getElementById('contact-status');

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        statusMessage.textContent = '';

        let firstInvalidField = null;

        fields.forEach(function (field) {
            const error = document.getElementById(field.id + '-error');
            let message = '';

            if (field.value.trim() === '') {
                message = 'Please complete this field.';
            } else if (field.type === 'email' && !field.validity.valid) {
                message = 'Please enter a valid email address.';
            }

            error.textContent = message;
            field.setAttribute('aria-invalid', message ? 'true' : 'false');

            if (message && firstInvalidField === null) {
                firstInvalidField = field;
            }
        });

        if (firstInvalidField) {
            firstInvalidField.focus();
        } else {
            statusMessage.textContent =
                'Your inquiry passed validation. No email was sent.';
        }
    });
}