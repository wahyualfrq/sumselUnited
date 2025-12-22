<?php

use Illuminate\Support\Facades\Route;

// =======================
// CLIENT LIVEWIRE
// =======================
use App\Livewire\Client\{
    HomeComponent,
    ClubComponent,
    TeamComponent,
    MediaComponent,
    ContactComponent,
    TicketPurchaseComponent
};

// =======================
// ADMIN LIVEWIRE
// =======================
use App\Livewire\Admin\{
    DashboardComponent,
    BeritaComponent,
    ManajemenTimComponent,
    PengaturanComponent
};

use App\Livewire\Admin\Tickets\{
    TicketIndexComponent,
    TicketCreateComponent,
    TicketEditComponent
};

// =======================
// AUTH
// =======================
use App\Http\Controllers\AuthController;
use App\Http\Middleware\RoleMiddleware;


/*
|--------------------------------------------------------------------------
| PUBLIC CLIENT ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/', HomeComponent::class)->name('home');
Route::get('/club', ClubComponent::class)->name('club');
Route::get('/team', TeamComponent::class)->name('team');
Route::get('/media', MediaComponent::class)->name('media');
Route::get('/contact', ContactComponent::class)->name('contact');


/*
|--------------------------------------------------------------------------
| USER ROUTES (AUTH + USER ROLE)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', RoleMiddleware::class . ':user'])
    ->group(function () {

        // List / landing tiket (opsional kalau ada)
        Route::get('/tickets', TicketPurchaseComponent::class)
            ->name('tickets');

        // Detail & beli tiket (INI YANG DIPAKAI HERO)
        Route::get('/tickets/{ticket}', TicketPurchaseComponent::class)
            ->name('tickets.purchase');
    });


/*
|--------------------------------------------------------------------------
| ADMIN ROUTES (AUTH + ADMIN ROLE)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')
    ->middleware(['auth', RoleMiddleware::class . ':admin'])
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
        Route::get('/team', ManajemenTimComponent::class)->name('team');
        Route::get('/news', BeritaComponent::class)->name('news');
        Route::get('/settings', PengaturanComponent::class)->name('settings');

        // TICKET MANAGEMENT (SATU-SATUNYA MATCH SOURCE)
        Route::get('/tickets', TicketIndexComponent::class)->name('tickets.index');
        Route::get('/tickets/create', TicketCreateComponent::class)->name('tickets.create');
        Route::get('/tickets/{ticket}/edit', TicketEditComponent::class)->name('tickets.edit');
    });


/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/login', fn() => view('auth.login'))->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/register', fn() => view('auth.register'))->name('register.page');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
