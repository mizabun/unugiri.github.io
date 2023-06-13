@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Data List - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <h2 class="intro-y text-lg font-medium mt-10">Data List Layout</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            {{-- <select class="btn btn-primary shadow-md mr-2">
                <option>Urutkan</option>
                <option>A ke Z</option>
                <option>Z ke A</option>
                <option>Harga Terndah</option>
                <option>Harga Tertinggi</option>
            </select> --}}
            <div class="dropdown">
                <button class="dropdown-toggle btn btn-primary shadow-md mr-2" aria-expanded="false" data-tw-toggle="dropdown">
                    Urutkan
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                A ke Z
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                Z ke A
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                Harga Terendah
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                Harga Tertinggi
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-lucide="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export ke Excel
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export ke PDF
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
                <i data-lucide="calendar" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                <input type="text" class="datepicker form-control sm:w-56 box pl-10">
            </div>
            <div class="hidden md:block mx-auto text-slate-500">Menampilkan 1 sampai 10 dari 150 data</div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">GAMBAR</th>
                        <th class="whitespace-nowrap">NAMA PRODUK</th>
                        <th class="text-center whitespace-nowrap">NO. INV</th>
                        <th class="text-center whitespace-nowrap">TERJUAL</th>
                        <th class="text-center whitespace-nowrap">TANGGAL</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $produk)
                        <tr class="intro-x">
                            <td class="w-40">
                                {{-- <div class="flex"> --}}
                                <div class="w-10 h-10 image-fit zoom-in">
                                    {{-- <img alt="Midone - HTML Admin Template" class="tooltip rounded-full"
                                        src="{{ asset('dist/images/' . $faker['images'][0]) }}"
                                        title="Uploaded at {{ $faker['dates'][0] }}"> --}}
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full"
                                        src="{{ asset('dist/images/' . $produk->gambar_produk) }}">
                                </div>
                                {{-- <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                        <img alt="Midone - HTML Admin Template" class="tooltip rounded-full"
                                            src="{{ asset('dist/images/' . $faker['images'][1]) }}"
                                            title="Uploaded at {{ $faker['dates'][0] }}">
                                    </div>
                                    <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                        <img alt="Midone - HTML Admin Template" class="tooltip rounded-full"
                                            src="{{ asset('dist/images/' . $faker['images'][2]) }}"
                                            title="Uploaded at {{ $faker['dates'][0] }}">
                                    </div> --}}
                                {{-- </div> --}}
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">{{ $produk->nama_produk }}</a>
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                                    {{ $produk->kategori_produk }}</div>
                            </td>
                            <td class="text-center">INV-0206020 - RANDY</td>
                            <td class="w-40">
                                <div class="flex items-center justify-center">
                                    {{-- <i data-lucide="check-square" class="w-4 h-4 mr-2"></i>
                                    {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }} --}}
                                    2
                                </div>
                            </td>
                            <td class="text-center">20 Agustus 2022 , 19:20:34</td>
                            {{-- <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#edit-item-modal">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                    </a>
                                    <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#delete-confirmation-modal">
                                        <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Hapus
                                    </a>
                                </div>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-lucide="chevrons-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-lucide="chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-lucide="chevron-right"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-lucide="chevrons-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagination -->
    </div>
    <!-- BEGIN: Add New Item Modal -->
    <div id="add-item-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Tambah Produk Baru</h2>
                </div>

                <form action="update-data" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <input type="text" name="nama_produk">
                    <input type="submit" name="submit" value="Simpan"> --}}

                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12">
                            <label for="pos-form-1" class="form-label">Nama Produk</label>
                            <input id="pos-form-1" type="text" name="nama_produk" class="form-control flex-1"
                                placeholder="Nama Produk">
                        </div>
                        <div class="col-span-12">
                            <label for="pos-form-2" class="form-label">Kategori</label>
                            <input id="pos-form-2" type="text" name="kategori_produk" class="form-control flex-1"
                                placeholder="Makanan / Minuman ...">
                        </div>
                        <div class="col-span-12">
                            <label for="pos-form-3" class="form-label">Jumlah</label>
                            <input id="pos-form-3" type="text" name="jumlah_produk" class="form-control flex-1"
                                placeholder="20 ...">
                        </div>
                        <div class="col-span-12">
                            <label for="pos-form-4" class="form-label">Harga</label>
                            <input id="pos-form-4" type="text" class="form-control flex-1" name="harga_produk"
                                placeholder="14.000 ...">
                        </div>
                        <div class="col-span-12">
                            <label for="pos-form-5" class="form-label">Gambar Produk</label>
                            <input id="pos-form-5" type="file" class="form-control flex-1" name="gambar_produk"
                                placeholder="14.000 ...">
                        </div>
                    </div>
                    <div class="modal-footer text-right">
                        <button type="" name="" data-tw-dismiss="modal"
                            class="btn btn-outline-secondary w-32 mr-1">Batal</button>
                        {{-- <a class="btn btn-primary w-32" href="javascript:;" data-tw-toggle="modal"
                            data-tw-target="#failed-modal">Simpan</a> --}}
                        <button type="submit" name="submit" class="btn btn-primary w-32">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END: Add New Item Modal -->
    <!-- BEGIN: Delete Confirmation Modal -->
    <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                        <div class="text-3xl mt-5">Apakah Kamu Yakin?</div>
                        <div class="text-slate-500 mt-2">Kamu yakin ingin menghapus data ini? <br>Data yang telah dihapus
                            tidak dapat dikembalikan</div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-tw-dismiss="modal"
                            class="btn btn-outline-secondary w-24 mr-1">Batal</button>
                        <button type="button" class="btn btn-danger w-24">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->
    <!-- BEGIN: Edit Item Modal -->
    <div id="edit-item-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Edit Produk</h2>
                </div>
                <form action="" method="">
                    @csrf
                    {{-- <input type="text" name="nama_produk">
                    <input type="submit" name="submit" value="Simpan"> --}}

                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12">
                            <label for="pos-form-1" class="form-label">Nama Produk</label>
                            <input id="pos-form-1" type="text" name="nama_produk" class="form-control flex-1"
                                placeholder="Nama Produk">
                        </div>
                        <div class="col-span-12">
                            <label for="pos-form-2" class="form-label">Kategori</label>
                            <input id="pos-form-2" type="text" name="kategori_produk" class="form-control flex-1"
                                placeholder="Makanan / Minuman ...">
                        </div>
                        <div class="col-span-12">
                            <label for="pos-form-3" class="form-label">Jumlah</label>
                            <input id="pos-form-3" type="text" name="jumlah_produk" class="form-control flex-1"
                                placeholder="20 ...">
                        </div>
                        <div class="col-span-12">
                            <label for="pos-form-3" class="form-label">Harga</label>
                            <input id="pos-form-3" type="text" class="form-control flex-1" name="harga_produk"
                                placeholder="14.000 ...">
                        </div>
                    </div>
                    <div class="modal-footer text-right">
                        <button type="" name="" data-tw-dismiss="modal"
                            class="btn btn-outline-secondary w-32 mr-1">Batal</button>
                        <input type="submit" name="submit" class="btn btn-primary w-32" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END: Edit Item Modal -->
    <!-- BEGIN: Success Modal -->
    <div id="success-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="check-circle" class="w-16 h-16 text-success mx-auto mt-3"></i>
                        <div class="text-3xl mt-5">Good job!</div>
                        <div class="text-slate-500 mt-2">Produk baru berhasil ditambahkan!</div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-primary w-24">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Success Modal -->
    <!-- BEGIN: Delete Confirmation Modal -->
    <div id="failed-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                        <div class="text-3xl mt-5">OH No!</div>
                        <div class="text-slate-500 mt-2">Produk gagal ditambahkan<br>Periksa ulang data anda</div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-primary w-24">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->
@endsection
