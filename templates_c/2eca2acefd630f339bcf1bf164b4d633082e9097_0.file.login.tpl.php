<?php
/* Smarty version 3.1.30, created on 2017-11-15 19:11:21
  from "C:\xampp\htdocs\tp2finb\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0c834988b3c2_44574984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2eca2acefd630f339bcf1bf164b4d633082e9097' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp2finb\\templates\\login.tpl',
      1 => 1479942184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0c834988b3c2_44574984 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="">
  <h3>Log In</h3>
  <form class="formulario" action="mostrar_login" method="post">
    <div class="form-group">
      <input type="email" name="email" value="" placeholder="Email">
      <input type="password" name="pass" value="" placeholder="Contraseña">
      <button type="submit" name="button">Log In</button>
      <?php if ($_smarty_tpl->tpl_vars['error']->value == true) {?>
      <h2>Error</h2>
      <?php }?>
    </div>
  </form>
</div>
<?php }
}
