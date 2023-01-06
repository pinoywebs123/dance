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

    <div class="topnav">
        <div class="toggle">
            <ion-icon name="menu-outline" class="open"></ion-icon>
            <ion-icon name="close-outline" class="close"></ion-icon>
        </div>
        <img src="/public/img/Prime.png" class="logo">

        <div class="hey"><a href="/dashboard/coach pov/profile.html" target="right-side" style="text-decoration: none;">
            <img src="/public/img/dp.JPG">
            <span style="color: #F9F8EA;">Hey there, name!</span>
        </a></div>
    </div>
    <div class="navigation">
        <ul>
            <li class="list active">
                <b></b>
                <b></b>
                <a href="/dashboard/coach pov/home.html" target="right-side">
                    <span class="icon">
                        <ion-icon name="home"></ion-icon>
                    </span>
                    <span class="title">Home</span>
                </a>
            </li>
    
            <li class="list">
                <b></b>
                <b></b>
                <a href="/dashboard/coach pov/members.html" target="right-side">
                    <span class="icon">
                        <ion-icon name="star"></ion-icon>
                    </span>
                    <span class="title" style="padding-bottom: 0;">Members</span>
                </a>
            </li>
                <li>
                    <ul class="sub-members">
                        <li>
                        <a href="/dashboard/coach pov/eb.html" target="right-side">
                            <span class="">Executive Board</span>
                        </a>
                        </li>
                        <li>
                        <a href="/dashboard/coach pov/ea.html" target="right-side">
                            <span class="">Executive Assistants</span>
                        </a>
                        </li>
                        <li>
                        <a href="/dashboard/coach pov/coaches.html" target="right-side">
                            <span class="">Coaches</span>
                        </a><br>
                        </li>
                        <li>
                        <a href="#">
                            <span class="">Committees</span>
                        </a>
                        </li>
                    </ul>
                </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="/dashboard/coach pov/dance class.html" target="right-side">
                    <span class="icon">
                        <ion-icon name="volume-medium"></ion-icon>
                    </span>
                    <span class="title">Dance class</span>
                </a>
            </li>
    
            <li class="list">
                <b></b>
                <b></b>
                <a href="/dashboard/coach pov/auditionees.html" target="right-side">
                    <span class="icon">
                        <ion-icon name="people"></ion-icon>
                    </span>
                    <span class="title">Auditionees</span>
                </a>
            </li>
        </ul>
            

        <div class="nav-footer">
            <p><a href="/try.html">
                <ion-icon name="exit-outline" style="font-size: 25px;"></ion-icon>
                Logout<a href="/try.html"></p><br>
            <a href="#">
                    <ion-icon name="logo-facebook" style="color: #F9F8EA;"></ion-icon>
            </a>
            <a href="#">
                    <ion-icon name="logo-twitter" style="color: #F9F8EA;"></ion-icon>
            </a>
            <a href="#">
                    <ion-icon name="logo-instagram" style="color: #F9F8EA;"></ion-icon>
                 </a>
        </div>
        
    </div>

    <iframe name="right-side" src="/dashboard/coach pov/home.html"></iframe>
    
    
    
    
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