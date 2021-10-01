<div>
    @section('title','Store')
    <!-- components -->
    <div class="  flex items-center justify-center   ">


        <div class="w-full lg:w-5/6">
            <div class="flex justify-between">
                <div class="flex">
                    <button wire:click.prevent="store" class="p-1">
                        <div
                            class="flex items-center p-4 bg-green-200 rounded-lg shadow-xs cursor-pointer hover:bg-green-500 hover:text-gray-100">
                            <img src="{{asset('assets/img/plus.svg')}}" class="img-responsive w-5 h-4 mr-2" alt="">

                            <div>
                                <p class="sound" class="text-xs font-medium ml-2 ">

                                    بەشی زیادکردن
                                </p>

                            </div>
                        </div>
                    </button>

                   

                    <button wire:click.prevent="$toggle('ShowForm')" class="p-2 col-lg-3 col-sm  ">
                        <div
                            class="flex items-center p-4 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100">
                            <img src="{{asset('assets/img/search.svg')}}" class="img-responsive w-5 h-4 mr-2" alt="">

                            <div>
                                <p class=" text-xs font-medium ml-2 ">

                                    گەڕانی زیرەك
                                </p>

                            </div>
                        </div>
                    </button>
   



                    <div>

                    </div>

                </div>

                @if ($ShowModelEdit)
                {{-- 
                Edit Model --}}
                <div class="flex flex-wrap  justify-end  m-2 space-x-1">
                    <button wire:click.prevent="EditRecord('{{$RecordsIdBeingUpdated}}')"
                        class="pt-2 relative  text-gray-600">
                        <div
                            class="flex items-center p-3 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100">
                            <img src="{{asset('assets/img/edit.svg')}}" class="img-responsive w-5 h-4 mr-2" alt="">

                            <div>
                                <p class=" text-xs font-medium ml-2 ">
                                    گۆرانکارکردن
                                </p>

                            </div>
                        </div>
                    </button>
                    <div class="pt-2 relative text-gray-600">
                        <input
                            class="border-2 @error('NewName') border-red-300   @enderror border-gray-300 bg-white h-10  px-5 pr-16 rounded-lg text-sm focus:outline-none focus:border-purple-500"
                            type="text" wire:model.defer="NewName">
                        <a class="absolute right-0 top-0  mt-5 mr-4">
                            <img class="img-fluid w-4 h-4 " src="{{asset('assets/img/pills.svg')}}" alt="">

                        </a>
                    </div>
                    <div class="pt-2 relative  text-gray-600">
                        <input wire:model.defer="NewCategory"
                            class="border-2 @error('NewCategory') border-red-300   @enderror  border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none focus:border-purple-500"
                            type="search" name="search">
                        <a class="absolute right-0 top-0 mt-5 mr-4">
                            <img class="img-fluid w-4 h-4 " src="{{asset('assets/img/options.svg')}}" alt="">

                        </a>
                    </div>
                    <div class="pt-2 relative  text-gray-600">
                        <input wire:model.defer="NewNote"
                            class="border-2 @error('NewNote') border-red-300   @enderror border-gray-300  bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none focus:border-purple-500"
                            type="note" name="search">
                        <a class="absolute right-0 top-0 mt-5 mr-4">
                            <img class="img-fluid w-4 h-4 " src="{{asset('assets/img/schedule.svg')}}" alt="">

                        </a>
                    </div>

                </div>
                {{-- End Of Model Edit --}}
                @else

                @if ($ShowForm)
                {{-- Advanced Search  --}}
                <div class="flex flex-wrap  justify-end  m-2 space-x-1">
                    <div class="pt-2 relative text-gray-600">
                        <input
                            class="border-2 border-gray-300 bg-white h-10  px-5 pr-16 rounded-lg text-sm focus:outline-none focus:border-purple-500"
                            type="search" wire:model="search" placeholder="  گەڕان زیرەک">
                        <a class="absolute right-0 top-0  mt-5 mr-4">
                            <img class="img-fluid w-4 h-4 " src="{{asset('assets/img/pills.svg')}}" alt="">

                        </a>
                    </div>
                </div>

                {{-- End of Advanced Search --}}

                @else


                {{-- Insert New record --}}

                <div class="flex flex-wrap  justify-end  m-2 space-x-1">
                    <div class="pt-2 relative text-gray-600">
                        <input wire:model="name_drug"
                            class="border-2  @error('name_drug') border-red-300   @enderror border-gray-300 bg-white h-10  px-5 pr-16 rounded-lg text-sm focus:outline-none focus:border-purple-500"
                            type="search" name="search" placeholder="ناوی دەرمان">
                        <a class="absolute right-0 top-0  mt-5 mr-4">
                            <img class="img-fluid w-4 h-4 " src="{{asset('assets/img/pills.svg')}}" alt="">

                        </a>
                    </div>

                    <div class="pt-2 relative  text-gray-600">
                        <input
                            class="border-2  @error('category') border-red-300   @enderror border-gray-300 bg-white h-10  px-5 pr-16 rounded-lg text-sm focus:outline-none focus:border-purple-500"
                            type="search" name="search" wire:model.defer="category" placeholder="جۆری دەرمان">
                        <a class="absolute right-0 top-0 mt-5 mr-4">
                            <img class="img-fluid w-4 h-4 " src="{{asset('assets/img/options.svg')}}" alt="">

                        </a>
                    </div>
                    <div class="pt-2 relative  text-gray-600">
                        <input
                            class="border-2 @error('note') border-red-300   @enderror bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none focus:border-purple-500"
                            type="search" wire:model.defer="note" name="search" placeholder="تێبینی بەکارهێنان">
                        <a class="absolute right-0 top-0 mt-5 mr-4">
                            <img class="img-fluid w-4 h-4 " src="{{asset('assets/img/notes.svg')}}" alt="">
                        </a>
                    </div>
                </div>
                {{-- End of The Record --}}




                @endif
                @endif


            </div>
            @if (session()->has('message'))



            <button class="p-1">
                <div
                    class="flex items-center p-4 bg-green-200 rounded-lg shadow-xs cursor-pointer hover:bg-green-500 hover:text-gray-100">
                    <img src="{{asset('assets/img/bell.svg')}}" class="img-responsive w-5 h-4 mr-2" alt="">

                    <div>
                        <p class=" text-xs font-medium ml-2 ">
                            بە سەرکەوتووی گۆرانکاریەکە کرا
                        </p>

                    </div>
                </div>
            </button>
            @endif
            <div class=" shadow-md rounded my-6">
                <table class="min-w-max items-center w-full table-auto">
                    @if ($records->IsNotEmpty())
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">ناوی دەرمان</th>
                            <th class="py-3 px-6 text-left">جۆری دەرمان</th>
                            <th class="py-3 px-6 text-left">تێبینی بەکارهێنان</th>
                            <th class="py-3 px-6 text-left">بەرواری زیادکردن</th>


                            <th class="py-3 px-6 text-left">کردارەکان</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($records as $record)


                        <tr class="border-b border-gray-200 hover:bg-gray-100 ">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="img-fluid w-4 h-4 " src="{{asset('assets/img/medicine.svg')}}"
                                            alt="">

                                    </div>
                                    <span class="font-medium">{{$record->name_drug}}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class=" items-center">

                                    <span>{{$record->category}} </span>
                                </div>
                            </td>

                            <td class="py-3 px-6 text-left">
                                <div class=" items-center">
                                    <span>{{Str::limit($record->note,20,'...')}}</span>

                                </div>
                            </td>
                            <td class="py-3 px-6 text-left ">
                                <div class=" items-center">

                                    <span
                                        class="bg-purple-200 text-gray-600 py-1 px-3 rounded-full text-xs text-white">{{$record->created_at->format('Y-m-d')}}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex item-center ">

                                    <div wire:click="$toggle('ShowModelEdit')"
                                        wire:click.prevent="update('{{$record->id}}')"
                                        class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div wire:click.prevent="ConfirmRecordsRemoval('{{$record->id}}')"
                                        class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        @endforeach


                    </tbody>

                    @else
                    <a class="flex items-center justify-center mt-2 text-red-400 mb-2">هیچ داتایەك نەدۆزرایەوە</a>
                    @endif
                </table>
                <div class="bg-gray-200 text-gray-600  px-2 py-2 uppercase text-sm leading-normal">
                    <span>{{$records->links()}}</span>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
