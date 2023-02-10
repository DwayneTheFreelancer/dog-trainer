@extends('main')

@section('title', 'Home')

@section('content')
  <div class="container-fluid main-container py-5">
      <h1 class="text-center pb-5" data-mdb-toggle="animation" data-mdb-animation="slide-in-left" data-mdb-animation-start="onLoad">The dog trainer that everyone loves.</h1>
      <div class="container dog-trainer-header">
          <img src="images/dog-trainer-header.jpg" alt="dog trainer" data-mdb-toggle="animation" data-mdb-animation="zoom-in" data-mdb-animation-start="onLoad">
      </div>
      <div class="container intro">
          <div class="container">
              <h1 data-mdb-toggle="animation" data-mdb-animation="slide-in-left" data-mdb-animation-start="onScroll">Welcome to training camp</h1>
          </div>
          <div class="container">
              <p data-mdb-toggle="animation" data-mdb-animation="slide-in-right" data-mdb-animation-start="onScroll">Want a well behaved dog? The first step is to seek professional dog training. Whether you need a dog trainer or want to become one, I can help. My goal is to help make your life with your pet smoother, we'll be helping those dogs and cats to be more friendly and obedient.</p>
          </div>
      </div>
  </div>
  <section class="position-relative py-28 bg-white overflow-hidden">
    <div class="position-absolute top-0 start-0 h-100 w-100"></div>
    <div class="position-relative container-fluid meet-the-trainer" style="z-index: 1;">
      <div class="row g-16">
        <div class="col-12 col-md-4 col-lg-4 pb-5">
          <div class="mw-sm mx-auto text-center">
            <div class="mb-6 d-flex justify-content-center align-items-center mx-auto text-white rounded" style="width: 64px; height: 64px; background-color: #ffe8ba">
              <i class="fa-solid fa-phone text-dark fa-2x" data-mdb-toggle="animation" data-mdb-animation="tada" data-mdb-animation-start="onHover" data-mdb-animation-on-hover="repeat"></i>
            </div>
            <h3 class="font-heading fs-8 mb-4">Give Us a Call</h3>
            <p class="mb-0 fw-medium">You can call me at (012)-345-0123.</p>
          </div>
        </div>
        <div class="col-12 col-md-4 pb-5">
          <div class="mw-sm mx-auto text-center">
            <div class="mb-6 d-flex justify-content-center align-items-center mx-auto rounded" style="width: 64px; height: 64px; background-color: #ffe8ba">
              <i class="fa-solid fa-calendar-days fa-2x" data-mdb-toggle="animation" data-mdb-animation="tada" data-mdb-animation-start="onHover" data-mdb-animation-on-hover="repeat"></i>
            </div>
            <h3 class="font-heading fs-8 mb-4">Schedule Trainings</h3>
            <p class="mb-0 fw-medium">I will send you my booking link after the call to schedule training days.</p>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="mw-sm mx-auto text-center">
            <div class="mb-6 d-flex justify-content-center align-items-center mx-auto rounded" style="width: 64px; height: 64px; background-color: #ffe8ba">
              <i class="fa-solid fa-dog fa-2x" data-mdb-toggle="animation" data-mdb-animation="tada" data-mdb-animation-start="onHover" data-mdb-animation-on-hover="repeat"></i>
            </div>
            <h3 class="font-heading fs-8 mb-4">Happy Behaved Dog</h3>
            <p class="mb-0 fw-medium">Your dog will be well behaved after our 12 weeks of training.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container-fluid trainer-reviews">
      <div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-mdb-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="{{ secure_asset('images/review-1.jpg') }}" alt="avatar"
              style="width: 100px; height: 100px; object-fit:cover" />
            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                <h5 class="mb-3">Mark</h5>
                {{--<p>Photographer</p>--}}
                <p class="text-muted">
                  <i class="fas fa-quote-left pe-2"></i>
                  I had a very bad puppy but after Dave's dog training my dog now listens to me and is well behaved!
                </p>
              </div>
            </div>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
            </ul>
          </div>
          <div class="carousel-item">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="{{ secure_asset('images/review-2.jpg') }}" alt="avatar"
              style="width: 100px; height: 100px; object-fit:cover" />
            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                <h5 class="mb-3">John</h5>
                <p class="text-muted">
                  <i class="fas fa-quote-left pe-2"></i>
                  Was a bit hesistant at first but after seeing the results I am impressed and satisfied.
                </p>
              </div>
            </div>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
            </ul>
          </div>
          <div class="carousel-item">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="{{ secure_asset('images/review-3.jpg') }}" alt="avatar" style="width: 100px; height: 100px; object-fit:cover" />
            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                <h5 class="mb-3">Anna</h5>
                <p class="text-muted">
                  <i class="fas fa-quote-left pe-2"></i>
                  I love Dave's dog training! I've seen a big improvement in my dogs behavior.
                </p>
              </div>
            </div>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
            </ul>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls"
          data-mdb-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls"
          data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>
@endsection