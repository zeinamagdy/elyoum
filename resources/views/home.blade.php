@extends('layouts.app')
@section('head')
    <link href="css/colorbox.css" rel="stylesheet">
    <script src="js/jquery.colorbox.min.js"></script>
    <script>
        $(document).ready(function(){
        //Examples of how to assign the Colorbox event to elements
            $(".group1").colorbox({rel:'group1'});
            $(".callbacks").colorbox({
                onOpen:function(){ alert('onOpen: colorbox is about to open'); },
                onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
                onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
                onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
                onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
            });

            $('.non-retina').colorbox({rel:'group5', transition:'none'})
            $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
            //Example of preserving a JavaScript event for inline calls.
            $("#click").click(function(){
                $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                    return false;
            });
        });
    </script>
@endsection
@section('content')
 <!-- slider section -->
    <div class="carousel slide slide-section" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/slide1.jpg" alt="">
        </div>
        <div class="item">
          <img src="images/slide1.jpg" alt="">
        </div>
      </div>
    </div>

    <!-- welcome section -->
    <section class="welcome">
      <div class="container">
        <div class="tit center">
          <h3>أهلا ومرحبا بكم فى روضة ومدرسة : سمو الرسالة</h3>
          <p>
            روضة ومدرسة ( سـمو الرسـاله للعالمية) ترحب بكم وباطفالكم،،
            <br><br>
            ولأن ابنائكم يقضون في مدارسنا (سمو الرسـاله) نصف يومهم لذا فهم يستحقون التميز في كل شيء .
            التميز في نخبة من المعلمين والمؤهلين على اعلى وارقى المستويات والتمييز في البيئه المثاليه لأطفالكم
            فسعينا بكل طاقتنا لتوفير الجو التربوي الآمن والبيئة التعليمية المناسبه والتي تضمن أداء الأمانة و (سـمـو الرسـاله)
          </p>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <div class="block">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-eye"></i>
                  <h3>الرؤيه</h3>
                </div>
                <div class="col-xs-9">
                  <p>
                    الريادة في تعليم عالمي مميزمواكباً المستقبل
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
            <div class="block">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-book"></i>
                  <h3>الرساله</h3>
                </div>
                <div class="col-xs-9">
                  <p>
                     تقديم خدمات تعليميه بمعاييرعالميه مميزه في بيئه محفزه ، ممتعه .
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- feat section -->
    <section class="feat center">
      <div class="container">
        <h3>فــما يــميزنا</h3>
        <p>

          المناهج الامريكيه حيث يشغل برنامج اللغه الانجليزيه مساحه كبيره من يوم الطفل
          <br>
          مختبرات ومعامل العلوم فصول ذكيه
          <br>
          الصالات الرياضيه المجهزه لممارسه جميع الانشطه الرياضيه
          <br>
          غرفة طبيبه مكتبه مجهزه ببرامج سمعيه وبصريه
          <br>
          صالات العاب داخليه وخارجيه.

        </p>
      </div>
    </section>

    <!-- gallary section -->
    <section class="galary">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-3">
            <div class="img-container">
              <a class="group1" href="images/1.jpg" title="Me and my grandfather on the Ohoopee.">
                <img src="images/1.jpg" class="img-responsive" alt="" />
              </a>
            </div>
          </div>
          <div class="col-xs-12 col-md-3">
            <div class="img-container">
              <a class="group1" href="images/2.jpg" title="Me and my grandfather on the Ohoopee.">
                <img src="images/2.jpg" class="img-responsive" alt="" />
              </a>
            </div>
          </div>
          <div class="col-xs-12 col-md-3">
            <div class="img-container">
              <a class="group1" href="images/3.jpg" title="Me and my grandfather on the Ohoopee.">
                <img src="images/3.jpg" class="img-responsive" alt="" />
              </a>
            </div>
          </div>
          <div class="col-xs-12 col-md-3">
            <div class="img-container">
              <a class="group1" href="images/4.jpg" title="Me and my grandfather on the Ohoopee.">
                <img src="images/4.jpg" class="img-responsive" alt="" />
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="center">
        <a href="#" class="btn">اطلع على الكل</a>
      </div>
    </section>

@endsection