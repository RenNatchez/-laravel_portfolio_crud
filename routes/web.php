<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// front-end home
Route::get('/', [FrontendController::class, 'home'])->name('home');
// back home
Route::get('/admin/home', [BackController::class, 'index'])->name('admin.home');

// Portfolio
Route::get('/admin/portfolio', [PortfolioController::class, 'index'])->name('admin.portfolio');
Route::get('/admin/createportfolio', [PortfolioController::class, 'create'])->name('portfolio.create');
Route::post('/admin/portfoliostore', [PortfolioController::class, 'store'])->name('portfolio.store');
Route::delete('/admin/portfolio/{id}/delete', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');
Route::get('/admin/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');
Route::get('/admin/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
Route::put('/admin/portfolio/{id}/udapte', [PortfolioController::class, 'udapte'])->name('portfolio.udapte');

// Skill
Route::get('/admin/skill', [SkillController::class, 'index'])->name('admin.skill');
Route::get('/admin/createskill', [SkillController::class, 'create'])->name('skill.create');
Route::post('/admin/skillstore', [SkillController::class, 'store'])->name('skill.store');
Route::delete('/admin/skill/{id}/delete', [SkillController::class, 'destroy'])->name('skill.destroy');
Route::get('/admin/skill/{id}', [SkillController::class, 'show'])->name('skill.show');
Route::get('/admin/skill/{id}/edit', [SkillController::class, 'edit'])->name('skill.edit');
Route::put('/admin/skill/{id}/udapte', [SkillController::class, 'udapte'])->name('skill.udapte');

// Service
Route::get('/admin/service', [ServiceController::class, 'index'])->name('admin.service');
Route::get('/admin/createservice', [ServiceController::class, 'create'])->name('service.create');
Route::post('/admin/servicestore', [ServiceController::class, 'store'])->name('service.store');
Route::delete('/admin/service/{id}/delete', [ServiceController::class, 'destroy'])->name('service.destroy');
Route::get('/admin/service/{id}', [ServiceController::class, 'show'])->name('service.show');
Route::get('/admin/service/{id}/edit', [ServiceController::class, 'edit'])->name('service.edit');
Route::put('/admin/service/{id}/udapte', [ServiceController::class, 'udapte'])->name('service.udapte');