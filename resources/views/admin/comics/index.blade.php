@extends('admin.templates.base')

@section('mainPage')

    <table class="table table-bordered">
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Thumb</th>
            <th>Price</th>
            <th>Series</th>
            <th>Sale Date</th>
            <th>Type</th>
            <th colspan="3">action</th>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->thumb}}</td>
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
                        <form action="{{route('comics.destroy', ['comic' => $comic]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
