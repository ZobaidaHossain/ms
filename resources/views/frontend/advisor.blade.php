@extends('frontend.layout.partials.master')
@push('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Advisers</li>
        </ol>
        <h2>{{translate('উপদেষ্টা মন্ডলী','Advisory Board')}}</h2>
      </div>
    </section><!-- End Breadcrumbs -->
    <div class="container">
      <section class="bg-white py-3 py-md-5 py-xl-8">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
              <!-- <h2 class="mb-4 display-5 text-center">উপদেষ্টামন্ডলী</h2> -->
              <p class="text-secondary mb-5 text-center lead fs-4">{{translate('যাদের দিকনির্দেশনায় ফাউন্ডেশন পরিচালিত হচ্ছে','Under whose guidance the foundation is being run')}}  </p>
              <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
            </div>
          </div>
        </div>
        <div class="container overflow-hidden">
          <div class="row gy-4 gy-lg-0 gx-xxl-5">
            @foreach ($advisor as $team )
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card team-card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                  <div class="card-body p-0">
                    <figure class="m-0 p-0">
                        <img class="img-fluid team-img" loading="lazy" src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}">
                        <figcaption class="m-0 p-4">
                            <h4 class="mb-1">{{translate($team->name,$team->name_en)  }}</h4>
                            <p class="text-secondary mb-0">{{ translate($team->designation,$team->designation_en)  }}</p>
                        </figcaption>
                    </figure>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </section>
      <div class="table-responsive">
        <table class="table">
          <thead class="table-dark text-center">
            <th>{{translate('ক্রমিক.','No.')}}</th>
            <th>{{translate('নাম ও পদবি','Name & Appellation')}}</th>
            <th>{{translate('বিস্তারিত','Details')}}</th>
          </thead>
          <tbody>
            @foreach ($advisor as $team )
            <tr>
              <td>{{ translate($team->serial,$team->serial_en)  }}.</td>
              <td width="80%">{{ translate($team->name,$team->name_en)  }}</td>
              <td class="text-center"><a href="{{ asset('storage/' . $team->pdf) }}" target="_blank"> <img src="./assets/img/pdf.png" alt="download" width="20%"> </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </main>
@endpush
