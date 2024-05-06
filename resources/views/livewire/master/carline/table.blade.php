<div>
    <div class="box-body">
        <div class="table-bordered rounded-sm ti-custom-table-head">
            <div class="py-2 px-3">
                <div class="relative max-w-xs">
                    <label for="hs-table-search2" class="sr-only">Search</label>
                    <input type="text" name="hs-table-search2" id="hs-table-search2"
                        class="p-3 ltr:pl-10 rtl:pr-10 ti-form-input" placeholder="Search for items">
                    <div
                        class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center pointer-events-none ltr:pl-4 rtl:pr-4">
                        <svg class="h-3.5 w-3.5 text-gray-400 dark:text-white/70" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="overflow-auto">
                <table class="ti-custom-table ti-custom-table-head">
                    <thead class="bg-gray-50 dark:bg-black/20">
                        <tr>
                            <th scope="col" class="">No</th>
                            <th scope="col" class="">Category</th>
                            <th scope="col" class="">Commodity</th>
                            <th scope="col" class="">Destination</th>
                            <th scope="col" class="">Carmaker</th>
                            <th scope="col" class="">Carline</th>
                            <th scope="col" class="">Model Year</th>
                            <th scope="col" class="!text-center">Status</th>
                            <th scope="col" class="!text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @foreach ($table as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="font-medium">{{ $item->category }}</td>
                                <td>{{ $item->commodity }}</td>
                                <td>{{ $item->destination }}</td>
                                <td>{{ $item->carmaker }}</td>
                                <td>{{ $item->carline }}</td>
                                <td>{{ $item->year }}</td>
                                <td class="!text-center">{{ $item->status ? 'Active' : 'Non-Active' }}</td>
                                <td class="text-center font-medium">
                                    <button type="button" class="ti-btn ti-btn-warning rounded-full"
                                        data-hs-overlay="#hs-slide-down-animation-modal"
                                        wire:click.prevent="edit({{ $item->id }})">
                                        <i class="ti ti-edit"></i>
                                    </button>
                                    <button type="button" class="ti-btn ti-btn-danger rounded-full"
                                        wire:click.prevent="delete({{ $item->id }})">
                                        <i class="ti ti-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class=" mt-5">
            {{ $table->links() }}
        </div>
    </div>
</div>
