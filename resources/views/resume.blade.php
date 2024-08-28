   @extends('front-layouts.app')
   <!-- Page Title -->

   @section('front-content')

   <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Resume</h1>
              <p class="mb-0">I am an organised, efficient and hard working person, and am willing to discover and accept new
              ideas which can be put into practice effectively</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Resume</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Sumary</h3>

            <div class="resume-item pb-0">
              <h4>Hari Mishra</h4>
              <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
              <ul>
                <li>Lucknow ,Utter Pradesh</li>
                <li>8303573350</li>
                <li>Harimishra922@gmail.com</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Diploma&amp; Computer Sceice</h4>
              <h5>2019 - 2022</h5>
              <p><em>Feroze Gandhi Polytechnic, Raebareli</em></p>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>BTech &amp; Computer Science & Engineering</h4>
              <h5>2023 - 2026</h5>
              <p><em>AKTU University</em></p>
            </div><!-- Edn Resume Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>PHP Laravel Developer</h4>
              <h5>2023 - Present</h5>
              <p><em>Sileo Technology Private,Limited,Lucknow,Utter Pradesh </em></p>
              <ul>
                <li>To Develop Software with responsibilities</li>
                <li><a href="#">Vetanwala HRMs Project</a></li>
                <li><a href="#">Sripoojan E-commerce Project</a></li>
                <li><a href="#">Sriseva Project</a></li>
                <li><a href="#">Modelgaon Project</a></li>
         
              </ul>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>Mern Technology</h4>
              <h5>2017 - 2018</h5>
              <p><em>Sileo Technology Private,Limited,Lucknow,Utter Pradesh </em></p>
              <ul>
                <li><a href="#">Up Tourism project</a></li>
                <li><a href="#">DDUGKY Project</a></li>
                
                
              </ul>
            </div><!-- Edn Resume Item -->
            <div class="resume-item">
              <h4>Resume download</h4>
              <a href="/front/assets/img/resume.pdf" download><i class="bi bi-cloud-download" style="width: 100px; height:100px"></i></a>
            </div><!-- Edn Resume Item -->

          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->
       
   @endsection