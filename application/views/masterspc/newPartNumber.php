<div>
<?php echo validation_errors(); ?>
</div>
<div>
<?php
    echo form_open('admin/createPartNo');
    
    echo '<br>';
    echo form_label('Part Number:', 'partNo');
    echo form_input('partNo');
    echo '<br>';
    echo form_label('Customer:', 'customer');   
    echo form_input('customer');
    echo '<br>';
    echo form_label('Material:', 'material');
    echo form_input('material');
    echo '<br>';
    echo form_label('Thickness:', 'thickness');
    echo form_input('thickness');
    echo '<br>';
    echo form_label('1st Dimension', 'dim1');
    echo form_input('dim1');
    echo form_label('Plus Tol', 'tol_plus1');
    echo form_input('tol_plus1');
    echo form_label('Minus Tol', 'tol_minus1');
    echo form_input('tol_minus1');
    echo '<br>';
    echo form_label('2nd Dimension', 'dim2');
    echo form_input('dim2');
    echo form_label('Plus Tol', 'tol_plus2');
    echo form_input('tol_plus2');
    echo form_label('Minus Tol', 'tol_minus2');
    echo form_input('tol_minus2');
    echo '<br>';
    
    echo form_submit('submit', 'Create the Part Number');

    echo form_close();
?>
</div>


