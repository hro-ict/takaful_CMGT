<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;

use Mail;
use Carbon\Carbon;
use PDF;

class Takaful extends Controller
{



   public function delete_cookie(){
       Cookie::forget("language");
   }
   
   
   
   
public function send_mail_user($file, $name)
{

    try {
            Mail::send('mail2',["Name"=>$name],  function($message)use($file, $name)   {
                $message->to("info@takaful.nl", 'Takaful.nl')->subject
                   ('Nieuwe aanmelding: '.$name);
                $message->from('info@takaful.nl','');
                 $message->attach($file);
             });
            
            return response()->json([
              'message' => 'success',
               'name' => "Name"]);
       
        }
        catch(Exception $e) {
         
              return response()->json([
              'message' => 'failed']);
          }


}
   
public function diff_date($birthday){
 
// $now= date("d/m/Y");
// $now= date_create($now);
// $birthday_user= date_create($birthday);
// $diff=date_diff($now,$birthday_user);
// // echo $diff->format("%Y years");
// return (int) $diff->format("%Y");

// $birthday_user= Carbon::parse($birthday);
// $birthday= str_replace("/", "-", $birthday);
$birthday= explode("/", $birthday);
$birthday_user= sprintf("%s-%s-%s",$birthday[2],$birthday[1], $birthday[0]);
$age= Carbon::createFromDate($birthday_user);
$now = Carbon::now();

$age= $age->diffInYears($now);
return $age;
 }  
 
 
public function save_register_family(Request $request){
    $data= $request->all();
    echo "hello";
    $data["Accept_alle_voorwaarden"]="JA";
    $list=[];
    $birthday_of_registerer= $request->Geboortedatum_van_aanmelder;
   
    $birthday_of_partner= $request->Geboortedatum_van_echtgenote;
    //echo $birthday_of_partner;die();
    // echo $birthday_of_partner; die();
    $name_of_registerer= $request->Naam_aanmelder;
    $name_of_partner= $request->Naam_van_echthgenote;
    // echo $birthday_of_partner;die();
    // foreach(array_keys($data) as $user){
    //     $key= str_replace("_", " ", $user);
        
    //     array_push($list, [$key=>$data[$user]]);
        
    // }
    
   
    $age_of_registerer= $this->diff_date($birthday_of_registerer);
    $age_of_partner= $this->diff_date($birthday_of_partner);
    //$old_of_partner=98;
    
    if ($age_of_partner>39 || $age_of_registerer>39){
        $type= "Family meer dan 40 jaar oud";
        $annualy_cost= 250;
        $one_off_amount_registerer= 0;
        $one_off_amount_partner= 0;
        $desc_registerer= "";
        $desc_partner= "";
        $data["Type lidmaatschap"]= $type;
        
        
        if ($age_of_registerer>59 && $age_of_registerer<70){
            $one_off_amount_registerer+=950;
            $desc_registerer= "(Leeftijd tussen 60-69)";
        }
        
        if($age_of_registerer>69){
            $one_off_amount_registerer+=1500;
            $desc_registerer= "(Leeftijd vanaf 70)";
        }
        
         if ($age_of_partner>59 && $age_of_partner<70){
            $one_off_amount_partner+=950;
            $desc_partner= "(Leeftijd tussen 60-69)";
        }
        
        if($age_of_partner>69){
            $one_off_amount_partner+=1500;
            $desc_partner= "(Leeftijd vanaf 70)";
        }
       
        
       
        
       
    }
    
    else {
        $type= "Family minder dan 40 jaar oud";
        $annualy_cost= 120;
        $one_off_amount_registerer= 0;
        $one_off_amount_partner= 0;
        $desc_registerer= "";
        $desc_partner= "";
        $data["Type lidmaatschap"]= $type;
        
    }
    
        $totaal= $annualy_cost+$one_off_amount_partner+$one_off_amount_registerer;
        $desc= sprintf(
        '
         <style>
        p{
            font-size:12px;
        }
        </style>
        <p>Type lidmaatschap: <b> %s</b><p>
        <p>Leeftijd aanmelder (%s): <b> %s</b><p>
        <p>Leeftijd echtgenote (%s): <b> %s</b><p>
        <h4><br>Kosten Overzicht</b></h4><hr>
        <p>Jaarlijks bedrag: <b> €%s</b><p>
        <p>Eenmalige bedrag aanmelder%s: <b> €%s</b><p>
        <p>Eenmalige bedrag echtgenote%s: <b> €%s</b><p><hr>
        <p>Totaal: <b>€%s</b></p>
        ',
        $type,$name_of_registerer,  $age_of_registerer,$name_of_partner,$age_of_partner, $annualy_cost, $desc_registerer,$one_off_amount_registerer, $desc_partner, $one_off_amount_partner,$totaal
        
        );
    
    //send mail
    foreach(array_keys($data) as $user){
        $key= str_replace("_", " ", $user);
        
        array_push($list, [$key=>$data[$user]]);
        
    }
    
     array_shift($list);
     $response= ["name"=>$name_of_registerer, "desc"=>$desc, "amount"=>$totaal];
     
     $table= "
     <style>
         table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
          margin-top: 100px;
        }
        
