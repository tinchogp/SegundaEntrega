<?php
/* Smarty version 3.1.30, created on 2017-11-15 19:00:21
  from "C:\xampp\htdocs\tp2finb\templates\contacto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0c80b5b868c9_97117208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd663500c674ba9b0048564cb7ed22bb29ae35aef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp2finb\\templates\\contacto.tpl',
      1 => 1479942184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0c80b5b868c9_97117208 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
<h2>Envienos Su Mensaje</h2>
    <form class="formulario" action="enviar_mensaje" method="post" enctype="multipart/form-data">
      <input type="text" name="nombreyapellido"  required value="" placeholder="Nombre y Apellido">
      <input type="text" name="email"  required value="" placeholder="Email">
      <textarea class="form-control" rows="8" type="text" name="mensaje" required value="" placeholder="Mensaje"></textarea>
      <input type="submit" name="Enviar" id="enviarMensaje">
    </form>
</div>

<?php if (($_smarty_tpl->tpl_vars['session']->value == true) && ($_smarty_tpl->tpl_vars['privilegios']->value == 'administrador')) {?>
<div class="js-visibilidad">
<h1>Mensajes Recibidos</h1>
<table class="table">
  <thead>
    <tr>
      <th>Nombre y Apellido</th>
      <th>Email</th>
      <th>Mensaje</th>
      <th>Configuracion</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contactos']->value, 'contacto', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['contacto']->value) {
?>
      <tr>
        <td>
          <?php echo $_smarty_tpl->tpl_vars['contacto']->value['nombreyapellido'];?>

        </td>
        <td>
          <?php echo $_smarty_tpl->tpl_vars['contacto']->value['email'];?>

        </td>
        <td>
          <?php echo $_smarty_tpl->tpl_vars['contacto']->value['mensaje'];?>

        </td>
        <td>
          <a class="consulta_js" href="#" name="eliminar_mensaje" data="<?php echo $_smarty_tpl->tpl_vars['contacto']->value['id_contacto'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
        </td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </tbody>
</table>
</div>
<?php }
}
}
