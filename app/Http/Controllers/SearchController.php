<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('search');
    }

    public function autocomplete(Request $request): ?JsonResponse
    {
        $data = Product::select("name")
                ->where("name", "LIKE", "%{$request->input('query')}%")
                ->get();
        return response()->json($data);
    }
}