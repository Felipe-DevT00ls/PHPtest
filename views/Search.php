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
    <div class="card">
        <div class="card-body" id="cepResult">
            
        </div>
    </div><br><br><br>
<script type="module" src=<?php echo BASE_URL."assets/scripts/api.js"?>></script>


