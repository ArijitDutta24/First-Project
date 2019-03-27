<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


public function __construct(){
		parent::__construct();
		$this->load->helper('common_helper');
		$this->load->model('banner_model');
		$this->load->model('cms_model');
		$this->load->model('packages_model');
		$this->load->model('settings_model');
		$this->load->model('Cart_model');
		$this->load->helper('download');
		$this->load->library('cart');
		
		
         
        // load URL helper
        $this->load->helper('url');
        $this->load->helper('text');
        
		
	}


public function index()
{
	$sessionId = $this->session->userdata('id');
	if($sessionId != '')
	{
	$content_data = array();
	$profile = $this->cms_model->about_fetchRecord();
	$content_data['profile'] = $profile;
	$contact = $this->settings_model->contact_fetchRecord();
	$content_data['contact'] = $contact;
	$cat = $this->packages_model->getcatlist();
	$catId = $cat[0]['id'];
	$wher = ['category'=> $catId];
	$deal = $this->packages_model->sidebarFetch($wher);
	$content_data['deal'] = $deal;
	$accWhere = ['id' => $sessionId];
	$account = $this->packages_model->accountFetch($accWhere);
	$content_data['account'] = $account;
	$addWhere = ['account' => $sessionId];
	$address = $this->packages_model->addressFetch($addWhere);
	$content_data['address'] = $address;
	$conwhere = ['enCountry'=> 'yes'];
	$country = $this->Cart_model->getlist($conwhere);
	$content_data['country'] = $country;
	$orderWhere = ['account' => $sessionId];
	$orderDetails = $this->packages_model->orderFetch($orderWhere);
	$content_data['orderDetails'] = $orderDetails;

	$curr = $this->packages_model->currFetch();
	$content_data['curr'] = $curr;
	
	$this->load->view('profile', $content_data);
	}
	else
	{
		redirect('home', 'refresh');
	}
}


public function generalUpdate()
{
	
	$id = $this->input->post('id');
	$name = $this->input->post('name');
	$email = $this->input->post('email');
	
	$where = ['id'=>$id];
	$data = array(
			'name' => $name,
			'email'=> $email,
			'pass' => md5($name)
	);
	$table = 'tblaccounts';
	$this->packages_model->profileUpdate($table, $data, $where);
}


public function billingUpdate()
{
	
	$id       = $this->input->post('id');
	$user     = $this->input->post('user');
	$email    = $this->input->post('email');
	$country  = $this->input->post('country');
	$address1 = $this->input->post('address');
	$address2 = $this->input->post('add');
	$post     = $this->input->post('post');
	$state    = $this->input->post('state');
	$town     = $this->input->post('town');
	
	$where = ['account'=>$id];
	$data = array(
			'nm'    => $user,
			'em'    => $email,
			'addr1' => $country,
			'addr2' => $address1,
			'addr3' => $address2,
			'addr4' => $town,
			'addr5' => $state,
			'addr6' => $post
	);
	$table = 'tbladdressbook';
	$this->packages_model->profileUpdate($table, $data, $where);
}



public function passwordUpdate()
{
	$id       = $this->input->post('id');
	$oldpass  = $this->input->post('oldPass');
	$newpass  = $this->input->post('newPass');

	$where = ['id'=>$id];
	$account = $this->packages_model->accountFetch($where);
	
	
	if($account[0]['pass'] == md5($oldpass))
	{
		$data = array(
				'pass' => md5($newpass)
		);
		$table = 'tblaccounts';
		$this->packages_model->profileUpdate($table, $data, $where);
	}
	else
	{
		echo 1;
	}
}



