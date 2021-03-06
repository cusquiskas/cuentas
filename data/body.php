    <div class="col-sm-3 sidenav">
      <?php 
	switch ($Enlace->getEnlace()) {
	case 'GestionaEtiqueta': 
	case 'GestionaTarjetas':
	case 'EliminaMovimiento':
	case 'GestionaPiso':
	case 'GestionaPropietario':
		require_once('menu/maestros.php');
	break;
	case 'GestionaMovimiento':
	case 'CreaRecordatorio':
	case 'CargaMovimento':
	case 'AsignaEtiqueta':
	case 'AsignaEtiquetaSplit':
	case 'CambiaNombre':
    case 'Split':
    case 'ListadoMovimiento':
	  require_once('menu/totales.php');
	break;
	case 'VerEstadistica':
          require_once('menu/estadistica.php');
        break;
	}
      ?>
    </div>

    
    <div class="col-sm-9 text-left"> 
     <?php 
      switch ($Enlace->getEnlace()) {
       case 'GestionaEtiqueta': 
       	require_once('pantallas/etiquetas.php');
        break;
       case 'GestionaTarjetas': 
       	require_once('pantallas/tarjetas.php');
       	break;
       case 'GestionaPiso':
       	require_once('pantallas/piso.php');
       	break;
       case 'GestionaPropietario':
       	require_once('pantallas/propietario.php');
       	break;
       case 'EliminaMovimiento': 
       	require_once('pantallas/registro.php');
       	break;
       case 'GestionaMovimiento':
       case 'CreaRecordatorio':
       case 'CargaMovimento':
       case 'AsignaEtiqueta':
       case 'AsignaEtiquetaSplit':
       case 'CambiaNombre':
       case 'Split':
       case 'ListadoMovimiento': 
       	require_once('pantallas/listado.php');
        break;
       case 'VerEstadistica': 
       	require_once('pantallas/estadistica.php');
        break;
      }
     ?>
    </div>
