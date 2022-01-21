<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Post;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//CRUD 
/*
    1- Get all          (GET)               /api/posts
    2- Crete            (POST)              /api/posts
    3- Get a single     (GET)               /api/posts/{id}
    4- Update a single  (PATCH || PUT)      /api/posts/{id} // diferença PATCH = um campo PUT = mais de um
    5- Delete           (REMOVE)            /api/posts/{id}
*/

//creating a resource (POST) in laravel
/*
    1- Create a database and migrations
    2- Create a model to conect to a database
    3- Create a controller to go get the info from the database
    4- Return that info
*/
//especificando cada rota 
// Route::get('/', [PostController::class, 'index']);
// Route::post('/posts', [PostController::class, 'store']);
// Route::put('/posts', [PostController::class, 'update']);
// Route::delete('/posts', [PostController::class, 'destroy']);

//CRUD completo
Route::resource('posts', PostController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
