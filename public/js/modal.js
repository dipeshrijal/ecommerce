document.querySelector('.modal__link').addEventListener('click', function(e) {
    e.preventDefault();
    this.classList.toggle('opened');
});
