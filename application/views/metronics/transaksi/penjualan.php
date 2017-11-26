<div class="page-content">
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="<?php echo base_url();?>">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Pelanggan</span>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-basket-loaded font-dark"></i>
                        <span class="caption-subject bold uppercase">Transaksi</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-9">
                                <form class="form-horizontal validate" id = "pelanggan_baru">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Nama Barang</label>
                                            <div class="col-md-8">
                                                <select id="goods" name = "nama_barang" class="form-control select2" data-parsley-required = "true" data-parsley-error-message="Silahkan masukkan kode barang">
                                                    <option></option>
                                                    <?php foreach($goods as $key => $value){?>
                                                    <option value="<?php echo $value->nama_barang?>" <?php echo ($value->stock > 0 ? '' : 'disabled="disabled"  ')?>><?php echo $value->nama_barang?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Kode Barang</label>
                                            <div class="col-md-8">
                                                <input type="text" id = "kode_barang" class="form-control" readonly="true">
                                                <input type = "hidden" id = "harga">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Jumlah</label>
                                            <div class="col-md-8">
                                                <input type="number" min = "1" name = "contact2" class="form-control" data-parsley-required = "true" data-parsley-error-message="Silahkan masukkan jumlah barang">
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button id="new_add" class="btn sbold green"> Tambah Item
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="sells">
                        <thead>
                            <tr>
                                <th> Kode </th>
                                <th> Nama </th>
                                <th> Qty </th>
                                <th> Harga </th>
                                <th> Jumlah </th>
                                <th><span class = "glyphicon glyphicon-chevron-down"></i></th>
                            </tr>
                        </thead>
                       <tbody>
                           <tr>
                               <td>BA002</td>
                               <td>Sendok Plastik</td>
                               <td>100</td>
                               <td>1000</td>
                               <td>16</td>
                               <td><i class="fa fa-trash-o"></td>
                           </tr>
                       </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#goods').on("change", function(e) {
            var nama = $(this).val();
            $.ajax({
                url: '<?php echo base_url();?>' + '/transaction/getKodeBarang',
                type : 'POST',
                data : {nama_barang : nama},
                dataType:'json',
                success : function(res) {
                    // console.log(data.status);
                    if(res.status == 'success'){
                        $('#kode_barang').val(res.data.kode_barang);
                        $('#harga').val(res.data.harga);
                    }
                }
            });
        });
    });
</script>