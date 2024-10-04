@extends('layouts.user_type.auth')

@section('content')
    @include('purchase.components.purchaseNav')

    <div class="card mb-4 px-4 py-2">
        <div class="card-body p-2">
            <div class="row justify-content-end align-items-center">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 ms-2 row justify-content-center align-items-center ">

                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 ms-2 row justify-content-center align-items-center">
                    <button type="button" class="btn bg-gradient-success btn-sm mb-0" data-bs-toggle="modal"
                        data-bs-target="#addPurchaseModal">
                        <i class="fas fa-store-alt text-lg opacity-10" aria-hidden="true"></i> Add Vendor
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center pb-0">
                    <h6 class="d-inline-block">Vendor List</h6>
                    <ul class="list-group list-group-horizontal ms-3">
                        <li class="list-group-item fw-bold">Total - {{ $lists->count() }}</li>
                        <li class="list-group-item">
                            <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-container="body"
                                data-animation="true">
                                Active
                            </span> -
                            <p class="text-xs font-weight-bold mb-0 d-inline">
                                {{ $lists->where('status', 1)->count() }}</p>
                        </li>
                        <li class="list-group-item"> <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="" data-container="body" data-animation="true">
                                In-Active
                            </span> -
                            <p class="text-xs font-weight-bold mb-0 d-inline">
                                {{ $lists->where('status', 0)->count() }}</p>
                        </li>

                    </ul>
                </div>
                <div class="card-body px-2 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0" id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="Company Date"
                                            data-container="body" data-animation="true">
                                            Company Name
                                        </span>
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        GST
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Phone
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Email
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Owner Name
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        status
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lists as $com)
                                    <tr>
                                        <td class="align-middle text-center">
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <i class="fas fa-store-alt text-lg opacity-10 avatar avatar-sm me-3 bg-gradient-primary"
                                                        aria-hidden="true"></i>
                                                </div>
                                                <div class="d-flex flex-column ">
                                                    <h6 class="mb-0 text-sm">{{ $com->company_name }}</h6>
                                                    <p class="text-xs text-secondary mb-0 text-start">
                                                        {{ $com->source_code }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $com->gst ?? '----' }}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">
                                                {{ $com->phone ?? '----' }}
                                            </p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">
                                                {{ $com->email ?? '----' }}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">
                                                {{ $com->owner_name ?? '----' }}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            @if ($com->status == 1)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-denger">In-Active</span>
                                            @endif
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs me-2"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                View
                                            </a>
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs me-2"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                Edit
                                            </a>
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-lg"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                <i class="fas fa-trash" style="color: #e86982;"></i>
                                            </a>
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
                                <input class="form-control" type="date" name="purchaseDate" value=""
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
                                    step="0.001" value="" id="addPurchaseModal-RMQuantuty" required>
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
                                <input class="form-control" type="date" name="receivedDate" value=""
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
                "bPaginate": false,
                "ordering": false,
                "info": false,
            });
        });
    </script>
@endsection
