require('./bootstrap');

import bootstrap from 'bootstrap'

const deleteButtons = document.querySelectorAll('.js-delete');
const eleOverlay = document.querySelector('.overlay');
const formPopup = document.querySelector('.popup');
if (eleOverlay) {


    // compare il pop up
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            // remove class
            eleOverlay.classList.remove('d-none');

            // accesso callback data in-line
            const id = this.closest('[data-id]').dataset.id;
            const pattern = formPopup.dataset.action;
            const newAction = pattern.replace('*****', id);
            formPopup.action = newAction;
        })
    });

    // funzione bottone no sompare il pop up
    document.querySelector('.js-no').addEventListener('click', function() {
        eleOverlay.classList.add('d-none');
    });

}
