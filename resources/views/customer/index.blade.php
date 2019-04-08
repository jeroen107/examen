@include('layouts.app')


<div class="container">
    <div class="row">
        <a href="{{route('customer.create')}}"><button class="btn btn-primary">Klant Toevoegen</button></a>
        <div class="col-md-12">

            <table class="table table-striped">
                <thead>
                <tr>
                    <td>Naam</td>
                    <td>Email</td>
                    <td>TelefoonNummer</td>
                    <td></td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td><a href="{{route('customer.show', $customer->id)}}">{{$customer->name}}</a></td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->phone}}</td>
                        <td><a href="{{route('customer.edit', $customer->id)}}"><button class="btn btn-primary">Aanpassen</button></a></td>
                        <form action="{{route('customer.delete')}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" value="{{$customer->id}}" name="customer_id">
                            <td><a href="{{route('customer.delete')}}"><button class="btn btn-danger">Verwijderen</button></a></td>


                        </form>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>