<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Globle Hour Marine</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="assets/images/fav-icon.png">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Sen:400,700,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link href="assets/css/magicscroll.css" rel="stylesheet" type="text/css" media="screen" />
  <link rel="stylesheet" href="http://localhost/GlobleHourMarine/assets/css/style.css">


  <style>
    :root {
      --color1: #001F3F;
      --color2: #3A6D8C;
      --color3: #6A9AB0;
      --color4: #EAD8B1;
      --color5: #FFF;
      --color6: #98DED9;
      --color7: #134B70;
      --color8: #e9bf43;
    }

    /* Wrapper for Map and Form */
    .y-map_form_wrapper {
      width: 100%;
    }

    /* Map Styling */
    .y-map iframe {
      width: 100% !important;
      height: 350px !important;

    }

    /* Form Styling */
    .y-contact_form {
      margin-top: 30px !important;
      width: 100% !important;

    }

    /* Laptop View (Min-width: 992px) */
    @media (min-width: 992px) {
      .y-contact {
        display: flex !important;
        justify-content: space-evenly !important;
      }

      .y-map_form_wrapper {
        width: 65% !important;

      }

      .y-contact_side {
        width: 30% !important;
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 20px;
      }

    }

    /* Mobile View (Max-width: 767px) */
    @media (max-width: 767px) {
      .y-contact {
        display: flex !important;
        flex-direction: column !important;

      }

      .contact-us-side-bar {
        display: flex;
        justify-content: space-between;
        gap: 10px;
        flex-wrap: wrap;
      }

      .get_in_touch,
      .working_hours {
        flex: 1;
      }
    }

    .contact-img {
      height: 700px;
      object-fit: cover;
    }

    /* .submit-contact {
      background-color: var(--color3);
      color: var(--color5);
      text-transform: uppercase;
      padding: 13px 30px;
      font-weight: bold;
      border: none;
      border-radius: 10px;
    } */

    .get_in_touch,
    .working_hours {
      background-color: var(--color1);
      padding: 20px 50px;
      color: var(--color5);
      border-radius: 20px;
      margin: 10px;
      min-width: 400px;

    }

    .get_in_touch h3,
    .working_hours h3 {
      color: var(--color3);
    }

    .y-form {
      background-color: var(--color1);
      padding: 30px;
      border-radius: 20px;

    }

    .submit-contact {
      position: relative;
      background-color: var(--color3);
      color: var(--color5);
      text-transform: uppercase;
      padding: 13px 30px;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: all 0.4s ease;
    }

    .submit-contact::after {
      content: '\00bb';
      /* This is the » symbol */
      position: absolute;
      opacity: 0;
      top: 50%;
      transform: translateY(-50%);
      right: -20px;
      transition: all 0.4s ease;
    }

    .submit-contact:hover {
      background-color: var(--color1);
      /* Change background color on hover */
      color: var(--color5);
      /* Change text color on hover */
      padding-right: 40px;
      /* Add padding for the icon to move in */
    }

    .submit-contact:hover::after {
      opacity: 1;
      right: 10px;
      /* Move the arrow into view */
    }

    .a-tag-font {
      color: var(--color5);
    }

    /* .contact-us {
      background-color: var(--color3);
    } */

    .y-contact {
      padding: 10px;
      background-color: #faf7f0;
    }

    .map {
      display: flex;
      justify-content: center;
    }

    .contact-us-side-bar {
      display: flex;
      justify-content: center;
    }
  </style>
</head>

<body>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/GlobleHourMarine/assets/images/contect-us.svg" class="d-block w-100 contact-img" alt="...">
      </div>

    </div>
  </div>

  <div class="container-fluid contact-us">
    <main class="y-inner_page">
      <section id="y-single_info">
        <div class="y-single_info">
          <div class="container-fluid">
            <div class="y-single_info_inner y-section_content ">
              <div class="row m-0 y-contact ">
                <!-- Left Side: Form and Map (Equal Width) -->
                <div class="col-sm-11 col-md-11 col-lg-11 mt-5 map">
                  <!-- Map and Form Wrapper -->
                  <div class="y-map_form_wrapper ">
                    <!-- Map -->
                    <div class="y-map">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3433.040524068144!2d76.82212867536893!3d30.632815474632586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390febc63404b13b%3A0x8db795b7ffaa4451!2sKlizard%20Technology!5e0!3m2!1sen!2sin!4v1727512408847!5m2!1sen!2sin"
                        width="100%" height="350px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                    <!-- Form -->
                    <div class="y-contact_form mt-4">
                      <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success">
                          <?php echo $this->session->flashdata('success'); ?>
                        </div>
                      <?php endif; ?>

                      <?php if ($this->session->flashdata('failure')): ?>
                        <div class="alert alert-danger">
                          <?php echo $this->session->flashdata('failure'); ?>
                        </div>
                      <?php endif; ?>
                      <!-- <form action="#" class="y-form"> -->
                      <form action="<?php echo site_url('Book/send_email'); ?>" class="y-form" method="POST">
                        <input type="text" placeholder="Name" name="name" class="mt-5">
                        <input type="text" name="email" placeholder="Email">
                        <input type="text" name="subject" placeholder="Subject">
                        <textarea name="message" name="message" placeholder="Message"></textarea>
                        <button class="submit-contact">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>

                <!-- Right Side: Get in Touch and Working Hours -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 order-2">
                  <div class="row contact-us-side-bar">
                    <!-- Get in Touch -->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-5 get_in_touch">
                      <h3><i class="material-icons mb-3">perm_phone_msg</i> GET IN TOUCH</h3>
                      <address class="mb-4">Unit no 29 B, 3rd Floor
                        <br>Motia Royal Business Park,
                        <br>Zirakpur, India, 140603
                      </address>
                      <address>
                        <span>Work with us:</span> <a class="a-tag-font" href="mailto:globlehourmarine@gmail.com">globlehourmarine@gmail.com</a><br>
                      </address>
                      <address>
                        <span title="Mobile">Mobile:</span> <a class="a-tag-font" href="tel:01762-458122">01762-458122</a><br>
                      </address>
                    </div>

                    <!-- Working Hours -->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-5 working_hours">
                      <h3><i class="material-icons mb-3">alarm_on</i> WORKING HOURS</h3>
                      <ul>
                        <li><span>Monday:</span> <span>10 am to 6:30 pm</span></li>
                        <li><span>Tuesday:</span> <span>10 am to 6:30 pm</span></li>
                        <li><span>Wednesday:</span> <span>10 am to 6:30 pm</span></li>
                        <li><span>Thursday:</span> <span>10 am to 6:30 pm</span></li>
                        <li><span>Friday:</span> <span>10 am to 6:30 pm</span></li>
                        <li><span>Saturday:</span> <span>10 am to 6:30 pm</span></li>
                        <li><span>Sunday:</span> <span>Closed</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.mousewheel.min.js"></script>
  <script src="assets/js/magicscroll.js" type="text/javascript"></script>
  <script src="assets/js/wow.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="assets/js/main.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>