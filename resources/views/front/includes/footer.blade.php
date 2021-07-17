<!-- Start footer -->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 res">
        <h5>عن الموقع</h5>
        <p class="lead">spoy موقع مغربي للبحث عن المركات و المحلات التجارية، كما أنها تتيح لصاحب المحل عرض سلعته ومعلومات عن نشاطه التجاري ليتمكن زبنائه العثور عليه بسهولة.</p>
      </div>
      <div class="col-md-3 col-sm-6 res">
        <h5>الصفحات</h5>
        <ul class="list-unstyled">
        @foreach($pages as $page)
        <li><a href="{{route('front.pages', $page->slug)}}">{{$page->page_name}}</a></li>
        @endforeach
          <li><a href="{{route('front.contact')}}">إتصل بنا</a></li>
        </ul>  
      </div>
      <div class="col-md-3 col-sm-6 res">
        <h5>مواقع التواصل الإجتماعي</h5>
        <ul class="list-unstyled">
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#"> Youtube</a></li>
          <li><a href="#"></i>GitHub</a></li>
        </ul>  
      </div>
    </div>
    <dvi class="navbar-light col-md-12">
    <div class="row">
    <div class="col-md-6 col-xs-12"><a class="spoy" href="{{route('front.index')}}">Spoy</a></div>
    <div class="col-md-6 col-xs-12 copyrghit">جميع الحقوق محفوظة © Spoy <?php echo date('Y'); ?></div>
  </div>
  </dvi>
  </div>
</div>
<!-- start scroll top -->