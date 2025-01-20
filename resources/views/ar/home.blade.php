@extends('master')
@section('content')


<style>
 
 @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap');

h1,p {
  font-family: 'Tajawal', sans-serif;
    direction: rtl;
    text-align: right;
}

  .styled-div {
    background-color: #f8f9fa; 
    padding: 2rem;
    border-radius: .3rem;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,.15); 
  }
  .styled-div h1 {
    margin-bottom: 1rem;
  }
</style>


<div  class="container ">

  <div lang="ar" dir="rtl" class="container mt-5">
    <div class="styled-div">
      <h1>مرحباً بكم في مؤسسة التكافل الاجتماعي للمصريين في هولندا</h1>

        <p>
            في مؤسسة التكافل الاجتماعي للمصريين في هولندا، نقف بجانب الجالية المسلمة في أوقاتهم العصيبة. نقدم الدعم والإرشاد في تنظيم الجنازات الإسلامية، من أول الإبلاغ عن الوفاة وحتى الدفن النهائي. تشمل خدماتنا، على سبيل المثال، تنظيم:
            <ul>
                <li><span class="fw-bold">الغسل</span></li>
                <li><span class="fw-bold">الكفن</span></li>
                <li><span class="fw-bold">صلاة الجنازة</span></li>
                <li><span class="fw-bold">النقل والدفن في مقبرة إسلامية</span></li>
            </ul>
            نحن نتولى تنظيم الجنازات الإسلامية للمسلمين من أصول مصرية، مع إمكانية اختيار الدفن في كل من هولندا ومصر. يمكن للمسلمين من خلفيات أخرى التواصل معنا لإجراء مراسم الدفن في مقبرة إسلامية في هولندا.
        </p>
    </div>
</div>



<div class="row row-cols-1 row-cols-lg-2">

<div class="col mt-5">
   <div class="embed-responsive embed-responsive-16by9 " style="width:100%;height:100%">

   <video id="video" width="100%"  height="%100" class="embed-responsive-item" autoplay muted playsinline loop controls>
    <source src="{{ asset('img/video.mp4') }}" type="video/mp4">
</video>


         
          


</div> 
</div>

<div class="col mt-5">
  <img style="width:100%; height:100%" src="{{ asset('img/ayet.PNG') }}" alt="" class="img-fluid">  
</div>
    
</div>





</div>

</div>

<script>
  const video = document.getElementById('video');

  video.addEventListener('loadeddata', function() { 
    video.play().then(() => { 
      setTimeout(function() {
        video.pause();
      }, 700); 
    }).catch(error => { 
      console.error("Video oynatılamadı:", error);
    });
  });

  video.addEventListener('ended', function() {
      
      console.log("Video bitti.");
  });
</script>


@endsection