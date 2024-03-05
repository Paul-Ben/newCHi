@extends('sitepages.layout')

@section('content')

<div class="hero-wrap" style="background-image: url('{{ asset('storage/images/' . $blog->image) }}');" data-stellar-background-ratio="0.5">
      <img src="">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="blog.html">Blog</a></span> <span>Blog Details</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog Details</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3">{{$blog->title}}</h2>
            <p>{{$blog->slug}}</p>
            <p>
              <img src="{{ asset('storage/images/' . $blog->image) }}" alt="" class="img-fluid">
            </p>
            <p>{{$blog->message}}</p>
            
            {{-- <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                
                <a href="#" class="tag-cloud-link">Sport</a>
                <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a>
              </div>
            </div> --}}
            
            {{-- <div class="about-author d-flex p-5 bg-light">
              <div class="bio align-self-md-center mr-5">
                <img src="{{ asset('siteassets/images/person_1.jpg') }}" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc align-self-md-center">
                <h3>Lance Smith</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              </div>
            </div> --}}

          </div> 

          </div>
          

        </div>
      </div>
    </section> 

@endsection