@extends('layout')
@section('content')

<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Orders</h3>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-search"></em>
                                    </div>
                                    <input type="text" class="form-control" id="default-04" placeholder="Quick search by id">
                                </div>
                            </li>
                            <li>
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white" data-bs-toggle="dropdown">Status</a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#"><span>On Hold</span></a></li>
                                            <li><a href="#"><span>Delevired</span></a></li>
                                            <li><a href="#"><span>Rejected</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nk-block-tools-opt">
                                <a href="#" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block">
        <div class="nk-tb-list is-separate is-medium mb-3">
            <div class="nk-tb-item nk-tb-head">
                <div class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="oid">
                        <label class="custom-control-label" for="oid"></label>
                    </div>
                </div>
                <div class="nk-tb-col"><span>Order</span></div>
                <div class="nk-tb-col tb-col-md"><span>Date</span></div>
                <div class="nk-tb-col"><span class="d-none d-sm-block">Status</span></div>
                <div class="nk-tb-col tb-col-sm"><span>Customer</span></div>
                <div class="nk-tb-col tb-col-md"><span>Price</span></div>
                <div class="nk-tb-col tb-col-md"><span>Quantity</span></div>
                <div class="nk-tb-col"><span>Total</span></div>
                <div class="nk-tb-col nk-tb-col-tools">
                    <ul class="nk-tb-actions gx-1 my-n1">
                        <li>
                            <div class="drodown">
                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Update Status</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Orders</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .nk-tb-item -->
            @foreach($sales as $sale)
            <div class="nk-tb-item">
                <div class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="oid01">
                        <label class="custom-control-label" for="oid01"></label>
                    </div>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-lead"><a href="#">#{{$sale->id}}</a></span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <span class="tb-sub">{{$sale->created_at}}</span>
                </div>
                <div class="nk-tb-col">
                    <span class="dot bg-warning d-sm-none"></span>
                    <span class="badge badge-sm badge-dot has-bg bg-warning d-none d-sm-inline-flex">{{$sale->status}}</span>
                </div>
                <div class="nk-tb-col tb-col-sm">
                    <span class="tb-sub">{{$sale->user->name}}</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <span class="tb-sub text-primary fw-bold tb-lead">{{$sale->price}}</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <span class="tb-sub text-primary fw-bold tb-lead">{{$sale->quantite}}</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-lead">$ {{$sale->quantite * $sale->price}}</span>
                </div>
                <div class="nk-tb-col nk-tb-col-tools">
                    <ul class="nk-tb-actions gx-1">
                        <li class="nk-tb-action-hidden"><a href="#" class="btn btn-icon btn-trigger btn-tooltip" aria-label="Mark as Delivered" data-bs-original-title="Mark as Delivered">
                                <em class="icon ni ni-truck"></em></a></li>
                        <li class="nk-tb-action-hidden"><a href="#" class="btn btn-icon btn-trigger btn-tooltip" aria-label="View Order" data-bs-original-title="View Order">
                                <em class="icon ni ni-eye"></em></a></li>
                        <li>
                            <div class="drodown me-n1">
                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-truck"></em><span>Pending</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-money"></em><span>Completed</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Canceled</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div><!-- .nk-tb-list -->
      
    </div><!-- .nk-block -->
</div>
@endsection