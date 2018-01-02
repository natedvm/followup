@extends ('layouts.master')
{{--Requires $procedure to be passed to it for current values--}}
@section('pagescript')
    <script type="text/javascript" src="{{asset('js/layouts/editcase.js')}}"></script>
@endsection

@section('title','Edit Case')

@section('content')

    <div class="container-fluid">
{{--Hidden alert to display by jquery when chanages aren't yet saved.--}}
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info hidden">Un-saved changes are present</p>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label class="control-label" for="patient_name">Patient Name</label>
                <div>
                    <input type="text" class="form-control"
                           id="patient_name" name="patient_name">
                </div>
            </div>
            <div class="form-group col-md-4">
                <label class="control-label" for="last_name">Last Name</label>
                <div>
                    <input type="text" class="form-control"
                           id="last_name" name="last_name">
                </div>
            </div>
            <div class="form-group col-md-4">
                <label class="control-label" for="dvmax_id">DVMax ID</label>
                <div>
                    <input type="text" class="form-control"
                           id="dvmax_id" name="dvmax_id">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
        </div>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
        </div>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>

@endsection