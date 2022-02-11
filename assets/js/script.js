let nome = document.querySelector("#name")
let email = document.querySelector("#email")
let dataNascimento = document.querySelector("#data_nascimento")
let contato = document.querySelector("#contato")
let whatsapp = document.querySelector(".whatsapp")
let senha = document.querySelector("#senha")
let confirmaSenha = document.querySelector("#confirmarSenha")
let alerta = document.querySelector(".alert")
let instagram = document.querySelector("#instagram")
let facebook = document.querySelector("#facebook")

function validaForm(){
    onclick  = function(e){
        e.preventDefault();
        if(nome.value.length < 3){
            alerta.innerHTML = `<div class="alert alert-warning" role="alert">
            Por favor, informe seu nome!
          </div>`
            nome.focus()
            return false
        } else if(email.value.length < 5){
            alerta.innerHTML = `<div class="alert alert-warning" role="alert">
            Por favor, informe seu email!
          </div>`
          email.focus()
          return false
        } else if(dataNascimento.value.length < 5){
            alerta.innerHTML = `<div class="alert alert-warning" role="alert">
            Por favor, informe sua data de nascimento!
            </div>`
            dataNascimento.focus()
            return false
        } else if(contato.value.length < 8){
            alerta.innerHTML= `<div class="alert alert-warning" role="alert">
            Por favor, informe seu contato!
            </div>`
        } else if(senha.value.length < 5){
            alerta.innerHTML = `<div class="alert alert-warning" role="alert">
            Por favor, digita uma senha com mais de 5 caracteres!
            </div>`
            senha.focus()
            return false
        } else if(senha.value !== confirmaSenha.value){
            alerta.innerHTML = `<div class="alert alert-warning" role="alert">
            As senha não batem!
            </div>`
            senha.focus()
            return false
        }
        this.window.location.href = `valida-cadastro.php?name=${nome.value}&email=${email.value}&data=${dataNascimento.value}&contato=${contato.value}&what=${whatsapp.value}&senha=${senha.value}&face=${facebook.value}&insta=${instagram.value}`
        
    }
}