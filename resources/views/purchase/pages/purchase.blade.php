@extends('layouts.user_type.auth')

@section('content')
    @include('purchase.components.purchaseNav')

    <div class="card mb-4 px-4 py-2">
        <div class="card-body p-2 ">
            <form method="GET" action="{{ route('purchase/purchase-list') }}" class="w-100 p-0">
                @csrf
                <div class="row ">
                    <input type="hidden" name="tab" value="0">
                    <div class="col-xl-1 col-sm-6 d-flex justify-content-center align-items-center">
                        <i class="fas fa-filter me-2 d-inline-block"></i> FILTER
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 row justify-content-center align-items-center">
                        <div class="form-group mb-0">
                            <div class="input-group">
                                <span class="input-group-text ">from</span>
                                <input type="date" class="form-control" name="from"
                                    value="{{ Carbon\Carbon::parse($from)->format('Y-m-d') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 row justify-content-center align-items-center">
                        <div class="form-group mb-0">
                            <div class="input-group">
                                <span class="input-group-text ">To</span>
                                <input type="date" class="form-control" name="to"
                                    value="{{ Carbon\Carbon::parse($to)->format('Y-m-d') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 row justify-content-center align-items-center">
                        <button type="submit" class="btn bg-gradient-danger btn-sm mb-0">Get List</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="border"></div>
        <div class="card-body p-2">
            <div class="row justify-content-end align-items-center">
                <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4 ps-0 d-flex align-items-center ">
                    <h6 class="mb-0">{{ Carbon\Carbon::parse($from)->format('d-M-Y') }} to
                        {{ Carbon\Carbon::parse($to)->format('d-M-Y') }}</h6>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 ms-2 row justify-content-center align-items-center ">
                    <form method="GET" action="{{ route('purchase/purchase-list') }}" class="w-100 p-0">
                        @csrf
                        <input type="hidden" name="tab" value="0">
                        <input type="hidden" name="from" value="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                        <input type="hidden" name="to" value="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                        <button type="submit" class="btn bg-gradient-warning btn-sm mb-0 w-100">Get Today List</button>
                    </form>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 ms-2 row justify-content-center align-items-center">
                    <button type="button" class="btn bg-gradient-success btn-sm mb-0" data-bs-toggle="modal"
                        data-bs-target="#addPurchaseModal">
                        <i class="fas fa-shopping-cart text-lg opacity-10" aria-hidden="true"></i> Add Pruchase
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center pb-0">
                    <h6 class="d-inline-block">Purchase List</h6>
                    <ul class="list-group list-group-horizontal ms-3">
                        <li class="list-group-item fw-bold">Total</li>
                        <li class="list-group-item">
                            <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="Raw material Quantity"
                                data-container="body" data-animation="true">
                                RM-Q
                            </span> -
                            <p class="text-xs font-weight-bold mb-0 d-inline">
                                {{ $lists->sum('rm_quantity') }} kg</p>
                        </li>
                        <li class="list-group-item"> <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="Cooked material Quantity" data-container="body" data-animation="true">
                                CC-Q
                            </span> -
                            <p class="text-xs font-weight-bold mb-0 d-inline">
                                {{ $lists->sum('cc_quantity') }} kg</p>
                        </li>
                        <li class="list-group-item"> <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="Total Amount" data-container="body" data-animation="true">
                                Tol-₹
                            </span> -
                            <p class="text-xs font-weight-bold mb-0 d-inline">
                                ₹{{ $lists->sum('amount') }}</p>
                        </li>
                    </ul>
                </div>
                <div class="card-body px-2 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0" id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            title="Purchase material Date" data-container="body" data-animation="true">
                                            PM-D
                                        </span>
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            title="Received material Date" data-container="body" data-animation="true">
                                            RM-D
                                        </span>
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="Purchase Code"
                                            data-container="body" data-animation="true">
                                            P-Code
                                        </span>
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="Source Code"
                                            data-container="body" data-animation="true">
                                            S-code
                                        </span>
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="Batch Code"
                                            data-container="body" data-animation="true">
                                            Batch_id
                                        </span>
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="Grade"
                                            data-container="body" data-animation="true">
                                            Grade
                                        </span>
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            title="Raw material Quantity" data-container="body" data-animation="true">
                                            RM-Q
                                        </span>
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            title="Cooked material Quantity" data-container="body" data-animation="true">
                                            CC-Q
                                        </span>
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            title="Raw material Rate per KG" data-container="body" data-animation="true">
                                            RM-per-₹
                                        </span>
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="Total Amount"
                                            data-container="body" data-animation="true">
                                            Tol-₹
                                        </span>
                                    </th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lists as $purchase)
                                    <tr>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ Carbon\Carbon::parse($purchase->purchase_date)->format('d-M-Y') }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $purchase->received_date != null ? Carbon\Carbon::parse($purchase->received_date)->format('d-M-Y') : '------' }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $purchase->purchase_code }}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">
                                                <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="{{ App\Models\Vendor::find($purchase->vendor_id)->company_name }}"
                                                    data-container="body" data-animation="true">
                                                    {{ App\Models\Vendor::find($purchase->vendor_id)->source_code }}
                                                </span>
                                            </p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">
                                                {{ $purchase->BatchDetail->batch_code }}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">
                                                {{ App\Models\MeatGrade::find($purchase->grade_id)->name }}</p>
                                        </td>
                                        <td class="align-middle text-end">
                                            <p class="text-xs font-weight-bold mb-0">
                                                {{ $purchase->rm_quantity }} kg</p>
                                        </td>
                                        <td class="align-middle text-end">
                                            <p class="text-xs font-weight-bold mb-0">
                                                {{ $purchase->cc_quantity }} kg</p>
                                        </td>
                                        <td class="align-middle text-end">
                                            <p class="text-xs font-weight-bold mb-0">
                                                ₹{{ $purchase->rm_per_rate }}</p>
                                        </td>
                                        <td class="align-middle text-end">
                                            <p class="text-xs font-weight-bold mb-0">
                                                ₹{{ $purchase->amount }}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            {!! App\Models\BatchStatus::getStatus($purchase->BatchDetail->id) !!}
                                        </td>
                                    </tr>
                                @endforeach
                                {{-- <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                    alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">John Michael</h6>
                                                <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                                        <p class="text-xs text-secondary mb-0">Organization</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">Online</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3"
                                                    alt="user2">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                                <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                                        <p class="text-xs text-secondary mb-0">Developer</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3"
                                                    alt="user3">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                                                <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Executive</p>
                                        <p class="text-xs text-secondary mb-0">Projects</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">Online</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3"
                                                    alt="user4">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Michael Levi</h6>
                                                <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                                        <p class="text-xs text-secondary mb-0">Developer</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">Online</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                    alt="user5">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Richard Gran</h6>
                                                <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                                        <p class="text-xs text-secondary mb-0">Executive</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3"
                                                    alt="user6">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                                <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Programtor</p>
                                        <p class="text-xs text-secondary mb-0">Developer</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addPurchaseModal" tabindex="-1" aria-labelledby="addPurchaseModal" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">New Purchase Details</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data" onsubmit="return addPurchaseModalform(this)"
                        id="addPurchaseModal-Form">
                        @csrf
                        <div class="row">
                            <div class="form-group col-12 col-lg-6">
                                <label for="addPurchaseModal-purchaseDate" class="form-control-label">Purchase
                                    Date</label>
                                <input class="form-control" type="date" name="purchaseDate"
                                    value="{{ Carbon\Carbon::parse($from)->format('Y-m-d') }}"
                                    id="addPurchaseModal-purchaseDate" required>
                            </div>
                            <div class="form-group col-12 col-lg-6">
                                <label for="addPurchaseModal-purchaseCode" class="form-control-label">Purchase
                                    Code</label>
                                <input class="form-control" type="text" name="purchaseCode"
                                    placeholder="purchase Code" id="addPurchaseModal-purchaseCode" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-lg-9">
                                <label for="addPurchaseModal-vendor" class="form-control-label">Select Vendor</label>
                                <select class="form-select" id="addPurchaseModal-vendor" name="vendor_id" required>
                                    @foreach (App\Models\Vendor::index() as $vendor)
                                        <option value="{{ $vendor->id }}">{{ $vendor->company_name }}-
                                            {{ $vendor->source_code }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-12 col-lg-3">
                                <label for="addPurchaseModal-grade" class="form-control-label">Select Grade</label>
                                <select class="form-select" id="addPurchaseModal-grade" name="grade_id" required>
                                    @foreach (App\Models\MeatGrade::index() as $grade)
                                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-lg-3">
                                <label for="addPurchaseModal-RMQuantuty" class="form-control-label"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Raw Material Quantity"
                                    data-container="body" data-animation="true">RM Quantity</label>
                                <input class="form-control text-end" type="number" name="rmQuantity" value="0.000"
                                    step="0.001" value="{{ Carbon\Carbon::parse($from)->format('Y-m-d') }}"
                                    id="addPurchaseModal-RMQuantuty" required>
                            </div>
                            <div class="form-group col-12 col-lg-3">
                                <label for="addPurchaseModal-purchaseCode" class="form-control-label"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cooked Material Quantity"
                                    data-container="body" data-animation="true">CC Quantity</label>
                                <input class="form-control text-end" type="number" name="ccQuantity" value="0.000"
                                    step="0.001" id="addPurchaseModal-CCQuantuty" required>
                            </div>
                            <div class="form-group col-12 col-lg-3">
                                <label for="addPurchaseModal-purchaseCode" class="form-control-label"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Raw Material Rate per Kg"
                                    data-container="body" data-animation="true">RM Rate per KG</label>
                                <input class="form-control text-end" type="number" name="rmRate" value="0.00"
                                    step="0.01" id="addPurchaseModal-RMRate" required>
                            </div>
                            <div class="form-group col-12 col-lg-3">
                                <label for="addPurchaseModal-purchaseCode" class="form-control-label">Total Amount</label>
                                <input class="form-control text-end" type="number" name="amount" value="0.00"
                                    step="0.01" id="addPurchaseModal-TolAmt" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-lg-6">
                                <label for="addPurchaseModal-cczone" class="form-control-label" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Cooked Zone" data-container="body"
                                    data-animation="true">CC Zone</label>
                                <select class="form-select" id="addPurchaseModal-cczone" name="ccZone">
                                    @foreach (App\Models\CcZone::index() as $zone)
                                        <option value="{{ $zone->id }}">{{ $zone->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-12 col-lg-3">
                                <label for="addPurchaseModal-grade" class="form-control-label" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Raw Material Received" data-container="body"
                                    data-animation="true">RM Received</label>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <input type="radio" class="btn-check" name="rmReceived" value="0"
                                        id="addPurchaseModal-rmYes" autocomplete="off" checked
                                        onchange="addPurchaseModalRmRecived(this)">
                                    <label class="btn btn-outline-danger btn-sm" for="addPurchaseModal-rmYes">No</label>
                                    <input type="radio" class="btn-check" name="rmReceived" value="1"
                                        id="addPurchaseModal-rmNo" autocomplete="off"
                                        onchange="addPurchaseModalRmRecived(this)">
                                    <label class="btn btn-outline-success btn-sm" for="addPurchaseModal-rmNo">Yes</label>
                                </div>
                            </div>
                            <div class="form-group col-12 col-lg-3">
                                <label for="addPurchaseModal-rmReceivedDate" class="form-control-label">RM Received
                                    Date</label>
                                <input class="form-control" type="date" name="receivedDate"
                                    value="{{ Carbon\Carbon::parse($from)->format('Y-m-d') }}"
                                    id="addPurchaseModal-rmReceivedDate" disabled>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer pb-0">
                    <button type="submit" id="addPurchaseModal-BtnSubmit" form="addPurchaseModal-Form"
                        class="btn btn-primary">Add
                        Purchase</button>
                    <button type="button" class="btn btn-primary d-none" disabled>
                        Adding...
                        <i class="fas fa-spinner fa-spin fa-lg h-auto w-auto"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
        <script>
            const addPurchaseModalRmRecived = (param) => {
                const val = $(param).val();
                if (val == 0) {
                    $('#addPurchaseModal-rmReceivedDate').attr('disabled', true);
                } else {
                    $('#addPurchaseModal-rmReceivedDate').removeAttr('disabled', true);
                }
            }
        </script>{{-- received date yes/no --}}
        <script>
            const addPurchaseModalform = (param) => {
                var data = new FormData(param);

                $('#addPurchaseModal-BtnSubmit').hide();
                $('#addPurchaseModal-BtnSubmit').next().removeClass('d-none');

                $.ajax({
                    url: "{{ route('purchase/xhr/purchase-list/add') }}",
                    type: "POST",
                    data: data,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        if (data.success == true) {
                            swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: "Successfully Added!",
                                    showConfirmButton: false,
                                    timer: 1000,
                                    width: '250px',
                                    padding: '10px',
                                })
                                .then((value) => {
                                    window.location.reload();
                                });
                        }
                    },
                    error: (xhr, Status, errorThrown) => {

                        if (xhr.responseJSON.success == false) {
                            swal.fire({
                                    position: 'top-end',
                                    icon: 'error',
                                    title: xhr.responseJSON.error,
                                    showConfirmButton: false,
                                    timer: 100000,
                                    width: '250px',
                                    padding: '10px',
                                })
                                .then((value) => {
                                    $('#addPurchaseModal-BtnSubmit').show();
                                    $('#addPurchaseModal-BtnSubmit').next().addClass('d-none');
                                });
                        } else {
                            swal.fire({
                                    position: 'top-end',
                                    icon: 'error',
                                    title: 'Not Added',
                                    showConfirmButton: false,
                                    timer: 100000,
                                    width: '250px',
                                    padding: '10px',
                                })
                                .then((value) => {
                                    $('#addPurchaseModal-BtnSubmit').show();
                                    $('#addPurchaseModal-BtnSubmit').next().addClass('d-none');
                                });
                        }

                    }
                })

                return false;
            }
        </script>{{-- add purchase form submit end here --}}
    </div>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            const select = new Choices('#addPurchaseModal-vendor');
            const select1 = new Choices('#addPurchaseModal-cczone');

            let table = new DataTable('#myTable', {
                caption: `purchase report on ${new Date().toLocaleString()}`,
                layout: {
                    topStart: {
                        buttons: [{
                                extend: 'excelHtml5',
                                title: `purchase report from {{ Carbon\Carbon::parse($from)->format('d-M-Y') }} to {{ Carbon\Carbon::parse($to)->format('d-M-Y') }}`
                            },
                            {
                                extend: 'pdfHtml5',
                                title: `purchase report from {{ Carbon\Carbon::parse($from)->format('d-M-Y') }} to {{ Carbon\Carbon::parse($to)->format('d-M-Y') }}`
                            },
                            {
                                extend: 'print',
                                title: `purchase report from {{ Carbon\Carbon::parse($from)->format('d-M-Y') }} to {{ Carbon\Carbon::parse($to)->format('d-M-Y') }}`
                            },
                        ]
                    }
                },
                "lengthMenu": [
                    [100, "All", 50, 25],
                    [100, "All", 50, 25]
                ]
            });
        });
    </script>
@endsection
