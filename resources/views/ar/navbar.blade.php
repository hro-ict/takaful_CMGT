
<div class="container">
          
<nav class="navbar navbar-expand-sm bg-warning  justify-content-center fixed-top  ">
  <div class="container-fluid ">
    <a class="navbar-brand fw-bold text-white" href="javascript:void(0)">
      <img width="120px" src="{{asset('img\test.png')}}" alt="logo van stichting" aria-label="logo van stichting">
    
    
    </a>
    <button class="navbar-toggler" type="button" aria-label="toggle button"  data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link fw-bold text-white" href="/home">الصفحة الرئيسية</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold text-white" href="/kosten">الأسعار</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold text-white" href="/register">اشتراك</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fw-bold text-white" href="#" role="button" data-bs-toggle="dropdown">معلومات عنا</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/wie_zijn_we">من نحن؟</a></li>
            <li><a class="dropdown-item" href="/algemene_voorwaarden">الأحكام والشروط</a></li>
            <li><a class="dropdown-item" href="/privacy_beleid">سياسة الخصوصية</a></li>
            <li><a class="dropdown-item" href="/bestuursleden">أعضاء مجلس الإدارة</a>
            </li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bold text-white" href="#" role="button" data-bs-toggle="dropdown">معلومات</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/veelgesteldevragen">أسئلة مكررة</a></li>
              <li><a class="dropdown-item" href="/begraafplaatsen_in_nederland">مقابر في هولندا</a></li>
              
              
            </ul>
          </li>
		  
		       <li class="nav-item">
            <a class="nav-link fw-bold text-white" href="/nieuws">أخبار</a>
          </li> 

          <li class="nav-item">
            <a class="nav-link fw-bold text-white" href="/contact">اتصال</a>
          </li> 
        
       
          <li class="nav-item dropdown fw-bold text-white lead">
            <a class="nav-link  fw-bold text-white" href="#" role="button" data-bs-toggle="dropdown"><img alt="verander taal" aria-label="verander taal" height="40"  src="{{asset('img/change_language.png')}}"></a>
            <ul class="dropdown-menu">
              <li>
                  
               <a id="nl" class="nav-link fw-bold text-white change_language" href="/change_language/nl/{{Route::current()->getName()}}"><img height="40" src="{{asset('img/nl.png')}}"><span class="text-black ms-3">Nederlands</span></a>
              
              </li>
              <li>
                 <a id="ar" class="nav-link fw-bold text-white  change_language " href="/change_language/ar/{{Route::current()->getName()}}"><img height="40" src="{{asset('img/arabic.png')}}"><span class="text-black ms-3">العربية</span></a>
                  
              </li>
              </li>
        



      </ul>
    </div>
    

    
  </div>
</nav>

<div class="container mt-5 py-5">
 <div class="row justify-content-center">
            <div class="col-5">
<img src="image1.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-5">
<img src="image2.jpg" alt="" class="img-fluid">                    
            </div>
 </div>
</div>

<script>

    String.prototype.format = function() {
        var newStr = this, i = 0;
        while (/%s/.test(newStr))
            newStr = newStr.replace("%s", arguments[i++])
    
        return newStr;
    }
    // $(".change_language").click(function(e){
    //     e.preventDefault();
    //     lang= $(this).attr("id");
    //     url= document.URL.split("/").pop();
       
       
       
    //     if (url.length==0){
    //         url+=""
    //     }
    //     else {
    //         url=url
    //     }
        
    //      alert(lang);
    //      alert(url);
        
    //     $.get("/change_language/"+lang, function(response){
    //       location.href= "/"+url 
    //     })
    // })
</script>
