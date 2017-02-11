
    <div class="container">
        <h1 style="font-size:20pt">Order Part Numbers</h1>

      
        <br />
       
        <table id="table" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Part no.</th>
                    <th>Customer</th>
                    <th>Material</th>
                    <th>Thickness</th>
                    <th>1st dim</th>
                    <th>+</th>
                    <th>-</th>
                    <th>2nd dim</th>
                    <th>+</th>
                    <th>-</th>
                </tr>
            </thead>
            <tbody>
            </tbody>

        </table>
        <br>
        <a href="<?php echo base_url('index.php/admin/createPartNo')?>"><button type="button" class="btn btn-default">Add new order</button></a>
    </div>

<script src="<?php echo base_url('assets/jquery/jquery-3.1.1.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>

<script type="text/javascript">

var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('admin/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
            "render": function (data, type, row, meta) {
                if(type === 'display'){
                    data = '<a href="<?php echo base_url().'index.php/admin/viewPartNo/'?>' +data + '" >'+ data + '</a>';
                }
                return data;
            }
        }
        ]

    });

});

</script>