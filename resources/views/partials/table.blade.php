<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">quantity</th>
                <th scope="col">delete</th>
                <th scope="col">show</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($ingredients  as  $ingredient)
                <th scope="row">{{ $ingredient->id }}</th>
                <td>{{ $ingredient->name }}</td>
                <td>{{ $ingredient->quantity }}</td>
                <td>
                    <form action="/ingredients/{{$ingredient->id}}/delete" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">
                        Delete
                    </button>
                    </form>
                </td>
                <td>
                    <a class="btn btn-outline-primary"href="/ingredients/{{$ingredient->id}}/show">
                    show</a>
                </td>
            </tr>
                @endforeach
        </tbody>
    </table>
</div>
