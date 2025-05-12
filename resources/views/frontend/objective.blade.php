@extends('frontend.layout.partials.master')
@push('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>Goals and Objectives</li>
        </ol>
        <h2>{{translate('লক্ষ্য ও উদ্দেশ্যাবলী','Goals and objectives')}}</h2>
      </div>
    </section><!-- End Breadcrumbs -->
    <div class="container">
      <div class="table-responsive">
        <table class="table">
          <tbody>
            @foreach ($objective as $objective)
            <tr>
                <td>{{ translate($objective->serial ,$objective->serial_en)}}.</td>
                <td width="100%">{{  translate($objective->title,$objective->title_en) }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  </main><!-- End #main -->
@endpush
