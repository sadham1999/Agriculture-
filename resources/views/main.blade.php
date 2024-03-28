

@extends('layouts.app')

@section('content')

    <style>
        .upper-content{
            position:absolute;
            top:0px;
            bottom:0;
            backdrop-filter:blur(10px);
        }
        .front-img img{ 
            transform: scaleX(-1);
            width:80%;
        }
.title h3{
    font-family: 'PT Serif', serif;
    text-shadow: 5px 3px 10px rgba(94, 94, 94, 1);
}
    </style>


           <div class="content position-relative">
            <div class="img-bg overflow-hidden">
                <img src="/images/agri-blur-background.jpg" alt="">
            </div>
            <div class="upper-content d-flex justify-content-center" >
            <div class="front-img col-md-6 d-flex justify-content-end align-items-end">
                <img src="images/front-img.png"  alt="">
            </div>
                <div class="title d-flex flex-column justify-content-center">
                  <h3 class="fw-bold display-6 text-center text-white text-shadow"> Vivasayam Voice </h3>
                  <p class="text-center text-white text-shadow" style="font-family: 'Satisfy', cursive;font-size:25px;text-shadow: 5px 3px 10px rgba(94, 94, 94, 1);">
                  "Empowering fields with intelligence  by Smart Farming"
                  </p>
                </div>
            </div>
           
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
   
   <div class="floating-icon" data-bs-toggle="modal" data-bs-target="#myModal">
<i class="fa fa-info"></i>
</div>
<style>
       .floating-icon {
   position: fixed;
   bottom: 10px;
   right: 10px;
   background-color: #007bff;
   color: #fff;
   width: 40px;
   height: 40px;
   border-radius: 50%;
   text-align: center;
   line-height: 40px;
   cursor: pointer;
}
</style>
   <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
   <div class="modal-content">
       <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel"> Description</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
<b>Sign Up :</b> Create an account by providing your name, email, and a password.</br>

<b>Profile Setup :</b> Complete your profile by adding a profile picture<br>

<b>Find Friends :</b> Search for and connect with friends by searching for their names <br>

<b>Post Content :</b> Share updates, photos, videos, or status updates on your timeline.<br>

<b>Like and Comment :</b> Interact with posts from friends by liking them or leaving comments.<br>

<b>Chat and Messaging :</b> Use private messaging features to have one-on-one or group conversations with friends.<br>

<b>Notifications :</b> Stay informed about activity on your account through notifications for friend requests, likes, comments, and messages.<br>

<b>Explore Feed :</b> Discover content from people and pages you follow in your feed,get news,info from chatbot.<br>

<b>Join Groups or Pages :</b> Participate in groups or follow pages related to your interests<br>

<b>Logout :</b> Securely log out of your account when finished.<br><br><br>
பதிவு செய்யவும் : உங்கள் பெயர், மின்னஞ்சல் மற்றும் கடவுச்சொல்லை வழங்குவதன் மூலம் கணக்கை உருவாக்கவும்.<br>
சுயவிவர அமைப்பு : சுயவிவரப் படத்தைச் சேர்ப்பதன் மூலம் உங்கள் சுயவிவரத்தை முடிக்கவும்<br>
நண்பர்களைக் கண்டுபிடி : நண்பர்களின் பெயர்களைத் தேடுவதன் மூலம் அவர்களைத் தேடுங்கள் மற்றும் இணைக்கவும் <br>
இடுகை உள்ளடக்கம் : உங்கள் காலவரிசையில் புதுப்பிப்புகள், புகைப்படங்கள், வீடியோக்கள் அல்லது நிலைப் புதுப்பிப்புகளைப் பகிரவும்.<br>
லைக் மற்றும் கருத்து : நண்பர்களின் இடுகைகளை விரும்புவதன் மூலம் அல்லது கருத்துகளை இடுவதன் மூலம் தொடர்பு கொள்ளவும்<br>
அரட்டை மற்றும் செய்தி அனுப்புதல் : நண்பர்களுடன் ஒருவருக்கு ஒருவர் அல்லது குழு உரையாடல்களை மேற்கொள்ள தனிப்பட்ட செய்தியிடல் அம்சங்களைப் பயன்படுத்தவும்.<br>
அறிவிப்புகள் : நண்பர் கோரிக்கைகள், விருப்பங்கள், கருத்துகள் மற்றும் செய்திகளுக்கான அறிவிப்புகள் மூலம் உங்கள் கணக்கின் செயல்பாடு குறித்து தொடர்ந்து அறிந்திருங்கள்.<br>
ஊட்டத்தை ஆராயுங்கள் : உங்கள் ஊட்டத்தில் நீங்கள் பின்தொடரும் நபர்கள் மற்றும் பக்கங்களிலிருந்து உள்ளடக்கத்தைக் கண்டறியவும், செய்திகளைப் பெறவும், chatbot இலிருந்து தகவலைப் பெறவும்.<br>
குழுக்கள் அல்லது பக்கங்களில் சேரவும் : குழுக்களில் பங்கேற்கவும் அல்லது உங்கள் ஆர்வங்கள் தொடர்பான பக்கங்களைப் பின்தொடரவும்<br>
வெளியேறு : முடிந்ததும் உங்கள் கணக்கிலிருந்து பாதுகாப்பாக வெளியேறவும்.

       </div>
       <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       </div>
   </div>
</div>
</div>   
            </div>

      
@endsection
           
      
 