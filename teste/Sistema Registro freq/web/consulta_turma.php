<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Consultar Turmas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/consulta.css">  
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">       
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>  
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
</head>
<body>
    <form action="../logico/consulta.php" method="POST">
        <section class="pt-5 pb-5 bg-dark inner-header">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center">
                  <h2 class="mt-0 mb-3 text-white">Consultar Turmas</h2>
              </div>
          </div>
      </div>
  </section><br>
  <br><br>
  <section class="search-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                        <select class="form-control search-slt" id="exampleFormControlSelect1" name="turma">
                            <option>Turma</option>
                            <option value="1">1º enfermagem</option>
                            <option value="2">2º enfermagem</option>
                            <option value="3">3º enfermagem</option>
                            <option value="4">4º enfermagem</option>

                            <option value="5">1º informática</option>
                            <option value="6">2º informática</option>
                            <option value="7">3º informática</option>
                            <option value="8">4º informática</option>

                            <option value="9">1º meio ambiente</option>
                            <option value="10">2º meio ambiente</option>
                            <option value="11">3º meio ambiente</option>
                            <option value="12">4º meio ambiente</option>

                            <option value="12">1º edificações</option>
                            <option value="14">2º edificações</option>
                            <option value="15">3º edificações</option>
                            <option value="16">4º edificações</option>

                        </select> 
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                        <select class="form-control search-slt" id="exampleFormControlSelect1" name="dia">
                            <option>Dia</option>
                            <option value="1">Segunda</option>
                            <option value="2">Terça</option>
                            <option value="3">Quarta</option>
                            <option value="4">Quinta</option>
                            <option value="5">Sexta</option>
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                        <select class="form-control search-slt" id="exampleFormControlSelect1" name="aula">
                            <option>aula</option>
                            <option value="1">1º aula</option>
                            <option value="2">2º aula</option>
                            <option value="3">3º aula</option>
                            <option value="4">4º aula</option>
                            <option value="5">5º aula</option>
                            <option value="6">6º aula</option>
                            <option value="7">7º aula</option>
                            <option value="8">8º aula</option>
                            <option value="9">9º aula</option>
                        </select>
                </div>
                     <input type="hidden" name="gerar_turma"><br>
                    <input class="btn" type="submit" name="btn"><br>
            </div>
        </div>
    </div>
</div>
</section>

<section class="search-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                       <!-- <input type="text" class="form-control search-slt" placeholder="Horário" name="hora">-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                      <!--  <input type="text" class="form-control search-slt" placeholder="Horário final">-->
                    </div>
                     <!---<div class="col-lg-3 col-md-3 col-sm-12 p-0">
                        <button type="button" class="btn btn-danger wrn-btn" name="btn">Gerar turma</button>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<footer class="footer-distributed">
</footer>
<script type="text/javascript">
</script>
</form>
</body>
</html>
