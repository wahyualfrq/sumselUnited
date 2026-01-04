<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\MatchGame;
use App\Models\Ticket;
use App\Models\News;
use App\Models\Video;
use Carbon\Carbon;

#[Layout('admin.layouts.app')]
class DashboardComponent extends Component
{
    public function render()
    {
        // 🔴 Ambil match LIVE
        $liveMatch = MatchGame::with(['homeClub', 'awayClub'])
            ->where('status', 'live')
            ->latest('match_date')
            ->first();

        // 📊 HITUNG JUMLAH PERTANDINGAN PER BULAN (TAHUN INI)
        $matchesPerMonthRaw = MatchGame::selectRaw('MONTH(match_date) as month, COUNT(*) as total')
            ->whereYear('match_date', now()->year)
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month')
            ->toArray();

        // 🧠 BIKIN 12 BULAN (BIAR KONSISTEN, MESKI DATA KOSONG)
        $months = [];
        $matchCounts = [];

        for ($m = 1; $m <= 12; $m++) {
            $months[] = Carbon::create()->month($m)->format('M');
            $matchCounts[] = $matchesPerMonthRaw[$m] ?? 0;
        }

        return view('livewire.admin.dashboard-component', [
            'liveMatch'        => $liveMatch,
            'totalMatches'     => MatchGame::count(),
            'activeTickets'    => Ticket::where('is_active', true)->count(),
            'totalMedia'       => News::count() + Video::count(),

            // 📈 DATA GRAFIK (REAL)
            'chartLabels'      => $months,
            'chartData'        => $matchCounts,
        ]);
    }
}
