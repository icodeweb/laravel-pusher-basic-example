@extends('layout')
@section('content')
<div class="col-md-8">
   <form method="post" action="{{url('/send')}}">
   {{csrf_field()}}
      <div class="form-group">
         <label for="email"><h4>Enter your message and submit the form</h4></label>
         <textarea class="form-control" name="message" required autofocus rows="8" placeholder="Enter you message here..."></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
   </form>
</div>
<div class="col-md-4">
   <div class="well">
      <p>
         Open <a href="{{url('receive')}}" target="_blank">Receive message page</a> in another window or in another browser on in another computer. When you send a message from this page, it will be deliverd to all the opend pages in real time.
      </p>
   </div>
</div>
@endSection