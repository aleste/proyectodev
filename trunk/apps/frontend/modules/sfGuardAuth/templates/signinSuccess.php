<div class="loginContainer">
    <div class='loginShell'>
    <h1 style='text-align: left;padding-left: 180px;'><?php echo __('Ingreso al Sistema'); ?></h1>
      <div class='left'>
        <?php echo __('Por favor, complete los datos para ingresar al Sistema');?><br/>
        <span class="notes">
          <?php echo link_to(__('Recuperar Contraseña'), '@sf_guard_password', array('id' => 'sf_guard_auth_forgot_password'))
      ?>
        </span>
      </div>

     <div class='right'>
        <form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
        <table>
            <?php echo $form ?>
        </table>
          <input type="submit" value="Ingresar" class="btn big"/>
    </form>
    </div>

    </div>
</div>


