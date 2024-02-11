@extends('admin.layouts.layout')

@section('content')
    <!-- MAIN -->
    <main>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Categories</h3>
                    <a class="create__btn" href="{{ route('admin.categories.create') }}"> <i class='bx bxs-folder-plus'></i>Create</a>


                </div>
                <table>
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($categories) == 0)
                            <tr>
                                <td colspan="5" class="h5 text-center text-muted">There is not any data</td>
                            </tr>
                        @endif
                        @foreach ($categories as $item)
                            <tr>
                                <td>{{ ++$loop->index }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <form action="{{ route('admin.categories.destroy', $item->id) }}" method="POST">

                                        <a class="btn btn-primary" href="{{ route('admin.categories.show', $item->id) }}"><ion-icon
                                                name="eye-outline"></ion-icon></a>
                                        <a class="btn btn-primary" href="{{ route('admin.categories.edit', $item->id) }}"><ion-icon
                                                name="create-outline"></ion-icon></a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Delete ?')"><ion-icon
                                                name="trash-outline"></ion-icon></button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </main>
    <!-- MAIN -->
@endsection