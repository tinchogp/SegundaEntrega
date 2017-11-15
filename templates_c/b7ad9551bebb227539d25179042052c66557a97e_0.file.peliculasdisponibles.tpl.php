<?php
/* Smarty version 3.1.30, created on 2017-11-15 18:56:43
  from "C:\xampp\htdocs\tp2finb\templates\peliculasdisponibles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0c7fdbd91970_58664564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7ad9551bebb227539d25179042052c66557a97e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp2finb\\templates\\peliculasdisponibles.tpl',
      1 => 1479942184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0c7fdbd91970_58664564 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Peliculas Disponibles</h1>
<ul class="list-group">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peliculas']->value, 'pelicula', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['pelicula']->value) {
?>
  <li>
    <a class="peliculaElegida" href="#" name="pelicula" data="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
"><h2><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['titulo'];?>
</h2></a>
  </li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>

<?php if (($_smarty_tpl->tpl_vars['session']->value == true) && ($_smarty_tpl->tpl_vars['privilegios']->value == 'administrador')) {?>
<h2>Agregar Pelicula</h2>
<form class="formulario" action="agregar_pelicula" method="post" enctype="multipart/form-data">
  <input type="text" name="titulo"  required value="" placeholder="Titulo">
  <input type="text" name="duracion"  required value="" placeholder="duracion">
  <div class="">Genero:
    <select class="form-control"  name="genero">
      <option value="">Elegir Genero</option>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_genero'];?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value['genero'];?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </select>
  </div>
  <textarea class="form-control" rows="8" type="text" name="descripcion" required value="" placeholder="descripcion"></textarea>
  <input type="file" name="imagenes[]" required value="" multiple>
  <input type="submit" name="Agregar" value="Agregar Pelicula" id="agregarPelicula">
</form>
<?php }
}
}
