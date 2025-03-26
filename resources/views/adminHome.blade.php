@extends('layouts.app')
@section('title') Dashboard @stop
@section('layouts.header') @stop
@section('contents')
@section('layouts.sidebar') @stop
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
<div class="g-3 mb-3 row row-cols-lg-2">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="align-items-start d-flex mb-3">
                    <h5 class="card-title flex-grow-1 m-0"> Budget and Expenses </h5>
                    <div class="d-none d-sm-inline-flex gap-1 me-n1.5 mt-n1.5"> <a href
                            class="icon ph ph-info"></a> <a href
                            class="d-none d-sm-flex icon ph ph-download"></a> <a href
                            class="d-none d-sm-flex icon ph ph-printer"></a> </div>
                </div>
                <div class="chart"> <canvas id="chart-budget-expenses"></canvas> </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="align-items-start d-flex mb-3">
                    <h5 class="card-title flex-grow-1 m-0"> Budget Utilization </h5>
                    <div class="d-none d-sm-inline-flex gap-1 me-n1.5 mt-n1.5"> <a href
                            class="icon ph ph-info"></a> <a href
                            class="d-none d-sm-flex icon ph ph-download"></a> <a href
                            class="d-none d-sm-flex icon ph ph-printer"></a> </div>
                </div>
                <div class="chart"> <canvas id="chart-budget-utilization"></canvas> </div>
            </div>
        </div>
    </div>
</div>
<div class="gap-3 masonry mb-n3">
    <div class="card">
        <div class="card-body">
            <div class="align-items-start d-flex mb-7">
                <h5 class="card-title flex-grow-1 m-0"> Projects by Status </h5>
                <div class="d-flex gap-1 me-n1.5 mt-n1.5"> <a href class="icon ph ph-info"></a> </div>
            </div>
            <div class="chart mb-5"> <canvas id="chart-projects-by-status"></canvas> </div>
            <div id="list-projects-by-status" class="mb-n2"></div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="align-items-start d-flex mb-7">
                <h5 class="card-title flex-grow-1 m-0"> Health </h5>
                <div class="d-flex gap-1 me-n1.5 mt-n1.5"> <a href class="icon ph ph-info"></a> </div>
            </div>
            <div id="list-health"></div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="align-items-start d-flex mb-7">
                <h5 class="card-title flex-grow-1 m-0"> Tickets Reopened </h5>
                <div class="d-flex gap-1 me-n1.5 mt-n1.5"> <a href class="icon ph ph-info"></a> </div>
            </div>
            <div class="g-2 mb-5 row row-cols-3">
                <div class="col">
                    <div class="border lh-1 p-3 rounded">
                        <div class="fs-5 mb-1.5 text-body-emphasis">202</div>
                        <div class="fs-7 text-body-secondary">Reopened Tickets</div>
                    </div>
                </div>
                <div class="col">
                    <div class="border lh-1 p-3 rounded">
                        <div class="fs-5 mb-1.5 text-body-emphasis">9.85%</div>
                        <div class="fs-7 text-body-secondary">Percentage</div>
                    </div>
                </div>
                <div class="col">
                    <div class="border lh-1 p-3 rounded">
                        <div class="align-items-center d-flex fs-5 mb-1.5"> 3.54% <i
                                class="ms-1 ph ph-arrow-circle-up"></i> </div>
                        <div class="fs-7 text-body-secondary">vs. Previous Month</div>
                    </div>
                </div>
            </div>
            <div class="chart chart-sm mb-1"> <canvas id="chart-tickets-reopened"></canvas> </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="align-items-start d-flex mb-4">
                <h5 class="card-title flex-grow-1 m-0"> Current Tasks </h5>
                <div class="d-flex gap-px me-n1.5 mt-n1.5"> <a href class="icon ph ph-info"></a> </div>
            </div>
            <div
                class="align-items-center d-flex fs-7 justify-content-between py-3 rounded text-body-secondary">
                <div class="flex-shrink-0 px-3 w-sm-40">Project</div>
                <div class="flex-shrink-0 px-3 w-sm-16">Risk</div>
                <div class="d-none d-sm-block flex-shrink-0 px-3 text-end w-28">End Date</div>
                <div class="d-none d-sm-block flex-shrink-0 px-3 text-end w-14">Done</div>
            </div>
            <div id="list-upcoming-tasks"></div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="align-items-start d-flex mb-7">
                <h5 class="card-title flex-grow-1 m-0"> Overdue Projects </h5>
                <div class="d-flex gap-1 me-n1.5 mt-n1.5"> <a href class="icon ph ph-info"></a> </div>
            </div>
            <div id="list-overdue-projects"></div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="align-items-start d-flex mb-7">
                <h5 class="card-title flex-grow-1 m-0"> Planned vs Actual </h5>
                <div class="d-flex gap-1 me-n1.5 mt-n1.5"> <a href class="icon ph ph-info"></a> </div>
            </div>
            <div class="chart"> <canvas id="chart-planned-vs-actual"></canvas> </div>
        </div>
    </div>
</div>
@endsection
