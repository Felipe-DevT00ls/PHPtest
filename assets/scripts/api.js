import {maskCep} from './maskCep.js';

let button = document.getElementById("submitCep")
let result = document.getElementById("cepResult")

button.addEventListener("submit", (e)=>{
    e.preventDefault()
    
    let cep = document.getElementById("idCep").value
    let xml = new XMLHttpRequest()

    xml.open("get", `api.php?id=${maskCep(cep)}`)
    xml.send()
    xml.onload = () =>{
        result.innerText = xml.response
    }
})
