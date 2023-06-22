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

/* photo preview */

const photoInput = document.getElementById('photo');
photoInput.addEventListener('change', showPreview);

function showPreview(event) {
    if (event.target.files.length > 0) {
        const src = URL.createObjectURL(event.target.files[0]);
        const preview = document.getElementById("file-photo-preview");
        preview.src = src;
        preview.style.display = "block";
    }
}

/* change link CV */

const cvInput = document.getElementById('cv');
cvInput.addEventListener('change', changeLink);

function changeLink(event) {
    if (event.target.files.length > 0) {
        const href = URL.createObjectURL(event.target.files[0]);
        const link = document.getElementById("file-cv-link");
        link.href = href;
        preview.style.display = "inline-block";
    } 
}

/* show link CV */

cvInput.addEventListener('change', function() {
    if (cvInput.value) {
        const link = document.getElementById("file-cv-link");
        link.classList.remove('d-none');
    }
});



