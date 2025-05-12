@extends('frontend.layout.partials.master')
@push('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>Project Area</li>
        </ol>
        <h2>{{translate('বাস্তবায়িত ও চলমান প্রকল্প এলাকা','Implemented And Ongoing Project Areas')}}</h2>
      </div>
    </section><!-- End Breadcrumbs -->
    <section class="inner-page">
      <div class="container">
      {!!translate($project->description,$project->description_en)!!}
      </div>
    </section>
  </main>
@endpush
