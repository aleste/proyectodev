
<div id="footer-inner">
  <?php echo mail_to('sistemas@pepe.gov', 'Departamento de Sistemas', 'title="' . __('Departamento de Sistemas') . '"').' | ' ?>
  Usuario Activo: <b> <?php  echo $sf_user->getProfile()->getNombreCompleto() ?></b> |  <?php echo sfDate::getInstance()->firstDayOfWeek()->addWeek()->date() ?>

</div>


