@extends('backend.layouts.master')
@section('css')
<!-- Internal Nice-select css  -->
<link href="{{URL::asset('assets/backend/backend/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"/>
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Digital Spark</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    User</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">

        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <livewire:backend.users.users />
@endsection
@section('js')
<!-- Internal Nice-select js-->
<script src="{{URL::asset('assets/backend/backend/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
<script src="{{URL::asset('assets/backend/backend/plugins/jquery-nice-select/js/nice-select.js')}}"></script>
@endsection