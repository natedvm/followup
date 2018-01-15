@extends('layouts.master')
{{--Requires $procedures variable passed to it - this should be a collection of all variables--}}

@section('pagescript')

    <script type="text/javascript" src="{{asset('js/layouts/allcases.js')}}"></script>
@endsection

@section('title','Cases')

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
        <div class="row">
            <div class="col-md-3">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary active information-button"
                            id="button-patient-information">
                        Patient Info
                    </button>
                    <button type="button" class="btn btn-primary information-button" id="button-surgery-information">
                        Surgery Info
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary active case-selector-button"
                            id="button-all-cases">
                        All Cases
                    </button>
                    <button type="button" class="btn btn-primary case-selector-button"
                            id="button-incomplete-patient-information">
                        Incomplete Patient Info
                    </button>
                    <button type="button" class="btn btn-primary case-selector-button"
                            id="button-incomplete-surgery-information">
                        Incomplete Surgery Info
                    </button>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <table id="procedureTable" class="table table-bordered table-hover">
                    {{--keep table hidden until reformateed during document ready - unhidden by JS--}}
                    <thead>
                    <tr>
                        {{--TODO this errors if no procedures are returned - find a way to pass headers without need to --}}
                        {{--have a procedure in the $procedures array--}}
                        @foreach($procedures->first()->toArray() as $header => $data)
                            <th id="{{$header}}_header">
                                {{ App\Helpers\Custom::convertToDisplayFormat($header) }}
                            </th>
                        @endforeach
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($procedures as $procedure)
                        <tr ondblclick="window.location='{{route('layouts.editcase',$procedure->id)}}'">
                            @foreach($procedure->toArray() as $data)
                                <td>
                                    {{$data}}
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
