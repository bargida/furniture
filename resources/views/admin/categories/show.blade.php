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
                    <h3> Show Categories</h3>
                    <a class="create__btn" href="{{ route('admin.categories.index') }}"> <i class='bx bx-arrow-back'></i>Back</a>

                </div>

            </div>

            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                            <tr>
                                <td>
                                    <p>Category name : </p>
                                </td>
                                <td><b>{{ $category->name }}</b></td>
                            </tr>
                            <tr>
                                <td>Products : </td>
                           
                                <td>
                                    @foreach ($category->products as $item)
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