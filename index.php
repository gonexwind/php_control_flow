<!DOCTYPE html>
<html>

<head>
	<title>Fikky Ardianto</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="m-5">
	<div class="jumbotron">
		<h1>Tugas Akhir Praktikum Pemrograman Web</h1>
		<h2>Fikky Ardianto (201851136)</h2>
		<h3>Kelas F</h3>
	</div>

	<div class="text-center mb-5">
		<h1>Control Flow</h1>
	</div>

	<div class="row">
		<div class="col-md-4 col-sm-6">
	
			<!-- IF ELSE -->
			<div class="relative">
				<div class="card border-secondary mb-3" style="max-width: 20rem;">
					<div class="card-header">
						<h4>IF ELSE</h4>
					</div>
					<div class="card-body">
						<p class="card-text">
							Kondisi : <br>
							Lampu = Hijau <br><br>
							Ket: <br> Jika Lampu Merah maka Berhenti, Jika Hijau maka Jalan.
						</p>
					</div>
				</div>
				<div class="absolute text-center">
					<a href="javascript:void()" data-toggle="modal" data-target="#modal-ifelse" class="btn btn-lg btn-primary">
						Lihat Program
					</a>
				</div>
			</div>

			<!-- SWITCH -->
			<div class="relative">
				<div class="card border-secondary mb-3" style="max-width: 20rem;">
					<div class="card-header">
						<h4>SWITCH</h4>
					</div>
					<div class="card-body">
						<p class="card-text">
							Cetak sound effect waktu nge-kill enemies di Mobile Legends.
					</div>
				</div>
				<div class="absolute text-center">
					<a href="javascript:void()" data-toggle="modal" data-target="#modal-switch" class="btn btn-lg btn-primary">
						Lihat Program
					</a>
				</div>
			</div>
	
		</div>

		<div class="col-md-4 col-sm-6">

			<!-- FOR LOOP -->
			<div class="relative">
				<div class="card border-secondary mb-3" style="max-width: 20rem;">
					<div class="card-header">
						<h4>FOR LOOP</h4>
					</div>
					<div class="card-body">
						<p class="card-text">
							Cetak Istigfar sebanyak 99 kali.
					</div>
				</div>
				<div class="absolute text-center">
					<a href="javascript:void()" data-toggle="modal" data-target="#modal-for" class="btn btn-lg btn-primary">
						Lihat Program
					</a>
				</div>
			</div>

			<!-- ARRAY -->
			<div class="relative">
				<div class="card border-secondary mb-3" style="max-width: 20rem;">
					<div class="card-header">
						<h4>ARRAY</h4>
					</div>
					<div class="card-body">
						<p class="card-text">
							Buat array list lagu dari album Didi Kempot - Ketaman Asmoro.</p>
					</div>
				</div>
				<div class="absolute text-center">
					<a href="javascript:void()" data-toggle="modal" data-target="#modal-array" class="btn btn-lg btn-primary">
						Lihat Program
					</a>
				</div>
			</div>

			<!-- FOREACH -->
			<div class="relative">
				<div class="card border-secondary mb-3" style="max-width: 20rem;">
					<div class="card-header">
						<h4>FOR EACH</h4>
					</div>
					<div class="card-body">
						<p class="card-text">
							Cetak array di atas menggunakan foreach.
						</p>
					</div>
				</div>
				<div class="absolute text-center">
					<a href="javascript:void()" data-toggle="modal" data-target="#modal-foreach" class="btn btn-lg btn-primary">
						Lihat Program
					</a>
				</div>
			</div>

		</div>

		<div class="col-md-4 col-sm-6">

			<!-- WHILE LOOP -->
			<div class="relative">
				<div class="card border-secondary mb-3" style="max-width: 20rem;">
					<div class="card-header">
						<h4>WHILE LOOP</h4>
					</div>
					<div class="card-body">
						<p class="card-text">
							Cetak Tahmid sebanyak 99 kali.
					</div>
				</div>
				<div class="absolute text-center">
					<a href="javascript:void()" data-toggle="modal" data-target="#modal-while" class="btn btn-lg btn-primary">
						Lihat Program
					</a>
				</div>
			</div>

			<!-- DO-WHILE LOOP -->
			<div class="relative">
				<div class="card border-secondary mb-3" style="max-width: 20rem;">
					<div class="card-header">
						<h4>DO-WHILE LOOP</h4>
					</div>
					<div class="card-body">
						<p class="card-text">
							Cetak Tasbih sebanyak 99 kali.
					</div>
				</div>
				<div class="absolute text-center">
					<a href="javascript:void()" data-toggle="modal" data-target="#modal-do" class="btn btn-lg btn-primary">
						Lihat Program
					</a>
				</div>
			</div>

		</div>
	</div>


	<!-- Modal IF ELSE -->
	<div class="modal fade" id="modal-ifelse" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">IF ELSE</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body ml-3">
					Kode : <br><br>
					<pre>
