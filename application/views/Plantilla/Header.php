<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $titulo ?>  I TridoR</title>
        <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script language="javascript" type="text/javascript">

            $('#myModal').on('shown.bs.modal', function () {
                $('#myInput').trigger('focus')
                });

	    </script>
</head>
<style>
  
.modal {
  text-align: center;
  padding: 0!important;
}

.modal:before {
  content: '';
  display: inline-block;
  height: 80%;
  vertical-align: middle;
  margin-right: -3px; /* Adjusts for spacing */
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}

#contenido{
  display: flex;flex-direction: row;justify-content: space-between;
}

#viajes{
  width: 80%;margin-left: 20px;border: none;
}
#mapa{
  width: 35%;
  height: 650px;
  margin: 20px;
  -webkit-box-shadow: 8px 9px 10px -8px rgba(0,0,0,0.75);
  -moz-box-shadow: 8px 9px 10px -8px rgba(0,0,0,0.75);
  box-shadow: 8px 9px 10px -8px rgba(0,0,0,0.75);
}
@media (max-width: 992px){
#contenido{
  flex-direction: column;
}

#viajes{
  width: 100%;
  margin: 0px;
}
#mapa{
  width: 100%;
  margin: 0px;
  padding: 10px;

}
}


</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">TripDo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown" style="justify-content: space-between;">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Recomendados</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Viajes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Sugerencias</a>
          <a class="dropdown-item" href="#">Mis Viajes</a>
          <a class="dropdown-item" href="#">Invitar</a>
        </div>
      </li>

    </ul>
    <ul class="navbar-nav" style="    width: 20%;
    display: flex;
    flex-direction: row;
    justify-content: space-around;">
    <li class="nav-item">
    <a href="#registro" data-toggle="modal" data-target="#registro" style="color: white">Registro</a>
      </li>
      <li class="nav-item">
      <a href="#login" data-toggle="modal" data-target="#login" style="color: white">Login</a>
      </li>
      </li>
    </ul>
  </div>

</nav>