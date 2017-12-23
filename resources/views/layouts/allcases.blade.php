@extends('layouts.master')

@section('title','Cases')

@section('content')
    <div class="container">
        <table id=procedure_table">
            <thead>
            <tr>
                @foreach($procedures->first()->toArray() as $header => $data)
                    <td>
                        {{$header}}
                    </td>
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
