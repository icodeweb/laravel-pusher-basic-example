<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Laravel & Pusher basic example</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/styles.css">
   </head>
   <body>
      <nav class="navbar navbar-default navbar-fixed-top">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#">Laravel & Pusher</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
               <ul class="nav navbar-nav">
                  <li class="{{ Request::is('', 'send') ? 'active' : ''}}"><a href="send">Send Message</a></li>
                  <li class="{{ Request::is('', 'receive') ? 'active' : ''}}"><a href="receive">Receive Message</a></li>
               </ul>
            </div>
         </div>
      </nav>
      <div class="container main">
      @yield('content')
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>