@extends('layouts.master')

@section('pagescript')
    <script type="text/javascript" src="{{asset('js/layouts/allcases.js')}}"></script>
@endsection

@section('title','Cases')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <p class="alert alert-info">{{Session::get('info')}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table id="procedureTable" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        @foreach($procedures->first()->toArray() as $header => $data)
                            <th id="{{$header}}_header">
                                {{ App\Helpers\Custom::convertToDisplayFormat($header) }}
                            </th>
                        @endforeach
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($procedures as $procedure)
                        <tr>
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
