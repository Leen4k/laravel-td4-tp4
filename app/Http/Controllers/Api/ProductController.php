<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use App\Http\Requests\StoreProductRequest;
use ErlandMuchasaj\LaravelFileUploader\FileUploader;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @OA\Get(
     *     path="/api/products",
     *     tags={"Products"},
     *     summary="List all products",
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *     )
     * )
     */
    public function index()
    {
        $products = Products::all();
        return ProductResource::collection($products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // You may need to pass additional data to the form view if required
        $categories = Category::all(); // Retrieve all categories from the database
        return view('products.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * @OA\Post(
     *     path="/api/products",
     *     tags={"Products"},
     *     summary="Create a new product",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="name", type="string"),
     *             @OA\Property(property="category_id", type="integer"),
     *             @OA\Property(property="pricing", type="number"),
     *             @OA\Property(property="description", type="string"),
     *             @OA\Property(property="images", type="array", @OA\Items(type="string"))
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Product created successfully",
     *     )
     * )
     */
    // public function store(Request $request)
    // {
    //     // dd($request->all());
    //     // Convert images array to JSON string
    //     // $validatedData['images'] = json_encode($validatedData['images']);

    //     // Create the product
    //     $product = Products::create($request->all());
    //     dd($product);

    //     // Optionally, you can return a response indicating success
    //     return response()->json(['message' => 'Product created successfully', 'product' => $product], 201);
    // }

    public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'category_id' => 'required|exists:categories,id',
        'pricing' => 'required|numeric',
        'description' => 'required|string',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate each uploaded image
    ]);

    // Initialize an empty array to store formatted image data
    $formattedImages = [];

    // Retrieve the uploaded files and store them in the public directory
    foreach ($request->file('images') as $file) {
        // Generate a unique filename for each image
        $filename = uniqid() . '_' . $file->getClientOriginalName();

        // Store the file in the public directory
        $filePath = $file->storeAs('public', $filename);

        // Get the full URL of the stored file and prepend the base URL
        $imageUrl = url(Storage::url($filePath));

        // Add the formatted image data to the array
        $formattedImages[] = [
            'alt' => 'Image', // You can set a default alt text or customize it as needed
            'url' => $imageUrl,
        ];
    }

    // Convert the array of formatted image data to JSON
    $jsonFormattedImages = json_encode($formattedImages);

    // Create the product with the validated data and formatted image URLs
    $product = Products::create([
        'name' => $validatedData['name'],
        'category_id' => $validatedData['category_id'],
        'pricing' => $validatedData['pricing'],
        'description' => $validatedData['description'],
        'images' => $jsonFormattedImages,
    ]);

    // Optionally, you can return a response indicating success
    return response()->json(['message' => 'Product created successfully', 'product' => $product], 201);
}

    // handle the post request

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
    }

/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $product
     * @return \Illuminate\Http\Response
     *
     * @OA\Put(
     *     path="/api/products/{product}",
     *     tags={"Products"},
     *     summary="Update the specified product",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="name", type="string"),
     *             @OA\Property(property="category_id", type="integer"),
     *             @OA\Property(property="pricing", type="number"),
     *             @OA\Property(property="description", type="string"),
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Product updated successfully",
     *     )
     * )
     */
    public function update(Request $request, Products $product)
    {
        $product->update($request->all());
        return new ProductResource($product);
    }

/**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $product
     * @return \Illuminate\Http\Response
     *
     * @OA\Delete(
     *     path="/api/products/{product}",
     *     tags={"Products"},
     *     summary="Delete the specified product",
     *     @OA\Response(
     *         response=204,
     *         description="Product deleted successfully"
     *     )
     * )
     */
    public function destroy(Products $product)
    {
        $product->delete();
        return response("yayy deleted",204);
    }
}
