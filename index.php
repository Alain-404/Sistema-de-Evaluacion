<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Portal</title>
    <link rel="stylesheet" href="css/bootstrap.css">
     
  </head>
  <body>
 
  <nav class="navbar navbar-inverse bg-inverse navbar-toggleable-sm sticky-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.html">
       Sistema de Evaluaciones
    </a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <div class="navbar-nav mr-auto ml-auto text-center">
      <a class="nav-item nav-link active" href="index.html">Clases</a>
      <a class="nav-item nav-link" href="#">Evaluaciones</a>
      <a class="nav-item nav-link" href="#">Panel de progreso</a>
      <a class="nav-item nav-link" href="#">Acerca de</a>
    </div>
    <div class="d-flex flex-row justify-content-center">
      <a href="#" class="btn btn-outline-primary mr-2">Cuenta</a>
    </div>
    </div>
  </nav>

<br>

  <!--  card -->
  <section class="card-deck mb-3 text-center">

    <a href="#" style="margin: 5px"><div class="card text-black bg-dark mb-3" style="max-width: 18rem;">
      <div class="card-header">Nombre Clase</div>
      <div class="card-body">
        <img src="images/aula.jpg">
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Ver Clase</button>
      </div>
      </div>
    </a>

    <a href="#" style="margin: 5px"><div class="card text-black bg-dark mb-3" style="max-width: 18rem; padding: 3px">
      <div class="card-header">Nombre Clase</div>
      <div class="card-body">
        <img src="images/aula.jpg">
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Ver Clase</button>
      </div>
      </div>
    </a>

    <a href="#" style="margin: 5px"><div class="card text-black bg-dark mb-3" style="max-width: 18rem; padding: 3px">
      <div class="card-header">Nombre Clase</div>
      <div class="card-body">
        <img src="images/aula.jpg">
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Ver Clase</button>
      </div>
      </div>
    </a>
    <a href="#" style="margin: 5px"><div class="card text-black bg-danger  mb-3" style="max-width: 18rem; padding: 3px">
      <div class="card-header">Nombre Clase</div>
      <div class="card-body">
        <img src="images/aula.jpg">
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Ver Clase</button>
      </div>
      </div>
    </a>
    <a href="#" style="margin: 5px"><div class="card text-black bg-dark mb-3" style="max-width: 18rem; padding: 3px">
      <div class="card-header">Nombre Clase</div>
      <div class="card-body">
        <img src="images/aula.jpg">
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Ver Clase</button>
      </div>
      </div>
    </a>


     <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Clase de Prueba</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body">
                <p>Aqui informacion de la clase</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
          </div>
        </div>
      </div>


 </section>
  
  <!-- Footer -->
  <footer class="container-fluid bg-inverse" style="position: fixed; width: 100%; color: white">
    <div class="">
     <h3 style="color: white;">Evaluaciones Pendientes</h3>
     <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Curso</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Fecha de Evaluacion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Curso Eval 1</td>
      <td>Aqui una descripcion del curso</td>
      <td>17/07/2020</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Curso Eval 2</td>
      <td>Aqui una descripcion del curso</td>
      <td>17/07/2020</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Curso Eval 3</td>
      <td>Aqui una descripcion del curso</td>
      <td>17/07/2020</td>
    </tr>
  </tbody>
</table>   
    </div>
  </footer>
    
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>