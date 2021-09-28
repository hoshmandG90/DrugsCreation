<div>
    @section('title','Store')
    <!-- component -->


    <!-- component -->
    <!-- This is an example component -->

    <div class="  flex items-center justify-center   ">

        <div class="w-full lg:w-5/6">

            <div class="flex flex-wrap  justify-end  m-2 space-x-1">
                <div class="pt-2 relative text-gray-600">
                    <input
                        class="border-2 border-gray-300 bg-white h-10  px-5 pr-16 rounded-lg text-sm focus:outline-none focus:border-purple-500"
                        type="search" name="search" placeholder="ناوی دەرمان">
                    <a class="absolute right-0 top-0  mt-5 mr-4">
                        <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                            xml:space="preserve" width="512px" height="512px">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                    </a>
                </div>

                <div class="pt-2 relative  text-gray-600">
                    <input
                        class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none focus:border-purple-500"
                        type="search" name="search" placeholder="جۆری دەرمان">
                    <a class="absolute right-0 top-0 mt-5 mr-4">
                        <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                            xml:space="preserve" width="512px" height="512px">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                    </a>
                </div>
                <div class="pt-2 relative  text-gray-600">
                    <input
                        class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none focus:border-purple-500"
                        type="date" name="search" placeholder="گە ڕان بە پێ کات">
                    <a class="absolute right-0 top-0 mt-5 mr-4">
                        <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                            xml:space="preserve" width="512px" height="512px">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                    </a>
                </div>



            </div>

            <div class=" shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">ناوی دەرمان</th>
                            <th class="py-3 px-6 text-left">بەرواری زیادکردن</th>
                            <th class="py-3 px-6 text-center">جۆری دەرمان</th>
                            <th class="py-3 px-6 text-center">Status</th>
                            <th class="py-3 px-6 text-center">کردارەکان</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        <tr class="border-b border-gray-200 hover:bg-gray-100 ">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                            viewBox="0 0 48 48" style=" fill:#000000;">
                                            <path fill="#80deea"
                                                d="M24,34C11.1,34,1,29.6,1,24c0-5.6,10.1-10,23-10c12.9,0,23,4.4,23,10C47,29.6,36.9,34,24,34z M24,16	c-12.6,0-21,4.1-21,8c0,3.9,8.4,8,21,8s21-4.1,21-8C45,20.1,36.6,16,24,16z">
                                            </path>
                                            <path fill="#80deea"
                                                d="M15.1,44.6c-1,0-1.8-0.2-2.6-0.7C7.6,41.1,8.9,30.2,15.3,19l0,0c3-5.2,6.7-9.6,10.3-12.4c3.9-3,7.4-3.9,9.8-2.5	c2.5,1.4,3.4,4.9,2.8,9.8c-0.6,4.6-2.6,10-5.6,15.2c-3,5.2-6.7,9.6-10.3,12.4C19.7,43.5,17.2,44.6,15.1,44.6z M32.9,5.4	c-1.6,0-3.7,0.9-6,2.7c-3.4,2.7-6.9,6.9-9.8,11.9l0,0c-6.3,10.9-6.9,20.3-3.6,22.2c1.7,1,4.5,0.1,7.6-2.3c3.4-2.7,6.9-6.9,9.8-11.9	c2.9-5,4.8-10.1,5.4-14.4c0.5-4-0.1-6.8-1.8-7.8C34,5.6,33.5,5.4,32.9,5.4z">
                                            </path>
                                            <path fill="#80deea"
                                                d="M33,44.6c-5,0-12.2-6.1-17.6-15.6C8.9,17.8,7.6,6.9,12.5,4.1l0,0C17.4,1.3,26.2,7.8,32.7,19	c3,5.2,5,10.6,5.6,15.2c0.7,4.9-0.3,8.3-2.8,9.8C34.7,44.4,33.9,44.6,33,44.6z M13.5,5.8c-3.3,1.9-2.7,11.3,3.6,22.2	c6.3,10.9,14.1,16.1,17.4,14.2c1.7-1,2.3-3.8,1.8-7.8c-0.6-4.3-2.5-9.4-5.4-14.4C24.6,9.1,16.8,3.9,13.5,5.8L13.5,5.8z">
                                            </path>
                                            <circle cx="24" cy="24" r="4" fill="#80deea"></circle>
                                        </svg>
                                    </div>
                                    <span class="font-medium">React Project</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full"
                                            src="https://randomuser.me/api/portraits/men/1.jpg" />
                                    </div>
                                    <span>Eshal Rosas</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/1.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/women/2.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/3.jpg" />
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">Active</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6" src="https://img.icons8.com/color/100/000000/vue-js.png" />
                                    </div>
                                    <span class="font-medium">Vue Project</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full"
                                            src="https://randomuser.me/api/portraits/women/2.jpg" />
                                    </div>
                                    <span>Anita Rodriquez</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/1.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/women/2.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/3.jpg" />
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span
                                    class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Completed</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6"
                                            src="https://img.icons8.com/color/100/000000/angularjs.png" />
                                    </div>
                                    <span class="font-medium">Angular Project</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full"
                                            src="https://randomuser.me/api/portraits/men/3.jpg" />
                                    </div>
                                    <span>Taylan Bush</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/1.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/women/2.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/3.jpg" />
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span
                                    class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs">Scheduled</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6"
                                            src="https://cdn3.iconfinder.com/data/icons/popular-services-brands/512/laravel-64.png" />
                                    </div>
                                    <span class="font-medium">Laravel Project</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full"
                                            src="https://randomuser.me/api/portraits/men/4.jpg" />
                                    </div>
                                    <span>Tarik Novak</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/1.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/women/2.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/3.jpg" />
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Pending</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6" src="https://img.icons8.com/color/48/000000/git.png" />
                                    </div>
                                    <span class="font-medium">GIT Project</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full"
                                            src="https://randomuser.me/api/portraits/men/5.jpg" />
                                    </div>
                                    <span>Oscar Howard</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/1.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/women/2.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/3.jpg" />
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">Active</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6" src="https://img.icons8.com/color/48/000000/nodejs.png" />
                                    </div>
                                    <span class="font-medium">NodeJS Project</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full"
                                            src="https://randomuser.me/api/portraits/women/6.jpg" />
                                    </div>
                                    <span>Melisa Moon</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/1.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/women/2.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/3.jpg" />
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span
                                    class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs">Scheduled</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6"
                                            src="https://img.icons8.com/color/48/000000/javascript.png" />
                                    </div>
                                    <span class="font-medium">JavaScript Project</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full"
                                            src="https://randomuser.me/api/portraits/women/7.jpg" />
                                    </div>
                                    <span>Cora Key</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/1.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/women/2.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/3.jpg" />
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Pending</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6" src="https://img.icons8.com/color/48/000000/php.png" />
                                    </div>
                                    <span class="font-medium">PHP Project</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full"
                                            src="https://randomuser.me/api/portraits/men/8.jpg" />
                                    </div>
                                    <span>Kylan Dorsey</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/1.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/women/2.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/3.jpg" />
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span
                                    class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Completed</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- 
    @if ($ShowForm)
    <form wire:submit.prevent="store" class="card card-danger  ">
        @csrf
        <div class="card-header text-center  mt-2 mx-auto">
            <h3 class="card-title font-bold ">بەشی دەستکاریکردنی تۆماری داتاکان</h3>
        </div>
        <div class="card-body">
            <!-- Date dd/mm/yyyy -->
            <div class="form-group">
                <label>زیادکردنی ناوی دەرمان</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-prescription-bottle-alt"></i></span>
                    </div>
                    <input wire:model="name_drug" type="text"
                        class="form-control @error('name_drug') is-invalid @enderror" placeholder="ناوی دەرمان">
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <div class="form-group">
                <label>زیادکردنی جۆری دەرمان </label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-pills"></i></span>
                    </div>
                    <input wire:model.defer="category" type="text"
                        class="form-control  @error('category') is-invalid @enderror" placeholder="جۆری دەرمان">
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- phone mask -->
            <div class="form-group">
                <label>زیادکردنی تێبینی 📝</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <textarea wire:model.defer="note" class="form-control  @error('note') is-invalid @enderror" id="" cols="30"
                        placeholder="تێبینی بەکارهێنان" rows="10"></textarea>
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->



        </div>
        <!-- /.card-body -->
       
        <div class="card-footer d-flex justify-content-center">
            <button type="submit" class="btn btn-success w-50 rounded"><i class="nav-icon fas fa-plus-circle"></i>
                زیادکردن</button>
        </div>
    </form>
    @endif


    <div class="flex justify-content-end ">
        <span wire:click="$toggle('ShowForm')" class="btn btn-info "><i class="nav-icon fas fa-plus mr-2"></i>تۆمارکردنی
            ڕەچەتە</span>

    </div>



   <section class="py-1 bg-blueGray-50">
     <div class="w-full   px-4 mx-auto mt-4">
       <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
         <div class="rounded-t mb-0 px-4 py-3 border-0">
           <div class="flex flex-wrap items-center">
             <div class="relative w-full  max-w-full flex-grow flex-1">
                  <input type="text" wire:model="search" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded  py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="گەڕان">
             </div>
             
           </div>
         </div>
     
         <div class="block w-full overflow-x-auto">
           <table class="items-center bg-transparent w-full border-collapse ">
                
               @if ($records->IsNotEmpty())
             <thead>
               <tr >
                 <th class="px-6 bg-blueGray-50 text-gray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                     name medicine

               </th>
               <th class="px-6 bg-blueGray-50 text-gray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Category </
                             </th>
                <th class="px-6 bg-blueGray-50 text-gray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          note
                             </th>
               <th class="px-6 bg-blueGray-50 text-gray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Created At
                             </th>
                             <th class="px-6 bg-blueGray-50 text-gray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            </th>
               </tr>
               
            
             </thead>
     
             <tbody>

                   
           
               @foreach ($records as $record)
           
               <tr>
                 <th class=" px-6 align-middle border  text-xs  p-4 text-left ">
                 {{$record->name_drug}}
