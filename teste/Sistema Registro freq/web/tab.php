<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Menu Grid With double Icons - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/tab.css">
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

     <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <style type="text/css">
      .btn_e{

  box-shadow: 0px 0px 0px 2px #9fb4f2;
  background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
  background-color:#7892c2;
  border:1px solid #4e6096;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:20px;
  padding:5px 25px;
  text-decoration:none;

}
.btn_e:hover {
  background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
  background-color:#476e9e;
}
.btn_e:active {
  position:relative;
  top:1px;
}


}


      }
    </style>

    

 <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Inner Header - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">       
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<section class="pt-5 pb-5 bg-dark inner-header">
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h1 class="mt-0 mb-3 text-white">Bem vinda(o) ao sistema!</h1>
    </div>
  </div>
</div>
</section><br><br><br>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
     <div class="col-md-3">
      <a href="consulta_turma.php" class="btn btn-block btn-lg btn-success"><i class="fa fa-users" id="icone_grande"></i> <br><br>
            <span class="texto_grande"><i class="fa fa-edit"></i>Consultar turmas</span></a>
      </div>
      <div class="col-md-3">
        <a  href ="../SPDF/home/exibirpdf.php" class="btn btn-block btn-lg btn-danger">
            <i class="fa fa-user" id="icone_grande"></i> <br><br>
            <span class="texto_grande"><i class="fa fa-edit"></i> Consultar faltas</span></a>
      </div>
      <div class="col-md-3">
        <a class="btn btn-block btn-lg btn-warning" href="atualizarsenha.php">
            <i class="fa fa-pied-piper-alt" id="icone_grande"></i> <br><br>
            <span class="texto_grande"><i class="fa fa-list-ul"></i> Mudar senha</span></a>
      </div> 
       <form action="../logico/consulta.php" method="POST">
      <div class="col-md-3">
        <a class="btn btn-block btn-lg btn-primary" href="">
            <i class="fa fa-cog fa-spin" id="icone_grande"></i> <br><br>
            <span class="texto_grande"><i class="fa fa-plus-circle"></i><input type="submit" name="sair" value="sair" class="btn_e"></span></a>
      </div>
      </form>

    


</div>

<footer class="footer-distributed">
    </footer>

<script type="text/javascript">

</script>
</body>
</html>
