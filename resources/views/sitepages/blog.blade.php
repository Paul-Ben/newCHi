@extends('sitepages.layout')

@section('content')

<div class="hero-wrap" style="background-image: url('siteassets/images/cheerfulhandinitiativehomelider.resized.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
           <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ URL('/') }}">Home</a></span> <span>Blog</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog</h1>
        </div>
      </div>
    </div>
  </div>

  
  <section class="ftco-section">
    
    <div class="container">
        
      <div class="row d-flex">
        @forelse($blogs as $blog)
        <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
            <a href="/blog/details/{{ $blog->id }}" class="block-20" style="background-image: url('{{ asset('storage/images/' . $blog->image) }}');">
            </a>
            <div class="text p-4 d-block">
                <div class="meta mb-3">
                <div><a href="#">{{$blog->created_at}}</a>
                </div>
                <div>
                    <a href="#">{{$blog->author}}</a>
                </div>
                <br>
                <div>
                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                </div>
              </div>
              <h3 class="heading mt-3"><a href="blog/details/{{ $blog->id }}">{{$blog->title}}</a></h3>
              <p>{{$blog->slug}}</p>
            </div>
          </div>
        </div>
        @empty
        <h4>No Blog posts available yet.</h4>
        @endforelse
      </div>
      
        
      
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            
      <div>{{ $blogs->links() }}</div>
          </div>
        </div>
      </div>
    </div>

    <style type="text/css">
      .w-5{
        display : none
        } 
    </style>
  </section>
    
@endsection