</th>
<td class=" px-6 align-middle border  text-xs  p-4">
    {{$record->category}}
</td>
<td class=" px-6 align-middle border  text-xs  p-4">
    {{Str::limit($record->note,20,'...')}}
</td>
<td class="border-t-0 px-6 align-middle border  text-xs  p-4">
    <i class="fas fa-arrow-up text-orange-500 mr-4"></i>
    {{$record->created_at->format('Y-m-d')}}
</td>
<td class=" px-6 align-middle border  text-xs  p-4">
    <a href="#" wire:click.prevent="SelecetdToUpadetd('{{$record->id}}')" title="دەستکاریکردن" data-bs-toggle="modal"
        data-bs-target="#editModel{{$record->id}}" class="text-gray-400 hover:text-gray-100  mx-2">
        <i class="far fa-edit text-purple-400"></i>
    </a>
    <a href="#" wire:click.prevent="ConfirmRecordsRemoval('{{$record->id}}')" title="سرینەوە"
        class="text-gray-400 hover:text-gray-100  ml-2">
        <i class="fas fa-trash-alt text-red-500"></i>
    </a>
</td>

</tr>
<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="editModel{{$record->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <form wire:submit.prevent="update('{{$record->id}}')">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="exampleModalLabel">گۆرانکاری تۆماری ڕەچەتە</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <input type="text" class="form-control my-2 rounded-lg " wire:model.defer="NewName" placeholder="">
                    <input type="text" class="form-control my-2 rounded-lg " wire:model.defer="NewCategory"
                        placeholder="">

                    <textarea name="" class="form-control my-2 rounded-lg " wire:model.defer="NewNote" id="" cols="8"
                        rows="6"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">نەخێر</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">بەڵی</button>
                </div>
            </div>

        </form>
    </div>
</div>



@endforeach
@else
<span class="d-flex justify-content-center my-2 text-red-400 ">هیچ داتایەك نەدۆزرایەوە</span>
@endif
</tbody>

</table>
</div>
</div>
</div>

</section> --}}

</div>
