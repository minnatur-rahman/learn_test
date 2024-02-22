<h1>This is my contace page</h1>

<a href="{{url('/')}}">Back to Home</a>


    <form action="{{ route('student.store') }}" method="post">
        @csrf
        <input type="text" placeholder="Write Your Name"><br>
        <input type="text" placeholder="Write Your Email"><br>
        <button type="submit">Submit</button>
    </form>

{{-- <form>
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    <div class="form-group">
        <label class="form-check-label"><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form> --}}


