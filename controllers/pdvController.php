<?php

require_once 'models/empleado.php';

class pdvController{
	
	public function index(){
		// renderizar vista
	}

	// METODOS CORRESPONDIENTES A ADMINISTRACION - ALTA/BAJA VIGILANCIA
	public function altabaja_vigilancia() {
		require_once 'views/programa-vigilancia/administracion/alta-baja-vigilancia.php';
	}

	public function obtener_empleados() {
		$empleado = new Empleado();
		$empleados = $empleado->obtener_empleados();

		echo json_encode($empleados);
	}

	public function evaluacion_fisica() {
		require_once 'views/programa-vigilancia/administracion/evaluacion-fisica.php';
	}

	public function subir_resultado() {
		require_once 'views/programa-vigilancia/administracion/subir-resultado.php';
	}

}