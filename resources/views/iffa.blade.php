<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>IFFA-SUMMIT</title>
   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('a/scss/main.css')}}" />

    <!-- font awesome cdn link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="shortcut icon" href="{{asset('a/images/logo2.png')}}" type="image/x-icon" />
</head>

<body>
    <header class="header d-lg-flex justify-content-between container-fluid">
      <div class="h-text d-flex flex-column align-items-start container">
        <div class="d-flex items-center">
          <img
            src="{{asset('a/images/logo.png')}}"
            alt="logo"
            class="position-relative logo"
          />
          <!-- <img
            src="images/logo2.png"
            alt="logo"
            class="position-relative logo"
          /> -->
        </div>

        <div class="text mt-5 pt-5 position-relative">
          <p class="heading-intro fs-4">Build the African dream.</p>
          <h1 class="heading fs-1 fw-bold">
            INNOVATION FOR FUTURE <br />
            AFRICA <span>SUMMIT 2024 ( 3RD Edition )</span>
          </h1>
          <p class="fw-bold fs-2">
            In collaboration with BAZE University Abuja
          </p>
          <!-- <div class="rate d-flex gap-5 py-4">
                    <div class="d-flex flex-column">
                        <span class="mx-4">200+</span>
                        <span class="mx-4">Delegates</span>
                    </div>
                    <div class="d-flex flex-column">
                        <span class="mx-4">8+</span>
                        <span class="mx-4">Speakers</span>
                    </div>
                </div> -->
          <p class="description">
            Join Hundreds of young innovators, tech professionals, creatives and
            leaders access opportunities for growth, learning and networking at
            IFFA Summit.
          </p>
           
        </div>
           <div class="button-container mt-5">
        <a
          href="{{ 'https://docs.google.com/forms/d/e/1FAIpQLSdvvEj9skrNXjwB-r4If5QPnOp6GUEulrEihJmO7A7_kNlnQA/viewform' }}"
          class="button mt-4 text-white text-decoration-none"
          >Join Us</a
        >
      </div>
        <img
          src="{{asset('a/images/1.png')}}"
          class="position-absolute imageOne w-75"
          alt=""
        />
        <img
          src="{{asset('a/images/2.png')}}"
          class="position-absolute imageTwo w-50"
          alt=""
        />
      </div>
      <div class="h-image position-relative">
        <img
          src="{{asset('a/images/world.png')}}"
          alt="globe"
          class="w-75 position-absolute"
        />
      </div>
    </header>

    <section class="registration container border">
      <div class="d-md-flex justify-content-between align-items-center">
        <div
          class="reg-left d-flex flex-column align-items-center justify-content-center text-light p-5 position-relative"
        >
          <span class="text-center">Registration is ongoing </span>
          <span class="text-center">Ends on the 15th of June 2024</span>
        </div>
        <div class="reg-right d-flex flex-column align-items-start">
          <span>IFFA Summit 24</span>
          <span>
            IFFA Summit brings together the investors, industry experts,
            companies, partners and agencies you need to build your organization
            and career. This is a 3 days conference designed to help passionate
            innovators and entrepreneurs from diverse background maximize
            learning, collaboration, and networking opportunities. The structure
            of IFFA Summit is thoughtfully crafted to ensure that attendees make
            the most of their time, foster meaningful connections, and leave the
            event equipped with valuable knowledge and experiences. Here's an
            overview of the typical structure of IFFA Summit:
          </span>
          <div class="reg-logo mx-auto">
            <img src="{{asset('a/images/logo.png" alt="logo')}}" />
            <!-- <img src="images/logo2.png" alt="logo" /> -->
          </div>
        </div>
      </div>
    </section>

    <section class="reason container mb-5 position-relative">
      <h1 class="d-flex align-items-center gap-5 px-3">
        <span></span> Are you ready for IFFA Summit 2024?
      </h1>
      <div class="row">
        <div class="col-md-12 col-lg-4 mb-3">
          <div class="card text-center">
            <div class="card-body text-start">
              <h5 class="card-title">Why IFFA Summit?</h5>
              <p class="card-text">
                It's crucial for young African innovators to attend this
                conference because IFFA Summit offers unparalleled opportunities
                to network with industry experts, gain valuable insights, and
                collaborate with like-minded peers from across the continent.
                Don't miss your chance to be part of a transformative event that
                empowers you to drive positive change and unlock Africa's
                limitless potential.
              </p>
              <div class="d-flex align-items-end justify-content-end mt-5 pt-5">
                <a href="#" class="btn text-light fs-4 mt-5 pt-5"
                  >Read more ></a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-3">
          <!-- <div class="card">
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
          </div> -->
        </div>
        <div class="col-md-12 col-lg-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">JOIN US AT IFFA SUMMIT</h5>
              <div
                class="reg-logo mx-auto d-flex align-items-end justify-content-end"
              >
                <img src="{{asset('a/images/logo.png')}}" alt="logo" />
                <!-- <img src="images/logo2.png" alt="logo" /> -->
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
      <img src="{{asset('a/images/5.png')}}" class="position-absolute image__small" alt="" />
      <h1 class="heading text-center px-3">
        INNOVATION FOR FUTURE AFRICA(IFFA) <span>SUMMIT 2024</span>
      </h1>
      <p class="mt-5">
        Connect with finest thought leaders, professionals, creatives,
        enterpreneurs, and innovators at IFFA summit 2024. Explore opportunities
        for business growth.
      </p>
      <div class="button-container mt-5">
        <a
          href="{{ 'https://docs.google.com/forms/d/e/1FAIpQLSdvvEj9skrNXjwB-r4If5QPnOp6GUEulrEihJmO7A7_kNlnQA/viewform' }}"
          class="button mt-4 text-white text-decoration-none"
          >Join Us</a
        >
      </div>

      <img src="{{asset('a/images/3.png')}}" class="position-absolute image__1" alt="" />
      <img src="{{asset('a/images/4.png')}}" class="position-absolute image__2" alt="" />
      <img src="{{asset('a/images/5.png')}}" class="position-absolute image__3" alt="" />

      <video autoplay controls loop>
        <source src="{{asset('a/images/video2.mp4')}}" type="video/mp4" />
        Your browser does not support this video, change browser!
      </video>
    </section>

    <!-- About Us section -->
    <section id="about__us" class="reason container mb-5 d-flex flex-column">
      <h1 class="d-flex align-items-center gap-5 px-3">
        <span></span> Conference Structure
      </h1>
      <div class="text-description mb-5">
        <p class="description">Days 1: Keynote Addresses</p>
        <ul>
          <li class="description fs-2">
            This day is dedicated to high-profile keynote addresses from
            industry leaders and visionaries.
          </li>
          <li class="description fs-2">
            Delegates gain insights from renowned experts and thought leaders.
          </li>
          <li class="description fs-2">
            Networking breaks and social events are interspersed throughout the
            day to facilitate interactions.
          </li>
        </ul>
      </div>
      <div class="text-description mb-5">
        <p class="description">Day 2: Workshops and Sector-Specific Sessions</p>
        <ul>
          <li class="description fs-2">
            Delegates are divided into groups based on their respective sectors, such as healthcare, agriculture, technology, finance, education, climate, and gender inclusion.
          </li>
          <li class="description fs-2">
            Delegates gain insights from renowned experts and thought leaders.
          </li>
          <li class="description fs-2">
            Practical skills, industry-specific knowledge, and best practices are shared.
          </li>
          <li class="description fs-2">
            Peer-to-peer learning and collaboration within sector groups are encouraged.
          </li>
        </ul>
      </div>
      <div class="text-description mb-5">
        <p class="description">Day 3: Innovation Showcases, Networking, and Panel Discussion</p>
        <ul>
          <li class="description fs-2">
            Panel discussions on key topics related to innovation, entrepreneurship, and sector-specific challenges take place.
          </li>
          <li class="description fs-2">
            Delegates have the opportunity to showcase their innovative projects, startups, and ideas.
          </li>
          <li class="description fs-2">
            Investors, mentors, and industry professionals attend these showcases.
          </li>
          <li class="description fs-2">
            Networking sessions focus on connecting delegates with potential partners, investors, and collaborators.
          </li>
        </ul>
      </div>
      <div class="text-description mb-5">
        <p class="description">Day 4: Departure</p>
        <ul>
          <li class="description fs-2">
            Delegates receive certificates of participation.
          </li>
          <li class="description fs-2">
            Delegates prepare for departure, with the option to extend their stay for additional networking or sightseeing.
          </li>
        </ul>
      </div>

      <h1 class="d-flex align-items-center gap-5 px-3 mt-5">
        <span></span> How to Participate at IFFA Summit?
      </h1>
      <p class="description">
        <span>1.</span>
        You can attend IFFA Summit by registering online and it's completely
        free, but you will have to confirm participation to get a ticket to
        access the conference.
      </p>
      <p class="description">
        <span>2.</span>
        You can decide to camp at the hotel for delegates but this is not free
        because of the cost of accommodation.
      </p>

      <h1 class="d-flex align-items-center gap-5 px-3 mt-5">
        <span></span> Benefits of camping
      </h1>
      <p class="description">
        Whether you are a resident of Abuja or traveling from outside Abuja to
        attend the conference, camping is fun, engaging and exciting you should
        consider it. It provides the best networking opportunities for
        delegates.
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
            <img src="{{asset('a/images/slide7.jpg')}}" alt="" class="position-absolute" />
            <img src="{{asset('a/images/slide2.jpg')}}" alt="" class="position-absolute" />
            <img src="{{asset('a/images/slide3.jpg')}}" alt="" class="position-absolute" />
            <img src="{{asset('a/images/slide9.jpg')}}" alt="" class="position-absolute" />
            <img src="{{asset('a/images/slide5.png')}}" alt="" class="position-absolute" />
            <img src="{{asset('a/images/slide6.jpg')}}" alt="" class="position-absolute" />
            <img src="{{asset('a/images/slide1.jpg')}}" alt="" class="position-absolute" />
            <img src="{{asset('a/images/slide10.jpg')}}" alt="" class="position-absolute" />
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
        <span></span> The benefits of being a delegate at IFFA summit
      </h1>

      <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card border-0">
            <div class="card-body">
              <h5 class="card-title">Explore Opportunities</h5>
              <p class="card-text">
                Through our partners and connections you can access a pool of
                opportunities from accelerators, VC firms, technology firms and
                international organizations.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card border-0">
            <div class="card-body">
              <h5 class="card-title">Build Valuable Connections</h5>
              <p class="card-text">
                At IFFA Summit you will find life long friends who have same
                passion as you do and industry experts who have the network and
                knowledge that you need to succeed.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card border-0 bg-transparent">
            <div class="card-body">
              <h5 class="card-title">Engaging Sessions</h5>
              <p class="card-text">
                Thought provoking and eye opening sessions with our guest
                mentors will give you access to knowledge and insight that is
                relevant to the industry your startup is operating in.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card border-0">
            <div class="card-body">
              <h5 class="card-title">Startup Exhibition</h5>
              <p class="card-text">
                IFFA Summit will present an opportunity for you to showcase your
                innovation to the right audience of potential partners and
                investors that you need.
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
                <p class="card-text mt-3">BAZE University Abuja</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <div class="card">
              <div class="card-body">
                <span class="text-light mb-5"
                  ><i class="fa-regular fa-calendar-days me-4"></i>Date</span
                >
                <p class="card-text mt-3">9th to 11th of July</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <!-- <div class="card">
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
            </div> -->
          </div>
        </div>
        <div class="opportunity-logo mx-auto me-5 d-flex">
          <img src="{{asset('a/images/logo.png')}}" alt="logo" />
          <!-- <img src="images/logo2.png" alt="logo" /> -->
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
          <i class="fa-solid fa-utensils text-light"></i>
        </div>

        <div class="card">
          <h3>Good health and well-being</h3>
          <i class="fa-solid fa-house-medical-flag text-light"></i>
        </div>

        <div class="card">
          <h3>Gender equality</h3>
          <i class="fa-solid fa-children text-light"></i>
        </div>

        <div class="card">
          <h3>Quality education</h3>
          <i class="fa-solid fa-graduation-cap text-light"></i>
        </div>

        <div class="card">
          <h3>Decent work and economic growth</h3>
          <i class="fa-solid fa-arrow-up-right-dots text-light"></i>
        </div>

        <!-- This card should be ignor when integrating backend -->
        <div class="card"></div>
        <!-- .................................................. -->

        <div class="card">
          <h3>Sustainable cities and communities</h3>
          <i class="fa-solid fa-city text-light"></i>
        </div>

        <div class="card">
          <h3>Climate action</h3>
          <i class="fa-solid fa-water text-light"></i>
        </div>

        <div class="card">
          <h3>Peace justice and strong institutions</h3>
          <i class="fa-solid fa-scale-unbalanced text-light"></i>
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
      <img src="{{asset('a/images/3.png')}}" class="position-absolute image__large" alt="" />
      <img src="{{asset('a/images/4.png')}}" class="position-absolute image__medium" alt="" />
      <img src="{{asset('a/images/5.png')}}" class="position-absolute image__small" alt="" />
      <h1 class="d-flex align-items-center gap-5 px-3">
        <span></span>Guest speakers at IFFA summit 2024
      </h1>

      <!-- <div class="row mb-5">
        <div class="col-sm-6 col-lg-4 mb-3">
          <div class="card position-relative border-0">
            <div class="card__header">
              <div class="image-background">
                <img
                  src="images/person1.png"
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
                  src="images/person2.png"
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
                  src="images/person3.png"
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
                  src="images/person4.png"
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
                  src="images/person5.png"
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
                  src="images/person6.png"
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
                  src="images/person7.png"
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
                  src="images/person8.png"
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
                  src="images/person6.png"
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
      </div> -->

      <p class="fs-1">Announcing Guest Speakers Soon...</p>
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
              <img src="{{asset('a/images/colon.png')}}" alt="" />

              <div class="card-text mt-5 fs-3">
                <p class="initial-text">
                  My name is Lucky Owoicho, a passionate social innovator. In
                  the midst of Nigeria's Fulani herdsmen crisis, I launched
                  Project Build a School. My mission was to rescue displaced
                  children and revive their education.
                </p>
                <p class="more-text">
                  ... In 2020 I joined RACE Africa and later in 2022 and 2023 I
                  was privileged to be a part of the IFFA summit as a Delegate.
                  It was a wonderful learning experience for me. I got to learn
                  a lot from the wealth of experience of the speakers,
                  especially Mrs Folawe Omikunle -CEO of Teach For Nigeria, As
                  someone passionate about the education of vulnerable and
                  Marginalized children she was able to stand as a mirror and
                  played a significant part in my experience at the summit.
                  Getting to connect with young people who are passionate and
                  doing great work in their respective spaces is one reason I am
                  also glad to have been a part of the summit. I am looking
                  forward to also being a part of the IFFA Summit in the coming
                  year. It is always exciting to witness the tremendous impact
                  it has on the lives of so many young people across Africa.
                  Thanks to RACE Africa and every partner who supported.
                </p>
                <button
                  class="see-more-button border-0 bg-transparent text-white underline"
                >
                  See more...
                </button>
                <button
                  class="see-less-button border-0 bg-transparent text-white underline"
                  style="display: none"
                >
                  See less
                </button>
              </div>
              <div class="profile d-flex align-items-center gap-5 mt-5">
                <div class="profile-image__container">
                  <img src="{{asset('a/images/profile2.jpg')}}" alt="" />
                </div>
                <div class="content text-light">
                  <h4>Lucky owoicho</h4>
                  <p>
                    International Development Practitioner | Digital Literacy
                    Advocate
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mb-3 mb-sm-0">
          <!-- <div class="card border-0">
            <div class="card-body">
              <img src="images/colon.png" alt="" />

              <div class="card-text mt-5 fs-3">
                <p class="initial-text">
                  My name is Lucky Owoicho, a passionate social innovator. In
                  the midst of Nigeria's Fulani herdsmen crisis, I launched
                  Project Build a School. My mission was to rescue displaced
                  children and revive their education.
                </p>
                <p class="more-text">
                  ... In 2020 I joined RACE Africa and later in 2022 and 2023 I
                  was privileged to be a part of the IFFA summit as a Delegate.
                  It was a wonderful learning experience for me. I got to learn
                  a lot from the wealth of experience of the speakers,
                  especially Mrs Folawe Omikunle -CEO of Teach For Nigeria, As
                  someone passionate about the education of vulnerable and
                  Marginalized children she was able to stand as a mirror and
                  played a significant part in my experience at the summit.
                  Getting to connect with young people who are passionate and
                  doing great work in their respective spaces is one reason I am
                  also glad to have been a part of the summit. I am looking
                  forward to also being a part of the IFFA Summit in the coming
                  year. It is always exciting to witness the tremendous impact
                  it has on the lives of so many young people across Africa.
                  Thanks to RACE Africa and every partner who supported.
                </p>
                <button
                  class="see-more-button border-0 bg-transparent text-white underline"
                >
                  See more..
                </button>
                <button
                  class="see-less-button border-0 bg-transparent text-white underline"
                  style="display: none"
                >
                  See less
                </button>
              </div>
              <div class="profile d-flex align-items-center gap-5 mt-5">
                <img src="images/profile.png" alt="" />
                <div class="content text-light">
                  <h4>Lucky owoicho</h4>
                  <p>
                    International Development Practitioner | Digital Literacy
                    Advocate
                  </p>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      <img src="{{asset('a/images/6.png')}}" class="position-absolute image__large" alt="" />
      <img src="{{asset('a/images/7.png')}}" class="position-absolute image__small" alt="" />
    </section>

    <!-- Contact -->

    <section
      id="contact"
      class="reason container mb-5 d-flex flex-column position-relative"
    >
      <h1 class="d-flex align-items-center gap-5 px-3">
        <span></span>Contact us
      </h1>
      <p class="description">
        To make enquiries about IFFA Summit 2024. Kindly contact us via the
        details below. Thank you!
      </p>

      <div class="contact mt-5">
        <p class="fs-1">Phone number: <span>08142218337</span></p>
        <p class="fs-1">
          Email: <span>iffa@raceafrica.org</span> and
          <span>info@raceafrica.org</span>
        </p>
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
        © COPYRIGHT -IFFA SUMMIT 2024
      </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js "></script>
    <script src="{{asset('a/js/script.js')}}"></script>
  </body>
</html>
