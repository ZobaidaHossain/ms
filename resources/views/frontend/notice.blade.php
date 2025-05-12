@extends('frontend.layout.partials.master')
@push('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>Notice</li>
        </ol>
        <h2>{{translate('নোটিশ','Notice')}}</h2>
      </div>
    </section><!-- End Breadcrumbs -->
    <section class="inner-page">
      <div class="container">
        <p class="tex">
        <div class="table-responsive">
          <table class="table">
            <thead class="table-dark text-center">
              <th>{{translate('ক্র.','No.')}}</th>
              <th>{{translate('বিষয়','Subject')}}</th>
              {{-- <th>তারিখ</th> --}}
              <th>{{translate('লিংক','Link')}}</th>
            </thead>
            <tbody>
                @foreach ($notice as  $notice)
                <tr>
                    <td>{{ translate($notice->serial,$notice->serial_en) }}.</td>
                    <td width="80%"><a class="text-dark" href="{{ asset('storage/' . $notice->pdf) }}" target="_blank">{{translate($notice->title,$notice->title_en)  }}</a></td>
                    <td class="text-center"><a href="{{ asset('storage/' . $notice->pdf) }}" target="_blank"> <img src="./assets/img/pdf.png" alt="download" width="20%"> </a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
  @endpush
