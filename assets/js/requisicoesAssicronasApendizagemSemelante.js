const conteudo = document.querySelector('.conteudo')
const links = document.querySelectorAll('.areaItem .left a')

links.forEach(link => {
    
    link.onclick = function(e){
        e.preventDefault()
        removeClass()
        addClass(link)
        fetch(link.href)
            .then(resp => resp.text())
            .then(html => conteudo.innerHTML = html)

    }
})

function removeClass(){
    links.forEach(link => {
        if(document.getElementsByClassName("ativo")[0] === link){
            link.classList.remove('ativo')
        }
    })
}

function addClass(link){
    link.classList.add('ativo')
}