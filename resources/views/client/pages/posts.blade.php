@extends('client.layouts.master')

@section('title', 'Bài Viết')


@section('content')
<div class="pt-14 lg:mx-8 mx-5 pb-10 xl:mx-16">
    <h1 class="text-center font-bold text-2xl text-[#92d3f9] pb-3">TẤT CẢ BÀI VIẾT</h1>
    <hr class="mx-auto w-28 border-[#92d3f9] mt-2 mb-10">
    <div class="grid grid-cols-5 gap-4">
        <div class="col-span-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-x-7 xl:mr-10" id="posts-container">
                @include('client.partial.post')
            </div>             
        </div>     
        <div class="bg-white shadow-md h-[460px] relative">
            <h1 class="text-center font-bold text-xl bg-[#92d3f9] py-4 mb-3 text-white">Các Tag Phổ Biến</h1>
            <ul class="ml-5 space-y-1" style="display: flex; flex-direction: column;">
                @foreach($tags as $tag)
                    <li class="flex items-center space-x-2 pb-1">
                        <button class="tag-button bg-[#92d3f9] hover:bg-blue-400 text-white font-bold py-1 px-2 rounded text-sm"
                                data-tag-id="{{ $tag->id }}">
                            {{ $tag->name }}
                        </button>
                        <p class="ml-2">x {{ $tag->numberOfPosts }} bài </p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
        {{-- phân trang --}}
    <div class="flex justify-center items-center">
        {{ $posts->links() }}
    </div>
</div> 

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
    $('.tag-button').click(function () {
        var tagId = $(this).data('tag-id');
        $.ajax({
            type: 'GET',
            url: '{{ route('client.posts.getPostTag', ['tagId' => ':tagId']) }}'.replace(':tagId', tagId),
            success: function (data) {
                var postHtml = ''; 

                $.each(data.posts, function (key, post) {
                    postHtml += `<a href="{{ route('client.post.detail', ['post' => ':postId']) }}'.replace(':postId', post.id)" class="mb-10 bg-white rounded-lg overflow-hidden shadow-md">
                                <img class="w-full h-[210px] object-cover" src="${post.image}" alt="Image">
                                <div class="flex flex-col h-[130px] px-2.5 pb-3">
                                    <div class="py-2 font-semibold text-gray-800 h-[60px] overflow-hidden">${post.title}</div>
                                    <div class="flex 2xl:pr-1 mt-auto items-center mb-2">
                                        <div class="text-[13px] text-white px-3 py-0.5 rounded-full bg-[#292c45] capitalize">
                                            ${post.author.name || "unknown"}
                                        </div>
                                        <div class="flex flex-1 justify-end">
                                            <button class="toggle-favorite" data-post-id="${post.id}" data-is-like="${post.islike ? 'true' : 'false'}">
                                                ${post.islike ? '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" /></svg>' : '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" /></svg>'}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a> `;
                });
                $('#posts-container').html(postHtml);
            },
            error: function (error) {
                console.log('Error:', error);
            }
        });
    });
});

</script>


@stop
