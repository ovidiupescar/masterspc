<div>
<?php echo validation_errors(); ?>
</div>
<div>
    <br /><br />
    <div class="well"><h1 style="font-size:15pt">Add new part number and critical dimensions!</h1></div>

<?php
echo form_open('admin/createPartNo');
?>
  <div class=‘form-group'>
    <label for=‘partNo’>Part number:</label>
    <input type=‘text’ class='form-control' name='partNo'>
<br />
    <label for=‘customer’>Customer:</label>
    <input type=‘text’ class='form-control' name='customer'>
<br />
    <label for=‘material’>Material:</label>
    <input type='text' class='form-control' name='material'>
<br />
    <label for=‘thickness’>Thickness (mm):</label>
    <input type='text' class='form-control' name='thickness'>
<br />
    <label for=‘dim1’>CTQ 1 (mm):</label>
    <input type='text' class='form-control' name='dim1'>
<br />
    <label for=‘tol_plus1’>+ tolerance (mm):</label>
    <input type='text' class='form-control' name='tol_plus1'>
<br />
    <label for=‘tol_minus1’>- tolerance (mm):</label>
    <input type='text' class='form-control' name='tol_minus1'>
<br />
    <label for=‘dim2’>CTQ 2 (mm):</label>
    <input type='text' class='form-control' name='dim2'>
<br />
    <label for=‘tol_plus2’>+ tolerance (mm):</label>
    <input type='text' class='form-control' name='tol_plus2'>
<br />
    <label for=‘tol_minus2’>- tolerance (mm):</label>
    <input type='text' class='form-control' name='tol_minus2'>
  </div>
<br />


  <button type='submit' class='btn btn-default'>Add new part number</button>
</form>

</div>


