@extends('frontend.layout.partials.master')
@push('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
        </ol>
        <h2>{{translate(' সাপোর্ট করুন','Support Us')}}
           </h2>
      </div>
    </section>
    <section class="inner-page pt-4">
      <div class="container">
        <div class="text">
           {!!translate($support->description,$support->description_en)!!}
          <div class="row mt-4 mb-4">
            <br> <br>
            <div class="col-md-12 px-0  mt-4 mb-2">
              <h3 style="font-weight: bold; text-align: center;background: #031940;color: white;padding: 10px 0px;">
                {{translate('আর্থিক অনুদান প্রেরণ করুন নিচের ব্যাংক একাউন্টে।','Please send financial donations to the bank account below.')}}
</h3>
            </div>

            @foreach ($help as $index => $help)
              <div class="col-md-6 mb-4">
                <div style="font-size: 25px; border: 2px dotted #0f65ff; padding: 10px;
                    background: {{ $loop->index % 2 === 0 ? 'linear-gradient(337deg, #a0ff95, transparent)' : 'linear-gradient(45deg, #a0ff95, transparent)' }};">
                  {{translate($help->foundation_name,$help->foundation_name_en)  }}<br>
                 {{translate('হিসাব নম্বর','Account number')}} - <strong>{{ translate($help->account_number,$help->account_number_en) }}</strong> <br>
                  {{ translate($help->bank_name ,$help->bank_name_en)}}<br>
                  {{ translate($help->branch,$help->branch_en) }}।
                </div>
             </div>
            @endforeach
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <img src="{{ asset('storage/' . $support->image) }}" class="img-fluid" alt="" alt="" width="100%">
          </div>
        </div>
      </div>
    </section>
  </main>
@endpush
