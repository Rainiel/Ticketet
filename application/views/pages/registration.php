				<!-- 
						#Registration Form and Registration Table
				-->


<div class="row">


		<div class="col-lg-4 well ">
			<form>
			<label for="registrationHeader" style="font-size:18px;font-weight:bolder;">Account Registration</label>
				<hr />
				<label for="inputFirstName" style="font-weight: bolder;">First Name:</label>
				<input type="text" class="form-control" style="text-align: center;">
				<label for="inputLastName" style="font-weight: bolder;">Last Name:</label>
				<input type="text" class="form-control" style="text-align: center;">
				<label for="inputUsername" style="font-weight: bolder;">Username:</label>
				<input type="text" class="form-control" style="text-align: center;">
				<label for="inputPassword" style="font-weight: bolder;">Password:</label>
				<input type="password" class="form-control" style="text-align: center;">
				<label for="inputRepeatPassword" style="font-weight: bolder;">Confirm Password:</label>
				<input type="password" class="form-control" style="text-align: center;"><br />
				<input type="button" class="btn btn-default pull-right" value="Register Account"/>
			</form>
		</div>
		<div class="col-lg-8" style="padding-left:40px;">
			<table class="table table-bordered table-striped table-responsive align" >
				<tr>
					<th colspan="4" class="align">Accounts</th>
				</tr>
				<tr >
					<th class="align">Full Name</th>
					<th class="align">Username</th>
					<th class="align">Account Type</th>
					<th class="align">Action</th>
				</tr>
				<tr>
					<?php # gagawa ng loop dito para i-load yung mga accounts from database?>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td><input type="button" class="btn btn-default" value="Manage Account"></td>
				</tr>
				<tr>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td><input type="button" class="btn btn-default" value="Manage Account"></td>
				</tr>
				<tr>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td><input type="button" class="btn btn-default" value="Manage Account"></td>
				</tr>
				<tr>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td><input type="button" class="btn btn-default" value="Manage Account"></td>
				</tr>
				<tr>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td><input type="button" class="btn btn-default" value="Manage Account"></td>
				</tr>
			</table>
		</div>


</div>