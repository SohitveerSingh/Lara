<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-layout-mode="fluid" data-topbar-color="light" data-menu-color="dark"
    data-sidenav-size="default" data-layout-position="fixed">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="/favicon.ico" type="image/svg+xml" href="https://themes.techzaa.in/logo.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Welcome</title>

    <!-- Page CSS  -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/extra.css')}}">

    <!-- remix Icons cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css"
        integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <div id="root">
        <div class="wrapper">
            <div class="navbar-custom">
                @include('layout._header')
            </div>
            <div class="leftside-menu">
                @include('layout._navbar')
            </div>

            <div class="content-page">
                <div class="content">

                    @yield('pageContent')

                </div>

                <footer class="footer">
                    @include('layout._footer')
                </footer>
            </div>

        </div>
    </div>


</body>

<script>

    function toggleHighlight() {
        var element = document.getElementById("collapseProfile");
        element.classList.toggle("collapse");
    }

    function toggleBonus() {
        var element = document.getElementById("collapseBonus");
        element.classList.toggle("collapse");
    }

    function toggleTeam() {
        var element = document.getElementById("collapseTeam");
        element.classList.toggle("collapse");
    }

</script>


</html>