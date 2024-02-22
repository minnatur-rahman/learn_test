<h1>This is my contace page</h1>

<a href="{{url('/')}}">Back to Home</a>

<div class="container">
    <form action="{{ route('student.store') }}" method="post">
        @csrf
        <input type="text" placeholder="Write Your Name"><br>
        <input type="text" placeholder="Write Your Email"><br>
        <button type="submit">Submit</button>
    </form>
</div>



