<div class="max-w-3xl p-6">
    <h1 class="text-2xl font-bold mb-6">Tambah Pemain</h1>

    <div class="bg-white rounded-xl p-6 space-y-4">

        <input wire:model="player.name" placeholder="Nama Pemain" class="input">
        <input wire:model="player.position" placeholder="Posisi (Striker, GK, dll)" class="input">
        <input wire:model="category" placeholder="Kategori (Senior / U23)" class="input">

        <div class="grid grid-cols-2 gap-4">
            <input wire:model="player.number" type="number" placeholder="Nomor" class="input">
            <input wire:model="player.age" type="number" placeholder="Usia" class="input">
        </div>

        <input wire:model="player.country" placeholder="Negara" class="input">
        <input wire:model="photo_url" placeholder="URL Foto Pemain" class="input">

        <button wire:click="save" class="btn-primary">
            Simpan Pemain
        </button>

    </div>
</div>
