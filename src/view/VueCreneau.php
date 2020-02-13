<?php
namespace crazycharlyday\vue;

class VueCreneau extends Vue
{
    private $head;
    private $menu;
    private $foot;

    public function render($sel)
    {
        switch($sel){
            case 'LIST' : $menu = $this->listeCreneau();
        }
        $head = parent::renduTitre();
        $foot = parent::rendufooter();

        echo $head . $menu . $foot;
    }

    public function listeCreneau($list){
        $menu = '<div class = creneaux>
<table>';
        foreach ($list as $key => $value){
            $jour = $value[jour];
            $semaine = $value[semaine];
            $heured = $value[heuredeb];
            $heuref = $value[heurefin];
            $activation = $value[activation];
            $menu .= <<< EOF
    <tr>
        <td>Date du créneau : {calcDate($semaine, $jour)}</td>
        <td>Heure de départ : $heured</td>
        <td>Heure de fin : $heuref</td>
        <td>Activation : $activation</td>
    </tr>
EOF;

        }
        $menu .= '</table>
</div>';
    }
}