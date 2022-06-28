<x-app-layout>
    <div class="container w-full mx-auto">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold mb-6">My Products</h1>
            <x-button-link href="{{ route('products.create') }}">
                Create new Product
            </x-button-link>
        </div>

        <div class="bg-white p-3 rounded-md shadow-md">
            <table class="table w-full">
                <thead class="border-b-2">
                <tr class="text-left">
                    <th>#</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Create Date</th>
                    <th>Update Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $i => $product)
                    <tr class="border-b">
                        <td>{{ $i + 1 }}</td>
                        <td class="max-w-[200px] overflow-x-hidden text-ellipsis whitespace-nowrap">{{ $product->title }}</td>
                        <td>{{ $product->getPrice() }}</td>
                        <td>{{ $product->getCreatedAt() }}</td>
                        <td>{{ $product->getUpdatedAt() }}</td>
                        <td class="whitespace-nowrap flex items-center">
                            <div x-data="{open: false}">
                                <button
                                    @click="open = !open"
                                    class="inline-flex items-center py-1 px-2 bg-gray-600 hover:bg-opacity-95 text-white text-sm rounded-md shadow"
                                >
                                    Actions
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 ml-1 transition-all"
                                        :class="{'rotate-90': open}"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M9 5l7 7-7 7"
                                        />
                                    </svg>
                                </button>
                                <ul
                                    x-show="open"
                                    @click.outside="open = false"
                                    x-transition
                                    class="absolute bg-white w-[160px] shadow-md py-1"
                                >
                                    <li>
                                        <a class="py-1 px-2 hover:bg-gray-200 flex items-center"
                                           href="{{ route('products.show', $product) }}" >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 mr-2"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                                stroke-width="2"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                                />
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                                />
                                            </svg>
                                            Open
                                        </a>
                                    </li>
                                    <li>
                                        <a class="py-1 px-2 hover:bg-gray-200 flex items-center"
                                           href="{{ route('products.edit', $product) }}">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 mr-2"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                                stroke-width="2"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                                                />
                                            </svg>
                                            Edit
                                        </a>
                                    </li>
                                    <li>
                                        <form class="block" action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('{{ trans('are You Sure ? ') }}');">

                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button class="w-full py-1 px-2 hover:bg-gray-200 flex items-center">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4 w-4 mr-2"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                                    />
                                                </svg>
                                                Delete
                                            </button>
                                        </form>

                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="mt-3">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
