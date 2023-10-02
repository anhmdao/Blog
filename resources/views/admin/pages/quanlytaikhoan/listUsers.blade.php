@extends('admin.layouts.master')

@section('title', 'Quản lý tài khoản')


@section('content')
<div class="bg-white shadow-md rounded-md px-5 pt-3 pb-20 relative min-h-[calc(100vh-145px)]">
    <div class="flex justify-end">
        <button class="bg-[#292c45] text-white px-2 py-2 rounded-md my-5">Thêm User</button>
    </div>
    <table class="w-full">
        <thead>
            <tr class="bg-[#f3f2f7] text-left text-gray-600 text-[15px]">
                <th class="border border-gray-300 py-3 text-center">STT</th>
                <th class="border border-gray-300 px-2">TÊN ĐĂNG NHẬP</th>
                <th class="border border-gray-300 px-2">EMAIL</th>
                <th class="border border-gray-300 px-2">VAI TRÒ</th>
                <th class="border border-gray-300 px-2"></th>
            </tr>
        </thead>
        <tbody class="cursor-pointer">
            <tr class="hover:bg-yellow-100">
                <td class="border border-gray-300 py-3 text-center">1</td>
                <td class="border border-gray-300 px-2">Mai Phượng</td>
                <td class="border border-gray-300 px-2">admin@gmail.com</td>
                <td class="border border-gray-300 px-2">Admin</td>
                <td class="border border-gray-300 px-2">
                    <div class="flex gap-2 justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>                                  
                    </div>                             
                </td>
            </tr>
            <tr class="hover:bg-yellow-100">
                <td class="border border-gray-300 py-3 text-center">2</td>
                <td class="border border-gray-300 px-2">PhươngMT</td>
                <td class="border border-gray-300 px-2">phuong@gmail.com</td>
                <td class="border border-gray-300 px-2">Admin</td>
                <td class="border border-gray-300 px-2">
                    <div class="flex gap-2 justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>                                  
                    </div>                               
                </td>
            </tr>
            <tr class="hover:bg-yellow-100">
                <td class="border border-gray-300 py-3 text-center">3</td>
                <td class="border border-gray-300 px-2">TrangMT</td>
                <td class="border border-gray-300 px-2">trang@gmail.com</td>
                <td class="border border-gray-300 px-2">User</td>
                <td class="border border-gray-300 px-2">
                    <div class="flex gap-2 justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>                                  
                    </div>                            
                </td>
            </tr>
        </tbody>
    </table>

    {{-- phân trang --}}
    <div class="flex justify-end absolute bottom-6 right-6 items-center gap-5 border border-gray-300 px-2 py-1 cursor-pointer">
        <p>1</p>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
        </svg>                  
    </div>
</div>
@stop
