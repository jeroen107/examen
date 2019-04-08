@include('layouts.app')


<div class="container">
    <div class="row">
        <a><button class="btn btn-primary">Klant Toevoegen</button></a>
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
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->phone}}</td>
                        <td><button class="btn btn-primary">edit</button></td>
                        <td><button class="btn btn-danger">verwijderen</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>