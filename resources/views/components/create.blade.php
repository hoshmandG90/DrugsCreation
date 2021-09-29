<div>
    @section('title','Medicine')
    <!-- component -->






    <div class="flex items-center justify-center">
        <div class="w-full lg:w-5/6">
            <div class="flex justify-between">
                <button wire:click.prevent="$toggle('ShowMedcinie')" class="p-1">
                    <div
                        class="flex items-center p-2 bg-green-200 rounded-lg  cursor-pointer hover:bg-green-500 hover:text-gray-100">
                        <img src="{{asset('assets/img/patinets.svg')}}" class="img-responsive w-5 h-4 mr-2" alt="">

                        <div>
                            <p class=" text-xs font-medium ml-2 ">

                                لیستی بینینی نەخۆش
                            </p>

                        </div>
                    </div>
                </button>

                    @if ($ShowMedcinie)
                        
                
                <form wire:submit.prevent="StoreMedicine">

                    <div class="flex flex-wrap   justify-end  m-2 space-x-1">
                        <div class="pt-2 relative text-gray-600">
                            <input w
                                class="border-2  border-gray-300 bg-white h-10  px-5 pr-16 rounded-lg text-sm focus:outline-none focus:border-purple-500"
                                type="search" wire:model.defer="patinent" name="search" placeholder="ناوی نەخۆش">
                            <a class="absolute right-0 top-0  mt-5 mr-4">
                                <img class="img-fluid w-4 h-4 " src="{{asset('assets/img/patinets.svg')}}" alt="">

                            </a>
                        </div>

                        <div class="pt-2 relative  text-gray-600">

                            <select wire:model.defer="name"
                                class="border-2   border-gray-300 bg-white h-10  px-5 pr-16 rounded-lg text-sm focus:outline-none focus:border-purple-500">
                                <option selected>ناوی دەرمان</option>

                                @foreach ($records as $record)
                                <option value="{{$record->name_drug}}">{{$record->name_drug}}</option>



                                @endforeach
                            </select>
                            <a class="absolute right-0 top-0 mt-5 mr-2">
                                <img class="img-fluid w-4 h-4 " src="{{asset('assets/img/drug.svg')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-wrap   justify-end  m-2 space-x-1">

                        <div class="pt-2 relative  text-gray-600">

                            <select wire:model.defer="types"
                                class="border-2   border-gray-300 bg-white h-10  px-5 pr-16 rounded-lg text-sm focus:outline-none focus:border-purple-500">
                                <option selected>جۆری دەرمان</option>

                                @foreach ($records as $record)
                                <option value="{{$record->category}}">{{$record->category}}</option>
                                @endforeach
                            </select>
                            <a class="absolute right-0 top-0 mt-5 mr-2">
                                <img class="img-fluid w-4 h-4 " src="{{asset('assets/img/options.svg')}}" alt="">
                            </a>
                        </div>
                        <div class="pt-2 relative  text-gray-600">

                            <select wire:model.defer="count"
                                class="border-2  bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none focus:border-purple-500"
                                id="">
                                <option selected>ژمارەی دانە</option>

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>

                            </select>
                            <a class="absolute right-0 top-0 mt-5 mr-1">
                                <img class="img-fluid w-4 h-4 " src="{{asset('assets/img/down-arrow.svg')}}" alt="">
                            </a>
                        </div>

                        <div class="pt-2 relative  text-gray-600">

                            <select wire:model.defer="notes"
                                class="border-2   border-gray-300 bg-white h-10  px-5 pr-16 rounded-lg text-sm focus:outline-none focus:border-purple-500">
                                <option selected>تێبینی بەکارهێنان</option>

                                @foreach ($records as $record)
                                <option value="{{$record->note}}">{{$record->note}}</option>
                                @endforeach
                            </select>
                            <a class="absolute right-0 top-0 mt-5 mr-2">
                                <img class="img-fluid w-4 h-4 " src="{{asset('assets/img/notes.svg')}}" alt="">
                            </a>
                        </div>
                        <br>
                             
                <button type="submit" class="col-lg-3 col-sm mt-2 mb-2">
                    <div
                        class="flex items-center p-3 bg-green-200 rounded-lg shadow-xs cursor-pointer hover:bg-green-500 hover:text-gray-100">

                        <img class="img-fluid w-4 h-4 " src="{{asset('assets/img/medical-report.svg')}}" alt="">
                        <div>
                            <p class=" text-xs font-medium ml-2 " title="کلیک بکە لە زیادکردن">
                                زیادکردنی تۆماری نەخۆش
                            </p>

                        </div>
                    </div>
                </button>

                    </div>

                </form>
                @endif
            </div>
            <div class=" shadow-md rounded my-6">
                <table class="min-w-max items-center w-full table-auto">
                    @if ($Medicines->IsNotEmpty())
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">ناوی نەخۆش</th>

                            <th class="py-3 px-6 text-left">ناوی دەرمان</th>
                            <th class="py-3 px-6 text-left">جۆری دەرمان</th>
                            <th class="py-3 px-6 text-left">ژمارەی دانە</th>

                            <th class="py-3 px-6 text-left">تێبینی بەکارهێنان</th>
                            <th class="py-3 px-6 text-left">بەرواری زیادکردن</th>


                            <th class="py-3 px-6 text-left">کردارەکان</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($Medicines as $Medicine)


                        <tr class="border-b border-gray-200 hover:bg-gray-100 ">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="img-fluid w-6 h-7 " src="{{asset('assets/img/patinets.svg')}}"
                                            alt="">

                                    </div>
                                    <span class="font-medium">{{$Medicine->patinet_name}}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class=" items-center">

                                    <span>{{$Medicine->name_medicine}} </span>
                                </div>
                            </td>

                            <td class="py-3 px-6 text-left">
                                <div class=" items-center">

                                    <span>{{$Medicine->types}} </span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class=" items-center">

                                    <span>{{$Medicine->count}} </span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class=" items-center">

                                    <span>{{$Medicine->note}} </span>
                                </div>
                            </td>

                            <td class="py-3 px-6 text-left">
                                <div class=" items-center">

                                    <span>{{$Medicine->created_at->format("Y-m-d")}} </span>
                                </div>
                            </td>

                            <td class="py-3 px-6 text-left">
                                <div class="flex item-center ">

                                    <div wire:click="$toggle('ShowModelEdit')"
                                        wire:click.prevent="update('{{$Medicine->id}}')"
                                        class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div wire:click.prevent="ConfirmRecordsRemoval('{{$Medicine->id}}')"
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
                    <span>{{$Medicines->links()}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
