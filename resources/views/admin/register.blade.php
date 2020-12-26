<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Register</title>
	<!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>



	<div class="wrap ">
		<div class="card shadow">
			<div class="card-body">
				<h2>Admin Register</h2>

				<form action="{{route('admin.register')}}" method="POST" enctype="multipart/form-data">
                    @csrf

					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" type="text">
					</div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input name="pass" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Photo</label>
                        <input name="photo" class="form-control" type="file">
                    </div>
					<div class="form-group">
						<input name="register" class="btn btn-primary" type="submit" value="Register Now">
					</div>
				</form>
			</div>
            <div class="card-footer">
                <span>Already have account ?</span><a class=" card-link float-right" href="{{route('admin.login')}}">Admin Login</a>
            </div>
		</div>
	</div>
    <br>
    <br>








	<!-- JS FILES  -->
    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{'assets/js/bootstrap.min.js'}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>
