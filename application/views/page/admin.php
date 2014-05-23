<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item" href="<?php echo site_url('base/dashboard'); ?>">Home</a>
            <a class="blog-nav-item" href="<?php echo site_url('base/dashboard/contact'); ?>">Contact</a>
            <a class="blog-nav-item" href="<?php echo site_url('base/dashboard/about'); ?>">About</a>
            <a class="blog-nav-item active" href="<?php echo site_url('base/dashboard/admin'); ?>">Admin</a>
            <a class="blog-nav-item" href="<?php echo site_url('base/dashboard/logout'); ?>">Keluar</a>
        </nav>
    </div>
</div>
<div class="col-md-12">
    <div class="container">
        <div class="col-md-5 pad-top-btm-30">
            <h5 class="bold mg-top-10"><span>Hai... </span><?php echo $this->session->userdata('logged_in')['nama']; ?></h5>
            <p><strong style="color: #d2322d;">Terima Kasih</strong> Atas partisipasi Anda telah bersedia menyempurkan aplikasi ini.</p>
            <p>Untuk menambah data, masukkan kata pada kolom dibawah.</p>
            <div class="mg-btm-10">
                <?php echo form_open('base/insert'); ?>
                <div class="form-group">
                    <label class="text-info">Kata Tidak Baku</label>
                    <font style="color: #d2322d;"><?php echo form_error('tidak_baku'); ?></font>
                    <input name="tidak_baku" type="text" class="form-control" placeholder="Kata Tidak Baku">
                </div>
                <div class="form-group">
                    <label class="text-info">Kata Baku</label>
                    <font style="color: #d2322d;"><?php echo form_error('baku'); ?></font>
                    <input name="baku" type="text" class="form-control" placeholder="Kata Baku">
                </div>
                <button type="submit" name="simpan" class="btn btn-primary btn-sm bold">Simpan</button>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-md-12 pad-top-btm-30">
        <h5 class="bold mg-top-10" style="font-size: 25px;">Daftar Kata Tidak Baku dan Kata Baku Bahasa Indonesia</h5>
        <div class="list-data">
            <h5 class="bold mg-top-10">Kata Tidak Baku <span class="glyphicon glyphicon-chevron-right"></span> Kata Baku</h5>
            <ul class="list-inline">
                <?php foreach ($kata_kata as $baris) { ?>
                <li class="pad-top-10 pad-btm-10">
                    <p class="left mg-left-10"><?php echo $baris->kata_tidak_baku; ?></p>
                    <span class="left glyphicon glyphicon-chevron-right mg-left-10"></span>
                    <p class="left mg-left-10"><?php echo $baris->kata_baku; ?></p>
                    <a onclick="return confirm('Anda Yakin :(')" href="<?php echo site_url('base/dashboard/delete?id='.$baris->id_kata)?>" class="right mg-right-10"><button data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a>
                    <a data-toggle="modal" data-target="#edit_<?php echo $baris->id_kata?>" class="right mg-right-10"><button data-toggle="tooltip" data-placement="top" title="Ubah" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></span></button></a>
                </li>
                <!-- Modal edit Data -->
                <div class="modal fade" id="edit_<?php echo $baris->id_kata?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Ubah Kata</h4>
                            </div>
                            <div class="modal-body">
                                <div class="mg-btm-10">
                                    <form action="edit" method="POST">
                                        <input name="id" type="hidden" value="<?php echo $baris->id_kata; ?>" /><!--mengirim data input id kata-->
                                        <div class="form-group">
                                            <label class="text-info">Kata Tidak Baku</label>
                                            <?php echo form_error('tidak_baku'); ?>
                                            <input name="tidak_baku" value="<?php echo $baris->kata_tidak_baku; ?>" type="text" class="form-control" placeholder="Kata Tidak Baku">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-info">Kata Baku</label>
                                            <?php echo form_error('baku'); ?>
                                            <input name="baku" value="<?php echo $baris->kata_baku; ?>" type="text" class="form-control" placeholder="Kata Baku">
                                        </div>
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button name="ubah" type="submit" class="btn btn-primary btn-sm bold">Ubah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end of modal-->
            <?php } ?>
        </ul>
    </div>
    <div class="row center" style="z-index: 4; padding-bottom: 10px;">
        <ul class="pagination pagination-sm">
            <li class="disabled"><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>
    </div>
</div>  
</div>
</div>

