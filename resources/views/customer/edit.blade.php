@include('layouts.app')

<div class="container">
    <div class="row">

        <div class="col-md-12">
            <form action="{{route('customer.update')}}" method="post">
                @csrf
                <input type="hidden" value="{{$customer->id}}" name="customer_id">

                <div class="form-group">
                    <input class="form-control" value="{{$customer->name}}" type="text" name="name">
                </div>
                <div class="form-group">
                    <input class="form-control" value="{{$customer->email}}" type="email" name="email">
                </div>
                <div class="form-group">
                    <input class="form-control" value="{{$customer->phone}}" type="text" name="phone">
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