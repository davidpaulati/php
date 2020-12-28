<?php
    function linha($semana)
    {
        $linha = '<tr>';
        for($i = 0; $i <= 6; $i++) {
            if(array_key_exists($i, $semana)){
                $linha .= "<td>{$semana[$i]}</td>";
            } else {
                $linha .= "<td></td>";
            }
        }
        $linha .= '<tr>';

        return $linha;
    }



    function calendario()
    {
        $calendario = '';
        $dia = 1;
        $semana = [];
        while ($dia <= 31){
            array_push($semana, $dia);

            if (count($semana)== 7){
                $calendario .= linha($semana);
                $semana = [];
            }

            $dia++;
        }
        $calendario .= linha($semana);
        return $calendario;
    }
    
    function saudacao()
    {
        $hora = date(" H ");
        if($hora >= 12 && $hora <18){
            $resposta ="Boa tarde";
        }
        else if ($hora >=0 && hora < 12){
            $resposta  ="Bom dia";
        }
        else{
            $resposta  ="Boa Noite";
        }
        echo $resposta;
    }

    function hora()
    {
        $hora = date('H:i:s');
        echo $hora;
    }

    function dia(){
       $dia = date('d/m/y');
       echo $dia;
    }
?>




<table border ="1">
    <?php echo dia();?>
    <?php echo hora();?>
    <?php echo saudacao();?>
    <tr>
        <th>Dom</th>
        <th>Seg</th>
        <th>Ter</th>
        <th>Qua</th>
        <th>Qui</th>
        <th>Sex</th>
        <th>Sab</th>
    </tr>
    <?php echo calendario(); ?>
</table>