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
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> Data Pelanggan</span>
                    </div>
                    <!-- <div class="actions">
                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                        </div>
                    </div> -->
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <button id="new_add" class="btn sbold green"> Add New
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="btn-group pull-right">
                                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-print"></i> Print </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th> Nama </th>
                                <th> Phone </th>
                                <th> Address </th>
                                <th> Joined </th>
                                <th><i class = "icon-list "></i></th>
                            </tr>
                        </thead>
                       <tbody></tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
</div>

<div class="modal fade" id="add_new" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Modal Title</h4>
            </div>
            <div class="modal-body"> 
                <div class="portlet">
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="#" class="form-horizontal">
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Text</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-circle" placeholder="Enter text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Email Address</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon input-circle-left">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                            <input type="email" class="form-control input-circle-right" placeholder="Email Address"> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input type="password" class="form-control input-circle-left" placeholder="Password">
                                            <span class="input-group-addon input-circle-right">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Left Icon</label>
                                    <div class="col-md-9">
                                        <div class="input-icon">
                                            <i class="fa fa-bell-o"></i>
                                            <input type="text" class="form-control input-circle" placeholder="Left icon"> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Right Icon</label>
                                    <div class="col-md-9">
                                        <div class="input-icon right">
                                            <i class="fa fa-microphone"></i>
                                            <input type="text" class="form-control input-circle" placeholder="Right icon"> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Input With Spinner</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control spinner input-circle" placeholder="Password"> </div>
                                </div>
                                <div class="form-group last">
                                    <label class="col-md-3 control-label">Static Control</label>
                                    <div class="col-md-9">
                                        <span class="form-control-static"> email@example.com </span>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-circle green">Submit</button>
                                        <button type="button" class="btn btn-circle grey-salsa btn-outline">Cancel</button>
                                    </div>
                                </div>
                            </div> -->
                        </form>
                        <!-- END FORM-->
                    </div>
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                <button type="button" class="btn green">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    var table;
 
    $(document).ready(function() {
        $('#new_add').click(function(){
            $('#add_new').modal('show');
        });
        //datatables
        $('#sample_1').dataTable({
            processing: true,
            serverSide: true,
            ajax: {
                "url": "<?php echo base_url();?>master/pelanggan_dt",
                "type": "POST"
            },
            columnDefs: [
                {
                    render: function (data, type, row) {
                        return '<p>'+row.name+'</p>';
                    },
                    orderable: false,
                    targets: 0
                },
                {
                    render: function (data, type, row) {
                        return '<p>'+row.contact1+'</p>';
                    },
                    orderable: false,
                    targets: 1
                },
                {
                    render: function (data, type, row) {
                        return '<p>'+row.address+'</p>';
                    },
                    orderable: false,
                    targets: 2
                },
                {
                    render: function (data, type, row) {
                        return '<p>'+moment(row.created_date).format('DD MMM YYYY')+'</p>';
                    },
                    orderable: false,
                    targets: 3
                },
                {
                    render: function (data, type, row) {
                        return '<div class="btn-group pull-right"><button class="btn purple btn-xs dropdown-toggle" data-toggle="dropdown"><i class="icon-note"></i></button>'+
                            '<ul class="dropdown-menu pull-right"><li><a href="javascript:;"><i class="fa fa-print"></i> Print </a></li>'+
                            '<li><a href="javascript:;"><i class="fa fa-file-pdf-o"></i> Save as PDF </a></li>'+
                            '<li><a href="javascript:;"><i class="fa fa-file-excel-o"></i> Export to Excel </a></li></ul></div>';
                    },
                    orderable: false,
                    targets: 4
                },

            ],
            order: [0, "asc"],
            columns: [
                { data: "name" },
                { data: "contact1" },
                { data: "address" },
                { data: "created_date" },
                {data:"id"},
            ],
            drawCallback: function ( settings ) {
            }

        });

    });
</script>