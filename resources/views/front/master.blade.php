<!doctype html>
<html class="no-js" lang="zxx">
   @include('front.head')

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('frontend/assets/img/logo/logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    @include('front.header')
    <main>

        <!-- slider Area Start-->
       @include('front.slider')
        <!-- slider Area End-->
        <!-- Our Services Start -->
        @include('front.services')
        <!-- Our Services End -->
        <!-- Online CV Area Start -->
         @include('front.cv')
        <!-- Online CV Area End-->
        <!-- Featured_job_start -->
       @include('front.jobs')
        <!-- Featured_job_end -->
        <!-- How  Apply Process Start-->
        @include('front.apply')
        <!-- How  Apply Process End-->
        <!-- Testimonial Start -->
        @include('front.testimonial')
        <!-- Testimonial End -->
         <!-- Support Company Start-->
        @include('front.company')
        <!-- Support Company End-->
        <!-- Blog Area Start -->
        @include('front.blog')
        <!-- Blog Area End -->

    </main>
    @include('front.footer')

  <!-- JS here -->

		@include('front.script')

    </body>
</html>
