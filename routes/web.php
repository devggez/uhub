<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LibrarianController;
use App\Http\Controllers\RequisitionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\backend\BookController;

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


// Student Group Controller Links
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::controller(StudentController::class)->group(function () {

        Route::get('/student/dashboard', 'studentDashboard')->middleware(['auth', 'verified'])->name('student.dashboard');
        Route::get('/student/library/show', 'showLibrary')->name('student.library.show');
        Route::get('/student/staff/faculty', 'showFaculty')->name('student.staff.faculty');
        Route::get('/student/staff/staffOther', 'showStaffOther')->name('student.staff.staffOther');
        Route::get('/student/project/show', 'showProject')->name('student.project.show');
        Route::get('/student/club/show', 'showClub')->name('student.club.show');



        Route::get('/student/logout', 'studentLogout')->name('student.logout');
    });
});


/// Admin Middleware Links

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.admin_dashboard');
    Route::get('/admin/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'adminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'adminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'adminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'adminUpdatePassword'])->name('admin.update.password');
});

/// Admin Group Controller Links :: Book

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::controller(BookController::class)->group(function () {

        Route::get('/admin/book/show', 'showBooks')->name('admin.book.showBooks');
        Route::get('/admin/book/add', 'addBook')->name('admin.book.add');
        Route::post('/admin/book/store', 'storeBook')->name('admin.book.store');
        Route::get('/admin/book/edit/{id}', 'editBook')->name('admin.book.edit');
        Route::post('/admin/book/update', 'updateBook')->name('admin.book.update');
        Route::get('/admin/book/delete/{id}', 'deleteBook')->name('admin.book.delete');
    });
});

/// Admin Group Controller Links :: requisition

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::controller(RequisitionController::class)->group(function () {

        Route::get('/admin/requisition/show', 'showRequisitions')->name('admin.requisition.show');
        Route::get('/admin/requisition/add', 'addRequisition')->name('admin.requisition.add');
        Route::post('/admin/requisition/store', 'storeRequisition')->name('admin.requisition.store');
        Route::get('/admin/requisition/edit/{id}', 'editRequisition')->name('admin.requisition.edit');
        Route::post('/admin/requisition/update', 'updateRequisition')->name('admin.requisition.update');
        Route::get('/admin/requisition/delete/{id}', 'deleteRequisition')->name('admin.requisition.delete');
    });
});

/// contact route groups
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::controller(ContactController::class)->group(function () {

        Route::get('/admin/contact/show', 'showContact')->name('admin.contact.show');
        Route::get('/admin/contact/showTA', 'showContactTA')->name('admin.contact.showTA');
        Route::get('/admin/contact/showLA', 'showContactLA')->name('admin.contact.showLA');
        Route::get('/admin/contact/add', 'addContact')->name('admin.contact.add');
        Route::post('/admin/contact/store', 'storeContact')->name('admin.contact.store');
        Route::get('/admin/contact/edit/{id}', 'editContact')->name('admin.contact.edit');
        Route::get('/admin/contact/edit/{id}/CounselingHour', 'editCounselingHour')->name('admin.contact.counselingHour');
        Route::post('/admin/contact/update', 'updateContact')->name('admin.contact.update');
        Route::post('/admin/contact/update/counselingUpdate', 'updateCounselingHour')->name('admin.contact.updateCounselingHour');
        Route::get('/admin/contact/delete/{id}', 'deleteContact')->name('admin.contact.delete');
    });
});


// breez:: Auth Codes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/// Codes:: backup

// Route::middleware(['auth', 'role:faculty'])->group(function () {
//     Route::get('/faculty/dashboard', [FacultyController::class, 'facultyDashboard'])->name('faculty.faculty_dashboard');

//  });

//  Route::middleware(['auth', 'role:librarian'])->group(function () {
//     Route::get('/librarian/dashboard', [LibrarianController::class, 'librarianDashboard'])->name('librarian.librarian_dashboard');

//  });


require __DIR__ . '/auth.php';
