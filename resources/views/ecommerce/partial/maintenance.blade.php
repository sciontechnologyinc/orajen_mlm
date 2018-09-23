<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
    font-family: 'Noto Sans', sans-serif;
}
.um-img {
    text-align: center;
}

.um-img img {
    width: 210px;
}

.um-img {
    text-align: center;
    font-size: 24px;
    font-weight: bold;
}

.page-desc {
    text-align: center;
    padding-top: 20px;
    color: #FFC107;
    font-size: 20px;
}

.page-desc1 {
    text-align: center;
    font-style: italic;
    font-family: 'Pacifico', cursive;
    font-size: 20px;
    padding:5px;
}

.fa {
    padding: 20px;
    font-size: 30px;
    width: 30px;
    text-align: center;
    text-decoration: none;
    border-radius: 50%;
}

/* Add a hover effect if you want */
.fa:hover {
    opacity: 0.7;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
    background: #3B5998;
    color: white;
}

/* Twitter */
.fa-twitter {
    background: #55ACEE;
    color: white;
}

.fa-instagram {
    background: #d6249f;
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
  color: white;
}

.social-media {
    text-align: center;
    padding-top: 50px;
    color: #3f3f3f;
    font-weight: bold;
}

.socialmedia-icons {
    text-align: center;
}

.socialmedia-icons {
    text-align: center;
    margin-top: 10px;
}

.company-logo {
    text-align: center;
    padding-top: 10px;
}

.company-logo img {
    width: 100px;
}

</style>


    <div class="um-img">
    <img src="/images/undermaintenance-img.png" alt="">
    </div>

   <div class="um-img">PAGE UNDER CONSTRUCTION</div>


    <div class="company-logo"><img src="/img/logo.png" alt=""></div>
    <div class="page-desc">Our website is coming soon. </div>
    <div class="page-desc1">@yield('umcontent')</div>

    <div class="social-media">Social Media</div>
    <div class="socialmedia-icons">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram"></a>
    </div>
