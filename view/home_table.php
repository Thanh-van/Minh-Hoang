<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/test.css">
</head>
<body>
	<?php if (isset($_SESSION['user'])) {
		?>
		<div class="header">
		<div class="seach-box">
			<input type="text" id="myInput" onkeyup="myFunction()" placeholder="seach">
		</div>
		<div class="btn-add">
			<label for="popup-close">
				<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus-circle" class="svg-inline--fa fa-plus-circle fa-w-16" role="img" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"/></svg>
			</label>
		</div>
		<div class="popup-add">

			<input type="checkbox" hidden class="popup_input" id="popup-close">
			<label for="popup-close" class="popup-back"></label>
			<label for="popup-close"></label>
			<div class="popup-form-add">
				<h2 style="text-align: center;">Form add</h2>
				<label for="popup-close" class="popup_icon_close"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"/></svg>
				</label>
					<form action="" method="post">
						<div class="tracking_input_group">
							<input type="text" placeholder="User" name="user" required>
							<input type="text" placeholder="Address" name="address" required>
							
						</div>
						<div class="tracking_input_group">
							<input type="text" placeholder="Item" name="item" required>
							<input type="number" placeholder="Price" name="price" required>
						</div>
						<div class="tracking_input_group">
						<input type="text" placeholder="Quatity" name="quatity" required>
						<input type="text"  placeholder="Tracking Number" name="tracking_number"  step=0.01 required>
					</div>
						<div class="tracking_input_group">
						<select name="status" required>
							<option value="1">Test</option>
							<option value="2">Van</option>
							<option value="3">Thanh</option>
							<option value="4">LO</option>
						</select>
						<input type="date" placeholder="" name="date" required>
					</div>
						
						<input type="submit" value="ADD" name="add">
					</form>
			</div>
		</div>
		<div class="popup-edit">

			<input type="checkbox" hidden class="popup_input_edit" id="popup-edit">
			<label for="popup-edit" class="popup-back-edit"></label>
			<div class="popup-form-edit">
				<h2 style="text-align: center;">Form edit</h2>
				<label for="popup-edit" class="popup_icon_close"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"/></svg>
				</label>
					<form action="" method="post">
						<input type="text" hidden id="id_track" name="id_track">
						<div class="tracking_input_group">
							<input type="text" placeholder="User" id="id_user" name="user" required>
							<input type="text" placeholder="Address" id="address" name="address" required>
							
						</div>
						<div class="tracking_input_group">
							<input type="text" placeholder="Item" id="item" name="item" required>
							<input type="number" placeholder="Price" id="price" name="price" required>
						</div>
						<div class="tracking_input_group">
						<input type="text" placeholder="Quatity" id="quatity" name="quatity" required>
						<input type="text"  placeholder="Tracking Number" id="tracking_number" name="tracking_number"  step=0.01 required>
					</div>
						<div class="tracking_input_group">
						<select name="status" id="status" required>
							<option value="1">Test</option>
							<option value="2">Van</option>
							<option value="3">Thanh</option>
							<option value="4">LO</option>
						</select>
						<input type="date" id="date" placeholder="" name="date" required>
					</div>
						
						<input type="submit" value="Edit" name="edit">
					</form>
			</div>
		</div>
	</div>
	<table id="my-table-id">
	    <thead>
	    <tr>
	        <th>ID Track</th>
	        <th>Date</th>
	        <th>User</th>
	        <th>Address ship</th>
	        <th>Item</th>
	        <th>Price</th>
	        <th>Quatity</th>
	        <th>Tracking Number</th>
	        <th>Status</th>
	        <th></th>

	    </tr>
	    </thead>
	    <tbody>
	    	
	    	<?php
	    		if ($order_table!=0) {
	    			foreach ($order_table as $key => $value) {
	    				?><tr>
	    					<td><?php echo $value['id_track']; ?></td>
					        <td><?php echo $value['date']; ?></td>
					        <td><?php echo $value['user']; ?></td>
					        <td><?php echo $value['address']; ?></td>
					        <td><?php echo $value['item']; ?></td>
					        <td><?php echo $value['price']; ?></td>
					        <td><?php echo $value['quatity']; ?></td>
					        <td><?php echo $value['tracking_number']; ?></td>
					        <td><?php echo $value['status']; ?></td>
					        <td>
					        	<div class="btn-button">
					        	 
					        	<label style="color: #16a085" for="popup-edit">
					        		<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="edit" class="svg-inline--fa fa-edit fa-w-18" role="img" viewBox="0 0 576 512"><path fill="currentColor" d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z"/></svg>  
					        	</label>
					      		<a style="color: #c0392b" onclick="return confirm('Do you want to delete ?'); "   href="?action=order_table&delete_id_track=<?php echo $value['id_track'] ?>"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="far" data-icon="trash-alt" class="svg-inline--fa fa-trash-alt fa-w-14" role="img" viewBox="0 0 448 512"><path fill="currentColor" d="M268 416h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12zM432 80h-82.41l-34-56.7A48 48 0 0 0 274.41 0H173.59a48 48 0 0 0-41.16 23.3L98.41 80H16A16 16 0 0 0 0 96v16a16 16 0 0 0 16 16h16v336a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128h16a16 16 0 0 0 16-16V96a16 16 0 0 0-16-16zM171.84 50.91A6 6 0 0 1 177 48h94a6 6 0 0 1 5.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12z"/></svg></a>
					        	</div>
					        </td>
					        </tr>
	    				<?php
	    			}
	    		}
	    	?>
	        
	    	
	    </tbody>
	</table>
		<?php
	}else{
		echo 'Vui Lòng đăng nhập';
	}

	 ?>
	<script>
		function myFunction() {
		  var input, filter, table, tr, td, i, txtValue;
		  input = document.getElementById("myInput");
		  filter = input.value.toUpperCase();
		  table = document.getElementById("my-table-id");
		  tr = table.getElementsByTagName("tr");

		  // Loop through all table rows, and hide those who don't match the search query
		  for (i = 0; i < tr.length; i++) {
		    td = tr[i].getElementsByTagName("td")[2];
		    if (td) {
		      txtValue = td.textContent || td.innerText;
		      if (txtValue.toUpperCase().indexOf(filter) > -1) {
		        tr[i].style.display = "";
		      } else {
		        tr[i].style.display = "none";
		      }
		    }
		  }
		}
		function onRowClick(tableId, callback) {
		    var table = document.getElementById(tableId),
		        rows = table.getElementsByTagName("tr"),
		        i;
		    for (i = 0; i < rows.length; i++) {
		        table.rows[i].onclick = function (row) {
		            return function () {
		                callback(row);
		            };
		        }(table.rows[i]);
		    }
		};
		 
		onRowClick("my-table-id", function (row){
			 var track = row.getElementsByTagName("td")[0].innerHTML;
		    var date = row.getElementsByTagName("td")[1].innerHTML;
		    var user = row.getElementsByTagName("td")[2].innerHTML;
		    var address = row.getElementsByTagName("td")[3].innerHTML;
		    var item = row.getElementsByTagName("td")[4].innerHTML;
		    var price = row.getElementsByTagName("td")[5].innerHTML;
		    var quatity = row.getElementsByTagName("td")[6].innerHTML;
		    var tracking_number = row.getElementsByTagName("td")[7].innerHTML;
		    var status = row.getElementsByTagName("td")[8].innerHTML;
		    document.getElementById('id_user').value=user;
		    document.getElementById('address').value=address;
		    document.getElementById('item').value=item;
		    document.getElementById('price').value=price;
		    document.getElementById('quatity').value=quatity;
		    document.getElementById('tracking_number').value=tracking_number;
		    document.getElementById('status').value=status;
		    document.getElementById('date').value=date;
		    document.getElementById('id_track').value=track;
		    // if (row.getElementsByTagName("td")[8].innerHTML==1) {
		    // 	this.style.backgroundColor = "red";
		    // }
		     
		});
	</script>
	<p id="click-response"></p>
</body>
</html>