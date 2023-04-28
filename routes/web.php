<?php

use App\Http\Controllers\DemandeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PdfController ;
use Illuminate\Support\Facades\Auth;
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

//page d'acceiul :
Route::get('/', function () {
    return view('index');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',
    function () {
    return view('dashboard');
}) ->name('dashboard');

//admin home :
Route::get('/redirect', [AdminController::class, 'redirect']);
//page : traitement de demandes : 
Route::get('/view_demandes',[AdminController::class, 'view_demandes']); 
//Historique page : 
Route::get('/historique',[AdminController::class, 'historique']); 
Route::get('/espace_demande',[AdminController::class, 'espace_demande']);
Route::get('/a_reussite',[AdminController::class, 'a_reussite']);
Route::get('/a_scolarite',[AdminController::class, 'a_scolarite']);
Route::get('/r_note',[AdminController::class, 'r_note']);
Route::get('/c_stage',[AdminController::class, 'c_stage']);
//Store : 
Route::post('/espace_demande', [DemandeController::class, 'store1']);

//verification 
Route::get('/espace_demande', [DemandeController::class, 'index']);
Route::post('/espace_demande/check', [DemandeController::class, 'check'])->name('espace_demande.check');
//afficher les demandes selon le types : 
Route::get('/releve_note' ,[DemandeController::class, 'index1']);
Route::get('/releve_note/{id}' ,[DemandeController::class, 'show'])->name('admin.show');

Route::get('/attestation_scolarite' ,[DemandeController::class, 'index2']);
Route::get('/attestation_scolarite/{id}' ,[DemandeController::class, 'show'])->name('admin.show');

Route::get('/attestation_reussite' ,[DemandeController::class, 'index3']);
Route::get('/attestation_reussite/{id}' ,[DemandeController::class, 'show'])->name('admin.show');

Route::get('/convention_stage' ,[DemandeController::class, 'index4']);
Route::get('/convention_stage/{id}' ,[DemandeController::class, 'show'])->name('admin.show');

//Refuse : 
Route::post('/releve_note/{id}',[DemandeController::class, 'refuse']); 
Route::post('/attestation_scolarite/{id}',[DemandeController::class, 'refuse']); 
Route::post('/attestation_reussite/{id}',[DemandeController::class, 'refuse']); 
Route::post('/convention_stage/{id}',[DemandeController::class, 'refuse']); 
// Route::get("/{category}/{id}/v",[DemandeController::class, 'valide']);
//Historique :
Route::get('/historique',[DemandeController::class, 'index5']); 

//voir detail
// Route::get('/historique', [DemandeController::class, 'view']);
//search : 
Route::get('/search',[DemandeController::class, 'search']);
Route::get('/view_detail/{id}', [DemandeController::class, 'viewDetails']);

//Document : 
//dompdf

//pour voir le document
Route::get('réussite/{id}', [PdfController::class, 'viewPdf']);
Route::get('convention_view/{id}', [PdfController::class, 'viewPdf1']);
Route::get('releve_view/{id}', [PdfController::class, 'viewPdf2']);
Route::get('scolarite_view/{id}', [PdfController::class, 'viewPdf3']);

Route::get('réussite/{id}', [DemandeController::class, 'valide']);
Route::get('convention_view/{id}', [DemandeController::class, 'valide']);
Route::get('releve_view/{id}', [DemandeController::class, 'valide']);
Route::get('scolarite_view/{id}', [DemandeController::class, 'valide']);




//pour télecharger le document

Route::get('réussite/réussite_download/{id}', [PdfController::class, 'generatepdf']);
Route::get('convention_view/convention_download/{id}', [PdfController::class, 'generatepdf1']);
Route::get('releve_view/releve_download/{id}', [PdfController::class, 'generatepdf2']);
Route::get('scolarite_view/scolarite_download/{id}', [PdfController::class, 'generatepdf3']);

//----------
Route::get('/out', function () {
    Auth::logout();
    return redirect('/');
})->middleware(['auth']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Envoi de doc
Route::get('/send/{id}', [PdfController::class, 'send']);

Route::get('/doc/{id}', [PdfController::class,'download']);

require __DIR__.'/auth.php';