        thead {
            font-weight: bold;
        }
        
        td, th {
          border: 3px solid #dddddd;
          text-align: left;
          padding: 8px;
          
        }
        
     
     </style>
     <h3 style='text-align: center;' >".$name_of_registerer."</h3>
     <table>
     
     ";
     foreach($list as $item){
        $key= array_keys($item)[0];
        $value= array_values($item)[0];
        $tab= sprintf(
            '<tr>
        <td>
        <b>%s</b>
        </td>
        <td>
        %s
        </td>
        </tr>',$key, $value );
        if($key!=="token"){
           $table.=$tab; 
        }
         
     }
     
    
     $table.="</table>";
    PDF::loadHTML($table)->save($name_of_registerer.".pdf");
    $this->send_mail_user(public_path($name_of_registerer.".pdf"),$name_of_registerer);
    unlink($name_of_registerer.".pdf");
    return $response;
        
    }
    
 //register single
 public function save_register_single(Request $request){
    $data= $request->all();
    $data["Accept_alle_voorwaarden"]="JA";
    $list=[];
    $birthday_of_registerer= $request->Geboortedatum_van_aanmelder;
    $name_of_registerer= $request->Naam_aanmelder;
    // echo $birthday_of_partner;die();
    // foreach(array_keys($data) as $user){
    //     $key= str_replace("_", " ", $user);
        
    //     array_push($list, [$key=>$data[$user]]);
        
    // }
    
   
    $age_of_registerer= $this->diff_date($birthday_of_registerer);
    
    if ($age_of_registerer>39){
        $type= "Individueel  meer dan 40 jaar oud";
        $annualy_cost= 150;
        $one_off_amount_registerer= 0;
        $desc_registerer= "";
        
        
        if ($age_of_registerer>59 && $age_of_registerer<70){
            $one_off_amount_registerer+=950;
            $desc_registerer= "(Leeftijd tussen 60-69)";
        }
        
        if($age_of_registerer>69){
            $one_off_amount_registerer+=1500;
            $desc_registerer= "(Leeftijd vanaf 70)";
        }
    }
    
    else {
        $type= "Individueel  minder dan 40 jaar oud";
        $annualy_cost= 75;
        $one_off_amount_registerer= 0;
        $desc_registerer= "";
    }
    
        $totaal= $annualy_cost+$one_off_amount_registerer;
        $desc= sprintf(
        '
        <style>
        p{
            font-size:12px;
        }
        </style>
        <p>Type lidmaatschap: <b> %s</b><p>
        <p>Leeftijd aanmelder (%s): <b> %s</b><p>
        <h4><br>Kosten Overzicht</b></h4><hr>
        <p>Jaarlijks bedrag: <b> €%s</b><p>
        <p>Eenmalige bedrag aanmelder%s: <b> €%s</b><p><hr>
        <p>Totaal: <b>€%s</b></p>
        ',
        $type,$name_of_registerer,  $age_of_registerer, $annualy_cost, $desc_registerer,$one_off_amount_registerer,$totaal
        
        );
        
        
     //send mail
    foreach(array_keys($data) as $user){
        $key= str_replace("_", " ", $user);
        
        array_push($list, [$key=>$data[$user]]);
        
    }
    
     array_shift($list);
     $response= ["name"=>$name_of_registerer, "desc"=>$desc, "amount"=>$totaal];
     
     $table= "
     <style>
         table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
          margin-top: 100px;
        }
        
        thead {
            font-weight: bold;
        }
        
