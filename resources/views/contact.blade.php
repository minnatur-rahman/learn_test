<h1>This is my contace page</h1>

<a href="{{url('/')}}">Back to Home</a>

<h1>Store yout contact parson</h1>
<br><br>
    <form action="{{ route('student.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Write Your Name"><br>
        <input type="email" name="email" placeholder="Write Your Email"><br>
        <input type="text" name="phone" placeholder="Write Your Phone Number"><br>
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


