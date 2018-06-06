@extends('layouts.dashboard')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content">
            @if (Session::has('message'))
                <div class="alert alert-info alert-dismissible fade in" style="padding: 5px;margin: 0 7px 0 0;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="margin: 1px 24px;text-decoration: none;">&times;</a>
                    {!! session('message') !!}
                </div>
            @endif
            <div class="content-style">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-6">
                            <h3 class="title-header">List all departments</h3>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            <div class="pull-right">
                                <a href="{{ url("department/create") }}">
                                <button class="btn btn-primary btn-add-new">
                                        <span class="icon-btn-style">
                                        <i class="pe-7s-plus pull-left text-new"></i>
                                        New department
                                        </span>
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom-style"></div>

            <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Human Resource</td>
                                    <td>This is the HR department</td>
                                    {{--<td>Edit | Delete</td>--}}
                                    <td class="td-action">
                                        <a href="#" class="btn btn-default" data-toggle="tooltip" title="" data-original-title="Edit"><i class="pe-7s-pen action_edit"></i></a>
                                        <form action="#" data-id="1" class="form_delete_1" style="display:inline;">
                                            <a href="#" class="btn btn-default delete" data-toggle="tooltip" style="border: 1px solid #ef0b0b;" data-original-title="Delete"><i class="pe-7s-trash action_delete"></i></a>
                                        </form>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
        </div>
    </div>

@endsection