<div class="container">
    <form id="submitCep">
    <div class="form-group">
        <h3 align="center">Cep que quer Consultar</h3><br><br>
        <input type="text" class="form-control" name="idCep" id="idCep" placeholder="digite aqui o cep que quer consultar">
    </div></br>
    <center><button type="submit" class="btn btn-primary">Buscar cep</button></center>
    </form><br><br>

    <div>
        <h2> Resultado da Busca:</h2><hr>
    </div>

    <form class="row g-3">
        <div class="col-md-6">
            <label for="inputCep" class="form-label">Cep</label>
            <input type="text" class="form-control" id="inputCep">
        </div>
        <div class="col-md-6">
            <label for="inputLogradouro" class="form-label">Logradouro</label>
            <input type="text" class="form-control" id="inputLogradouro">
        </div>
        <div class="col-6">
            <label for="inputComplemento" class="form-label">Complemento</label>
            <input type="text" class="form-control" id="inputComplemento">
        </div>
        <div class="col-6">
            <label for="inputBairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="inputBairro">
        </div>
        <div class="col-md-6">
            <label for="inputLocalidade" class="form-label">Localidade</label>
            <input type="text" class="form-control" id="inputLocalidade">
        </div>
        <div class="col-md-4">
            <label for="inputIBGE" class="form-label">IBGE</label>
            <input type="text" class="form-control" id="inputIBGE">
        </div>
        <div class="col-md-2">
            <label for="inputUF" class="form-label">UF</label>
            <input type="text" class="form-control" id="inputUF">
        </div>
        <div class="col-6">
            <label for="inputGia" class="form-label">Gia</label>
            <input type="text" class="form-control" id="inputGia">
        </div>
        <div class="col-6">
            <label for="inputDDD" class="form-label">DDD</label>
            <input type="text" class="form-control" id="inputDDD">
        </div>
        <div class="col-6">
        <label for="inputSiafi" class="form-label">Siafi</label>
            <input type="text" class="form-control" id="inputSiafi">
        </div>
    </form><br><br><br>

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h5>Retorno da Api em XML</h>
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="card">
                    <div class="card-body" id="cepResult"></div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<script type="module" src=<?php echo BASE_URL."assets/scripts/api.js"?>></script>


