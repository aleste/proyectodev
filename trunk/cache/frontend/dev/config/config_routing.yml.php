<?php
// auto-generated by sfRoutingConfigHandler
// date: 2009/05/15 16:06:13
return array(
'homepage' => new sfRoute('/', array (
  'module' => 'principal',
  'action' => 'index',
), array (
), array (
)),
'loginpage' => new sfRoute('/', array (
  'module' => 'default',
  'action' => 'index',
), array (
), array (
)),
'default_index' => new sfRoute('/:module', array (
  'action' => 'index',
), array (
), array (
)),
'default' => new sfRoute('/:module/:action/*', array (
), array (
), array (
)),
'sf_guard_signin' => new sfRoute('/login', array (
  'module' => 'sfGuardAuth',
  'action' => 'signin',
), array (
), array (
)),
'sf_guard_signout' => new sfRoute('/logout', array (
  'module' => 'sfGuardAuth',
  'action' => 'signout',
), array (
), array (
)),
'sf_guard_password' => new sfRoute('/request_password', array (
  'module' => 'sfGuardAuth',
  'action' => 'password',
), array (
), array (
)),
);
