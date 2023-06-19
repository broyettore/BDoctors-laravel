import './bootstrap';
import * as bootstrap from 'bootstrap'
import '~resources/scss/app.scss'

import.meta.glob([
    '../img/**'
]);

const sponsorshipBoxes = document.querySelectorAll('.sponsorship-box');
const sponsorshipOptions = document.querySelectorAll('.sponsorship-option');
const buyButton = document.querySelector('.buy-sponsorship');

sponsorshipOptions.forEach(sponsorship => {
    sponsorship.addEventListener('change', function () {
        buyButton.classList.remove('d-none');

        sponsorshipOptions.forEach(sponsorship => {
            sponsorship.parentElement.classList.remove('sponsorship-selected');
        });
        sponsorship.parentElement.classList.add('sponsorship-selected');
    });
});
