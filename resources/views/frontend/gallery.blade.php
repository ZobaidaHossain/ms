@extends('frontend.layout.partials.master')
@push('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>Gallery</li>
        </ol>
        <h2>{{translate('ফটোগ্যালারি','Gallery')}}</h2>
      </div>
    </section><!-- End Breadcrumbs -->
    <div class="container">
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">{{ translate('সকল', 'All') }}</li>
                            <li data-filter=".filter-প্রশিক্ষণ">{{ translate('প্রশিক্ষণ', 'Training') }}</li>
                            <li data-filter=".filter-জনসচেতনতামূলক">{{ translate('জনসচেতনতামূলক', 'Public Awareness') }}</li>
                            <li data-filter=".filter-আর্থিক">{{ translate('আর্থিক সহায়তা', 'Financial Assistance') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($gallery as $galleryItem)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $galleryItem->category }}">
                            <img src="{{ asset('storage/' . $galleryItem->image) }}" class="img-fluid" alt="{{ translate($galleryItem->title, $galleryItem->title_en) }}">
                            <div class="portfolio-info">
                                <h4>{{ translate($galleryItem->title, $galleryItem->title_en) }}</h4>
                                <p>{{ translate($galleryItem->sub_title, $galleryItem->sub_title_en) }}</p>
                                <a href="{{ asset('storage/' . $galleryItem->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ translate($galleryItem->description, $galleryItem->description_en) }}"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
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
        const filterButtons = document.querySelectorAll("#portfolio-flters li");
        const portfolioItems = document.querySelectorAll(".portfolio-item");

        filterButtons.forEach((btn) => {
            btn.addEventListener("click", () => {
                // Remove active class from all buttons
                filterButtons.forEach((button) => button.classList.remove("filter-active"));
                btn.classList.add("filter-active");

                const filter = btn.getAttribute("data-filter");

                // Show/Hide portfolio items based on filter
                portfolioItems.forEach((item) => {
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
