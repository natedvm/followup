@extends ('layouts.master')

@section('pagescript')
    <script type="text/javascript" src="{{asset('js/layouts/addcase.js')}}"></script>
@endsection

@section('title','Add Case')

@section('content')
    <div class="container pull-left">
        <form class="form-horizontal" action="{{route('layouts.addcase')}}">
            <div class="form-group">
                <label class="control-label col-sm-4" for="patient_name">Patient Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="patient_name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="last_name">Last Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="last_name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="dvmax_id">DVMax ID</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="dvmax_id">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="date_of_birth">Date of Birth</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="date_of_birth">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="sex">Sex</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="sex">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="breed">Breed</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="breed">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="weight">Weight</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="weight">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="email">Email</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="email">
                </div>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection