@extends('template')
@section('content')
<style>
       .center {
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }
    </style>
<div>
<a class="btn btn-success btn-lg center" href="{{route('seances.index')}}">Visionner les séances</a>
</div>
@endsection