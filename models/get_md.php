<?php
    class Get_Model{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }

        public function Get_scheduleTime(){
            $consult = $this->conexion->query("CALL SP_Get_scheduleTime()");
            return $consult;
        }

    }
?>