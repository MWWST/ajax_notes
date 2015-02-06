<?php

	class Note extends CI_Model {

		public function put_post($note){
		$query= "INSERT INTO posts (post,created_at) VALUES (?,?)";
		$values=array($note,date("Y-m-d,H:i:s"));
		return $this->db->query($query,$values);

		}

		public function get_posts() {
			return $this->db->query("SELECT * FROM posts")->result_array();
		}

	}

?>