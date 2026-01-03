<div class="max-w-xl p-6">
    <h1 class="text-2xl font-bold mb-4">Import Pemain (Excel)</h1>

    <div class="bg-white p-6 rounded-xl space-y-4">
        <input type="file" wire:model="file">

        @error('file')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror

        <button wire:click="import" class="btn-primary">
            Import Excel
        </button>
    </div>
</div>
