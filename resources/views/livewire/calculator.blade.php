<div>
  <div class="flex flex-col items-center">
    <div class="flex p-16 mx-auto justify-center items-center gap-4">
      <input
        type="number"
        wire:model="firstNumber"
        placeholder="First Number"
      >
      <select
        class="w-24"
        wire:model="action"
      >
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
        <option>%</option>
      </select>
      <input
        type="number"
        wire:model="secondNumber"
        placeholder="Second Number"
      >
      <button
        wire:click="calculate"
        class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white"
        {{ $disabled ? 'disabled' : '' }}
      >
        =
      </button>
    </div>
    <p class="text-3xl">{{ $result }}</p>
  </div>
</div>
