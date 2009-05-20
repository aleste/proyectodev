<h1>Usuario List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>Apellido</th>
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sf_guard_user_profile_list as $sf_guard_user_profile): ?>
    <tr>
      <td><a href="<?php echo url_for('usuario/edit?id='.$sf_guard_user_profile->getId()) ?>"><?php echo $sf_guard_user_profile->getId() ?></a></td>
      <td><?php echo $sf_guard_user_profile->getUserId() ?></td>
      <td><?php echo $sf_guard_user_profile->getApellido() ?></td>
      <td><?php echo $sf_guard_user_profile->getNombre() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('usuario/new') ?>">New</a>
