@extends('frontend.layout.partials.master')
@push('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Project Area</li>
            </ol>
            <h2>{{translate('প্রকল্প এলাকা','Project Area')}}</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->
    <section class="inner-page">
        <div class="container">
            @foreach ($zone as $zone)
                <div class="text">
                    {!! translate($zone->description,$zone->description_en) !!}
                </div>
                @if ($zone->link)
                    <div class="row">
                        @if ($zone->link)
                            <div class="col col-md-6">
                                <iframe width="100%" height="430px"
                                    src="{{ $zone->link }}"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        @endif
                        <!-- Show image only if it exists -->
                        @if ($zone->image && !$zone->image_title)
                            <div class="col col-md-6">
                                <img class="figure-img img-fluid rounded"
                                     src="{{ asset('storage/' . $zone->image) }}"
                                     alt="Zone Image"
                                     width="100%">
                            </div>
                        @endif
                    </div>
                @endif
                <!-- If both image and image title exist, show both -->
                @if ($zone->image && $zone->image_title)
                    <div class="text-center mt-3">
                        <figure class="figure">
                            <img class="figure-img img-fluid rounded"
                                 src="{{ asset('storage/' . $zone->image) }}"
                                 alt="Zone Image"
                                 width="100%">
                            <figcaption class=" ">
                                {!!translate($zone->image_title,$zone->image_title_en)  !!}
                            </figcaption>
                        </figure>
                    </div>
                @endif
                <!-- If only image title exists, show only the title -->
                @if (!$zone->image && $zone->image_title)
                    <div class="text-center mt-3">
                        <figure class="figure">
                            <figcaption class=" ">
                                {!! translate($zone->image_title,$zone->image_title_en) !!}
                            </figcaption>
                        </figure>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
</main>
@endpush
