<?php

use App\Http\Controllers\ProductController; // Import the ProductController
use Illuminate\Support\Facades\Route; // Import the Route facade

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

// Import the Product model
use App\Models\Product;

// Define a route for the homepage
Route::get('/', function () {
    return view('welcome');
    // // Retrieve the latest products and paginate them
    // $products = Product::latest()->paginate(5); // The 'paginate' method paginates the results

    // // Return the 'products.index' view with the products and the current page
    // return view('products.index', compact('products'))->with(request()->input('page')); // The 'compact' function creates an array from the variables passed to it
    
});

// Define resourceful routes for the 'products' endpoint, using the ProductController
 // This line replaces the following routes:
Route::resource('products', ProductController::class);  // This line replaces the following routes:
                                                        // Route::get('/products', [ProductController::class, 'index']);
                                                        // Route::get('/products/create', [ProductController::class, 'create']);
                                                        // Route::post('/products', [ProductController::class, 'store']);
                                                        // Route::get('/products/{product}', [ProductController::class, 'show']);
                                                        // Route::get('/products/{product}/edit', [ProductController::class, 'edit']);
                                                        // Route::put('/products/{product}', [ProductController::class, 'update']);
                                                        // Route::delete('/products/{product}', [ProductController::class, 'destroy']);