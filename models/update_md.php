<?php
    class Update_Model{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }

        public function Update_scheduleTime($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $data10, $data11, $data12){
            $consult = $this->conexion->query("CALL SP_Update_scheduleTime('$data1', '$data2', '$data3', '$data4', '$data5', '$data6', '$data7', '$data8', '$data9', '$data10', '$data11', '$data12')");
            return $consult;
        }
   
        public function Update_showData($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $data10){
            $consult = $this->conexion->query("CALL SP_Update_showData('$data1', '$data2', '$data3', '$data4', '$data5', '$data6', '$data7', '$data8', '$data9', '$data10')");
            return $consult;
        }
    }
?>