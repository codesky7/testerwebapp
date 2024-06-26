@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="page-inner">
        <!--================================-->
        <!-- Breadcrumb Start -->
        <!--================================-->
        <div class="pageheader pd-t-25 pd-b-35">
            <div class="d-flex justify-content-between">
                <div class="clearfix">
                    <div class="pd-t-5 pd-b-5">
                        <h1 class="pd-0 mg-0 tx-20 tx-dark">Sales Monitoring</h1>
                    </div>
                    <div class="breadcrumb pd-0 mg-0">
                        <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
                        <a class="breadcrumb-item" href="">Dashboard</a>
                        <span class="breadcrumb-item active">Sales Monitoring</span>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <button id="dashboardDate"
                        class="btn btn-default dropdown-toggle mr-2 d-none d-md-block pd-y-8-force"></button>
                    <button type="button" class="btn btn-default mr-2 d-none d-none d-lg-block pd-t-6-force pd-b-5-force">
                        <i data-feather="log-in" class="wd-16 mr-2"></i>Import</button>
                    <button type="button"
                        class="btn btn-default mr-2 mb-2 mb-md-0 d-none d-lg-block pd-t-6-force pd-b-5-force">
                        <i data-feather="printer" class="wd-16 mr-2"></i>Print</button>
                    <button type="button" class="btn btn-default mb-2 mb-md-0 d-none d-lg-block pd-t-6-force pd-b-5-force">
                        <i data-feather="download" class="wd-16 mr-2"></i>Download Report</button>
                </div>
            </div>
        </div>
        <!--/ Breadcrumb End -->
        <!--================================-->
        <!--  Start -->
        <!--================================-->
        <div class="row clearfix">
            <!--================================-->
            <!-- Heard Card Start -->
            <!--================================-->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card mg-b-30">
                    <div class="card-body">
                        <h5 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Today Sales</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">$1,181</h2>
                        </div>
                        <div class="d-flex align-items-center tx-gray-500 tx-11"><span
                                class="tx-success mr-2 d-flex align-items-center"><i
                                    class="ti-arrow-up tx-8 mr-1 tx-8"></i>+1,551</span>since last day</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card mg-b-30">
                    <div class="card-body">
                        <h5 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Today Earning</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">$11,241</h2>
                        </div>
                        <div class="d-flex align-items-center tx-gray-500 tx-11"><span
                                class="tx-danger mr-2 d-flex align-items-center"><i
                                    class="ti-arrow-down tx-8 mr-1 tx-8"></i>-1,003</span>since last day</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card mg-b-30">
                    <div class="card-body">
                        <h5 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Average Order Value</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">$3,241</h2>
                        </div>
                        <div class="d-flex align-items-center tx-gray-500 tx-11"><span
                                class="tx-success mr-2 d-flex align-items-center"><i
                                    class="ti-arrow-up tx-8 mr-1 tx-8"></i>+2,012</span>since last day</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card mg-b-30">
                    <div class="card-body">
                        <h5 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Total Earning</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">$74,254</h2>
                        </div>
                        <div class="d-flex align-items-center tx-gray-500 tx-11"><span
                                class="tx-danger mr-2 d-flex align-items-center"><i
                                    class="ti-arrow-down tx-8 mr-1 tx-8"></i>-1,120</span>since last month</div>
                    </div>
                </div>
            </div>
            <!--/ Heard Card End -->
        </div>
        <div class="row clearfix">
            <!--================================-->
            <!-- Annual Report and Bar Chart Start -->
            <!--================================-->
            <div class="col-xl-9">
                <div class="card mg-b-30">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="row mg-b-20">
                                    <div class="col-sm-12 col-md-6 col-xl-12 mg-t-0">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Today Sales</h6>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mg-b-5">
                                            <h5 class="mg-b-0 tx-dark tx-rubik tx-normal"><span
                                                    class="counter">$1,860</span></h5>
                                            <div class="d-flex align-items-center tx-gray-700"><span
                                                    class="small text-success mr-2 d-flex align-items-center"><i
                                                        class="ti-arrow-up mr-1 tx-8"></i>+351</span></div>
                                        </div>
                                        <div class="progress ht-3 mg-b-0">
                                            <div class="progress-bar bg-teal wd-70p" role="progressbar" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-12 mg-t-30 mg-md-t-0 mg-xl-t-30">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Today Earning
                                            </h6>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mg-b-5">
                                            <h5 class="mg-b-0 tx-dark tx-rubik tx-normal"><span
                                                    class="counter">$2,530</span></h5>
                                            <div class="d-flex align-items-center tx-gray-700"><span
                                                    class="small text-success mr-2 d-flex align-items-center"><i
                                                        class="ti-arrow-up mr-1 tx-8"></i>+425</span></div>
                                        </div>
                                        <div class="progress ht-3 mg-b-0">
                                            <div class="progress-bar bg-success wd-80p" role="progressbar"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-12 mg-t-30">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Average Order
                                            </h6>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mg-b-5">
                                            <h5 class="mg-b-0 tx-dark tx-rubik tx-normal"><span
                                                    class="counter">$2,148</span></h5>
                                            <div class="d-flex align-items-center tx-gray-700"><span
                                                    class="small text-danger mr-2 d-flex align-items-center"><i
                                                        class="ti-arrow-down mr-1 tx-8"></i>-211</span></div>
                                        </div>
                                        <div class="progress ht-3 mg-b-0">
                                            <div class="progress-bar bg-danger wd-70p" role="progressbar"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-12 mg-t-30">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Total Revenue
                                            </h6>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mg-b-5">
                                            <h5 class="mg-b-0 tx-dark tx-rubik tx-normal"><span
                                                    class="counter">$11,290</span></h5>
                                            <div class="d-flex align-items-center tx-gray-700"><span
                                                    class="small text-success mr-2 d-flex align-items-center"><i
                                                        class="ti-arrow-up mr-1 tx-8"></i>+151</span></div>
                                        </div>
                                        <div class="progress ht-3 mg-b-0">
                                            <div class="progress-bar bg-primary wd-65p" role="progressbar"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9">
                                <div class="clearfix">
                                    <div id="salesBarChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mg-b-30">
                            <div class="card-body">
                                <div class="pd-b-20">
                                    <h3 class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-0">Profit Share</h3>
                                    <p class="tx-13 tx-gray-500 mb-0">Profit Share between customers</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="wd-50p ht-100" id="salesDonut1"></div>
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-primary mr-2"></div>
                                            <div class="tx-gray-500">37% Sport Tickets</div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-warning mr-2"></div>
                                            <div class="tx-gray-500">47% Business Events</div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-success mr-2"></div>
                                            <div class="tx-gray-500">19% Others</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mg-b-30">
                            <div class="card-body">
                                <div class="pd-b-20">
                                    <h3 class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-0">Revenue Change</h3>
                                    <p class="tx-13 tx-gray-500 mb-0">Revenue change breakdown by cities</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="wd-50p ht-100" id="salesDonut2"></div>
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-primary mr-2"></div>
                                            <div class="tx-gray-500">+10% New York</div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-warning mr-2"></div>
                                            <div class="tx-gray-500">-7% London</div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-success mr-2"></div>
                                            <div class="tx-gray-500">+20% California</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Annual Report and Bar Chart End -->
            <!--================================-->
            <!-- Earnings Details Start -->
            <!--================================-->
            <div class="col-xl-3">
                <div class="card mg-b-30">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-12">
                            <div class="media pd-t-20 pd-x-20">
                                <div
                                    class="wd-40 ht-40 bg-primary tx-white mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded">
                                    <i data-feather="bar-chart-2"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-gray-500 mg-b-5">Gross Earnings</h6>
                                    <h5 class="tx-20 tx-sm-18 tx-md-20 tx-normal tx-rubik mg-b-0">$51,958<small
                                            class="tx-12">.50</small></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-12">
                            <div class="media pd-y-20 pd-x-20">
                                <div
                                    class="wd-40 ht-40 bg-warning tx-white mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded">
                                    <i data-feather="bar-chart-2"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-gray-500 mg-b-5">Net Earnings</h6>
                                    <h5 class="tx-20 tx-sm-18 tx-md-20 tx-normal tx-rubik mg-b-0">$31,608<small
                                            class="tx-12">.50</small></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-12">
                            <div class="media pd-b-20 pd-x-20 pd-md-t-20 pd-xl-t-0">
                                <div
                                    class="wd-40 ht-40 bg-pink tx-white mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded">
                                    <i data-feather="bar-chart-2"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-gray-500 mg-b-5">Tax Withheld</h6>
                                    <h5 class="tx-20 tx-sm-18 tx-md-20 tx-normal tx-rubik mg-b-0">$24,769<small
                                            class="tx-12">.50</small></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pd-0">
                        <div class="table-responsive">
                            <table class="table table-hover tx-12 mb-0">
                                <thead class="tx-10 tx-uppercase">
                                    <tr>
                                        <th class="wd-40">Date</th>
                                        <th class="wd-25 text-right">Orders</th>
                                        <th class="wd-35 text-right">Earnings</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="tx-13">05/04/2019</td>
                                        <td class="text-right tx-teal">2,369</td>
                                        <td class="text-right tx-pink">$258,963</td>
                                    </tr>
                                    <tr>
                                        <td class="tx-13">01/05/2019</td>
                                        <td class="text-right tx-teal">1,950</td>
                                        <td class="text-right tx-pink">$123,654</td>
                                    </tr>
                                    <tr>
                                        <td class="tx-13">02/05/2019</td>
                                        <td class="text-right tx-teal">1,198</td>
                                        <td class="text-right tx-pink">$369,852</td>
                                    </tr>
                                    <tr>
                                        <td class="tx-13">12/06/2019</td>
                                        <td class="text-right tx-teal">1,456</td>
                                        <td class="text-right tx-pink">$789,125</td>
                                    </tr>
                                    <tr>
                                        <td class="tx-13">20/06/2019</td>
                                        <td class="text-right tx-teal">1,198</td>
                                        <td class="text-right tx-pink">$357,489</td>
                                    </tr>
                                    <tr>
                                        <td class="tx-13">02/06/2019</td>
                                        <td class="text-right tx-teal">1,458</td>
                                        <td class="text-right tx-pink">$541,478</td>
                                    </tr>
                                    <tr>
                                        <td class="tx-13">01/07/2019</td>
                                        <td class="text-right tx-teal">1,257</td>
                                        <td class="text-right tx-pink">$951,357</td>
                                    </tr>
                                    <tr>
                                        <td class="tx-13">02/07/2019</td>
                                        <td class="text-right tx-teal">1,147</td>
                                        <td class="text-right tx-pink">$124,452</td>
                                    </tr>
                                    <tr>
                                        <td class="tx-13">04/08/2019</td>
                                        <td class="text-right tx-teal">1,478</td>
                                        <td class="text-right tx-pink">$145,452</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- table-responsive -->
                    </div>
                </div>
            </div>
            <!--/ Earnings Details End -->
        </div>
        <div class="row">
            <!--================================-->
            <!-- Expansions Details Start -->
            <!--================================-->
            <div class="col-xl-6">
                <div class="card mg-b-30">
                    <div class="card-body pd-b-0">
                        <div class="row mg-b-20">
                            <div class="col-lg-6">
                                <h5 class="mb-0 tx-14 tx-semibold">Your Most Recent Earnings</h5>
                                <div class="tx-12 tx-gray-500">Customers who have upgraded the level of your products or
                                    service.</div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="d-inline-ock btn-group mb-3 mb-md-0 ft-right" role="group">
                                    <button type="button" class="btn btn-default">Today</button>
                                    <button type="button" class="btn btn-default d-none d-md-block">Week</button>
                                    <button type="button" class="btn btn-default">Month</button>
                                    <button type="button" class="btn btn-default">Year</button>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix mg-b-20">
                            <div class="col-md-4 col-lg-4 col-xl-4 mg-t-20 mg-sm-t-0 mg-md-t-20 mg-lg-t-0">
                                <div class="media">
                                    <div
                                        class="wd-40 ht-40 rounded bd bd-2 bd-primary d-flex flex-shrink-0 align-items-center justify-content-center">
                                        <i data-feather="bar-chart-2" class="wd-20 ht-20 tx-primary"></i>
                                    </div>
                                    <div class="media-body mg-l-10">
                                        <p class="tx-10 tx-uppercase tx-primary tx-spacing-1 mg-b-0 tx-medium">Expansions
                                        </p>
                                        <h5 class="tx-normal tx-rubik lh-1 mg-b-5">$92,350<small>.50</small></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-xl-4 mg-t-20 mg-sm-t-0 mg-md-t-20 mg-lg-t-0">
                                <div class="media">
                                    <div
                                        class="wd-40 ht-40 rounded bd bd-2 bd-danger d-flex flex-shrink-0 align-items-center justify-content-center">
                                        <i data-feather="bar-chart-2" class="wd-20 ht-20 tx-danger"></i>
                                    </div>
                                    <div class="media-body mg-l-10">
                                        <p class="tx-10 tx-uppercase tx-danger tx-spacing-1 mg-b-0 tx-medium">Cancellations
                                        </p>
                                        <h5 class="tx-normal tx-rubik lh-1 mg-b-5">$10,301<small>.00</small></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-xl-4 mg-t-20 mg-sm-t-0 mg-md-t-20 mg-lg-t-0">
                                <div class="media">
                                    <div
                                        class="wd-40 ht-40 rounded bd bd-2 bd-success d-flex flex-shrink-0 align-items-center justify-content-center">
                                        <i data-feather="bar-chart-2" class="wd-20 ht-20 tx-success"></i>
                                    </div>
                                    <div class="media-body mg-l-10">
                                        <p class="tx-10 tx-uppercase tx-success tx-spacing-1 mg-b-0 tx-medium">Revenue</p>
                                        <h5 class="tx-normal tx-rubik lh-1 mg-b-5">$45,254<small>.00</small></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix mg-b-20">
                            <div id="stackedBarChart" style="height: 220px"></div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-dashboard mg-b-0">
                            <thead class="tx-10 tx-uppercase">
                                <tr>
                                    <th>Date</th>
                                    <th class="text-right">Gross Earnings</th>
                                    <th class="text-right">Total Orders</th>
                                    <th class="text-right">Net Earnings</th>
                                </tr>
                            </thead>
                            <tbody class="tx-13">
                                <tr>
                                    <td class="">02/04/2019</td>
                                    <td class="tx-success tx-right">$30,123<small>.50</small></td>
                                    <td class="tx-primary tx-right">5,258</td>
                                    <td class="tx-gray-500 tx-right">$25,147 <span class="mg-l-5 tx-10  tx-success"><i
                                                class="ti-arrow-up tx-8"></i> 2.41%</span></td>
                                </tr>
                                <tr>
                                    <td class="">03/04/2019</td>
                                    <td class="tx-success tx-right">$28,325<small>.50</small></td>
                                    <td class="tx-primary tx-right">4,257</td>
                                    <td class="tx-gray-500 tx-right">$24,152 <span class="mg-l-5 tx-10  tx-danger"><i
                                                class="ti-arrow-down tx-8"></i> 2.41%</span></td>
                                </tr>
                                <tr>
                                    <td class="">01/05/2019</td>
                                    <td class="tx-success tx-right">$26,789<small>.50</small></td>
                                    <td class="tx-primary tx-right">3,271</td>
                                    <td class="tx-gray-500 tx-right">$20,369 <span class="mg-l-5 tx-10  tx-success"><i
                                                class="ti-arrow-up tx-8"></i> 2.41%</span></td>
                                </tr>
                                <tr>
                                    <td class="">08/05/2019</td>
                                    <td class="tx-success tx-right">$22,963<small>.50</small></td>
                                    <td class="tx-primary tx-right">2,854</td>
                                    <td class="tx-gray-500 tx-right">$19,475 <span class="mg-l-5 tx-10  tx-success"><i
                                                class="ti-arrow-up tx-8"></i> 2.41%</span></td>
                                </tr>
                                <tr>
                                    <td class="">12/06/2019</td>
                                    <td class="tx-success tx-right">$20,145<small>.50</small></td>
                                    <td class="tx-primary tx-right">2,147</td>
                                    <td class="tx-gray-500 tx-right">$14,478 <span class="mg-l-5 tx-10  tx-danger"><i
                                                class="ti-arrow-down tx-8"></i> 2.41%</span></td>
                                </tr>
                                <tr>
                                    <td class="">22/06/2019</td>
                                    <td class="tx-success tx-right">$18,123<small>.50</small></td>
                                    <td class="tx-primary tx-right">1,563</td>
                                    <td class="tx-gray-500 tx-right">$12,452 <span class="mg-l-5 tx-10  tx-success"><i
                                                class="ti-arrow-up tx-8"></i> 2.41%</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Expansions Details End -->
            <!--================================-->
            <!-- Search Result Details Start -->
            <!--================================-->
            <div class="col-xl-6">
                <div class="card mg-b-30">
                    <div class="card-body pd-b-0">
                        <div id="world-map" style="height: 340px;"></div>
                        <div class="row search-statistic">
                            <div class="col-sm-4 col-md-4 col-lg-4 pd-20 bd-r bd-b">
                                <div class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-5">Organic Search</div>
                                <div class="d-flex align-items-center">
                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-primary mr-2"></div>
                                    <div class="tx-12 tx-gray-500">1,125,367 <small class="tx-success">+27%</small></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 pd-20 bd-r bd-b">
                                <div class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-5">Google Search</div>
                                <div class="d-flex align-items-center">
                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-success mr-2"></div>
                                    <div class="tx-12 tx-gray-500">1,125,367 <small class="tx-success">+34%</small></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 pd-20">
                                <div class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-5">Bing Search</div>
                                <div class="d-flex align-items-center">
                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-warning mr-2"></div>
                                    <div class="tx-12 tx-gray-500">1,125,367 <small class="tx-danger">-32%</small></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 pd-20 bd-t bd-r">
                                <div class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-5">Yandex Search</div>
                                <div class="d-flex align-items-center">
                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-danger mr-2"></div>
                                    <div class="tx-12 tx-gray-500">1,125,367 <small class="tx-danger">-22%</small></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 pd-20 bd-t bd-r">
                                <div class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-5">DuckDuckGo Search</div>
                                <div class="d-flex align-items-center">
                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-teal mr-2"></div>
                                    <div class="tx-12 tx-gray-500">1,125,367 <small class="tx-success">+42%</small></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 pd-20 bd-t">
                                <div class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-5">Baidu Search</div>
                                <div class="d-flex align-items-center">
                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-info mr-2"></div>
                                    <div class="tx-12 tx-gray-500">1,125,367 <small class="tx-success">+15%</small></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 pd-20 bd-t bd-r">
                                <div class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-5">DuckDuckGo Search</div>
                                <div class="d-flex align-items-center">
                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-teal mr-2"></div>
                                    <div class="tx-12 tx-gray-500">1,125,367 <small class="tx-success">+42%</small></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 pd-20 bd-t bd-r">
                                <div class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-5">Baidu Search</div>
                                <div class="d-flex align-items-center">
                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-info mr-2"></div>
                                    <div class="tx-12 tx-gray-500">1,125,367 <small class="tx-success">+15%</small></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 pd-20 bd-t bd-r">
                                <div class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-5">Yandex Search</div>
                                <div class="d-flex align-items-center">
                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-danger mr-2"></div>
                                    <div class="tx-12 tx-gray-500">1,125,367 <small class="tx-danger">-22%</small></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Search Result Details End -->
        </div>
        <!--================================-->
        <!-- Sales Details Start -->
        <!--================================-->
        <div class="row clearfix">
            <div class="col-lg-6">
                <div class="card mg-b-30">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5 col-lg-4 col-xl-6 order-1 order-sm-0 mg-t-20 mg-sm-t-0">
                                <div class="clearfix">
                                    <div id="flotBarRecentOrders" style="height: 100px"></div>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-xl-6">
                                <div class="pd-0">
                                    <div class="d-flex align-items-baseline mg-b-5">
                                        <h1 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">1,245</h1>
                                        <span class="d-flex align-items-center tx-success mg-l-2 tx-10"><i
                                                class="ti-arrow-up tx-8 tx-success tx-8 mr-1"></i>11.24%</span>
                                    </div>
                                    <h6 class="tx-11 tx-primary tx-uppercase">Recent Orders</h6>
                                    <p class="tx-11 tx-sm-12 mg-b-0 tx-gray-500">Habi tasse labo rum purus, vesti bulum
                                        at<span class="d-none d-sm-inline"> vivamus tempor port titor vulpu</span>... <a
                                            href="">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                </div>
                <!-- card -->
            </div>
            <div class="col-lg-6">
                <div class="card mg-b-30">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5 col-lg-4 col-xl-6 order-1 order-sm-0 mg-t-20 mg-sm-t-0">
                                <div class="clearfix">
                                    <div id="flotBarCompleteOrders" style="height: 100px"></div>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-xl-6">
                                <div class="pd-0">
                                    <div class="d-flex align-items-baseline mg-b-5">
                                        <h1 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">9,540</h1>
                                        <span class="d-flex align-items-center tx-danger mg-l-2 tx-10"><i
                                                class="ti-arrow-down tx-8 tx-danger tx-8 mr-1"></i>10.9%</span>
                                    </div>
                                    <h6 class="tx-11 tx-pink tx-uppercase">Complete Orders</h6>
                                    <p class="tx-12 mg-b-0 tx-gray-500">Habi tasse labo rum purus, vesti bulum<span
                                            class="d-none d-sm-inline"> at vivamus tempor port titor vulpu</span>... <a
                                            href="">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                </div>
                <!-- card -->
            </div>
        </div>
        <!--/ Sales Details End -->
        <div class="row">
            <!--================================-->
            <!-- New Customers Start -->
            <!--================================-->
            <div class="col-lg-6 col-xl-4">
                <div class="card mg-b-30">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h6 class="tx-13 mb-0">New Customers</h6>
                        <div class="card-header-btn">
                            <div class="dropdown">
                                <a href="" class="" data-toggle="dropdown"><i class="ti-more"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="" class="dropdown-item"><i data-feather="info"
                                            class="wd-16 mr-2"></i>View Details</a>
                                    <a href="" class="dropdown-item"><i data-feather="share"
                                            class="wd-16 mr-2"></i>Share</a>
                                    <a href="" class="dropdown-item"><i data-feather="download"
                                            class="wd-16 mr-2"></i>Download</a>
                                    <a href="" class="dropdown-item"><i data-feather="copy"
                                            class="wd-16 mr-2"></i>Copy to</a>
                                    <a href="" class="dropdown-item"><i data-feather="folder"
                                            class="wd-16 mr-2"></i>Move to</a>
                                    <a href="" class="dropdown-item"><i data-feather="edit"
                                            class="wd-16 mr-2"></i>Rename</a>
                                    <a href="" class="dropdown-item"><i data-feather="trash"
                                            class="wd-16 mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pd-y-20">
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-center mg-b-15">
                                <a href="">
                                    <div class="avatar avatar-online"><span
                                            class="avatar-initial rounded-circle bg-gray-800">A</span><i></i></div>
                                </a>
                                <div class="media-body pd-l-15 lh-2">
                                    <p class="tx-medium mg-b-2"><a href="">Archie Cantones</a></p>
                                    <span class="tx-12 tx-gray-500">Joined: 01 Mar, 2019</span>
                                </div>
                                <div class="mg-l-auto d-flex align-self-center action-icon">
                                    <nav class="nav nav-icon-only">
                                        <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                            data-placement="top" data-original-title="Send Message"><i
                                                data-feather="mail" class="wd-16"></i></a>
                                        <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                            data-placement="top" data-original-title="Add to Fiend"><i
                                                data-feather="user-plus" class="wd-16"></i></a>
                                        <a href="" class="mr-2 tx-gray-500" data-toggle="tooltip" title=""
                                            data-placement="top" data-original-title="Flag User"><i data-feather="flag"
                                                class="wd-16"></i></a>
                                        <a href="" data-toggle="tooltip" class="tx-gray-500" title=""
                                            data-placement="top" data-original-title="More Options"><i
                                                data-feather="more-vertical" class="wd-16"></i></a>
                                    </nav>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mg-b-15">
                                <a href="">
                                    <div class="avatar avatar-online"><span
                                            class="avatar-initial rounded-circle bg-primary">H</span><i></i></div>
                                </a>
                                <div class="media-body pd-l-15 lh-2">
                                    <p class="tx-medium mg-b-2"><a href="">Holmes Cherryman</a></p>
                                    <span class="tx-12 tx-gray-500">Joined: 06 Mar, 2019</span>
                                </div>
                                <div class="mg-l-auto d-flex align-self-center action-icon">
                                    <nav class="nav nav-icon-only">
                                        <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                            data-placement="top" data-original-title="Send Message"><i
                                                data-feather="mail" class="wd-16"></i></a>
                                        <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                            data-placement="top" data-original-title="Add to Fiend"><i
                                                data-feather="user-plus" class="wd-16"></i></a>
                                        <a href="" class="mr-2 tx-gray-500" data-toggle="tooltip" title=""
                                            data-placement="top" data-original-title="Flag User"><i data-feather="flag"
                                                class="wd-16"></i></a>
                                        <a href="" data-toggle="tooltip" class="tx-gray-500" title=""
                                            data-placement="top" data-original-title="More Options"><i
                                                data-feather="more-vertical" class="wd-16"></i></a>
                                    </nav>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mg-b-15">
                                <a href="">
                                    <div class="avatar avatar-online"><span
                                            class="avatar-initial rounded-circle bg-danger">M</span><i></i></div>
                                </a>
                                <div class="media-body pd-l-15 lh-2">
                                    <p class="tx-medium mg-b-2"><a href="">Malanie Hanvey</a></p>
                                    <span class="tx-12 tx-gray-500">Joined: 11 Mar, 2019</span>
                                </div>
                                <div class="mg-l-auto d-flex align-self-center action-icon">
                                    <nav class="nav nav-icon-only">
                                        <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                            data-placement="top" data-original-title="Send Message"><i
                                                data-feather="mail" class="wd-16"></i></a>
                                        <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                            data-placement="top" data-original-title="Add to Fiend"><i
                                                data-feather="user-plus" class="wd-16"></i></a>
                                        <a href="" class="mr-2 tx-gray-500" data-toggle="tooltip" title=""
                                            data-placement="top" data-original-title="Flag User"><i data-feather="flag"
                                                class="wd-16"></i></a>
                                        <a href="" data-toggle="tooltip" class="tx-gray-500" title=""
                                            data-placement="top" data-original-title="More Options"><i
                                                data-feather="more-vertical" class="wd-16"></i></a>
                                    </nav>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mg-b-15">
                                <a href="">
                                    <div class="avatar avatar-offline"><span
                                            class="avatar-initial rounded-circle bg-teal">K</span><i></i></div>
                                </a>
                                <div class="media-body pd-l-15 lh-2">
                                    <p class="tx-medium mg-b-2"><a href="">Kenneth Hune</a></p>
                                    <span class="tx-12 tx-gray-500">Joined: 12 Mar, 2019</span>
                                </div>
                                <div class="mg-l-auto d-flex align-self-center action-icon">
                                    <nav class="nav nav-icon-only">
                                        <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                            data-placement="top" data-original-title="Send Message"><i
                                                data-feather="mail" class="wd-16"></i></a>
                                        <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                            data-placement="top" data-original-title="Add to Fiend"><i
                                                data-feather="user-plus" class="wd-16"></i></a>
                                        <a href="" class="mr-2 tx-gray-500" data-toggle="tooltip" title=""
                                            data-placement="top" data-original-title="Flag User"><i data-feather="flag"
                                                class="wd-16"></i></a>
                                        <a href="" data-toggle="tooltip" class="tx-gray-500" title=""
                                            data-placement="top" data-original-title="More Options"><i
                                                data-feather="more-vertical" class="wd-16"></i></a>
                                    </nav>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mg-b-15">
                                <a href="">
                                    <div class="avatar avatar-offline"><span
                                            class="avatar-initial rounded-circle bg-success">V</span><i></i></div>
                                </a>
                                <div class="media-body pd-l-15 lh-2">
                                    <p class="tx-medium mg-b-2"><a href="">Valentine Maton</a></p>
                                    <span class="tx-12 tx-gray-500">Joined: 15 Mar, 2019</span>
                                </div>
                                <div class="mg-l-auto d-flex align-self-center action-icon">
                                    <nav class="nav nav-icon-only">
                                        <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                            data-placement="top" data-original-title="Send Message"><i
                                                data-feather="mail" class="wd-16"></i></a>
                                        <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                            data-placement="top" data-original-title="Add to Fiend"><i
                                                data-feather="user-plus" class="wd-16"></i></a>
                                        <a href="" class="mr-2 tx-gray-500" data-toggle="tooltip" title=""
                                            data-placement="top" data-original-title="Flag User"><i data-feather="flag"
                                                class="wd-16"></i></a>
                                        <a href="" data-toggle="tooltip" class="tx-gray-500" title=""
                                            data-placement="top" data-original-title="More Options"><i
                                                data-feather="more-vertical" class="wd-16"></i></a>
                                    </nav>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mg-b-15">
                                <a href="">
                                    <div class="avatar avatar-offline"><span
                                            class="avatar-initial rounded-circle bg-primary">M</span><i></i></div>
                                </a>
                                <div class="media-body pd-l-15 lh-2">
                                    <p class="tx-medium mg-b-2"><a href="">Madsen Daniel</a></p>
                                    <span class="tx-12 tx-gray-500">Joined: 20 Mar, 2019</span>
                                </div>
                                <div class="mg-l-auto d-flex align-self-center action-icon">
                                    <nav class="nav nav-icon-only">
                                        <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                            data-placement="top" data-original-title="Send Message"><i
                                                data-feather="mail" class="wd-16"></i></a>
                                        <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                            data-placement="top" data-original-title="Add to Fiend"><i
                                                data-feather="user-plus" class="wd-16"></i></a>
                                        <a href="" class="mr-2 tx-gray-500" data-toggle="tooltip" title=""
                                            data-placement="top" data-original-title="Flag User"><i data-feather="flag"
                                                class="wd-16"></i></a>
                                        <a href="" data-toggle="tooltip" class="tx-gray-500" title=""
                                            data-placement="top" data-original-title="More Options"><i
                                                data-feather="more-vertical" class="wd-16"></i></a>
                                    </nav>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="">
                                    <div class="avatar avatar-offline"><span
                                            class="avatar-initial rounded-circle bg-warning">M</span><i></i></div>
                                </a>
                                <div class="media-body pd-l-15 lh-2">
                                    <p class="tx-medium mg-b-2"><a href="">Jesse Ross</a></p>
                                    <span class="tx-12 tx-gray-500">Joined: 21 Mar, 2019</span>
                                </div>
                                <div class="mg-l-auto d-flex align-self-center action-icon">
                                    <nav class="nav nav-icon-only">
                                        <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                            data-placement="top" data-original-title="Send Message"><i
                                                data-feather="mail" class="wd-16"></i></a>
                                        <a href="" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                            data-placement="top" data-original-title="Add to Fiend"><i
                                                data-feather="user-plus" class="wd-16"></i></a>
                                        <a href="" class="mr-2 tx-gray-500" data-toggle="tooltip" title=""
                                            data-placement="top" data-original-title="Flag User"><i data-feather="flag"
                                                class="wd-16"></i></a>
                                        <a href="" data-toggle="tooltip" class="tx-gray-500" title=""
                                            data-placement="top" data-original-title="More Options"><i
                                                data-feather="more-vertical" class="wd-16"></i></a>
                                    </nav>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ New Customers End -->
            <!--================================-->
            <!-- Transaction History Start -->
            <!--================================-->
            <div class="col-lg-6 col-xl-4">
                <div class="card mg-b-30">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h6 class="tx-13 mb-0">Transaction History</h6>
                        <div class="card-header-btn">
                            <div class="dropdown">
                                <a href="" class="" data-toggle="dropdown"><i class="ti-more"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="" class="dropdown-item"><i data-feather="info"
                                            class="wd-16 mr-2"></i>View Details</a>
                                    <a href="" class="dropdown-item"><i data-feather="share"
                                            class="wd-16 mr-2"></i>Share</a>
                                    <a href="" class="dropdown-item"><i data-feather="download"
                                            class="wd-16 mr-2"></i>Download</a>
                                    <a href="" class="dropdown-item"><i data-feather="copy"
                                            class="wd-16 mr-2"></i>Copy to</a>
                                    <a href="" class="dropdown-item"><i data-feather="folder"
                                            class="wd-16 mr-2"></i>Move to</a>
                                    <a href="" class="dropdown-item"><i data-feather="edit"
                                            class="wd-16 mr-2"></i>Rename</a>
                                    <a href="" class="dropdown-item"><i data-feather="trash"
                                            class="wd-16 mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pd-0 pd-y-15">
                        <ul class="list-group list-group-flush tx-13">
                            <li class="list-group-item d-flex pd-y-9 pd-sm-x-20">
                                <div class="d-none d-sm-block"><span
                                        class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded bg-primary tx-white"><i
                                            class="ti-check"></i></span></div>
                                <div class="pd-sm-l-10">
                                    <p class="mg-b-0">Lorem Ipsum is simply <a href=""
                                            class="tx-dark mg-b-0 tx-semibold">#985632</a></p>
                                    <span class="tx-12 mg-b-0 tx-gray-500">Transaction ID: #857423</span>
                                </div>
                                <div class="mg-l-auto text-right">
                                    <p class="mg-b-0 tx-rubik">$4,550<small class="tx-8">.50</small></p>
                                    <span class="tx-success tx-12">Completed</span>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-y-9 pd-sm-x-20">
                                <div class="d-none d-sm-block"><span
                                        class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded bg-warning tx-dark"><i
                                            class="ti-anchor"></i></span></div>
                                <div class="pd-sm-l-10">
                                    <p class="mg-b-0">Lorem Ipsum is simply <a href=""
                                            class="tx-dark mg-b-0 tx-semibold">#698524</a></p>
                                    <span class="tx-12 mg-b-0 tx-gray-500">Transaction ID: #452356</span>
                                </div>
                                <div class="mg-l-auto text-right">
                                    <p class="mg-b-0 tx-rubik">$2,645<small class="tx-8">.40</small></p>
                                    <span class="tx-warning tx-12">Pending</span>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-y-9 pd-sm-x-20">
                                <div class="d-none d-sm-block"><span
                                        class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded bg-primary tx-white"><i
                                            class="ti-check"></i></span></div>
                                <div class="pd-sm-l-10">
                                    <p class="mg-b-0">Lorem Ipsum is simply <a href=""
                                            class="tx-dark mg-b-0 tx-semibold">#458762</a></p>
                                    <span class="tx-12 mg-b-0 tx-gray-500">Transaction ID: #354155</span>
                                </div>
                                <div class="mg-l-auto text-right">
                                    <p class="mg-b-0 tx-rubik">$3,248<small class="tx-8">.80</small></p>
                                    <span class="tx-success tx-12">Completed</span>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-y-9 pd-sm-x-20">
                                <div class="d-none d-sm-block"><span
                                        class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded bg-warning tx-dark"><i
                                            class="ti-anchor"></i></span></div>
                                <div class="pd-sm-l-10">
                                    <p class="mg-b-0">Lorem Ipsum is simply <a href=""
                                            class="tx-dark mg-b-0 tx-semibold">#698524</a></p>
                                    <span class="tx-12 mg-b-0 tx-gray-500">Transaction ID: #452356</span>
                                </div>
                                <div class="mg-l-auto text-right">
                                    <p class="mg-b-0 tx-rubik">$1,243<small class="tx-8">.60</small></p>
                                    <p class="mg-b-0 tx-12 tx-warning">Pending</p>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-y-9 pd-sm-x-20">
                                <div class="d-none d-sm-block"><span
                                        class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded bg-primary tx-white"><i
                                            class="ti-check"></i></span></div>
                                <div class="pd-sm-l-10">
                                    <p class="mg-b-0">Lorem Ipsum is simply <a href=""
                                            class="tx-dark mg-b-0 tx-semibold">#365845</a></p>
                                    <span class="tx-12 mg-b-0 tx-gray-500">Transaction ID: #748562</span>
                                </div>
                                <div class="mg-l-auto text-right">
                                    <p class="mg-b-0 tx-rubik">$5,319<small class="tx-10">.10</small></p>
                                    <span class="tx-success tx-12">Completed</span>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-y-9 pd-sm-x-20">
                                <div class="d-none d-sm-block"><span
                                        class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded bg-danger tx-white"><i
                                            class="ti-close"></i></span></div>
                                <div class="pd-sm-l-10">
                                    <p class="mg-b-0">Lorem Ipsum is simply <a href=""
                                            class="tx-dark mg-b-0 tx-semibold">#475821</a></p>
                                    <span class="tx-12 mg-b-0 tx-gray-500">Transaction ID: #457771</span>
                                </div>
                                <div class="mg-l-auto text-right">
                                    <p class="mg-b-0 tx-rubik">$4,347<small class="tx-8">.90</small></p>
                                    <span class="tx-danger tx-12">Canceled</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Transaction History End -->
            <!--================================-->
            <!-- Customer Satisfaction Start -->
            <!--================================-->
            <div class="col-xl-4">
                <div class="card mg-b-30">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h6 class="tx-13 mb-0">Customer Satisfaction</h6>
                        <div class="card-header-btn">
                            <div class="dropdown">
                                <a href="" class="" data-toggle="dropdown"><i class="ti-more"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="" class="dropdown-item"><i data-feather="info"
                                            class="wd-16 mr-2"></i>View Details</a>
                                    <a href="" class="dropdown-item"><i data-feather="share"
                                            class="wd-16 mr-2"></i>Share</a>
                                    <a href="" class="dropdown-item"><i data-feather="download"
                                            class="wd-16 mr-2"></i>Download</a>
                                    <a href="" class="dropdown-item"><i data-feather="copy"
                                            class="wd-16 mr-2"></i>Copy to</a>
                                    <a href="" class="dropdown-item"><i data-feather="folder"
                                            class="wd-16 mr-2"></i>Move to</a>
                                    <a href="" class="dropdown-item"><i data-feather="edit"
                                            class="wd-16 mr-2"></i>Rename</a>
                                    <a href="" class="dropdown-item"><i data-feather="trash"
                                            class="wd-16 mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-baseline">
                            <h1 class="mg-b-0 mg-r-5">9.5<span class="tx-10 tx-success">(<i
                                        class="ti-arrow-up tx-8 tx-success tx-8 mr-1"></i>8.60%)</span></h1>
                            <div class="tx-16">
                                <i class="fa fa-star tx-warning"></i>
                                <i class="fa fa-star tx-warning"></i>
                                <i class="fa fa-star tx-warning"></i>
                                <i class="fa fa-star tx-warning"></i>
                                <i class="fa fa-star-half-empty tx-warning"></i>
                            </div>
                        </div>
                        <p class="tx-11 tx-sm-12 mg-b-20 tx-gray-500">Habi tasse labo rum purus, vesti bulum at<span
                                class="d-none d-sm-inline"> vivamus tempor port titor vulpu</span>... <a
                                href="">Learn More</a></p>
                        <div class="card-progressbar">
                            <label class="tx-10 tx-uppercase tx-gray-500 mg-b-0">Score</label>
                            <div class="progress" style="height: 3px">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 30%"
                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-info" role="progressbar" style="width: 10%"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <label class="tx-10 tx-uppercase tx-gray-500 mg-b-0">85%<i
                                    class="ti-arrow-up tx-8 tx-success tx-8 ml-1"></i></label>
                        </div>
                        <div class="list-group list-group-flush m-t-10 tx-13">
                            <div class="list-group-item pd-0 pd-y-10 d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-primary mr-2"></div>
                                    <span class="tx-semibold">Excellent</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="mg-r-5">3,345</div>
                                    <div class="tx-10 tx-gray-500">(<i
                                            class="ti-arrow-up tx-8 tx-success tx-8 mr-1"></i>4.7%)</div>
                                </div>
                            </div>
                            <div class="list-group-item pd-0 pd-y-10 d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-danger mr-2"></div>
                                    <span class="tx-semibold">Very Good</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="mg-r-5">2,854</div>
                                    <div class="tx-10 tx-gray-500">(<i
                                            class="ti-arrow-down tx-8 tx-danger tx-8 mr-1"></i>5.8%)</div>
                                </div>
                            </div>
                            <div class="list-group-item pd-0 pd-y-10 d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-warning mr-2"></div>
                                    <span class="tx-semibold">Good</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="mg-r-5">2,145</div>
                                    <div class="tx-10 tx-gray-500">(<i
                                            class="ti-arrow-up tx-8 tx-success tx-8 mr-1"></i>2.8%)</div>
                                </div>
                            </div>
                            <div class="list-group-item pd-0 pd-y-10 d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-info mr-2"></div>
                                    <span class="tx-semibold">Fair</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="mg-r-5">1,574</div>
                                    <div class="tx-10 tx-gray-500">(<i
                                            class="ti-arrow-down tx-8 tx-danger tx-8 mr-1"></i>3.7%)</div>
                                </div>
                            </div>
                            <div class="list-group-item pd-0 pd-y-10 d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-success mr-2"></div>
                                    <span class="tx-semibold">Poor</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="mg-r-5">1,540</div>
                                    <div class="tx-10 tx-gray-500">(<i
                                            class="ti-arrow-up tx-8 tx-success tx-8 mr-1"></i>5.5%)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Customer Satisfaction End -->
        </div>
    </div>
@endsection
