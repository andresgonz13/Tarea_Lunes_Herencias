<?php
class convertir {
public $tasa = 34.88;
	function convertirdolar($montobs) {
		return $montobs / $this->tasa;
	}
}

class Operaciones extends convertir {
    public function sumar($cantidad) {
                return $cantidad + 100;
    }
}

class Saludo {
public $hola = 'Mi nombre es Andres Gonzalez, De T2-INF-1 Sección 1 informatica trayecto 2';
	public function buenas() {
		return $this->hola;
	}
}
?>
