<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
 <div class="container-fluid">
  <!-- <a class="navbar-brand" href="#">Brand</a> -->
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main_nav">
	<ul class="navbar-nav">
        @foreach($categories as $cat)
		<li class="nav-item">
            <a class="nav-link" href="#">{{$cat->name}} </a> 
        </li>
		@endforeach
	</ul>
  </div> <!-- navbar-collapse.// -->
 </div> <!-- container-fluid.// -->
</nav>