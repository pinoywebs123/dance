<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Gordita' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="{{URL::to('styles/dashboard.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <title>Document</title>
</head>
<body>

    <div class="topnav">
        <div class="toggle">
            <ion-icon name="menu-outline" class="open"></ion-icon>
            <ion-icon name="close-outline" class="close"></ion-icon>
        </div>
        <img src="{{URL::to('/public/img/Prime.png')}}" class="logo">

        <div class="hey"><a href="{{route('admin_profile')}}" target="right-side" style="text-decoration: none;">
            <img src="{{URL::to('/public/img/dp.JPG')}}">
            <span style="color: #F9F8EA;">{{Auth::user()->name}}</span>
        </a></div>
    </div>
    <div class="navigation">
        <ul>
            <li class="list active">
                <b></b>
                <b></b>
                <a href="{{route('admin_home2')}}" target="right-side">
                    <span class="icon">
                        <ion-icon name="home"></ion-icon>
                    </span>
                    <span class="title">Home</span>
                </a>
            </li>
    
            <li class="list">
                <b></b>
                <b></b>
                <a href="{{route('admin_members')}}" target="right-side">
                    <span class="icon">
                        <ion-icon name="star"></ion-icon>
                    </span>
                    <span class="title" style="padding-bottom: 0;">Members</span>
                </a>
            </li>
            <li class="list" style="padding-left: 30px;">
                <b></b>
                <b></b>
                <a href="eb.html" target="right-side">
                    <span class="icon">
                        <ion-icon name="volume-medium" style="display: none;"></ion-icon>
                    </span>
                    <span class="title">Executive Board</span>
                </a>
            </li>

            <li class="list" style="padding-left: 30px;">
                <b></b>
                <b></b>
                <a href="ea.html" target="right-side">
                    <span class="icon">
                        <ion-icon name="volume-medium" style="display: none;"></ion-icon>
                    </span>
                    <span class="title">Executive Assistants</span>
                </a>
            </li>

            <li class="list" style="padding-left: 30px;">
                <b></b>
                <b></b>
                <a href="{{route('admin_coaches')}}" target="right-side">
                    <span class="icon">
                        <ion-icon name="volume-medium" style="display: none;"></ion-icon>
                    </span>
                    <span class="title">Coaches</span>
                </a>
            </li>

            <li class="list">
                <b></b>
                <b></b>
                <a href="{{route('admin_dance_class')}}" target="right-side">
                    <span class="icon">
                        <ion-icon name="volume-medium"></ion-icon>
                    </span>
                    <span class="title">Dance class</span>
                </a>
            </li>
            
            @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
            <li class="list">
                <b></b>
                <b></b>
                <a href="{{route('admin_audition')}}" target="right-side">
                    <span class="icon">
                        <ion-icon name="people"></ion-icon>
                    </span>
                    <span class="title">Auditionees</span>
                </a>
            </li>

            @endif
        </ul>
            

        <div class="nav-footer">
            <p><a href="{{route('admin_logout')}}">
                <ion-icon name="exit-outline" style="font-size: 25px;"></ion-icon>
                Logout</p><br></a>
            <a href="https://www.facebook.com/USTPRIME" target="_blank">
                    <ion-icon name="logo-facebook" style="color: #F9F8EA;"></ion-icon>
            </a>
            <a href="https://twitter.com/ustprime" target="_blank">
                    <ion-icon name="logo-twitter" style="color: #F9F8EA;"></ion-icon>
            </a>
            <a href="https://www.instagram.com/ustprime/" target="_blank">
                    <ion-icon name="logo-instagram" style="color: #F9F8EA;"></ion-icon>
                 </a>
        </div>
        
    </div>

    <iframe name="right-side" src="{{route('admin_home2')}}"></iframe>
    
    
    
    
    <script type="text/javascript">
        let menuToggle = document.querySelector('.toggle')
        let Navigation = document.querySelector('.navigation')
        menuToggle.onclick = function(){
            menuToggle.classList.toggle('active')
            Navigation.classList.toggle('active')
        }
    
        let list = document.querySelectorAll('.list');
        for(let i = 0; i < list.length; i++){
            list[i].onclick = function(){
                let j = 0;
                while (j < list.length){
                    list[j++].className = 'list'
                }
                list[i].className = 'list active';
            }
        }
    </script>
    
    
    
    
    
    
    
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $(".open").click(function(){
                $(".m-soft").css('display','block');
                
            });
            $(".close").click(function(){
                $(".m-soft").css('display','none');
            });
        });
    </script>
</body>
</html>