<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مواقيت الصلاة العرائش و النواحي</title>
    
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    >
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container text-center mt-5">
        <h1 class="mb-4">مواقيت الصلاة في العرائش و النواحي</h1>
        <p id="date" class="lead"></p>

        <div class="clock display-4 mb-3" id="clock">00:00:00</div>

        <div class="prayer-times row justify-content-center mt-4">
            <!-- Isha -->
            <div class="prayer-time col-6 col-md-2 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">العشاء</h5>
                        <p class="card-text time" id="isha-time">Loading...</p>
                    </div>
                </div>
            </div>

            <!-- Maghrib -->
            <div class="prayer-time col-6 col-md-2 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">المغرب</h5>
                        <p class="card-text time" id="maghrib-time">Loading...</p>
                    </div>
                </div>
            </div>

            <!-- Asr -->
            <div class="prayer-time col-6 col-md-2 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">العصر</h5>
                        <p class="card-text time" id="asr-time">Loading...</p>
                    </div>
                </div>
            </div>

            <!-- Dhuhr -->
            <div class="prayer-time col-6 col-md-2 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">الظهر</h5>
                        <p class="card-text time" id="dhuhr-time">Loading...</p>
                    </div>
                </div>
            </div>

            <!-- Fajr -->
            <div class="prayer-time col-6 col-md-2 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">الفجر</h5>
                        <p class="card-text time" id="fajr-time">Loading...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <!-- Bootstrap Bundle JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Script -->
    <script src="script.js"></script>
</body>
</html>
