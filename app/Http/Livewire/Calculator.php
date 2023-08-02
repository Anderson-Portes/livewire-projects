<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $firstNumber = 0.0;
    public $secondNumber = 0.0;
    public string $action = "+";
    public float $result = 0;
    public bool $disabled = false;

    public function render()
    {
        return view('livewire.calculator');
    }

    public function calculate()
    {
        $firstNumber = (float) $this->firstNumber;
        $secondNumber = (float) $this->secondNumber;
        if ($this->action == '+') {
            $this->result = $firstNumber + $secondNumber;
        } else if ($this->action == '-') {
            $this->result = $firstNumber - $secondNumber;
        } else if ($this->action == '*') {
            $this->result = $firstNumber * $secondNumber;
        } else if ($this->action == '/') {
            $this->result = $firstNumber / $secondNumber;
        } else if ($this->action == '%') {
            $this->result = $firstNumber / 100 * $secondNumber;
        }
    }

    public function updated()
    {
        if ($this->firstNumber == 0.0 || $this->secondNumber == 0.0) {
            $this->disabled = true;
            return;
        }
        $this->disabled = false;
    }
}
