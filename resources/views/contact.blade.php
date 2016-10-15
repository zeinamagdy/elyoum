@extends('layouts.app')
@section('content')
 <!-------- image SECTION -------------->

    <section class="contact-img-sec">
      <i class="fa fa-book"></i>
      <h3>تواصل معنا</h3>
      <div class="overlay"></div>
    </section>

    <!-- contact-sec-four -->
    <section class="contact-sec-4">
        <div class="container">
          <div class="row">
            
            <div class="col-xs-12 col-md-7">
              <form action="{{ route('messages.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <input type="text" class="form-control" id="user_name-field" name="user_name"  placeholder="الاسم">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="telephon-field" name="telephon" placeholder="رقم الهاتف">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control"id="email-field" name="email" placeholder="البريد">
                </div>
                <div class="form-group">
                  <textarea class="form-control" id="body-field" rows="3" name="body" placeholder="رسالتك"></textarea>
                </div>
                <button type="submit" class="btn">ارسال</button>
              </form>
            </div>
            <div class="col-xs-12 col-md-5">
              <p>
                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنصهناك حقيقة مثبتة منذ زمن طويل
              </p>

              <h4>اتصل</h4>
              <h5><i class="fa fa-phone"></i><span>موبايل : </span> 0123456789</h5>
              <h5><i class="fa fa-fax"></i><span>فاكس : </span> 0123456789</h5>
              <h5><i class="fa fa-envelope"></i><span>ايميل : </span> info@example.com</h5>
              <h4>العنوان</h4>
              <h5><i class="fa fa-map-marker"></i><span>العنوان : </span> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز</h5>
            </div>
          </div>
        </div>

    </section>

    <div class="container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14672117.97464661!2d45.661758989069035!3d26.129584886858677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2z2KfZhNiz2LnZiNiv2YrYqQ!5e0!3m2!1sar!2seg!4v1458825603172" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
@endsection