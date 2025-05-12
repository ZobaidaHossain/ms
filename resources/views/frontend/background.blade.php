          @extends('frontend.layout.partials.master')
          @push('content')
          <main id="main">
              <!-- ======= Breadcrumbs ======= -->
              <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">
                  <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Background</li>
                  </ol>
                  <h2>পটভূমি</h2>
                </div>
              </section><!-- End Breadcrumbs -->
              <section class="inner-page">
                <div class="container">
                  {!!translate($introduction->backdrop,$introduction->backdrop_en)!!}
                    @foreach ($background as $background )
                  <p class="fs-5 fw-bolder">{{translate($background->title,$background->title_en)}}:</p>
                  <div class="row">
                    <div class="col-md-2">
                      <img class="img-fluid img-thumbnail" src="{{ asset('storage/' . $background->image) }}" alt="{{$background->title}}">
                    </div>
                    <div class="col-md-10">
                    {!!translate($background->description,$background->description_en)!!}
                    </div>
                   {!!translate($background->description_more,$background->description_more_en)!!}
                  </div>
                  @endforeach
                </div>
              </section>
            </main>
          @endpush
