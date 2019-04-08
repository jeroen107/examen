@include('layouts.app')

{{--hier staat de layout van het overzicht van huisdieren die bij een bepaalde persoon horen--}}

<div class="container">
    <a href="{{route('pet.create', $customer)}}"><button class="btn btn-primary">Huisdier Toevoegen</button></a>
    <a href="{{route('customer.index')}}"><button class="float-right btn btn-primary">Overzicht </button></a>
    <div class="row">
        <div class="col-md-12">
            <input type="hidden" name="customer_id" value="{{$customer->id}}">
            <h1>{{$customer->name}}</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>Naam</td>
                    <td>Diersoort</td>
                    <td></td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                @foreach($pets as $pet)
                    <tr>

                        <td>{{$pet->name}}</td>
                        <td>{{$pet->race}}</td>
                        <td><a href="{{route('pet.edit', $pet->id)}}"><button class="btn btn-primary">Aanpassen</button></a></td>
                        <form action="{{route('pet.delete')}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" value="{{$pet->id}}" name="pet_id">
                            <td><a href="{{route('pet.delete')}}"><button class="btn btn-danger">Verwijderen</button></a></td>


                        </form>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>