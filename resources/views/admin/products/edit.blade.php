@extends('admin.layouts.layout')

@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Edit</h3>
                        <a class="create__btn" href="{{ route('admin.products.index') }}"> <i class='bx bx-arrow-back'></i>Back</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <strong> Category :</strong>
                       
                        <select name="category_id" id="" class="form-control">
                            <option value="{{ $product->category_id }}">{{ $product->category->name }}</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        
                        </select>
                        
                           
                        <strong> Tags :</strong>
                        <select name="tag_ids[]" id="" class="form-control" multiple>
                            @foreach ($tags as $item)
                                <option value="{{ $item->id }}" {{ $product->tags->contains('id', $tag->id) ? 'selected' : '' }}>{{ $tag->name }}>{{ $item->name }}</option>
                            @endforeach
                        </select><br>

               
                        <br>

                        <strong> Name</strong>
                        <input type="text" name="name" value="{{ $product->name }}" class="form-control"> <br><br>

                        <strong> Price</strong>
                        <input type="number" name="price" value="{{ $product->price }}" class="form-control"> <br><br>

                        <strong>Pictures</strong>
                            <input type="file" name="photo" class="form-control"> <br><br>
                            

                        <input type="submit" value="Submit"><br><br>
                        <img src="/files/photos/{{ $product->photo }}" alt="" width="100px">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection