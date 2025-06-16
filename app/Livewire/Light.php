<?php

namespace App\Livewire;

use Livewire\Component;

class Light extends Component
{
    public $brightness = 50;

    public function allume(){
        $this->brightness = 100;
    }

    public function off(){
        $this->brightness = 0;
    }


    public function plus(){
    if($this->brightness <= 90){
            $this->brightness += 10;
    }
    }

    public function minus(){
         if($this->brightness > 0){
            $this->brightness -= 10;
        }
    }
    public function render()
    {
        return view('livewire.light');
    }
}
