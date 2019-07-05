@extends('layouts.app')

@section('content')

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="{{ asset('images/mice.jpeg') }}" alt="" class="rounded-circle img-fluid">
        <h3>SARA</h2>
        <p>mind reader</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="{{ asset('images/mice.jpg') }}" alt="" class="rounded-circle img-fluid">
        <h3>STUE</h2>
        <p>techie</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="{{ asset('images/mice.png') }}" alt="" class="rounded-circle img-fluid">
        <h3>KARANE</h3>
        <p>philantropist</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    </div>
@endsection