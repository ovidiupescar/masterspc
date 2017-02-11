<div>
<?php echo validation_errors(); ?>
</div>
<div>
<form action='admin/createPartNo' method='post'>
  <div class=‘form-group'>
    <label for=‘partNo’>Part number:</label>
    <input type=‘text’ class='form-control' id='partNo'>
<br />
    <label for=‘customer’>Customer:</label>
    <input type=‘text’ class='form-control' id=‘customer’>
<br />
    <label for=‘material’>Material:</label>
    <input type='text' class='form-control' id=‘material’>
<br />
    <label for=‘thickness’>Thickness (mm):</label>
    <input type='text' class='form-control' id='thickness'>
<br />
    <label for=‘dim1’>CTQ 1 (mm):</label>
    <input type='text' class='form-control' id=‘dim1’>
<br />
    <label for=‘tol_plus1’>+ tolerance (mm):</label>
    <input type='text' class='form-control' id='tol_plus1'>
<br />
    <label for=‘tol_minus1’>- tolerance (mm):</label>
    <input type='text' class='form-control' id='tol_minus1'>
<br />
    <label for=‘dim2’>CTQ 2 (mm):</label>
    <input type='text' class='form-control' id=‘dim2’>
<br />
    <label for=‘tol_plus2’>+ tolerance (mm):</label>
    <input type='text' class='form-control' id='tol_plus2'>
<br />
    <label for=‘tol_minus2’>- tolerance (mm):</label>
    <input type='text' class='form-control' id='tol_minus2'>
  </div>
<br />


  <button type='submit' class='btn btn-default'>Add new part number</button>
</form>

</div>


