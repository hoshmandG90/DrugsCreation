<div class="mx-20">
    <div class="my-2 flex sm:flex-row flex-col">
        <div class="flex flex-row mb-1 sm:mb-0">
            <div class="relative">
                <select wire:model="selectedPage"
                    class="appearance-none h-full rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option>5</option>
                    <option>10</option>
                    <option>20</option>
                </select>
                <div
                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </div>
            </div>
        
        </div>
        <div class="block relative">
            <span class="absolute right-0 top-0 mt-2.5 mr-2">
                <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                width="512px" height="512px">
                <path
                  d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
              </svg>
            </span>
            <input wire:model="search" placeholder="گەڕان"
               class="border-2 border-gray-300 bg-white h-10 px-5 pr-16  text-sm focus:outline-none focus:border-purple-200" />
        </div>
    </div>
    <div class=" shadow-md rounded my-6">
        <table class=" items-center w-full table-auto">
            @if ($Stocks->IsNotEmpty())
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">ناوی نەخۆش</th>

                    <th class="py-3 px-6 text-left">ناوی دەرمان</th>
                    <th class="py-3 px-6 text-left">جۆری دەرمان</th>
                    <th class="py-3 px-6 text-left">ژمارەی دانە</th>

                    <th class="py-3 px-6 text-left">ژمارەی پسوڵە</th>
                    <th class="py-3 px-6 text-left">بەرواری زیادکردن</th>


                    <th class="py-3 px-6 text-left"> 
                        <div 
                            class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                              </svg>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach ($Stocks as $stock)


                <tr class="border-b border-gray-200 hover:bg-gray-100 ">
                    <td class="py-3 px-6 text-left whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="mr-2">
                                <img class="img-fluid w-6 h-7 " src="{{asset('assets/img/patinets.svg')}}"
                                    alt="">

                            </div>
                            <span class="font-medium">{{$stock->patinet_name}}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-left">
                        <div class=" items-center">

                            <span>{{$stock->name_medicine}} </span>
                        </div>
                    </td>

                    <td class="py-3 px-6 text-left">
                        <div class=" items-center">

                            <span>{{$stock->types}} </span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-left">
                        <div class=" items-center">

                            <span>{{$stock->count}} </span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-left">
                        <div class=" items-center">

                            <span>{{$stock->invoice_id}} </span>
                        </div>
                    </td>

                    <td class="py-3 px-6 text-left">
                        <div class=" truncate items-center">

                            <span>{{$stock->created_at->format("Y-m-d")}} </span>
                        </div>
                    </td>

                    <td wire:click.prevent="delete('{{$stock->id}}')" class="py-3 px-6 text-left"  >
                        <div class="flex item-center ">

                          
                            <div  class="delete"
                                class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
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
            <span></span>
        </div>
    </div>

</div>
