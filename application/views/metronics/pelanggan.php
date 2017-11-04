<div class="page-content">
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="index.html">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Pelanggan</span>
            </li>
        </ul>
        <div class="page-toolbar">
            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                <i class="icon-calendar"></i>&nbsp;
                <span class="thin uppercase hidden-xs"></span>&nbsp;
                <i class="fa fa-angle-down"></i>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> Managed Table</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <button id="sample_editable_1_new" class="btn sbold green"> Add New
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
                                <th> id </th>
                                <th> Nama </th>
                                <th> Phone </th>
                                <th> Address </th>
                                <th> Joined </th>
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

<script>
    var table;
 
    $(document).ready(function() {
        //datatables
        $('#sample_1').dataTable({
        processing: true,
        serverSide: true,
        ajax: {
            "url": "<?php echo base_url();?>master/dt",
            "type": "POST"
        },
        columnDefs: [
            {
                visible: false,
                targets: 0
            },
            {
                render: function (data, type, row) {
                    return '<p>'+row.name+'</p>';
                },
                orderable: false,
                targets: 1
            },
            {
                render: function (data, type, row) {
                    return '<p>'+row.contact1+'</p>';
                },
                orderable: false,
                targets: 2
            },
            {
                render: function (data, type, row) {
                    return '<p>'+row.address+'</p>';
                },
                orderable: false,
                targets: 3
            },
            {
                render: function (data, type, row) {
                    return '<p>'+moment(row.created_date).format('DD MMM YYYY')+'</p>';
                },
                orderable: false,
                targets: 4
            }
        ],
        order: [0, "asc"],
        columns: [
            {data:"id"},
            { data: "name" },
            { data: "contact1" },
            { data: "address" },
            { data: "created_date" },
        ],
        drawCallback: function ( settings ) {
        }

    });

    });
</script>