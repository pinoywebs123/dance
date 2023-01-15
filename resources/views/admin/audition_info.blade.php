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
    <style type="text/css">
        *{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}


.rate2 {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate2:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate2:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate2:not(:checked) > label:before {
    content: '★ ';
}
.rate2 > input:checked ~ label {
    color: #ffc700;    
}
.rate2:not(:checked) > label:hover,
.rate2:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate2 > input:checked + label:hover,
.rate2 > input:checked + label:hover ~ label,
.rate2 > input:checked ~ label:hover,
.rate2 > input:checked ~ label:hover ~ label,
.rate2 > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

.rate3 {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate3:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate3:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate3:not(:checked) > label:before {
    content: '★ ';
}
.rate3 > input:checked ~ label {
    color: #ffc700;    
}
.rate3:not(:checked) > label:hover,
.rate3:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate3 > input:checked + label:hover,
.rate3 > input:checked + label:hover ~ label,
.rate3 > input:checked ~ label:hover,
.rate3 > input:checked ~ label:hover ~ label,
.rate3 > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

.rate4 {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate4:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate4:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate4:not(:checked) > label:before {
    content: '★ ';
}
.rate4 > input:checked ~ label {
    color: #ffc700;    
}
.rate4:not(:checked) > label:hover,
.rate4:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate4 > input:checked + label:hover,
.rate4 > input:checked + label:hover ~ label,
.rate4 > input:checked ~ label:hover,
.rate4 > input:checked ~ label:hover ~ label,
.rate4 > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

.rate5 {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate5:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate5:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate5:not(:checked) > label:before {
    content: '★ ';
}
.rate5 > input:checked ~ label {
    color: #ffc700;    
}
.rate5:not(:checked) > label:hover,
.rate5:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate5 > input:checked + label:hover,
.rate5 > input:checked + label:hover ~ label,
.rate5 > input:checked ~ label:hover,
.rate5 > input:checked ~ label:hover ~ label,
.rate5 > label:hover ~ input:checked ~ label {
    color: #c59b08;
}


/* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
    </style>
    <title>Document</title>
</head>
<body>
    <div class="auditionee">
            <div class="info-main">
                <div class="info-header">
                    <img src="/public/img/person-circle-outline.svg">
                        <div class="info-text">
                            <h1>{{$find->name}}</h1>
                            <span>Auditionee</span><br>
                            <span style="padding: 0;"><ion-icon name="checkmark-circle" style="color: #99B83C;"></ion-icon>&nbsp;
                                @if($find->status_id == 0)
                                Pending
                                <br>
                                @if(Auth::user()->role_id == 2)
                                 <a href="{{route('admin_audition_pass',$find->id)}}">Click to Passed</a> 
                                <br>
                                <a href="{{route('admin_audition_fail',$find->id)}}">Click to Fail</a> 
                                @endif
                               
                                @elseif($find->status_id == 1)
                                    Passed
                                @elseif($find->status_id == 2)
                                    Failed
                                @endif
                            </span>
                        </div>
                </div>
                <div class="info-main-one">
                    <h2>&emsp;PERSONAL INFORMATION</h2>
                    <div class="info-box-one">
                        <table>
                            <tr>
                                <th>Student Number</th>
                                <td>{{$find->student_id}}</td>
                            </tr>
                            <tr>
                                <th>Full Name</th>
                                <td>{{$find->name}}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>{{$find->sex}}</td>
                            </tr>
                            <tr>
                                <th>Program</th>
                                <td>{{$find->program}}</td>
                            </tr>
                            <tr>
                                <th>College</th>
                                <td>{{$find->college}}</td>
                            </tr>
                            <tr>
                                <th>Year Level</th>
                                <td>{{$find->college_year}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="info-main-one" style="padding-top: 0;">
                    <h2>&emsp;CONTACT DETAILS</h2>
                    <div class="info-box-one">
                        <table>
                            <tr>
                                <th>Contact Number</th>
                                <td>{{$find->contact}}</td>
                            </tr>
                            <tr>
                                <th>UST Email</th>
                                <td>{{$find->email}}</td>
                            </tr>
                            <tr>
                                <th>FB Link</th>
                                <td>{{$find->fb_link}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="perfs">
                <h1 style="text-align: center;">PERFORMANCES</h1>
                
                <form action="{{route('admin_audition_rating')}}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{Request::segment(3)}}">
                <div class="videos">
                    <h2>Own Video</h2><br>
                    <a href="">{{$find->youtube_link}}</a>
                    @if(Auth::user()->role_id == 2)
                    <div class="rates">
                
                <div class="criteria">
                    <span>Musicality</span>
                        <div class="rate">
                            <input type="radio" id="star5" name="music" value="5" <?php if(isset($find->rating)){if($find->rating->music == 5) {echo 'checked';}}?>/>
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="music" value="4" <?php if(isset($find->rating)){if($find->rating->music == 4) {echo 'checked';}}?>/>
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="music" value="3" <?php if(isset($find->rating)){if($find->rating->music == 3) {echo 'checked';}}?>/>
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="music" value="2" <?php if(isset($find->rating)){if($find->rating->music == 2) {echo 'checked';}}?>/>
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="music" value="1" <?php if(isset($find->rating)){if($find->rating->music == 1) {echo 'checked';}}?>/>
                            <label for="star1" title="text">1 star</label>
                          </div>
                </div>
                <div class="criteria">
                    <span>Originality</span>
                        <div class="rate2">
                            <input type="radio" id="star10" name="originality" value="5" <?php if(isset($find->rating)){if($find->rating->originality == 5) {echo 'checked';}}?>/>
                            <label for="star10" title="text">5 stars</label>
                            <input type="radio" id="star9" name="originality" value="4" <?php if(isset($find->rating)){if($find->rating->originality == 4) {echo 'checked';}}?>/>
                            <label for="star9" title="text">4 stars</label>
                            <input type="radio" id="star8" name="originality" value="3" <?php if(isset($find->rating)){if($find->rating->originality == 3) {echo 'checked';}}?>/>
                            <label for="star8" title="text">3 stars</label>
                            <input type="radio" id="star7" name="originality" value="2" <?php if(isset($find->rating)){if($find->rating->originality == 2) {echo 'checked';}}?>/>
                            <label for="star7" title="text">2 stars</label>
                            <input type="radio" id="star6" name="originality" value="1" <?php if(isset($find->rating)){if($find->rating->originality == 1) {echo 'checked';}}?>/>
                            <label for="star6" title="text">1 star</label>
                          </div>
                </div>
                <div class="criteria">
                    <span>Choreography</span>
                       <div class="rate3">
                            <input type="radio" id="star15" name="choreography" value="5" <?php if(isset($find->rating)){if($find->rating->choreography == 5) {echo 'checked';}}?>/>
                            <label for="star15" title="text">5 stars</label>
                            <input type="radio" id="star14" name="choreography" value="4" <?php if(isset($find->rating)){if($find->rating->choreography == 4) {echo 'checked';}}?>/>
                            <label for="star14" title="text">4 stars</label>
                            <input type="radio" id="star13" name="choreography" value="3" <?php if(isset($find->rating)){if($find->rating->choreography == 3) {echo 'checked';}}?>/>
                            <label for="star13" title="text">3 stars</label>
                            <input type="radio" id="star12" name="choreography" value="2" <?php if(isset($find->rating)){if($find->rating->choreography == 2) {echo 'checked';}}?>/>
                            <label for="star12" title="text">2 stars</label>
                            <input type="radio" id="star11" name="choreography" value="1" <?php if(isset($find->rating)){if($find->rating->choreography == 1) {echo 'checked';}}?>/>
                            <label for="star11" title="text">1 star</label>
                          </div>
                </div>
                <div class="criteria">
                    <span>Personality</span>
                        <div class="rate4">
                            <input type="radio" id="star20" name="personality" value="5" <?php if(isset($find->rating)){if($find->rating->personality == 5) {echo 'checked';}}?>/>
                            <label for="star20" title="text">5 stars</label>
                            <input type="radio" id="star19" name="personality" value="4" <?php if(isset($find->rating)){if($find->rating->personality == 4) {echo 'checked';}}?>/>
                            <label for="star19" title="text">4 stars</label>
                            <input type="radio" id="star18" name="personality" value="3" <?php if(isset($find->rating)){if($find->rating->personality == 3) {echo 'checked';}}?>/>
                            <label for="star18" title="text">3 stars</label>
                            <input type="radio" id="star17" name="personality" value="2" <?php if(isset($find->rating)){if($find->rating->personality == 2) {echo 'checked';}}?>/>
                            <label for="star17" title="text">2 stars</label>
                            <input type="radio" id="star16" name="personality" value="1" <?php if(isset($find->rating)){if($find->rating->personality == 1) {echo 'checked';}}?>/>
                            <label for="star16" title="text">1 star</label>
                          </div>
                </div>
                <div class="criteria">
                    <span>Memory</span>
                        <div class="rate5">
                            <input type="radio" id="star25" name="memory" value="5" <?php if(isset($find->rating)){if($find->rating->memory == 5) {echo 'checked';}}?>/>
                            <label for="star25" title="text">5 stars</label>
                            <input type="radio" id="star24" name="memory" value="4" <?php if(isset($find->rating)){if($find->rating->memory == 4) {echo 'checked';}}?>/>
                            <label for="star24" title="text">4 stars</label>
                            <input type="radio" id="star23" name="memory" value="3" <?php if(isset($find->rating)){if($find->rating->memory == 3) {echo 'checked';}}?>/>
                            <label for="star23" title="text">3 stars</label>
                            <input type="radio" id="star22" name="memory" value="2" <?php if(isset($find->rating)){if($find->rating->memory == 2) {echo 'checked';}}?>/>
                            <label for="star22" title="text">2 stars</label>
                            <input type="radio" id="star21" name="memory" value="1" <?php if(isset($find->rating)){if($find->rating->memory == 1) {echo 'checked';}}?>/>
                            <label for="star21" title="text">1 star</label>
                          </div>
                </div><br>
                    <button type="submit">
                        <ion-icon name="checkmark-done-sharp" style="padding-right: 5px"></ion-icon>
                        SUBMIT
                    </button>

                </form>  
                @endif  
                        
            </div>
                    
                    
                    <br>
                    <br>
                    <br>
                    <br>
                    <h2>Dance Class Video</h2><br>
                    <blockquote>N/A</blockquote>
                </div>
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