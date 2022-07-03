<table border="1">
			<form action="/" method="post">
				<input type="text" name="id">
				<input type="text" name="gejala">
				<button>simpan</button>
			</form>
		<tr>
			<th>id</th>
			<th>gejala</th>
			<th>manage</th>
		</tr>
		<?php foreach ($dataGejala as $dataGejala):?>
				<tr>
					<td>
					<?= esc($dataGejala['id']) ?>
					</td>
					<td>
					<?= esc($dataGejala['gejala']) ?>
					</td>
					<td>
					<a href="/home/edit/<?=esc($dataGejala['id']) ?>">edit</a>
					<a href="/home/onDelete/<?=esc($dataGejala['id']) ?>">delete</a>
					</td>
				</tr>
				
    </form>
			<?php endforeach ?>
		</table>
	