<?php  
//Template Name:properties detail
get_header();
?>
<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <span class="breadcrumb">
          <a href="<?php echo home_url(); ?>">Home</a> / <?php echo get_the_title(); ?>
        </span>
        <h3><?php echo get_the_title(); ?></h3>
      </div>
    </div>
  </div>
</div>

  <div class="single-property section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="main-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/single-property.jpg" alt="">
          </div>
          <div class="main-content">
  <span class="category">Apartment</span>
  <h4>24 New Street, Miami, OR 24560</h4>
  <p>This beautiful apartment is located in the heart of Miami, offering luxurious living with modern design and easy access to nearby amenities. Ideal for families or individuals seeking a peaceful yet vibrant neighborhood.

  <br><br>With spacious rooms, secure parking, and a premium location, this apartment delivers excellent value. For more details or to schedule a visit, get in touch with our property advisors today.</p>
</div>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        What makes this property special?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        This apartment offers modern living with spacious interiors, top-notch security, and a strategic location close to schools, markets, and healthcare facilities. It's perfect for families looking for comfort and convenience.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        What facilities are included?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        The property includes 24/7 security, reserved parking, backup power, fast internet access, nearby parks, and access to a modern gym and swimming pool within the building complex.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Why choose us?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        We provide transparent, hassle-free real estate services with a focus on customer satisfaction. From property tours to final paperwork, our expert team ensures a smooth and secure experience.
      </div>
    </div>
  </div>
</div>

        </div>
        <div class="col-lg-4">
          <div class="info-table">
            <ul>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                <h4>450 m2<br><span>Total Flat Space</span></h4>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
                <h4>Contract<br><span>Contract Ready</span></h4>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
                <h4>Payment<br><span>Payment Process</span></h4>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
                <h4>Safety<br><span>24/7 Under Control</span></h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section best-deal">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="section-heading">
            <h6>| Best Deal</h6>
            <h2>Find Your Best Deal Right Now!</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab" data-bs-target="#appartment" type="button" role="tab" aria-controls="appartment" aria-selected="true">Appartment</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa" type="button" role="tab" aria-controls="villa" aria-selected="false">Villa House</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse" type="button" role="tab" aria-controls="penthouse" aria-selected="false">Penthouse</button>
                  </li>
                </ul>
              </div>              
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Total Flat Space <span>540 m2</span></li>
                          <li>Floor number <span>3</span></li>
                          <li>Number of rooms <span>8</span></li>
                          <li>Parking Available <span>Yes</span></li>
                          <li>Payment Process <span>Bank</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/deal-01.jpg" alt="">
                    </div>
                   <div class="col-lg-3">
  <h4>More Details About This Property</h4>
  <p>This property offers exceptional value in a prime location. Designed with modern architecture and premium materials, it provides the ideal space for both living and investment. 
  <br><br>Contact our professional agents today to learn more about pricing, payment plans, and available options tailored to your needs.</p>
  <div class="icon-button">
    <a href="property-details"><i class="fa fa-calendar"></i> Schedule a visit</a>
  </div>
</div>

                  </div>
                </div>
                <div class="tab-pane fade" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Total Flat Space <span>250 m2</span></li>
                          <li>Floor number <span>26th</span></li>
                          <li>Number of rooms <span>5</span></li>
                          <li>Parking Available <span>Yes</span></li>
                          <li>Payment Process <span>Bank</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/deal-02.jpg" alt="">
                    </div>
                    <div class="col-lg-3">
  <h4>More Details About This Property</h4>
  <p>This property offers exceptional value in a prime location. Designed with modern architecture and premium materials, it provides the ideal space for both living and investment. 
  <br><br>Contact our professional agents today to learn more about pricing, payment plans, and available options tailored to your needs.</p>
  <div class="icon-button">
    <a href="property-details"><i class="fa fa-calendar"></i> Schedule a visit</a>
  </div>
</div>

                  </div>
                </div>
                <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Total Flat Space <span>320 m2</span></li>
                          <li>Floor number <span>34th</span></li>
                          <li>Number of rooms <span>6</span></li>
                          <li>Parking Available <span>Yes</span></li>
                          <li>Payment Process <span>Bank</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/deal-03.jpg" alt="">
                    </div>
                    <div class="col-lg-3">
  <h4>More Details About This Property</h4>
  <p>This property offers exceptional value in a prime location. Designed with modern architecture and premium materials, it provides the ideal space for both living and investment. 
  <br><br>Contact our professional agents today to learn more about pricing, payment plans, and available options tailored to your needs.</p>
  <div class="icon-button">
    <a href="property-details"><i class="fa fa-calendar"></i> Schedule a visit</a>
  </div>
</div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php 
  get_footer()
  ?>