<?php

	class Notes extends CI_Controller {
		public function post(){
			// $this->output->enable_profiler();
			$validation_config =array( 
								array(  'field' => 'noteinput',
										'label'=>'Note',
										'rules' =>'required|min_length[10]'
									),
								);
		$this->load->library('form_validation');
		$this->form_validation->set_rules($validation_config);
			if($this->form_validation->run()=== FALSE) {
				echo validation_errors();
			}

			else {
				$note=$this->input->post('noteinput');
				$this->load->model('note');
				$posted=$this->note->put_post($note);
				$getposts=$this->note->get_posts();
				// $this->output->set_content_type('application/json')->set_output($getposts);
				// $this->output->set_content_type('application/json')->set_output($getposts);

				$postdata = json_encode($getposts);
				echo $postdata;

				// if ($posted){
				// 	$this->load->view('notes',$notas=array('note'=>$getposts));
				// }

			}
		}

		public function getpost(){
				$this->load->model('note');
				$retreived=$this->note->get_posts();
				echo json_encode($retreived);


		}

	}

?>