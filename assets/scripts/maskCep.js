export function maskCep(cep){
    if(cep.includes("-") == true){
        return cep
    }else{
        let init = cep.slice(0,5)
        let end = cep.slice(5,8)
        return `${init}-${end}`
    }
}