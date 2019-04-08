@include('layouts.app')


<div class="container">
    <a href="{{route('customer.create')}}"><button class="btn btn-primary">Klant Toevoegen</button></a>
    <a href="{{route('customer.index')}}"><button class="float-right btn btn-primary">Overzicht </button></a>
    <div class="row">
        <div class="col-md-12">
            <input type="hidden" name="customer_id" value="{{$customer->id}}">
            <h1>{{$customer->name}}</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>Naam</td>
                    <td>race</td>
                    <td></td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                @foreach($pets as $pet)
                    <tr>

                        <td>{{$pet->name}}</td>
                        <td>{{$pet->race}}</td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>