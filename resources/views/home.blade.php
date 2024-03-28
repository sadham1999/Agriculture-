<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Smart Farming with Vivasayam Voice</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        .dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-btn {
    background-color: transparent;
    border: none;
    cursor: pointer;
    font-size: 20px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    color: #333;
}

/* Highlight the link on hover */
.dropdown-content a:hover {
    background-color: #ddd;
}

/* Show the dropdown content when the button is clicked */
.show {
    display: block;
}
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    width: 100%;
    position: relative;
    font-family: 'poppins', sans-serif;
    background: #fafafa;
}

.navbar{
    width: 100%;
    height: 60px;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 9;
    background: #fff;
    border-bottom: 1px solid #999;
    padding: 10px 5vw;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.logo{
    height: 30px;
}

.search-box{
    width: 300px;
    height: 40px;
    display: flex;
}

#search-input{
    width: 260px;
    height: 100%;
    background: #fafafa;
    border: 1px solid #999;
    padding: 10px;
    text-transform: capitalize;
}

.search-btn{
    background: #fff;
    cursor: pointer;
    border: 1px solid #999;
    border-left: none;
    padding: 10px;
}

.search-icon{
    width: 20px;
    height: 20px;
}

.nav-links{
    display: flex;
    align-items: center;
    gap: 30px;
}

.nav-icon{
    width: 35px;
    height: 35px;
    cursor: pointer;
}

.user-profile{
    width: 30px;
    height: 30px;
    border-radius: 50%;
}

.activity-log{
    position: relative;
    height: 25px;
}

.activity-container{
    width: 350px;
    height: auto;
    max-height: 300px;
    position: absolute;
    top: 200%;
    right: 0;
    background: #fff;
    border: 1px solid #999;
}

.activity-card{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    padding-bottom: 0;
    margin-bottom: 10px;
    cursor: pointer;
}

.activity-card:hover{
    background: #fafafa;
}

.activity-container.hide{
    pointer-events: none;
    opacity: 0;
}

.user-img{
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

.activity{
    width: 200px;
    font-size: 1rem;
}

.activity-post{
    width: 50px;
    height: 50px;
    object-fit: cover;
}
/* main section */

.main{
    width: 100%;
    position: relative;
    margin-top: 100px;
    /* display: flex; */
    padding: 0 10vw 100px;
    gap: 50px;
}

/* post section */

.post-container{
    width: 60%;
}

.post{
    width: 100%;
    border: 1px solid #999;
    background: #fff;
    margin-bottom: 30px;
}

.post-header{
    display: flex;
    align-items: center;
    padding: 1.2rem;
    gap: 10px;
}

.post-header .user-icon{
    width: 30px;
    height: 30px;
    border-radius: 50%;
}

.post-header .username{
    font-size: .9rem;
    font-weight: 600;
}

.post-feed{
    width: 100%;
    height: 500px;
    position: relative;
}

.post-img-container{
    width: 100%;
    height: 100%;
    display: flex;
    overflow: hidden;
}

.post-img-container img{
    min-width: 100%;
    height: 100%;
    object-fit: cover;
    transition: .5s;
}

.post-detail{
    padding: 1.2rem;
}

.detail-intracables{
    display: flex;
    gap: 10px;
}

.detail-intracables img{
    width: 30px;
    height: 30px;
    cursor: pointer;
}

.likes{
    color: #a0a0a0;
    display: flex;
    margin: 10px 0;
}

.post .username{
    font-weight: 600;
}

.post-des{
    margin: 20px 0;
    font-size: .9rem;
    line-height: 1.5rem;
    opacity: 0.7;
}

.comment-box{
    width: 100%;
    height:40px;
    display: flex;
    border: 1px solid #999;

}

#comment-input{
    height:100%;
    border: none;

}

#comment-input::placeholder{
    color: #bbb;
}

#comment-input:focus{
    outline: 1px solid #2f2f2f;
}

