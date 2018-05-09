<html>
<body>
<h1>Welcome, <?php echo Auth::user(); ?></h1>
<h2>You are a valid user</h2>
<h3>Please login </h3>
<a href="{{ url('/home') }}">Log In</a>

</body>
</html>