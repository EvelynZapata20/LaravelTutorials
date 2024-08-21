<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public static $products = [
        ['id' => '1', 'name' => 'TV', 'description' => 'Best TV', 'price' => 50],
        ['id' => '2', 'name' => 'iPhone', 'description' => 'Best iPhone', 'price' => 7000000],
        ['id' => '3', 'name' => 'Chromecast', 'description' => 'Best Chromecast', 'price' => 2300000],
        ['id' => '4', 'name' => 'Glasses', 'description' => 'Best Glasses', 'price' => 700000],
    ];

    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        $viewData['subtitle'] = 'List of products';
        $viewData['products'] = ProductController::$products;

        return view('product.index')->with('viewData', $viewData);
    }

    public function show(string $id): View|RedirectResponse
    {
        $viewData = [];
        // Activity 5
        if (! isset(ProductController::$products[$id - 1])) {
            return redirect()->route('home.index');
        }
        $product = ProductController::$products[$id - 1];
        $viewData['title'] = $product['name'].' - Online Store';
        $viewData['subtitle'] = $product['name'].' - Product information';
        $viewData['product'] = $product;

        return view('product.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Create product';

        return view('product.create')->with('viewData', $viewData);
    }

    // Activity 7:
    // The create method is used to display the view with the form.
    // The save method validates the data submitted by the user from the form.
    // If the data is valid, it displays a confirmation message with the submitted information.

    public function save(Request $request)
    {
        $viewData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|gt:0',
        ]);

        return view('product.save')->with('productData', $viewData);
        //dd($request->all());

        //here will be the code to call the model and save it to the database
    }
}
