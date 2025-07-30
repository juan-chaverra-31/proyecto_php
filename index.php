<?php include "layout/layout.php"?>


  <!-- Carrusel -->
  <div id="carrusel" class="carousel slide mt-3" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="d-flex justify-content-center">
          <img src="img/League Nations.jpg" class="d-block w-90" width="20%" alt="Ronaldo 1">
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex justify-content-center">
          <img src="img/Eurocopa.jpg" class="d-block w-90" width="20%" alt="Ronaldo 2">
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex justify-content-center">
          <img src="img/Champions.jpg" class="d-block w-90" width="25%" alt="Ronaldo 3">
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex justify-content-center">
          <img src="img/Balon De Oro.jpg" class="d-block w-90" width="20%" alt="Ronaldo 4">
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carrusel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carrusel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">next</span>
    </button>
  </div>

      <!-- Video Cristiano -->
  <section id="video" class="container text-center mb-5">
    <h2>Momentos Legendarios</h2>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 TABLA
</button>

   
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

     
      <table class="table table-dark">
      <thead>
        
        <tr>
          <th scope="col">id</th>
          <th scope="col">nombre</th>
          <th scope="col">apellido</th>
          <th scope="col">edad</th>
          <th scope="col">correo</th>
          <th scope="col">telefono</th>
          <th scope="col">editar</th>
          <th scope="col">eliminar</th>
        </tr>
        </thead>
      <?php
include_once "controller/conexion.php";
$conexion = new Conexion();
$conexion = $conexion->conectar();
if ($conexion){
  $sql = "SELECT * FROM registropersonas";
  $consulta = $conexion->prepare($sql);
  $consulta->execute();
  $i = 0;
  while($fila = $consulta-> fetch (PDO::FETCH_ASSOC)){
    $i += 1;
  
  

?>


  <tbody>
    <tr>
    <th scope="row"><?php $i ?></th>
	 
   <td><?php echo $fila["Nombre"]; ?></td>
   <td><?php echo $fila["Apellido"]; ?></td>
   <td><?php echo $fila["Edad"]; ?></td>
   <td><?php echo $fila["Correo"]; ?></td>
   <td><?php echo $fila["Telefono"]; ?></td>
   <td><a  href="update.php" type="button" class="btn btn-success"> editar </a></td>
   <td></td>
      
  
    </tr>
    
  </tbody> 

  <?php



  }}
  else {
    echo "error al conectar la base de datos";
  }

  ?>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <div class="ratio ratio-16x9">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/ttDbSrXnCH4?si=orY7UWFEtjNT-ZJt" title="Cristiano" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
  </section>



  <!-- Dos columnas -->
  <section class="container mb-5">
    <div class="row">
      <div class="col-md-6">
        <h3>Carrera</h3>
        <p>Cristiano comenzo su carrera en el sporting de lisboa, luego tuvo un gran paso por el Manchester United completando una era 
          dorada con el sr alexs ferguson se conviertio en leyenda del real madrid ganando 4 champions 3 de manera seguida actualmente
          es jugador del al nassar y sigue demostrando que la edad es solo un numero con su seleccion es el maximo goleador ganando 3
          titulos nacionales con su pais 1 eurocopa y 2 Nations league
        </p>
      </div>
      <div class="col-md-6">
        <h3>Titulos profesionales</h3>
        <ul>
          <li>5 balones de Oro</li>
          <li>5 champions league</li>
          <li>Maximo Goleador del Real Madrid</li>
          <li>Eurocopa 2016</li>
          <li>2 Nations League 2019 - 2025</li>
          <li>Maximo goleador historico de la liga de campeones de la UEFA</li>
          <li>Primer jugador en marcar en cicnco copas del mundo diferentes</li>
        </ul>
      </div>
    </div>
  </section>

    <!-- Tabla de estadísticas -->
    <section id="estadisticas" class="container my-5">
      <h2 class="text-center mb-4">Estadísticas de Ronaldo</h2>
      <table class="table table-striped table-bordered text-center">
        <thead class="table-dark">
          <tr>
            <th>Equipos</th>
            <th>Goles</th>
            <th>Asistencias</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Manchester United</td><td>145</td><td>63</td></tr>
          <tr><td>Real Madrid</td><td>450</td><td>131</td></tr>
          <tr><td>Al Nassr</td><td>99</td><td>27</td></tr>
        </tbody>
      </table>
    </section>

     
    <!-- Formulario centrado -->
    <form action="controller/registro.php" method="POST">

    <div class="container">
    <h3 class="text-center mb-4">Formulario Registro</h3>
 
          <div class="row">
            <div class="col">
            <label for="Name" class="">ID</label>
          <input type="text" class="form-control" id="Name" placeholder="Ingrese el id" name="id">
            </div>
            <div class="col">
            <label fot="Nombre" class="">Nombre</label>
          <input type="text" class="form-control" id="Name" placeholder="Ingrese el Nombre" name="nombre">
            </div>
          </div>
         
       <div class="row">  
        <div class="col">
        <label fot="Apellido" class="Form-label">Apellido</label>
          <input type="text" class="form-control" id="Name" placeholder="Ingrese el apellido" name="apellido">
        </div>
        <div class="col">

        <label fot="Apellido" class="Form-label">Edad</label>
          <input type="text" class="form-control" id="Name" placeholder="Ingrese la edad" name="edad">
        </div>
       </div>
         
          <div class="row">
            <div class="col">
            <label fot="Apellido" class="Form-label">correo</label>
          <input type="email" class="form-control" id="Name" placeholder="Ingrese el correo" name="correo">
            </div>
        <div class="col">
        <label fot="Apellido" class="Form-label">Telefono</label>
          <input type="text" class="form-control" id="Name" placeholder="Ingrese el telefono" name="telefono">

          </div>
       </div>

       <div class="row">
  <div class="col text-center">
    <button class="btn btn-info" type="submit">Enviar</button>
  </div>
</div>
  
         
  </div>
  </div>
<form>

 
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/modal.js"></script>
</body>
</html>