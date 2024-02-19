@extends('frontend.layouts.app')

@section('main-content')

<!--**********************************
            Content body start
        ***********************************-->




<!-- ======= Hero Section ======= -->

<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1>Let's Glow With M/S SAM INT<span>.</span></h1>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="">Men Power</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a href="">INTERNATIONAL RECRUITING</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="">Travel Agency</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-paint-brush-line"></i>
            <h3><a href="">Air Ticket</a></h3>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('frontend/assets/img/about.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Overview</h3>
            <p class="fst-italic">Welcome to M/S Sam International, your dedicated partner in talent acquisition and workforce solutions. With a commitment to excellence and a passion for connecting businesses with top-tier talent, M/S Sam International stands as a distinguished recruitment agency in the industry.</p>

            <p>Best Manpower Recruiting Agency company Bangladesh, Manpower Recruiting Agency in bangladesh, Overseas Manpower Recruitment in Bangladesh, Manpower Recruitment in Bangladesh, top 10 recruiting agency in bangladesh, bangladesh recruiting agency list, list of recruiting agents, foreign recruitment agencies in bangladesh.</p>
          </div>
        </div>

      </div>
    </section>


    <!-- End About Section -->



    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Men Power</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Recruiting</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Visa Process</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Air-Ticket</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->



    <!-- ======= Counts Section ======= -->
    <section id="counts" class="container counts">

        <div class="row">

            <div class="col-lg-6 col-md-6 d-flex align-items-stretch" >
                <img src="{{ url('frontend/assets/img/counts-img.jpg') }}" style="width: 100%; height: auto;" alt="certificat">
            </div>

            <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="content justify-content-center">
                    <h3>Our Mission:</h3>
                    <p>At M/S Sam International, our mission is clear—to bridge the gap between exceptional talent and leading organizations. We strive to provide unparalleled recruitment services, facilitating the growth and success of both our clients and candidates.</p>
                    <div class="row">
                        <ul>
                            <li>Integrity: We operate with the highest ethical standards, ensuring transparency and honesty in all our interactions.</li>
                            <li>Excellence: We are dedicated to delivering top-quality recruitment services, exceeding the expectations of our clients and candidates alike.</li>
                            <li>Partnership: We view our clients and candidates as partners, working collaboratively to achieve mutual success.</li>
                            <li>Innovation: Embracing the latest trends and technologies in recruitment, we stay ahead of the curve to deliver innovative solutions.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- End Counts Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="col-md-10">
            <iframe src="{{ url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.26638566646503!2d90.40976859792721!3d23.73802864185395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f4c5535ffb%3A0x1a1bf798ad5e322f!2s26%2C%20PCQ4%2B7VQ%20Green%20City%20Regency%2C%20C%2FA%20Bir%20Uttam%20Samsul%20Alam%20Rd%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1697135871688!5m2!1sen!2sbd') }}" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>26, Chamelibagh, 4th Floor, Shantinagar, Dhaka-1217</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>ms.sam.int@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+88 02 9336574</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->



  	<!-- #/ container -->
    <!--**********************************
        Content body end
    ***********************************-->




@endsection
