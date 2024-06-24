<footer>
  <div class="footer-area vfx-item-ptb">
    <div class="footer-wrapper">
      <div class="container-fluid" >
        <div class="row">
          <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 mb-15">
              <div class="footer-bottom">
                <div class="footer-links">
                  <ul>
                    @foreach(\App\Pages::where('status','1')->orderBy('page_order')->get() as $page_data)
                    <li><a href="{{ URL::to('page/'.$page_data->page_slug) }}"
                        title="{{$page_data->page_title}}">{{$page_data->page_title}}</a></li>
                    @endforeach

                  </ul>
                </div>
              </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 mt-15">
            <div class="footer-bottom">
              <div class="copyright-text text-center">
                <p>{{stripslashes(getcong('site_copyright'))}}</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mb-15">
            <div class="col-lg-5 col-md-3 col-sm-12 col-xs-12">
              <div class="single-footer">
                <div class="social-links">
                  <ul>
                    <li><a href="{{stripslashes(getcong('footer_fb_link'))}}" title="facebook"><i
                          class="ion-social-facebook"></i></a></li>
                    <li><a href="{{stripslashes(getcong('footer_twitter_link'))}}" title="twitter"><i
                          class="ion-social-twitter"></i></a></li>
                    <li><a href="{{stripslashes(getcong('footer_instagram_link'))}}" title="instagram"><i
                          class="ion-social-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>


          </div>
          </div>
        </div>
      </div>
      <!-- Start Scroll Top Area -->
      <div class="scroll-top">
        <div class="scroll-icon"> <i class="fa fa-angle-up"></i> </div>
      </div>
      <!-- End Scroll Top Area -->
</footer>