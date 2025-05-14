@extends('frontend.layout.partials.master')
@push('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="  carousel slide carousel-fade " data-bs-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner " role="listbox">
                @foreach ($sliders as $slider)
                    <div class=" carousel-item {{ $loop->first ? 'active' : '' }} img-fluid"
                        style="background-image: url('{{ asset('storage/' . $slider->image) }}');">
                        <div class="carousel-container">
                            <div class="container">

                                <h2 class="animate__animated animate__fadeInDown">
                                    <span>{{ translate($slider->title, $slider->title_en) }}</span>
                                </h2>
                                <p style="font-size:20px;"class="animate__animated animate__fadeInUp">
                                    {{ translate($slider->sub_title, $slider->sub_title_en) }}</p>
                                <a href="#about"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">{{ translate('আরো জানুন', 'Learn More') }}
                                    <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i> </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title pb-0">
                    <h2>{{ translate('মুসলিম আলী শামসুন নাহার ফাউন্ডেশন', 'Muslim Ali Shamsun Nahar Foundation') }} </h2>
                </div>

                <div class="row content">
                    <div class="col-lg-12">
                        {!! translate($introduction->aboutus, $introduction->aboutus_en) !!}
                    </div>
                    <div class="pt-4 mt-4 col-lg-12 pt-lg-0">
                        @foreach ($founders as $founder)
                            <span class="fw-bold fs-4">{{ translate($founder->title, $founder->title_en) }}</span> <br>
                            <div class="row">
                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <a href="index.html#contact">
                                        <img loading="lazy" class="img-thumbnail" style="width: 100%;"
                                            src="{{ asset('storage/' . $founder->image) }}" alt="chairman_mina_parvin"
                                            width="200px"></a>
                                </div>
                                <div class="col-xs-10 col-sm-10 col-md-10">
                                    <p style="text-align: justify;">
                                        {!! translate($founder->description, $founder->description_en) !!}
                                    </p>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->
        <!-- ======= Background Section ======= -->
        <section id="background" class="background">
            <div class="container" data-aos="fade-up">
                <div class="section-title pb-0">
                    {{-- <h2>{{ $background->sub_title }}</h2>
                    <p>{{ $background->title }} </p> --}}
                    <h2>{{ translate('যাদের স্মরণে এই ফাউন্ডেশন', 'In whose memory this foundation is.') }}</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12" data-aos="zoom-in" data-aos-delay="100">
                        {{-- <p style="text-align: justify;">
                            {{ $background->description }}</p> --}}
                        {!! translate($introduction->memory, $introduction->memory_en) !!}
                    </div>
                </div>
                @foreach ($bgMemories as $memory)
                    <div class="row" data-aos="zoom-in" data-aos-delay="200">
                        <div class="col-md-2">
                            <img loading="lazy" class="img-fluid img-thumbnail"
                                src="{{ asset('storage/' . $memory->image) }}" alt="muslim_ali">
                        </div>
                        <div class="col-md-10">
                            <p style="text-align: justify;">
                                {!! translate($memory->description, $memory->description_en) !!}
                            </p>
                        </div>
                    </div>

                    <br>
                @endforeach
                <a href="{{ route('background') }}" target="_blank"class="btn btn-primary" data-aos="fade-up"
                    data-aos-delay="500">
                    <img loading="lazy" class="img-responsive" src="{{ asset('frontend/assets/img/icons8-info-64.png') }}"
                        width="20px" alt="">
                    &nbsp;
                    {{ translate('আরো জানুন', 'Learn More') }} &nbsp; </a>
            </div>
        </section><!-- End Services Section -->
        {{-- donation section --}}

        <div class="container mt-5 position-relative text-center notice-section notice" style="margin-bottom:7rem;">

            <!-- Background Image -->
            <img src="{{ asset('assets/img/Asset 14@4x.png') }}" alt="Notice Background">
            <div class="position-absolute translate-middle important_notice">
                {{-- <h1 class="fw-bold " style="">{{ translate('সাপোর্ট করুন', 'Support Us') }}</h1> --}}
                <h1 class="fw-bold " style="">{{ translate($donation->title, $donation->title_en) }}</h1>

            </div>
            <!-- Text Overlay -->
            <div class="position-absolute  translate-middle notice_description">

                {{-- <p style=""class="des_one ">{{ translate('"গ্রামীণ অসহায়, দরিদ্র ও সুবিধাবঞ্চিত মেয়েদের আত্মকর্মসংস্থানে সাপোর্ট করুন।"', '"Support rural helpless, poor and underprivileged women in self-employment."') }}</p> --}}
                <p style=""class="des_one ">{{ translate($donation->description, $donation->description_en) }}</p>
                <p class="des_two" style="">{{ translate($donation->account_number, $donation->account_number_en) }}
                </p>
                <p class="des_three"style="">{{ translate($donation->branch, $donation->branch_en) }}</p>
                {{-- <p class="des_two" style="">{{translate('হিসাব নম্বর- ০২০০০১৪০৪৮৫৬১','Account Number- 0200014048561')}}</p>
     <p class="des_three"style="">{{translate('অগ্রণী ব্যাংক পিএলসি, শান্তিনগর শাখা, ঢাকা','Agrani Bank PLC, Shantinagar Branch, Dhaka')}}</p> --}}
            </div>


        </div>
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-4 align-items-stretch video-box"
                        style="background-image: url('{{ asset('storage/' . $heading->image) }}');" data-aos="zoom-in"
                        data-aos-delay="100">

                        <a href="{{ $heading->link }}" class="mb-4 venobox play-btn" data-vbtype="video"
                            data-autoplay="true"></a>
                    </div>

                    <div class="col-md-8 d-flex flex-column justify-content-center align-items-stretch">
                        <div class="px-2 content">
                            <h3>{{ translate($heading->title, $heading->title_en) }}</h3>
                            <p>
                                {{ translate($heading->subtitle, $heading->subtitle_en) }}
                            </p>
                        </div>
                        <div class="px-2 accordion-list">
                            <ul class="accordion-list">
                                @foreach ($goal as $key => $goal)
                                    <!-- Use $key to ensure unique IDs -->
                                    <li style="background: #e7ffe6;">
                                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-{{ $key }}"
                                            class="collapsed">
                                            <span>{{ translate($goal->serial, $goal->serial_en) }}
                                                {{ translate($goal->title, $goal->title_en) }}</span>
                                            <i class="bx bx-chevron-down icon-show"></i>
                                            <i class="bx bx-chevron-up icon-close"></i>
                                        </a>
                                        <div id="accordion-list-{{ $key }}" class="collapse"
                                            data-bs-parent=".accordion-list">
                                            <p>
                                                {{ translate($goal->subtitle, $goal->subtitle_en) }}
                                            </p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <a href="{{ route('objective') }}" class="btn btn-xl"
                                style="background-color: #f7e1e1; color:#4400ff;">
                                <img loading="lazy" class="img-responsive" src="/assets/img/icons8-info-64.png"
                                    width="20px" alt="">
                                &nbsp;
                                {{ translate('লক্ষ্য ও উদ্দেশ্যাবলী', 'Goals and objectives') }} &nbsp; </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <!-- Team 1 - Bootstrap Brain Component -->
            <section class="bg-white py-3 py-md-5 py-xl-8">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                            <!-- <h2 class="mb-4 display-5 text-center">উপদেষ্টামন্ডলী</h2> -->
                            <p class="text-secondary mb-5 text-center lead fs-4">
                                {{ translate('যাদের দিকনির্দেশনায় ফাউন্ডেশন পরিচালিত হচ্ছে', 'Under whose guidance the foundation is being run') }}
                            </p>
                            <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                        </div>
                    </div>
                </div>
                <div class="container overflow-hidden">
                    <div class="row gy-4 gy-lg-0 gx-xxl-5">
                        @foreach ($teams as $team)
                            <div class="col-12 col-md-6 col-lg-3">
                                <div
                                    class="card team-card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                                    <div class="card-body p-0">
                                        <figure class="m-0 p-0">
                                            <img class="img-fluid team-img" loading="lazy"
                                                src="{{ asset('storage/' . $team->image) }}"
                                                alt="{{ translate($team->name, $team->name_en) }}">
                                            <figcaption class="m-0 p-4">
                                                <h4 class="mb-1">{{ translate($team->name, $team->name_en) }}</h4>
                                                <p class="text-secondary mb-0">
                                                    {{ translate($team->designation, $team->designation_en) }}</p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
        <!-- ======= Services Section ======= -->
        <section id="service" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>{{ translate('আমরা এসডিজি অর্জনের দিকে কাজ করছি', 'We are working towards achieving the SDGs.') }}
                    </h2>
                    <p> {{ translate('সেবাসমূহ', 'Services') }} </p>
                </div>
                <div class="row">
                    @foreach ($services as $service)
                        <div class="my-4 col-lg-4 col-md-6 d-flex flex-column align-items-stretch mt-md-0 min-vh-70"
                            data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon">
                                    <i class="{{ $service->icon_class }}"> </i>
                                </div>
                                <h4><a href="#">{{ translate($service->title, $service->title_en) }}</a></h4>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Service Section -->
        <!-- ======= Contract Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">
                <div class="text-center">
                    <h3>{{ translate($social->title, $social->title_en) }}</h3>
                    <p>
                        {{ translate($social->subtitle, $social->subtitle_en) }}
                    </p>
                    <a class="cta-btn"
                        href="{{ route('home') . '#contract' }}">{{ translate('ফোন করুন', 'Call Us') }}</a>
                </div>
            </div>
        </section><!-- End Cta Section -->
        <!-- ======= Portfolio Section ======= -->

        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>{{ translate('ফটোগ্যালারি', 'Photo Gallery') }}</h2>
                    <p>{{ translate('ফটোগ্যালারি', 'Photo Gallery') }}</p>
                </div>

                <!-- Photo Tab Menu -->
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul class="custom-tabs" id="photoTabMenu">
                            <li><a class="tab-link active" data-tab="tab-all">{{ translate('সকল', 'All') }}</a></li>
                            <li><a class="tab-link" data-tab="tab-training">{{ translate('প্রশিক্ষণ', 'Training') }}</a>
                            </li>
                            <li><a class="tab-link"
                                    data-tab="tab-awareness">{{ translate('জনসচেতনতামূলক', 'Public Awareness') }}</a></li>
                            <li><a class="tab-link"
                                    data-tab="tab-financial">{{ translate('আর্থিক সহায়তা', 'Financial Assistance') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Photo Tab Content -->
                <div id="photoTabContent" data-aos="fade-up" data-aos-delay="200">
                    <div id="tab-all" class="photo-tab-pane" style="display: block;">
                        <div class="row portfolio-container">
                            @foreach ($allGallery as $item)
                                <div class="col-lg-4 col-md-6 portfolio-item">
                                    <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid"
                                        alt="{{ translate($item->title, $item->title_en) }}">
                                    <div class="portfolio-info">
                                        <h4>{{ translate($item->title, $item->title_en) }}</h4>
                                        <p>{{ translate($item->sub_title, $item->sub_title_en) }}</p>
                                        <a href="{{ asset('storage/' . $item->image) }}" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox preview-link"
                                            title="{{ translate($item->description, $item->description_en) }}"><i
                                                class="bx bx-link"></i></a>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="tab-training" class="photo-tab-pane" style="display: none;">
                        <div class="row portfolio-container">
                            @foreach ($training as $item)
                                <div class="col-lg-4 col-md-6 portfolio-item">
                                    <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid"
                                        alt="{{ translate($item->title, $item->title_en) }}">
                                    <div class="portfolio-info">
                                        <h4>{{ translate($item->title, $item->title_en) }}</h4>
                                        <p>{{ translate($item->sub_title, $item->sub_title_en) }}</p>
                                        <a href="{{ asset('storage/' . $item->image) }}" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox preview-link"
                                            title="{{ translate($item->description, $item->description_en) }}"><i
                                                class="bx bx-link"></i></a>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="tab-awareness" class="photo-tab-pane" style="display: none;">
                        <div class="row portfolio-container">
                            @foreach ($awareness as $item)
                                <div class="col-lg-4 col-md-6 portfolio-item">
                                    <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid"
                                        alt="{{ translate($item->title, $item->title_en) }}">
                                    <div class="portfolio-info">
                                        <h4>{{ translate($item->title, $item->title_en) }}</h4>
                                        <p>{{ translate($item->sub_title, $item->sub_title_en) }}</p>
                                        <a href="{{ asset('storage/' . $item->image) }}" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox preview-link"
                                            title="{{ translate($item->description, $item->description_en) }}"><i
                                                class="bx bx-link"></i></a>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="tab-financial" class="photo-tab-pane" style="display: none;">
                        <div class="row portfolio-container">
                            @foreach ($financial as $item)
                                <div class="col-lg-4 col-md-6 portfolio-item">
                                    <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid"
                                        alt="{{ translate($item->title, $item->title_en) }}">
                                    <div class="portfolio-info">
                                        <h4>{{ translate($item->title, $item->title_en) }}</h4>
                                        <p>{{ translate($item->sub_title, $item->sub_title_en) }}</p>
                                        <a href="{{ asset('storage/' . $item->image) }}" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox preview-link"
                                            title="{{ translate($item->description, $item->description_en) }}"><i
                                                class="bx bx-link"></i></a>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="{{ route('gallery') }}" class="view_more ">{{ translate('আরো দেখুন', 'View More') }}
                        <i class="fa-solid fa-arrow-right"></i> </a>
                </div>
            </div>
        </section>

        <section id="video_portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>{{ translate('ভিডিও গ্যালারি', 'Video Gallery') }}</h2>
                    <p>{{ translate('ভিডিও গ্যালারি', 'Video Gallery') }}</p>
                </div>

                <!-- Video Tab Menu (Bootstrap) -->
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul class="nav nav-tabs" id="videoTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="all-tabs" data-bs-toggle="tab" href="#all"
                                    role="tab" aria-controls="all" aria-selected="true">
                                    {{ translate('সকল', 'All') }}
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="training-tabs" data-bs-toggle="tab" href="#training"
                                    role="tab" aria-controls="training" aria-selected="false">
                                    {{ translate('প্রশিক্ষণ', 'Training') }}
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="awareness-tabs" data-bs-toggle="tab" href="#awareness"
                                    role="tab" aria-controls="awareness" aria-selected="false">
                                    {{ translate('জনসচেতনতামূলক', 'Public Awareness') }}
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="financial-tabs" data-bs-toggle="tab" href="#financial"
                                    role="tab" aria-controls="financial" aria-selected="false">
                                    {{ translate('আর্থিক সহায়তা', 'Financial Assistance') }}
                                </a>
                            </li>

                            <!-- Add more video tabs as needed -->
                        </ul>
                    </div>
                </div>

                <!-- Video Tab Content (Bootstrap) -->
                <div class="tab-content pt-4" id="videoTabContent">
                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tabs">

                        <div class="row portfolio-container">
                            @foreach ($allGallery_Video as $videoItem)
                                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $videoItem->category }}">
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
                                                    '</strong><br>' .
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
                                                    {{-- <i class='bx bx-link'></i> --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#000"
                                                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10s10-4.486 10-10S17.514 2 12 2m0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8s8 3.589 8 8s-3.589 8-8 8" />
                                                        <path fill="#000" d="m9 17l8-5l-8-5z" />
                                                    </svg>

                                                </a>
                                            @elseif (!empty($youtubeId))
                                                <a href="https://www.youtube.com/watch?v={{ $youtubeId }}"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"
                                                    data-title="{{ $titleHtml }}">
                                                    {{-- <i class='bx bx-link'></i> --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#000"
                                                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10s10-4.486 10-10S17.514 2 12 2m0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8s8 3.589 8 8s-3.589 8-8 8" />
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
                    <div class="tab-pane fade" id="training" role="tabpanel" aria-labelledby="training-tabs">
                        <div class="row portfolio-container">
                            @foreach ($training_Video as $videoItem)
                                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $videoItem->category }}">
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
                                                    '</strong><br>' .
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
                                                    <i class='bx bx-link'></i>
                                                </a>
                                            @elseif (!empty($youtubeId))
                                                <a href="https://www.youtube.com/watch?v={{ $youtubeId }}"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"
                                                    data-title="{{ $titleHtml }}">
                                                    <i class='bx bx-link'></i>
                                                </a>
                                            @endif
                                        </div>


                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="awareness" role="tabpanel" aria-labelledby="awareness-tabs">
                        <div class="row portfolio-container">
                            @foreach ($awareness_Video as $videoItem)
                                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $videoItem->category }}">
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
                                                    '</strong><br>' .
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
                                                    <i class='bx bx-link'></i>
                                                </a>
                                            @elseif (!empty($youtubeId))
                                                <a href="https://www.youtube.com/watch?v={{ $youtubeId }}"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"
                                                    data-title="{{ $titleHtml }}">
                                                    <i class='bx bx-link'></i>
                                                </a>
                                            @endif
                                        </div>


                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="financial" role="tabpanel" aria-labelledby="financial-tabs">
                        <div class="row portfolio-container">
                            @foreach ($financial_Video as $videoItem)
                                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $videoItem->category }}">
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
                                                    '</strong><br>' .
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
                                                    <i class='bx bx-link'></i>
                                                </a>
                                            @elseif (!empty($youtubeId))
                                                <a href="https://www.youtube.com/watch?v={{ $youtubeId }}"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"
                                                    data-title="{{ $titleHtml }}">
                                                    <i class='bx bx-link'></i>
                                                </a>
                                            @endif
                                        </div>


                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="{{ route('video') }}" class="view_more ">{{ translate('আরো দেখুন', 'View More') }}
                        <i class="fa-solid fa-arrow-right"></i> </a>
                </div>
            </div>
        </section>

        <!-- Video Modal -->


        <!-- End Portfolio Section -->
        <!-- ======= Team Section ======= -->
        <section id="executive" class="team section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>{{ translate('দল', 'Team') }}</h2>
                    <p>{{ translate('আমাদের নির্বাহীগণ', 'Our Executives') }}</p>
                </div>
                <div class="row">
                    @foreach ($executive as $executive)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="member fixed-card" data-aos="zoom-in" data-aos-delay="100">
                                <img loading="lazy" src="{{ asset('storage/' . $executive->image) }}" class="img-fluid"
                                    alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>{{ translate($executive->name, $executive->name_en) }} </h4>
                                        <span>{{ translate($executive->designation, $executive->designation_en) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Team Section -->
        <!-- ======= Contact Section ======= -->
        <section id="contract" class="contact ">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>{{ translate('যোগাযোগ', 'Contact') }}</h2>
                    <p>{{ translate('যোগাযোগ করুন', 'Contact us') }}</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <p style="padding: 0px 15px;">
                                        <iframe src="{{ $contract->link }}" width="100%" height="60%"
                                            style="border:0; height: 15rem;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </p>
                                    <h3>{{ translate('আমাদের ঠিকানা', 'Our address') }}</h3>
                                    {{ translate($contract->address, $contract->address_en) }}
                                    <br>{{ translate('ই-মেইল: ', 'Email:') }}{{ $contract->email }}
                                    <br> {{ translate('মোবাইল নম্বর:', 'Mobile number:') }} {{ $contract->number_bn }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-2 info-box">
                                    <i class="bx bx-envelope"></i>
                                    <h3>{{ translate('-মেইল', 'Email:') }}</h3>
                                    <p> {{ $contract->email }} </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-2 info-box">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>{{ translate('ফোন', 'Phone') }}</h3>
                                    <p>(+880) {{ $contract->number_en }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="{{ translate('আপনার নাম', 'Your Name') }}" required>
                                </div>
                                <div class="mt-3 col-md-6 form-group mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="{{ translate('আপনার ইমেইল', 'Your Email') }}" required>
                                </div>
                            </div>
                            <div class="mt-3 form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="{{ translate('বিষয় লিখুন', 'Write Subject') }}" required>
                            </div>
                            <div class="mt-3 form-group">
                                <textarea class="form-control" name="message" rows="5"
                                    placeholder="{{ translate('মেসেজ লিখুন', 'Write Message') }}" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button
                                    type="submit">{{ translate('প্রেরণ করুন', 'Send') }}</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

        <!-- Donation Modal -->
        <!-- Donation Modal -->
        {{-- <div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 60rem; width: 100%; height: 500px;">
                <div class="modal-content position-relative">
                    <!-- Close Button -->
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"
                        aria-label="Close"></button>


                   <div class="modal-body p-4 text-center">
                <div class="mt-5 position-relative text-center notice-section notice" style="margin-bottom:7rem;">
                    <img src="{{ asset('assets/img/Asset 14@4x.png') }}" alt="Notice Background" class="img-fluid rounded mb-3">

                    <div class="position-absolute translate-middle important_notice">
                        <h1 class="fw-bold">{{ translate($donation->title, $donation->title_en) }}</h1>
                    </div>

                    <div class="position-absolute translate-middle notice_description">
                        <p class="des_one">{{ translate($donation->description, $donation->description_en) }}</p>
                        <p class="des_two">{{ translate($donation->account_number, $donation->account_number_en) }}</p>
                        <p class="des_three">{{ translate($donation->branch, $donation->branch_en) }}</p>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div> --}}

        <div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 45rem; width: 100%; height: 500px;">
                <div class="modal-content position-relative">
                    <!-- Close Button -->
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="d-flex justify-content-center align-items-center" style="height: 100%; overflow: hidden;">
                        <img src="{{ asset('storage/' . $note->image) }}" class="img-fluid" alt="Donation Image"
                            style="max-height: 100%; max-width: 100%;">
                    </div>
                </div>
            </div>
        </div>



    </main><!-- End #main -->
@endpush
@push('js')
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tabMenu = document.querySelector("#photoTabMenu");
            const tabLinks = tabMenu.querySelectorAll(".tab-link");
            const tabPanes = document.querySelectorAll(".photo-tab-pane");

            tabLinks.forEach(link => {
                link.addEventListener("click", () => {
                    // Remove active classes and hide all panes
                    tabLinks.forEach(l => l.classList.remove("active"));
                    tabPanes.forEach(p => p.style.display = "none");

                    // Activate clicked tab and show content
                    link.classList.add("active");
                    const tabId = link.getAttribute("data-tab");
                    document.getElementById(tabId).style.display = "block";
                });
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var donationModal = new bootstrap.Modal(document.getElementById('donationModal'));
            donationModal.show();
        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const videoFilterButtons = document.querySelectorAll("#video-portfolio-flters li");
            const videoPortfolioItems = document.querySelectorAll("#video_portfolio .portfolio-item");

            videoFilterButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    // Remove active class from all buttons
                    videoFilterButtons.forEach((button) => button.classList.remove(
                        "filter-active"));
                    btn.classList.add("filter-active");

                    const filter = btn.getAttribute("data-filter");

                    // Show/Hide portfolio items based on filter
                    videoPortfolioItems.forEach((item) => {
                        if (filter === "*" || item.classList.contains(filter.substring(
                                1))) {
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
