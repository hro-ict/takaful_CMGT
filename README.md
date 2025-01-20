# Webapplicatie voor Stichting Collectief Begrafenisfonds voor Egyptenaren

Dit project is een afstudeerproject voor de opleiding Creative Media en Game Technologie aan de Hogeschool Rotterdam. Het project betreft een webapplicatie ontwikkeld voor de Stichting Collectief Begrafenisfonds voor Egyptenaren.

## Beschrijving



Deze webapplicatie stelt de Stichting Collectief Begrafenisfonds voor Egyptenaren in staat om hun leden beter te informeren over hun diensten

## Installatie

Volg deze stappen om de applicatie lokaal te draaien:

1.  **Clone de repository:**
    ```bash
    git clone https://github.com/hro-ict/takaful_CMGT.git
    ```
2.  **Navigeer naar de projectmap:**
    ```bash
    cd takaful_CMGT
    ```
3.  **Installeer de dependencies (bijv. met Composer voor PHP projecten):**
    ```bash
    composer install
    ```
4.  **Kopieer het `.env.example` bestand naar `.env` en configureer de databaseverbinding:**
    ```bash
    cp .env.example .env
    ```
    Pas de database instellingen in het `.env` bestand aan.
5.  **Genereer een applicatiesleutel (Laravel):**
    ```bash
    php artisan key:generate
    ```
6.  **Migreer de database (Laravel):**
    ```bash
    php artisan migrate
    ```

7.  **Start de development server:**
    ```bash
    php artisan serve
    ```


## Technologieën

*  Laravel, PHP, JavaScript, HTML, CSS


