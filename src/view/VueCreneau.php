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
}