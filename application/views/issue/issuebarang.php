<!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="<?php echo base_url(); ?>home"><i class="fa fa-home"></i> Beranda</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-archive"></i> Menu Barang<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url(); ?>satuan"><i class="fa fa-list-ol"></i> Satuan</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>kategori"><i class="fa fa-list-ul"></i> Kategori</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>barang"><i class="fa fa-archive"></i> Data Barang</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>supplier"><i class="fa fa-users"></i> Supplier</a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url(); ?>barangmasuk"><i class="fa fa-truck"></i> Barang Masuk</a>
                    </li> 
                    <li>
                        <a href="#" class="active-menu"><i class="fa fa-shopping-cart"></i> Issue Barang<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a  href="<?php echo base_url(); ?>issue"><i class="fa fa-shopping-cart"></i> Issue Reguler</a></a>
                            </li>
                            <li>
                                <a  href="<?php echo base_url(); ?>issuebc"><i class="fa fa-shopping-cart"></i> Issue Backcarge</a></a>
                            </li>
                        </ul>
                    </li>   
                    <li>
                        <a href="#"><i class="fa fa-money"></i> Sales<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a  href="<?php echo base_url(); ?>sales"><i class="fa fa-money"></i> Sales Reguler</a></a>
                            </li>
                            <li>
                                <a  href="<?php echo base_url(); ?>salesbc"><i class="fa fa-money"></i> Sales Backcarge</a></a>
                            </li>
                        </ul>
                    </li>         
                </ul>

            </div>

        </nav>
<div id="page-wrapper" >
    <div class="header"> 
        <h1 class="page-header">
            <i class="fa fa-shopping-cart"></i> DATA ISSUE BARANG
        </h1>
        <ol class="breadcrumb" style="margin-top: -30px; background-color: #333333;">
            <li><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ModalIssue"><i class="fa fa-plus-circle"></i>
                TAMBAH
                </button></li>
            
        </ol> 
    </div>
        
    <div id="page-inner" style="margin-top: -30px;"> 
           
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        Data Issue Barang
                    </div>
                    <div class="panel-body">
                        <?php echo $this->session->flashdata('notif')?>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover table-condensed" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>ID ISSUE</th>
                                        <th>NAMA BARANG</th>
                                        <th>TGL ISSUE</th>
                                        <th>JUMLAH ISSUE</th>
                                        <th>HARGA BARANG</th>
                                        <th>TOTAL HARGA</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 1; foreach($issue as $row){
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row->id_issue; ?></td>
                                        <td><?php echo $row->nm_brg; ?></td>
                                        <td><?php echo $row->tgl_issue; ?></td>
                                        <td class="text-center"><?php echo $row->jml_issue; ?></td>
                                        <td class="text-right"><?php echo $row->harga; ?></td>
                                        <td class="text-right"><?php echo $row->total_issue; ?></td>
                                        <td align="center">
                                            <a data-toggle="modal" data-target="#EditIssue<?php echo $row->id_issue; ?>" data-popup="tooltip" data-placement="top"  class="btn btn-xs btn-info" > <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="javascript:;" data-id="<?php echo $row->id_issue; ?>"
                                            data-nama="<?php echo $row->nm_brg; ?>" data-toggle="modal" data-target="#HapusIssue<?php echo $row->id_issue; ?>" class="btn btn-xs btn-danger"><i class="fa fa-times-circle"></i> </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
                <!--End Advanced Tables -->

                <!--  Modals Tambah-->
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>issue/simpanIssue">
                <div class="modal fade" id="ModalIssue" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #333333; color: #ffffff;">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></button>
                                <h4 class="modal-title" id="myModalLabel" id="judul"><i class="fa fa-shopping-cart"></i> TAMBAH ISSUE BARANG</h4>
                            </div>
                            <div class="modal-body">
                                <div id="tampil-modal">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Id Issue</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="id_issue" value="<?php echo $id_issue; ?>" class="form-control" placeholder="Id Issue" readonly required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Nama Barang</label>
                                        <div class="col-sm-9">
                                            <select name="nm_brg" class="form-control issue" required="">
                                                <option selected="" disabled="">-Cari Barang-</option>
                                                <?php foreach ($barang as $br): ?>
                                                <option value="<?php echo $br->id_brg; ?>"><?php echo $br->nm_brg.' | '.$br->harga; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Tanggal</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="tgl" class="form-control" placeholder="Nama Kategori" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Jumlah Issue</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="jml" class="form-control" placeholder="Jml Issue" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Keterangan</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="ket" class="form-control" value="REGULER" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer" style="background-color: #333333; color: #ffffff;">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> BATAL</button>
                                <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> SIMPAN</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                

                <!--Modal Edit-->
                <?php foreach($issue as $row): ?>
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>issue/updateIssue">
                <div class="modal fade" id="EditIssue<?php echo $row->id_issue; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #333333; color: #ffffff;">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></button>
                                <h4 class="modal-title" id="myModalLabel" id="judul"><i class="fa fa-shopping-cart"></i> UPDATE ISSUE BARANG</h4>
                            </div>
                            <div class="modal-body">
                                <div id="tampil-modal">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Id Issue</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="id_issue" value="<?php echo $row->id_issue; ?>" class="form-control" placeholder="Id Issue" readonly required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Nama Barang</label>
                                        <div class="col-sm-9">
                                            <select name="nm_brg" class="form-control issue2" required="" disabled="">
                                                <option selected="" disabled="">-Cari Barang-</option>
                                                <?php foreach ($barang as $br): ?>
                                                <option value="<?php echo $br->id_brg; ?>"<?php if($br->id_brg==$row->id_brg){echo 'selected';} ?>><?php echo $br->nm_brg.' | '.$br->harga; ?></option>
                                                <?php endforeach; ?>
                                                <input type="hidden" name="nm_brg2" value="<?php echo $row->id_brg ?>">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Tanggal</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="tgl" class="form-control" placeholder="Nama Kategori" required="" value="<?php echo $row->tgl_issue ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Jumlah Issue</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="jml" class="form-control" placeholder="Jml Issue" required="" value="<?php echo $row->jml_issue ?>">
                                            <input type="hidden" name="jml_lama" value="<?php echo $row->jml_issue ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Keterangan</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="ket" value="<?php echo $row->ket_issue ?>" class="form-control" readonly required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer" style="background-color: #333333; color: #ffffff;">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> BATAL</button>
                                <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> SIMPAN</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <?php endforeach; ?>
                <!--END Modal Edit-->

                <!--Modal Hapus-->
                <?php foreach($issue as $row): ?>
                <form method="post" action="<?php echo base_url(); ?>issue/deleteIssue">
                <div class="modal fade" id="HapusIssue<?php echo $row->id_issue; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #333333; color: #ffffff;">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></button>
                                <h4 class="modal-title" id="myModalLabel" id="judul"><i class="fa fa-question-circle"></i> KONFIRMASI</h4>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="id_hapus" id="id_hapus" value="<?php echo $row->id_issue; ?>">
                                <input type="hidden" name="id_brg" value="<?php echo $row->id_brg ?>">
                                <input type="hidden" name="jml" value="<?php echo $row->jml_issue ?>">
                                
                                <h4 class="alert alert-info">Apakah Anda Yakin akan menghapus data <label class="text-danger"><?php echo $row->nm_brg; ?></label>?</h4>
                            </div>
                            <div class="modal-footer" style="background-color: #333333; color: #ffffff;">
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-times-circle"></i> BATAL</button>
                                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check-circle"></i> HAPUS</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <?php endforeach; ?>

            </div>
        </div>
            <!-- /. ROW  -->
    </div>