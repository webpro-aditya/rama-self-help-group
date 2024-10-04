@extends('layouts.user_type.guest')

@section('page_title', __('Events'))

@section('content')
  <!-- Start main-content -->
  <div class="main-content-area">
   <h2 class="text-center">Events Gallery</h2>
  <div class="dnWaterfall">
    <img lazy-src="{{ asset('front/images/event/IMG_5293.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5299.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5310.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5315.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5326.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5327.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5329.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5332.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5334.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5337.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5339.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5346.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5354.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5355.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5358.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5373.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5398.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5406.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5654.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5658.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5664.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5669.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5670.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5680.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5681.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5714.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5775.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5783.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5910.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5917.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5943.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5964.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/DSC_4984.jpg') }}" class="waterfall-img" />
    <!-- <img lazy-src="{{ asset('front/images/event/IMG_5985.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5989.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_5992.jpg') }}" class="waterfall-img" /> -->
    <img lazy-src="{{ asset('front/images/event/IMG_3702.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_3714.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_3716.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_3745.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_3762.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_3766.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_3777.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_3815.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_3921.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_3963.jpg') }}" class="waterfall-img" />
    <img lazy-src="{{ asset('front/images/event/IMG_4000.jpg') }}" class="waterfall-img" /> 
    
  </div>
</section>

@endsection

@section('front-footer')
<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
        crossorigin="anonymous">
</script>
<script src="{{ asset('front/js/dnWaterfall.js') }}"></script>
<script>
  $(function(){

$(".dnWaterfall").dnWaterfall();

});
</script>
@endsection