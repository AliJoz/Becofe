<?php

namespace App\Livewire\Admin\Home;

use Livewire\Component;

class Index extends Component
{
    public $readyToLoad = false;

    public function loadLogs()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        return view('livewire.admin.home.index');
    }
}
