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
                    @foreach ($video as $videoItem)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $videoItem->category }}">
                            {{-- <video id="videoPlayer" width="100%" controls muted>
                                <source src="{{ asset('storage/' . $video->video) }}" type="video/mp4">
                                আপনার ব্রাউজার এই ভিডিও ট্যাগটি সমর্থন করে না।
                            </video> --}}
                              <div class="portfolio-wrap" style="position: relative; overflow: hidden;">

                                        {{-- Video Preview --}}
                                        @if (!empty($videoItem->video))
                                            <video style="width: 100%; height: 400px; object-fit: cover;" muted controls>
                                                <source src="{{ asset('storage/' . $videoItem->video) }}"
                                                    type="video/mp4">
                                                {{ translate('আপনার ব্রাউজার এই ভিডিও ট্যাগটি সমর্থন করে না।', 'Your browser does not support the video tag.') }}
                                            </video>
                                        @elseif (!empty($videoItem->link))
                                            @php
                                                $youtubeId = null;
                                                if (strpos($videoItem->link, 'youtu.be/') !== false) {
                                                    $youtubeId = substr(strrchr($videoItem->link, '/'), 1);
                                                } elseif (strpos($videoItem->link, 'watch?v=') !== false) {
                                                    parse_str(parse_url($videoItem->link, PHP_URL_QUERY), $query);
                                                    $youtubeId = $query['v'] ?? null;
                                                }
                                            @endphp

                                            @if ($youtubeId)
                                                <div
                                                    style="width: 100%; height: 400px; position: relative; overflow: hidden;">
                                                    <iframe src="https://www.youtube.com/embed/{{ $youtubeId }}"
                                                        style="width: 100%; height: 100%; border: 0;"
                                                        title="{{ translate($videoItem->title, $videoItem->title_en) }}"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        allowfullscreen>
                                                    </iframe>
                                                </div>
                                            @endif
                                        @endif


                                        <div class="portfolio-info ">
                                            <h4><strong>{{ translate($videoItem->title, $videoItem->title_en) }}</strong>
                                            </h4>
                                            {{-- <p>{{ translate($videoItem->sub_title, $videoItem->sub_title_en) }}</p> --}}

                                            @php
                                                $titleHtml =
                                                    "<div style='text-align: center;'>
                                                                  <strong>" .
                                                    e(translate($videoItem->title, $videoItem->title_en)) .
                                                    "</strong><br>" .
                                                    e(translate($videoItem->sub_title, $videoItem->sub_title_en)) .
                                                    "<br><span style='font-size: 14px;'>" .
                                                    e(translate($videoItem->description, $videoItem->description_en)) .
                                                    "</span>
                                                    </div>";
                                            @endphp

                                            @if (!empty($videoItem->video))
                                                <a href="{{ asset('storage/' . $videoItem->video) }}"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"
                                                    data-title="{{ $titleHtml }}">
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
		<path fill="#000" d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10s10-4.486 10-10S17.514 2 12 2m0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8s8 3.589 8 8s-3.589 8-8 8" />
		<path fill="#000" d="m9 17l8-5l-8-5z" />
	</svg>
                                                </a>
                                            @elseif (!empty($youtubeId))
                                                <a href="https://www.youtube.com/watch?v={{ $youtubeId }}"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"
                                                    data-title="{{ $titleHtml }}">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
		<path fill="#000" d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10s10-4.486 10-10S17.514 2 12 2m0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8s8 3.589 8 8s-3.589 8-8 8" />
		<path fill="#000" d="m9 17l8-5l-8-5z" />
	</svg>
                                                </a>
                                            @endif
                                        </div>


                                    </div>

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
<script>
       let lightbox = GLightbox({
        selector: '.portfolio-lightbox'
    });
</script>
@endpush
