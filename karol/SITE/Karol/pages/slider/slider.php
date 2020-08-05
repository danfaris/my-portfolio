<html>
    <head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
#carouselExampleIndicators{
  background-image: url('https://i.ibb.co/pfV3wYN/vetor-slider.jpg');
  width: 100%;
  min-height: 350px;
  margin-top: 0px;
  /* The image used */
}
#carouselExampleIndicators{position:relative; z-index:1; background-size:cover; }
.carousel_caption h1 {
  color: black;
  letter-spacing: 1px;
  font-family: 'Poppins', sans-serif;
  font-weight: 500;
  margin: 0 0 5px;
  margin-top: 4%;
  text-align: center;
  text-transform: uppercase;
}
.carousel_caption h2 {
  color: #ffffff;
  letter-spacing: 1px;
  font-family: Oswald;
  text-align: center;
  font-weight: 200;
  text-transform: uppercase;
  margin-top: 6%;
}
.carousel_caption p {
  color: black;
  font-family: Poppins;
  text-align: center;
  font-size: 20px;
  margin: 7% 0%;
  max-width: 75%;
  margin: 0 auto;
}
.carousel_caption a {
  font-size: 13px;
  text-transform: uppercase;
  font-family: 'Poppins', sans-serif;
  font-weight: 400; 
  letter-spacing: 1px;
}
.carousel-item {
  min-height: 400px;
  background-size: cover;
  background-position: center center;
}

.carousel-item a{background:#673AB7; font-size:14px; color: black; padding:13px 32px; display:inline-block; }
.carousel-item a:hover{background:#394fa2; text-decoration:none;  }

.carousel-item h2{-webkit-animation-name:fadeInLeft; animation-name:fadeInLeft;} 
.carousel-item p{-webkit-animation-name:slideInRight; animation-name:slideInRight;} 
.carousel-item a{-webkit-animation-name:fadeInUp; animation-name:fadeInUp;}
#carouselExampleIndicators h2, #carouselExampleIndicators p, #carouselExampleIndicators a, #carouselExampleIndicators .carousel-item .mask img{-webkit-animation-duration: 1s;
    animation-duration: 1.2s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}

.carousel-item {
    position: relative;
    display: none;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    color: black;
    width: 100%;
    transition: -webkit-transform .6s ease;
    transition: transform .6s ease;
    transition: transform .6s ease,-webkit-transform .6s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px;
    color: black;
}
.carousel-control-next, .carousel-control-prev {
    height: 40px;
    width: 40px;
    padding: 12px;
    top: 50%;
    bottom: auto;
    transform: translateY(-50%);
    background-color: black;
    
}
.carousel-fade .carousel-item {
	opacity: 0;
	-webkit-transition-duration: .6s;
	transition-duration: .6s;
	-webkit-transition-property: opacity;
	transition-property: opacity
}
.carousel-fade .carousel-item-next.carousel-item-left, .carousel-fade .carousel-item-prev.carousel-item-right, .carousel-fade .carousel-item.active {
	opacity: 1
}
.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-right.active {
	opacity: 0
}
.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
	-webkit-transform: translateX(0);
	-ms-transform: translateX(0);
	transform: translateX(0)
}
@supports (transform-style:preserve-3d) {
	.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
	-webkit-transform:translate3d(0, 0, 0);
	transform:translate3d(0, 0, 0)
	}
}
.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
}

@-webkit-keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.fadeInLeft {
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft;
}

@-webkit-keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}

@-webkit-keyframes slideInRight {
  from {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes slideInRight {
  from {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.slideInRight {
  -webkit-animation-name: slideInRight;
  animation-name: slideInRight;
}

</style>
    </head>

    <body> 
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
   <div class="carousel-inner">
      <div class="carousel-item active">
         <div class="mask flex-center">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-md-12 col-12 order-md-1 order-2">
                     <div class="carousel_caption">
                        <h1>Section 1</h1>
                        <h2></h2>
                        <p>I do not love you as if you were salt-rose, or topaz,or the arrow of carnations the fire shoots off.I love you as certain dark things are to be loved,in secret, between the shadow and the soul.I love you as the plant that never bloomsso close that your hand on my chest is my hand.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="carousel-item">
         <div class="mask flex-center">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-md-12 col-12 order-md-1 order-2">
                     <div class="carousel_caption">
                        <h1>Design</h1>
                        <h2></h2>
                        <p>I do not love you as if you were salt-rose, or topaz,or the arrow of carnations the fire shoots off.I love you as certain dark things are to be loved,in secret, between the shadow and the soul.I love you as the plant that never bloomsso close that your hand on my chest is my hand.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="carousel-item">
         <div class="mask flex-center">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-md-12 col-12 order-md-1 order-2">
                     <div class="carousel_caption">
                        <h1>Clearance</h1>
                        <h2></h2>
                        <p>I do not love you as if you were salt-rose, or topaz,or the arrow of carnations the fire shoots off.I love you as certain dark things are to be loved,in secret, between the shadow and the soul.I love you as the plant that never bloomsso close that your hand on my chest is my hand.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
   </a>
 </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>