@extends ('layout.master')

@section('kontenberita')
<div class="row">
    <div class="col-12">
        <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Body</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($posts as $p)
            <tr>
                <td>{{ $p -> title }}</td>
                <td>{{ $p -> body }}</td>
                <td>
                    <ul>
                        {{-- Cara tampil data comment dari DB per post --}}
                        @foreach ($p->comments as $c)
                            <li>{{ $c->body }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>
        {{ $posts->links() }}
    </div>
</div>
@endsection