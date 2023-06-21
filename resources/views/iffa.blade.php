<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>IFFA-SUMMIT | WEBSITE-LANDING-PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('a/css/main.css')}}"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
    <header class="header d-lg-flex justify-content-between container-fluid">
        <div class="h-text d-flex flex-column align-items-start container">
            <img src="{{asset('a/images/logo.png')}}" alt="logo" class="position-relative logo" />

            <div class="text mt-5 pt-5 position-relative">
                <p class="heading-intro fs-4">Build the African dream.</p>
                <h1 class="heading fs-1 fw-bold">
                    INNOVATION FOR FUTURE <br /> AFRICA. <span>SUMMIT 2023</span>
                </h1>
                <div class="rate d-flex gap-5 py-4">
                    <div class="d-flex flex-column">
                        <span class="mx-4">200+</span>
                        <span class="mx-4">Delegates</span>
                    </div>
                    <div class="d-flex flex-column">
                        <span class="mx-4">8+</span>
                        <span class="mx-4">Speakers</span>
                    </div>
                </div>
                <p class="description">
                    We believe these leaders hold the answers to unlocking a bright future for our continent and it is vital that we enlighten and empower them.
                </p>
                <div class="button-container">
                    <span class="button mt-4">Join Us</span>
                </div>
            </div>
            <img src="{{asset('a/images/1.png')}}" class="position-absolute imageOne w-75" alt="" />
            <img src="{{asset('a/images/2.png')}}" class="position-absolute imageTwo w-50" alt="" />
        </div>
        <div class="h-image position-relative">
            <img src="{{asset('a/images/world.png')}}" alt="globe" class="w-75 position-absolute" />
        </div>
    </header>

    <section class="registration container border">
        <div class="d-md-flex justify-content-between align-items-center">
            <div class="reg-left d-flex flex-column align-items-center justify-content-center text-light p-5 position-relative">
                <span class="text-center">Registration</span>
                <span class="text-center">starts 5th of May 2023</span>
            </div>
            <div class="reg-right d-flex flex-column align-items-start">
                <span>IFFA Summit .23</span>
                <span>
            Connect with the finest thought leaders, professionals, creatives,
            enterpreneurs, and innovators at IFFA summit 2023. Explore
            oppurtunities for business career growth.
          </span>
                <div class="reg-logo mx-auto">
                    <img src="{{asset('a/images/logo.png')}}" alt="logo" />
                </div>
            </div>
        </div>
    </section>

    <section class="reason container mb-5 position-relative">
        <h1 class="d-flex align-items-center gap-5 px-3">
            <span></span> Are you ready for IFFA Summit 2023?
        </h1>
        <div class="row">
            <div class="col-md-12 col-lg-4 mb-3">
                <div class="card text-center">
                    <div class="card-body text-start">
                        <h5 class="card-title">Why iffa summit?</h5>
                        <p class="card-text">
                            IFFA summit will bring together young leaders, founders, innovators, creatives and enterpreneurs willing to take bold actions to contribute to achieving quality education, good health and wellbeing, gender- equality, and food security in Africa.
                        </p>
                        <div class="d-flex align-items-end justify-content-end mt-5 pt-5">
                            <a href="#" class="btn text-light fs-4 mt-5 pt-5">Read more ></a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                Camping takes the conference experience to another level.
              </h5>
              <p class="card-text">
                Whether you are resident of Abuja or traveling from outside
                Abuja to attend the conference, camping is fun, engaging and
                exciting, you should consider it.
              </p>
              <div class="d-flex align-items-end justify-content-end pt-5 mt-5">
                <a href="#" class="btn text-light fs-4 mt-5 pt-1"
                  >Read more ></a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">JOIN US AT IFFA SUMMIT</h5>
              <div
                class="reg-logo mx-auto d-flex align-items-end justify-content-end"
              >
                <img src="{{asset('a/images/logo.png')}}" alt="logo" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="circle__light position-absolute"></div>
    </section>

    <section
      class="innovation container d-flex align-items-center justify-content-center flex-column position-relative"
    >
      <img src="{{asset('a/images/3.png')}}" class="position-absolute image__large" alt="" />
      <img src="{{asset('a/images/4.png')}}" class="position-absolute image__medium" alt="" />
      <img src="{{asset('a/images/5.pn')}}g" class="position-absolute image__small" alt="" />
      <h1 class="heading text-center">
        INNOVATION FOR FUTURE AFRICA(IFFA). <span>SUMMIT 2023</span>
      </h1>
      <p class="mt-5">
        Connect with finest thought leaders, professionals, creatives,
        enterpreneurs, and innovators at IFFA summit 2023. Explore opportunities
        for business growth.
      </p>
      <div class="button-container mt-5">
        <span class="button mt-4">Join Us</span>
      </div>

      <img src="{{asset('a/images/3.png')}}" class="position-absolute image__1" alt="" />
      <img src="{{asset('a/images/4.png')}}" class="position-absolute image__2" alt="" />
      <img src="{{asset('a/images/5.png')}}" class="position-absolute image__3" alt="" />

      <video autoplay controls loop>
        <source src="{{asset('a/images/video.mp4')}}" type="video/mp4" />
        Your browser does not support this video, change browser!
      </video>
    </section>

    <!-- About Us section -->
    <section id="about__us" class="reason container mb-5 d-flex flex-column">
      <h1 class="d-flex align-items-center gap-5 px-3">
        <span></span> About July 2022
      </h1>
      <p class="description">
        We hosted the first-ever summit, the conference brought together
        delegates from across Africa to the beautiful city of Abuja where we
        engaged for 3 days and had the most exciting and impactful moment.
      </p>
      <div class="slider-container">
        <div class="image__slider">
          <div class="pagination d-flex justify-content-end align-items-center">
            <span class="me-4 fs-1">1/8</span>
            <button class="border-0 prev-button me-4">
              <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button class="border-0 next-button">
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
          <div class="image-container position-relative">
            <img src="{{asset('a/images/community1.jpg')}}" alt="" class="position-absolute" />
            <img src="{{asset('a/images/community1.jpg')}}" alt="" class="position-absolute" />
            <img src="{{asset('a/images/community3.jpg')}}" alt="" class="position-absolute" />
            <img src="{{asset('a/images/community4.png')}}" alt="" class="position-absolute" />
            <img src="{{asset('a/images/community1.jpg')}}" alt="" class="position-absolute" />
            <img src="{{asset('a/images/community1.jpg')}}" alt="" class="position-absolute" />
            <img src="{{asset('a/images/community1.jpg')}}" alt="" class="position-absolute" />
            <img src="{{asset('a/images/community1.jpg')}}" alt="" class="position-absolute" />
          </div>
        </div>
      </div>
    </section>

    <!-- Benefits section -->

    <section
      id="benefits"
      class="reason container mb-5 d-flex flex-column position-relative"
    >
      <h1 class="d-flex align-items-center gap-5 px-3">
        <span></span> The benefits of being a delegate at IFFA summit.
      </h1>

      <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card border-0">
            <div class="card-body">
              <h5 class="card-title">Startup education</h5>
              <p class="card-text">
                Our participants, will learn from seasoned experts and
                experienced founders, educating them on how to build a
                successful organization and how to tackle the challenges in the
                industry.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card border-0">
            <div class="card-body">
              <h5 class="card-title">Engaging sessions</h5>
              <p class="card-text">
                Thought provocating and eye-opening conversations from our
                mentors will help them better understand the industries they
                want to thrive in and how they can succes
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card border-0 bg-transparent">
            <div class="card-body">
              <h5 class="card-title">Build valuable connections</h5>
              <p class="card-text">
                This conference will bring together the best minds on the
                continent and will also attract industry experts our
                participants can connect with.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card border-0">
            <div class="card-body">
              <h5 class="card-title">Explore opportunities</h5>
              <p class="card-text">
                Our delegates will learn and find opportunities for incubation,
                acceleration, leadership development, and funding for your
                innovative solutions.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="circle__light position-absolute"></div>
    </section>

    <!-- opportunity section -->
    <section
      id="opportunity"
      class="reason container-fuild mb-5 mt-5 d-flex flex-column"
    >
      <div class="container">
        <h1 class="d-flex align-items-center gap-5 px-3">
          <span></span> Don’t miss out!!
        </h1>

        <div class="row mb-5">
          <div class="col-sm-6 col-lg-4 mb-3">
            <div class="card">
              <div class="card-body">
                <span class="text-white mb-5"
                  ><i class="fa-solid fa-location-dot me-4"></i>Location</span
                >
                <p class="card-text mt-3">City of Abuja, Nigeria</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <div class="card">
              <div class="card-body">
                <span class="text-light mb-5"
                  ><i class="fa-regular fa-calendar-days me-4"></i>Time</span
                >
                <p class="card-text mt-3">10th - 12th of Aug 2023</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <div class="card">
              <div class="card-body">
                <span class="text-light mb-5"
                  ><i class="fa-solid fa-ticket-simple me-4"></i>Ticket</span
                >
                <div
                  class="content d-flex justify-content-between align-items-center gap-5"
                >
                  <p class="card-text mt-3">
                    N6000 - 1 person and covers A lunch meal
                  </p>
                  <p class="card-text mt-3">
                    N20000 - 1 person and covers A lunch meal
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="opportunity-logo mx-auto me-4">
          <img src="{{asset('a/images/logo.png')}}" alt="" />
        </div>
      </div>
    </section>

    <!-- Issues section -->
    <section
      id="issues"
      class="reason container mb-5 d-flex flex-column position-relative"
    >
      <h1 class="d-flex align-items-center gap-5 px-3">
        <span></span> Issues to be addressed
      </h1>
      <p class="description">
        We have selected a certain number of sustainable development goals as
        the focus for this conference.
      </p>
      <div class="grid-container">
        <div class="card">
          <h3>Zero hunger</h3>
          <i class="fa-solid fa-utensils"></i>
        </div>

        <div class="card">
          <h3>Good health and well-being</h3>
          <i class="fa-solid fa-house-medical-flag"></i>
        </div>

        <div class="card">
          <h3>Gender equality</h3>
          <i class="fa-solid fa-children"></i>
        </div>

        <div class="card">
          <h3>Quality education</h3>
          <i class="fa-solid fa-graduation-cap"></i>
        </div>

        <div class="card">
          <h3>Decent work and economic growth</h3>
          <i class="fa-solid fa-arrow-up-right-dots"></i>
        </div>

        <!-- This card should be ignor when integrating backend -->
        <div class="card"></div>
        <!-- .................................................. -->

        <div class="card">
          <h3>Sustainable cities and communities</h3>
          <i class="fa-solid fa-city"></i>
        </div>

        <div class="card">
          <h3>Climate action</h3>
          <i class="fa-solid fa-water"></i>
        </div>

        <div class="card">
          <h3>Peace justice and strong institutions</h3>
          <i class="fa-solid fa-scale-unbalanced"></i>
        </div>

        <!-- This card should be ignor when integrating backend -->
        <div class="card"></div>
        <!-- .................................................. -->
      </div>
      <div class="position-absolute circle"></div>
    </section>

    <!-- Guest profile section -->
    <section
      id="people"
      class="reason container mb-5 d-flex flex-column position-relative"
    >
      <img src="{{asset('a/images/3.png" class="position-absolute image__large" alt="" />
      <img src="{{asset('a/images/4.png" class="position-absolute image__medium" alt="" />
      <img src="{{asset('a/images/5.png" class="position-absolute image__small" alt="" />
      <h1 class="d-flex align-items-center gap-5 px-3">
        <span></span>Guest speakers at IFFA summit 2023
      </h1>

      <div class="row mb-5">
        <div class="col-sm-6 col-lg-4 mb-3">
          <div class="card position-relative border-0">
            <div class="card__header">
              <div class="image-background">
                <img
                  src="{{asset('a/images/person1.png"
                  class="card-img-top"
                  alt="photo"
                />
              </div>
            </div>
            <div class="card-body">
              <p class="card-text">IFFA SUMMIT</p>
              <h5 class="card-title">Mrs Abisoye panla</h5>
              <p class="card-text">Analyst</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-3">
          <div class="card position-relative border-0">
            <div class="card__header">
              <div class="image-background">
                <img
                  src="{{asset('a/images/person2.png"
                  class="card-img-top"
                  alt="photo"
                />
              </div>
            </div>
            <div class="card-body">
              <p class="card-text">IFFA SUMMIT</p>
              <h5 class="card-title">Mrs Abisoye panla</h5>
              <p class="card-text">Analyst</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-3">
          <div class="card position-relative border-0">
            <div class="card__header">
              <div class="image-background">
                <img
                  src="{{asset('a/images/person3.png"
                  class="card-img-top"
                  alt="photo"
                />
              </div>
            </div>
            <div class="card-body">
              <p class="card-text">IFFA SUMMIT</p>
              <h5 class="card-title">Mrs Abisoye panla</h5>
              <p class="card-text">Analyst</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-3">
          <div class="card position-relative border-0">
            <div class="card__header">
              <div class="image-background">
                <img
                  src="{{asset('a/images/person4.png"
                  class="card-img-top"
                  alt="photo"
                />
              </div>
            </div>
            <div class="card-body">
              <p class="card-text">IFFA SUMMIT</p>
              <h5 class="card-title">Mrs Abisoye panla</h5>
              <p class="card-text">Analyst</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-3">
          <div class="card position-relative border-0">
            <div class="card__header">
              <div class="image-background">
                <img
                  src="{{asset('a/images/person5.png"
                  class="card-img-top"
                  alt="photo"
                />
              </div>
            </div>
            <div class="card-body">
              <p class="card-text">IFFA SUMMIT</p>
              <h5 class="card-title">Mrs Abisoye panla</h5>
              <p class="card-text">Analyst</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-3">
          <div class="card position-relative border-0">
            <div class="card__header">
              <div class="image-background">
                <img
                  src="{{asset('a/images/person6.png"
                  class="card-img-top"
                  alt="photo"
                />
              </div>
            </div>
            <div class="card-body">
              <p class="card-text">IFFA SUMMIT</p>
              <h5 class="card-title">Mrs Abisoye panla</h5>
              <p class="card-text">Analyst</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-3">
          <div class="card position-relative border-0">
            <div class="card__header">
              <div class="image-background">
                <img
                  src="{{asset('a/images/person7.png"
                  class="card-img-top"
                  alt="photo"
                />
              </div>
            </div>
            <div class="card-body">
              <p class="card-text">IFFA SUMMIT</p>
              <h5 class="card-title">Mrs Abisoye panla</h5>
              <p class="card-text">Analyst</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-3">
          <div class="card position-relative border-0">
            <div class="card__header">
              <div class="image-background">
                <img
                  src="{{asset('a/images/person8.png"
                  class="card-img-top"
                  alt="photo"
                />
              </div>
            </div>
            <div class="card-body">
              <p class="card-text">IFFA SUMMIT</p>
              <h5 class="card-title">Mrs Abisoye panla</h5>
              <p class="card-text">Analyst</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-3">
          <div class="card position-relative border-0">
            <div class="card__header">
              <div class="image-background">
                <img
                  src="{{asset('a/images/person6.png"
                  class="card-img-top"
                  alt="photo"
                />
              </div>
            </div>
            <div class="card-body">
              <p class="card-text">IFFA SUMMIT</p>
              <h5 class="card-title">Mrs Abisoye panla</h5>
              <p class="card-text">Analyst</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testmonial section -->
    <section
      id="testmonial"
      class="reason container mb-5 d-flex flex-column position-relative"
    >
      <h1 class="d-flex align-items-center gap-5 px-3">
        <span></span>Here is what some of our IFFA SUMMIT delegates had to say?
      </h1>

      <div class="row" style="padding-bottom: 10rem">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card border-0">
            <div class="card-body">
              <img src="{{asset('a/images/colon.png" alt="" />

              <p class="card-text mt-5 fs-3">
                I was privileged to be a part of IFFA summit as a FACI last
                year. It was a wonderful, learning experience for me with the
                theme ..... <a href="#">See more</a>
                            </p>
                            <div class="profile d-flex align-items-center gap-5 mt-5">
                                <img src="{{asset('a/images/profile.png" alt="" />
                                <div class="content text-light">
                                    <h4>Mr Lucky owoicho</h4>
                                    <p>International Development Practioner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card border-0">
                        <div class="card-body">
                            <img src="{{asset('a/images/colon.png" alt="" />

                            <p class="card-text mt-5 fs-3">
                                I was privileged to be a part of IFFA summit as a FACI last year. It was a wonderful, learning experience for me with the theme ..... <a href="#">See more</a>
                            </p>
                            <div class="profile d-flex align-items-center gap-5 mt-5">
                                <img src="{{asset('a/images/profile.png" alt="" />
                                <div class="content text-light">
                                    <h4>Mr Lucky owoicho</h4>
                                    <p>International Development Practioner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{asset('a/images/6.png" class="position-absolute image__large" alt="" />
            <img src="{{asset('a/images/7.png" class="position-absolute image__small" alt="" />
    </section>

    <!-- Contact -->

    <section id="contact" class="reason container mb-5 d-flex flex-column position-relative">
        <h1 class="d-flex align-items-center gap-5 px-3">
            <span></span>Contact us
        </h1>
        <p class="description">
            To make enquiries about IFFA Summit 2023. Kindly contact us via the details below. Thank you!
        </p>

        <div class="contact mt-5">
            <p class="fs-1">Phone number: <span>070818145361</span></p>
        </div>
        <div class="position-absolute circle"></div>
    </section>

    <footer class="footer container-fluid">
        <div class="container mt-5 d-lg-flex align-items-center">
            <div class="brand d-flex align-items-center justify-content-start">
                <h1>IFFA SUMMIT</h1>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 mb-3">
                    <div class="list__item">
                        <h3>Get Started</h3>
                        <div class="items d-flex flex-column gap-4 mt-5 mb-5">
                            <span>Partner With Us</span>
                            <span>Make a Donation</span>
                            <span>Start An S.C.A Chapter</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-3">
                    <div class="list__item">
                        <h3>About Us</h3>
                        <div class="items d-flex flex-column gap-4 mt-5 mb-5">
                            <span>Meet The Team</span>
                            <span>Privacy Policy</span>
                            <span>Terms And Conditions</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="list__item">
                        <h3>Community</h3>
                        <div class="items d-flex flex-column gap-4 mt-5 mb-5">
                            <span>Upcoming Events</span>
                            <span>Join Our Virtual Community</span>
                            <!-- <span>Start An S.C.A Chapter</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="d-flex align-items-center justify-content-center">
            © COPYRIGHT -IFFA SUMMIT 2023
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js "></script>
    <script src="js/script.js"></script>
</body>

</html>