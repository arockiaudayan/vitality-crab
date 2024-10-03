@extends('layouts.user_type.auth')

@section('content')
    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
        <a href="{{ route('dashboard') }}" class="btn btn-outline-primary btn-sm text-primary">Dashboard</a>

        <input type="radio" class="btn-check" name="board" id="btnradio2KanbanBoard" autocomplete="off" checked disabled>
        <label class="btn btn-outline-primary btn-sm" for="btnradio2KanbanBoard"><a href="{{ route('kanban-board') }}"
                class="text-white">Kanban Board</a></label>
    </div>
    <h5 class="font-weight-bolder mt-4">
        Kanban board
    </h5>
    <div class="row ">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card h-100">
                <div class="card-header pb-0">
                    <h6>Pruchase</h6>
                </div>
                <div class="card-body p-1">
                    <div class="card h-100 p-2">
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-auto mb-2" role="button">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                <h6 class="text-white text-sm font-weight-bold mb-0">#AS0026</h6>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Purchase Date" data-container="body"
                                    data-animation="true">PM_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Received Date" data-container="body"
                                    data-animation="true">RM_D : 22 DEC 2024</p>
                                <span class="badge badge-sm bg-gradient-success align-self-end mt-2 ">Received</span>
                                <small class="align-self-end "><i class="text-white fw-bold " style="font-size: 8px;">--
                                        Waiting for
                                        Picking</i></small>
                                <span class="badge badge-success align-self-end mt-1"></span>
                            </div>
                        </div>
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-auto mb-2" role="button">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                <h6 class="text-white text-sm font-weight-bold mb-0">#AS0027</h6>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Purchase Date" data-container="body"
                                    data-animation="true">PM_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Received Date" data-container="body"
                                    data-animation="true">RM_D : ----</p>
                                <span class="badge badge-sm bg-gradient-warning align-self-end mt-2 ">Not-Received</span>

                            </div>
                        </div>
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-auto mb-2" role="button">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                <h6 class="text-white text-sm font-weight-bold mb-0">#AS0028</h6>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Purchase Date" data-container="body"
                                    data-animation="true">PM_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Received Date" data-container="body"
                                    data-animation="true">RM_D : ----</p>
                                <span class="badge badge-sm bg-gradient-warning align-self-end mt-2 ">Not-Received</span>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card h-100">
                <div class="card-header pb-0">
                    <h6>Picking</h6>
                </div>
                <div class="card-body p-1">
                    <div class="card h-100 p-2">
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-auto mb-2" role="button">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                <h6 class="text-white text-sm font-weight-bold mb-0">#AS0029</h6>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Purchase Date" data-container="body"
                                    data-animation="true">PM_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Received Date" data-container="body"
                                    data-animation="true">RM_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Picking Date" data-container="body"
                                    data-animation="true">PI_D : 22 DEC 2024</p>
                                <span class="badge badge-sm bg-gradient-success align-self-end mt-2 ">Picked</span>
                                <small class="align-self-end "><i class="text-white fw-bold " style="font-size: 8px;">--
                                        Waiting for
                                        processing</i></small>

                            </div>
                        </div>
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-auto mb-2"
                            role="button">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                <h6 class="text-white text-sm font-weight-bold mb-0">#AS0030</h6>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Purchase Date" data-container="body"
                                    data-animation="true">PM_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Received Date" data-container="body"
                                    data-animation="true">RM_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Picking Date" data-container="body"
                                    data-animation="true">PI_D : 22 DEC 2024</p>
                                <span class="badge badge-sm bg-gradient-warning align-self-end mt-2 ">In-Picking</span>

                            </div>
                        </div>
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-auto mb-2"
                            role="button">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                <h6 class="text-white text-sm font-weight-bold mb-0">#AS0031</h6>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Purchase Date" data-container="body"
                                    data-animation="true">PM_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Received Date" data-container="body"
                                    data-animation="true">RM_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Picking Date" data-container="body"
                                    data-animation="true">PI_D : 22 DEC 2024</p>
                                <span class="badge badge-sm bg-gradient-warning align-self-end mt-2 ">In-Picking</span>

                            </div>
                        </div>
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-auto mb-2"
                            role="button">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                <h6 class="text-white text-sm font-weight-bold mb-0">#AS0031</h6>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Purchase Date" data-container="body"
                                    data-animation="true">PM_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Received Date" data-container="body"
                                    data-animation="true">RM_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Picking Date" data-container="body"
                                    data-animation="true">PI_D : 22 DEC 2024</p>
                                <span class="badge badge-sm bg-gradient-warning align-self-end mt-2 ">In-Picking</span>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card h-100">
                <div class="card-header pb-0">
                    <h6>Processing</h6>
                </div>
                <div class="card-body p-1">
                    <div class="card h-100 p-2">
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-auto mb-2"
                            role="button">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                <h6 class="text-white text-sm font-weight-bold mb-0">#AS0030</h6>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Purchase Date" data-container="body"
                                    data-animation="true">PM_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Received Date" data-container="body"
                                    data-animation="true">RM_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Picking Date" data-container="body"
                                    data-animation="true">PI_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Processing Date" data-container="body"
                                    data-animation="true">PR_D : 22 DEC 2024</p>
                                <span class="badge badge-sm bg-gradient-warning align-self-end mt-2 ">In-Processing</span>
                            </div>
                        </div>
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-auto mb-2"
                            role="button">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                <h6 class="text-white text-sm font-weight-bold mb-0">#AS0031</h6>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Purchase Date" data-container="body"
                                    data-animation="true">PM_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Received Date" data-container="body"
                                    data-animation="true">RM_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Picking Date" data-container="body"
                                    data-animation="true">PI_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Processing Date" data-container="body"
                                    data-animation="true">PR_D : 22 DEC 2024</p>
                                <span class="badge badge-sm bg-gradient-secondary align-self-end mt-2 ">In-Complete</span>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card h-100">
                <div class="card-header pb-0">
                    <h6>Completed</h6>
                    <p class="text-sm">
                        <span class="font-weight-bold" role="button"><i>Click to view all</i></span>
                    </p>
                </div>
                <div class="card-body p-1">
                    <div class="card h-100 p-2">
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-auto mb-2 "
                            role="button">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                <h6 class="text-white text-sm font-weight-bold mb-0">#AS0030</h6>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Purchase Date" data-container="body"
                                    data-animation="true">PM_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Received Date" data-container="body"
                                    data-animation="true">RM_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Picking Date" data-container="body"
                                    data-animation="true">PI_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Processing Date" data-container="body"
                                    data-animation="true">PR_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="P Date" data-container="body"
                                    data-animation="true">Loss (kg) : <i class="fa fa-arrow-up text-success"
                                        aria-hidden="true"></i>
                                    <span class="font-weight-bold text-white">0%</span>
                                </p>
                                <span class="badge badge-sm bg-gradient-success align-self-end mt-1 ">Complete</span>
                            </div>
                        </div>
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-auto mb-2"
                            role="button">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                <h6 class="text-white text-sm font-weight-bold mb-0">#AS0031</h6>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Purchase Date" data-container="body"
                                    data-animation="true">PM_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Received Date" data-container="body"
                                    data-animation="true">RM_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Picking Date" data-container="body"
                                    data-animation="true">PI_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Processing Date" data-container="body"
                                    data-animation="true">PR_D : 22 DEC 2024</p>
                                <p class="text-white font-weight-bold text-xs mt-1 mb-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="P Date" data-container="body"
                                    data-animation="true">Loss (kg) : <i class="fa fa-arrow-down text-danger"
                                        aria-hidden="true"></i>
                                    <span class="font-weight-bold text-white">8%</span>
                                </p>
                                <span class="badge badge-sm bg-gradient-success align-self-end mt-1 ">Complete</span>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
