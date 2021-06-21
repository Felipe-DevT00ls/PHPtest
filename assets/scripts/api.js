import {maskCep} from './maskCep.js';

let button = document.getElementById("submitCep")
let result = document.getElementById("cepResult")

let inputUF = document.getElementById("inputUF")
let inputBairro = document.getElementById("inputBairro")
let inputCep = document.getElementById("inputCep")
let inputLogradouro = document.getElementById("inputLogradouro")
let inputGia = document.getElementById("inputGia")
let inputSiafi = document.getElementById("inputSiafi")
let inputIBGE = document.getElementById("inputIBGE")
let inputDDD = document.getElementById("inputDDD")
let inputLocalidade = document.getElementById("inputLocalidade")
let inputComplemento = document.getElementById("inputComplemento")

button.addEventListener("submit", (e)=>{
    e.preventDefault()

    let cep = document.getElementById("idCep").value
    let xml = new XMLHttpRequest()

    xml.open("get", `api.php?id=${cep}`)
    xml.send()
    xml.onload = () =>{
        let data = xml.response
        result.innerText = data
        let arr = data.split("\n")
        arr.forEach((tag, index) => {
            if(index != 0 && index != 1 && index != 12 && index != 13){
                switch (index) {
                    case 2:
                        inputCep.value = tag.replace("<cep>", "").replace("</cep>", "").replace("<cep/>", "")
                        break;
                    case 3:
                        inputLogradouro.value = tag.replace("<logradouro>", "").replace("</logradouro>", "").replace("<logradouro/>", "").replace("<logadouro/>")
                        break;
                    case 4:
                        inputComplemento.value = tag.replace("<complemento>", "").replace("</complemento>", "").replace("<complemento/>", "")
                        break;
                    case 5:
                        inputBairro.value = tag.replace("<bairro>", "").replace("</bairro>", "").replace("<bairro/>", "")
                        break;
                    case 6:
                        inputLocalidade.value = tag.replace("<localidade>", "").replace("</localidade>", "").replace("<localidade/>", "") 
                        break;
                    case 7:
                        inputUF.value = tag.replace("<uf>", "").replace("</uf>", "").replace("<uf/>", "")
                        break;
                    case 8:
                        inputIBGE.value = tag.replace("<ibge>", "").replace("</ibge>", "").replace("<ibge/>", "")
                        break;
                    case 9:
                        inputGia.value = tag.replace("<gia>", "").replace("</gia>", "").replace("<gia/>", "")
                        break;
                    case 10:
                        inputDDD.value = tag.replace("<ddd>", "").replace("</ddd>", "").replace("<ddd/>", "")
                        break;
                    case 11:
                        inputSiafi.value = tag.replace("<siafi>", "").replace("</siafi>", "").replace("<siafi/>", "")
                        break;
                }
            }
        });
    }
})
