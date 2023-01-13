<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Gordita' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="{{URL::to('/styles/dashboard.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="announcement">
        <h1>Dance Class</h1>
        <div class="import-items" style="background-color: white;">
                @if(Auth::user()->role_id == 2)
                    <a href="{{route('admin_dance_class_create')}}" style="text-decoration: none; color:black">
                    <span class="icon">
                        <ion-icon name="add-circle-outline"></ion-icon>
                    </span>
                    <span class="title">Add Room</span>
                </a>
                @endif
            </div>

            @foreach($dances as $dance)
            <div class="import-items" style="background-color: white;">
                <div class="items-added">
                    <p>Topic: {{$dance->topic}}<br>
                        Time: {{$dance->date}} at {{$dance->time}}<br>
                        <br>
                        Join Zoom Meeting<br>
                        {{$dance->link}}<br>
                        {{$dance->link_password}} </p>

                        @if(Auth::user()->role_id == 2)
                        <a href="{{route('admin_dance_class_edit',$dance->id)}}">Edit</a>
                        <a href="{{route('admin_dance_class_delete',$dance->id)}}">Delete</a>
                        @endif
                </div>

                    
            </div>

            @endforeach
    </div>

    

    <div class="footer">
        <div class="circle">
            <h1>UNITY</h1>
        </div>
        <div class="circle">
            <h1>STRENGTH</h1>
        </div><div class="circle">
            <h1>TRUST</h1>
        </div>
    </div>
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