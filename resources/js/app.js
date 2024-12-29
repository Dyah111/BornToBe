import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.getElementById('sendButton').addEventListener('click', function (e) {
    e.preventDefault(); // Mencegah reload halaman

    const name = document.querySelector('input[name="name"]').value;
    const email = document.querySelector('input[name="email"]').value;
    const phone = document.querySelector('input[name="phone"]').value;
    const message = document.querySelector('textarea[name="message"]').value;

    fetch('/send-message', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: JSON.stringify({ name, email, phone, message }),
    })
        .then(response => response.json())
        .then(data => {
            if (data.url) {
                window.open(data.url, '_blank'); // Buka WhatsApp di tab baru
            } else {
                alert('Failed to send message. Please try again.');
            }
        })
        .catch(error => console.error('Error:', error));
});

