<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Gordita' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="{{URL::to('/try.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <title>Document</title>
</head>
<body>
    <form class="login" method="POST" action="{{route('login_check')}}">
        @csrf
        <h1>Hey there!</h1>
            @include('shared.notification')
            <div class="input">
            <span  class="icon">
                <ion-icon name="person-circle-outline"></ion-icon>
            </span>
            <input type="text" class="title" placeholder="Email" name="email" required>
            </div>
            <div class="input">
            <span  class="icon">
                <ion-icon name="lock-closed-outline"></ion-icon>
            </span>
            <input type="password" class="title" placeholder="Password" name="password" required>
        </div>
        <button type="submit">Let's go</button>
        <br>
            <a href="{{route('forgot')}}" target="left-side">Oops! I forgot my password.</a>
        <br>
        <br>
            <button class="not-member">
                <i class="fa fa-id-card-o" aria-hidden="true"></i>
                <a href="{{route('apply')}}" target="left-side" style="padding-left:5px;">I'm not a member yet.
                </a>
            </button>
        </form>
</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    @if(Session::has('success'))
        Swal.fire({
          icon: 'success',
          title: 'Oops...',
          text: '{{Session::get('success')}}',
          
        })
    @endif


    @if(Session::has('error'))
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: '{{Session::get('error')}}',
          
        })
    @endif
</script>
</html>