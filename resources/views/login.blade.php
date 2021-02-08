@extends("layout.admin")

@section('content')
    <div class="container my-5 d-flex justify-content-center">
        <div class="card col-lg-6">
            <div class="card-body p-4">
                <form>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" required>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
