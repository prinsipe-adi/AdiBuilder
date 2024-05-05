@extends('layout.app')

@section('title', 'Show Product')

@section('contents')
<h1 class="font-bold text-2xl ml-3">Project Description</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Image Link</label>
            <div class="mt-2">
                {{ $product->googleDriveImage }}
            </div>
        </div>

        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Title</label>
            <div class="mt-2">
                {{ $product->title }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Description</label>
            <div class="mt-2">
                {{ $product->description }}
            </div>
        </div>
        </form>
    </div>
</div>
@endsection
