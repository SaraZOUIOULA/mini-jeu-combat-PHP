<?php

class Archer extends Character{

    private $arrow = 5;
    public $force = false;

    public function turn($target) {
        $rand = rand(1, 10);
        if($this->arrow !== 0){
            if ($rand <= 5 && !$this->force) {
                $status = $this->blow();
            } else {
                $status = $this->shoot($target);
            }
        } else{
            $status = $this->stab($target);
        }
        return $status;
    }
    
    public function shoot($target) {
        $this->arrow -=1;
        if ($this->force) {
            $rand = rand(15, 30)/10;
            $forceDamage = $this->damage * $rand;
            $target->setHealthPoints($forceDamage);
            $this->force = false;
        } else {
            $target->setHealthPoints($this->damage);            
        }
        $status="$this->name tire une flèche sur $target->name ! Il reste $target->healthPoints points de vie à $target->name !";
        return $status;
    }

    public function blow() {
        $this->force = true;
        $status = "$this->name se prépart à donner un gros coup !";
        return $status;
    }
    
    public function stab($target) {
        $rand = rand(0, 10)/10;
        $forceDamage = $this->damage * $rand;
        $target->setHealthPoints($forceDamage);
        $status="$this->name donne un coup de dague $target->name ! Il reste $target->healthPoints points de vie à $target->name !";
        return $status;
    }
}
