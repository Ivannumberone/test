<div>
<h2>Добавление продукта</h2>
                <form id="data" enctype='multipart/form-data' action='<?=BASE_URL?>add' method='POST' role='form' style='width: 30%;'>
                    <label>Название продукта</label>
                    <input type='text' name='name' class='form-control'/>
                    <label>Цена </label>
                    <input type='text' name='price' class='form-control'/> 					
					<br/>
                    <button type="submit" form="data">Готово</button>					
                </form>
</div>