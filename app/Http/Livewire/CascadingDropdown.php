<?php

namespace App\Http\Livewire;

use App\Models\Continent;
use App\Models\Country;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class CascadingDropdown extends Component
{
    public Collection $continents;
    public Collection|array $countries = [];
    public int $selectedContinent;
    public int $selectedCountry;

    public function mount()
    {
        $this->continents = Continent::all();
    }

    public function render()
    {
        return view('livewire.cascading-dropdown');
    }

    public function changeContinent()
    {
        if ($this->selectedContinent !== -1) {
            $this->countries = Country::where('continent_id', $this->selectedContinent)->get();
        }
    }
}
