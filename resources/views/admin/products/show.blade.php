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
                    <h3> Show Product</h3>
                    <a class="create__btn" href="{{ route('admin.products.index') }}"> <i class='bx bx-arrow-back'></i>Back</a>

                </div>

            </div>


            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                            <tr>
                                <td>
                                    <p>Name : </p>
                                </td>
                                <td><b>{{ $product->name }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Price : </p>
                                </td>
                                <td><b>{{ $product->price }}</b></td>
                            </tr>



                            <tr>
                                <td>
                                    <p>Picture</p>
                                </td>
                            <td><img src="/files/photos/{{ $product->photo }}" alt="" width="100px"></td>
                            </tr>

                            <tr>

                                <td>Tags : </td>

                   
                           
                                <td>
                                    @foreach ($product->tags as $item)
                                    <b><a href="{{ route('admin.tags.show', $item->id) }} ">{{ $item->name }}</b></a><br>
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