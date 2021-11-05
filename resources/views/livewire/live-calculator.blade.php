
<div>
    <div>
        NUM 1: <input id="num1" type="text" value="" wire:model.lazy="val1" />
        <br /><br />

        NUM 2: <input id="num2" type="text" value="" wire:model.lazy="val2" />
        <br />

        <p>Result =>> {{$RetVal}}</p>
        <button wire:click ="addVal()">ADD</button>
        <button wire:click ="subtractVal()">SUBTRACT</button>
        <button wire:click ="multiplyVal()">MULTIPLY</button>
        <button wire:click="divideVal()">DIVIDE</button>
    </div>
    <br/><br/><br/>

    <div>
        <label>Enter Number</label>
        <input id="num" type="text" value="" wire:model.lazy="val" />

        <p> Result =>> {{$Value}}</p>
        <button wire:click="squareVal()"> Square root</button>
    </div>
    <br/><br/><br/>

    <div>
        <label>Enter number</label>
        <input id="numb" type="text" value="" wire:model.lazy="val3" /><br/>
        <label>Enter percent</label>
        <input id="percent" type="text" value="" wire:model.lazy="val4" />
        <p> Result =>> {{$Value}}</p>
        <button wire:click="percentageVal()">Percentage</button>
    </div>
</div>




