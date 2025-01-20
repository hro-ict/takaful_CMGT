<!-- test.blade.php -->
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Pagina</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg" style="max-width: 400px; width: 100%;">
            <div class="card-header bg-primary text-white text-center">
                <h3>Voer de code in om toegang te krijgen tot de website</h3>
            </div>
            <div class="card-body">
                <!-- Foutmeldingen weergeven -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Formulier om de code in te voeren -->
                <form action="/verify-code" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="code" class="form-label">Code:</label>
                        <input type="text" name="code" id="code" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Inloggen</button>
                </form>
            </div>
            <div class="card-footer text-center text-muted">
                <p>Onze website is momenteel in de testfase, dus alleen degenen met een toegangscode kunnen de website betreden. Als u een toegangscode heeft, voer deze dan hieronder in.</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS en popper.js links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
