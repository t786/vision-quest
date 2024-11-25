<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Medical Service Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('frontend/styles.css') }}" />
    @yield('styles')
</head>

<body>
    @include('layouts.includes.navbar')
    @yield('content')
    @include('layouts.includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const toggleButton = document.querySelector(".mobile-menu-toggle");
        const nav = document.querySelector("nav");

        console.log(toggleButton); // Check if the button is correctly selected
        console.log(nav); // Check if the nav is correctly selected

        toggleButton.addEventListener("click", function() {
            console.log("Button clicked!");
            nav.classList.toggle("active");
        });
    </script>
    <script>
        function toggleCard(card) {
            card.classList.toggle('active');
        }
    </script>
</body>

</html>
