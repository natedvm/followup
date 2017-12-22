@extends('layouts.master')

@section('title','Cases')

@section('content')
    <div class="container">
        <table id="procedure_table">
            <thead>
            <tr>
                @foreach($procedures[0] as $header => $data)
                    {{$header}}
                @endforeach
            </tr>
            </thead>

            <tbody>
            @foreach($procedures as $procedure)
                @foreach($procedure as $data)
                    <td>
                        {{$data}}
                    </td>
                @endforeach
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
