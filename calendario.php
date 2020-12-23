<?php
    function linha($semana)
    {
        return "
            <tr>
                <td>{$semana[0]}</td>
                <td>{$semana[1]}</td>
                <td>{$semana[2]}</td>
                <td>{$semana[3]}</td>
                <td>{$semana[4]}</td>
                <td>{$semana[5]}</td>
                <td>{$semana[6]}</td>
            </tr>
        ";
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
?>




<table border ="1">
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