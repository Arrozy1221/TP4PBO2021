<?php 

/******************************************
PRAKTIKUM RPL
******************************************/
class Task extends DB{
	
	// Mengambil data
	function getTask()
	{
		// Query mysql select data ke data_mahasiswa
		$query = "SELECT * FROM data_mahasiswa";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTasknim()
	{
		// Query mysql select data ke data_mahasiswa secara asc di tabel nim
		$query = "SELECT * FROM data_mahasiswa ORDER BY nim ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTasknama_mahasiswa()
	{
		// Query mysql select data ke data_mahasiswa secara asc di tabel nama_mahasiswa
		$query = "SELECT * FROM data_mahasiswa ORDER BY nama_mahasiswa ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTaskgender()
	{
		// Query mysql select data ke data_mahasiswa secara asc di tabel gender
		$query = "SELECT * FROM data_mahasiswa ORDER BY gender ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTasktanggal_lahir()
	{
		// Query mysql select data ke data_mahasiswa secara asc di tabel tanggal lahir
		$query = "SELECT * FROM data_mahasiswa ORDER BY tanggal_lahir ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTaskkelas()
	{
		// Query mysql select data ke data_mahasiswa secara acs di tabel kelas
		$query = "SELECT * FROM data_mahasiswa ORDER BY kelas ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTaskstatus()
	{
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do ORDER BY status_td ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function insertTask($data) // fungsi untuk input data
	{
		$nim = $data['nim'];
		$nama_mahasiswa = $data['nama_mahasiswa'];
		$gender = $data['gender'];
		$tanggal_lahir = $data['tanggal_lahir'];
		$kelas = $data['kelas'];
		$status = "-";
		
		$query = "INSERT INTO data_mahasiswa (nim, nama_mahasiswa, gender, tanggal_lahir, kelas, status_td) VALUES ('$nim', '$nama_mahasiswa', '$gender', '$tanggal_lahir', '$kelas', '$status' )";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function deleteTask($id_task) // fungsiuntuk delete data
	{
		$query = "DELETE FROM data_mahasiswa WHERE id=$id_task";

		return $this->execute($query);
	}

	function updateTask($id) // fungsi untuk acc data
	{
		$query = "UPDATE data_mahasiswa SET status_td = '✔' WHERE id = $id";

		return $this->execute($query);
	}
	
}



?>
