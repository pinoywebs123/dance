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
        <h1>ANNOUNCEMENT</h1>

            <div class="import-items">
                <a href="{{route('admin_announcement_new')}}" style="text-decoration: none; color:black">
                    <span class="icon">
                        <ion-icon name="add-circle-outline"></ion-icon>
                    </span>
                    <span class="title">Add Announcement</span>
                </a>
            </div>

             <br>
              <br>
               <br>
           @foreach($anns as $an)
           <div class="import-items">
                <a href="{{route('admin_announcement_new')}}" style="text-decoration: none; color:black">
                   
                   

                    <a href="{{$an->link}}">{{$an->link}}</a>
                    <br>
                    <p>{{$an->content}}</p>
                    <br>
                    @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                        <a href="">Edit</a>
                        <a href="{{route('admin_announcement_archive',$an->id)}}">Archive</a>

                    @endif
                </a>
            </div>
           @endforeach 
    </div>



    <footer class="footer">
        <div class="circle">
            <h1>UNITY</h1>
        </div>
        <div class="circle">
            <h1>STRENGTH</h1>
        </div><div class="circle">
            <h1>TRUST</h1>
        </div>
    </footer>
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