.add-comment-btn{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 60px;
    height: 40px;
    cursor: pointer;
    border: none;
    outline: none;
    background: #fff;
}

.add-comment-btn img{
    width: 30px;
    height: 30px;
}

.comment-count{
    font-weight: 600;
    color: #a0a0a0;
    font-size: .8rem;
    display: flex;
    margin-top: 10px;
    opacity: 0.7;
}

.post-overlays{
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    pointer-events: none;
}

.like-icon{
    width: 200px;
    opacity: 0;
    transition: .5s;
}

.like-icon.show{
    opacity: 1;
    animation: popup 2s forwards 1;
}

@keyframes popup{
    0%{
        transform: scale(0);
    }
    20%{
        transform: scale(1.1);
    }
    80%{
        transform: scale(.9);
    }
    90%{
        transform: scale(.95);
    }
    100%{
        transform: scale(1);
    }
}

.share-window{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #fff;
    padding: 20px;
    width: 70%;
    transition: .5s;
    opacity: 0;
}

.share-window.active{
    opacity: 1;
    pointer-events: all;
}

.share-window .title{
    font-size: 1rem;
    font-weight: 500;
    text-transform: capitalize;
    margin-bottom: 20px;
}

.share-link-container{
    width: 100%;
    display: flex;
    border: 1px solid #999;
}

#share-link{
    height: 40px;
    padding: 10px;
    background: #fafafa;
    border: none;
    color: #999;
    width: 100%;
}

.copy-btn{
    background: #80c2ff88;
    border: none;
    outline: none;
    cursor: pointer;
    color: #80c2ff;
    text-transform: capitalize;
    width: 100px;
}



.close-btn {
   cursor: pointer;
    font-size: 20px;

}

/* Styles for the link and icon */
.nav-links {
    text-decoration: none;
}
#blah{
    width:100%;

}

.notification-icon {
            position: relative;
            display: inline-block;
        }

        .notification-badge {
            position: absolute;
            top: 0;
            right: 0;
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 4px 8px;
        }
.logout-button {
    background-color: #f44336; /* Change to your preferred background color */
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
    border-radius: 5px;
}

.logout-button:hover {
    background-color: #d32f2f; /* Change to a darker shade for hover effect */
}

/* Adjust the spacing between the icon and text if needed */
.logout-button i {
    margin-right: 5px;
}
        </style>
    <body>
        <!-- Include SweetAlert library -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--navbar-->
        <nav class="navbar">
        <div class="logo-text bg-dark">
       <img src="/images/logo.png" width="150" alt="">
       
    </div>
            
            <form class="search-box" onsubmit='return false'>
           
                <input type="text" name='search' placeholder="search" name="search-query" id="search-input">
              
            </form>
 
            <div class="nav-links">
            @foreach($upload as $items )
            <div class="dropdown">
  <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  <img src="{{ asset($items->image) }}" style="width : 30px; height:30px;border-radius:50%" class="" alt="test">
  </button>
  <ul class="dropdown-menu">
  
    <li><a class="dropdown-item" href="#">Name : {{$items->name}}</a></li>
    <li><a class="dropdown-item" href="#">Email : {{$items->email}}</a></li>
  </ul>
</div>
<div class="dropdown" style="padding-left: 10px;">
        <button class="dropdown-btn" onclick="Dropdown()">⋮</button>
        <div class="dropdown-content" id="newsdropdown">
            <a href="https://tamil.krishijagran.com/" >News(தமிழ்)</a>
            <a href="https://krishijagran.com/agriculture-world/">News(English)</a>
            <a href="https://www.tn.gov.in/scheme/department_wise/2">scheme</a>
        </div>
    </div>
            
        @endforeach
        <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  <i class="fa fa-bell"></i> <span class="badge badge-light bg-danger">
    {{count($countwish)}}
  </span>  </button>
  <ul class="dropdown-menu">
  @foreach($countwish as $cc)
  <li><a class="dropdown-item" href="#">{{$cc->name}} like your post</a></li>
  @endforeach
    
    
    
  </ul>
