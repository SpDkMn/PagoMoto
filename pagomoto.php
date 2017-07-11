<?php 

	if (!defined('_PS_VERSION_'))
		exit;

	class PagoMoto extends Module{

		// Costructor
		public function __contruct(){
			// Nombre del módulo el mismo que la carpeta y la clase
			$this->name = 'pagomoto';

			// Pestaña en la que se encuentra en el backoffice
			$this->tab = '';

			// versión del módulo
			$this->version = '0.0.1';

			// autor del modulo
			$this->auth = '@SpDkMn';

			//Si no necesita cargar la clase en la pagina módulos, 1 si fuese necesario
			$this->need_instance = 0;

			// Las versiones con las que el módulo es compatible.
			$this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);

			// Si usa bootstrap plantilla responsive.
			$this->bootstrap = true;

			// Llamada al contructor padre.
			parent::__construct();

			// Nombre del módulo
			$this->displayName = $this->l('Pago Moto');

			// Descripción del módulo
			$this->description = $this->l('Módulo para los pagos tipo MOTO');

			// Mensaje de alerta al desinstalar el módulo.
			$this->confirmUninstall = $this->l('¿Desea desinstalar el módulo?');
		}

		// Funcion de instalación
		public function install(){
			if(!parent::install || !$this->registerHook('displayTop'))
				return false;
			return true;
		}

		// Funcion de desinstalación
		public function uninstall(){
			if(!parent::uninstall() || !$this->unregisterHook('displayTop') )
				return false;
			return true;
		}

		// Método para mostrar la vista hook[Nombre del hook]
		public function hookDisplayTop(){
			return $this->display(__FILE, 'views/templates/hook/pagomoto.tpl');
		}

	}
 ?>