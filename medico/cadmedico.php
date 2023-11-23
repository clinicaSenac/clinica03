<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        div.ex1 {
            height: 200px;
            width: 50%;
            overflow-y: scroll;
        }

        obrigatorio {
            color: red;
            weight: bold;
        }

        #exampleMedEsp {
            width: 80%;
        }
    </style>
</head>
<body>
    <div class="shadow-sm p-3 mb-5 bg-white rounded">
        <center>
            <h5> Cadastrar Médico</h5>
        </center>
        <form method="POST" action="inserirMedico.php">
            <div class="row mt-5">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <button type="button" class="btn btn-primary">Inicio</button> <label>
                        <h5>/Novo Médico <h5>
                    </label>
                </div>
            </div>
    </div>
    <center>
        <h4>Cadastro do Médico</h4>
    </center>
    <div class="container shadow-lg p-3 mb-5 bg-white rounded">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">

        <p class="text-danger">Campo obrigatório *</p>
        <div class="row mt-5">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <label for="exampleInputPassowrd1">Nome: <a href="#" class="text-danger">* </a> </label>
                <input type="text" class="form-control" id="exampleInputPassowrd1" name= 'nome'  placeholder="Paciente">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <label for="exampleInputPassowrd1">Endereço </label>
                <input type="Text" class="form-control
				" id="exampleInputPassowrd1" name='endereco' placeholder="Endereço">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <label for="exampleInputPassowrd1">Bairro: </label>
                <input type="text" class="form-control" id="exampleInputPassowrd1" name='bairro' placeholder="Bairro">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <label for="exampleInputPassowrd1">Cidade: </label>
                <input type="Text" class="form-control" id="exampleInputPassowrd1" name='cidade' placeholder="Cidade">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <label for="exampleInputPassowrd1">CPF: <a href="#" class="text-danger">* </a> </label>
                <input type="text" class="form-control" id="exampleInputPassowrd1" name='CPF' placeholder="cpf">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <label for="exampleInputPassowrd1">Valor da consulta </label>
                <input type="Text" class="form-control
				" id="exampleInputPassowrd1" name='valorConsulta' placeholder="Valor">
            </div>
           
        </div>
        <div class="row mt-5">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <label for="exampleInputPassowrd1">Status <a href="#" class="text-danger">* </a></label>
                <select id="inputEstado" name='statusMedico' class="form-control">
                    <option selected>Selecione:</option>
                    <option selected> Disponivel </option>
                    <option selected> Ocupado </option>
                </select>
            </div>
       
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <label for="exampleInputPassowrd1"> Especialidade </label>
                <input type="text" class="form-control" id="exampleInputPassowrd1" name='especialidade' placeholder="Especialidade">
            </div>
           
        </div>
        <div class="row mt-5">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <hr>
                <center>
                <input type="submit" value="salvar">
                   
                </center>
            </div>
        </div>
    </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>


</html>