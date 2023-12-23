<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\PackagingController;
use App\Http\Controllers\PromotionalController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('about',[WebsiteController::class,'about'])->name('about');
Route::get('contact',[WebsiteController::class,'contact'])->name('contact');

Route::get('businesscards',[BusinessController::class ,'businesscards'])->name('businesscards');
Route::get('letterheads',[BusinessController::class ,'letterheads'])->name('letterheads');
Route::get('filefolders',[BusinessController::class ,'filefolders'])->name('filefolders');
Route::get('flyers',[BusinessController::class ,'flyers'])->name('flyers');
Route::get('brouchers',[BusinessController::class ,'brouchers'])->name('brouchers');
Route::get('invoices',[BusinessController::class ,'invoices'])->name('invoices');
Route::get('envelopes',[BusinessController::class ,'envelopes'])->name('envelopes');
Route::get('notepads',[BusinessController::class ,'notepads'])->name('notepads');


Route::get('customboxes',[PackagingController::class ,'customboxes'])->name('customboxes');
Route::get('ecommercepackaging',[PackagingController::class ,'ecommercepackaging'])->name('ecommercepackaging');
Route::get('corrugatedboxes',[PackagingController::class ,'corrugatedboxes'])->name('corrugatedboxes');
Route::get('whitelabelpackaging',[PackagingController::class ,'whitelabelpackaging'])->name('whitelabelpackaging');
Route::get('foodpackaging',[PackagingController::class ,'foodpackaging'])->name('foodpackaging');

Route::get('birthdayinvites',[InvitationController::class ,'birthdayinvites'])->name('birthdayinvites');
Route::get('weddinginvites',[InvitationController::class ,'weddinginvites'])->name('weddinginvites');
Route::get('bridalshower',[InvitationController::class ,'bridalshower'])->name('bridalshower');
Route::get('babyshowerinvites',[InvitationController::class ,'babyshowerinvites'])->name('babyshowerinvites');

Route::get('birthdayinvites',[InvitationController::class ,'birthdayinvites'])->name('birthdayinvites');
Route::get('weddinginvites',[InvitationController::class ,'weddinginvites'])->name('weddinginvites');
Route::get('bridalshower',[InvitationController::class ,'bridalshower'])->name('bridalshower');
Route::get('babyshowerinvites',[InvitationController::class ,'babyshowerinvites'])->name('babyshowerinvites');

Route::get('bottles',[PromotionalController::class ,'bottles'])->name('bottles');
Route::get('giftsets',[PromotionalController::class ,'giftsets'])->name('giftsets');
Route::get('mugs',[PromotionalController::class ,'mugs'])->name('mugs');
Route::get('shirts',[PromotionalController::class ,'shirts'])->name('shirts');
Route::get('tech',[PromotionalController::class ,'tech'])->name('tech');
Route::get('wallets',[PromotionalController::class ,'wallets'])->name('wallets');
Route::get('bags',[PromotionalController::class ,'bags'])->name('bags');
Route::get('walldecor',[PromotionalController::class ,'walldecor'])->name('walldecor');

Route::get('stickers',[PromotionalController::class ,'stickers'])->name('stickers');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
