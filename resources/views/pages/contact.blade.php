@extends('layouts.app')

@section('content')

<form class="form-signin">
  <div class="text-center mb-4">
    <h1 class="h3 mb-3 font-weight-normal">Contact Us</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis libero, quas ad quibusdam tenetur.</p>
  </div>

  <div class="form-label-group">
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputEmail">Email address</label>
  </div>

  <div class="form-label-group">
    <input type="text" id="inputName" class="form-control" placeholder="Full Name" required>
    <label for="inputName">Full Name</label>
  </div>

  <div class="form-label-group">
    <textarea class="form-control" id="inputMessage" rows="3" placeholder="Message" required></textarea>
    <label for="inputMessage">Message</label>
  </div>

  <button class="btn btn-lg btn-primary btn-block" type="submit">Send</button>
</form>

@endsection