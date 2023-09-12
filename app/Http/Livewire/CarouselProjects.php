<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project\Category;

class CarouselProjects extends Component
{

    public $projects;
    public $type = "Departamentos";

    public function mount(){
        $this->projects = Category::where('type', 'LIKE', '%departamentos%')->get();
    }

    public function render()
    {
        return view('livewire.carousel-projects', [
            'projects' => $this->projects,
            'type' => $this->type,
        ]);
    }
}
