function deleteProveedor(id)
{

  swal({
    title: "Aviso importante",
    text: "Esta seguro que desea eliminar el id numero "+id,
    icon: "Advertencia",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal("La foto ha sido eliminada exitosamente", {
        icon: "Eliminado con exito",
      });
      var url = "ProveedorControllers.php?action=delete&id="+id;
        location.href = url;
    } 
  });

}


function updateProveedor(id)
{
  var url = "ProveedorControllers.php?action=update&id="+id;
  location.href = url;
}

function mirar(id)
{
  var url = "ProveedorControllers.php?action=mira&id="+id;
  location.href = url;
}

function deleteCliente(id)
{
  swal({
    title: "Aviso importante",
    text: "Esta seguro que desea eliminar el id numero "+id,
    icon: "Advertencia",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal("La informacion ha sido eliminada exitosamente", {
        icon: "Eliminado con exito",
      });
      var url = "ClienteControllers.php?action=delete&id="+id;
        location.href = url;
    } 
  });

}


function updateCliente(id)
{
  var url = "ClienteControllers.php?action=update&id="+id;
  location.href = url;
}

function mirarCliente(id)
{
  var url = "ClienteControllers.php?action=mira&id="+id;
  location.href = url;
}




function deleteProducto(id)
{

swal({
    title: "Aviso importante",
    text: "Esta seguro que desea eliminar el id numero "+id,
    icon: "Advertencia",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal("La informacion ha sido eliminada exitosamente", {
        icon: "Eliminado con exito",
      });
      var url = "ProductoControllers.php?action=delete&id="+id;
        location.href = url;
    } 
  });

}


function updateProducto(id)
{
  var url = "ProductoControllers.php?action=update&id="+id;
  location.href = url;
}

function mirarProducto(id)
{
  var url = "ProductoControllers.php?action=mira&id="+id;
  location.href = url;
}



function deleteUsuario(id)
{

swal({
    title: "Aviso importante",
    text: "Esta seguro que desea eliminar el id numero "+id,
    icon: "Advertencia",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal("El usuario ha sido eliminada exitosamente", {
        icon: "Eliminado con exito",
      });
      var url = "UsuarioControllers.php?action=delete&id="+id;
        location.href = url;
    } 
  });

}

function updateUsuario(id)
{
  var url = "UsuarioControllers.php?action=update&id="+id;
  location.href = url;
}

function deleteFactura(id)
{

swal({
    title: "Aviso importante",
    text: "Esta seguro que desea eliminar la factura "+id,
    icon: "Advertencia",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal("La factura ha sido eliminada exitosamente", {
        icon: "Eliminado con exito",
      });
      var url = "ClientexProductoControllers.php?action=delete&id="+id;
        location.href = url;
    } 
  });

}


function ver(cod_fac)
{
  var url = "ClientexProductoControllers.php?action=ver&cod_fac="+cod_fac;
  location.href = url;
}

