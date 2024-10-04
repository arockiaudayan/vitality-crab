<?php

namespace App\Http\Controllers\purchase;

use App\Http\Controllers\Controller;
use App\Models\Batch;
use App\Models\BatchStatus;
use App\Models\PurchaseDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class purchaseController extends Controller
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

        $tab = request()->input('tab') ?? 0;
        $from = request()->input('from') ?? Carbon::now()->format(format: 'Y-m-d');
        $to = request()->input('to') ?? Carbon::now()->format(format: 'Y-m-d');

        $lists = PurchaseDetail::whereBetween('purchase_date', [$from, $to])->get();

        return view('purchase.pages.purchase', compact('tab', 'from', 'to'));
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

        if ($request->rmReceived == 0) {
            $status = 0;
            $receiveDate = null;
        } else {
            $status = 1;
            $receiveDate = $request->receivedDate;
        }

        $PurchaseDetail = PurchaseDetail::create(attributes: [
            'purchase_date' => $request->purchaseDate,
            'received_date' => $receiveDate,
            'purchase_code' => $request->purchaseCode,
            'vendor_id' => $request->vendor_id,
            'grade_id' => $request->grade_id,
            'rm_quantity' => $request->rmQuantity,
            'cc_quantity' => $request->ccQuantity,
            'rm_per_rate' => $request->rmRate,
            'amount' => $request->amount,
            'added_user_id' => Auth::user()->id,
        ]);

        $batchCode = Batch::generateBatchCode();

        $batch = Batch::create([
            'date' => $request->purchaseDate,
            'batch_code' => $batchCode,
            'purchase_id' => $PurchaseDetail->id,
            'added_user_id' => Auth::user()->id,
        ]);

        BatchStatus::addStatus($batch->id, $status);

        return response()->json(
            data: [
                'success' => true,
            ],
            status: 200
        );
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
