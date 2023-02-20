<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <x-table>
        <div class="px-6 py-4">
            <input type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" placeholder="Search..." wire:model="search">
        </div>     
        @if ($posts->count())

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-4 text-left font-medium text-xs text-gray-500 uppercase">
                                    ID
                                </th>
                                <th scope="col"
                                    class="px-6 py-4 text-left font-medium text-xs text-gray-500 uppercase">
                                    Title
                                </th>
                                <th scope="col"
                                    class="px-6 py-4 text-left font-medium text-xs text-gray-500 uppercase">
                                    Content
                                </th>
                                <th scope="col"
                                    class="px-6 py-4 text-left font-medium text-xs text-gray-500 uppercase">
                                    Handle
                                </th>
                            </tr>
                        </thead class="border-b">
                        <tbody>
                          @foreach ($posts as $post)
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                  {{$post->id}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                  {{$post->title}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                  {{$post->content}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    
                                </td>
                            </tr class="bg-white border-b">
                          @endforeach  
                        </tbody>
                    </table>
                @else
                    <div class="px-6 py-4">
                        No posts found...
                    </div>
        @endif
    </x-table>
</div>
