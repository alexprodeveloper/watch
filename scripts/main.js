const menuModal = document.querySelector('.menu__modal');

document.querySelector('.menu__item_mobile').addEventListener('click', (event) => {
    menuModal.style.display = 'block';
});

document.querySelector('.menu__modal').addEventListener('click', (event) => {
    if (event.target.classList.contains('menu__item_modal') || event.target.classList.contains('modal__close')) {
        menuModal.style.display = 'none';
    }
})
