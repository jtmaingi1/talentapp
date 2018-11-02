@extends('layouts.app')

@include('inc.jumbotron')

@section('content')
   <div class="container">
      
           <h1 class="text-center">Objectives </h1>

       <!-- Cards -->
       <div class="row">
            <div class="col-md-12 col-lg-4 py-3">
                <div class="card mh-100">
                  <div class="zoom">
                      <img class="card-img-top img-fluid" src="img/guitar.jpg" alt="Card image Musician">
                  </div>
                    <div class="card-body">
                        <h3 class="card-title">Identify</h3>
                     <p class="card-text">To reach out to as many as possible children around the nation and identify the talent within them.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 py-3">
                    <div class="card mh-100">
                      <div class="zoom">
                          <img class="card-img-top img-fluid" src="img/musician.jpg" alt="Card image Musician">
                      </div>
                        <div class="card-body">
                            <h3 class="card-title">Appreciate</h3>
                         <p class="card-text">To encourage children to pursue their interests by appreciating what they do, how they do it and why they do it.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 py-3">
                        <div class="card">
                            <div class="zoom">
                                <img class="card-img-top img-fluid" src="img/skydiving.jpg" alt="Card image Musician">
                              </div>
                            <div class="card-body">
                                <h3 class="card-title">Nurture</h3>
                             <p class="card-text">To encourage the already known potential and capabilities so as to teach them to be more effective and maximize on their potential.</p>
                            </div>
                        </div>
                    </div>
       </div>
        <!-- End of Cards -->
       <!-- Scripture banner -->
       <div class="col-sm-12">
          <div class="jumbotron text-white text-center">
              <div class="container">
                  <blockquote class="lead">For this reason I remind you to fan into flame the gift of God, which is in you...</blockquote>
                  <footer class="blockquote-footer text-white">2 Timothy 1:6</footer>
              </div>
          </div>
       </div>
      <!-- End Scripture banner -->
        <h1 class="text-center">Talent Showcase</h1>
        <!-- Gallery of Activities with Carousel -->
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/guitar.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/musician.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/skydiving.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div><!-- End of Gallery of Activities with Carousel -->
<br/> <br/>
        <!-- Talk to us Contact Form -->
        <h1 class="text-center">Leave us a comment? </h1>
        <br/>
        <form id="contactus">
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault01">First name</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="" required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault02">Last name</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="" required>
                  </div>
                  <div class="col-md-4 mb-3">
                        <label for="validationDefault03">Your Email</label>
                        <input type="email" class="form-control" id="validationDefault03" placeholder="email" required>
                      </div>
                </div>
               
                <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" rows="5" placeholder="Your message" id="comment"></textarea>
                      </div>
                <div class="form-group">
                  <div class="form-row">
                    <label class="col-md-4 mb-3" for="invalidCheck2">
                      <input class="form-control" type="checkbox" value="" id="invalidCheck2">
                      Check this if you would like us to contact you via Your CellPhone
                    </label>
                    <div class="col-md-4 mb-3">
                    <input type="tel" class="form-control" placeholder="Cellphone" value="" id="Tel">
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary btn-outline-warning" type="submit">Submit form</button>
              </form>
   </div>
   <div class="float-lg-right">
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="FHVRLXJ2SYKQG">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
   </div>
@endsection
