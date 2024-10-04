<!-- Footer -->
<footer id="footer" class="footer bg-img-center-bottom bg-img-cover" data-tm-bg-img="{{ asset('front/images//footer-bg.jpg') }}">
    <div class="footer-widget-area pt-120">
      <div class="container pb-40">
        <div class="row">
          <div class="col-md-12 col-lg-3">
            <div class="tm-widget-contact-info contact-info-style1">
              <div class="thumb" data-tm-margin-bottom="48">
                <img alt="Logo" width="200" src="{{ asset('front/img/logo.png') }}">
              </div>
              <p>Rama Selfhelp Group is dedicated to Bangles. We work with skilled artisans and developed unique designs.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="widget widget_nav_menu ml-25">
              <h4 class="widget-title">Links</h4>
              <div class="menu-footer-page-list">
                <ul id="footer-page-list" class="menu">
                  <li><a href="#">About Us</a></li>
                  <li><a href="{{ route('front.management') }}">Management</a></li>
                  <li><a href="{{ route('front.products') }}">Products</a></li>
                  <li><a href="{{ route('front.events') }}">Events</a></li>
                  <li><a href="{{ route('front.contact') }}">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="widget">
              <h4 class="widget-title mb-40">Latest News</h4>
              <div class="latest-posts pt-2">
                <article class="post clearfix pb-0 mb-40">
                  <a class="post-thumb" href="#"><img src="{{ asset('front/images//banner/banner-1.jpg') }}" alt="Image"></a>
                  <div class="post-right">
                    <div class="post-date">
                      <span class="entry-date text-theme-colored2 pt-0 text-uppercase mb-10">Jan 22 - 2022</span>
                    </div>
                    <p class="post-title m-0"><a href="#">Seminar on developing customer oriented approach</a></p>
                  </div>
                </article>
                <article class="post clearfix pb-0">
                  <a class="post-thumb" href="#"><img src="{{ asset('front/images//banner/banner-2.jpg') }}" alt="Image"></a>
                  <div class="post-right">
                    <div class="post-date">
                      <span class="entry-date text-theme-colored2 pt-0 text-uppercase mb-10">Jan 22 - 2022</span>
                    </div>
                    <p class="post-title m-0"><a href="#">Seminar on How to market the products</a></p>
                  </div>
                </article>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-3">
            <div class="widget contact-info contact-info-style1">
              <h4 class="widget-title mb-40">Newsletter</h4>
              <!-- Mailchimp Subscription Form-->
              <form id="mailchimp-subscription-form10" class="form-newsletter">
                <div class="d-grid">
                  <input type="email" id="mce-EMAIL2" class="form-control font-size-14" placeholder="Email address" name="EMAIL" value="" data-tm-bg-color="#fff" data-tm-height="73px">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-theme-colored1 text-white font-size-14" data-tm-height="73px">Subscribe</button>
                  </div>
                </div>
              </form>
              <!-- Mailchimp Subscription Form Validation-->
              <script>
                (function($) {
                  $('#mailchimp-subscription-form10').ajaxChimp({
                    callback: mailChimpCallBack,
                    url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                  });
                  function mailChimpCallBack(resp) {
                    // Hide any previous response text
                    var $mailchimpform = $('#mailchimp-subscription-form10'),
                      $response = '';
                    $mailchimpform.children(".alert").remove();
                    if (resp.result === 'success') {
                      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                    } else if (resp.result === 'error') {
                      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                    }
                    $mailchimpform.prepend($response);
                  }
                })(jQuery);
              </script>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="footer-bottom-style1">
                <div class="footer-paragraph font-size-15">© Copyright 2022 by ramaselfhelpgroup.org</div>
                <div class="widget widget-social-list-custom clearfix mb-0">
                  <ul class="styled-icons icon-dark icon-circled icon-hover-theme-colored1">
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->