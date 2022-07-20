@extends('admin.templates.base')

@section('mainPage')

    <table class="table table-bordered">
        <thead>
            <th>Id</th>
            <th>Title</th>
            {{-- <th>Description</th> --}}
            <th>Thumb</th>
            <th>Price</th>
            <th>Series</th>
            <th>Sale Date</th>
            <th>Type</th>
            <th colspan="3">action</th>
        </thead>
        <tbody>
            @foreach ($comics as $comic)

                <tr data-id={{ $comic->id }}>

                    <td>{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    {{-- <td>{{$comic->description}}</td> --}}
                    <td><a href="{{$comic->thumb}}">{{$comic->thumb}}</a></td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a href="{{ route('comics.show', ['comic' => $comic]) }}" class="btn btn-primary">View</a>
                    </td>
                    <td>
                        <a href="{{ route('comics.edit', ['comic' => $comic]) }}" class="btn btn-warning">edit</a>
                    </td>

                    <td>
                        <button class="btn btn-danger js-delete" >Delete</button>
                        {{-- <form action="{{route('comics.destroy', ['comic' => $comic]) }}" method="post">
                            @csrf
                            @method('DELETE')
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$comics->links()}}

    <section class="overlay d-none">
        <form class="popup"  data-action="{{route('comics.destroy', ['comic' => '*****' ])}}" method="post">
            @csrf
            @method('DELETE')
            <h1>
                Sei sicuro?
            </h1>
            <button type="submit" class="btn btn-warning js-yes">Yes</button>
            <button type="button" class="btn btn-danger js-no">No</button>
        </form>
    </section>

@endsection

{{-- <form action="{{route('comics.destroy', ['comic' => $comic]) }}" method="post">
    @csrf
    @method('DELETE')
</form> --}}
