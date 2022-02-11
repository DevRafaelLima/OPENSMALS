/*controladores do formulário de avalição */
let estrategia = document.querySelector("#estrategia");
let bntNextTurma = document.querySelector("#nextInfoTurma");
let nomeTurma = document.querySelector("#turma #nomeTurma")
let nomeUniversidade = document.querySelector("#turma #nomeUniversidade")
let nomeCurso = document.querySelector("#turma #nomeCurso")
let nomeComponente = document.querySelector("#turma #nomeComponente")
let pontosPositivos = document.querySelector(" #turma#pontosPositivos")
let pontosNegativos = document.querySelector("#turma #pontosNegativos")
let alerta = document.querySelector("#turma #alerta")

/*Controladores div alunos*/
let formAlunos = document.querySelector("formAluno")

bntNextTurma.addEventListener("click", nextTurma, false)
function nextTurma(){
    
    // if(estrategia.value.length != 1){
    //     alerta.innerHTML = `<div class="alert alert-warning" role="alert">
    //         Por favor, identifique a estrategia que está sendo avaliada. 
    //     </div>`
    //     estrategia.focus()
    //     return false
    // }
    // else if(nomeTurma.value.length < 2 ){
    //     alerta.innerHTML = `<div class="alert alert-warning" role="alert">
    //         Por favor, identifique a turma que está sendo avaliada. 
    //     </div>`
    //     nomeTurma.focus()
    //     return false
    // } else if(nomeUniversidade.value.length < 3){
    //     alerta.innerHTML = `<div class="alert alert-warning" role="alert">
    //         Por favor, Identifique a universidade.
    //       </div>`
    //     nomeUniversidade.focus()
    //     return false
    // } else if(nomeCurso.value.length < 2){
    //     alerta.innerHTML = `<div class="alert alert-warning" role="alert">
    //         Por favor, informe o nome do curso          </div>`
    //     nomeCurso.focus()
    //     return false
    // } else if(nomeComponente.value.length < 2){
    //     alerta.innerHTML = `<div class="alert alert-warning" role="alert">
    //         Por favor, informe o nome do componente que foi aplicado a estrátegia!
    //       </div>`
    //     nomeComponente.focus()
    //     return false
    // }
    formAluno.style.display = `block`
   
}

    /*
            <input type="radio" class="form-check-input" name="avaliacao" id="discordoFortemente" value="1">
*/
function gerarAlunos(){
    let alertAlunos = document.querySelector('#alertAlunos')
    let questionario = document.querySelector("#questionario")
    console.log(alertAlunos)
    let divAlunos = document.querySelector('#alunos')
    let nAluno = document.querySelector("#numeroAlunos")
    if(nAluno.value.length < 0){
       alertAlunos.innerHTML = `<div class="alert alert-warning" role="alert">
               Por favor, informe um número de alunos válido. 
             </div>`
        nAluno.focus()
        return false
    } 

    if(questionario.value == 1){
        for(let i =0; i < nAluno.value; i++){
            //criar a div row que vai recebar a linha de alunos
            //cria a div que recebe o nome do aluno
            //cria a dia que refebe informação do formulãrio
            //adicionar a a div nome aluno e div formulário dentro a linha do aluno
            let NomeAluno = document.createTextNode(`Aluno ${i+1}`)
            
            let divRow = document.createElement('div')
            divRow.classList.add('row')
            divRow.classList.add('itens')

            divAlunos.append(divRow)
            
            let NomeAlunoDiv = document.createElement('div')
            NomeAlunoDiv.classList.add('col-2')
            NomeAlunoDiv.append(NomeAluno)
            divRow.append(NomeAlunoDiv)
            

            let areaFormulario = document.createElement('div')
            areaFormulario.classList.add('col-10')
            for(let i=0; i<8; i++){
                let linhaRowItem = document.createElement('div')
                linhaRowItem.classList.add('row')
        
                

                let areaItem = document.createElement('div')
                areaItem.classList.add('col')
                areaItem.classList.add('item')

                let inputLinhaRow = document.createElement('input')
                inputLinhaRow.classList.add('form-control')
                inputLinhaRow.setAttribute('type', 'text')
                inputLinhaRow.setAttribute('placeholder', `item${i+1}`)
                inputLinhaRow.setAttribute('readonly', 'readonly')
                areaItem.append(inputLinhaRow)

                linhaRowItem.append(areaItem)

                for(let x=5; x>0; x--){
                    if(x == 5){
                        let divConcordoFortemente = document.createElement('div')
                        divConcordoFortemente.classList.add('col')
                        divConcordoFortemente.classList.add('text-center')
                        divConcordoFortemente.classList.add('item')
                        

                        let labelConfordoFortemente = document.createElement('label')
                        let textoConcordoFortemente = document.createTextNode('Concordo Fortemente')
                        labelConfordoFortemente.append(textoConcordoFortemente)

                        let inputConcordoFortemente = document.createElement('input')
                        inputConcordoFortemente.classList.add('form-check-input')
                        inputConcordoFortemente.setAttribute('type', 'radio')
                        inputConcordoFortemente.setAttribute('name', 'avaliacao')
                        inputConcordoFortemente.setAttribute('value', 5)

                        divConcordoFortemente.append(labelConfordoFortemente)
                        divConcordoFortemente.append(inputConcordoFortemente)

                        linhaRowItem.append(divConcordoFortemente)
                        console.log(divConcordoFortemente)
                    }
                    else if(x == 4){
                        let divConcordo = document.createElement('div')
                        divConcordo.classList.add('col')
                        divConcordo.classList.add('text-center')
                        divConcordo.classList.add('item')
                        

                        let labelConfordo = document.createElement('label')
                        let textoConcordo = document.createTextNode('Concordo')
                        labelConfordo.append(textoConcordo)

                        let inputConcordo = document.createElement('input')
                        inputConcordo.classList.add('form-check-input')
                        inputConcordo.setAttribute('type', 'radio')
                        inputConcordo.setAttribute('name', 'avaliacao')
                        inputConcordo.setAttribute('value', 4)

                        divConcordo.append(labelConfordo)
                        divConcordo.append(inputConcordo)


                        linhaRowItem.append(divConcordo)
                        console.log(divConcordo)

                    }
                    else if(x == 3){
                        let divNeutro = document.createElement('div')
                        divNeutro.classList.add('col')
                        divNeutro.classList.add('text-center')
                        divNeutro.classList.add('item')
                        

                        let labelNeutro = document.createElement('label')
                        let textoNeutro = document.createTextNode('Neutro')
                        labelNeutro.append(textoNeutro)

                        let inputNeutro = document.createElement('input')
                        inputNeutro.classList.add('form-check-input')
                        inputNeutro.setAttribute('type', 'radio')
                        inputNeutro.setAttribute('name', 'avaliacao')
                        inputNeutro.setAttribute('value', 3)

                        divNeutro.append(labelNeutro)
                        divNeutro.append(inputNeutro)

                        linhaRowItem.append(divNeutro)
                        console.log(divNeutro)
                    }
                    else if(x == 2){
                        let divDiscordo = document.createElement('div')
                        divDiscordo.classList.add('col')
                        divDiscordo.classList.add('text-center')
                        divDiscordo.classList.add('item')
                        

                        let labelDiscordo = document.createElement('label')
                        let textoDiscordo = document.createTextNode('Discordo')
                        labelDiscordo.append(textoDiscordo)

                        let inputDiscordo = document.createElement('input')
                        inputDiscordo.classList.add('form-check-input')
                        inputDiscordo.setAttribute('type', 'radio')
                        inputDiscordo.setAttribute('name', 'avaliacao')
                        inputDiscordo.setAttribute('value', 2)

                        divDiscordo.append(labelDiscordo)
                        divDiscordo.append(inputDiscordo)


                        linhaRowItem.append(divDiscordo)
                        console.log(divDiscordo)
                    }
                    else if(x == 1){
                        let divDiscordoFortemente = document.createElement('div')
                        divDiscordoFortemente.classList.add('col')
                        divDiscordoFortemente.classList.add('text-center')
                        divDiscordoFortemente.classList.add('item')
                        

                        let labelDiscordoFortemente = document.createElement('label')
                        let textoDiscordoFortemente = document.createTextNode('Discordo Fortemente')
                        labelDiscordoFortemente.append(textoDiscordoFortemente)

                        let inputDiscordoFortemente = document.createElement('input')
                        inputDiscordoFortemente.classList.add('form-check-input')
                        inputDiscordoFortemente.setAttribute('type', 'radio')
                        inputDiscordoFortemente.setAttribute('name', 'avaliacao')
                        inputDiscordoFortemente.setAttribute('value', 1)

                        divDiscordoFortemente.append(labelDiscordoFortemente)
                        divDiscordoFortemente.append(inputDiscordoFortemente)

                        linhaRowItem.append(divDiscordoFortemente)
                        console.log(divDiscordoFortemente)
                    }
                }


                areaFormulario.append(linhaRowItem)
                
            }
            //lógica do row
            //criar uma div que vai receber a linha do item
            //dentro dessa de linha de item fazer o for até 5
            divRow.append(areaFormulario)
        }
        
    } else if(questionario.value == 2){
        for(let i =0; i < nAluno.value; i++){
            //criar a div row que vai recebar a linha de alunos
            //cria a div que recebe o nome do aluno
            //cria a dia que refebe informação do formulãrio
            //adicionar a a div nome aluno e div formulário dentro a linha do aluno
            let NomeAluno = document.createTextNode(`Aluno ${i+1}`)
            
            let divRow = document.createElement('div')
            divRow.classList.add('row')
            divRow.classList.add('itens')

            divAlunos.append(divRow)
            
            let NomeAlunoDiv = document.createElement('div')
            NomeAlunoDiv.classList.add('col-2')
            NomeAlunoDiv.append(NomeAluno)
            divRow.append(NomeAlunoDiv)
            

            let areaFormulario = document.createElement('div')
            areaFormulario.classList.add('col-10')
            for(let i=0; i<10; i++){
                let linhaRowItem = document.createElement('div')
                linhaRowItem.classList.add('row')
        
                

                let areaItem = document.createElement('div')
                areaItem.classList.add('col')
                areaItem.classList.add('item')

                let inputLinhaRow = document.createElement('input')
                inputLinhaRow.classList.add('form-control')
                inputLinhaRow.setAttribute('type', 'text')
                inputLinhaRow.setAttribute('placeholder', `item${i+1}`)
                inputLinhaRow.setAttribute('readonly', 'readonly')
                areaItem.append(inputLinhaRow)

                linhaRowItem.append(areaItem)

                for(let x=5; x>0; x--){
                    if(x == 5){
                        let divConcordoFortemente = document.createElement('div')
                        divConcordoFortemente.classList.add('col')
                        divConcordoFortemente.classList.add('text-center')
                        divConcordoFortemente.classList.add('item')
                        

                        let labelConfordoFortemente = document.createElement('label')
                        let textoConcordoFortemente = document.createTextNode('Concordo Fortemente')
                        labelConfordoFortemente.append(textoConcordoFortemente)

                        let inputConcordoFortemente = document.createElement('input')
                        inputConcordoFortemente.classList.add('form-check-input')
                        inputConcordoFortemente.setAttribute('type', 'radio')
                        inputConcordoFortemente.setAttribute('name', 'avaliacao')
                        inputConcordoFortemente.setAttribute('value', 5)

                        divConcordoFortemente.append(labelConfordoFortemente)
                        divConcordoFortemente.append(inputConcordoFortemente)

                        linhaRowItem.append(divConcordoFortemente)
                        console.log(divConcordoFortemente)
                    }
                    else if(x == 4){
                        let divConcordo = document.createElement('div')
                        divConcordo.classList.add('col')
                        divConcordo.classList.add('text-center')
                        divConcordo.classList.add('item')
                        

                        let labelConfordo = document.createElement('label')
                        let textoConcordo = document.createTextNode('Concordo')
                        labelConfordo.append(textoConcordo)

                        let inputConcordo = document.createElement('input')
                        inputConcordo.classList.add('form-check-input')
                        inputConcordo.setAttribute('type', 'radio')
                        inputConcordo.setAttribute('name', 'avaliacao')
                        inputConcordo.setAttribute('value', 4)

                        divConcordo.append(labelConfordo)
                        divConcordo.append(inputConcordo)


                        linhaRowItem.append(divConcordo)
                        console.log(divConcordo)

                    }
                    else if(x == 3){
                        let divNeutro = document.createElement('div')
                        divNeutro.classList.add('col')
                        divNeutro.classList.add('text-center')
                        divNeutro.classList.add('item')
                        

                        let labelNeutro = document.createElement('label')
                        let textoNeutro = document.createTextNode('Neutro')
                        labelNeutro.append(textoNeutro)

                        let inputNeutro = document.createElement('input')
                        inputNeutro.classList.add('form-check-input')
                        inputNeutro.setAttribute('type', 'radio')
                        inputNeutro.setAttribute('name', 'avaliacao')
                        inputNeutro.setAttribute('value', 3)

                        divNeutro.append(labelNeutro)
                        divNeutro.append(inputNeutro)

                        linhaRowItem.append(divNeutro)
                        console.log(divNeutro)
                    }
                    else if(x == 2){
                        let divDiscordo = document.createElement('div')
                        divDiscordo.classList.add('col')
                        divDiscordo.classList.add('text-center')
                        divDiscordo.classList.add('item')
                        

                        let labelDiscordo = document.createElement('label')
                        let textoDiscordo = document.createTextNode('Discordo')
                        labelDiscordo.append(textoDiscordo)

                        let inputDiscordo = document.createElement('input')
                        inputDiscordo.classList.add('form-check-input')
                        inputDiscordo.setAttribute('type', 'radio')
                        inputDiscordo.setAttribute('name', 'avaliacao')
                        inputDiscordo.setAttribute('value', 2)

                        divDiscordo.append(labelDiscordo)
                        divDiscordo.append(inputDiscordo)


                        linhaRowItem.append(divDiscordo)
                        console.log(divDiscordo)
                    }
                    else if(x == 1){
                        let divDiscordoFortemente = document.createElement('div')
                        divDiscordoFortemente.classList.add('col')
                        divDiscordoFortemente.classList.add('text-center')
                        divDiscordoFortemente.classList.add('item')
                        

                        let labelDiscordoFortemente = document.createElement('label')
                        let textoDiscordoFortemente = document.createTextNode('Discordo Fortemente')
                        labelDiscordoFortemente.append(textoDiscordoFortemente)

                        let inputDiscordoFortemente = document.createElement('input')
                        inputDiscordoFortemente.classList.add('form-check-input')
                        inputDiscordoFortemente.setAttribute('type', 'radio')
                        inputDiscordoFortemente.setAttribute('name', 'avaliacao')
                        inputDiscordoFortemente.setAttribute('value', 1)

                        divDiscordoFortemente.append(labelDiscordoFortemente)
                        divDiscordoFortemente.append(inputDiscordoFortemente)

                        linhaRowItem.append(divDiscordoFortemente)
                        console.log(divDiscordoFortemente)
                    }
                }


                areaFormulario.append(linhaRowItem)
                
            }
            //lógica do row
            //criar uma div que vai receber a linha do item
            //dentro dessa de linha de item fazer o for até 5
            divRow.append(areaFormulario)
        }
    }

    
}