const mobileMenuBtn = document.querySelector('#mobile-menu');
const cerrarMenuBtn = document.querySelector('#cerrar-mobile-menu');
const sidebar = document.querySelector('.sidebar');
const body = document.querySelector('body');
if(mobileMenuBtn) {
    mobileMenuBtn.addEventListener('click', function() {
        sidebar.classList.add('mostrar');
        body.classList.add('stop-scroll');
        mobileMenuBtn.classList.add('ocultar');

    });
}

if(cerrarMenuBtn) {
    cerrarMenuBtn.addEventListener('click', function () {
        sidebar.classList.add('ocultar');

        setTimeout(() => {
            sidebar.classList.remove('mostrar');
            sidebar.classList.remove('ocultar');
            body.classList.remove('stop-scroll');
            mobileMenuBtn.classList.remove('ocultar');

        }, 500);
    })
}

// Elimina la clase de mostrar en un tamaño de tablet o mayores
window.addEventListener('resize', function() {
    const anchoPantalla = document.body.clientWidth;

    if(anchoPantalla >= 768) {
        sidebar.classList.remove('mostrar');
        body.classList.remove('stop-scroll');
        mobileMenuBtn.classList.remove('ocultar');

    }
})