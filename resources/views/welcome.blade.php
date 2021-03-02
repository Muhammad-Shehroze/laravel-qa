@extends('layouts.app')

{{-- @section('content')
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>My Page</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Oculux</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Page</li>
                        </ol>
                    </nav>
                </div>            
                <div class="col-md-6 col-sm-12 text-right hidden-xs">
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create Campaign</a>
                    <a href="https://themeforest.net/item/oculux-bootstrap-4x-admin-dashboard-clean-modern-ui-kit/23091507" class="btn btn-sm btn-success" title="Themeforest"><i class="icon-basket"></i> Buy Now</a>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-indigo text-white rounded-circle"><i class="fa fa-briefcase"></i></div>
                            <div class="ml-4">
                                <span>Total income</span>
                                <h4 class="mb-0 font-weight-medium">$7,805</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-azura text-white rounded-circle"><i class="fa fa-credit-card"></i></div>
                            <div class="ml-4">
                                <span>New expense</span>
                                <h4 class="mb-0 font-weight-medium">$3,651</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-orange text-white rounded-circle"><i class="fa fa-users"></i></div>
                            <div class="ml-4">
                                <span>Daily Visits</span>
                                <h4 class="mb-0 font-weight-medium">5,805</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-pink text-white rounded-circle"><i class="fa fa-life-ring"></i></div>
                            <div class="ml-4">
                                <span>Bounce rate</span>
                                <h4 class="mb-0 font-weight-medium">$13,651</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">             
            <div class="col-lg-8 col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover table-custom spacing5">
                        <thead>
                            <tr> 
                                <th style="width: 20px;">#</th>
                                <th>Client</th>
                                <th style="width: 50px;">Amount</th>
                                <th style="width: 50px;">Status</th>
                                <th style="width: 110px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span>01</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avtar-pic w35 bg-red" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>SS</span></div>
                                        <div class="ml-3">
                                            <a href="page-invoices-detail.html" title="">South Shyanne</a>
                                            <p class="mb-0">south.shyanne@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$1200</td>
                                <td><span class="badge badge-success ml-0 mr-0">Done</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope"></i></button>
                                    <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                    <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>02</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                        <div class="ml-3">
                                            <a href="javascript:void(0);" title="">Zoe Baker</a>
                                            <p class="mb-0">zoe.baker@example.com</p>
                                        </div>
                                    </div>                                        
                                </td>
                                <td>$378</td>
                                <td><span class="badge badge-success ml-0 mr-0">Done</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope"></i></button>
                                    <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                    <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>03</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                            <div class="avtar-pic w35 bg-indigo" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>CB</span></div>
                                        <div class="ml-3">
                                            <a href="javascript:void(0);" title="">Colin Brown</a>
                                            <p class="mb-0">colinbrown@example.com</p>
                                        </div>
                                    </div>                                        
                                </td>
                                <td>$653</td>
                                <td><span class="badge badge-success ml-0 mr-0">Done</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope"></i></button>
                                    <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                    <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>04</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avtar-pic w35 bg-green" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>KG</span></div>
                                        <div class="ml-3">
                                            <a href="javascript:void(0);" title="">Kevin Gill</a>
                                            <p class="mb-0">kevin.gill@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$451</td>
                                <td><span class="badge badge-warning  ml-0 mr-0">Panding</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope"></i></button>
                                    <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                    <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>05</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                        <div class="ml-3">
                                            <a href="javascript:void(0);" title="">Brandon Smith</a>
                                            <p class="mb-0">Maria.gill@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$1,989</td>
                                <td><span class="badge badge-success  ml-0 mr-0">Done</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope"></i></button>
                                    <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                    <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>06</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/xs/avatar6.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                        <div class="ml-3">
                                            <a href="javascript:void(0);" title="">Kevin Baker</a>
                                            <p class="mb-0">kevin.baker@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$343</td>
                                <td><span class="badge badge-warning  ml-0 mr-0">Panding</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope"></i></button>
                                    <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                    <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>07</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                        <div class="ml-3">
                                            <a href="javascript:void(0);" title="">Zoe Baker</a>
                                            <p class="mb-0">zoe.baker@example.com</p>
                                        </div>
                                    </div>                                        
                                </td>
                                <td>$378</td>
                                <td><span class="badge badge-success ml-0 mr-0">Done</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope"></i></button>
                                    <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                    <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <a class="card" href="javascript:void(0)">
                    <div class="body text-center">
                        <img class="img-thumbnail rounded-circle" src="../assets/images/sm/avatar1.jpg" alt="">
                        <h6 class="mt-3">Michelle Green</h6>
                        <div class="text-center text-muted">Intranet Developer</div>
                    </div>
                    <div class="card-footer text-center">
                        <div class="row clearfix">
                            <div class="col-6">
                                <i class="fa fa-tag font-22"></i>
                                <div><span class="text-muted">9 Badges</span></div>
                            </div>
                            <div class="col-6">
                                <i class="fa fa-dollar font-22"></i>
                                <div><span class="text-muted">$ 3.100</span></div>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="card">
                    <div class="body">
                        <div class="card-text">
                            <div class="mt-0">
                                <small class="float-right text-muted">10/200 GB</small>
                                <span>Memory</span>
                                <div class="progress progress-xxs">
                                    <div style="width: 60%;" class="progress-bar"></div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <small class="float-right text-muted">40 MB</small>
                                <span>Bandwidth</span>
                                <div class="progress progress-xxs">
                                    <div style="width: 50%;" class="progress-bar"></div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <small class="float-right text-muted">73%</small>
                                <span>Activity</span>
                                <div class="progress progress-xxs">
                                    <div style="width: 40%;" class="progress-bar"></div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <small class="float-right text-muted">400 GB</small>
                                <span>FTP</span>
                                <div class="progress progress-xxs mb-0">
                                    <div style="width: 80%;" class="progress-bar bg-danger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
@endsection --}}
