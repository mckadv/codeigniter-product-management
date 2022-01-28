<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Products extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Products_model");
    }

    public function index()
    { 
        $data = array();
        $data['products'] = $this->Products_model->getproducts();
        $this->load->view('header');
        $this->load->view('products', $data);
        $this->load->view('footer');
    }
    
    public function delProduct($id)
    {
        $this->Products_model->delProduct($id);
        $this->session->set_flashdata('result_delete', 'El producto ha sido eliminado!');
        redirect('products/');
    }
    
    public function addProduct($id = 0)
    {   
        $data = array();
   		if ($id > 0 && $_POST == null)
			$data['product'] = $this->Products_model->getProduct($id);
        
		if ( isset($_POST['submit'] && $_POST['submit'] = 'Registrar') ) {
            $post = array(
                'name' => $this->input->post('name'),
                'reference' => $this->input->post('reference'),
                'price' => $this->input->post('price'),
                'weight' => $this->input->post('weight'),
                'categories' => $this->input->post('categories'),
                'stock' => $this->input->post('stock')
            );            
            $add = $this->Products_model->addProduct($post);           	
            if(isset($add)) {
                $this->session->set_flashdata('result_publish', 'Nuevo producto registrado');
            } else {
                $this->session->set_flashdata('result_publish', 'Error al crear producto');
            }
        } else if ( isset($_POST['submit'] && $_POST['submit'] = 'Editar') ) {
			$this->delProduct($this->input->post('id'))
		}
                    
        $this->load->view('header');
        $this->load->view('addproduct', $data);
        $this->load->view('footer');
    }
    
    public function cartProduct($id)
    {
	$id = $this->input->post('id');
	$price = $this->input->post('prive');
	    
        if(!$this->session->has_userdata('cart')) {
	  $cart = array());
	} else {
          $cart = $this->session->cart;
	}
	    
	$added = array(
	    'id' => $id,
	    'quantity' => 1,
	    'price' => $price
	));
	    
        array_push($cart, $added);
        $this->session->set_userdata('cart', $cart);	    
        $this->session->set_flashdata('result_cart', 'El producto ha sido añadido al carrito!');
        redirect('products/');
    }
}
