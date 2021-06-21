# PHPTest - Finalizado
## _Sistema de busca de cep_

Sistema desenvolvido como certificação de conhecimentos, para vaga de emprego.

- Nome: BuscaCep 1.0
- Autor: Gabriel Felipe
- ✨PHP developer

## Instalação

Primeiro vá ao diretorio que deseja instalar o projeto e crie a pasta "vagaEmprego"
após isso dé um git clone no projeto dentro da pasta "vagaEmprego".
Agora entre na pasta "PHPtest", logo após isso dê um composer install.


```sh
mkdir vagaEmprego

cd vagaEmprego

git clone  https://github.com/Felipe-DevT00ls/PHPtest.git

cd PHPtest

composer install
```

Após isso altere as configurações do banco de dados do projeto, conforme sejá
necessário, para que o projeto rode em seu servidor.

As configurações do banco de dados da aplicação estão em: `config.php`

```sh
    if(ENVIRONMENT == "development"){
        define("BASE_URL", "http://localhost/vagaEmprego/PHPtest/");
        $config = [
            "dbname" => "apiCep",
            "host" => "localhost",
            "user" => "root",
            "pass" => ""
        ];
    }
```

No array que está configurado na variavel `$config` você pode alterar apenas os valores de cada indice, conforme as configuração do banco de dados do seu server.

## Tecnologias
Tecnologias utilizadas no projeto.

>Obs: Caso encontrado algum arquivo jQuery no projeto,
>ele está presente pelas necessidades do bootstrap,
>todos os eventos e rotinas criadas como funcionalidades
>no front-end foi utilizando Javascript puro.
>E estão localizadas na Pasta `assets/scripts`


| Tecnologia | Utilização |
| ------ | ------ |
| PHP | Back-end |
| GitHub | Versionamento de Código |
| Bootstrap | Front-end |
| jQuery | Front-end(Dependencia do Bootstrap) |
| MariaDB | Serviço Banco de Dados |

## Imagens do Projeto

### Pagina inicial do sistema 
![imagem](Imagens%20do%20Projeto/Home.png)
<br/><br/><br/>

### Pagina de pesquisa de cep do sistema 
![imagem](Imagens%20do%20Projeto/Search_Default.png)
<br/><br/><br/>

### Pagina de pesquisa de cep do sistema recebendo um cep não cadastrado no Banco de dados
![imagem](Imagens%20do%20Projeto/Search_webservice.png)
<br/>
Perceba que no xml retornado temos um valor a mais na reposta, que é o "<Service\>", ele é reponsavel por retornar ao usuario da aplicação,
de onde os dados estão sendo retornados
<br/><br/><br/>
    
### Pagina de pesquisa de cep do sistema recebendo um cep cadastrado no Banco de dados
![imagem](Imagens%20do%20Projeto/Search_Bd.png)
<br/>
Perceba que o valor de <Service\> retorna que o dado está vindo do Banco de dados.
Pois o mesmo, já foi consultado anteriormente.
<br/><br/><br/>

