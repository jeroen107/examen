@include('layouts.app')

<div class="container">
    <div class="row">

        <div class="col-md-12">
            <form action="{{route('pet.store')}}" method="post">
                @csrf
                <input type="hidden" value="{{$customer->id}}" name="owner_id">

                <div class="form-group">
                    <input class="form-control" value="{{$customer->name}}" type="text" name="name" readonly>
                </div>

                <div class="form-group">
                    <input class="form-control" value="{{old('name')}}" type="text" name="name" placeholder="naam">
                </div>
                <div class="form-group">
                    <input class="form-control" value="{{old('race')}}" type="text" name="race" placeholder="diersoort">
                </div>

                <button class="btn btn-primary" type="submit">Submit</button>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>