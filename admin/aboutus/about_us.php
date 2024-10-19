<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>

<style>
	.navbar-nav .nav-item {
		margin-left: 15px;
	}
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">System Info</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Settings</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="about_us.php">About Us</a>
			</li>
		</ul>
	</div>
</nav>

<!-- Content for About Us section -->
<div class="container mt-5">
	<div class="card card-outline rounded-0 card-maroon">
		<div class="card-header">
			<h5 class="card-title">About Us</h5>
		</div>
		<div class="card-body">
			<form action="" id="about-us-frm">
				<div class="form-group">
					<label for="about_us_content" class="control-label">About Us Content</label>
					<textarea name="about_us_content" id="about_us_content" cols="30" rows="5" class="form-control summernote">
						<?php echo is_file(base_app.'about.html') ? file_get_contents(base_app.'about.html') : ""; ?>
					</textarea>
				</div>
			</form>
		</div>
		<div class="card-footer">
			<button class="btn btn-sm btn-primary" form="about-us-frm">Update</button>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$('.summernote').summernote({
			height: 200,
			toolbar: [
				[ 'style', [ 'style' ] ],
				[ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
				[ 'fontname', [ 'fontname' ] ],
				[ 'fontsize', [ 'fontsize' ] ],
				[ 'color', [ 'color' ] ],
				[ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
				[ 'table', [ 'table' ] ],
				[ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
			]
		})
	})
</script>
