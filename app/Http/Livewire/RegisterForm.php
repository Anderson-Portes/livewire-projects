<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegisterForm extends Component
{
    public string $first_name = '';
    public string $last_name = '';
    public string $email = '';
    public string $role = '';
    public string $password = '';
    public string $company = '';
    public string $vat = '';

    protected $rules = [
        'first_name' => 'required|string|min:2',
        'last_name' => 'required|string|min:2',
        'email' => 'required|string|email',
        'password' => 'required|string|min:8',
        'company' => 'required_if:role,vendor',
        'vat' => 'required_if:role,vendor',
    ];

    public function render()
    {
        return view('livewire.register-form');
    }

    public function submit()
    {
        $this->validate();
        //Register something
        session()->flash('message', 'Customer was created.');
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->password = '';
        $this->company = '';
        $this->vat = '';
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }
}