</div>
  
                 <button id="upload-link" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#uploadModal">
                 <i class="fa fa-plus mx-2"></i> 

</button>
                <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}" style="color: white;">Login</a></li>
                            <li><a href="{{ route('register') }}" style="color: white;">Register</a></li>
                        @else
                        <button id="logout-button"   onclick="return confirmLogout()" class="btn btn-danger">
    <i class="fa fa-sign-out mx-2"></i> 
</button>
                                     <form id="logout-form" onsubmit="" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        @endguest
                    </ul>
            </div>
        </nav>
        

    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Upload Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="image-upload-form" action="upload" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="d-flex ">
                        <label for="image-input" class="col-4 border px-2 py-3 my-2 shadow-sm me-2  rounded">
                            <input type="file" name="image" id="image-input" accept="image/*" class="d-none" required>
                            <img id="blah" src="/images/upload.png" alt="your image" />
                        </label>
                        <textarea name="caption" id="caption-editor" class="form-control px-2 py-3  my-2 shadow-sm" placeholder="Enter Your Text Here..."></textarea>
                        </div>
                   
                        <div class="row justify-content-center mt-3">
                            <input type="submit" class="btn btn-success col-4" value="Upload">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @php
    $customerIds = [];
@endphp

@foreach($wishlist as $cus)

    @php
        $customerIds[] = $cus->customer_id;
    @endphp
@endforeach


        <!-- main section -->
        <section class="main">
       
@foreach($data as $item)

    <!-- post section -->
    <div class="post-container ">
   
    <div class="post-header">
           
    
   

           </div>
           
        <div class="post rounded">
        <div class="post-header d-flex">
    <img src="{{$item->image }}" style="width:30px;height:30px;border-radius:50%;" class="col-10" alt="">
    <p class="username mb-0">@ {{$item->customer_name }}</p>
    <div class="ms-auto">
    @if(Auth::user()->id == $item->auth_id)
    <div class="dropdown">
           <button class="dropdown-btn" onclick="toggleDropdown({{ $item->cid }})">⋮</button>
           <div class="dropdown-content" id="myDropdown{{ $item->cid }}">
               <a href="#" onclick="confirmDelete({{ $item->cid }})">Delete</a>
           </div>
       </div>
       
   @endif
    

        <!-- @if(in_array($item->cid, $customerIds))
            <a href="flag/{{$item->cid}}"><i class="fa fa-heart" style="color:red" aria-hidden="true"></i></a> 
        @else
            <a href="flag/{{$item->cid}}"><i class="fa fa-heart" style="color:black" aria-hidden="true"></i></a> 
        @endif -->
    </div>
</div>

            <div class="d-flex justify-content-center">
            <img src="{{ asset($item->cImage) }}" class="col-10 m-auto shadow rounded" alt="test">
        </div>

     
            <div class="post-detail">
                <div class="detail-intracables">
                    
        @if(in_array($item->cid, $customerIds))
            <a href="flag/{{$item->cid}}"><i class="fa fa-heart" style="color:red" aria-hidden="true"></i></a> 
        @else
            <a href="flag/{{$item->cid}}"><i class="fa fa-heart" style="color:black" aria-hidden="true"></i></a> 
        @endif
            <p>{{$item->caption}}</p>
                
                </div>
                <!-- <span class="likes">2.7k likes</span> -->
             
                <div class="container col-12 my-2">
    <div class="row">
        <div class="col-md-12 p-0">
            <div class="card">
                <div class="card-header">
                    Comments
                </div>
                <ul class="list-group list-group-flush">
                    @foreach($comments as $comment)
            
                    @if( $comment->customer_id == $item->cid)   
                    <li class="list-group-item">
                            <p class="fw-bold">{{ $comment->user_name }}</p>
                            <p>{{ $comment->comments }}</p>
                            <!-- You can access other comment properties using $comment->propertyName -->
                        </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>



                <div class="comment-box ">
                <form  action="comment/{{$item->cid}}" method="POST" class="w-100 d-flex justify-content-between  align-items-center" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <input type="text" id="comment-input" name="comments"  class="col-11 px-2" placeholder="Add a comment">
                    <button type="submit"  class="btn btn-sm btn-info fw-bold mx-2 ">
                    <i class="fa fa-send text-white"></i>
                    </button>
                    </form>
                </div>

                <!-- <span class="comment-count">300 comments</span> -->
            </div>
        </div>

    </div>


