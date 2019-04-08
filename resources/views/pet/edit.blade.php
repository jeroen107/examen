@include('layouts.app')

{{--hier staat de layout van het formulier om huisdieren aan te passen--}}


<div class="container">
    <div class="row">

        <div class="col-md-12">
            <form action="{{route('pet.update')}}" method="post">
                @csrf

                <input type="hidden" value="{{$pet->id}}" name="pet_id">

                <div class="form-group">
                    <input class="form-control" value="{{$customer->name}}" type="text" name="name" readonly>
                </div>

                <div class="form-group">
                    <input class="form-control" value="{{$pet->name}}" type="text" name="name" placeholder="naam">
                </div>
                <div class="form-group">
                    <input class="form-control" value="{{$pet->race}}" type="text" name="race" placeholder="race">
                </div>

                <input type="hidden" value="{{$pet->owner_id}}" name="owner_id">

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