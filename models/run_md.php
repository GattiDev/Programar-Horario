<?php
    class Run_Model{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }

        public function Run_showData(){
            $consult = $this->conexion->query("CALL SP_Run_showData()");
            return $consult;
        }

        public function Run_scheduleTime(){
            $consult = $this->conexion->query("CALL SP_Run_scheduleTime()");
            return $consult;
        }

    }
?>