public function details()
{
	$id = $this->input->post('id');
	$where = ['saleID' => $id];
	$purdetails = $this->packages_model->orderFetch3($where);
	
	$Orwhere = ['sale_id' => $id];
	$order = $this->packages_model->orderFetch4($Orwhere);
	
	$curr = $this->packages_model->currFetch();
	$output = '';
		$output .='<div id="order-details" class="ui-widget">
					<img src="'.base_url('assets/images/logo.png').'" alt="" height="42" width="42" align="right"><br><br>
					<h1 style="color : #74ad37;">Order Details:</h1>
					<br>
               <table id="orders" class="ui-widget ui-widget-content" style=" margin-top: 15px; width: 100%;">
                   <thead>
                        <tr class="ui-widget-header ">
                           
                            <th style="padding: 5px;">Name</th>
                            <th style="padding: 5px;">Type</th>
                            <th style="padding: 5px;">Category</th>
                            <th style="padding: 5px;">Price</th>
                            <th style="padding: 5px;">Quantity</th>
                            
                			<th style="padding: 5px;">Event Date</th>
                            <th style="padding: 5px;">Total</th>
                        </tr>
                    </thead>
                    <tbody>';
                    foreach ($purdetails as $purvalue) 
                    {
                      $i=1;
                      if($purvalue['type']=='Package')
                      {
                      	$Pdetails = $this->packages_model->orderFetch1($where);

                      	foreach ($Pdetails as $value) 
                      	{
	                      	$total = $value['productQty']*$value['pPrice'];
	            			$output .='<tr>
	                          
	                            
	                            <td align="center" style="padding: 5px; border: 1px solid #ddd;">'.$value['pName'].'</td>
	                            <td align="center" style="padding: 5px; border: 1px solid #ddd;">'.$value['type'].'</td>
	                            <td align="center" style="padding: 5px; border: 1px solid #ddd;">'.$value['catname'].'</td>
	                            <td align="center" style="padding: 5px; border: 1px solid #ddd;">USD$ '.$value['pPrice'].'&nbsp;('.currency($value['pPrice'], $curr[0]['curr_rate'], $curr[0]['curr_name']).'&nbsp;)</td>
	                            <td align="center" style="padding: 5px; border: 1px solid #ddd;">'.$value['productQty'].'</td>
	                            <td align="center" style="padding: 5px; border: 1px solid #ddd;">'.$value['booking_date'].'</td>
	                            <td align="center" style="padding: 5px; border: 1px solid #ddd;">USD$ '.number_format($total, 2).'&nbsp;('.currency($total, $curr[0]['curr_rate'], $curr[0]['curr_name']).'&nbsp;)</td>
	                            
	                        </tr>';
                      	}
                  	  }
                      else
                      {
	                      $Adetails = $this->packages_model->orderFetch2($where);

	                      foreach ($Adetails as $value) 
	                      {
	                      	$total1 = $value['productQty']*$value['activity_price'];
	            			$output .='<tr>
	                          
	                            <td align="center" style="padding: 5px; border: 1px solid #ddd;">'.$value['activity_name'].'</td>
	                            <td align="center" style="padding: 5px; border: 1px solid #ddd;">'.$value['type'].'</td>
	                            <td align="center" style="padding: 5px; border: 1px solid #ddd;">'.$value['theme_name'].'</td>
	                            <td align="center" style="padding: 5px; border: 1px solid #ddd;">USD$ '.$value['activity_price'].'&nbsp;('.currency($value['activity_price'], $curr[0]['curr_rate'], $curr[0]['curr_name']).'&nbsp;)</td>
	                            <td align="center" style="padding: 5px; border: 1px solid #ddd;">'.$value['productQty'].'</td>
	                            <td align="center" style="padding: 5px; border: 1px solid #ddd;">'.$value['booking_date'].'</td>
	                            <td align="center" style="padding: 5px; border: 1px solid #ddd;">USD$ '.number_format($total1, 2).'&nbsp;('.currency($total1, $curr[0]['curr_rate'], $curr[0]['curr_name']).'&nbsp;)</td>
	                            
	                        </tr>';
	                      }
	                  }
	              }
                $output .='</tbody>
                    
                </table>
                <br><h3 style="color : #192d3d; font-weight : bold;">Booking Id: </h3><p>'.$order[0]['booking_id'].'</p>';
                if($order[0]['payment_status'] == 0)
                	{
                		$output .= '<h3 style="color : #192d3d; font-weight : bold;">Payment Status: </h3><p style="color : red;">Pending</p>';	
                	}
                	else
                	{
                		$output .='<h3 style="color : #192d3d; font-weight : bold;">Transaction Id: </h3><p>'.$order[0]['transaction_id'];
                	}
                $output .='</p></div>';
                
        
     
        
              echo $output;


}

public function update()
{
	$output = "";
	if(count($this->cart->contents())>0)
	{
		$output .= "CART(".count($this->cart->contents()).")";
	}
	else
	{
		$output .= "CART";
	}
	echo $output;
}


}