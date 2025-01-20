<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FormTest extends TestCase
{
    use RefreshDatabase; 

    /** @test */
    public function it_can_submit_a_form()
    {

        $formData = [
            'Naam_aanmelder' => 'John Doe',
            'Geboortedatum_van_aanmelder' => 'john@example.com',
            'Nationaliteit' => 'Egypt',
            "Keuze_begraafplaats" => "Nederland",
            "Heeft_uitvaartverzekering" => "NEE",
            "Adres" => "abcstraat 123AB Rotterdam",
            "Telefoonnummer" => "123456",
            "Email" => "test@test.nl",
            "Accept_alle_voorwaarden" => true
        ];


        $response = $this->post('/save_register', $formData);

   
        $response->assertStatus(200); 
    }

   /** @test */
public function it_can_download_a_pdf_file()
{
 
    $response = $this->get('/download_formule');


    $response->assertStatus(200);


    $response->assertHeader('Content-Type', 'application/pdf');


    $this->assertTrue($response->getContent() !== null); 
}


/** @test */
public function home_page_loads_fast()
{
 
    $startTime = microtime(true);


    $response = $this->get('/');


    $response->assertStatus(200);


    $endTime = microtime(true);


    $loadTime = $endTime - $startTime;


    $this->assertLessThan(1, $loadTime, 'Home page took too long to load.');
}

/** @test */

public function test_sql_injection()
{
 
    $response = $this->post('/save_register', ['query' => "' OR 1=1 --"]);

    // Assert: Controleer of de applicatie correct reageert
    $response->assertStatus(200);
    $response->assertDontSee('SQL syntax'); // Controleer of er geen SQL-foutmelding is
}




public function test_form_submission_without_csrf_token()
    {
        // Act: Probeer een formulier in te dienen zonder CSRF-token
        $response = $this->post('/save_register', [
            'Naam_aanmelder' => 'John Doe',
            'Geboortedatum_van_aanmelder' => 'john@example.com',
            'Nationaliteit' => 'Egypt',
            "Keuze_begraafplaats" => "Nederland",
            "Heeft_uitvaartverzekering" => "NEE",
            "Adres" => "abcstraat 123AB Rotterdam",
            "Telefoonnummer" => "123456",
            "Email" => "test@test.nl",
            "Accept_alle_voorwaarden" => true
        ]);

        // Assert: Controleer of de aanvraag wordt geweigerd
        $response->assertStatus(419); // 419 staat voor CSRF-token mismatch
    }

    public function test_form_submission_with_csrf_token()
    {
        // Arrange: Haal een geldig CSRF-token op
        $token = csrf_token();

        // Act: Dien een formulier in met een geldig CSRF-token
        $response = $this->post('/save_register', [
            '_token' => $token,
            'Naam_aanmelder' => 'John Doe',
            'Geboortedatum_van_aanmelder' => 'john@example.com',
            'Nationaliteit' => 'Egypt',
            "Keuze_begraafplaats" => "Nederland",
            "Heeft_uitvaartverzekering" => "NEE",
            "Adres" => "abcstraat 123AB Rotterdam",
            "Telefoonnummer" => "123456",
            "Email" => "test@test.nl",
            "Accept_alle_voorwaarden" => true
        ]);

        // Assert: Controleer of de aanvraag succesvol is
        $response->assertStatus(200); // 200 staat voor een succesvolle aanvraag
    }



    
    public function test_xss_protection()
    {
      
        $response = $this->post('/save_register', [
            'comment' => '<script>alert("XSS")</script>',
        ]);
     

        $response->assertDontSee('<script>alert("XSS")</script>');
        $response->assertSee(htmlspecialchars('<script>alert("XSS")</script>', ENT_QUOTES, 'UTF-8'));
    }

}
