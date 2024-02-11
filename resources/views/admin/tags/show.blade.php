@extends('admin.layouts.layout')

@section('products')
active
@endsection

@section('content')

<!-- MAIN -->
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3> Show Tags</h3>
                    <a class="create__btn" href="{{ route('admin.tags.index') }}"> <i class='bx bx-arrow-back'></i>Back</a>

                </div>

            </div>

            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                            <tr>
                                <td>
                                    <p>Tag name : </p>
                                </td>
                                <td><b>{{ $tag->name }}</b></td>
                            </tr>
                            <tr>
                                <td>Products : </td>
                           
                                <td>
                                    @foreach ($tag->products as $item)
                                    <b>{{ $item->name }}</b><br>
                                    @endforeach
                                </td>
                           
                            </tr>
                      
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection