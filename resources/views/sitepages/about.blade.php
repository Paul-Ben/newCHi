@extends('sitepages.layout')

@section('content')

<div class="hero-wrap" style="background-image: url('siteassets/images/cheerfulhandinitiativehomelider.resized.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
           <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('homepage')}}">Home</a></span> <span>About</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
        </div>
      </div>
    </div>
  </div>

  
  <section class="ftco-section">
      <div class="container">
          <div class="row d-flex">
              <div class="col-md-6 d-flex ftco-animate">
                  <div class="img img-about align-self-stretch" style="background-image: url(siteassets/images/gallery0.jpg); width: 100%;"></div>
              </div>
              <div class="col-md-6 pl-md-5 ftco-animate">
                  <h2 class="mb-4">Welcome to Cheerfulhands Initative Established Since 2015.</h2>
                  <h3> Mission</h3>
                  <p>Supporting women/girls profession and personal development through education and training.</p>
                  <h3> Values </h3>
                  <p>
                      <ul>
                          <li>we value integrity, honesty and recognise our unique contribution.</li>
                          <li>we value accountability, transparency and equality.</li>
                          <li>we welcome all equally.</li>
                      </ul>
                  </p>
                  <h3>Initiatives</h3>
                  <p>
                      <ul>
                          <li>Helping girls discover themselves.</li>
                          <li>Helping the girl child come out of fear and fight for her rights.</li>
                          <li>we are determined to share a better future for the girl child.</li>
                          <li>we want to break the barrier that keeps girls out of secondary schools.</li>
                          <li>Give unprivileged girls access to quality learning resources and support to empower them to change their own lives and the lives of the community in which they live.</li>
                      </ul>
                  </p>
                  <h3>Objectives</h3>
                  <p>
                      <ul>
                          <li>To provide social, education and econimic empowerment to women and girls.</li>
                          <li>
                            To safeguard the rights of the girl child and provide for well-beign of children in need, more particularly:
                            <ul>
                                <li>Girls (children) exposed to any form of abuse.</li>
                                <li>Children deprived of education especially the girl child.</li>
                            </ul>
                          </li>
                          <li>To provide medical assistance to the less privileged and ensure their well-being.</li>
                          <li>To mentor and provide guidance to the girl child.</li>
                      </ul>
                  </p>
              </div>
          </div>
      </div>
  </section>

  <section class="ftco-counter ftco-intro ftco-intro-2" id="section-counter">
      <div class="container">
          <div class="row no-gutters">
              <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 color-1 align-items-stretch">
            <div class="text">
                <span>Served Over</span>
              <strong class="number" data-number="500">0</strong>
              <span>Children in Benue State Nigeria.</span>
            </div>
          </div>
        </div>
        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 color-2 align-items-stretch">
            <div class="text">
                <h3 class="mb-4">Donate Money</h3>
                <p>Contribute towards training a girl child today and give them a chance for a better future.</p>
                <p><a href="#" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
            </div>
          </div>
        </div>
        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 color-3 align-items-stretch">
            <div class="text">
                <h3 class="mb-4">Sponor a child.</h3>
                <p>Break the cycle of poverty and change a child's life.</p>
                <p><a href="#" class="btn btn-white px-3 py-2 mt-2">Be A Volunteer</a></p>
            </div>
          </div>
        </div>
          </div>
      </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Volunteers</h2>
          <p>Our volunteers are priceless.</p>
        </div>
      </div>
      <div class="row">
          <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
              <div class="staff">
                  <div class="d-flex mb-4">
                      <div class="img" style="background-image: url(siteassets/images/volunteer1.jpg);"></div>
                      <div class="info ml-4">
                          <h3><a href="{{ URL('teacher-single.html') }}">Odeh Cornelius Edeh</a></h3>
                          <span class="position">Assistant Programme Manager</span>
                          <div class="text">
                              <!-- <p>Donated <span>$300</span> for <a href="#">Children Needs Food</a></p> -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
              <div class="staff">
                  <div class="d-flex mb-4">
                      <div class="img" style="background-image: url(siteassets/images/volunteer2.jpg);"></div>
                      <div class="info ml-4">
                          <h3><a href="{{ URL('teacher-single.html') }}">Dooshima Slyvia Yaaya</a></h3>
                          <span class="position">Assistant Admin Officer</span>
                          <div class="text">
                              <!-- <p>Donated <span>$150</span> for <a href="#">Children Needs Food</a></p> -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
              <div class="staff">
                  <div class="d-flex mb-4">
                      <div class="img" style="background-image: url(/vends/dist/img/headshot.png);"></div>
                      <div class="info ml-4">
                          <h3><a href="{{ URL('teacher-single.html') }}">Engr. Paul-Ben Ajene</a></h3>
                          <span class="position">IT Services.</span>
                          <div class="text">
                              <!-- <p>Donated <span>$250</span> for <a href="#">Children Needs Food</a></p> -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </section>
    
@endsection