        td, th {
          border: 3px solid #dddddd;
          text-align: left;
          padding: 8px;
          
        }
        
     
     </style>
     <h3 style='text-align: center;' >".$name_of_registerer."</h3>
     <table>
     
     ";
     foreach($list as $item){
        $key= array_keys($item)[0];
        $value= array_values($item)[0];
        $tab= sprintf(
            '<tr>
        <td>
        <b>%s</b>
        </td>
        <td>
        %s
        </td>
        </tr>',$key, $value );
        if($key!=="token"){
           $table.=$tab; 
        }
         
     }
     
    
     $table.="</table>";
    PDF::loadHTML($table)->save($name_of_registerer.".pdf");


    //remove mail function
    //$this->send_mail_user(public_path($name_of_registerer.".pdf"),$name_of_registerer);


    unlink($name_of_registerer.".pdf");
    return $response;    
        
        
     $response= ["name"=>$name_of_registerer, "desc"=>$desc, "amount"=>$totaal];
    
     $this->send_mail_user($list,$request->Email);
    
    
    
    return $response;
        
    }
 
 
 //register single






public function save_register(Request $request){
       
        
        $type= $request->type;
        
        $all_request= $request->all();
        $kids= [];
        $counter=0;

        // foreach (array_keys($all_request) as $a){
        //    print_r($a);
        // }
        // print_r($all_request["kids_1"]); die();
        

        


        if (isset($all_request["kids_1"])){
            foreach(array_keys($all_request) as $req){
                $counter+=1;
                
                if (strpos($req, "kids")!== false){
                if ($counter%2!=0)
                    array_push($kids,"[".$all_request[$req]); 
                else
                array_push($kids,$all_request[$req]."]");

                }
            }
        }
    //    print_r($kids);die();
        $name= $request->name;
        $birthday= $request->birthday;
        if (isset($request->name_of_partner)){
            $name_of_partner= $request->name_of_partner;
        }
        else {
            $name_of_partner= "N.V.T"; 
        }

        if (isset($request->birthday_of_partner)){
            $birthday_of_partner= $request->birthday_of_partner;
        }
        else {
            $birthday_of_partner= "N.V.T"; 
        }
 
        $nationality= $request->nationality;
        $adress= $request->adress;
        $phone= $request->phone;
        $email= $request->email;
        if(isset($request->message)) {
            $message_from_user= $request->message;
        }
        else {
            $message_from_user= "Geen message";
        }

        //$kids= implode(" , ",$kids);
         //send mail to User
        $data = compact("type","name", "kids", "birthday", "name_of_partner", "birthday_of_partner", "nationality", "adress", "email", "message_from_user"); 
        try {
            Mail::send('mail', $data, function($message)   {
                $message->to("info@takaful.nl", 'Takaful.nl')->subject
                   ('Nieuwe aanmelding');
                $message->from('info@takaful.nl','');
             });
            
            return response()->json([
              'message' => 'success',
               'name' => $name]);
       
        }
        catch(Exception $e) {
         
              return response()->json([
              'message' => 'failed']);
          }
        
  

        
    }
    
    public function download_formule(){
        
    $file= public_path(). "/Aanmeldingsformulier_takaful.pdf";
    $headers = [
              'Content-Type' => 'application/pdf',
           ];

    return response()->download($file, 'Takaful _aanmeldingsformulier.pdf', $headers);
    }

    public function send_mail(){
        $name="test name";
        $surname="unlu";
           //send mail to User
        // $data = array(compact("type","name", "birthday", "name_of_partner", "birthday_of_partner", "nationality", "adress", "email", "message")); 
        //$data = compact("name", "surname"); 
        //$data= ["name"=>"yasar"];
        $data = [
            "message"=>"bijlage"
        ];
        
         Mail::send('mail2', $data, function($message) {
         $message->to("info@takaful.nl", 'Takaful.nl')->subject
            ('Nieuwe aanmelding');
         $message->from('info@takaful.nl','');
        $message->attach("test2.pdf");

      });

    }
    
    public function change_language($language, $url)
    {
        if ($url=="choose_register") {
            $url="register";
        }
    Cookie::queue('language', $language);
    return redirect()->to('/'.$url);
    }
    
    
    public function pdf(){
        
         PDF::loadHTML('<h1>Test</h1> ')->save("test2.pdf");
         return "helo";
        
        
    }
}
