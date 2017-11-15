<?php
/* Smarty version 3.1.30, created on 2017-11-15 19:11:42
  from "C:\xampp\htdocs\tp2finb\templates\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0c835e9a93b5_08613665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '766daf288b34f91b314d99cd431207935be5c026' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp2finb\\templates\\register.tpl',
      1 => 1479942184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0c835e9a93b5_08613665 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="">
  <h3>Crear Cuenta</h3>
  <form class="formulario" action="register" method="post">
    <input type="email" name="email" value="" placeholder="E-mail">
    <input type="password" name="pass" value="" placeholder="Contraseña">
    <button type="submit" name="button">Crear</button>
  </form>
</div>
<?php }
}
