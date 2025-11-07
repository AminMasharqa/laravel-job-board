<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <h1>Job Board</h1>

    @foreach ($jobs as $job )
    <div>{{ $job['title'] }}: {{ $job['salary'] }}</div>
        
    @endforeach

</div>
