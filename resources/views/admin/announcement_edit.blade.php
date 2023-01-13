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
            <form class="uploading" method="POST" action="{{route('admin_announcement_update')}}">
                @csrf
                
                <span class="icon">
                        <ion-icon name="cloud-upload-outline"></ion-icon>
                    </span>
                    <span class="title">&ensp;Add Upload photo/video.</span>  
                    <input type="text" class="caption" placeholder="Enter Video Link" name="video_link" required value="{{$find->link}}">  
                <br><br>
                    
                    <input type="text" class="caption" placeholder="Enter Content" name="content" value="{{$find->content}}">
                    <input type="hidden" name="announcement_id" value="{{Request::segment(3)}}">
                <div class="right-text"><br>
                    <button type="submit">Done</button>
                </div>    
            </form>
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