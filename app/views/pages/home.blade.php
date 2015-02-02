@extends('layout.default')
@section('content')
  
    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">I'm Celine</h1>
                        <p class="intro-text">(Like the singer but better)<br>I sing in PHP.  Want to know more?</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About Me</h2>
                <p>Born in Arizona, I was raised by two Italian plumbers and was taught diligence by a bounty hunter named Samus. I decided to ride a dinosaur to Texas and learn how to program at a coding bootcamp. </p>
                <p>I absorbed PHP, HTML, CSS, Javascript, Git, Laravel and a little bit of Angular.js.</p>
                <a href="#projects" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i></a>
                
            </div>
        </div>
    </section>

    <!-- Project Section -->
    <section id="projects" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Projects</h2>
                    <div id="myCarousel" class="carousel slide">
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                      </ol>
                      <!-- Carousel items -->
                      <div class="carousel-inner">
                        <div class="active item">{{ HTML::image('img/tweetsweep.jpg') }}</div>
                        <div class="item">{{ HTML::image('img/Suarezbrokeragehome.jpg') }}</div>
                        <div class="item">{{ HTML::image('img/senzubeans.jpg') }}</div>
                      </div>
                      <!-- Carousel nav -->
                      <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                      <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                    </div>
                    <p>You can see a preview of my projects.</p>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Ready to help me level up?</h2>
                <p>Feel free to email regarding jobs, hackathons or any meetups you think are interesting.</p>
                <p><a href="mailto:celinesuarez7@gmail.com">celinesuarez7@gmail.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://linkedin.com/in/CelineSuarez" class="btn btn-default btn-lg"><i class="fa fa-linkedin-square fa-fw"></i>Linked In</span></a>
                    </li>
                    
                    <li>
                        <a href="https://github.com/Celinesuarez" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/CelinetheFeline" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </section>

 
    


@stop
