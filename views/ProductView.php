<div >   
	<table class='products'>
	   <thead>
	   <td> Название </td> <td> Цена </td>
	   </thead>
        <?php  foreach($products as $product):?>
		<tr>
		<td><?=$product->name?></td> <td><?=$product->price?>$</td>
		</tr>
		<?php endforeach; ?>   
     <table>
</div>