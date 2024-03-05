@extends('sitepages.layout')

@section('content')

<div class="hero-wrap" style="background-image: url('siteassets/images/cheerfulhandinitiativehomelider.resized.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Every child deserves access to formal,safe and quality education.</h1>
          <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Inspired by <a href="#">CheerfulHandsInitiatives.</a></p>

          {{-- <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://vimeo.com/45830194" class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span class="icon-play mr-2"></span>Watch Video</a></p> --}}
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-counter ftco-intro" id="section-counter">
      <div class="container">
          <div class="row no-gutters">
              <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 color-1 align-items-stretch">
            <div class="text">
                <span>Served Over</span>
              <strong class="number" data-number="1000">0</strong>
              <span>Children in Benue State Nigeria.</span>
            </div>
          </div>
        </div>
        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 color-2 align-items-stretch">
            <div class="text">
                <h3 class="mb-4">Donate</h3>
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
      <div class="container-fluid">
          <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-5 heading-section ftco-animate text-center">
          <h2 class="mb-4">Our Causes</h2>
          <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
        </div>
      </div>
          <div class="row">
              <div class="col-md-12 ftco-animate">
                  <div class="carousel-cause owl-carousel">
                    @forelse ($causes as $cause)
                      <div class="item">    
                        <div class="cause-entry">                        
                          <a href="#" class="img" style="background-image: url('{{ asset('storage/causes/images/' . $cause->image) }}');"></a>
                          <div class="text p-3 p-md-4">
                              <h3><a href="#">{{$cause->title}}</a></h3>
                              <p>{{$cause->message}}</p>
                              <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                              <div class="progress custom-progress-success">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="fund-raised d-block">NGN 000,000 raised of NGN500,000</span> -->
                          </div>
                      </div>
                      </div>
                      @empty
                        <h3>No Causes found.</h3>
                      @endforelse
                      
                  </div>
              </div>
              
          </div>
      </div>
  </section>

  {{-- <section class="ftco-section-3 img" style="background-image: url(siteassets/images/cheerfulhandinitiative_beavolunteer.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-3">Our Partners/Sponsors</h2>
      </div>
      </div>
        <div class="row">
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 d-flex services p-3 py-4 d-block">
          <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
          <div class="media-body pl-4">
            <h3 class="heading">Make Donation</h3>
            <p>Make a donation of books, bags, uniforms, school shoes and more to help train a girl child.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 d-flex services p-3 py-4 d-block">
          <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
          <div class="media-body pl-4">
            <h3 class="heading">Become A Volunteer</h3>
            <p>Volunteers are priceless and special because they make a huge difference in kind. Become one today and be some ones hero.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 d-flex services p-3 py-4 d-block">
          <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
          <div class="media-body pl-4">
            <h3 class="heading">Sponsorship</h3>
            <p>Sponsor a child today. Ask us how?</p>
          </div>
        </div>    
      </div>
    </div>
    </div>
</section>  --}}

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Recent from blog</h2>
        </div>
      </div>
      <div class="row d-flex">
        @forelse($blogs as $blog)
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            {{-- <img src="{{ asset('storage/images/' . $blog->image) }}" alt="" class="block-20"> --}}
          <a href="/blog/details/{{$blog->id}}" class="block-20" style="background-image: url('{{ asset('storage/images/' . $blog->image) }}');">
          </a>
          <div class="text p-4 d-block">
              <div class="meta mb-3">
              <div><a href="#">{{$blog->created_at}}</a></div>
              <div><a href="#">{{$blog->author}}</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-3"><a href="/blog/details/{{$blog->id}}">{{$blog->title}}</a></h3>
            <p>{{$blog->slug}}</p>
          </div>
        </div>
      </div>
        @empty
      
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h4 class="mb-4">No blog posts available.</h4>
        
        </div>
        
        
        @endforelse
       
      </div>
    </div>
  </section>

  
      
      <section class="ftco-section-3 img" style="background-image: url(siteassets/images/cheerfulhandinitiative_beavolunteer.jpg);">
      <div class="overlay"></div>
      <div class="container">
          <div class="row d-md-flex">
          <div class="col-md-6 d-flex ftco-animate">
              <div class="img img-2 align-self-stretch" style="background-image: url(siteassets/images/cheerfulhandinitiative_beavolunteer.jpg);"></div>
          </div>
          <div class="col-md-6 volunteer pl-md-5 ftco-animate">
              <h3 class="mb-3">Sign up to be a volunteer</h3>
              @if (session('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
              @endif
              <form action="{{route('volunteers.store')}}" method="POST" class="volunter-form">
                @csrf
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Your Email" required>
          </div>
          <div class="form-group">
            <textarea name="message" id="" cols="30" rows="3" class="form-control" placeholder="Message" required></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
          </div>
        </form>
          </div>    			
          </div>
      </div>
  </section>
    
@endsection