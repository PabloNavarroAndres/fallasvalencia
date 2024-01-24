<?php 

	// establecer la caducidad de la caché a 0 minutos para poder trabajar con variables de sesión
	session_cache_expire(0);
	
	// se inicializa la sesión de usuario
	session_start();

	try {	
	
		// limpiamos el error de autenticación si lo hubiere.
		//if (isset($_SESSION['errorAutenticacion'])) unset($_SESSION['errorAutenticacion']);

		// si no se ha recibido todavía la petición de acceso se lanza al login
		//if (!isset($_POST['login'])) throw new Exception('');

		// se incluye el controlador
		include_once ("controlador/Controlador.php");

		// se inicializa el controlador de acceso
		$c = new Controlador();

		// se solicita autenticación para el usuario
		//$c->autenticarUsuario($_POST['login'], $_POST['password']);

		// si la clave de usuario es correcta se guarda en la variable de sesión
		$_SESSION['usuario'] = 'Anónimo';

		// se guarda también el rol del usuario
		$_SESSION['rol'] = 'escritor';

		// se crea el instante actual
		$instanteConexion = new DateTime();

		// se guarda el instante en que se ha logeado
		$_SESSION['instanteConexion'] = $instanteConexion->getTimeStamp();

		// en caso de éxito se solicita al controlador preparar la vista de usuario
		$arrTiempoConexion = $c->prepararUsuario();

		// se despliega la vista de usuario
		require 'vista/VistaUsuario.php';

	} catch (Exception $e){

		// se guarda el error de autenticación
		$_SESSION['errorAutenticacion'] = $e->getMessage();

		// se renderiza el login
		require 'vista/VistaLogin.php';	
	}


	
?>