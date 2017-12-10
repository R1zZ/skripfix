	<style type="text/css">
		.modal{
			background: #fff;
			border: 1px solid #555;
			box-shadow: 0 0 5px #ccc;
			z-index: 10;

			position: absolute;
			width: 500px;
			height: 400px;
			top: 50%;
			left: 50%;
			margin-top: -200px;
			margin-left: -250px;
		}
		.header{
			padding: 5px;
			background: #eee;
			font-weight: bold;
			margin-bottom: 20px;
		}
		.tombol{
			float: right;
			height: 15px;
			margin-right: 2px;
			padding: 1px;
			overflow: hidden;
		}
		.tombol a{
			display: block;
			float: left;
			width: 15px;
			height: 15px;
			margin-left: 2px;
		}
		.content{
			padding: 10px;
			font-family: arial;
		}
		.footer{
			position: absolute;
			width: 100%;
			right: 0;
			bottom: 0;
			border-top: 1px solid #ccc;
			padding: 10px 0;
		}
		.kirim, .tutup{
			float: right;
			padding: 15px 20px;
			margin-right: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			cursor: pointer;
		}
		.kirim:hover, tutup:hover{
			background: #ccc;
		}
	</style>
	<script type="text/javascript" src="../libs/jquery-2.0.2.min.js"></script>
	<script type="text/javascript">
		$('document').ready(function() {
			var fullscreen = false;
			$('.modal, .minimize, .tampil').hide();
			$('.submit') .click(function() {
				$('.modal').fadeIn();
			});

			$('.close').click(function() {
				$('.modal').fadeOut();
			});

			$('.maximize').click(function() {
				$(this).hide();
				$('.minimize, .content, .footer').show();
				fullscreen = !fullscreen;

				$('.modal').animate({'width':
					'100px','height':
					'100%','top': 0,'left':
					0,'margin-top':
					0,'margin-left':0},300);
			});

			$('.minimize').click(function() {
				$(this).hide();
				$('.maximize, .content, .footer').
				show;
				fullscreen = !fullscreen;

				$('.modal').animate({'width':
					'500px','height':
					'400px','top': '50%','left':
					'50%','margin-top':
					'-200px','margin-left':'-250px'},300);
			});

			$('.tampil').click(function() {
				$(this).hide();
				$('.sembunyi, .content, .footer').
				show;
				if (fullscreen){
					$('.modal').animate({'width':
					'100%','height':
					'100%','top':0,'left':
					0,'margin-top':
					0,'margin-left':0},300);
			}else{
					$('.modal').animate({'width':
					'500px','height':
					'400px','top':'50%','left':
					'50%','margin-top':
					'-200px','margin-left':'250px'},300);
			}
		});
	});
	</script>
<body>
	<div class="modal">
		<div class="header">Hasil Pencarian
			<div class="tombol">
				<a href="#" class="close">e</a>
			</div>
		</div>
		<form>
			<div class="content">
				<table>
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama" size="40"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><input type="text" name="almt" size="40"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email"></td>
					</tr>
					<tr>
						<td>Telphone</td>
						<td><input type="text" name="tlp"></td>
					</tr>
					<tr>
						<td valign="top">Pesan</td>
						<td><textarea cols="40" rows="8"></textarea></td>
					</tr>
				</table>
			</div>
			<div class="footer">
				<input type="button" name="tutup" class="tutup close" value="Batal">
				<input type="button" name="kirim" class="kirim close" value="Kirim">
			</div>
		</form>
	</div>
</body>