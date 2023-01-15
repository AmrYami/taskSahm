@extends('layouts.core')
@section("page-name", trans("setup.tasks"))
@section("breadcrumb")
    <div class="d-flex align-items-center flex-wrap mr-1">
        <!--begin::Page Heading-->
        <div class="d-flex align-items-baseline flex-wrap mr-5">
            <!--begin::Page Title-->
            <h5 class="text-dark font-weight-bold my-1 mr-5">@lang('tasks.tasks')</h5>
            <!--end::Page Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                <li class="breadcrumb-item text-muted">
                    <a href="{{route("dashboard")}}" class="text-muted">@lang('modules.Dashboard')</a>
                </li>
                <li class="breadcrumb-item text-muted">
                    <a class="text-muted">@lang('tasks.tasks')</a>
                </li>
                <li class="breadcrumb-item text-muted">
                    <a href="" class="text-muted">@lang('tasks.Create')</a>
                </li>
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page Heading-->
    </div>
@endsection
@section('content')
<!-- /.row-->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><strong>{{trans("setup.Create")}}</strong></div>
            <div class="card-body">
                {!! Form::open(['route' => 'tasks.store', "class"=>"form-horizontal", 'id'=> 'kt_form', 'autocomplete' => 'off', 'enctype'=>"multipart/form-data"]) !!}
                @include('tasks::tasks.fields')
                {!! Form::button('<i class="fa fa-save"></i> Save', ['type'=>'submit', 'class' =>'btn  btn-info']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>
<!-- /.row-->

@endsection
