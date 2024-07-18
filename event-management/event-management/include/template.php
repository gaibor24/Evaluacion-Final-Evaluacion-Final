<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$self = WEB_ROOT . 'admin/index.php';
?>
<!DOCTYPE html>
<html>
<head>
<?php include('head.php'); ?>
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo WEB_ROOT; ?>" class="logo">
    <!-- logo mini para la barra lateral de 50x50 píxeles -->
    <span class="logo-lg"><b>Gestión de Eventos</b></span> </a>
    <!-- Barra de navegación del encabezado: el estilo se puede encontrar en header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <?php include('nav.php'); ?>
    </nav>
  </header>
  <!-- Columna del lado izquierdo. Contiene el logo y la barra lateral -->
  <aside class="main-sidebar">
    <?php include('sidebar.php'); ?>
  </aside>
  <!-- Contenido principal. Contiene el contenido de la página -->
  <div class="content-wrapper">
    <!-- Encabezado del contenido (encabezado de la página) -->
    <section class="content-header">
      <h1> Gestión de Eventos <small>administra tus eventos fácilmente.</small> </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Calendario</li>
      </ol>
    </section>
    <!-- Contenido principal -->
    <section class="content">
      
      <div class="row">
        <div class="col-md-12">
          <?php include('messages.php'); ?>
        </div>
      </div>
      
      <div class="row">
        <?php
          require_once $content;
        ?>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <?php include('footer.php'); ?>
  </footer>
</div>
<!-- ./wrapper -->
</body>
</html>
