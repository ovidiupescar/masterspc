<?php

/*
 * @author	Ovidiu Pescar
 * @copyright	Copyright (c) 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @since	Version 1.0.0
 * @filesource
 */

?>

        <h1 style="font-size:20pt"><?= $partNo ?></h1>

      
        <br />
       
        <table id="detailsTable" class="display" cellspacing="0" border="1">
            <thead>
            </thead>
            <tbody>
                <tr>
                    <td>Customer</td> <td><?=$customer ?></td>
                </tr>
                <tr>
                    <td>Material</td> <td><?=$material ?></td>
                </tr>
                <tr>
                    <td>Thickness</td> <td><?=$thickness ?></td>
                </tr>
            </tbody>

        </table>
        <table id="dimensionsTable" class="display" cellspacing="0" border="1">
            <thead>
                <tr>
                    <th></th> <th>Dimension</th> <th>+</th> <th>-</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td> <td><?=$dim1 ?></td> <td><?=$tol_plus1 ?></td> <td><?=$tol_minus1 ?></td>
                </tr>
                <tr>
                    <td>2</td> <td><?=$dim2 ?></td> <td><?=$tol_plus2 ?></td> <td><?=$tol_minus2 ?></td>
                </tr>
            </tbody>

        </table>
        
        <div>
            <h3> Date Created: <?=$data?> </h3> 
        </div>
        
        <script>
            $(document).ready( function () {
                $('#detailsTable').DataTable();
            } );

            $(document).ready(function(){
                $('#dimensionsTable').DataTable();
            });
        </script>