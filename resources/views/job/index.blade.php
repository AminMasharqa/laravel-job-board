<div>
    <h1> job board</h1>
    @foreach ($jobs as $job )
        <div>
            {{ $job['title'] }}:{{ $job['salary'] }}
        </div>

        
    @endforeach
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
</div>
