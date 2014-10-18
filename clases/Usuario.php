<?php
class Usuario{

	private $name;

	public function getUsuario(){
		echo"<br> Mostrar usuario: ".$this->name;
	}

	public function setUsuario(){
		$this->name="BER";
		return $this->name;
	}
	 public function reporteUsuario(){
      
        $sql="SELECT * FROM  usuario where estatus='1' order by id desc ";
        $consulta=mysql_query($sql) or die("NO");
        echo"<div class=table-responsive>";
        echo"<table class=\"table table-striped\">";
        echo"<tr><td colspan=5 align=Center><strong>Lista de Usuarios</strong> </td></tr>";
        echo"<tr><th>Clave</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Nivel</th></tr>";
        while($field=mysql_fetch_array($consulta)){
            $this->id=$field['id'];
            $this->nombre=$field['nombre'];
            $this->app=$field['apellido_pat'];
            $this->apm=$field['apellido_mat'];
            $this->nivel=$field['nivel'];
            switch($this->nivel){
                case 1:
                    $nivel="Administrador";
                    break;
                case 2:
                    $nivel="Maestro";
                    break;
             case 3:
                     $nivel="Alumno";
                    break;
            }
            echo"<tr><td>$this->id</td><td>$this->nombre</td><td>$this->app</td><td>$this->apm</td><td>$nivel</td></tr>";

        }
        echo"</table></div>";
    }

}
?>