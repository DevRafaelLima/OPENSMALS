const conteudo = document.querySelector('.conteudo')
const links = document.querySelectorAll('.areaItem .left a')

links.forEach(link => {
    console.log(link)
    
    link.onclick = function(e){
        e.preventDefault()
        fetch(link.href)
            .then(resp => resp.text())
            .then(html => conteudo.innerHTML = html)     

    }
})

/*function requisitarPagina(url){
    preventDefault()
    conteudo.innerHTML = ''
    
    let ajax = new XMLHttpRequest()

    ajax.open('GET', url)

    ajax.onreadystatechange = () => {
        if(ajax.readyState === 4 && ajax.status == 200){
            conteudo.innerHTML = ajax.responseText
        }
    }
    ajax.send()
}*/