@extends('sitepages.layout')

@section('content')

<div class="hero-wrap" style="background-image: url('siteassets/images/cheerfulhandinitiativehomelider.resized.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
           <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ URL('/') }}">Home</a></span> <span>Contact</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
        </div>
      </div>
    </div>
  </div>

  
  <section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h4">Contact Information</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-3">
          <p><span>Address:</span> No. 34 Second Floor JBryan Plaza, Railway bypass, High Level, Makurdi, Benue State, Nigeria.</p>
        </div>
        <div class="col-md-3">
          <p><span>Phone:</span> <a href="tel://+234 8038600118">+234 7019696134</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Email:</span> <a href="mailto:cheerfulhandsinitiative@gmail.com">cheerfulhandsinitiative@gmail.com</a></p>
          <p> <a href="mailto:info@cheerfulhandsinitiatives.org">info@cheerfulhandsinitiatives.org</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Website</span> <a href="#">www.cheerfulhandsinitiatives.org</a></p>
        </div>
      </div>
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
            <h4 class="mb-4">Do you have any questions?</h4>
            @if (session('success'))
              <div class="alert alert-success">{{session('success')}}</div>
            @endif
          <form action="{{route('contacts.store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="form-group">
              <input type="text" name="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        
        </div>

        <div class="col-md-6" >
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d494.2047964968176!2d8.527160991782099!3d7.721892883046572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1050804aaf7f0191%3A0x246cb6a0a147b81c!2sPGCH%2BV2R%2C%20Joe%20Akaahan%20Road%2C%20High%20Level%20970101%2C%20Makurdi%2C%20Benue!5e0!3m2!1sen!2sng!4v1691949874386!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
    
@endsection