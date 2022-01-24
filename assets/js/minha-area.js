let conteudos = document.querySelector("#lado-esquerdo")
let links = document.querySelectorAll("#lado-direito .nav a")
let avaliacaoMinhaArea = document.querySelector("#avaliacao")

links.forEach(link => {
    link.onclick = (e) => {
        e.preventDefault()
        removeClass()
        fetch(link.href)
        .then(resp => resp.text())
        .then(html => conteudos.innerHTML = html)

        // addClass(e)
    }
})

function removeClass(){
    links.forEach(link => {
        if(document.getElementsByClassName("active")[0] === link){
            link.classList.remove('active')
        }
    })
}

function addClass(link){
       link.classList.add('active')
}

function avaliacao(e){

    if(e === 'sim'){
        avaliacaoMinhaArea.style.display = "block"
    } else if(e === 'nao'){
        avaliacaoMinhaArea.style.display = "none"
    }
}

function addUniversidade(){
    
    
}