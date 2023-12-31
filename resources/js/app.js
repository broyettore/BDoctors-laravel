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

if (document.querySelector(".edit-doctor-form")) {
    const deleteCvLabel = document.querySelector('.delete-cv-success');
    const deletePhotoLabel = document.querySelector('.delete-photo-success');

    const deleteCvInput = document.querySelector('.delete-cv-input');
    const deletePhotoInput = document.querySelector('.delete-photo-input');

    const newCVInput = document.querySelector('.new-cv-input');
    const newPhotoInput = document.querySelector('.new-photo-input');

    const selectCVLabel = document.querySelector('.select-cv-label');
    const selectPhotoLabel = document.querySelector('.select-photo-label');


    newCVInput.addEventListener('change', function () {

        if (newCVInput.value) {
            selectCVLabel.classList.remove('bg-warning');
            selectCVLabel.classList.add('bg-success');
            selectCVLabel.innerHTML = 'CV Successfully uploaded'
        }
    });

    newPhotoInput.addEventListener('change', function () {

        if (newPhotoInput.value) {
            selectPhotoLabel.classList.remove('bg-warning');
            selectPhotoLabel.classList.add('bg-success');
            selectPhotoLabel.innerHTML = 'Photo Successfully uploaded'
        }
    });

    if (document.querySelector('.delete-cv-btn')) {
        const deleteCvBtn = document.querySelector('.delete-cv-btn');
        deleteCvBtn.addEventListener('click', function () {
            hideElement(deleteCvLabel, deleteCvBtn);
            deleteCvInput.value = 'delete-cv';
        });
    }

    if (document.querySelector('.delete-photo-btn')) {
        const deletePhotoBtn = document.querySelector('.delete-photo-btn');
        deletePhotoBtn.addEventListener('click', function () {
            console.log("cliccato")
            hideElement(deletePhotoLabel, deletePhotoBtn);
            deletePhotoInput.value = 'delete-photo';
        });
    }
}

function hideElement(element1, element2) {
    element1.classList.remove('d-none');
    element2.classList.add('d-none');
}


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

cvInput.addEventListener('change', function () {
    if (cvInput.value) {
        const link = document.getElementById("file-cv-link");
        link.classList.remove('d-none');
    }
});
if (document.getElementById('delete-input')) {
    /* hide cv input on delete */
    const deleteCvInput = document.getElementById('delete-input');
    deleteCvInput.addEventListener('click', function () {

        const link = document.getElementById("file-cv-link");
        link.classList.add('d-none');

    });
}
