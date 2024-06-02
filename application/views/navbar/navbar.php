<nav
	class="navbar navbar-expand-lg navbar-light shadow"
	style="height: 80px; background-color: #d2b48c"
>
	<div class="container-fluid">
		<a class="navbar-brand" href="<?= base_url() ?>">CATSHOP 057</a>
		<button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbarNavAltMarkup"
			aria-controls="navbarNavAltMarkup"
			aria-expanded="false"
			aria-label="Toggle navigation"
		>
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-link active" aria-current="page" href="<?= base_url() ?>"
					>Home</a
				>
				<a class="nav-link" href="<?= site_url('cats057') ?>">Manage Cats</a>
				<a class="nav-link" href="<?= site_url('categories057') ?>"
					>Manage Categories</a
				>
				<?php if ($this->session->userdata('usertype') == 'Manager') { ?>
				<a class="nav-link" href="<?= site_url('users057') ?>">Manage User</a>
				<a class="nav-link" href="<?= site_url('cats057/sales') ?>"
					>Sales Report</a
				>
				<?php  } ?>
				<!-- Button untuk menampilkan burger menu -->
				<button
					class="btn btn-primary"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#groupInfo"
					aria-expanded="false"
					aria-controls="groupInfo"
					style="height: fit-content"
				>
					Account
				</button>
			</div>
		</div>
	</div>
</nav>
