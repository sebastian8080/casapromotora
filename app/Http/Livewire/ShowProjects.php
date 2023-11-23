<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project\Category;

use Illuminate\Support\Facades\DB;

class ShowProjects extends Component
{

    public $state, $selStates, $city, $type;
    public $cities = [];
    public $projects = [];
    public $aux_state, $aux_city, $aux_type;

    public function mount(){
        $this->selStates = DB::table('info_states')->orderBy('name', 'asc')->get();
    }

    public function search(){

    }

    public function render()
    {
        $projects_filter = Category::where('status', 1);

        $this->selStates = DB::table('info_states')->orderBy('name', 'asc')->get();

        if($this->state != null) {
            $this->cities = [];
            $this->aux_state = $this->state;
            $aux_state = DB::table('info_states')->where('name', 'LIKE', '%'.$this->state.'%')->first();
            $this->cities = DB::table('info_cities')->where('state_id', $aux_state->id)->get();
            $projects_filter->where('state', 'LIKE', "%".$this->state."%");
        };

        if($this->city != null){
            $projects_filter->where('city', 'LIKE', "%".$this->city."%");
        }

        if($this->type != null){
            $projects_filter->where('type', 'LIKE', "%".$this->type."%");
        }

        $this->projects = $projects_filter->get();

        return view('livewire.show-projects', [
            'projects' => $this->projects,
            'states' => $this->selStates
        ]);
    }
}
