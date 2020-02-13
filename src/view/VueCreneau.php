<?php
namespace crazycharlyday\vue;

class VueCreneau extends Vue
{
    public function render($sel)
    {
        $head = parent::renduTitre();
        $menu = parent::renduMenu();
        $foot = parent::rendufooter();

        echo $head . $menu . $foot;
    }

    public function listCreneau($list){
        $menu = "";
        foreach ($list as $key => $value){
            $jour = $value[jour];
            $semaine = $value[semaine];
            $cycle = $value[cycle];
            $heured = $value[heuredeb];
            $heuref = $value[heurefin];
            $activation = $value[activation];
            $menu += <<< EOF
<div class = 'creneaux'>
    <tr>
        <td>{calcDate($semaine, $jour)}</td>
    </tr>
EOF;

        }
    }
}