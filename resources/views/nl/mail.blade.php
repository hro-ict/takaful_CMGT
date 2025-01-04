@include('header')
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
        
        /*tr{*/
        /*  background-color: #dddddd;*/
        /*}*/
        </style>
        
        
        <table class="table">
            <tr>
            <td>Type</td>
            <td>{{ $type }}</td>
            </tr>
          <tr>
            <td>Naam Aanmelder</td>
            <td>{{ $name }}</td>
          </tr>  
          <tr>
            <td>Geboortedatum Aanmelder</td>
            <td>{{ $birthday }}</td>
          </tr> 
          <tr>
            <td>Naam Echtgenote</td>
            <td>{{ $name_of_partner }}</td>
          </tr>  
          <tr>
            <td>Geboortedatum Echtgenote</td>
            <td>{{ $birthday_of_partner }}</td>
          </tr> 
          
          @isset($kids)
          <tr>
            <td>Namen van kinderen</td>
            <td>{{ $kids }}</td>
          </tr>
          @endisset
          
          <tr>
            <td>Nationaliteit/Afkomst</td>
            <td>{{ $nationality }}</td>
          </tr>
          <tr>
            <td>Adres/Afkomst</td>
            <td>{{ $adress }}</td>
          </tr>

          <tr>
            <td>E-mail</td>
            <td>{{ $email }}</td>
          </tr>
          <tr>
            <td>Message</td>
            <td>{{ $message_from_user }}</td>
          </tr>
        </table>

        {{-- @foreach ($kids as $x)
        <h1>{{ $a }}</h1>
        @endforeach --}}
        
