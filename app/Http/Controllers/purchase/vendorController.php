<?php

namespace App\Http\Controllers\purchase;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;

class vendorController extends Controller
{
    public function __construct()
    {
        $this->middleware(middleware: 'auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!in_array(needle: 0, haystack: [0])) {
            return redirect(to: '/dashboard');
        }
        $tab = request()->input('tab') ?? 1;

        $lists = Vendor::index();

        return view('purchase.pages.vendor', compact('lists', 'tab'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
