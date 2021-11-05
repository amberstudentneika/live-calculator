<?php
namespace App\Http\Livewire;
use Livewire\Component;
class LiveCalculator extends Component
{
    public $val1 = 0;
    public $val2 = 0;
    public $val3 = 0;
    public $val4 = 0;
    public $val = 0;
    public $RetVal;
    public $Value;

    public function addVal()
    {
        $this->RetVal = $this->val1 + $this->val2;
    }
    public function subtractVal()
    {
        $this->RetVal = $this->val1 - $this->val2;
    }
    public function multiplyVal()
    {
        $this->RetVal = $this->val1 * $this->val2;
    }
    public function divideVal()
    {
        $this->RetVal = $this->val1 / $this->val2;
    }
    public function squareVal(){
        $this->Value = $this->val *  $this->val;
    }
    public function percentageVal(){
        $this->Value = ($this->val3 * $this->val4)/100;
    }
    public function render()
    {
        return view('livewire.live-calculator');
    }
}
