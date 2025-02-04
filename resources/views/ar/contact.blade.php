
@extends('master')
@section('content')

<section class="mb-4">

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">اتصل بنا</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">هل لديك أسئلة؟ لا تتردد في الاتصال بنا مباشرة.</p>
        
            <div class="row">
        
                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">
        
                        <!--Grid row-->
                        <div class="row">
        
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">الاسم</label>
                                </div>
                            </div>
                            <!--Grid column-->
        
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">البريد الإلكتروني</label>
                                </div>
                            </div>
                            <!--Grid column-->
        
                        </div>
                        <!--Grid row-->
        
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">موضوع</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->
        
                        <!--Grid row-->
                        <div class="row">
        
                            <!--Grid column-->
                            <div class="col-md-12">
        
                                <div class="md-form">
                                    <div class="mb-3">  <label for="message" class="form-label">موضوع:</label>
                                        <textarea id="message" name="message" rows="4" class="form-control md-textarea" spellcheck="false"></textarea>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                        <!--Grid row-->
        
                    </form>
        
                    <div class="text-center text-md-left">
                        <a class="btn btn-primary w-100 mt-5" onclick="document.getElementById('contact-form').submit();">إرسال</a>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->
        
                <!--Grid column-->
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><img alt="adres icon" aria-label="adres icon"  width="30px" src="{{ asset('img/map.png') }}"></i>
                            <p>Oostenburgergracht 1A – 1010 NA Amsterdam</p>
                        </li>
        
                        <li><img alt="telefoon icon" aria-label="telefoon icon"  width="30px" src="{{ asset('img/telephone.png') }}"></i>
                            <p>06 538 36 023/ 06 515 10 261</p>
                        </li>
        
                        <li><img alt="email icon" aria-label="email icon"  width="30px" src="{{ asset('img/email.png') }}"></i>
                            <p>info@takaful.nl</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
        
            </div>
        
        </section>
@endsection