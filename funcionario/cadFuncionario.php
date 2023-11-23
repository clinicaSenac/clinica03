<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
		div.ex1 {
			height: 200px;
			width: 50%;
			overflow-y: scroll;
		}
		
		obrigatório{
		 color: red;
		 weight: bold;
		}
		
		#exampleMedEsp{
		    width: 80%;
		}
		</style>
</head>

<body>

    <div class="shadow-sm p-3 mb-5 bg-white rounded">
    <center> <h5> Cadastrar Funcionario</h5> </center>
    <form method="POST" action="inserirFuncionario.php">
    <div class="row mt-3">
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            Funcionario: <input type="text" class="form-control"  name="nome" required>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            Endereco: <input type="text" class="form-control"  name="endereco" required>
			</div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            Bairro: <input type="text" class="form-control"  name="bairro" required>
			</div>						
	</div>
    <div class="row mt-3">
             <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
             Cidade: <input type="text" class="form-control"  name="cidade" required>
			</div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
             Função: <input type="text" class="form-control"  name="funcao" required>
			</div>
           
       <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <legend>Sexo</legend>
        <div>
            <input type="radio" id="huey" name="sexo" value="masculino" checked/>
            <label for="huey">Masculino</label>
        
            <input type="radio" id="huey" name="sexo" value="feminino" checked/>
            <label for="huey">Feminino</label>
        </div>
         </div>
     </div>
     <div class="row mt-3">
			<div class=" col-lg-4 col-md-6 col-sm-12">
            CPF: <input type="text" class="form-control"  name="cpf" placeholder="   .   .   -  " >
			</div>
			<div class=" col-lg-4 col-md-6 col-sm-12">
            Nascimento: <input type="date" class="form-control"  name="dataNascimento" >
			</div>
            <div class="col-lg-4 col-md-6 col-sm-12">
            Celular: <input type="text" class="form-control"  name="celular" >
			</div>		
            <div class=" col-lg-4 col-md-6 col-sm-12">
            Email: <input type="text" class="form-control" name="email" >
			</div>					
	</div>

       
       
        
      
       
       
        
      
       

        <input type="submit" value="salvar">
    </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>