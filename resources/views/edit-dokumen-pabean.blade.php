<x-layouts.base>
    <div class="h-screen flex overflow-hidden bg-cool-gray-100" x-data="{ sidebarOpen: false }" @keydown.window.escape="sidebarOpen = false">
        <!-- Off-canvas menu for mobile -->
        <div x-show="sidebarOpen" class="md:hidden" style="display: none;">
            <div class="fixed inset-0 flex z-40">
                <div @click="sidebarOpen = false" x-show="sidebarOpen" x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state." x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0" style="display: none;">
                    <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
                </div>
                <div x-show="sidebarOpen" x-description="Off-canvas menu, show/hide based on off-canvas menu state." x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="relative flex-1 flex flex-col max-w-xs w-full bg-gray-800" style="display: none;">
                    <div class="absolute top-0 right-0 -mr-14 p-1">
                        <button x-show="sidebarOpen" @click="sidebarOpen = false" class="flex items-center justify-center h-12 w-12 rounded-full focus:outline-none focus:bg-gray-600" aria-label="Close sidebar" style="display: none;">
                            <svg class="h-6 w-6 text-white" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                        <div class="flex-shrink-0 flex items-center px-4">
                            <img class="h-10 w-auto" src="/img/logo_ceisa.svg" alt="Ceisa Logo">
                        </div>
                        <nav class="mt-5 px-2 space-y-1">
                            <a href="/dashboard" class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-white bg-gray-900 focus:outline-none focus:bg-gray-700 transition ease-in-out duration-150">
                                <svg class="mr-4 h-6 w-6 text-green-400 group-hover:text-green-300 group-focus:text-green-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6"></path>
                                </svg>
                                Dashboard
                            </a>
                        </nav>
                    </div>
                    <div class="flex-shrink-0 flex border-t border-green-700 p-4">
                        <a href="/profile" class="flex-shrink-0 group block focus:outline-none">
                            <div class="flex items-center">
                                <div>
                                    <img class="inline-block h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                </div>
                                <div class="ml-3">
                                    <p class="text-base leading-6 font-medium text-white">
                                        Paul Weamer
                                    </p>
                                    <p class="text-sm leading-5 font-medium text-green-300 group-hover:text-green-100 group-focus:underline transition ease-in-out duration-150">
                                        View profile
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="flex-shrink-0 w-14">
                    <!-- Force sidebar to shrink to fit close icon -->
                </div>
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 border-r border-gray-200 bg-gray-50">
                <div class="h-0 flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                    <div class="flex items-center flex-shrink-0 px-4">
                        <img class="h-20 w-auto mb-4" src="/img/logo.png" alt="CEISA Logo">
                    </div>
                    <!-- Sidebar component, swap this element with another sidebar if you like -->
                    <nav class="mt-5 space-y-1 flex-1 px-2 bg-gray-50">
                        <a href="/" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                            <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6"></path>
                            </svg>
                            Home
                        </a>

                        <a href="/dashboard" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                            <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Dashboard
                        </a>

                        {{-- <a href="/dokumen-pabean" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                            <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z"></path>
                            </svg>

                            Dokumen Pabean
                        </a> --}}
                        
                        {{-- <a href="/rush-handling" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                            <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z"></path>
                            </svg>

                            Pengajuan Rush Handling
                        </a> --}}

                        <a href="/ppftz" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                            <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z"></path>
                            </svg>

                            PPFTZ
                        </a>

                        <a href="/suratkuasa" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                            <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            
                            Dokumen PPJK
                        </a>
                        
                        <a href="/suratkuasa" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                            <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                            </svg>

                            Surat Kuasa
                        </a>


                        <a href="/izinimpor" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                            <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Izin Impor - BP Kawasan
                        </a>                       
                    </nav>
                </div>

                <div class="flex-shrink-0 flex border-t border-gray-200 bg-white p-4">
                    <a href="/profile" class="flex-shrink-0 w-full group block">
                        <div class="flex items-center">
                            <div>
                                <img class="inline-block h-9 w-9 rounded-full" src="{{ auth()->user()->avatarUrl() }}" alt="Profile Photo">
                            </div>

                            <div class="ml-3">
                                <p class="text-sm leading-5 font-medium text-gray-900">
                                    Hajrul Khaira
                                </p>

                                <p class="text-xs leading-4 font-medium text-green-500 group-hover:text-green-100 transition ease-in-out duration-150">
                                    View profile
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
                <button @click.stop="sidebarOpen = true" class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150" aria-label="Open sidebar">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <main class="flex-1 relative z-0 overflow-y-auto pt-2 pb-6 focus:outline-none md:py-6" tabindex="0" x-data="" x-init="$el.focus()">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                    <div>
                        <h1 class="text-2xl font-semibold text-gray-900">Daftar Dokumen</h1></h1>
                            
                        
                        {{-- <div class="py-4 space-y-4"> --}}
                                
                                <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                                    <ul class="flex flex-wrap -mb-px">
                                        <li class="mr-2">
                                            <a href="{{ route('edit-pabean', $nomor_aju_pabean )}}" class="inline-block p-4 text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500" aria-current="page">Header</a>
                                        </li>
                                        <li class="mr-2">
                                            <a href="{{ route('edit-dokumen', $nomor_aju_pabean )}}" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" >Data Dokumen</a>
                                        </li>
                                        <li class="mr-2">
                                            <a href="{{ route('edit-peti', $nomor_aju_pabean )}}" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Data Peti Kemas</a>
                                        </li>
                                        <li class="mr-2">
                                            <a href="{{ route('edit-kemasan', $nomor_aju_pabean )}}" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Data Kemasan</a>
                                        </li>
                                        <li class="mr-2">
                                            <a href="{{ route('edit-barang', $nomor_aju_pabean )}}" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Data Barang</a>
                                        </li>
                                    </ul>
                                </div>
                                
                                                <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                                    <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                        <p>Data Pengajuan<p>
                                                        <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                    </div>

                                                    <div class="grid grid-cols-4 gap-2">
                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Nomor Pengajuan</label>
                                                            <x-input.select id="kantor_pabean">
                                                                <option value="" selected>Belum Memilih</option>
                                                                <option value="DIREKTORAT IKC">DIREKTORAT IKC</option>
                                                                <option value="KPPBC TMP B TANJUNG BALAI KARIMUN">KPPBC TMP B TANJUNG BALAI KARIMUN</option>
                                                                <option value="KPU BEA DAN CUKAI TIPE B BATAM">KPU BEA DAN CUKAI TIPE B BATAM</option>
                                                                <option value="KPPBC TMP B TANJUNG PINANG">KPPBC TMP B TANJUNG PINANG</option>
                                                                <option value="KPPBC TMP C SABANG">KPPBC TMP C SABANG</option>
                                                            </x-input.select>
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Kategori Pemberitahuan</label>
                                                            <x-input.select id="kantor_pabean">
                                                                <option value="" selected>Belum Memilih</option>
                                                                <option value="1 - Biasa">1 - Biasa</option>>
                                                                <option value="2- Berkala">2- Berkala</option>>
                                                            </x-input.select>
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Kategori Pemasukan</label>
                                                            <x-input.select id="kantor_pabean">
                                                                <option value="" selected>Belum Memilih</option>
                                                                <option value="1 - Pemasukan Biasa">1 - Pemasukan Biasa</option>
                                                                <option value="2 - Pemasukan Sementara ke Kawasan Bebas">2 - Pemasukan Sementara ke Kawasan Bebas</option>
                                                                <option value="3 - Pemasukan Kembali ke Kawasan Bebas">KPU BEA DAN CUKAI TIPE B BATAM</option>
                                                            </x-input.select>
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Tujuan Pemasukan</label>
                                                            <x-input.select id="kantor_pabean">
                                                                <option value="" selected>Belum Memilih</option>
                                                                <option value="1 - Dijual">1 - Dijual</option>
                                                                <option value="2 - Dipergunakan">2 - Dipergunakan</option>
                                                                <option value="3 - Ditimbun sementara tanpa diolah">3 - Ditimbun sementara tanpa diolah</option>
                                                                <option value="4 - Diolah">4 - Diolah</option>
                                                            </x-input.select>
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Asal Barang</label>
                                                            <x-input.select id="kantor_pabean">
                                                                <option value="" selected>Belum Memilih</option>
                                                                <option value="1 - sepenuhnya diperoleh dan/atau diproduksi di luar Daerah Pabean">1 - sepenuhnya diperoleh dan/atau diproduksi di luar Daerah Pabean</option>
                                                                <option value="2 - sepenuhnya diperoleh dan/atau diproduksi di tempat lain dalam Daerah Pabean">2 - sepenuhnya diperoleh dan/atau diproduksi di tempat lain dalam Daerah Pabean</option>
                                                                <option value="3 - Sepenuhnya diperoleh dan/atau diproduksi di Kawasan Bebas atau Kawasan Bebas lainnya dengan menggunakan bahan baku dan/atau">3 - Sepenuhnya diperoleh dan/atau diproduksi di Kawasan Bebas atau Kawasan Bebas lainnya dengan menggunakan bahan baku dan/atau</option>
                                                            </x-input.select>
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Jenis Faktur</label>
                                                            <x-input.select id="kantor_pabean">
                                                                <option value="" selected>Belum Memilih</option>
                                                                <option value="Non-Faktur">Non-Faktur</option>
                                                                <option value="FP-01">FP-01</option>
                                                                <option value="FP-07">FP-07</option>
                                                                <option value="Dipersamakan Dengan Faktur">Dipersamakan Dengan Faktur</option>
                                                            </x-input.select>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                        <p>Identitas Pengirim/Penerima/Pembeli/Penjual/PPJK<p>
                                                        <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                    </div>

                                                    <div class="grid grid-cols-2 gap-2">
                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Jenis Identitas Pengirim</label>
                                                            <x-input.select id="kantor_pabean">
                                                                <option value="" selected>Belum Memilih</option>
                                                                <option value="2 - Passport">2 - Passport</option>
                                                                <option value="3 - KTP">3 - KTP</option>
                                                                <option value="4 - Lainnya">4 - Lainnya</option>
                                                                <option value="5 - NPWP 15 Digit">5 - NPWP 15 Digit</option>
                                                            </x-input.select>
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Nomor Identitas Pengirim</label>
                                                            <x-input.text  id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Nama Pengirim</label>
                                                            <x-input.text  id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Alamat Pengirim</label>
                                                            <x-input.text  id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                        <p>Penerima<p>
                                                        <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                    </div>

                                                    <div class="grid grid-cols-2 gap-2">
                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Jenis Identitas Penerima</label>
                                                            <x-input.select wire:model="" id="kantor_pabean">
                                                                <option value="" selected>Belum Memilih</option>
                                                                <option value="2 - Passport">2 - Passport</option>
                                                                <option value="3 - KTP">3 - KTP</option>
                                                                <option value="4 - Lainnya">4 - Lainnya</option>
                                                                <option value="5 - NPWP 15 Digit">5 - NPWP 15 Digit</option>
                                                            </x-input.select>
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Nomor Identitas Penerima</label>
                                                            <x-input.text  id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Nama Penerima</label>
                                                            <x-input.text  id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Alamat Penerima</label>
                                                            <x-input.text  id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Nomor Ijin Bpk Penerima</label>
                                                            <x-input.text  id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                        </div>

                                                    </div>

                                                    <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                        <p>PPJK<p>
                                                        <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                    </div>

                                                    <div class="grid grid-cols-3 gap-2">
                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">NPWP PPJK</label>
                                                            <x-input.text  id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Nama PPJK</label>
                                                            <x-input.text  id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Alamat PPJK</label>
                                                            <x-input.text  id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                        </div>
                                                    </div>

                                                    <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                        <p>Data Transaksi Perdagangan<p>
                                                        <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                    </div>

                                                    <div class="grid grid-cols-3 gap-2">
                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Nilai Barang (IDR)</label>
                                                            <x-input.text wire:model="" id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                        </div>
                                                    </div>

                                                    <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                        <p>Data Transaksi Perdagangan<p>
                                                        <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                    </div>

                                                    <div class="grid grid-cols-5 gap-2">
                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Nilai Bc11</label>
                                                            <x-input.text wire:model="" id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Tanggal Bc11</label>
                                                            <x-input.text wire:model="" id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Pos Bc11</label>
                                                            <x-input.text wire:model="" id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Subpos Bc11</label>
                                                            <x-input.text wire:model="" id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Subsubpos Bc11</label>
                                                            <x-input.text wire:model="" id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                        </div>
                                                    </div>

                                                    <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                        <p>Data Pengangkutan<p>
                                                        <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                    </div>

                                                    <div class="grid grid-cols-4 gap-2">
                                                        <div class="p-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Cara Angkut</label>
                                                            <x-input.text wire:model="" id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                        </div>

                                                        <div class="p-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Nama Pengangkut</label>
                                                            <x-input.text wire:model="" id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                        </div>

                                                        <div class="p-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Bendera</label>
                                                            <x-input.text wire:model="" id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                        </div>

                                                        <div class="p-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Nomor Voy Flight Pol</label>
                                                            <x-input.text wire:model="" id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                        </div>
                                                    </div>

                                                    <div class="grid grid-cols-2 gap-2">
                                                        <div class="wrap">
                                                            <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                                <p>Data Pelabuhan Muat dan Bongkar<p>
                                                                <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                            </div>

                                                            <div class="grid grid-cols-1 gap-2">
                                                                <div class="px-6 pt-6  text-grey-darker text-justify flex flex-col">
                                                                    <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Pelabuhan Muat</label>
                                                                    <x-input.text wire:model="" id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                                </div>

                                                                <div class="px-6 pt-6  text-grey-darker text-justify flex flex-col">
                                                                    <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Pelabuhan Tujuan</label>
                                                                    <x-input.text wire:model="" id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                                </div>

                                                                <div class="px-6 pt-6  text-grey-darker text-justify flex flex-col">
                                                                    <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Pelabuhan Transit</label>
                                                                    <x-input.text wire:model="" id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wrap">
                                                            <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                                <p>Data Berat dan Volume<p>
                                                                <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                            </div>

                                                            <div class="grid grid-cols-1 gap-2">
                                                                <div class="px-6 pt-6  text-grey-darker text-justify flex flex-col">
                                                                    <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Berat Bersih Total (KGM)</label>
                                                                    <x-input.text type="number" wire:model="" id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                                </div>

                                                                <div class="px-6 pt-6  text-grey-darker text-justify flex flex-col">
                                                                    <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Berat Kotor Total (KGM)</label>
                                                                    <x-input.text type="number" wire:model="" id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                                </div>

                                                                <div class="px-6 pt-6  text-grey-darker text-justify flex flex-col">
                                                                    <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Volume (M<sup>3</sup>)</label>
                                                                    <x-input.text type="number" wire:model="" id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wrap">
                                                            <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                                <p>Data Perkiraan Tanggal<p>
                                                                <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                            </div>

                                                            <div class="grid grid-cols-1 gap-2">
                                                                <div class="px-6 pt-6  text-grey-darker text-justify flex flex-col">
                                                                    <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Perkiraan Tanggal Pemasukan</label>
                                                                    <div class="relative">
                                                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                                                        </div>
                                                                        <input datepicker datepicker-buttons type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wrap">
                                                            <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                                <p>Data Peti Kemas dan Pengemas<p>
                                                                <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                            </div>

                                                            <div class="grid grid-cols-1 gap-2">
                                                                <div class="px-6 pt-6  text-grey-darker text-justify flex flex-col">
                                                                    <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Jumlah Jenis Kemasan</label>
                                                                    <x-input.text type="number" wire:model=" " id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                                </div>

                                                                <div class="px-6 pt-6  text-grey-darker text-justify flex flex-col">
                                                                    <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Jumlah Peti Kemas</label>
                                                                    <x-input.text type="number" wire:model=" " id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                                </div>

                                                                <div class="px-6 pt-6  text-grey-darker text-justify flex flex-col">
                                                                    <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Jumlah Jenis Barang</label>
                                                                    <x-input.text type="number" wire:model=" " id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wrap">
                                                            
                                                        </div>

                                                        <div class="wrap">
                                                            <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                                <p>Data Peti Kemas dan Pengemas<p>
                                                                <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                            </div>

                                                            <div class="grid grid-cols-1 gap-2">
                                                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                                                    <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Tempat Penimbunan</label>
                                                                    <x-input.select wire:model="entitas.negara_pengirim" id="negara">
                                                                        <option value="" selected>Belum Memilih</option>
                                                                        <option value="BT01 - Batu Ampar">BT01 - Batu Ampar</option>
                                                                        <option value="BT05 - Hang Nadim">BT05 - Hang Nadim</option>
                                                                        <option value="BT07 - Kabil PTK">BT07 - Kabil PTK</option>
                                                                        <option value="BT08 - Punggur">BT08 - Punggur</option>
                                                                        <option value="BT09 - Sekupang">BT09 - Sekupang</option>
                                                                        <option value="BT10 - Sewu">BT10 - Sewu</option>
                                                                        <option value="BT11 - Teluk Senimba">BT11 - Teluk Senimba</option>
                                                                        <option value="BT12 - Sagulung/Tanjung Uncang">BT12 - Sagulung/Tanjung Uncang</option>
                                                                        <option value="BT13 - Birotika Semesta">BT13 - Birotika Semesta</option>
                                                                        <option value="BT15 - Bintang 99 Persada">BT15 - Bintang 99 Persada</option>
                                                                        <option value="BT18 - Persero Kargo">BT18 - Persero Kargo</option>
                                                                        <option value="BT19 - DBM">BT19 - DBM</option>
                                                                        <option value="BT20 - Indo Berjaya Logistik">BT20 - Indo Berjaya Logistik</option>
                                                                        <option value="BT21 - Pukadara Pranaperkasa">BT21 - Pukadara Pranaperkasa</option>
                                                                        <option value="BT22 - Inti Barokah Utama">BT22 - Inti Barokah Utama</option>
                                                                        <option value="BT23 - Duta Niaga Logistik">BT23 - Duta Niaga Logistik</option>
                                                                        <option value="BT24 - PT. Andalan Express Indonesia">BT24 - PT. Andalan Express Indonesia</option>
                                                                        <option value="BT25 - Angkasa Pura Logistik">BT25 - Angkasa Pura Logistik</option>
                                                                        <option value="BT7B - Semblog">BT7B - Semblog</option>
                                                                    </x-input.select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                
                                                <div class="col-span-3 mt-5 text-right">
                                                    <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800 dark:border-gray-700">Save</button>
                                                </div>

                                
                        </form>
                    </p>
                </div>
            </div>
    </div>
</div>
                </div>
            </main>
        </div>

        <x-notification />
    </div>
</x-layouts.base>
