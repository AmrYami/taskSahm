@extends('layouts.core')
@section("page-name", trans("setup.Users"))
@section("breadcrumb")
    <div class="d-flex align-items-center flex-wrap mr-1">
        <!--begin::Page Heading-->
        <div class="d-flex align-items-baseline flex-wrap mr-5">
            <!--begin::Page Title-->
            <h5 class="text-dark font-weight-bold my-1 mr-5">@lang('users.Users')</h5>
            <!--end::Page Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                <li class="breadcrumb-item text-muted">
                    <a href="{{route("dashboard")}}" class="text-muted">@lang('modules.Dashboard')</a>
                </li>
                <li class="breadcrumb-item text-muted">
                    <a class="text-muted">@lang('users.Users')</a>
                </li>
                <li class="breadcrumb-item text-muted">
                    <a href="" class="text-muted">@lang('users.Edit')</a>
                </li>
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page Heading-->
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' =>'put', 'autocomplete' => 'off', 'enctype'=>"multipart/form-data"]) !!}
                <div class="card-header"><strong>{{trans("setup.Edit")}}</strong>
                    <div class="kt-portlet__head-toolbar float-right">
                        <div class="kt-portlet__head-wrapper">
                            <a href="{{route('tasks.index')}}" class="kt-margin-r-5">
                                <span class=" kt-hidden-mobile btn btn-secondary btn-hover-brand"><i
                                        class="la la-arrow-left"></i>Back</span>
                            </a>
                            <div class="btn-group">
                                {!! Form::button('<i class="fa fa-save"></i> Save', ['type'=>'submit', 'class' =>'btn  btn-info']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @include('tasks::tasks.fields')
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <!-- /.col-->
    </div>


    <!-- /.row-->

@endsection
