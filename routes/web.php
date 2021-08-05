<?php
use App\Http\Controllers\pagesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facade;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ckEditorUpload;
use App\Http\Livewire\Admin\CreateUserInfo;
use App\Http\Livewire\Admin\EditUserInfo;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\CreateProduct;
use App\Http\Livewire\Admin\Createproject;
use App\Http\Livewire\Admin\CreateArticle;
use App\Http\Livewire\Admin\Projects;
use App\Http\Livewire\Admin\EditProject;
use App\Http\Livewire\Admin\EditProduct;
use App\Http\Livewire\Admin\Products;
use App\Http\Livewire\Admin\EditUser;
use App\Http\Livewire\Admin\EditArticle;
use App\Http\Livewire\Admin\Articles;
use App\Http\Livewire\Products\OneProduct;
use App\Http\Livewire\Products\Productslist;
use App\Http\Livewire\Articles\OneArticle;
use App\Http\Livewire\Articles\ArticlesList;
use App\Http\Livewire\Projects\OneProject;
use App\Http\Livewire\Projects\Projectslist;
use App\Http\Livewire\Articles\Comments;
use App\Http\Livewire\Test\Button2;
use App\Http\Livewire\Articles\CreateReply;

Route::middleware(['adminAccess'])->group(function () {
 
    Route::get('/admin/create-user-info', CreateUserInfo::class);

    Route::post('/admin/create-user-store', [CreateUserInfo::class,'store'])->name('createInfo');

    Route::get('/admin/edit-user-info', EditUserInfo::class);

    Route::post('/admin/edit-user-update/{value}', [EditUserInfo::class,'update']);

    Route::get('/admin/dashboard', Dashboard::class);

    Route::get('/admin/create-product', CreateProduct::class);

    Route::get('/admin/create-project', Createproject::class);

    Route::get('/admin/projects', Projects::class);

    Route::get('/admin/edit-project/{id}', EditProject::class);

    Route::get('/admin/edit-product/{id}', EditProduct::class);

    Route::get('/admin/products', Products::class);

    Route::get('/admin/edit-user/{id}', EditUser::class);

    Route::get('/admin/create-article', CreateArticle::class);

    Route::post('/admin/create-article/store', [CreateArticle::class,'store']);

    Route::get('/admin/edit-article/{id}', EditArticle::class);

    Route::get('/admin/articles', Articles::class);
});


Route::get('/', [pagesController::class,'home'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [dashboardController::class,'userDashboard'])->name('dashboard');

Route::post('/ckEditorUpload',[ckEditorUpload::class,'upload'])->name('ckeditor.upload');




Route::get('/products', Productslist::class);

Route::get('/products/{title}/{date}/{id}', OneProduct::class);

Route::get('/articles/{title}/{date}/{id}', OneArticle::class);

Route::get('/articles', ArticlesList::class);

Route::post('/articles/comments/{articleid}', [OneArticle::class,'SendComment']);

Route::post('/articles/replies/{commentid}', [OneArticle::class,'SendReply']);

Route::get('/projects', ProjectsList::class);

Route::get('/projects/{title}/{date}/{id}', OneProject::class);

Route::get('/test', Button2::class);

Route::post('/articles/reply/{comment_id}', [OneArticle::class,'SendReply']);

Route::get('/articles/create-reply/{commentId}', CreateReply::class);