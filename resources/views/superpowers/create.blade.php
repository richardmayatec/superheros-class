@include('shared.head')

<body>
<h1 style="text-align:center;">{{ $page_title }}</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">
            <form action="{{ route('superpowers.store') }}" method="post">
                @csrf
            
                <div class="mb-3">
                    <label for="name" class="form-label">Name *</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" cols="50" rows="5" class="form-control"></textarea>
                </div>
            
                <!-- <input type="submit" value="Create superpower"> -->

                <div class="text-end">
                    <button type="submit" class="btn btn-success">Create superpower</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>