@endforeach
</section>
        <script src="js/post.js"></script>
<!-- Include jQuery (if not already included) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">

<!-- Include SweetAlert2 JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

            </body>
<script>
     var botmanWidget = {
         introMessage: "Welcome To Agriculture"
     };
     // Open the popup when the link is clicked
// const uploadLink = document.getElementById("upload-link");
// const uploadPopup = document.getElementById("upload-popup");

// uploadLink.addEventListener("click", () => {
//     uploadPopup.style.display = "flex";
// });

// Close the popup when the close button is clicked
// const closePopup = document.getElementById("close-popup");

// closePopup.addEventListener("click", () => {
//     uploadPopup.style.display = "none";
// });

// Close the popup when clicking outside of it
// window.addEventListener("click", (event) => {
//     if (event.target == uploadPopup) {
//         uploadPopup.style.display = "none";
//     }
// });
    </script>
  <script>
    // Get references to the input and img elements
    const imageInput = document.getElementById("image-input");
    const previewImage = document.getElementById("blah");

    // Add an event listener to the input element
    imageInput.addEventListener("change", function () {
        // Check if a file has been selected
        if (imageInput.files && imageInput.files[0]) {
            const reader = new FileReader();

            // Set up a function to run when the file has been loaded
            reader.onload = function (e) {
                // Update the src attribute of the img element to display the selected image
                previewImage.src = e.target.result;
            };

            // Read the selected file as a data URL
            reader.readAsDataURL(imageInput.files[0]);
        }
    });
    function confirmLogout() {
        // Display a SweetAlert confirmation dialog
        Swal.fire({
            title: 'Confirm Logout',
            text: 'Are you sure you want to logout?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Logout',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                // If the user clicked "Logout" in the confirmation dialog,
                // the form submission will proceed
                 
                document.getElementById('logout-form').submit();
            } else {
                // If the user clicked "Cancel" in the confirmation dialog,
                // the form submission will be canceled
                return false;
            }
        });
    }
$("#search-input").keyup(function(){
    
    let filter = $(this).val().toUpperCase(); // Get the search input value and convert it to uppercase for case-insensitive search
    $(".username").each(function() { // Use .each() to iterate over each element with the class "username"
        let text = $(this).text().toUpperCase(); // Get the text content of the element and convert it to uppercase
        if (text.indexOf(filter) > -1) { // Check if the text contains the filter string
            $(this).parent().parent().show(); // Show the parent of the matched element
        } else {
            $(this).parent().parent().hide(); // Hide the parent of the non-matching element
        }
    });
});

</script>

    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script>
    function Dropdown() {
    var dropdownContent = document.getElementById("newsdropdown");
    if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
    } else {
        dropdownContent.style.display = "block";
        
    }
}
function toggleDropdown(itemId) {
    var dropdownContent = document.getElementById("myDropdown" + itemId);
    dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
}

function confirmDelete(itemId) {
    var confirmation = confirm("Are you sure you want to delete this item?");
    if (confirmation) {
        window.location.href = "/delete/" + itemId;
    }
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropdown-btn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.style.display === "block") {
                openDropdown.style.display = "none";
            }
        }
    }
}
</script>