<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>


<style>
/* The side navigation menu */
.sidebar {
  margin: 0;
  padding: 0;
  width: 100%;
  background-color: #f1f1f1;
  height: 100vh;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. */
div.content {
  padding: 1px 16px;
  height: auto;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}






</style>



</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Student Management System</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>

                    </button>

                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <!-- The sidebar -->
                <div class="sidebar">
                <a class="active" href="{{ url('/') }}">Home</a>
                <a href="{{ url('/students') }}">Student</a>
                <a href="{{ url('/teachers') }}">Teacher</a>
                <a href="{{ url('/courses') }}">Course</a>
                <a href="#about">Enrollment</a>
                <a href="#about">Payment</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="content">
                    @yield('content')
                </div>
            </div> 

    </div>


</body>
</html>