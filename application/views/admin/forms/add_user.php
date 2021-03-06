<div id="add-user-segment" class="ui segment">
	<h2 class="ui header"><i class="user icon"></i>New User</h3>
	<form id="add-user-form" class="ui form" action="/admin/users/create" method="POST" enctype="multipart/form-data">
		<h4 class="ui dividing header">Personal Information</h4>
		<div class="three fields">
			<div class="field">
				<label>First</label>
				<input type="text" name="first_name" placeholder="First name">
			</div>
			<div class="field">
				<label>Last</label>
				<input type="text" name="last_name" placeholder="Last name">
			</div>
			<div class="field">
				<label>Gender</label>
				<div class="ui selection dropdown">
					<input type="hidden" name="gender">
					<div class="default text">Gender</div>
					<i class="dropdown icon"></i>
					<div class="menu">
						<div class="item" data-value="m">Male</div>
						<div class="item" data-value="f">Female</div>
						<div class="item" data-value="o">Other</div>
					</div>
				</div>
			</div>
		</div>
		<div class="three fields">
			<div class="field">
				<label>Birthday</label>
				<input type="date" name="dob">
			</div>
 			<div class="field">
				<label>Hometown</label>
				<input type="text" name="hometown">
			</div>
			<div class="field">
				<label>Photo</label>
				<input type="file" name="photo">
			</div>
		</div>
		<div class="field">
			<label>Description</label>
			<textarea name="about"></textarea>
		</div>
		<h4 class="ui dividing header">Account Information</h4>
		<div class="two fields">
			<div class="field">
				<label>Username</label>
				<input type="text" name="username">
			</div>
			<div class="field">
				<label>Password</label>
				<input type="password" name="password">
			</div>
		</div>
		<div class="two fields">
			<div class="field">
				<label>Email</label>
				<input type="email" name="email">
			</div>
			<div class="field">
				<label>User Role</label>
				<div class="ui selection dropdown">
					<input type="hidden" name="type">
					<div class="default text">Select one</div>
					<i class="dropdown icon"></i>
					<div class="menu">
						<div class="item" data-value="dev">Developer</div>
						<div class="item" data-value="admin">Administrator</div>
						<div class="item" data-value="blogger">Blogger</div>
						<div class="item" data-value="advertiser">Advertiser</div>
						<div class="item" data-value="user">User</div>
					</div>
				</div>
			</div>
		</div>
		<input type="submit" value="Submit" class="ui button">
	</form>
</div>
