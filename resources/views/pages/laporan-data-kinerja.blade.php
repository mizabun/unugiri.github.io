@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Data List - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <h2 class="intro-y text-lg font-medium mt-10">Data List Layout</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex space-between flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#modal-add-laporan"
                class="btn btn-primary shadow-md mr-2">Tambah Laporan Kinerja</a>
            <div class="hidden md:block mx-auto text-slate-500"></div>
            <div class="w-full  sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
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
                        <th class="whitespace-nowrap">NAMA PROGRAM</th>
                        <th class="whitespace-nowrap">PROGRAM UNIT KERJA</th>
                        <th class="whitespace-nowrap">LATAR BELAKANG (RESIONAL)</th>
                        <th class="text-center whitespace-nowrap">INDIKATOR</th>
                        <th class="text-center whitespace-nowrap">BASELINE</th>
                        <th class="text-center whitespace-nowrap">FILE</th>
                        <th class="text-center whitespace-nowrap">AKSI</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="intro-x">
                        <td class="w-40">
                            Beasiswa
                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">sdsdsds</a>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                                scscscscs</div>
                        </td>
                        <td class="">edddddd</td>
                        <td class="w-40">
                            <div class="flex items-center justify-center">
                                ddddd
                            </div>
                        </td>
                        <td class="w-40">
                            <div class="flex items-center justify-center">
                                ddddd
                            </div>
                        </td>
                        <td class="w-40">
                            <div class="flex items-center justify-center">
                                ddddd
                            </div>
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href="invoice">
                                    <i data-lucide="eye" class="w-4 h-4 mr-1"></i> Lihat Detail
                                </a>
                                <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#edit-item-modal">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                </a>
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#delete-confirmation-modal">
                                    <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Hapus
                                </a>
                            </div>
                        </td>
                    </tr>

                    <tr class="intro-x">
                        <td class="w-40">
                            Beasiswa
                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">sdsdsds</a>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                                scscscscs</div>
                        </td>
                        <td class="">edddddd</td>
                        <td class="w-40">
                            <div class="flex items-center justify-center">
                                ddddd
                            </div>
                        </td>
                        <td class="w-40">
                            <div class="flex items-center justify-center">
                                ddddd
                            </div>
                        </td>
                        <td class="w-40">
                            <div class="flex items-center justify-center">
                                ddddd
                            </div>
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href="invoice">
                                    <i data-lucide="eye" class="w-4 h-4 mr-1"></i> Lihat Detail
                                </a>
                                <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#edit-item-modal">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                </a>
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#delete-confirmation-modal">
                                    <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Hapus
                                </a>
                            </div>
                        </td>
                    </tr>

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
    <div id="modal-add-laporan" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Tambah Produk Baru</h2>
                </div>

                <form action="update-data" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- BEGIN: Form Layout -->
                    <div class="intro-y box p-5">
                        <div>
                            <label for="crud-form-1" class="form-label">Nama Program</label>
                            <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-2" class="form-label">Program Unit Kerja</label>
                            <input id="crud-form-2" type="text" class="form-control w-full" placeholder="">
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-3" class="form-label">Latar Belakang</label>
                            <input id="crud-form-3" type="text" class="form-control w-full" placeholder="">
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-4" class="form-label">Indikator</label>
                            <input id="crud-form-4" type="text" class="form-control w-full" placeholder="">
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-5" class="form-label">Baseline</label>
                            <input id="crud-form-5" type="text" class="form-control w-full" placeholder="">
                        </div class="mt-3">
                        <div class="mt-3">
                            <label for="crud-form-6" class="form-label">Baseline</label>
                            <input id="crud-form-6" type="file" class="form-control w-full" placeholder="">
                        </div class="mt-3">
                        <div class="text-right mt-5">
                            <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                            <button type="button" class="btn btn-primary w-24">Save</button>
                        </div>
                    </div>
                    <!-- END: Form Layout -->
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
