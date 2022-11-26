const enviar = document.querySelector('#enviar');
const form = document.querySelector('#form');
enviar.addEventListener('click',(evt) => {
    console.log(evt);
    evt.preventDefault();
    Swal.fire(
        'Excelente!',
        'Formulario enviado Correctamente!',
        'success'
      )
    form.reset();
});