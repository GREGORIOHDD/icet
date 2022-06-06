<?php
    class cuadrado{
        //Atributos
        private $ancho;
        private $largo;
        //Metodos
        public function getAncho(){
            return $this->ancho;
        }
        public function setAncho($val){
            $this->ancho=$val;
        }
        public function getLargo(){
            return $this->largo;
        }
        public function setLargo($val){
            $this->largo=$val;
        }
        public function CalcularArea(){
            return $this->ancho*$this->largo;
        }
        public function CalcularPerimetro(){
            return 2*$this->ancho+2*$this->largo;
        }

    }


    $ancho=0.0;
    $largo=0.0;
    $area=0.0;
    $perimetro=0.0; 

    if(isset($_POST["btnCalcular"])) {

        $ancho=(float)$_POST["txtAncho"];
        $largo=(float)$_POST["txtLargo"];

        $obj = new cuadrado();
        $obj->setAncho($ancho);
        $obj->setLargo($largo);
        
        $area = $obj->CalcularArea();
        $perimetro= $obj->CalcularPerimetro();
    }

    
  
?>
<html>
    <head>

    </head>
    <bady>
        <form method="post" action="practica1.php">
            <table border="1">
                <tr>
                    <td colspan="2">Calculadon el Área y Perímetro de un Cudrado</td>

                </tr>
                <tr>
                    <td>Ancho </td>
                    <td><input name="txtAncho" type="text" id="txtAncho" value="<?=$ancho?>" /></td>
                </tr>
                <tr>
                    <td>Largo </td>
                    <td><input name="txtLargo" type="text" id="txtLargo" value="<?=$largo?>" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input name="btnCalcular" type="submit" id="btnCalcular" value="Calcular" /></td>
                </tr>
                <tr>
                    <td>Área </td>
                    <td><input name="txtArea" type="text" id="txtArea" value="<?=$area?>" /></td>
                </tr>
                <tr>
                    <td>Perímetro </td>
                    <td><input name="txtPerimetro" type="text" id="txtPerimetro" value="<?=$perimetro?>" /></td>
                </tr>


            </table>

        </form>

    </bady>
</html>