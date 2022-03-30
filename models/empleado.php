<?php

class Empleado{

	private $id;
	private $folio;
	private $nombre;
	private $apellido_paterno;
	private $apellido_materno;
	private $fecha_nacimiento;
	private $turno;
	private $planta;
	private $departamento;
	private $vigilancias;
	private $db;
	
	public function __construct() {
		$this->db = Database::connect();
	}
	
	function getId() {
		return $this->id;
	}

	function getNombre() {
		return $this->nombre;
	}

	function getAPaterno() {
		return $this->apellido_paterno;
	}

	function getAMaterno() {
		return $this->apellido_paterno;
	}

	function getTurno() {
		return $this->turno;
	}

	function getPlanta() {
		return $this->planta;
	}

	function getVigilancias() {
		return $this->vigilancias;
	}

	function setId($id) {
		$this->id = $id;
	}

	function setNombre($nombre) {
		$this->nombre = $this->db->real_escape_string($nombre);
	}

	function setAPaterno($apellido_paterno) {
		$this->apellido_paterno = $this->db->real_escape_string($apellido_paterno);
	}

	function setAMaterno($apellido_materno) {
		$this->apellido_materno = $this->db->real_escape_string($apellido_materno);
	}

	function setTurno($turno) {
		$this->turno = $this->db->real_escape_string($turno);
	}

	function setPlanta($planta) {
		$this->planta = $this->db->real_escape_string($planta);
	}

	function setVigilancias($vigilancias) {
		$this->vigilancias = $vigilancias;
	}

	public function obtener_empleados(){
	
		$query = "SELECT wwid,nombre,turno,vigilancias,'X' as acciones FROM empleados";
		$stmt = $this->db->prepare($query);
		$stmt->execute();

		$empleados = array();

		/*$acciones = '<i class="fa-regular fa-pen-to-square"></i>';
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		      $empleados['data'][] = $row;
		}*/


		return $stmt->fetchAll();
	}
	
}