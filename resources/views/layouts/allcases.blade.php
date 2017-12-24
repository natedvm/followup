@extends('layouts.master')

@section('title','Cases')

@section('content')

    <div class="container-fluid pull-left">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                @foreach($procedures->first()->toArray() as $header => $data)
                    <th>
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

@endsection
