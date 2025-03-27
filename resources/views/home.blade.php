@extends('layouts.app')
@section('title') Dashboard @stop
@section('contents')
<div class="g-3 lh-1 mb-3 row row-cols-1 row-cols-lg-4 row-cols-sm-2">
    <div class="col">
        <div class="card flex-row p-5"> <i
                class="align-items-center bg-black d-flex flex-shrink-0 fs-2 h-11 justify-content-center me-4 ph ph-list-checks rounded text-body-secondary w-11"
                style="--bs-bg-opacity:.2"></i>
            <div class="flex-grow-1">
                <div class="align-items-center d-flex mb-1">
                    <div class="fs-5 fw-medium mb-1 me-2 text-body-emphasis">687</div>
                    <div
                        class="align-items-center badge bg-danger bg-opacity-75 d-inline-flex fs-8 ms-auto mt-n1 rounded-pill text-body-emphasis">
                        <i class="fs-6 me-1 ph ph-arrow-circle-down"></i> 2.01% </div>
                </div> Total Projects
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card flex-row p-5"> <i
                class="align-items-center bg-black d-flex flex-shrink-0 fs-2 h-11 justify-content-center me-4 ph ph-receipt rounded text-body-secondary w-11"
                style="--bs-bg-opacity:.2"></i>
            <div class="flex-grow-1">
                <div class="align-items-center d-flex mb-1">
                    <div class="fs-5 fw-medium mb-1 me-2 text-body-emphasis">$284.92K</div>
                    <div
                        class="align-items-center badge bg-opacity-75 bg-success d-inline-flex fs-8 ms-auto mt-n1 rounded-pill">
                        <i class="fs-6 me-1 ph ph-arrow-circle-up"></i> 8.98% </div>
                </div> Total Expenses
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card flex-row p-5"> <i
                class="align-items-center bg-black d-flex flex-shrink-0 fs-2 h-11 justify-content-center me-4 ph ph-currency-circle-dollar rounded text-body-secondary w-11"
                style="--bs-bg-opacity:.2"></i>
            <div class="flex-grow-1">
                <div class="align-items-center d-flex mb-1">
                    <div class="fs-5 fw-medium mb-1 me-2 text-body-emphasis">28.35%</div>
                    <div
                        class="align-items-center badge bg-opacity-75 bg-success d-inline-flex fs-8 ms-auto mt-n1 rounded-pill">
                        <i class="fs-6 me-1 ph ph-arrow-circle-up"></i> 13.45% </div>
                </div> Budget Spent
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card flex-row p-5"> <i
                class="align-items-center bg-black d-flex flex-shrink-0 fs-2 h-11 justify-content-center me-4 ph ph-piggy-bank rounded text-body-secondary w-11"
                style="--bs-bg-opacity:.2"></i>
            <div class="flex-grow-1">
                <div class="align-items-center d-flex mb-1">
                    <div class="fs-5 fw-medium mb-1 me-2 text-body-emphasis">$982.12K</div>
                    <div
                        class="align-items-center badge bg-danger bg-opacity-75 d-inline-flex fs-8 ms-auto mt-n1 rounded-pill">
                        <i class="fs-6 me-1 ph ph-arrow-circle-down"></i> 0.54% </div>
                </div> Total Budget
            </div>
        </div>
    </div>
</div>
@endsection
