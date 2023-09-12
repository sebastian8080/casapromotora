<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project\Category;

class CarouselProjects extends Component
{

    public $projects;
    public $type;

    public function mount(){
        if($this->type == "casas") $this->type = "condominios";
        $this->projects = Category::where('type', 'LIKE', '%'.$this->type.'%')->get();
    }

    public function render()
    {
        return view('livewire.carousel-projects', [
            'projects' => $this->projects,
            'type' => $this->type,
        ]);
    }
}
