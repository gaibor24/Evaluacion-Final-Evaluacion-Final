<!-- Crear las pestañas -->
<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
  <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
  <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
</ul>
<!-- Contenido de las pestañas -->
<div class="tab-content">
  <!-- Contenido de la pestaña Inicio -->
  <div class="tab-pane" id="control-sidebar-home-tab">
    <h3 class="control-sidebar-heading">Actividad Reciente</h3>
    <ul class="control-sidebar-menu">
      <li> <a href="javascript::;"> <i class="menu-icon fa fa-birthday-cake bg-red"></i>
        <div class="menu-info">
          <h4 class="control-sidebar-subheading">Cumpleaños de Langdon</h4>
          <p>Cumplirá 23 el 24 de abril</p>
        </div>
        </a> </li>
      <li> <a href="javascript::;"> <i class="menu-icon fa fa-user bg-yellow"></i>
        <div class="menu-info">
          <h4 class="control-sidebar-subheading">Frodo Actualizó Su Perfil</h4>
          <p>Nuevo teléfono +1(800)555-1234</p>
        </div>
        </a> </li>
      <li> <a href="javascript::;"> <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
        <div class="menu-info">
          <h4 class="control-sidebar-subheading">Nora Se Unió a la Lista de Correos</h4>
          <p>nora@example.com</p>
        </div>
        </a> </li>
      <li> <a href="javascript::;"> <i class="menu-icon fa fa-file-code-o bg-green"></i>
        <div class="menu-info">
          <h4 class="control-sidebar-subheading">Trabajo Cron 254 Ejecutado</h4>
          <p>Tiempo de ejecución 5 segundos</p>
        </div>
        </a> </li>
    </ul>
    <!-- /.control-sidebar-menu -->
    <h3 class="control-sidebar-heading">Progreso de Tareas</h3>
    <ul class="control-sidebar-menu">
      <li> <a href="javascript::;">
        <h4 class="control-sidebar-subheading"> Diseño de Plantilla Personalizada <span class="label label-danger pull-right">70%</span> </h4>
        <div class="progress progress-xxs">
          <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
        </div>
        </a> </li>
      <li> <a href="javascript::;">
        <h4 class="control-sidebar-subheading"> Actualizar CV <span class="label label-success pull-right">95%</span> </h4>
        <div class="progress progress-xxs">
          <div class="progress-bar progress-bar-success" style="width: 95%"></div>
        </div>
        </a> </li>
      <li> <a href="javascript::;">
        <h4 class="control-sidebar-subheading"> Integración de Laravel <span class="label label-warning pull-right">50%</span> </h4>
        <div class="progress progress-xxs">
          <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
        </div>
        </a> </li>
      <li> <a href="javascript::;">
        <h4 class="control-sidebar-subheading"> Framework de Back End <span class="label label-primary pull-right">68%</span> </h4>
        <div class="progress progress-xxs">
          <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
        </div>
        </a> </li>
    </ul>
    <!-- /.control-sidebar-menu -->
  </div>
  <!-- /.tab-pane -->
  <!-- Contenido de la pestaña Estadísticas -->
  <div class="tab-pane" id="control-sidebar-stats-tab">Contenido de la Pestaña de Estadísticas</div>
  <!-- /.tab-pane -->
  <!-- Contenido de la pestaña Configuración -->
  <div class="tab-pane" id="control-sidebar-settings-tab">
    <form method="post">
      <h3 class="control-sidebar-heading">Configuraciones Generales</h3>
      <div class="form-group">
        <label class="control-sidebar-subheading"> Uso del panel de informes
        <input type="checkbox" class="pull-right" checked>
        </label>
        <p> Información sobre esta opción de configuración general </p>
      </div>
      <!-- /.form-group -->
      <div class="form-group">
        <label class="control-sidebar-subheading"> Permitir redirección de correo
        <input type="checkbox" class="pull-right" checked>
        </label>
        <p> Otros conjuntos de opciones están disponibles </p>
      </div>
      <!-- /.form-group -->
      <div class="form-group">
        <label class="control-sidebar-subheading"> Exponer el nombre del autor en las publicaciones
        <input type="checkbox" class="pull-right" checked>
        </label>
        <p> Permitir al usuario mostrar su nombre en las publicaciones del blog </p>
      </div>
      <!-- /.form-group -->
      <h3 class="control-sidebar-heading">Configuraciones de Chat</h3>
      <div class="form-group">
        <label class="control-sidebar-subheading"> Mostrarme como en línea
        <input type="checkbox" class="pull-right" checked>
        </label>
      </div>
      <!-- /.form-group -->
      <div class="form-group">
        <label class="control-sidebar-subheading"> Apagar notificaciones
        <input type="checkbox" class="pull-right">
        </label>
      </div>
      <!-- /.form-group -->
      <div class="form-group">
        <label class="control-sidebar-subheading"> Eliminar historial de chat <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a> </label>
      </div>
      <!-- /.form-group -->
    </form>
  </div>
  <!-- /.tab-pane -->
</div>
