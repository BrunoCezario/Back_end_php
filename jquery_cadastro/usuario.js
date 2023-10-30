var form_usuario = document.getElementById("form_usuario")
form_usuario.addEventListener("submit", (event) => {
    event.preventDefault()

    if (!form_usuario.checkValidity()) {
        return
    }

    $.ajax({
        url: "acessar.php",
        method: "POST",
        data: new FormData(form_usuario),
        processData: false,
        contentType: false,

        success: function (result) {
            console.log(result);

            const modal = document.getElementById('modal')
            const modalTitle = modal.querySelector('.modal-title')
            const modalBody = modal.querySelector('.modal-body')
            const modalFooter = modal.querySelector('.modal-footer')
            const btnClose = modal.querySelector('.btn-close')

            $("#modal").modal('show')

            if (!result.error) {
                if (modal) {
                    btnClose.classList.add('visually-hidden')
                    modalFooter.classList.add('visually-hidden')

                    modalTitle.textContent = `Conta criada com sucesso!`
                    modalBody.innerHTML = `<div class="redirecting w-100 d-flex justify-content-center">
                        <button class="btn btn-warning">
                            <div class="spinner-border spinner-border-sm" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            Aguarde enquanto te redirecionamos para o <b>login</b>!
                        </button>
                    </div>`
                }

                setTimeout(() => {
                    location.href;
                }, 3000)
            }
            else {
                if (modal) {
                    btnClose.classList.remove('visually-hidden')
                    modalFooter.classList.remove('visually-hidden')

                    modalTitle.textContent = `Mensagem de erro`
                    modalBody.textContent = result.message
                }
            }
        }
    })
})
