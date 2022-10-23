@include('partials.head')


<section class="home-banner " style="background: url('/img/banner-img.jpg');">
    <div>
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
        @endif
    </div>
    <div class="custom-container">
        <div class="banner-inner">
            <h2>Add New Catgeory</h2>
        </div>
    </div>
</section>



<form style="padding: 42px;font-size: x-large;" action="addCat" type="POST">
    @csrf
    <div class="alert alert-warning">
        <h5 id="emailHelp" class="form-text text-muted">For Category Names : <br><br> Enter Singular Names Only (no
            plural ,
            category names must be
            Without 'S') ex: {"Actor", "Table", "Cleaner", "AirFryer"}</h5>
    </div>

    <br>
    <div class="form-group">
        <label for="exampleInputEmail1">New Category Name</label>
        <input onchange="myfun()" name="cat_name" type="text" class="form-control" id="cat_name"
            aria-describedby="emailHelp" placeholder="Category Name" style="">

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Category Amazon Link</label>
        <input name="cat_link" type="text" class="form-control" id="exampleInputPassword1"
            placeholder="Category Amazon Link">
    </div>

    <input name="tbl_name" id="tbl_name" type="text" style="display:none">

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<br><br>


<script>
var tbl = document.getElementById("tbl_name");

var x = document.getElementById("cat_name");


const pluralize = (noun) => ` ${noun}s`;


function myfun() {

    document.getElementById("tbl_name").value = pluralize(document.getElementById("cat_name").value.toLowerCase());

}
</script>