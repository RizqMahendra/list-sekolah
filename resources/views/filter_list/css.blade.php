<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/landing_page/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{asset('css/landing_page/slicknav.css')}} ">
    <link rel="stylesheet" href="{{asset('css/landing_page/flaticon.css')}} ">
    <link rel="stylesheet" href="{{asset('css/landing_page/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing_page/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing_page/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing_page/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing_page/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing_page/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing_page/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing_page/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing_page/style.css')}}">
    <title>Daftar Sekolah Bahasa Jepang</title>
  </head>
  <style>
     @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331!important;
            }
        }
.view,body,html{
  height:100%
  }
.margin-top{
  margin-top : 100px; 
}
  h1.special-header {
    font-size: 4.2rem;
    font-weight: 300;
    color: #212121;
}
.navbar{
  background-color:rgba(0,0,0,.2)
  }
.page-footer,.top-nav-collapse{
  background-color:#1C2331
  }
@media only screen and (max-width:768px){
  .navbar{
    background-color:#1C2331
  }
  }


.header {
    display: flex;
    align-items: center;
    margin-bottom: 3px;
}
.logo-univ img {
    height: 100%;
    width: 100%;
    -o-object-fit: contain;
    object-fit: contain;
    -o-object-position: center;
    object-position: center;
}
 .logo-univ {
    width: 40px;
    height: 40px;
    border: 1px solid #ddd;
    border-radius: 10px;
    min-width: 40px;
    min-height: 40px;
    overflow: hidden;
    background: #fff;
    position: relative;
    padding: 2.5px;
}
.location a {
    color: #277dcb;
    font-size: 12px;
    display: flex;
    display: -webkit-flex;
    flex-wrap: wrap;
}

.short-description{
  overflow: hidden;
  font-size : 12px;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 3; /* number of lines to show */
   -webkit-box-orient: vertical;
}

.card{
  margin-bottom : 20px;
  border-radius : 20px;
  box-shadow: rgb(26 52 79 / 10%) 0px 2px 12px 0px;
}

.card:hover{ 
     box-shadow: 1px 8px 20px grey;
    -webkit-transition:  box-shadow .3s ease-in;
  }

.card-img-top{
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.card img:after {
    content:'\A';
    position:absolute;
    width:100%; height:100%;
    top:0; left:0;
    background:rgba(0,0,0,0.6);
    opacity:0;
    transition: all 0.5s;
    -webkit-transition: all 0.5s;
}
.card:hover:after {
    opacity:1;
}
.location-img{
  cursor: pointer;
  margin-bottom: 1.5rem;
  position: relative;
  overflow: hidden;
  border-radius: 8px;
  height: 200px;
}

.location-img img{
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 8px;
}

.desc {
    position: absolute;
    text-align: left;
    left: 10px;
    bottom: 10px;
}

.desc h5 {
    color: #fff;
    margin: auto;
    letter-spacing: .02em;
}

.location-img:before {
    content: "";
    position: absolute;
    inset: 0px;
    background-color: rgb(26, 52, 79);
    opacity: 0.3;
    border-radius: 10px;
    transition: opacity 0.5s ease 0s;
}

.image:hover:after {
    opacity:0.1;
}
  </style>