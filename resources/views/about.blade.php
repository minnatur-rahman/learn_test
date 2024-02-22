<h1>This is my about page</h1>

<a href="{{url('/')}}">Back to Home</a>


<form action="{{ route('about.store') }}" method="post">
    @csrf
    <input type="text" placeholder="Write Your Name"><br>
    <input type="text" placeholder="Write Your Email"><br>
    <button type="submit">Submit</button>
</form>
