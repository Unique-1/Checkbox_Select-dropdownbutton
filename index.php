<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>chkbox and select btn</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#task_for_role').change(function() {
				    var selected = $(this).val();
				    $('input[type="checkbox"]').attr('checked', false);
				    $('input[value="' + selected + '"]').prop('checked', true);
			  	}).change();
			});
		</script>
		
		<script>
			function CheckOnlineStatus(msg) {
				var status = document.getElementById("status");
				var condition = navigator.onLine ? "Connected" : "Please check your internet connection";             
				var state = document.getElementById("state");
				state.innerHTML = condition;             
			}
			function Pageloaded() {
				CheckOnlineStatus("load");
				document.body.addEventListener("offline", function () {
					CheckOnlineStatus("offline")
				}, false);
				document.body.addEventListener("online", function () {
               		CheckOnlineStatus("online")
				}, false);
			}
		</script>
		<style>
			#state{
				background-color: #ff0000;
				color: #fff;
				width: 50%;
				text-align: center;
			}
		</style>
	</head>
	<body onload="Pageloaded()">
		<div id="status"><p id="state"></p></div>
	    <form>
			<select class="multi-selector" id="task_for_role" name="task_for">
				<option value="0"></option>
			    <option value="3">Bear Bread</option>
			    <option value="4">Avocado</option>
			    <option value="5">Freash Milk</option>
		    </select><br><br>


			<input type="checkbox" name="role[]" class="checkvalue" value="3">Bear Bread<br>
			<input type="checkbox" name="role[]" class="checkvalue" value="4">Avocado<br>
			<input type="checkbox" name="role[]" class="checkvalue" value="5">Fresh Milk<br>
			<input type="checkbox" name="role[]" class="checkvalue" value="3">Bear Bread<br>
			<input type="checkbox" name="role[]" class="checkvalue" value="3">Bear Bread<br>
			<input type="checkbox" name="role[]" class="checkvalue" value="5">Fresh Milk<br>
		</form>
	</body>
	
</html>