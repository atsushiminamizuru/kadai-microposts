@extends('layouts.app')

@section('content')

    <div class="flex justify-center" prose ml-4">
        <h2>micropost edit</h2>
    </div>

    <div class="flex justify-center">
        <form method="POST" action="{{ route('microposts.update', $micropost->id) }}" class="form-control w-1/2">
            @csrf
            @method('PUT')

                <div class="form-control my-4">
                    <label for="content" class="label">
                        <span class="label-text">content</span>
                    </label>
                    <input type="text" name="content" value="{{ $micropost->content }}" class="input input-bordered w-full">
                </div>

            <button type="submit" class="btn btn-primary btn-block normal-case">edit</button>
        </form>
    </div>

@endsection