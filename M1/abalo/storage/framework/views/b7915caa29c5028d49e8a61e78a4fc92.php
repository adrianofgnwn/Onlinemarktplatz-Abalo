<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmeldung Simulation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Anmeldungssimulation</h2>

    <!-- Statusanzeige -->
    <div id="status-box" class="alert alert-secondary">Prüfe Login-Status...</div>

    <!-- Buttons für Login und Logout -->
    <button id="login-btn" class="btn btn-success">Anmelden</button>
    <button id="logout-btn" class="btn btn-danger">Abmelden</button>
</div>

<script>
    function checkLoginStatus() {
        $.get("/isloggedin", function(data) {
            if (data.auth === "true") {
                $("#status-box").removeClass("alert-secondary alert-danger").addClass("alert-success")
                    .text("Eingeloggt als: " + data.user + " (" + data.mail + ")");
                $("#login-btn").hide();
                $("#logout-btn").show();
            } else {
                $("#status-box").removeClass("alert-secondary alert-success").addClass("alert-danger")
                    .text("Nicht eingeloggt");
                $("#login-btn").show();
                $("#logout-btn").hide();
            }
        });
    }

    $(document).ready(function() {
        checkLoginStatus();

        $("#login-btn").click(function() {
            window.location.href = "/login";
        });

        $("#logout-btn").click(function() {
            window.location.href = "/logout";
        });
    });
</script>
</body>
</html>

<?php /**PATH C:\Users\Ben\IdeaProjects\DBWT2\Prakt\abalo\resources\views/auth_simulation.blade.php ENDPATH**/ ?>