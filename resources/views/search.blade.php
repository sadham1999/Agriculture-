@extends('layouts.app')
@section('content')
<style>
    .upper-content {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        backdrop-filter: blur(10px);
        overflow-y: scroll; /* Enable vertical scrolling */
        padding-top:60px;
       
    }
 /* Styling for the scrolled state */
 .topbar {
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(20px);
        }
    .front-img img {
        transform: scaleX(-1);
        width: 80%;
    }

    .title h3 {
        font-family: 'PT Serif', serif;
        text-shadow: 5px 3px 10px rgba(94, 94, 94, 1);
    }

    /* Style the <p> element */
    .upper-content p {
        font-size: 15px; /* Adjust the font size as needed */
        line-height: 1.5; /* Adjust the line height as needed */
        color: black; /* Set text color to white */
    }
</style>
<div class="content position-relative">
    <div class="img-bg overflow-hidden">
        <!-- <img src="/images/agri-blur-background.jpg" alt="" style="width: 100%; filter: blur(10px);"> -->
    </div>
    <div class="upper-content d-flex">
        <div class="image-container col-md-6 px-2">
         <!-- First Random Agriculture Image -->
    <img src="/images/front.png" class="col-12 p-1 rounded" alt="Random Agriculture Image 1">

<!-- Second Random Agriculture Image -->
<img src="/images/register.png" class="col-12 p-1 rounded" alt="Random Agriculture Image 2"><br>
<img src="/images/login.png" class="col-12 p-1 rounded" alt="Random Agriculture Image 2"><br>
<img src="/images/homes.png" class="col-12 p-1 rounded" alt="Random Agriculture Image 2"><br>
<img src="/images/chatbot.png" class="col-12 p-1 rounded" alt="Random Agriculture Image 2">

        </div>
        <p><br><br><br><br><br><br>The above image  page is the front page from our project. On the front page we have home,search,login,register icons.
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>The above image page is the register page from our project.On the register page we have to register this website by using login email id & password based on the user and user name & profile picture.<br>
<br><br><br><br><br><br><br><br><br><br><br>The above  image page is the login page from our project.On the login page we have to login this website by using user email id & password based on the user.
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>The above image  page is the post page & news page from our project.On the post page ,we can see any post regarding agriculture things & we can add any post regarding agriculture and it is similar to instagram  & facebook.On the News button , we can see any news regarding agriculture things.
<br><br><br><br><br><br><br><br><br><br>The above image page is the chatbot button page from our project . On the chatbot button page , we can ask any question and get answers based on agriculture & we can ask questions in both Tamil & English language and get answers in both Tamil & English.
<br></p>
        </div>
   
@endsection
