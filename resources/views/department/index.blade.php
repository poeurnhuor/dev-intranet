@extends('layouts.dashboard')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content">

            {{--Message alert--}}
            {!! popUpMessage() !!}

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
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($departments as $key => $dep)

                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>
                                            {{ $dep->name }}
                                        </td>
                                        <td>
                                            {{ $dep->description }}
                                        </td>
                                        <td class="text-right">
                                            {!! btnToEdit('department', $dep->id) !!}
                                            {!! modalDeleteBox(btnDeleteConfirm('department', $dep->id)) !!}
                                            {!! btnDelete() !!}
                                            {{--{!!btnToDelete('department', $dep->id)!!}--}}
                                        </td>

                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{ $departments->links() }}
                </section>
                <!-- /.content -->
            </div>
        </div>
    </div>
@endsection
