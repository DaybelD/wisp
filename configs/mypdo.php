<?php
const myPDO_RET_RES = 0;
const myPDO_SHOW_ALL = 1;
const myPDO_SHOW_ROW = 2;

/**
 * Clase que envuelve a PDO
 */
class myPDO {
	private $_pdo;

	private $_pdoResultado;

	function __construct(
		$host = 'localhost',
		$dbname = '',
		$user = '',
		$pass = '',
		$options = []) {
		try {
			$this->_pdo = new PDO(
				"mysql:host={$host};dbname={$dbname}",
				$user,
				$pass,
				$options
			);
		} catch (PDOException $e) {
			echo "Error myPDO: " . $e->getMessage();
			die();
		}
	}

	function disconnect() {
		$this->_pdoResultado->closeCursor();
		$this->_pdoResultado = null;
		$this->_pdo = null;
	}

	function exe(
		$query = '',
		$return_rows = 0,
		$array_valores = [],
		$array_tipos = []
	) {
		$this->_pdoResultado = $this->_pdo->prepare($query);
		foreach ($array_valores as $posicion => &$valor) {
			$tipo_var = 'STR' == $array_tipos[$posicion] ? PDO::PARAM_STR : PDO::PARAM_INT;
			$this->_pdoResultado->bindParam($posicion + 1, $valor, $tipo_var);
		}
		$result = $this->_pdoResultado->execute();
		switch ($return_rows) {
		case myPDO_RET_RES:
			return $result;
			break;
		case myPDO_SHOW_ALL:
			return $this->_pdoResultado->fetchAll(PDO::FETCH_ASSOC);
			break;
		case myPDO_SHOW_ROW:
			return $this->_pdoResultado->fetch(PDO::FETCH_ASSOC);
			break;
		}
	}

	function lastInsertId() {
		return $this->_pdo->lastInsertId();
	}

	function mostrar_error() {
		$array = $this->_pdoResultado->errorInfo();
		var_dump($array);
	}

	/**
	 * Ejecuta la instrucción sql y devuelve un array con los resultados
	 * @param  string $sql     Instrucción
	 * @param  array  $valores Valores que sustituyen los '?' en la instrucción sql
	 * @param  array  $tipo    Tipos de datos para las variables
	 * @return array           Datros devueltos en array asociativo
	 */
	function sql2array(string $sql, $valores = [], $tipo = []) {
		return $this->exe($sql, 1, $valores, $tipo);
	}

	function sql2row(string $sql, $valores = [], $tipo = []) {
		return $this->exe($sql, 2, $valores, $tipo);
	}

/**
 * Ejecuta la instrucción sql y devuelve un valor
 * @param  string $sql     Instrucción
 * @param  array  $valores Valores que sustituyen los '?' en la instrucción sql
 * @param  array  $tipo    Tipos de datos para las variables
 * @return mixed           Dato devuelto
 */
	function sql2value(string $sql, $valores = [], $tipo = []) {
		return array_values($this->exe($sql, myPDO_SHOW_ROW, $valores, $tipo))[0];
	}

	/**
	 * Ejecuta la instrucción sql y devuelve un array con paras clave, valor
	 * @param  string $sql     Instrucción
	 * @param  array  $valores Valores que sustituyen los '?' en la instrucción sql
	 * @param  array  $tipo    Tipos de datos para las variables
	 * @return array           Datros devueltos en array asociativo
	 */
	function sql2options(string $sql, $valores = [], $tipo = []) {
		$temp = $this->exe($sql, 1, $valores, $tipo);
		$salida = [];
		foreach ($temp as $value) {
			$z = array_values($value);
			$salida[$z[0]] = $z[1];
		}
		return $salida;
	}

	/**
	 * Devuelve los valores del campo de tipo ENUM dado
	 * @param  string $tabla Nombre de la tabla donde se encuentra el campo ENUM
	 * @param  string $campo El campo de tipo ENUM
	 * @return Array        Array asociativo con los valores del campo tipo ENUM
	 */
	function enum(string $tabla, string $campo) {
		$niveles = $this->sql2array("show columns from {$tabla} where Field='{$campo}'");
		$niveles = explode('\',\'', substr($niveles[0]['Type'], 6, -2));
		return array_combine($niveles, $niveles);
	}
}