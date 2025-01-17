@extends('layouts.app')

@section('content')
<div class="container col-10">
<section id='sessions'>
    <script>
        function displaySession() {
            $.ajax({
                url: '/fetch-sessions',
                method: 'GET',
                success: function(response) {
                    $('#sessions').html(response.html);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching sessions timetable:', error);
                }
            });
        }
        $(document).ready(function() {
            displaySession();
        });
    </script>
</section>
</div>

@endsection