$lampu = "Hijau"; 

if ($lampu == "Hijau") {
	echo "Jalan";
} else {
	echo "Berhenti";
}
					</pre>
					Hasil : <br><br>
					<b><?php include 'logic/ifelse.php'; ?></b><br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal FOR LOOP -->
	<div class="modal fade" id="modal-for" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">FOR LOOP</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body ml-3">
					Kode : <br><br>
					<pre>
for ($i=1; $i < 100; $i++) { 
	echo "$i. Astagfirulloh hal adzim";
}
					</pre>
					Hasil : <br><br>
					<b><?php include 'logic/for.php'; ?></b><br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal DO-WHILE LOOP -->
	<div class="modal fade" id="modal-do" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">DO-WHILE LOOP</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body ml-3">
					Kode : <br><br>
					<pre>
$x = 1;

do {
	echo "$x. Subhanallah";
	$x++;
} while ($x <= 99);
					</pre>
					Hasil : <br><br>
					<b><?php include 'logic/do.php'; ?></b><br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal WHILE LOOP -->
	<div class="modal fade" id="modal-while" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">WHILE LOOP</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body ml-3">
					Kode : <br><br>
					<pre>
$x = 1;

while ($x <= 99) {
	echo "$x. Alhamdulillah";
	$x++;
}		
				</pre>
					Hasil : <br><br>
					<b><?php include 'logic/while.php'; ?></b><br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal SWITCH -->
	<div class="modal fade" id="modal-switch" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">WHILE LOOP</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body ml-3">
					Kode : <br><br>
					<pre>
$kill = 5;

switch ($kill) {
	case '1':
		echo "First Blood!";
		break;
	case '2':
		echo "Double Kill!";
		break;
	case '3':
		echo "Triple Kill!";
		break;
	case '4':
		echo "MANIAC!";
		break;
	case '5':
		echo "SAVAGE!";
		break;  
	default:
		echo "LEGENDARY!";
}
				</pre>
					Hasil : <br><br>
					<b><?php include 'logic/switch.php'; ?></b><br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal ARRAY -->
	<div class="modal fade" id="modal-array" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">ARRAY</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body ml-3">
					Kode : <br><br>
					<pre>
$ketaman_asmoro = array(
	"Kalung Emas",
	"Ojo Sujono",
	"Janji Palsu",
	"Terminal Tirtonadi",
	"Nagih Janji",
	"Ketaman Asmoro",
	"Wis Cukup",
	"Nglimpe",
	"Lingso Tresno",
	"Lingsir Wengi"
);

echo $ketaman_asmoro[0];
				</pre>
					Hasil : <br><br>
					<b><?php include 'logic/array.php'; ?></b><br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal FOR EACH -->
	<div class="modal fade" id="modal-foreach" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">FOR EACH</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body ml-3">
					Kode : <br><br>
					<pre>
$ketaman_asmoro = array(
	"Kalung Emas",
	"Ojo Sujono",
	"Janji Palsu",
	"Terminal Tirtonadi",
	"Nagih Janji",
	"Ketaman Asmoro",
	"Wis Cukup",
	"Nglimpe",
	"Lingso Tresno",
	"Lingsir Wengi"
);

foreach ($ketaman_asmoro as $key => $value) {
	echo "$value";
}
				</pre>
					Hasil : <br><br>
					<b><?php include 'logic/foreach.php'; ?></b><br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>


	<script src="assets/js/jquery-3.2.1.slim.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>