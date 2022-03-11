<div>
    <h1 class="text-2xl font-semibold text-gray-900">Daftar Dokumen</h1></h1>
    	
    
    <div class="py-4 space-y-4">
            <div class="border-b border-gray-200 dark:border-gray-700 mb-4">
                <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" wire:click="$set('getCurrentPage', 'header')" id="header-tab" data-tabs-target="#header" type="button" role="tab" aria-controls="header" aria-selected="true">Header</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        {{-- <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" wire:click="$set('getCurrentPage', 'entitas')" id="entitas-tab" data-tabs-target="#entitas" type="button" role="tab" aria-controls="entitas" aria-selected="false">Entitas</button> --}}
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" wire:click="$set('getCurrentPage', 'dokumen')" id="dokumen-tab" data-tabs-target="#dokumen" type="button" role="tab" aria-controls="dokumen" aria-selected="false">Data Lanjutan</button>
                    </li>
                    {{-- <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" wire:click="$set('getCurrentPage', 'pengangkut')" id="pengangkut-tab" data-tabs-target="#pengangkut" type="button" role="tab" aria-controls="pengangkut" aria-selected="false">Pengangkut</button>
                    </li> --}}
                    {{-- <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" wire:click="$set('getCurrentPage', 'kemasan')" id="kemasan-tab" data-tabs-target="#kemasan" type="button" role="tab" aria-controls="kemasan" aria-selected="false">Kemasan & Peti Kemas</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" wire:click="$set('getCurrentPage', 'transaksi')" id="transaksi-tab" data-tabs-target="#transaksi" type="button" role="tab" aria-controls="transaksi" aria-selected="false">Transaksi</button>
                    </li> --}}
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" wire:click="$set('getCurrentPage', 'barang')" id="barang-tab" data-tabs-target="#barang" type="button" role="tab" aria-controls="barang" aria-selected="false">Data Barang</button>
                    </li>
                    {{-- <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" wire:click="$set('getCurrentPage', 'pungut')" id="pungut-tab" data-tabs-target="#pungut" type="button" role="tab" aria-controls="pungut" aria-selected="false">Pungut</button>
                    </li> --}}
                </ul>
            </div>
            <div id="myTabContent">
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 @if ($getCurrentPage != 'header') hidden @endif" id="header" role="tabpanel" aria-labelledby="header-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        {{-- <div class="grid grid-cols-1 gap-1"> --}}
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Data Pengajuan<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>

                                {{-- <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Nomor Pengajuan</label>
                                    <x-input.text  id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                </div> --}}

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
                                    
                                    <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                        <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Tanggal Ijin Bpk Penerima</label>
                                        <x-input.date  readonly id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
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
                                                <x-input.date wire:model="" id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
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

                    </p>
                </div>
                {{-- <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 @if ($getCurrentPage != 'entitas') hidden @endif" id="entitas" role="tabpanel" aria-labelledby="entitas-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Importir<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="npwp_importir" class="block text-sm font-medium text-gray-700 mb-4">Nomor Identitas</label>
                                    <x-input.text wire:model="entitas.npwp_importir" id="npwp_importir" placeholder="Nomor Identitas" />

                                    <label for="nama_importir" class="block text-sm font-medium text-gray-700 my-4">Nama</label>
                                    <x-input.text wire:model="entitas.nama_importir" id="nama_importir" placeholder="Nama"/>


                                    <label for="alamat_importir" class="block text-sm font-medium text-gray-700 my-4">Alamat</label>
                                    <x-input.text wire:model="entitas.alamat_importir" id="alamat_importir" placeholder="Alamat"/>

                                    <label for="NIB" class="block text-sm font-medium text-gray-700 my-4">API/NIB</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <x-input.select wire:model="entitas.negara_pengirim" id="negara">
                                            <option value="" selected>Belum Memilih</option>
                                            <option value="API P">API P</option>
                                            <option value="API U">API U</option>
                                        </x-input.select>

                                        <x-input.text wire:model="entitas.NIB" id="NIB" placeholder="API/NIB"/>
                                    </div>
                                    

                                    <label for="status" class="block text-sm font-medium text-gray-700 my-4">Status</label>
                                    <x-input.text wire:model="entitas.status" id="status" placeholder="Status"/>
                                </div>
                            </div>

                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Pemilik Barang<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="npwp_pemilik" class="block text-sm font-medium text-gray-700 mb-4">Nomor Identitas</label>
                                    <x-input.text wire:model="entitas.npwp_pemilik" id="npwp_pemilik" placeholder="Nomor Identitas" />

                                    <label for="nama_pemilik" class="block text-sm font-medium text-gray-700 my-4">Nama</label>
                                    <x-input.text wire:model="entitas.nama_pemilik" id="nama_pemilik" placeholder="Nama Pemilik Barang"/>

                                    <label for="alamat_pemilik" class="block text-sm font-medium text-gray-700 my-4">Alamat</label>
                                    <x-input.text wire:model="entitas.alamat_pemilik" id="alamat_pemilik" placeholder="Alamat Pemilik Barang"/>
                                </div>
                            </div>
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>NPWP Pemusatan<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="npwp_terpusat" class="block text-sm font-medium text-gray-700 mb-4">Nomor Identitas</label>
                                    <x-input.text wire:model="entitas.npwp_terpusat" id="npwp_terpusat" placeholder="Nomor Identitas" />

                                    <label for="nama_terpusat" class="block text-sm font-medium text-gray-700 my-4">Nama</label>
                                    <x-input.text wire:model="entitas.nama_terpusat" id="nama_terpusat" placeholder="Nama"/>

                                    <label for="alamat_terpusat" class="block text-sm font-medium text-gray-700 my-4">Alamat</label>
                                    <x-input.text wire:model="entitas.alamat_terpusat" id="alamat_terpusat" placeholder="Alamat"/>
                                </div>
                            </div>


                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Pengirim<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Nama</label>
                                    <x-input.text wire:model="entitas.nama_pengirim" id="nama_penjual" placeholder="Nama Pengirim"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Alamat</label>
                                    <x-input.text wire:model="entitas.alamat_pengirim" id="title" placeholder="Alamat Pengirim"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Negara</label>
                                    
                                    <x-input.select wire:model="entitas.negara_pengirim" id="negara">
                                        <option value="" selected>Belum Memilih</option>
                                        @foreach (App\Models\Country::get() as $country)
                                            <option value="{{ $country->id }}">{{ $country->code }} - {{ $country->name }}</option>
                                        @endforeach
                                    </x-input.select>
                                </div>
                            </div>

                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Penjual<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Nama</label>
                                    <x-input.text wire:model="entitas.nomor_aju_pabean" id="title" placeholder="Nama Penjual"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Alamat</label>
                                    <x-input.text wire:model="entitas.nomor_aju_pabean" id="title" placeholder="Alamat Penjual"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Negara</label>
                                    <x-input.select wire:model="entitas.negara_penjual" id="negara">
                                        <option value="" selected>Belum Memilih</option>
                                        @foreach (App\Models\Country::get() as $country)
                                            <option value="{{ $country->id }}">{{ $country->code }} - {{ $country->name }}</option>
                                        @endforeach
                                    </x-input.select>
                                </div>
                            </div>

                            <div class="col-span-3 mt-5 text-right">
                                <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800 dark:border-gray-700">Selanjutnya</button>
                            </div>
                        </div>                        
                    </p>
                </div> --}}
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 @if ($getCurrentPage != 'dokumen') hidden @endif" id="dokumen" role="tabpanel" aria-labelledby="dokumen-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        <h1 class="text-lg font-semibold text-gray-900">Data Dokumen</h1>

                        <div class="py-4 space-y-4">
                            <!-- Top Bar -->
                            <div class="flex justify-between">
                                <div class="w-2/4 flex space-x-4">
                                    <x-input.text wire:model="filters.seri" placeholder="Cari Dokumen..." />
                                </div>

                                <div class="space-x-2 flex items-center">
                                    <x-input.group borderless paddingless for="perPage" label="Halaman">
                                        <x-input.select wire:model="perPage" id="perPage">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                        </x-input.select>
                                    </x-input.group>

                                    <x-dropdown label="Aksi">
                                        <x-dropdown.item type="button" wire:click="exportSelected" class="flex items-center space-x-2">
                                            <x-icon.download class="text-cool-gray-400"/> <span>Ekspor</span>
                                        </x-dropdown.item>

                                        <x-dropdown.item type="button" wire:click="$toggle('showDeleteModal')" class="flex items-center space-x-2">
                                            <x-icon.trash class="text-cool-gray-400"/> <span>Hapus</span>
                                        </x-dropdown.item>
                                    </x-dropdown>

                                    <livewire:import-transactions />

                                    <x-button.primary wire:click="create"><x-icon.plus/> Baru</x-button.primary>
                                </div>
                            </div>


                            <!-- Transactions Table -->
                            <div class="flex-col space-y-4">
                                <x-table>
                                    <x-slot name="head">
                                        <x-table.heading class="pr-0 w-8">
                                            <x-input.checkbox wire:model="selectPage" />
                                        </x-table.heading>

                                        <x-table.heading sortable multi-column wire:click="sortBy('seri')" :direction="$sorts['seri'] ?? null">Seri</x-table.heading>
                                        <x-table.heading sortable multi-column wire:click="sortBy('jenis_dokumen')" :direction="$sorts['jenis_dokumen'] ?? null">Kode Dokumen</x-table.heading>
                                        <x-table.heading sortable multi-column wire:click="sortBy('nomor_dokumen')" :direction="$sorts['nomor_dokumen'] ?? null">Nomor</x-table.heading>
                                        <x-table.heading sortable multi-column wire:click="sortBy('tanggal_dokumen')" :direction="$sorts['tanggal_dokumen'] ?? null">Tanggal</x-table.heading>

                                        <x-table.heading />
                                    </x-slot>

                                    <x-slot name="body">
                                        @if ($selectPage)
                                        <x-table.row class="bg-cool-gray-200" wire:key="row-message">
                                            <x-table.cell colspan="8">
                                                @unless ($selectAll)
                                                <div>
                                                    <span>Anda telah memilih <strong>{{ $dokumens->count() }}</strong> list Dokumen Lampiran, Apakah anda mau pilih semua data <strong>{{ $dokumens->total() }}</strong>?</span>
                                                    <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All</x-button.link>
                                                </div>
                                                @else
                                                <span>Anda telah memilih <strong>{{ $dokumens->total() }}</strong> data.</span>
                                                @endif
                                            </x-table.cell>
                                        </x-table.row>
                                        @endif

                                        @forelse ($dokumens as $dokumen)
                                        <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $dokumen->id }}">
                                            <x-table.cell class="pr-0">
                                                <x-input.checkbox wire:model="selected" value="{{ $dokumen->id }}" />
                                            </x-table.cell>

                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $dokumen->seri }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $dokumen->jenis_dokumen }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $dokumen->nomor_dokumen }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $dokumen->tanggal_dokumen }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <x-button.link wire:click="edit({{ $dokumen->id }})">Edit</x-button.link>
                                            </x-table.cell>
                                        </x-table.row>
                                        @empty
                                        <x-table.row>
                                            <x-table.cell colspan="8">
                                                <div class="flex justify-center items-center space-x-2">
                                                    <x-icon.inbox class="h-8 w-8 text-cool-gray-400" />
                                                    <span class="font-medium py-8 text-cool-gray-400 text-xl">Tidak ada list Dokumen Lampiran yang ditemukan...</span>
                                                </div>
                                            </x-table.cell>
                                        </x-table.row>
                                        @endforelse
                                    </x-slot>
                                </x-table>

                                <div>
                                    {{ $dokumens->links() }}
                                </div>
                            </div>
                        </div>

                        <!-- Delete Transactions Modal -->
                        <form wire:submit.prevent="deleteSelected">
                            <x-modal.confirmation wire:model.defer="showDeleteModal">
                                <x-slot name="title">Hapus List Dokumen Lampiran</x-slot>

                                <x-slot name="content">
                                    <div class="py-8 text-cool-gray-700">Apakah anda yakin? Data yang telah dihapus tidak dapat dikembalikan.</div>
                                </x-slot>

                                <x-slot name="footer">
                                    <x-button.secondary wire:click="$set('showDeleteModal', false)">Batal</x-button.secondary>

                                    <x-button.primary type="submit">Hapus</x-button.primary>
                                </x-slot>
                            </x-modal.confirmation>
                        </form>

                        <!-- Save Transaction Modal -->
                        <form wire:submit.prevent="save">
                            <x-modal.dialog wire:model.defer="showEditModal">
                                <x-slot name="title">Edit List Dokumen Lampiran</x-slot>

                                <x-slot name="content">

                                    <x-input.group for="seri" label="Seri" :error="$errors->first('dokumenlain.seri')">
                                        <x-input.text wire:model="dokumenlain.seri" id="seri" placeholder="Seri" />
                                    </x-input.group>

                                    <x-input.group for="jenis_dokumen" label="Jenis Dokumen" :error="$errors->first('dokumenlain.jenis_dokumen')">

                                        <x-input.select wire:model="dokumenlain.jenis_dokumen" id="jenis_dokumen-status">
                                            <option value="">Pilih Jenis Dokumen...</option>
                                            <option value="03001 - Izin Prinsip Pendirian Kawasan Berikat">03001 - Izin Prinsip Pendirian Kawasan Berikat</option>
                                            <option value="380- INVOICE">380- INVOICE</option>
                                        </x-input.select>
                                    </x-input.group>

                                    <x-input.group for="nomor_dokumen" label="Nomor Dokumen" :error="$errors->first('dokumenlain.nomor_dokumen')">
                                        <x-input.text wire:model="dokumenlain.nomor_dokumen" id="nomor_dokumen" placeholder="Nomor Dokumen" />
                                    </x-input.group>
                                    
                                    <x-input.group for="tanggal_dokumen" label="Tanggal Dokumen" :error="$errors->first('dokumenlain.tanggal_dokumen')">
                                        <x-input.date wire:model="dokumenlain.tanggal_dokumen" id="tanggal_dokumen" placeholder="Tanggal Dokumen" />
                                    </x-input.group>
                                    
                                    <x-input.group label="Upload" for="photo" :error="$errors->first('upload')">
                                        <x-input.file-upload wire:model="upload" id="photo">
                                            @if ($upload)
                                                {{ $upload->getClientOriginalName()}}
                                            @endif
                                        </x-input.file-upload>
                                    </x-input.group>

                                </x-slot>

                                <x-slot name="footer">
                                    <x-button.secondary wire:click="$set('showEditModal', false)">Cancel</x-button.secondary>

                                    <x-button.primary type="submit">Save</x-button.primary>
                                </x-slot>
                            </x-modal.dialog>
                        </form>
                    </p>

                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        <h1 class="text-lg font-semibold text-gray-900">Data Peti Kemas</h1>

                        <div class="py-4 space-y-4">
                            <!-- Top Bar -->
                            <div class="flex justify-between">
                                <div class="w-2/4 flex space-x-4">
                                    <x-input.text wire:model="filters.seri" placeholder="Cari Dokumen..." />
                                </div>

                                <div class="space-x-2 flex items-center">
                                    <x-input.group borderless paddingless for="perPage" label="Halaman">
                                        <x-input.select wire:model="perPage" id="perPage">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                        </x-input.select>
                                    </x-input.group>

                                    <x-dropdown label="Aksi">
                                        <x-dropdown.item type="button" wire:click="exportSelected" class="flex items-center space-x-2">
                                            <x-icon.download class="text-cool-gray-400"/> <span>Ekspor</span>
                                        </x-dropdown.item>

                                        <x-dropdown.item type="button" wire:click="$toggle('showDeleteModal')" class="flex items-center space-x-2">
                                            <x-icon.trash class="text-cool-gray-400"/> <span>Hapus</span>
                                        </x-dropdown.item>
                                    </x-dropdown>

                                    <livewire:import-transactions />

                                    <x-button.primary wire:click="createpetikemas"><x-icon.plus/> Baru</x-button.primary>
                                </div>
                            </div>


                            <!-- Transactions Table -->
                            <div class="flex-col space-y-4">
                                <x-table>
                                    <x-slot name="head">
                                        <x-table.heading class="pr-0 w-8">
                                            <x-input.checkbox wire:model="selectPage" />
                                        </x-table.heading>

                                        <x-table.heading sortable multi-column wire:click="sortBy('seri')" :direction="$sorts['seri'] ?? null">Seri</x-table.heading>
                                        <x-table.heading sortable multi-column wire:click="sortBy('jenis_dokumen')" :direction="$sorts['jenis_dokumen'] ?? null">Kode Dokumen</x-table.heading>
                                        <x-table.heading sortable multi-column wire:click="sortBy('nomor_dokumen')" :direction="$sorts['nomor_dokumen'] ?? null">Nomor</x-table.heading>
                                        <x-table.heading sortable multi-column wire:click="sortBy('tanggal_dokumen')" :direction="$sorts['tanggal_dokumen'] ?? null">Tanggal</x-table.heading>

                                        <x-table.heading />
                                    </x-slot>

                                    <x-slot name="body">
                                        @if ($selectPage)
                                        <x-table.row class="bg-cool-gray-200" wire:key="row-message">
                                            <x-table.cell colspan="8">
                                                @unless ($selectAll)
                                                <div>
                                                    <span>Anda telah memilih <strong>{{ $dokumens->count() }}</strong> list Dokumen Lampiran, Apakah anda mau pilih semua data <strong>{{ $dokumens->total() }}</strong>?</span>
                                                    <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All</x-button.link>
                                                </div>
                                                @else
                                                <span>Anda telah memilih <strong>{{ $dokumens->total() }}</strong> data.</span>
                                                @endif
                                            </x-table.cell>
                                        </x-table.row>
                                        @endif

                                        {{-- @forelse ($petikemas as $petikema)
                                        <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $petikema->id }}">
                                            <x-table.cell class="pr-0">
                                                <x-input.checkbox wire:model="selected" value="{{ $petikema->id }}" />
                                            </x-table.cell>

                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $petikema->seri }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $petikema->jenis_dokumen }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $petikema->nomor_dokumen }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $petikemas->tanggal_dokumen }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <x-button.link wire:click="edit({{ $petikemas->id }})">Edit</x-button.link>
                                            </x-table.cell>
                                        </x-table.row>
                                        @empty --}}
                                        <x-table.row>
                                            <x-table.cell colspan="8">
                                                <div class="flex justify-center items-center space-x-2">
                                                    <x-icon.inbox class="h-8 w-8 text-cool-gray-400" />
                                                    <span class="font-medium py-8 text-cool-gray-400 text-xl">Tidak ada list Peti Kemas yang ditemukan...</span>
                                                </div>
                                            </x-table.cell>
                                        </x-table.row>
                                        {{-- @endforelse --}}
                                    </x-slot>
                                </x-table>

                                <div>
                                    {{ $dokumens->links() }}
                                </div>
                            </div>
                        </div>

                        <!-- Delete Transactions Modal -->
                        <form wire:submit.prevent="deleteSelected">
                            <x-modal.confirmation wire:model.defer="showDeleteModal">
                                <x-slot name="title">Hapus List Data Peti Kemas</x-slot>

                                <x-slot name="content">
                                    <div class="py-8 text-cool-gray-700">Apakah anda yakin? Data yang telah dihapus tidak dapat dikembalikan.</div>
                                </x-slot>

                                <x-slot name="footer">
                                    <x-button.secondary wire:click="$set('showDeleteModal', false)">Batal</x-button.secondary>

                                    <x-button.primary type="submit">Hapus</x-button.primary>
                                </x-slot>
                            </x-modal.confirmation>
                        </form>

                        <!-- Save Transaction Modal -->
                        <form wire:submit.prevent="save">
                            <x-modal.dialog wire:model.defer="showPetiKemasEditModal">
                                <x-slot name="title">List Dokumen Peti Kemas</x-slot>

                                <x-slot name="content">

                                    <x-input.group for="no_kontainer" label="Nomor Kontainer">
                                        <x-input.text id="no_kontainer" placeholder="Nomor Kontainer"/>
                                    </x-input.group>

                                    <x-input.group for="tipe_kontainer" label="Tipe Kontainer">
                                        <x-input.select id="perPage">
                                            <option value="" selected>Belum Memilih</option>
                                            <option value="F - FCL">F - FCL</option>
                                            <option value="L - LCL">L - LCL</option>
                                        </x-input.select>
                                    </x-input.group>

                                    <x-input.group for="tipe_kontainer" label="Tipe Kontainer">
                                        <x-input.select wire:model="perPage" id="perPage">
                                            <option value="" selected>Belum Memilih</option>
                                            <option value="20 - 20 Feet">20 - 20 Feet</option>
                                            <option value="40 - 40 Feet">40 - 40 Feet</option>
                                            <option value="45 - 45 Feet">45 - 45 Feet</option>
                                        </x-input.select>
                                    </x-input.group>
                                </x-slot>

                                <x-slot name="footer">
                                    <x-button.secondary wire:click="$set('showPetiKemasEditModal', false)">Cancel</x-button.secondary>

                                    <x-button.primary type="submit">Save</x-button.primary>
                                </x-slot>
                            </x-modal.dialog>
                        </form>
                    </p>

                     <p class="text-gray-500 dark:text-gray-400 text-sm">
                        <h1 class="text-lg font-semibold text-gray-900">Data Kemasan</h1>

                        <div class="py-4 space-y-4">
                            <!-- Top Bar -->
                            <div class="flex justify-between">
                                <div class="w-2/4 flex space-x-4">
                                    <x-input.text wire:model="filters.seri" placeholder="Cari Dokumen..." />
                                </div>

                                <div class="space-x-2 flex items-center">
                                    <x-input.group borderless paddingless for="perPage" label="Halaman">
                                        <x-input.select wire:model="perPage" id="perPage">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                        </x-input.select>
                                    </x-input.group>

                                    <x-dropdown label="Aksi">
                                        <x-dropdown.item type="button" wire:click="exportSelected" class="flex items-center space-x-2">
                                            <x-icon.download class="text-cool-gray-400"/> <span>Ekspor</span>
                                        </x-dropdown.item>

                                        <x-dropdown.item type="button" wire:click="$toggle('showDeleteModal')" class="flex items-center space-x-2">
                                            <x-icon.trash class="text-cool-gray-400"/> <span>Hapus</span>
                                        </x-dropdown.item>
                                    </x-dropdown>

                                    <livewire:import-transactions />

                                    <x-button.primary wire:click="createdatakemasan"><x-icon.plus/> Baru</x-button.primary>
                                </div>
                            </div>


                            <!-- Transactions Table -->
                            <div class="flex-col space-y-4">
                                <x-table>
                                    <x-slot name="head">
                                        <x-table.heading class="pr-0 w-8">
                                            <x-input.checkbox wire:model="selectPage" />
                                        </x-table.heading>

                                        <x-table.heading sortable multi-column wire:click="sortBy('seri')" :direction="$sorts['seri'] ?? null">No</x-table.heading>
                                        <x-table.heading sortable multi-column wire:click="sortBy('jenis_dokumen')" :direction="$sorts['jenis_dokumen'] ?? null">Jumlah Jenis Kemasan</x-table.heading>
                                        <x-table.heading sortable multi-column wire:click="sortBy('nomor_dokumen')" :direction="$sorts['nomor_dokumen'] ?? null">Merk Kemasan</x-table.heading>

                                        <x-table.heading />
                                    </x-slot>

                                    <x-slot name="body">
                                        @if ($selectPage)
                                        <x-table.row class="bg-cool-gray-200" wire:key="row-message">
                                            <x-table.cell colspan="8">
                                                @unless ($selectAll)
                                                <div>
                                                    <span>Anda telah memilih <strong>{{ $dokumens->count() }}</strong> list Dokumen Lampiran, Apakah anda mau pilih semua data <strong>{{ $dokumens->total() }}</strong>?</span>
                                                    <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All</x-button.link>
                                                </div>
                                                @else
                                                <span>Anda telah memilih <strong>{{ $dokumens->total() }}</strong> data.</span>
                                                @endif
                                            </x-table.cell>
                                        </x-table.row>
                                        @endif

                                        {{-- @forelse ($dokumens as $dokumen)
                                        <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $dokumen->id }}">
                                            <x-table.cell class="pr-0">
                                                <x-input.checkbox wire:model="selected" value="{{ $dokumen->id }}" />
                                            </x-table.cell>

                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $dokumen->seri }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $dokumen->jenis_dokumen }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $dokumen->nomor_dokumen }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $dokumen->tanggal_dokumen }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <x-button.link wire:click="edit({{ $dokumen->id }})">Edit</x-button.link>
                                            </x-table.cell>
                                        </x-table.row>
                                        @empty --}}
                                        <x-table.row>
                                            <x-table.cell colspan="8">
                                                <div class="flex justify-center items-center space-x-2">
                                                    <x-icon.inbox class="h-8 w-8 text-cool-gray-400" />
                                                    <span class="font-medium py-8 text-cool-gray-400 text-xl">Tidak ada list Data Kemasan yang ditemukan...</span>
                                                </div>
                                            </x-table.cell>
                                        </x-table.row>
                                        {{-- @endforelse --}}
                                    </x-slot>
                                </x-table>

                                <div>
                                    {{ $dokumens->links() }}
                                </div>
                            </div>
                        </div>

                        <!-- Delete Transactions Modal -->
                        <form wire:submit.prevent="deleteSelected">
                            <x-modal.confirmation wire:model.defer="showDeleteModal">
                                <x-slot name="title">Hapus List Data Kemasan</x-slot>

                                <x-slot name="content">
                                    <div class="py-8 text-cool-gray-700">Apakah anda yakin? Data yang telah dihapus tidak dapat dikembalikan.</div>
                                </x-slot>

                                <x-slot name="footer">
                                    <x-button.secondary wire:click="$set('showDeleteModal', false)">Batal</x-button.secondary>

                                    <x-button.primary type="submit">Hapus</x-button.primary>
                                </x-slot>
                            </x-modal.confirmation>
                        </form>

                        <!-- Save Transaction Modal -->
                        <form wire:submit.prevent="save">
                            <x-modal.dialog wire:model.defer="showDataKemasanEditModal">
                                <x-slot name="title">Edit List Data Kemasan</x-slot>

                                <x-slot name="content">

                                    <x-input.group for="seri" label="Seri" :error="$errors->first('dokumenlain.seri')">
                                        <x-input.text wire:model="dokumenlain.seri" id="seri" placeholder="Seri" />
                                    </x-input.group>

                                    <x-input.group for="jenis_dokumen" label="Jenis Dokumen" :error="$errors->first('dokumenlain.jenis_dokumen')">
                                        <x-input.select wire:model="dokumenlain.jenis_dokumen" id="jenis_dokumen-status">
                                            <option value="">Pilih Jenis Dokumen...</option>
                                            <option value="03001 - Izin Prinsip Pendirian Kawasan Berikat">03001 - Izin Prinsip Pendirian Kawasan Berikat</option>
                                            <option value="380- INVOICE">380- INVOICE</option>
                                        </x-input.select>
                                    </x-input.group>

                                    <x-input.group for="nomor_dokumen" label="Nomor Dokumen" :error="$errors->first('dokumenlain.nomor_dokumen')">
                                        <x-input.text wire:model="dokumenlain.nomor_dokumen" id="nomor_dokumen" placeholder="Nomor Dokumen" />
                                    </x-input.group>
                                    
                                    <x-input.group for="tanggal_dokumen" label="Tanggal Dokumen" :error="$errors->first('dokumenlain.tanggal_dokumen')">
                                        <x-input.date wire:model="dokumenlain.tanggal_dokumen" id="tanggal_dokumen" placeholder="Tanggal Dokumen" />
                                    </x-input.group>
                                    
                                    <x-input.group label="Upload" for="photo" :error="$errors->first('upload')">
                                        <x-input.file-upload wire:model="upload" id="photo">
                                            @if ($upload)
                                                {{ $upload->getClientOriginalName()}}
                                            @endif
                                        </x-input.file-upload>
                                    </x-input.group>

                                </x-slot>

                                <x-slot name="footer">
                                    <x-button.secondary wire:click="$set('showDataKemasanEditModal', false)">Cancel</x-button.secondary>

                                    <x-button.primary type="submit">Save</x-button.primary>
                                </x-slot>
                            </x-modal.dialog>
                        </form>
                    </p>
                </div>


                {{-- <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 @if ($getCurrentPage != 'pengangkut') hidden @endif" id="pengangkut" role="tabpanel" aria-labelledby="pengangkut-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>BC 1.1<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="kode_tutup_pu" class="block text-sm font-medium text-gray-700 mb-4">Nomor Tutup PU</label>
                                    <div class="grid grid-cols-3 gap-3">
                                        <x-input.text wire:model="pengangkut.kode_tutup_pu" id="kode_tutup_pu" placeholder="Kode Pos"/>
                                        <x-input.text wire:model="pengangkut.nomor_tutup_pu" id="nomor_tutup_pu" placeholder="Nomor"/>
                                        <x-input.date wire:model="pengangkut.tanggal_tutup_pu" id="tanggal_tutup_pu"/>
                                    </div>
                                </div>

                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="nomor_pos_1" class="block text-sm font-medium text-gray-700 mb-4">Nomor Pos</label>
                                    <div class="grid grid-cols-3 gap-3">
                                        <x-input.text wire:model="pengangkut.nomor_pos_1" id="nomor_pos_1" placeholder="Kode Pos"/>
                                        <x-input.text wire:model="pengangkut.nomor_pos_2" id="nomor_pos_2" placeholder="Subpos"/>
                                        <x-input.date wire:model="pengangkut.nomor_pos_3" id="nomor_pos_3" />
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Pengangkutan<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="cara_pengangkutan" class="block text-sm font-medium text-gray-700 mb-4">Cara Pengangkutan</label>

                                    <x-input.select wire:model="pengangkut.cara_pengangkutan" id="cara_pengangkutan">
                                        <option value="" selected>Belum Memilih</option>
                                        @foreach (App\Models\CaraPengangkutan::get() as $item)
                                            <option value="{{ $item->id }}">{{ $item->id }} - {{ $item->cara }}</option>
                                        @endforeach
                                    </x-input.select>


                                    <label for="sarana_angkut" class="block text-sm font-medium text-gray-700 my-4">Nama Sarana Angkut</label>
                                    <x-input.text wire:model="pengangkut.sarana_angkut" id="sarana_angkut" placeholder=""/>

                                    <label for="nomor_voy_flight" class="block text-sm font-medium text-gray-700 my-4">Nomor Voy/Flight</label>
                                    <x-input.text wire:model="pengangkut.nomor_voy_flight" id="nomor_voy_flight" placeholder=""/>

                                    <label for="bendera" class="block text-sm font-medium text-gray-700 my-4">Bendera</label>
                                    <x-input.select wire:model="pengangkut.bendera" id="bendera">
                                        <option value="" selected>Belum Memilih</option>
                                        @foreach (App\Models\Country::get() as $country)
                                            <option value="{{ $country->id }}">{{ $country->code }} - {{ $country->name }}</option>
                                        @endforeach
                                    </x-input.select>

                                    <label for="tanggal_perkiraan" class="block text-sm font-medium text-gray-700 my-4">Perkiraan Tanggal Tiba</label>
                                    <x-input.date wire:model="pengangkut.tanggal_perkiraan" id="tanggal_perkiraan"/>
                                </div>
                            </div>
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Pelabuhan & Tempat Penimbunan<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="pelabuhan_muat" class="block text-sm font-medium text-gray-700 mb-4">Pelabuhan Muat</label>
                                    <x-input.text wire:model="pengangkut.pelabuhan_muat" id="pelabuhan_muat" placeholder="Pelabuhan Muat"/>
                                    <label for="pelabuhan_transit" class="block text-sm font-medium text-gray-700 my-4">Pelabuhan Transit</label>
                                    <x-input.text wire:model="pengangkut.pelabuhan_transit" id="pelabuhan_transit" placeholder="Pelabuhan Transit"/>
                                    <label for="tempat_penimbunan" class="block text-sm font-medium text-gray-700 my-4">Tempat Penimbunan</label>
                                    <x-input.text wire:model="pengangkut.tempat_penimbunan" id="tempat_penimbunan" placeholder="Tempat Penimbunan"/>
                                </div>
                            </div>

                            <div class="col-span-3 mt-5 text-right">
                                <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800 dark:border-gray-700">Selanjutnya</button>
                            </div>
                        </div>                        
                    </p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 @if ($getCurrentPage != 'kemasan') hidden @endif" id="kemasan" role="tabpanel" aria-labelledby="kemasan-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        <div class="grid grid-cols-2 gap-3">
                            <div class="wrap">
                                <h1 class="text-lg font-semibold text-gray-900">Kemasan</h1>

                                <div class="py-4 space-y-4">
                                    <!-- Top Bar -->
                                    <div class="flex justify-between">
                                        <div class="w-2/4 flex space-x-4">
                                            <x-input.text wire:model="filters.seri" placeholder="Cari Kemasan..." />
                                        </div>

                                        <div class="space-x-2 flex items-center">
                                            <x-input.group borderless paddingless for="perPage" label="Halaman">
                                                <x-input.select wire:model="perPage" id="perPage">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                </x-input.select>
                                            </x-input.group>

                                            <x-dropdown label="Aksi">
                                                <x-dropdown.item type="button" wire:click="exportSelected" class="flex items-center space-x-2">
                                                    <x-icon.download class="text-cool-gray-400"/> <span>Ekspor</span>
                                                </x-dropdown.item>

                                                <x-dropdown.item type="button" wire:click="$toggle('showDeleteModal')" class="flex items-center space-x-2">
                                                    <x-icon.trash class="text-cool-gray-400"/> <span>Hapus</span>
                                                </x-dropdown.item>
                                            </x-dropdown>

                                            <livewire:import-transactions />

                                            <x-button.primary wire:click="create"><x-icon.plus/> Baru</x-button.primary>
                                        </div>
                                    </div>


                                    <!-- Transactions Table -->
                                    <div class="flex-col space-y-4">
                                        <x-table>
                                            <x-slot name="head">
                                                <x-table.heading class="pr-0 w-8">
                                                    <x-input.checkbox wire:model="selectPage" />
                                                </x-table.heading>

                                                <x-table.heading sortable multi-column wire:click="sortBy('seri')" :direction="$sorts['seri'] ?? null">Seri</x-table.heading>
                                                <x-table.heading sortable multi-column wire:click="sortBy('jenis_dokumen')" :direction="$sorts['jenis_dokumen'] ?? null">Jenis</x-table.heading>
                                                <x-table.heading sortable multi-column wire:click="sortBy('nomor_dokumen')" :direction="$sorts['nomor_dokumen'] ?? null">Nomor</x-table.heading>
                                                <x-table.heading sortable multi-column wire:click="sortBy('tanggal_dokumen')" :direction="$sorts['tanggal_dokumen'] ?? null">Tanggal</x-table.heading>

                                                <x-table.heading />
                                            </x-slot>

                                            <x-slot name="body">
                                                @if ($selectPage)
                                                <x-table.row class="bg-cool-gray-200" wire:key="row-message">
                                                    <x-table.cell colspan="8">
                                                        @unless ($selectAll)
                                                        <div>
                                                            <span>Anda telah memilih <strong>{{ $dokumens->count() }}</strong> list Dokumen Lampiran, Apakah anda mau pilih semua data <strong>{{ $dokumens->total() }}</strong>?</span>
                                                            <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All</x-button.link>
                                                        </div>
                                                        @else
                                                        <span>Anda telah memilih <strong>{{ $dokumens->total() }}</strong> data.</span>
                                                        @endif
                                                    </x-table.cell>
                                                </x-table.row>
                                                @endif

                                                @forelse ($dokumens as $dokumen)
                                                <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $dokumen->id }}">
                                                    <x-table.cell class="pr-0">
                                                        <x-input.checkbox wire:model="selected" value="{{ $dokumen->id }}" />
                                                    </x-table.cell>

                                                    <x-table.cell>
                                                        <span class="text-cool-gray-900 font-medium">{{ $dokumen->seri }} </span>
                                                    </x-table.cell>

                                                    <x-table.cell>
                                                        <span class="text-cool-gray-900 font-medium">{{ $dokumen->jenis_dokumen }} </span>
                                                    </x-table.cell>

                                                    <x-table.cell>
                                                        <span class="text-cool-gray-900 font-medium">{{ $dokumen->nomor_dokumen }} </span>
                                                    </x-table.cell>

                                                    <x-table.cell>
                                                        <span class="text-cool-gray-900 font-medium">{{ $dokumen->tanggal_dokumen }} </span>
                                                    </x-table.cell>

                                                    <x-table.cell>
                                                        <x-button.link wire:click="edit({{ $dokumen->id }})">Edit</x-button.link>
                                                    </x-table.cell>
                                                </x-table.row>
                                                @empty
                                                <x-table.row>
                                                    <x-table.cell colspan="8">
                                                        <div class="flex justify-center items-center space-x-2">
                                                            <x-icon.inbox class="h-8 w-8 text-cool-gray-400" />
                                                            <span class="font-medium py-8 text-cool-gray-400 text-xl">Tidak ada list Kemasan yang ditemukan...</span>
                                                        </div>
                                                    </x-table.cell>
                                                </x-table.row>
                                                @endforelse
                                            </x-slot>
                                        </x-table>

                                        <div>
                                            {{ $dokumens->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap">
                                <h1 class="text-lg font-semibold text-gray-900">Peti Kemas</h1>

                                <div class="py-4 space-y-4">
                                    <!-- Top Bar -->
                                    <div class="flex justify-between">
                                        <div class="w-2/4 flex space-x-4">
                                            <x-input.text wire:model="filters.seri" placeholder="Cari Peti Kemas..." />
                                        </div>

                                        <div class="space-x-2 flex items-center">
                                            <x-input.group borderless paddingless for="perPage" label="Halaman">
                                                <x-input.select wire:model="perPage" id="perPage">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                </x-input.select>
                                            </x-input.group>

                                            <x-dropdown label="Aksi">
                                                <x-dropdown.item type="button" wire:click="exportSelected" class="flex items-center space-x-2">
                                                    <x-icon.download class="text-cool-gray-400"/> <span>Ekspor</span>
                                                </x-dropdown.item>

                                                <x-dropdown.item type="button" wire:click="$toggle('showDeleteModal')" class="flex items-center space-x-2">
                                                    <x-icon.trash class="text-cool-gray-400"/> <span>Hapus</span>
                                                </x-dropdown.item>
                                            </x-dropdown>

                                            <livewire:import-transactions />

                                            <x-button.primary wire:click="create"><x-icon.plus/> Baru</x-button.primary>
                                        </div>
                                    </div>


                                    <!-- Transactions Table -->
                                    <div class="flex-col space-y-4">
                                        <x-table>
                                            <x-slot name="head">
                                                <x-table.heading class="pr-0 w-8">
                                                    <x-input.checkbox wire:model="selectPage" />
                                                </x-table.heading>

                                                <x-table.heading sortable multi-column wire:click="sortBy('seri')" :direction="$sorts['seri'] ?? null">Seri</x-table.heading>
                                                <x-table.heading sortable multi-column wire:click="sortBy('jenis_dokumen')" :direction="$sorts['jenis_dokumen'] ?? null">Jenis</x-table.heading>
                                                <x-table.heading sortable multi-column wire:click="sortBy('nomor_dokumen')" :direction="$sorts['nomor_dokumen'] ?? null">Nomor</x-table.heading>
                                                <x-table.heading sortable multi-column wire:click="sortBy('tanggal_dokumen')" :direction="$sorts['tanggal_dokumen'] ?? null">Tanggal</x-table.heading>

                                                <x-table.heading />
                                            </x-slot>

                                            <x-slot name="body">
                                                @if ($selectPage)
                                                <x-table.row class="bg-cool-gray-200" wire:key="row-message">
                                                    <x-table.cell colspan="8">
                                                        @unless ($selectAll)
                                                        <div>
                                                            <span>Anda telah memilih <strong>{{ $dokumens->count() }}</strong> list Dokumen Lampiran, Apakah anda mau pilih semua data <strong>{{ $dokumens->total() }}</strong>?</span>
                                                            <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All</x-button.link>
                                                        </div>
                                                        @else
                                                        <span>Anda telah memilih <strong>{{ $dokumens->total() }}</strong> data.</span>
                                                        @endif
                                                    </x-table.cell>
                                                </x-table.row>
                                                @endif

                                                @forelse ($dokumens as $dokumen)
                                                <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $dokumen->id }}">
                                                    <x-table.cell class="pr-0">
                                                        <x-input.checkbox wire:model="selected" value="{{ $dokumen->id }}" />
                                                    </x-table.cell>

                                                    <x-table.cell>
                                                        <span class="text-cool-gray-900 font-medium">{{ $dokumen->seri }} </span>
                                                    </x-table.cell>

                                                    <x-table.cell>
                                                        <span class="text-cool-gray-900 font-medium">{{ $dokumen->jenis_dokumen }} </span>
                                                    </x-table.cell>

                                                    <x-table.cell>
                                                        <span class="text-cool-gray-900 font-medium">{{ $dokumen->nomor_dokumen }} </span>
                                                    </x-table.cell>

                                                    <x-table.cell>
                                                        <span class="text-cool-gray-900 font-medium">{{ $dokumen->tanggal_dokumen }} </span>
                                                    </x-table.cell>

                                                    <x-table.cell>
                                                        <x-button.link wire:click="edit({{ $dokumen->id }})">Edit</x-button.link>
                                                    </x-table.cell>
                                                </x-table.row>
                                                @empty
                                                <x-table.row>
                                                    <x-table.cell colspan="8">
                                                        <div class="flex justify-center items-center space-x-2">
                                                            <x-icon.inbox class="h-8 w-8 text-cool-gray-400" />
                                                            <span class="font-medium py-8 text-cool-gray-400 text-xl">Tidak ada list Peti Kemas yang ditemukan...</span>
                                                        </div>
                                                    </x-table.cell>
                                                </x-table.row>
                                                @endforelse
                                            </x-slot>
                                        </x-table>

                                        <div>
                                            {{ $dokumens->links() }}
                                        </div>
                                    </div>
                                </div> --}}

                                <!-- Delete Transactions Modal -->
                                {{-- <form wire:submit.prevent="deleteSelected">
                                    <x-modal.confirmation wire:model.defer="showDeleteModal">
                                        <x-slot name="title">Hapus List Dokumen Lampiran</x-slot>

                                        <x-slot name="content">
                                            <div class="py-8 text-cool-gray-700">Apakah anda yakin? Data yang telah dihapus tidak dapat dikembalikan.</div>
                                        </x-slot>

                                        <x-slot name="footer">
                                            <x-button.secondary wire:click="$set('showDeleteModal', false)">Batal</x-button.secondary>

                                            <x-button.primary type="submit">Hapus</x-button.primary>
                                        </x-slot>
                                    </x-modal.confirmation>
                                </form> --}}

                                <!-- Save Transaction Modal -->
                                {{-- <form wire:submit.prevent="save">
                                    <x-modal.dialog wire:model.defer="showEditModal">
                                        <x-slot name="title">Edit List Dokumen Lampiran</x-slot>

                                        <x-slot name="content">
                                            <x-input.group for="seri" label="Seri" :error="$errors->first('dokumenlain.seri')">
                                                <x-input.text wire:model="dokumenlain.seri" id="seri" placeholder="Seri" />
                                            </x-input.group>

                                            <x-input.group for="jenis_dokumen" label="Jenis Dokumen" :error="$errors->first('dokumenlain.jenis_dokumen')">

                                                <x-input.select wire:model="dokumenlain.jenis_dokumen" id="jenis_dokumen-status">
                                                    <option value="">Pilih Jenis Dokumen...</option>
                                                    <option value="03001 - Izin Prinsip Pendirian Kawasan Berikat">03001 - Izin Prinsip Pendirian Kawasan Berikat</option>
                                                    <option value="380- INVOICE">380- INVOICE</option>
                                                </x-input.select>
                                            </x-input.group>

                                            <x-input.group for="nomor_dokumen" label="Nomor Dokumen" :error="$errors->first('dokumenlain.nomor_dokumen')">
                                                <x-input.text wire:model="dokumenlain.nomor_dokumen" id="nomor_dokumen" placeholder="Nomor Dokumen" />
                                            </x-input.group>
                                            
                                            <x-input.group for="tanggal_dokumen" label="Tanggal Dokumen" :error="$errors->first('dokumenlain.tanggal_dokumen')">
                                                <x-input.date wire:model="dokumenlain.tanggal_dokumen" id="tanggal_dokumen" placeholder="Tanggal Dokumen" />
                                            </x-input.group>

                                        </x-slot>

                                        <x-slot name="footer">
                                            <x-button.secondary wire:click="$set('showEditModal', false)">Cancel</x-button.secondary>

                                            <x-button.primary type="submit">Save</x-button.primary>
                                        </x-slot>
                                    </x-modal.dialog>
                                </form> --}}
                                {{-- </div>
                            </div>
                        </div>
                    </p>
                </div> --}}
                {{-- <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 @if ($getCurrentPage != 'transaksi') hidden @endif" id="transaksi" role="tabpanel" aria-labelledby="transaksi-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Harga<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="valuta" class="block text-sm font-medium text-gray-700 mb-4">Valuta</label>
                                    <x-input.select wire:model="transaksi.valuta" id="valuta">
                                        <option value="" selected>Belum Memilih</option>
                                        @foreach (App\Models\ListValuta::get() as $item)
                                            <option value="{{ $item->id }}">{{ $item->code }} - {{ $item->name }}</option>
                                        @endforeach
                                    </x-input.select>
                                    <label for="ndpbm" class="block text-sm font-medium text-gray-700 my-4">NDPBM</label>
                                    <x-input.text wire:model="transaksi.ndpbm" id="ndpbm" placeholder="NDPBM"/>
                                    <label for="jenis_transaksi" class="block text-sm font-medium text-gray-700 my-4">Jenis Transaksi</label>
                                    <x-input.select wire:model="transaksi.jenis_transaksi" id="jenis_transaksi">
                                        <option value="" selected>Belum Memilih</option>
                                        @foreach (App\Models\JenisTransaksi::get() as $item)
                                            <option value="{{ $item->id }}">{{ $item->code }} - {{ $item->name }}</option>
                                        @endforeach
                                    </x-input.select>
                                    <label for="harga_barang" class="block text-sm font-medium text-gray-700 my-4">Harga Barang</label>

                                    <div class="grid grid-cols-2 gap-2">
                                        <x-input.select wire:model="transaksi.kode_barang" id="kode_barang">
                                            <option value="" selected>Belum Memilih</option>
                                            @foreach (App\Models\ListKodeHarga::get() as $item)
                                                <option value="{{ $item->id }}">{{ $item->code }} - {{ $item->name }}</option>
                                            @endforeach
                                        </x-input.select>
                                        <x-input.text wire:model="transaksi.harga_barang" id="harga_barang" placeholder="Harga"/>
                                    </div>

                                    
                                    <label for="nilai_pabean" class="block text-sm font-medium text-gray-700 my-4">Nilai Pabean</label>
                                    <x-input.text wire:model="transaksi.nilai_pabean" id="nilai_pabean" placeholder="Nilai Pabean"/>
                                    
                                </div>
                            </div>

                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Harga Lainnya<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-4">Biaya Penambah</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Biaya Penambah"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Biaya Pengurang</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Biaya Pengurang"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Freight</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder=""/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Asuransi</label>
                                    <div class="grid grid-cols-2 gap-2">
                                        <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder=""/>
                                        <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder=""/>
                                    </div>
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Voluntary Declaration</label>
                                    <x-input.date wire:model="editing.nomor_aju_pabean" id="date"/>
                                </div>
                            </div>
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Pelabuhan & Tempat Penimbunan<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-4">Pelabuhan Muat</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Pelabuhan Muat"/>
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Pelabuhan Transit</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Pelabuhan Transit"/>
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Pelabuhan Tujuan</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Pelabuhan Tujuan"/>
                                </div>
                            </div>
                        </div> 
                        <div class="col-span-3 mt-5 text-right">
                                <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800 dark:border-gray-700">Selanjutnya</button>
                            </div>
                    </p>
                </div> --}}
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 @if ($getCurrentPage != 'barang') hidden @endif" id="barang" role="tabpanel" aria-labelledby="barang-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        <h1 class="text-lg font-semibold text-gray-900">List Barang</h1>

                        <div class="py-4 space-y-4">
                            <!-- Top Bar -->
                            <div class="flex justify-between">
                                <div class="w-2/4 flex space-x-4">
                                    <x-input.text wire:model="filters.seri" placeholder="Cari Dokumen..." />
                                </div>

                                <div class="space-x-2 flex items-center">
                                    <x-input.group borderless paddingless for="perPage" label="Halaman">
                                        <x-input.select wire:model="perPage" id="perPage">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                        </x-input.select>
                                    </x-input.group>

                                    <x-dropdown label="Aksi">
                                        <x-dropdown.item type="button" wire:click="exportSelected" class="flex items-center space-x-2">
                                            <x-icon.download class="text-cool-gray-400"/> <span>Ekspor</span>
                                        </x-dropdown.item>

                                        <x-dropdown.item type="button" wire:click="$toggle('showDeleteModal')" class="flex items-center space-x-2">
                                            <x-icon.trash class="text-cool-gray-400"/> <span>Hapus</span>
                                        </x-dropdown.item>
                                    </x-dropdown>

                                    <livewire:import-transactions />

                                    <x-button.primary wire:click="create"><x-icon.plus/> Baru</x-button.primary>
                                </div>
                            </div>


                            <!-- Transactions Table -->
                            <div class="flex-col space-y-4">
                                <x-table>
                                    <x-slot name="head">
                                        <x-table.heading class="pr-0 w-8">
                                            <x-input.checkbox wire:model="selectPage" />
                                        </x-table.heading>

                                        <x-table.heading sortable multi-column wire:click="sortBy('seri')" :direction="$sorts['seri'] ?? null">Pos Tarif</x-table.heading>
                                        <x-table.heading sortable multi-column wire:click="sortBy('jenis_dokumen')" :direction="$sorts['jenis_dokumen'] ?? null">Pos Tarif</x-table.heading>
                                        <x-table.heading sortable multi-column wire:click="sortBy('nomor_dokumen')" :direction="$sorts['nomor_dokumen'] ?? null">UR Barang</x-table.heading>
                                        <x-table.heading sortable multi-column wire:click="sortBy('tanggal_dokumen')" :direction="$sorts['tanggal_dokumen'] ?? null">Merek</x-table.heading>
                                        <x-table.heading sortable multi-column wire:click="sortBy('nomor_dokumen')" :direction="$sorts['nomor_dokumen'] ?? null">Jumlah Satuan</x-table.heading>
                                        <x-table.heading sortable multi-column wire:click="sortBy('tanggal_dokumen')" :direction="$sorts['tanggal_dokumen'] ?? null">Bruto</x-table.heading>

                                        <x-table.heading />
                                    </x-slot>

                                    <x-slot name="body">
                                        @if ($selectPage)
                                        <x-table.row class="bg-cool-gray-200" wire:key="row-message">
                                            <x-table.cell colspan="8">
                                                @unless ($selectAll)
                                                <div>
                                                    <span>Anda telah memilih <strong>{{ $dokumens->count() }}</strong> list Dokumen Lampiran, Apakah anda mau pilih semua data <strong>{{ $dokumens->total() }}</strong>?</span>
                                                    <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All</x-button.link>
                                                </div>
                                                @else
                                                <span>Anda telah memilih <strong>{{ $dokumens->total() }}</strong> data.</span>
                                                @endif
                                            </x-table.cell>
                                        </x-table.row>
                                        @endif

                                        {{-- @forelse ($dokumens as $dokumen)
                                        <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $dokumen->id }}">
                                            <x-table.cell class="pr-0">
                                                <x-input.checkbox wire:model="selected" value="{{ $dokumen->id }}" />
                                            </x-table.cell>

                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $dokumen->seri }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $dokumen->jenis_dokumen }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $dokumen->nomor_dokumen }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $dokumen->tanggal_dokumen }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <x-button.link wire:click="edit({{ $dokumen->id }})">Edit</x-button.link>
                                            </x-table.cell>
                                        </x-table.row>
                                        @empty --}}
                                        <x-table.row>
                                            <x-table.cell colspan="8">
                                                <div class="flex justify-center items-center space-x-2">
                                                    <x-icon.inbox class="h-8 w-8 text-cool-gray-400" />
                                                    <span class="font-medium py-8 text-cool-gray-400 text-xl">Tidak ada list Barang yang ditemukan...</span>
                                                </div>
                                            </x-table.cell>
                                        </x-table.row>
                                        {{-- @endforelse --}}
                                    </x-slot>
                                </x-table>

                                <div>
                                    {{ $dokumens->links() }}
                                </div>
                            </div>
                        </div>

                        <!-- Delete Transactions Modal -->
                        <form wire:submit.prevent="deleteSelected">
                            <x-modal.confirmation wire:model.defer="showDeleteModal">
                                <x-slot name="title">Hapus List Barang</x-slot>

                                <x-slot name="content">
                                    <div class="py-8 text-cool-gray-700">Apakah anda yakin? Data yang telah dihapus tidak dapat dikembalikan.</div>
                                </x-slot>

                                <x-slot name="footer">
                                    <x-button.secondary wire:click="$set('showDeleteModal', false)">Batal</x-button.secondary>

                                    <x-button.primary type="submit">Hapus</x-button.primary>
                                </x-slot>
                            </x-modal.confirmation>
                        </form>

                        <!-- Save Transaction Modal -->
                        <form wire:submit.prevent="save">
                            <x-modal.dialog wire:model.defer="showEditModal">
                                <x-slot name="title">List Barang</x-slot>

                                <x-slot name="content">

                                    <x-input.group for="pos_tarif" label="Pos Tarif" :error="$errors->first('')">
                                        <x-input.text  id="pos_tarif" placeholder="Pos Tarif" />
                                    </x-input.group>

                                    <x-input.group for="ur_barang" label="UR Barang" :error="$errors->first('')">
                                        <x-input.text  id="ur_barang" placeholder="UR Barang" />
                                    </x-input.group>

                                    <x-input.group for="merek" label="Merek" :error="$errors->first('')">
                                        <x-input.text  id="merek" placeholder="Merek" />
                                    </x-input.group>

                                    <x-input.group for="jumlah_satuan" label="Jumlah Satuan Dokumen" :error="$errors->first('')">

                                        <x-input.select id="jenis_dokumen-status">
                                            <option value="">Pilih jumlah satuan...</option>
                                            <option value="05 - lift">05 - lift</option>
                                            <option value="06 - small spray">06 - small spray</option>
                                            <option value="08 - heat lot">08 - heat lot</option>
                                            <option value="10 - group">10 - group</option>
                                            <option value="11 - outfit">11 - outfit</option>
                                            <option value="13 - lifrationt">13 - ration</option>
                                        </x-input.select>
                                    </x-input.group>

                                    <x-input.group for="jumlah_satuan" label="Bruto" :error="$errors->first('')">
                                        <x-input.text  id="jumlah_satuan" placeholder="Bruto" />
                                    </x-input.group>

                                </x-slot>

                                <x-slot name="footer">
                                    <x-button.secondary wire:click="$set('showEditModal', false)">Cancel</x-button.secondary>

                                    <x-button.primary type="submit">Save</x-button.primary>
                                </x-slot>
                            </x-modal.dialog>
                        </form>
                    </p>
                </div>
                {{-- <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 @if ($getCurrentPage != 'pungut') hidden @endif" id="pungut" role="tabpanel" aria-labelledby="pungut-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Pungut</p>
                </div> --}}
            </div>
    </div>
</div>

{{-- @push('livewireScripts')
    
@endpush --}}