    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

<div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contact Us</h1>
            <p>
                Terimakasih telah belanja di toko kami.
            </p>
        </div>
    </div>

    <!-- Start Map -->
    </script>
    <!-- Ena Map -->

    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form action="table_pesanan/form_pesanan" class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control mt-1" id="tanggal" name="tangaal" placeholder="tanggal">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control mt-1" id="nama" name="nama" placeholder="Name">
                    </div>
                </div>
                    <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="alamat_pemesan">Alamat</label>
                        <input type="text" class="form-control mt-1" id="alamat_pemesan" name="alamat_pemesan" placeholder="alamat">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="no_hp">No HP</label>
                        <input type="text" class="form-control mt-1" id="no_hp" name="no_hp" placeholder="no hp">
                    </div>
                </div>
                <div>
                    <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control mt-1" id="email" name="email" placeholder="email...">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="jumlah_pesanan">Jumlah Pesanan</label>
                        <input type="text" class="form-control mt-1" id="jumlah_pesanan" name="jumlah_pesanan" placeholder="jumlah pesanan...">
                    </div>
                </div>
                
                <div>
                    <div class="row">
                    <div class="mb-3">
                        <label for="inputmessage">Deskripsi</label>
                        <textarea class="form-control mt-1" id="deskripsi" name="deskripsi" placeholder="deskripsi...." rows="8"></textarea>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="produk_id">produk_id</label>
                        <input type="text" class="form-control mt-1" id="produk_id" name="produk_id" placeholder="produk_id...">
                    </div>
                </div>
            
                <div class="row">
                    <div class="col text-end mt-2">
                        <input type="submit" class="btn btn-success btn-lg px-3" name="proses" value="Pesan">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->