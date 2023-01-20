@extends('layouts.app')
@section('content')

    @if(session()->has('message'))
        <div class="alert alert-danger mt-3">
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
            {{session()->get('message')}}
        </div>
    @endif
    <div class="row">

        <div class="col-md-12 mt-5 mb-5">
            <div class="card">
                <div class="card-header"> Klientų sąrašas</div>


                <div class="card-body">

                    {{--                    <a class="btn btn-primary float-end " href="{{ route('books.create') }}"><i class="fa-solid fa-marker"></i> Pridėti knygą</a>--}}

                    <table class="table">
                        <thead>

                        <th>Tipas</th>
                        <th>Pavadinimas</th>
                        <th>Adresas</th>
                        <th>Kodas</th>
                        <th>VAT kodas</th>

                        <th colspan="2">Veiksmai</th>
                        </thead>
                        <tbody>
{{--                        <tr>--}}

{{--                            @foreach($clients as $client)--}}

{{--                                <td> {{ $client->type }}  </td>--}}

{{--                                <td><a class="btn btn-success" href="{{ route('clients.edit', $client->id) }}"><i class="fa-solid fa-pencil"></i></a></td>--}}
{{--                                <td>--}}
{{--                                    <form action="{{ route('clients.destroy', $client->id) }}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        @method('DELETE')--}}
{{--                                        <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>--}}
{{--                                    </form>--}}

{{--                                </td>--}}
{{--                        </tr>--}}


{{--                        @endforeach--}}

                        </tbody>
                    </table>


                </div>
            </div>
        </div>

    </div>
@endsection
