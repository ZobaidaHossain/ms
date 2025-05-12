@extends('frontend.layout.partials.master')
@push('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <h2>কার্যক্রম পরিচালনাকারী প্রতিষ্ঠানসমুহ</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->
    <section class="inner-page">
        <div class="container">
            @foreach ($organizations as $organization)
                <div class="text">
                    <h5 style="font-weight: bold;">{{translate($organization->title,$organization->title_en)  }}:</h5>
                    <p>{{translate($organization->description,$organization->description_en)  }}</p>
                    <div class="row mb-4">
                        @foreach ($organization->photos as $photo)
                            <div class="col-md-6 mb-4">
                                <img style="width: 100%; border: 1px solid gray;" src="{{ asset('storage/' . $photo->image) }}" alt="{{ translate($organization->title,$organization->title_en) }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</main>
@endpush
