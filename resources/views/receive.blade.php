@extends('layout')
@section('content')
<div class="col-md-8">
   <h4>Received Messages</h4>
   <ul class="list-group">
      <li class="list-group-item" id="initial_comment"> <i> No messages received yet.</i> </li>
   </ul>
</div>
<div class="col-md-4">
   <div class="well">
      <p>
         If you send a mesage from the <a target="_blank" href="{{url('send')}}">Message sending</a> page, it will be delivered to all the opened <a href="{{url('receive')}}" target="_blank">Message receiving</a> pages in real time.         
      </p>
   </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="//js.pusher.com/3.0/pusher.min.js"></script>
<script>
var pusher = new Pusher("{{env("PUSHER_KEY")}}")
var channel = pusher.subscribe('laravel-channel');
channel.bind('my-event', function(data) {
   if($('#initial_comment').is(':visible')) {
      $('#initial_comment').hide();
   }
   $(".list-group").prepend('<li class="list-group-item">'+data.message+'</li>');
   $('.list-group-item:first').addClass("flash");
});
</script>
@endSection