@extends("pages/layouts/pages_layout", ['title' => $title])

@section("content")
    <!-- App features section-->
    <div class="container">
        <h1>Welcome to the Notes App Laravel API Backend!</h1>
        <p>It seems like you're accessing the backend directly. If you're looking for the Notes App, click below to start using it:</p>
        <a href="http://vuejs-notes-app.uchemcolin.xyz/" class="cta-button" style="margin-top: 5px;">Go to Vue.js Notes App</a>
        <a href="http://nuxtjs-notes-app.uchemcolin.xyz/" class="cta-button" style="margin-top: 5px;">Go to Nuxt.js Notes App</a>
        <div class="footer">
            <p>&copy; {{ date("Y")}} Your Notes App. All Rights Reserved.</p>
        </div>
    </div>

@endsection