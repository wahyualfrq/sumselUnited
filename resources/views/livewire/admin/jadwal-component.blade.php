<div class="container-fluid px-4">

    {{-- PAGE TITLE --}}
    <div class="mb-4">
        <h3 class="fw-bold">Manajemen Jadwal Pertandingan</h3>
        <p class="text-muted mb-0">Kelola jadwal pertandingan yang akan tampil di website</p>
    </div>

    {{-- ALERT --}}
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- FORM CARD --}}
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-danger text-white fw-semibold">
            {{ $isEdit ? 'Edit Jadwal Pertandingan' : 'Tambah Jadwal Pertandingan' }}
        </div>

        <div class="card-body">
            <form wire:submit.prevent="{{ $isEdit ? 'update' : 'save' }}">
                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Home Team</label>
                        <input type="text" wire:model.defer="home_team" class="form-control"
                            placeholder="Contoh: Football Club Pro">
                        @error('home_team') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Away Team</label>
                        <input type="text" wire:model.defer="away_team" class="form-control"
                            placeholder="Contoh: Persija Jakarta">
                        @error('away_team') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Tanggal & Jam Pertandingan</label>
                        <input type="datetime-local" wire:model.defer="match_date" class="form-control">
                        @error('match_date') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Status Pertandingan</label>
                        <select wire:model.defer="status" class="form-select">
                            <option value="scheduled">Scheduled</option>
                            <option value="finished">Finished</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>

                </div>

                <div class="mt-4">
                    <button class="btn btn-danger px-4">
                        {{ $isEdit ? 'Update Jadwal' : 'Simpan Jadwal' }}
                    </button>

                    @if($isEdit)
                        <button type="button" wire:click="resetForm" class="btn btn-secondary ms-2">
                            Batal
                        </button>
                    @endif
                </div>
            </form>
        </div>
    </div>

    {{-- TABLE CARD --}}
    <div class="card shadow-sm">
        <div class="card-header fw-semibold">
            Daftar Jadwal Pertandingan
        </div>

        <div class="card-body p-0">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Home</th>
                        <th>Away</th>
                        <th>Tanggal & Jam</th>
                        <th>Status</th>
                        <th width="120">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($matches as $match)
                        <tr>
                            <td class="fw-semibold">{{ $match->home_team }}</td>
                            <td>{{ $match->away_team }}</td>
                            <td>{{ $match->match_date->format('d M Y • H:i') }}</td>
                            <td>
                                <span class="badge 
                                        @if($match->status === 'scheduled') bg-primary
                                        @elseif($match->status === 'finished') bg-success
                                        @else bg-secondary
                                        @endif">
                                    {{ ucfirst($match->status) }}
                                </span>
                            </td>
                            <td>
                                <button wire:click="edit({{ $match->id }})" class="btn btn-sm btn-outline-warning">
                                    Edit
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">
                                Belum ada jadwal pertandingan
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>