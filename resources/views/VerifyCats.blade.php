@include('partials.head');

@include('partials.simple_html_dom');

@include('partials.menu')


<body>
    <section class="content-section">
        <div class="custom-container">
            <div class="table-responsive-lg">
                <table style="font-size: large;" class="table">

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Load Data</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($categories as $cat)
                        @if($cat->verified == 0)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$cat->name}}</td>
                            <td>
                                <a href="{{route('LoadData',$cat->name)}}">
                                    <button class="btn btn-success btn-lg">Load</button>
                                </a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

    </section>
    </div>
</body>