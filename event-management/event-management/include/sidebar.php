<!-- sidebar: el estilo se puede encontrar en sidebar.less -->
<section class="sidebar">
  <ul class="sidebar-menu">
    <li class="header">NAVEGACIÓN PRINCIPAL</li>
    <li class="treeview"> 
      <a href="<?php echo WEB_ROOT; ?>views/?v=DB"><i class="fa fa-calendar"></i><span>Calendario de Eventos</span></a>
    </li>
    <li class="treeview"> 
      <a href="<?php echo WEB_ROOT; ?>views/?v=LIST"><i class="fa fa-newspaper-o"></i><span>Reserva de Eventos</span></a>
    </li>
    <li class="treeview"> 
      <a href="<?php echo WEB_ROOT; ?>views/?v=USERS"><i class="fa fa-users"></i><span>Detalles de Usuarios</span></a>
    </li>
    <?php 
    $type = $_SESSION['calendar_fd_user']['type'];
    if($type == 'admin') {
    ?>
    <li class="treeview"> 
      <a href="<?php echo WEB_ROOT; ?>views/?v=HOLY"><i class="fa fa-plane"></i><span>Días Festivos</span></a>
    </li>
    <?php
    }
    ?>
  </ul>
</section>
<!-- /.sidebar -->
