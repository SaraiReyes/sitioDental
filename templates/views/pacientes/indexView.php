<?php require_once INCLUDES.'inc_header.php'; ?>
<?php require_once INCLUDES.'inc_navbar.php'; ?>

  <!-- tabla de pacientes -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="mb-4">Todos los pacientes</h2>
        
        <div class="card">
          <div class="card-header">Lista de pacientes</div>
          <div class="card-body table-responsive">
            <table class="table table-hover table-striped table-borderless">
              <thead>
                <th>Número</th>
                <th>Nombre completo</th>
                <th>Sexo</th>
                <th>Fecha</th>
                <th>Status</th>
                <th></th>
              </thead>
              <tbody>
                <tr>
                  <td>012032</td>
                  <td>Pancho Doe</td>
                  <td>Masculino</td>
                  <td>12 de Agosto</td>
                  <td>Revisado</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="fas fa-eye"></i> Ver</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-laptop-medical"></i> Revisar</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-check"></i> Terminado</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-trash"></i> Borrar</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>856322</td>
                  <td>María Doe</td>
                  <td>Femenino</td>
                  <td>12 de Agosto</td>
                  <td>Pendiente</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="fas fa-eye"></i> Ver</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-laptop-medical"></i> Revisar</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-check"></i> Terminado</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-trash"></i> Borrar</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ends contenido -->

  <?php require_once INCLUDES.'inc_footer.php'; ?>