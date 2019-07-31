<?php	
	class ModelNikah extends CI_Model{
 
 		public function __construct()
 		{
  			parent::__construct();
 		}

		public function getAllData($table)
		{
			return $this->db->get($table)->result();
		}

		public function getSelectedData($table, $data)
		{
			return $this->db->get_where($table, $data);
		}

		function insertData($table, $data)
		{
			$this->db->insert($table, $data);
		}

		function updateData($table, $data, $field_key)
		{
			$this->db->update($table, $data, $field_key);
		}

		function deleteData($table, $data)
		{
			$this->db->delete($table, $data);
		}

		function manualQuery($q)
		{
			return $this->db->query($q);
		}
	}