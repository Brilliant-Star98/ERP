@extends('layouts.app')
@section('title')
    <title>Tenants - Reports </title>
@endsection
@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 animsition">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <div class="au-card-title" style="background-image:url('/theme/images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>Tenants</h3>
                                        {{--<button class="au-btn-plus">--}}
                                        {{--<i class="zmdi zmdi-plus"></i>--}}
                                        {{--</button>--}}
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <p>Reports</p>
                                        </div>
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="{{route('show_tenants')}}">Current Tenants</a>
                                                    </h5>
                                                    {{--<span class="time">10:00 AM</span>--}}
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Change of Management</a>
                                                    </h5>
                                                    {{--<span class="time">11:00 AM</span>--}}
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--success">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Invoices Generated</a>
                                                    </h5>
                                                    {{--<span class="time">03:30 PM</span>--}}
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--danger js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Unpaid Invoices</a>
                                                    </h5>
                                                    {{--<span class="time">10:00 AM</span>--}}
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Outstanding Balances</a>
                                                    </h5>
                                                    {{--<span class="time">11:00 AM</span>--}}
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--danger js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Tenants with Overpayments</a>
                                                    </h5>
                                                    {{--<span class="time">11:00 AM</span>--}}
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--success js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Aging Balances</a>
                                                    </h5>
                                                    {{--<span class="time">11:00 AM</span>--}}
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--primary js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Rent Roll</a>
                                                    </h5>
                                                    {{--<span class="time">11:00 AM</span>--}}
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Collections</a>
                                                    </h5>
                                                    {{--<span class="time">11:00 AM</span>--}}
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--danger js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Surcharge Management</a>
                                                    </h5>
                                                    {{--<span class="time">11:00 AM</span>--}}
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--success js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Notices to Vacate</a>
                                                    </h5>
                                                    {{--<span class="time">11:00 AM</span>--}}
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--primary js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Vacated Tenants</a>
                                                    </h5>
                                                    {{--<span class="time">11:00 AM</span>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-task__footer">
                                            <button class="au-btn au-btn-load js-load-btn">load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
