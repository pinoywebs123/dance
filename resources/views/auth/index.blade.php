
<html>
	<head>
		<title>Side Navbar</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Gordita' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="{{URL::to('index.css')}}">

	</head>
	<body>
		<div class="container">
			<!--Area of the images-->
			   <div class="wrapper">
				  <img src="{{URL::to('/public/img/02.png')}}">
				  <img src="{{URL::to('/public/img/01.png')}}">
				  <img src="{{URL::to('/public/img/03.png')}}">
				  <img src="{{URL::to('/public/img/04.png')}}">
			   </div>
			
			</div>
		<!-- <iframe name="left-side" src="{{url('login')}}"></iframe> -->

		
		<div class="navigation">
			<ul>
				<li class="list active">
					<a href="{{route('login')}}" target="left-side">
						<span class="title">Login</span>
					</a>
				</li>
		
				<li class="list">
					<b></b>
					<b></b>
					<a href="{{route('apply')}}" target="left-side">
						<span class="title">Apply</span>
					</a>
				</li>
		
				<li class="list">
					<b></b>
					<b></b>
					<a href="{{route('about')}}" target="left-side">
						<span class="title">About</span>
					</a>
				</li>
		
				<li class="list">
					<b></b>
					<b></b>
					<a href="{{route('faqs')}}" target="left-side">
						<span class="title">FAQS</span>
					</a>
				</li>
				
		
			</ul></div>
		</div>
		
		<div class="toggle">
		</div>
		
		
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