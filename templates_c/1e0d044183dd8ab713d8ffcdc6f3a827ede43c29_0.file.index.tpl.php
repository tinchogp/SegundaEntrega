<?php
/* Smarty version 3.1.30, created on 2017-11-15 18:56:42
  from "C:\xampp\htdocs\tp2finb\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0c7fda1fc680_16857702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e0d044183dd8ab713d8ffcdc6f3a827ede43c29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp2finb\\templates\\index.tpl',
      1 => 1479942184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a0c7fda1fc680_16857702 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Ver/Ocultar Menú</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a class="navegacion" href="#" name="mostrar_home" >Cinema False<span class="sr-only">(Cinema False)</span></a></li>
          <li><a class="navegacion" href="#" name="mostrar_peliculas_disponibles" >Peliculas Disponibles<span class="sr-only">(Peliculas Disponibles)</span></a></li>
          <li><a name="mostrar_genero" href="#" class="navegacion" >Peliculas por Genero<span class="sr-only">(Peliculas por Genero)</span></a></li>
          <li><a name="mostrar_horarios_por_sala" href="#" class="navegacion" >Horarios por Sala<span class="sr-only">(Horarios por Sala)</span></a></li>
          <li><a name="mostrar_contacto" href="#" class="navegacion" >Contacto<span class="sr-only">(Contacto)</span></a></li>
          

        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <article class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <article id="js-pisar">

        </article>

      </div>
    </div>
  </article>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
