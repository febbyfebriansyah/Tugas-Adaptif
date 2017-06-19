
@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Upload</div>
					<div class="panel-body">
						<form method="get">
							<div class="row">
								<div class="col-md-6">
									<div class="card card-block">
										<h4 class="card-title">Upload Image</h4>
										<hr>
										<div class="form-group">
											<label>Pilih image</label>
											<input type="file" class="form-control-file" name="image_url" required>
											<small class="form-text text-muted">Image types : *.jpg | *.png |*.bmp | *.gif</small>
										</div>
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card card-block">
										<h4 class="card-title">Upload File</h4>
										<hr>
										
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection