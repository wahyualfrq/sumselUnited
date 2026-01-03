<div class="max-w-xl">
    <h1 class="text-xl font-bold mb-6">Tambah Galeri</h1>

    <form wire:submit.prevent="save" enctype="multipart/form-data" class="space-y-4">

        <input type="text" wire:model.defer="title" placeholder="Judul Galeri" class="w-full border rounded px-4 py-2">

        <input type="file" wire:model="cover_image" class="w-full">

        {{-- ERROR --}}
        @error('cover_image')
            <p class="text-sm text-red-500">{{ $message }}</p>
        @enderror

        {{-- LOADING INDICATOR --}}
        <div wire:loading wire:target="cover_image" class="text-sm text-gray-500">
            Mengunggah gambar...
        </div>

        <button type="submit" wire:loading.attr="disabled" wire:target="save,cover_image" class="bg-rose-600 text-white px-4 py-2 rounded
                   disabled:opacity-50 disabled:cursor-not-allowed">
            Simpan
        </button>
    </form>

</div>