function Validar() {
    //Puxando as infos do form
    const valid = document.getElementById('validando')
    const cidad = document.getElementById('inputCity')

    //Criando elementos novos
    const h1 = document.createElement('h1')
        //atribuindo valores aos novos
    h1.textContent = 'funciona'

    //Atribuindo a tag filha à pai
    valid.appendChild(h1)



}