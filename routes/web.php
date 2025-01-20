<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\VerifyCsrfToken;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Takaful;
use App\Http\Controllers\Payment;

// test routes

Route::get('/test', function () {
    
    // if (Cookie::get("language")!==null)
    // return view (Cookie::get("language").".home");
    // else
    return view ("nl.navbar2");
    
})->name('navbar2');;


// test routes

Route::get("/date_diff",[Takaful::class, 'date_diff'])->name('date_diff');


// $cookie= Cookie::get('language');
// global $cookie;


//home pagina
// Route::get('/', function () {



    
//     if (Cookie::get("language")!==null)
//     return view (Cookie::get("language").".home");
//     else
//     return view ("nl.home");
    
// })->name('home');



Route::post('/verify-code', function (\Illuminate\Http\Request $request) {
            $correctCode = 'takaful123!';  // Doğru kodu burada belirleyebilirsiniz
        
            // Eğer kullanıcı doğru kodu girdiyse, bir çerez kaydedelim
            if ($request->code === $correctCode) {
                // Çerezi 1 yıl boyunca geçerli olacak şekilde ayarlayabilirsiniz
                Cookie::queue('access_code', $request->code, 525600);  // 1 yıl (dakika cinsinden)
        
                return redirect('/');  // Kod doğruysa anasayfaya yönlendir
            }
        
            return back()->withErrors(['code' => 'Invalid code']);  // Kod yanlışsa hata mesajı
        });


Route::get('/', function () {

           // Cookie::queue(Cookie::forget('access_code'));
            
    
            if (Cookie::has('access_code')) {
                        return redirect('/home');
                    }
                
            return view('nl.test');  
            
        })->name('test');;



Route::get('/nieuws', function () {
    if (Cookie::get("language")!==null)
    return view(Cookie::get("language").'.nieuws');
    else
    return view("nl.nieuws");
})->name('nieuws');




Route::get('/kosten', function () {
    if (Cookie::get("language")!==null)
    return view(Cookie::get("language").'.kosten');
    else
    return view("nl.kosten");
})->name('kosten');

Route::get('/contact', function () {
     if (Cookie::get("language")!==null)
    return view(Cookie::get("language").'.contact');
    else
    return view("nl.contact");
})->name('contact');;

Route::get('/wie_zijn_we', function () {
     if (Cookie::get("language")!==null)
    return view(Cookie::get("language").'.wie_zijn_we');
    else
    return view("nl.wie_zijn_we");
})->name('wie_zijn_we');

Route::get('/algemene_voorwaarden', function () {
    
    if (Cookie::get("language")!==null)
    return view(Cookie::get("language").'.algemene_voorwaarden');
    else
    return view("nl.algemene_voorwaarden");
})->name('algemene_voorwaarden');

Route::get('/privacy_beleid', function () {
    if (Cookie::get("language")!==null)
    return view(Cookie::get("language").'.privacy_beleid');
    else
    return view("nl.privacy_beleid");
})->name('privacy_beleid');

Route::get('/bestuursleden', function () {
    if (Cookie::get("language")!==null)
    return view(Cookie::get("language").'.bestuursleden');
    else
    return view("nl.bestuursleden");
})->name('bestuursleden');

Route::get('/veelgesteldevragen', function () {
    if (Cookie::get("language")!==null)
    return view(Cookie::get("language").'.veelgesteldevragen');
    else
    return view("nl.veelgesteldevragen");
    
})->name('veelgesteldevragen');

Route::get('/payment_success', function () {
    if (Cookie::get("language")!==null)
    return view(Cookie::get("language").'.payment_success');
    else
    return view("nl.payment_success");
    
})->name('veelgesteldevragen');


Route::get('/begraafplaatsen_in_nederland', function () {
    if (Cookie::get("language")!==null)
    return view(Cookie::get("language").'.begraafplaatsen_in_nederland');
    else
    return view("nl.begraafplaatsen_in_nederland");
  
})->name('begraafplaatsen_in_nederland');



Route::get('/home', function () {
    if (Cookie::get("language")!==null)
    return view(Cookie::get("language").'.home');
    else
    return view("nl.home");
})->name('home');

Route::get('/register_family', function () {
    // if (Cookie::get("language")!==null)
    // return view(Cookie::get("language").'.register_family');
    // else
    return view("nl.register_family");
})->name('register_family');




Route::get('/register_family2', function () {
    // if (Cookie::get("language")!==null)
    // return view(Cookie::get("language").'.register_family2');
    // else
    return view("nl.register_family2");
})->name('register_family2');



Route::get('/register_family_no_kind', function () {
    if (Cookie::get("language")!==null)
    return view(Cookie::get("language").'.register_family_no_kind');
    else
    return view("nl.register_family_no_kind");
})->name('register_family_no_kind');

Route::get('/register_single', function () {
    if (Cookie::get("language")!==null)
    return view(Cookie::get("language").'.register_single');
    else
    return view("nl.register_single");
})->name('register_single');

Route::get('/register', function () {
    if (Cookie::get("language")!==null)
    return view(Cookie::get("language").'.choose_register');
    else
    return view("nl.choose_register");
    
})->name('choose_register');

Route::get('/register_on_web', function () {
    if (Cookie::get("language")!==null)
    return view(Cookie::get("language").'.register_on_web');
    else
    return view("nl.register_on_web");
})->name('register_on_web');


// Route::get('/mail_feedback', function () {
//     return view('mail_feedback');
// });

Route::post("/save_register",[Takaful::class, 'save_register'])->name('save_register')->middleware(VerifyCsrfToken::class);

Route::post("/save_register_family",[Takaful::class, 'save_register_family'])->name('save_register_family')->middleware(VerifyCsrfToken::class);

Route::post("/save_register_single",[Takaful::class, 'save_register_single'])->name('save_register_single')->middleware(VerifyCsrfToken::class);

Route::get("/download_formule",[Takaful::class, 'download_formule'])->name('download_formule');

Route::get("/change_language/{language?}/{url?}",[Takaful::class, 'change_language'])->name('change_language');


Route::get("/send_mail",[Takaful::class, 'send_mail'])->name('send_mail');

Route::get("/delete_cookie", [Takaful::class, "delete_cookie"]);


Route::get("/pdf", [Takaful::class, "pdf"]);
//PAYMENT routes

Route::get('mollie-payment/{amount}/{desc}',[Payment::Class,'preparePayment'])->name('mollie.payment');
Route::get('payment-success',[Payment::Class, 'paymentSuccess'])->name('payment.success');





//PAYMENT routes













  
