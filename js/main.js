document.addEventListener('click', function(e) {
    if (e.target.classList.contains('galeria-item')) {
        const src = e.target.getAttribute('src');
        document.querySelector('.modal-img').src = src;
        const myModal = new bootstrap.Modal(document.getElementById('galeria-modal'));
        myModal.show();
    }
})