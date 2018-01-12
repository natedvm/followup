@extends ('layouts.master')

@section('pagescript')
    <script type="text/javascript" src="{{asset('js/layouts/addcase.js')}}"></script>
@endsection

@section('title','Add Case')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <h1 class="text-center">Input case details with either one of these forms</h1>
            <br>
            <br>
        </div>

        @include ('partials.errors')

        <div class="row">
            <div class="col-md-5">
                {{--Individual entry form--}}
                <form class="form-horizontal" id="form-add-case" action="{{route('layouts.addcase')}}" method="post">
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="patient_name">Patient Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="patient_name" name="patient_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="last_name">Last Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="last_name" name="last_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="dvmax_id">DVMax ID</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="dvmax_id" name="dvmax_id">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="date_of_birth">Date of Birth</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="sex">Sex</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="sex" name="sex">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="breed">Breed</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="breed" name="breed">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="weight">Weight</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="weight" name="weight">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="email">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                    </div>
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-default">Add Case</button>
                </form>
            </div>

            <div class="col-md-1 text-center">
                <h1>OR</h1>
            </div>

            <div class="col-md-6">
                {{--Form for export string entry --}}
                <form class="form" action="{{route('layouts.addcasestring')}}" method="post">
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="export_string">Export String from DVMax</label>
                        <textarea class="form-control" rows="16" id="export_string" name="export_string"></textarea>
                    </div>
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-default">Add Case</button>
                </form>
            </div>
        </div>
    </div>
@endsection