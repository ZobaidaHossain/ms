@extends('frontend.layout.partials.master')
@push('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <h2>{{translate('লক্ষ্যভূক্ত জনগোষ্ঠী','Target Population')}}</h2>

      </div>
    </section><!-- End Breadcrumbs -->
    <section class="inner-page">
      <div class="container">
        @foreach ($audience as $audience)
        <div class="text">
            <h5 style="font-weight: bold;"> {{translate($audience->serial,$audience->serial_en)}}. {{translate($audience->title,$audience->title_en)}}: </h5>
            <p class="">
                {!! translate($audience->description, $audience->description_en) !!}
            </p>
          </div>
        @endforeach
      </div>
    </section>
  </main>
@endpush
