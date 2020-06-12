<h1>our products</h1>
<div id="phone-list">
    <table>
        <tr>
            <?php require 'array.php';?>
            <?php foreach ($phone as $item) {?>
        <<?php echo $item ['pos'];?>>
            <td>
                    <span class="card">
                    <img src="<?php echo $item ['src'];?>"alt="<?php echo $item ['name'];?>">
                    <h1 ><?php echo $item ['name'];?></h1>
                    <p >$<span class="price"><?php echo $item ['price'];?>.00</span></p>
                    <p><?php echo $item ['info'];?></p>
                    <p><a  class="ph-add-to-cart" data-id="<?php echo $item ['id'];?>">buy it!</a></p>
                    </span>
            </td>

   <?php } ?>

        </tr>
    </table>
</div>
