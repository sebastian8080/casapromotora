<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project\Category;
use App\Models\Project\Property;

class InfoProjects extends Component
{

    public $projects, $project_aux, $property, $images, $type;

    public function mount(){
        if($this->type == "casas") $this->type = "condominios";
        $this->images = Category::select('images')->where('type', 'LIKE', "%".$this->type."%")->where('status', 1)->first();
        $this->project_aux = Category::where('type', 'LIKE', '%'. $this->type . '%')->where('status', 1)->first();
    }


    public function changeProject($name){
        if($name != null || $name != ""){
            $this->project_aux = Category::where('project_name', 'LIKE', "%".$name."%")->first();
            $this->property = Property::select('price')->where('category_id', $this->project_aux->category_id)->min('price');
            $this->images = Category::select('images')->where('project_name', 'LIKE', "%". $name ."%")->first();
        }
    }

    public function render()
    {
        //$this->project_aux = $this->projects[0];
        //$this->property = Property::select('price')->where('category_id', $this->project_aux->category_id)->min('price');

        return view('livewire.info-projects', [
            'project_aux' => $this->project_aux,
            'property' => $this->property,
            'images' => $this->images
        ]);
    }
}
