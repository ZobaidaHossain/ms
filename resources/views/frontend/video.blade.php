@extends('frontend.layout.partials.master')
@push('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>Video</li>
        </ol>
        <h2>{{translate('ভিডিও গ্যালারি','Video')}}</h2>
      </div>
    </section><!-- End Breadcrumbs -->
    <div class="container">
        <section id="video_portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="video-portfolio-flters">

                            <li data-filter="*" class="filter-active">{{ translate('সকল', 'All') }}</li>
                            <li data-filter=".filter-প্রশিক্ষণ">{{ translate('প্রশিক্ষণ', 'Training') }}</li>
                            <li data-filter=".filter-জনসচেতনতামূলক">{{ translate('জনসচেতনতামূলক', 'Public Awareness') }}</li>
                            <li data-filter=".filter-আর্থিক">{{ translate('আর্থিক সহায়তা', 'Financial Assistance') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($video as $video)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $video->category }}">
                            <video id="videoPlayer" width="100%" controls muted>
                                <source src="{{ asset('storage/' . $video->video) }}" type="video/mp4">
                                আপনার ব্রাউজার এই ভিডিও ট্যাগটি সমর্থন করে না।
                            </video>
                            
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
  </main>
@endpush
@push('js')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const videoFilterButtons = document.querySelectorAll("#video-portfolio-flters li");
        const videoPortfolioItems = document.querySelectorAll("#video_portfolio .portfolio-item");
        videoFilterButtons.forEach((btn) => {
            btn.addEventListener("click", () => {
                // Remove active class from all buttons
                videoFilterButtons.forEach((button) => button.classList.remove("filter-active"));
                btn.classList.add("filter-active");
                const filter = btn.getAttribute("data-filter");
                // Show/Hide portfolio items based on filter
                videoPortfolioItems.forEach((item) => {
                    if (filter === "*" || item.classList.contains(filter.substring(1))) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });
            });
        });
    });
</script>
@endpush
