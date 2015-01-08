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
                <p>This is another paragraph.  Did you expect something else here?</p>
                
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Download Grayscale</h2>
                    <p>You can see a preview of my projects.  Click on any picture.</p>
                    <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
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
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/Celinesuarez" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://linkedin.com" class="btn btn-default btn-lg"><i class="fa fa-linked-in fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

 
    


@stop
