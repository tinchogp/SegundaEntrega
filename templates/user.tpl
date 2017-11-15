<div class="row">
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

  </div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    {if ($session==true) && ($privilegios == administrador)}<a class="btn btn-warning consulta_js" name="administrar_usuarios" href="#" rel="adminUser">Administrar Usuarios<span class="sr-only">(Administrar Usuarios)</span></a>{/if}
    {if ($session==false)}<a class="btn btn-success consulta_js" name="mostrar_register" href="#" rel="registrar">Registrar<span class="sr-only">(Registrar)</span></a>{/if}
    {if ($session==false)}<a class="btn btn-success consulta_js" name="mostrar_login" href="#" rel="login">Login<span class="sr-only">(Login)</span></a>{/if}
    {if ($session==true)}<a class="bg-primary consulta_js" name="logout"><button class=" btn btn-danger" name="logout" type="submit">Cerrar Sesión</button></a>{/if}
  </div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

  </div>

</div>
