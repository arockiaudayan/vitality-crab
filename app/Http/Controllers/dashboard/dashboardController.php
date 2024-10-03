<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class dashboardController extends Controller
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
        $tab = request()->input('tab') ?? 'date';
        $date = request()->input('date') ?? '';
        switch ($tab) {
            case 'date':
                $carbonDateInput = Carbon::parse($date)->format('Y-m-d');
                $carbonDateShow = Carbon::parse($date)->format('d-M-Y') . ', ' . Carbon::parse($date)->englishDayOfWeek;
                break;
            case 'month':
                $carbonDateInput = Carbon::parse($date)->format('Y-m');
                $carbonDateShow = Carbon::parse($date)->format('M-Y');
                break;
            case 'year':
                $carbonDateInput = Carbon::parse($date)->format('Y');
                $carbonDateShow = Carbon::parse($date)->format('Y');
                break;
        }

        return view('dashboard.dashboard', compact('tab', 'carbonDateInput', 'carbonDateShow'));
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
