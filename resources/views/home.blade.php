@extends('layouts.app')

@section('title', 'PC Builder | ' . ucfirst(Auth::user()->firstname). ' ' .ucfirst(Auth::user()->lastname) )

@section('content')

<div class="wrapper">
    <div class="wrapper content">
       <div class="box box-black" style="height: 420px;">
       	 
       </div>
    </div>
</div>

@endsection
