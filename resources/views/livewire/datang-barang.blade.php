<div>
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

    <h1 class="text-lg font-semibold text-gray-900">Data Barang</h1>

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
                                <span>Anda telah memilih <strong>{{ $items->count() }}</strong> list Dokumen Lampiran, Apakah anda mau pilih semua data <strong>{{ $items->total() }}</strong>?</span>
                                <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All</x-button.link>
                            </div>
                            @else
                            <span>Anda telah memilih <strong>{{ $items->total() }}</strong> data.</span>
                            @endif
                        </x-table.cell>
                    </x-table.row>
                    @endif

                    {{-- @forelse ($items as $item)
                    <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $item->id }}">
                        <x-table.cell class="pr-0">
                            <x-input.checkbox wire:model="selected" value="{{ $item->id }}" />
                        </x-table.cell>

                        <x-table.cell>
                            <span class="text-cool-gray-900 font-medium">{{ $item->seri }} </span>
                        </x-table.cell>

                        <x-table.cell>
                            <span class="text-cool-gray-900 font-medium">{{ $item->jenis_dokumen }} </span>
                        </x-table.cell>

                        <x-table.cell>
                            <span class="text-cool-gray-900 font-medium">{{ $item->nomor_dokumen }} </span>
                        </x-table.cell>

                        <x-table.cell>
                            <span class="text-cool-gray-900 font-medium">{{ $item->tanggal_dokumen }} </span>
                        </x-table.cell>

                        <x-table.cell>
                            <x-button.link wire:click="edit({{ $item->id }})">Edit</x-button.link>
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
                {{ $items->links() }}
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
</div>