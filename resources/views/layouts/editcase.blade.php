@extends ('layouts.master')
{{--Requires $procedure to be passed to it for current values--}}
@section('pagescript')
    <script type="text/javascript" src="{{asset('js/layouts/editcase.js')}}"></script>
@endsection

@section('title','Edit Case')

@section('content')

    <div class="container-fluid">

        {{--Display an alert with info if it is passed in the session from the page which redirected here--}}
        @if(Session::exists('info'))
            <div class="row">
                <div class="col-lg-12">
                    <p class="alert alert-info">{{Session::get('info')}}</p>
                </div>
            </div>
        @endif


        {{--Hidden alert to display by jquery when chanages aren't yet saved.--}}
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info hidden">Un-saved changes are present</p>
            </div>
        </div>
        <form id="form-edit-case" action="{{route('layouts.editcase', $procedure->id)}}" method="post">
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="control-label" for="patient_name">Patient Name</label>
                    <div>
                        <input type="text" class="form-control"
                               id="patient_name" name="patient_name" value="{{$procedure->patient_name}}">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="last_name">Last Name</label>
                    <div>
                        <input type="text" class="form-control"
                               id="last_name" name="last_name" value="{{$procedure->last_name}}">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="dvmax_id">DVMax ID</label>
                    <div>
                        <input type="text" class="form-control"
                               id="dvmax_id" name="dvmax_id" value="{{$procedure->dvmax_id}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="control-label" for="date_of_birth">Date of Birth</label>
                    <div>
                        <input type="text" class="form-control"
                               id="date_of_birth" name="date_of_birth" value="{{$procedure->date_of_birth}}">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="sex">Sex</label>
                    <div>
                        <input type="text" class="form-control"
                               id="sex" name="sex" value="{{$procedure->sex}}">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="breed">Breed</label>
                    <div>
                        <input type="text" class="form-control"
                               id="breed" name="breed" value="{{$procedure->breed}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="control-label" for="weight">Weight</label>
                    <div>
                        <input type="text" class="form-control"
                               id="weight" name="weight" value="{{$procedure->weight}}">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="email">Email</label>
                    <div>
                        <input type="text" class="form-control"
                               id="email" name="email" value="{{$procedure->email}}">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="date_of_surgery">Date of Surgery</label>
                    <div>
                        <input type="text" class="form-control"
                               id="date_of_surgery" name="date_of_surgery" value="{{$procedure->date_of_surgery}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="control-label" for="side">Side</label>
                    <div>
                        <input type="text" class="form-control"
                               id="side" name="side" value="{{$procedure->side}}">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="preop_angle">Preop Angle</label>
                    <div>
                        <input type="text" class="form-control"
                               id="preop_angle" name="preop_angle" value="{{$procedure->preop_angle}}">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="blade_size">Blade Size</label>
                    <div>
                        <input type="text" class="form-control"
                               id="blade_size" name="blade_size" value="{{$procedure->blade_size}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="control-label" for="rotation">Rotation</label>
                    <div>
                        <input type="text" class="form-control"
                               id="rotation" name="rotation" value="{{$procedure->rotation}}">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="postop_angle">Postop Angle</label>
                    <div>
                        <input type="number" class="form-control"
                               id="postop_angle" name="postop_angle" value="{{$procedure->postop_angle}}">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="plate">Plate</label>
                    <div>
                        <input type="text" class="form-control"
                               id="plate" name="plate" value="{{$procedure->plate}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="control-label" for="meniscal_status">Meniscal Status</label>
                    <div>
                    <textarea class="form-control"
                              id="meniscal_status" name="meniscal_status">{{$procedure->meniscal_status}}</textarea>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="comments">Comments</label>
                    <div>
                    <textarea class="form-control"
                              id="comments" name="comments">{{$procedure->comments}}</textarea>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="complications">Complications</label>
                    <div>
                    <textarea class="form-control"
                              id="complications" name="complications">{{$procedure->complications}}</textarea>
                    </div>
                </div>
            </div>
            {{csrf_field()}}
            <button type="submit" class="btn btn-default">Save Changes</button>
        </form>
    </div>

@endsection