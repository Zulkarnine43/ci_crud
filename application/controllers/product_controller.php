<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product_controller extends CI_Controller {

		public function __construct(){
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);

	}


	public function product_add()
	{
		$this->load->view('product/product_add');
	}

   public function product_db()
	{
	
		$data=array(
        'product_name'=>$this->input->post('product_name'),
        'product_categorie'=>$this->input->post('product_categorie'),
        'description'=>$this->input->post('description'),
        'unit_in_stock'=>$this->input->post('unit_in_stock'),
        'price'=>$this->input->post('price')
		);
                $sdata=array();
                $error="";
		        $config['upload_path']          = 'image/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000000;
                $config['max_width']            = 2048;
                $config['max_height']           = 1024;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                        $error =  $this->upload->display_errors();

                    
                }
                else
                {
                        $sdata = $this->upload->data();
                        
                        $data['image']=$config['upload_path'].$sdata['file_name'];
                }
		
		 $db=$this->load->database();
		 $this->db->insert('product_add', $data);
			  redirect('/product_add');
		
	}

	public function view_product()
	{
		$db=$this->load->database();
		$query_result=$this->db->get('product_add');

		 $result['data']=$query_result->result_array();


		$this->load->view('product/product_view',$result);
	}

	public function edit_product ($id){
		$this->db->where('id', $id);
		$this->db->FROM('product_add');
		$query_result=$this->db->get();

		$result['data']=$query_result->result_array();
      

       $this->load->view('product/edit_product',$result);

	}


	public function update_product($id){

     $data=array(
        'product_name'=>$this->input->post('product_name'),
        'product_categorie'=>$this->input->post('product_categorie'),
        'description'=>$this->input->post('description'),
        'unit_in_stock'=>$this->input->post('unit_in_stock')
		);

     if ($this->input->post('image')) {
     	 $sdata=array();
                $error="";
		        $config['upload_path']          = 'image/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000000;
                $config['max_width']            = 2048;
                $config['max_height']           = 1024;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                        $error =  $this->upload->display_errors();

                    
                }
                else
                {
                        $sdata = $this->upload->data();
                        
                        $data['image']=$config['upload_path'].$sdata['file_name'];
                }
     }

		$this->db->where('id', $id);
		$this->db->update('product_add',$data);
           echo "successfully updated";
		}

		public function delete_product($id){
               $this->db->where('id', $id);
               $this->db->delete('product_add');
                echo "successfully deleted";
			}

      public function add_cart(){

               $id=$this->input->post('id');
               $this->db->where('id', $id);
               $this->db->FROM('product_add');
               $result_db=$this->db->get();


foreach ($result_db->result_array() as $key) {
                
          $data = array(
            'id' => $key['id'], 
            'name' => $key['product_name'], 
            'qty' => $this->input->post('qty'),
            'price' =>$key['price'],  
        );

        $this->load->library('cart');
        $this->cart->insert($data);

    }
        redirect('/view_cart');
    }

    public function view_cart()
    {
        $this->load->view('product/view_cart');
    }  


    public function update_cart($rowid)
    {  
       $this->load->library('cart');


            $data = array(
                    'rowid' => $rowid,
                    'qty'   => 1
            );

            $this->cart->update($data);

        redirect('/view_cart');
    }   

    public function cancel_cart($rowid)
    {  
       $this->load->library('cart');
    $this->cart->remove($rowid);

     redirect('/view_cart');
    }  
     
    
}