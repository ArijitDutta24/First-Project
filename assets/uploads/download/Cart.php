<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		
        $this->load->library('cart');
        $this->load->model('cms_model');
        $this->load->model('packages_model');
        $this->load->model('settings_model');
        $this->load->model('Cart_model');
        $this->load->helper('text');
        $this->load->library('email');
		
	}


	public function index()
	{
		if($this->session->userdata('id') == '')
		{
			// $this->cart->destroy();
			$data = array(

			'id' => $this->input->post('prod'),

			'name' => $this->input->post('pName'),

			'price' => $this->input->post('offer'),

			'qty' => $this->input->post('qty'),

			'stock' => $this->input->post('stock'),

			'pCode' => $this->input->post('code'),

			'cat_id' => $this->input->post('cat'),

			'image' => $this->input->post('image'),

			'max' => $this->input->post('max'),

			'user_id' => 0

			);
		}
		else
		{

			$data = array(

			'id' => $this->input->post('prod'),

			'name' => $this->input->post('pName'),

			'price' => $this->input->post('offer'),

			'qty' => $this->input->post('qty'),

			'stock' => $this->input->post('stock'),

			'pCode' => $this->input->post('code'),

			'cat_id' => $this->input->post('cat'),

			'image' => $this->input->post('image'),

			'max' => $this->input->post('max'),

			'user_id' => $this->session->userdata('id')

			);
		}


		
		$this->session->set_userdata('pId', $data['id']);
		$this->session->set_userdata('Id', md5($data['id']));
		$row_id = md5($data['id']);
		
		
        $cart = $this->cart->get_item($row_id);
        $total = $cart['qty'] + $data['qty'];

			if($total<=$data['max'] && $total<=$data['stock'])
			{
			
					$this->cart->insert($data);
				
			
			}
			
		
		echo $this->view();
	}


	public function busket()
	{
		echo $this->view();
	}


	


	public function view()
	{
		
		$output = '';
		$output .='
		
		<div class="column-labels">
            <label class="product-image">Image</label>
            <label class="product-details">Package</label>
            <label class="product-price">Price</label>
            <label class="product-quantity">Quantity</label>
            <label class="product-removal">Remove</label>
            <label class="product-line-price">Total</label>
        </div>
        <input type="hidden" name="count" id="count" value="'. count($this->cart->contents()).'">';
        
     
        $count = 0;
        foreach ($this->cart->contents() as $value) {
        	# code...
        	$count++;
        	$output .= '
        <input type="hidden" name="cartprodId" value="7" class="cartprodId" id="cartprodId">
        
        <input type="hidden" name="catid" value="'.$this->session->set_userdata('ID', $value['cat_id']).'" class="catid" id="catid">
        <input type="hidden" name="stock" value="'.$value['stock'].'" class="stock" id="stocky">
        <input type="hidden" name="cartquantity" value="'.$value['qty'].'" class="cartqty" id="cartquantity-'.$value['rowid'].'">
		<div class="product">
		<div class="product-image">
              <img src="'.$value['image'].'">
            </div>
            <div class="product-details">
              <div class="product-title">'.$value['name'].'</div>
              
            </div>
            <div class="product-price">$'.$value['price'].'</div>
            <div class="product-quantity">
              <form id="myform" method="POST" action="#">
                  
                  <input type="button" value="-" class="qtyminus" field="quantity" id="'.$value['rowid'].'" data-rowid="'.$value['rowid'].'" data-price="'.$value['price'].'"/>
                  
                  <input type="text" name="quantity" value="'.$value['qty'].'" class="qty" id="quantity-'.$value['rowid'].'" readonly/>

                  <input type="hidden" name="maxquantity" value="'.$value['max'].'" class="max" id="maxquantity-'.$value['rowid'].'" readonly/>
                  
                  <input type="button" value="+" class="qtyplus" field="quantity" id="'.$value['rowid'].'" data-rowid="'.$value['rowid'].'" data-price="'.$value['price'].'"/>
              </form>
            </div>
            <div class="product-removal">
              <button class="remove-product"  id="'.$value['rowid'].'">
                Remove
              </button>
            </div>
            <div class="product-line-price" id="newval">$'.$value['subtotal'].'</div>
            
            </div>
            ';
        }
        $output .= '
            <div class="totals clearfix">            
            <div class="totals-item totals-item-total">
              <label>Grand Total</label>
              <div class="totals-value" id="cart-total">$'.$this->cart->total().'</div>
            </div>
          </div>
              <div class="action_btn clearfix">
                
                <button class="checkout btn_primary" onclick="check()">Checkout</button>
              </div>';



              if($count==0)
              {
              	$output = "<h3 align='center'>Cart is Empty</h3>";

              }
              return $output;
       

	}


	


	public function remove()
	{
		$delid = $this->input->post('id');
		$data = array(
				'rowid' => $delid,
				'qty'   => 0
		);
		$this->cart->update($data);
		echo $this->view();
	}


	public function update()
	{
		
		$id = $this->input->post('id');
		$qty = $this->input->post('qty');
		$price = $this->input->post('price');

		$data = array(
				'rowid' => $id,
				'qty'   => $qty,
				'subtotal' => $price
		);
		$this->cart->update($data);
		echo $this->view();
		
	}


	public function delete()
	{
		$this->cart->destroy();
	}



	public function emailCheck()
	{
		$emailId = $this->input->post('email');
		$where = ['email' => $emailId];
		$email = $this->Cart_model->emailFetch($where);
		echo $email;
	}



	public function sendEmail()
	{
		$data = array(
			'name'  => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'comm'  => $this->input->post('comm')
		);

		$from= $data['email'];
		//$to ="testdevloper007@gmail.com";
		$to ="arijit.dutta48@gmail.com";
		
		
		$subject = 'Product Enquiry'; 
		$message="<p>Hi Admin, <br>" .$data['name']."
		<br> Massege: ".$data['comm'].
		"<br> Email: ".$data['email']."</p><br><br> Regards,<br>" .$data['name'];

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: '.$from."\r\n".
			'Reply-To: '.$from."\r\n" .
			'X-Mailer: PHP/' . phpversion();

		@mail($to, $subject, $message, $headers);
								
	}



	public function login()
	{
		$cat_id = base64_decode($this->uri->segment(2));
		$content_data = array();
		$holiday = $this->cms_model->about_fetchRecord();
		$content_data['holiday'] = $holiday;
		$contact = $this->settings_model->contact_fetchRecord();
		$content_data['contact'] = $contact;
		$cat = $this->packages_model->getcatlist();
		$catId = $cat[0]['id'];
		$wher = ['category<>'=> $catId];
		$deal = $this->packages_model->sidebarFetch($wher);
    	$content_data['deal'] = $deal;
		$this->load->view('login', $content_data);
	}


	public function loginAccess()
	{


		if($this->session->userdata('id') == '')
		{
				$userName = $this->input->post('username');
				$passWord = md5($this->input->post('password'));
				$where = ['email' => $userName, 'pass' => $passWord];
				$login = $this->Cart_model->userFetch($where);
				
				
				if($login)
				{
					$wheree = ['account' => $login];
					$accountDetails = $this->Cart_model->accFetch($wheree);
					$where1 = ['id' => $login];
					$accName = $this->Cart_model->accName($where1);
					// echo "<pre>";
					// print_r($accName);
					// exit;
					
					$newdata = array(
						   'id'    => $login,
		                   'name'  => $accountDetails[0]['nm'],
		                   'email' => $accountDetails[0]['em'],
		                   'add1'  => $accountDetails[0]['addr1'],
		                   'add2'  => $accountDetails[0]['addr2'],
		                   'add3'  => $accountDetails[0]['addr3'],
		                   'add4'  => $accountDetails[0]['addr4'],
		                   'add5'  => $accountDetails[0]['addr5'],
		                   'add6'  => $accountDetails[0]['addr6']
		                   
		               );

				$this->session->set_userdata($newdata);
				$this->session->set_userdata('accName', $accName[0]['name']);
				}

			

		}
		
			$content_data = array();
			$about = $this->cms_model->about_fetchRecord();
			$content_data['holiday'] = $about;
			$contact = $this->settings_model->contact_fetchRecord();
			$content_data['contact'] = $contact;
			$cat = $this->packages_model->getcatlist();
			$catId = $cat[0]['id'];
			$wher = ['category<>'=> $catId];
			$deal = $this->packages_model->sidebarFetch($wher);
	    	$content_data['deal'] = $deal;
	    	$where = ['enCountry'=> 'yes'];
	    	$country = $this->Cart_model->getlist($where);
	    	$content_data['country'] = $country;
	    	$content_data['cart'] = $this->cart->total();
	    	
			$delid = $this->session->userdata('Id');
				$data = array(
				'rowid' => $delid,
				'user_id' => $this->session->userdata('id')
				);
			$this->cart->update($data);

			// echo $this->session->userdata('accName');
			// exit;
				    	
	    	$this->load->view('billing_details', $content_data);
			
	}


	public function codeCheck()
	{
		$code  = $this->input->post('code');
		$total = $this->cart->total();
		$date  = date("Y-m-d");
		$where = ['cDiscountCode'=> $code];
		$data1  = $this->Cart_model->couponCheck($where);
		$data  = $this->Cart_model->couponCheck1($where);
		$catId = $this->input->post('cID');
		$whereUsage = ['account'=>$this->session->userdata('id'), 'cDiscountCode' => $code];
		$usage_code = $this->Cart_model->usageFetch($whereUsage);
		$count = count($usage_code);
		
		if($this->session->userdata('id') != '')
		{
			if($data1 == 1)
			{
				$last = substr($data[0]['cDiscount'], -1);
				$explode = explode(',', $data[0]['categories']);
				if(($data[0]['cExpiry'] > $date)==true  && $total>$data[0]['cMin']  && $data[0]['cLive']== 'yes')
				{
					if(in_array($catId, $explode))
					{
						echo 3;
					}
					else
					{
						if($count < $data[0]['cUsage'] || $data[0]['cUsage']==0)
						{
							if($last == '%')
							{
								$Amount = $total * ($data[0]['cDiscount']/100);
								if($data[0]['cMin'] > 0)
								{
									if($Amount <= $data[0]['cMin'])
									{
										$sub = $Amount;
										$totalAmount = $total - $sub;
									}
									else
									{
										$sub = $data[0]['cMin'];
										$totalAmount = $total - $sub;
									}
								}
								else
								{
									$sub = $Amount;
									$totalAmount = $total - $sub;
								}
							}
							else
							{
								$totalAmount = $total - $data[0]['cDiscount'];
							}

							$output = '
								<input type="hidden" name="carttotal" value="'.number_format((float)$this->cart->total(), 2, '.', '').'" class="carttotal" id="carttotal">';
							if($last == '%')
							{
							$output .= '<input type="hidden" name="cartdiscount" value="'.number_format((float)$sub, 2, '.', '').'" class="cartdiscount" id="cartdiscount">
								<input type="hidden" name="cartdiscountcode" value="'.$code.'" class="cartdiscountcode" id="cartdiscountcode">';
							}
							else
							{
							$output .= '<input type="hidden" name="cartdiscount" value="'.number_format((float)$data[0]['cDiscount'], 2, '.', '').'" class="cartdiscount" id="cartdiscount">
								<input type="hidden" name="cartdiscountcode" value="'.$code.'" class="cartdiscountcode" id="cartdiscountcode">';
							}
							$output .= '<input type="hidden" name="amountpay" value="'.number_format((float)$totalAmount, 2, '.', '').'" class="amountpay" id="amountpay">';
							echo $output;
						}
						else
						{
							echo 5;
						}
					}
				}
				else
				{
					echo 2;
				}
			}
			else
			{
				echo 1;
			}
		}
		else
		{
			echo 4;
		}

	}


	public function codeRemove()
	{
		$code  = $this->input->post('code');
		$catId  = $this->input->post('catId');
		$accId  = $this->input->post('accId');
		$total = $this->cart->total();
		$date  = date("Y-m-d");

		$output = '<input type="hidden" name="carttotal" value="'.number_format((float)$this->cart->total(), 2, '.', '').'" class="carttotal1" id="carttotal1">';
								
		$output .= '<input type="hidden" name="amountpay" value="'.number_format((float)$totalAmount, 2, '.', '').'" class="amountpay1" id="amountpay1">';
		echo $output;
	}



	public function billing()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('add1');
		$this->session->unset_userdata('add2');
		$this->session->unset_userdata('add3');
		$this->session->unset_userdata('add4');
		$this->session->unset_userdata('add5');
		$this->session->unset_userdata('add6');

		$content_data = array();
		$about = $this->cms_model->about_fetchRecord();
		$content_data['holiday'] = $about;
		$contact = $this->settings_model->contact_fetchRecord();
		$content_data['contact'] = $contact;
		$cat = $this->packages_model->getcatlist();
		$catId = $cat[0]['id'];
		$wher = ['category<>'=> $catId];
		$deal = $this->packages_model->sidebarFetch($wher);
    	$content_data['deal'] = $deal;
    	$where = ['enCountry'=> 'yes'];
    	$country = $this->Cart_model->getlist($where);
    	$content_data['country'] = $country;
    	$content_data['cart'] = $this->cart->total();
    	$ProdId = $this->session->userdata('pId');
    	$prdwhere = ['id' => $ProdId];
    	$conRestrict = $this->Cart_model->conFetch($prdwhere);
    	
    	
    	$this->load->view('billing_details', $content_data);
	}

	

	public function finalPayment()
	{
		$subTotal = $this->input->post('subTotal');
		$discount = $this->input->post('discount');
		$totalPay = $this->input->post('totalPay');
		$code     = $this->input->post('discode');


        	
			$output = '<div class="alert alert-danger" id="errorpay" style="display: none;">
                <p><strong>Warning</strong> <span id="errormsgpay">lorem ipsum doler sit amet</span></p>
              </div>
              <div class="col6">
                <div class="form_group" id="payment">
                
                <select name="paymentoption" id="paymentoption" class="form_control paymentoption">
                   <option value="bank">Banking</option>
                   <option value="cash on delivery">Cash On Delivery</option>
                   
                </select>
              </div>

              </div>

              <div class="table_responsive">
                <table class="table">
				  <thead>
                     <tr>
                        <td>Sub Total</td>';
                        if(!empty($discount))
              			{
               $output .='<td>Discount Price</td>';
                    	}
               $output .='<td>Amount To Pay</td>
                     </tr>
				  </thead>
				  <tbody>
                    <tr>
                       <td>$'.number_format((float)$this->cart->total(), 2, '.', '').'</td>';
                       if(!empty($discount))
              			{
                $output .='<td>$<span id="dis">'.$discount.'</span></td>
                   		
                       	 <td>$<span class="ATP">'.$totalPay.'</span></td>';
                       	}
                       	else
                       	{
                $output .='<td>$<span class="ATP">'.number_format((float)$this->cart->total(), 2, '.', '').'</span></td>';
                       	}
                $output .='</tr>
				  </tbody>
                </table>'; 
              $count = 0;
	            // $cart = array();
	        	foreach ($this->cart->contents() as $value) {
	        	$count++;
	        	$output .= '
						<input type="hidden" name="proid" value="'.$value['id'].'" class="proid" id="proid">
						<input type="hidden" name="catid1" value="'.$value['cat_id'].'" class="catid1" id="catid1">
						<input type="hidden" name="qty1" value="'.$value['qty'].'" class="qty1" id="qty1">
						<input type="hidden" name="stock" value="'.$value['stock'].'" class="stock" id="stock">
						<input type="hidden" name="price" value="'.$value['price'].'" class="indprice" id="indprice">';
				}
          		
		
			echo $output;
	}



	public function finalPayment1()
	{
		$subTotal = $this->input->post('subTotal');
		$totalPay = $this->input->post('totalPay');
		

        	
			$output = '<div class="alert alert-danger" id="errorpay" style="display: none;">
                <p><strong>Warning</strong> <span id="errormsgpay">lorem ipsum doler sit amet</span></p>
              </div>
              <div class="col6">
                <div class="form_group" id="payment">
                
                <select name="paymentoption" id="paymentoption" class="form_control paymentoption">
                   <option value="bank">Banking</option>
                   <option value="cash on delivery">Cash On Delivery</option>
                   
                </select>
              </div>

              </div>

              <div class="table_responsive">
                <table class="table">
				  <thead>
                     <tr>
                        <td>Sub Total</td>';
                        
               $output .='<td>Discount Price</td>';
                    	
               $output .='<td>Amount To Pay</td>
                     </tr>
				  </thead>
				  <tbody>
                    <tr>
                       <td>$'.number_format((float)$this->cart->total(), 2, '.', '').'</td>';
                       
                $output .='<td>$<span class="ATP">'.number_format((float)$this->cart->total(), 2, '.', '').'</span></td>';
                       	
                $output .='</tr>
				  </tbody>
                </table>'; 
              $count = 0;
	            // $cart = array();
	        	foreach ($this->cart->contents() as $value) {
	        	$count++;
	        	$output .= '
						<input type="hidden" name="proid" value="'.$value['id'].'" class="proid" id="proid">
						<input type="hidden" name="catid1" value="'.$value['cat_id'].'" class="catid1" id="catid1">
						<input type="hidden" name="qty1" value="'.$value['qty'].'" class="qty1" id="qty1">
						<input type="hidden" name="stock" value="'.$value['stock'].'" class="stock" id="stock">
						<input type="hidden" name="price" value="'.$value['price'].'" class="indprice" id="indprice">';
				}
          		
		
			echo $output;
	}

	public function insert()
	{
		if(!empty($this->input->post('discount')))
		{
		$data = array(
				'$b_name'    => $this->input->post('b_name'),
		        '$b_email'   => $this->input->post('b_email'),
		        '$b_ccode'   => $this->input->post('b_ccode'),
		        '$b_address' => $this->input->post('b_address'),
		        '$b_add'     => $this->input->post('b_add'),
		        '$b_town'    => $this->input->post('b_town'),
		        '$b_state'   => $this->input->post('b_state'),
		        '$b_post'    => $this->input->post('b_post'),
		        '$account'   => $this->input->post('account'),
		        '$note'      => $this->input->post('note'),
		        '$prodId'    => $this->input->post('prodId'),
		        '$catId'     => $this->input->post('catId'),
		        '$quantity'  => $this->input->post('quantity'),
		        '$stock'     => $this->input->post('stock'),
		        '$total'     => $this->input->post('total'),
		        '$insur'     => 0,
		        '$gtotal'    => $this->input->post('total'),
		        '$date'      => date("Y-m-d"),
		        '$time'      => date("h:i:s"),
		        '$method'    => $this->input->post('method'),
		        '$price'     => $this->input->post('price'),
		        '$discount'	 => $this->input->post('discount'),
		        '$discode'	 => $this->input->post('discode')
		    );
		}
		else
		{
			$data = array(
				'$b_name'    => $this->input->post('b_name'),
		        '$b_email'   => $this->input->post('b_email'),
		        '$b_ccode'   => $this->input->post('b_ccode'),
		        '$b_address' => $this->input->post('b_address'),
		        '$b_add'     => $this->input->post('b_add'),
		        '$b_town'    => $this->input->post('b_town'),
		        '$b_state'   => $this->input->post('b_state'),
		        '$b_post'    => $this->input->post('b_post'),
		        '$account'   => $this->input->post('account'),
		        '$note'      => $this->input->post('note'),
		        '$prodId'    => $this->input->post('prodId'),
		        '$catId'     => $this->input->post('catId'),
		        '$quantity'  => $this->input->post('quantity'),
		        '$stock'     => $this->input->post('stock'),
		        '$total'     => $this->input->post('total'),
		        '$insur'     => 0,
		        '$gtotal'    => $this->input->post('total'),
		        '$date'      => date("Y-m-d"),
		        '$time'      => date("h:i:s"),
		        '$method'    => $this->input->post('method'),
		        '$price'     => $this->input->post('price'),
		        '$discount'	 => 0,
		        '$discode'	 => ''
		    );
		}

		
		$sales     = $this->Cart_model->fetch();

		$invoiceId = $sales[0]['id'] + 1;


		if($data['$account'] == 1)
			{
				//////////////////Account Register//////////////////
					$registerData = array(

						'name' 			=> $data['$b_name'], 
						'created' 		=> $data['$date'], 
						'email'			=> $data['$b_email'], 
						'pass'			=> md5($data['$b_name']), 
						'enabled'		=> 'yes', 
						'verified'		=> 'yes', 
						'timezone'		=> 0, 
						'ip'			=> $this->input->ip_address(), 
						'notes'			=> '', 
						'system1'		=> '', 
						'system2'		=> '', 
						'language'		=> 'english', 
						'currency'		=> '', 
						'enablelog'		=> 'yes', 
						'newsletter'	=> 'yes', 
						'type'			=> 'personal', 
						'tradediscount'	=> '', 
						'minqty'		=> '', 
						'maxqty'		=> 0, 
						'stocklevel'	=> '', 
						'mincheckout'	=> round(0.00,2), 
						'trackcode'		=> '', 
						'recent'		=> ''
					);

					$registerId = $this->Cart_model->registerInsert($registerData);

				///////////////////////Registration Mail Sent/////////////////

				$from= "arijit.dutta48@gmail.com";
				//$to ="testdevloper007@gmail.com";
				$to = $data['$b_email'];
				
				
				$subject = 'Heritage Registration Details'; 
				$message="<p>Hi, <br>" .$data['$b_name']."
				<br> Massege: Thank You For Registration
				<br> Username : ".$data['$b_email'].
				";<br>Password : ".$data['$b_name'].
				"<br><br> Regards,<br> Heritage";

				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: '.$from."\r\n".
					'Reply-To: '.$from."\r\n" .
					'X-Mailer: PHP/' . phpversion();

				@mail($to, $subject, $message, $headers);

				    
				//////////////////Sale Insert/////////////////////    				
					$saleData = array(
							 'invoiceNo'          => $invoiceId,
							 'account'	          => $registerId, 
							 'saleNotes'          => $data['$note'], 
							 'bill_1'	          => $data['$b_name'], 
							 'bill_2'	          => $data['$b_email'], 
							 'bill_3'             => $data['$b_address'], 
							 'bill_4'             => $data['$b_add'], 
							 'bill_5'             => $data['$b_town'], 
							 'bill_6'             => $data['$b_state'], 
							 'bill_7'             => $data['$b_post'], 
							 'bill_8'             => '', 
							 'bill_9'             => $data['$b_ccode'], 
							 'ship_1'             => '', 
							 'ship_2'             => '', 
							 'ship_3'             => '', 
							 'ship_4'             => '',   
							 'ship_5'             => '', 
							 'ship_6'             => '', 
							 'ship_7'             => '', 
							 'ship_8'             => '', 
							 'buyerAddress'       => '', 
							 'paymentStatus'      => 'shipping', 
							 'gatewayID'          => '', 
							 'taxPaid'            => round(0.00,2), 
							 'taxRate'            => 0, 
							 'couponCode'         => $data['$discode'], 
							 'couponTotal'        => $data['$discount'], 
							 'codeType'           => '', 
							 'subTotal'           => $data['$total'], 
							 'grandTotal'         => $data['$gtotal'], 
							 'shipTotal'          => '', 
							 'globalTotal'        => round(0.00,2), 
							 'insuranceTotal'     => $data['$insur'], 
							 'chargeTotal'        => round(0.00,2), 
							 'globalDiscount'     => 0, 
							 'manualDiscount'     => round(0.00,2), 
							 'isPickup'           => 'no', 
							 'shipSetCountry'     => '', 
							 'shipSetArea'        => '', 
							 'setShipRateID'      => 0, 
							 'shipType'           => 'weight', 
							 'cartWeight'         => 0, 
							 'purchaseDate'       => $data['$date'], 
							 'purchaseTime'       => $data['$time'], 
							 'buyCode'            => md5($invoiceId), 
							 'saleConfirmation'   => 'yes', 
							 'paymentMethod'      => $data['$method'], 
							 'ipAddress'          => $this->input->ip_address(), 
							 'restrictCount'      => 0, 
							 'zipLimit'           => 0, 
							 'downloadLock'       => 'no', 
							 'optInNewsletter'    => 'yes', 
							 'paypalErrorTrigger' => 0, 
							 'trackcode'          => '', 
							 'type'               => 'personal', 
							 'wishlist'           => 0, 
							 'platform'           => 'desktop' 
					);

					$saleInsertId = $this->Cart_model->saleInsert($saleData);


					$prodWhere1 = ['id' => $data['$prodId']];
					$prodDetails1 = $this->Cart_model->prevQty($prodWhere1);

			

			///////////////////////////Admin Email Sent///////////////////

				$from1 = 'no-reply@gamil.com';
				$to1 = 'arijit.dutta48@gmail.com';
				
				
				$subject1 = 'Purchase Product Details'; 
				$message1="<p>Hi Admin, <br>
				<br> Massege: Product Details:-
				<br> Buy Code : ".md5($saleInsertId).
				";<br>Package Name : ".$prodDetails1[0]['pName'].
				";<br>Package Qty: ".$data['$quantity'].
				";<br>Total Price: ".$data['$gtotal'].
				";<br>Pruchase Date: ".$data['$date'].
				";<br>Pruchase Time: ".$data['$time'].
				"</p>
				<br>
				<p>Buyer Details:<br>
				Buyer Name: ".$data['$b_name'].
				";<br>Buyer Address: ".$data['$b_address'].
				";<br>".$data['$b_add'].
				";<br>".$data['$b_town'].
				";<br>".$data['$b_state'].
				";<br>".$data['$b_post'].
				"<br><br> Regards,<br> Heritage" ;

				$headers1  = 'MIME-Version: 1.0' . "\r\n";
				$headers1 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers1 .= 'From: '.$from1."\r\n".
					'Reply-To: '.$from1."\r\n" .
					'X-Mailer: PHP/' . phpversion();

				@mail($to1, $subject1, $message1, $headers1);



				///////////////////////////Buyer Email Sent///////////////////

				$from2= "arijit.dutta48@gmail.com";
				$to2 = $data['$b_email'];
				
				
				$subject2 = 'Purchase Product Details'; 
				$message2="<p>Hi, <br>" .$data['$b_name']."
				<br> Massege: Product Details:
				<br> Buy Code : ".md5($saleInsertId).
				";<br>Package Name : ".$prodDetails1[0]['pName'].
				";<br>Package Qty: ".$data['$quantity'].
				";<br>Total Price: ".$data['$gtotal'].
				";<br>Pruchase Date: ".$data['$date'].
				";<br>Pruchase Time: ".$data['$time'].
				"<br> Email: ".$to2."</p>
				<br><br> Regards,<br> Heritage";

				$headers2  = 'MIME-Version: 1.0' . "\r\n";
				$headers2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers2 .= 'From: '.$from2."\r\n".
					'Reply-To: '.$from2."\r\n" .
					'X-Mailer: PHP/' . phpversion();

				@mail($to2, $subject2, $message2, $headers2);


					
				//////////////////Status Insert/////////////////////
					
					$statusData = array(

							'saleID'		=> $saleInsertId, 
							'statusNotes'	=> 'Order Placed on Website', 
							'dateAdded'		=> $data['$date'], 
							'timeAdded'		=> $data['$time'], 
							'orderStatus'	=> 'shipping', 
							'adminUser'		=> 'system', 	
							'visacc'		=> 'no', 
							'account'		=> $registerId
					);

					$this->Cart_model->statusInsert($statusData);

				//////////////////Purchase Insert/////////////////////

					$purchaseData = array(

						'purchaseDate'      => $data['$date'], 
						'purchaseTime'      => $data['$time'], 
						'saleID'            => $saleInsertId, 
						'productType'       => 'virtual', 
						'productID'			=> $data['$prodId'], 
						'giftID'			=> 0, 
						'categoryID'		=> $data['$catId'], 
						'salePrice'			=> $data['$total'], 
						'liveDownload'		=> 'no', 
						'persPrice'			=> 0, 
						'attrPrice'			=> 0, 
						'insPrice'			=> 0, 
						'globalDiscount'	=> 0, 
						'globalCost'		=> 0, 
						'productQty'		=> $data['$quantity'], 
						'productWeight'		=> 0, 
						'downloadAmount'	=> 0, 
						'downloadCode'		=> '', 
						'buyCode'			=> md5($saleInsertId), 
						'saleConfirmation'	=> 'yes', 
						'deletedProductName'=> '', 
						'freeShipping'		=> 'no', 
						'wishpur'			=> 0, 
						'platform'			=> 'desktop'
					);

					$this->Cart_model->purchaseInsert($purchaseData);

				//////////////////Address Book Insert/////////////////////

					$regAddressData = array(

						'account'			=> $registerId, 
						'nm'				=> $data['$b_name'], 
						'em'				=> $data['$b_email'], 
						'addr1'				=> $data['$b_ccode'], 
						'addr2'				=> $data['$b_address'], 
						'addr3'				=> $data['$b_add'], 
						'addr4'				=> $data['$b_town'], 
						'addr5'				=> $data['$b_state'], 
						'addr6'				=> $data['$b_post'], 
						'addr7'				=> '', 
						'addr8'				=> '', 
						'zone'				=> 0
					);

					$this->Cart_model->addressBookInsert($regAddressData);

				//////////////////Discount Insert/////////////////////

				$discountData = array(

					'cCampaign'		=> '', 
					'cDiscountCode' => $data['$discode'], 
					'cUseDate'		=> $data['$date'], 
					'saleID'		=> $saleInsertId, 
					'discountValue' => $data['$discount']
				);
				if(!empty($data['$discount']) && !empty($data['$discode']))
				{

					$this->Cart_model->discountInsert($discountData);

				}

			///////////////////////Update Product Qty/////////////////////

				$whereQty = ['id' => $data['$prodId']];
				$updateQty = $data['$stock'] - $data['$quantity'];
				$prodUpdate = array('pStock' => $updateQty);
				$this->Cart_model->prodUpdate($prodUpdate, $whereQty);
				
					
				$this->cart->destroy();
				
			}

			else
			{

			//////////////////Sale Insert/////////////////////

				$saleData = array(
						 'invoiceNo'          => $invoiceId,
						 'account'	          => 0, 
						 'saleNotes'          => $data['$note'], 
						 'bill_1'	          => $data['$b_name'], 
						 'bill_2'	          => $data['$b_email'], 
						 'bill_3'             => $data['$b_address'], 
						 'bill_4'             => $data['$b_add'], 
						 'bill_5'             => $data['$b_town'], 
						 'bill_6'             => $data['$b_state'], 
						 'bill_7'             => $data['$b_post'], 
						 'bill_8'             => '', 
						 'bill_9'             => $data['$b_ccode'], 
						 'ship_1'             => '', 
						 'ship_2'             => '', 
						 'ship_3'             => '', 
						 'ship_4'             => '',   
						 'ship_5'             => '', 
						 'ship_6'             => '', 
						 'ship_7'             => '', 
						 'ship_8'             => '', 
						 'buyerAddress'       => '', 
						 'paymentStatus'      => 'shipping', 
						 'gatewayID'          => '', 
						 'taxPaid'            => round(0.00,2), 
						 'taxRate'            => 0, 
						 'couponCode'         => $data['$discode'], 
						 'couponTotal'        => $data['$discount'], 
						 'codeType'           => '', 
						 'subTotal'           => $data['$total'], 
						 'grandTotal'         => $data['$gtotal'], 
						 'shipTotal'          => '', 
						 'globalTotal'        => round(0.00,2), 
						 'insuranceTotal'     => $data['$insur'], 
						 'chargeTotal'        => round(0.00,2), 
						 'globalDiscount'     => 0, 
						 'manualDiscount'     => round(0.00,2), 
						 'isPickup'           => 'no', 
						 'shipSetCountry'     => '', 
						 'shipSetArea'        => '', 
						 'setShipRateID'      => 0, 
						 'shipType'           => 'weight', 
						 'cartWeight'         => 0, 
						 'purchaseDate'       => $data['$date'], 
						 'purchaseTime'       => $data['$time'], 
						 'buyCode'            => md5($invoiceId), 
						 'saleConfirmation'   => 'yes', 
						 'paymentMethod'      => $data['$method'], 
						 'ipAddress'          => $this->input->ip_address(), 
						 'restrictCount'      => 0, 
						 'zipLimit'           => 0, 
						 'downloadLock'       => 'no', 
						 'optInNewsletter'    => 'yes', 
						 'paypalErrorTrigger' => 0, 
						 'trackcode'          => '', 
						 'type'               => 'personal', 
						 'wishlist'           => 0, 
						 'platform'           => 'desktop' 
				);
				$saleInsertId = $this->Cart_model->saleInsert($saleData);
				$prodWhere = ['id' => $data['$prodId']];
				$prodDetails = $this->Cart_model->prevQty($prodWhere);


			///////////////////////////Admin Email Sent///////////////////

				$from3= 'no-reply@gamil.com';
				$to3 ="arijit.dutta48@gmail.com";
				
				
				$subject3 = 'Purchase Product Details'; 
				$message3 ="<p>Hi Admin, <br>
				<br> Massege: Product Details:
				<br> Buy Code : ".md5($saleInsertId).
				";<br>Package Name : ".$prodDetails[0]['pName'].
				";<br>Package Qty: ".$data['$quantity'].
				";<br>Total Price: ".$data['$gtotal'].
				";<br>Pruchase Date: ".$data['$date'].
				";<br>Pruchase Time: ".$data['$time'].
				"</p>
				<br>
				<p>Buyer Details:<br>
				Buyer Name: ".$data['$b_name'].
				";<br>Buyer Address: ".$data['$b_address'].
				";<br>".$data['$b_add'].
				";<br>".$data['$b_town'].
				";<br>".$data['$b_state'].
				";<br>".$data['$b_post'].
				"<br><br> Regards,<br> Heritage" ;

				$headers3  = 'MIME-Version: 1.0' . "\r\n";
				$headers3 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers3 .= 'From: '.$from3."\r\n".
					'Reply-To: '.$from3."\r\n" .
					'X-Mailer: PHP/' . phpversion();

				@mail($to3, $subject3, $message3, $headers3);



				///////////////////////////Buyer Email Sent///////////////////

				$from4 = "arijit.dutta48@gmail.com";
				$to4 = $data['$b_email'];
				
				
				$subject4 = 'Purchase Product Details'; 
				$message4 ="<p>Hi, <br>" .$data['$b_name']."
				<br> Massege: Product Details:
				<br> Buy Code : ".md5($saleInsertId).
				";<br>Package Name : ".$prodDetails[0]['pName'].
				";<br>Package Qty: ".$data['$quantity'].
				";<br>Total Price: ".$data['$gtotal'].
				";<br>Pruchase Date: ".$data['$date'].
				";<br>Pruchase Time: ".$data['$time'].
				"</p>
				<br><br> Regards,<br> Heritage";

				$headers4  = 'MIME-Version: 1.0' . "\r\n";
				$headers4 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers4 .= 'From: '.$from4."\r\n".
					'Reply-To: '.$from4."\r\n" .
					'X-Mailer: PHP/' . phpversion();

				@mail($to4, $subject4, $message4, $headers4);

			//////////////////Status Insert/////////////////////
				
				$statusData = array(

						'saleID'		=> $saleInsertId, 
						'statusNotes'	=> 'Order Placed on Website', 
						'dateAdded'		=> $data['$date'], 
						'timeAdded'		=> $data['$time'], 
						'orderStatus'	=> 'shipping', 
						'adminUser'		=> 'system', 	
						'visacc'		=> 'no', 
						'account'		=> $data['$account']
				);
				$this->Cart_model->statusInsert($statusData);

			//////////////////Purchase Insert/////////////////////

				$purchaseData = array(

					'purchaseDate'      => $data['$date'], 
					'purchaseTime'      => $data['$time'], 
					'saleID'            => $saleInsertId, 
					'productType'       => 'virtual', 
					'productID'			=> $data['$prodId'], 
					'giftID'			=> 0, 
					'categoryID'		=> $data['$catId'], 
					'salePrice'			=> $data['$total'], 
					'liveDownload'		=> 'no', 
					'persPrice'			=> 0, 
					'attrPrice'			=> 0, 
					'insPrice'			=> 0, 
					'globalDiscount'	=> 0, 
					'globalCost'		=> 0, 
					'productQty'		=> $data['$quantity'], 
					'productWeight'		=> 0, 
					'downloadAmount'	=> 0, 
					'downloadCode'		=> '', 
					'buyCode'			=> md5($saleInsertId), 
					'saleConfirmation'	=> 'yes', 
					'deletedProductName'=> '', 
					'freeShipping'		=> 'no', 
					'wishpur'			=> 0, 
					'platform'			=> 'desktop'
				);
				
				$this->Cart_model->purchaseInsert($purchaseData);


			//////////////////Address Book Insert/////////////////////

					$regAddressData = array(

						'account'			=> 0, 
						'nm'				=> $data['$b_name'], 
						'em'				=> $data['$b_email'], 
						'addr1'				=> $data['$b_ccode'], 
						'addr2'				=> $data['$b_address'], 
						'addr3'				=> $data['$b_add'], 
						'addr4'				=> $data['$b_town'], 
						'addr5'				=> $data['$b_state'], 
						'addr6'				=> $data['$b_post'], 
						'addr7'				=> '', 
						'addr8'				=> '', 
						'zone'				=> 0
					);

					$this->Cart_model->addressBookInsert($regAddressData);

				
			//////////////////Discount Insert/////////////////////

				$discountData = array(

					'cCampaign'		=> '', 
					'cDiscountCode' => $data['$discode'], 
					'cUseDate'		=> $data['$date'], 
					'saleID'		=> $saleInsertId, 
					'discountValue' => $data['$discount']
				);
				if(!empty($data['$discount']) && !empty($data['$discode']))
				{

					$this->Cart_model->discountInsert($discountData);
					
				}

			///////////////////////Update Product Qty/////////////////////

				$whereQty = ['id' => $data['$prodId']];
				$updateQty = $data['$stock'] - $data['$quantity'];
				$prodUpdate = array('pStock' => $updateQty);
				$this->Cart_model->prodUpdate($prodUpdate, $whereQty);
				


				$this->cart->destroy();
			}

	}



	public function loginInsert()
	{
		if(!empty($this->input->post('discount')))
		{
			$data = array(
					'$id'        => $this->input->post('id'),
					'$b_name'    => $this->input->post('b_name'),
			        '$b_email'   => $this->input->post('b_email'),
			        '$b_ccode'   => $this->input->post('b_ccode'),
			        '$b_address' => $this->input->post('b_address'),
			        '$b_add'     => $this->input->post('b_add'),
			        '$b_town'    => $this->input->post('b_town'),
			        '$b_state'   => $this->input->post('b_state'),
			        '$b_post'    => $this->input->post('b_post'),
			        '$s_name'    => '',
			        '$s_email'   => '',
			        '$s_ccode'   => '',
			        '$s_address' => '',
			        '$s_add'     => '',
			        '$s_town'    => '',
			        '$s_state'   => '',
			        '$s_post'    => '',
			        '$phone'     => '',
			        '$shipcostid'=> '',
			        '$shiprate'  => '',
			        '$account'   => $this->session->userdata('id'),
			        '$note'      => $this->input->post('note'),
			        '$prodId'    => $this->input->post('prodId'),
			        '$catId'     => $this->input->post('catId'),
			        '$quantity'  => $this->input->post('quantity'),
			        '$stock'     => $this->input->post('stock'),
			        '$total'     => $this->input->post('total'),
			        '$insur'     => 0,
			        '$gtotal'    => $this->input->post('total'),
			        '$date'      => date("Y-m-d"),
			        '$time'      => date("h:i:s"),
			        '$method'    => $this->input->post('method'),
			        '$price'     => $this->input->post('price'),
			        '$discount'	 => $this->input->post('discount'),
			        '$discode'	 => $this->input->post('discode')
			    );
		}
		else
		{
			$data = array(
				'$id'        => $this->input->post('id'),
				'$b_name'    => $this->input->post('b_name'),
		        '$b_email'   => $this->input->post('b_email'),
		        '$b_ccode'   => $this->input->post('b_ccode'),
		        '$b_address' => $this->input->post('b_address'),
		        '$b_add'     => $this->input->post('b_add'),
		        '$b_town'    => $this->input->post('b_town'),
		        '$b_state'   => $this->input->post('b_state'),
		        '$b_post'    => $this->input->post('b_post'),
		        '$s_name'    => '',
		        '$s_email'   => '',
		        '$s_ccode'   => '',
		        '$s_address' => '',
		        '$s_add'     => '',
		        '$s_town'    => '',
		        '$s_state'   => '',
		        '$s_post'    => '',
		        '$phone'     => '',
		        '$shipcostid'=> '',
		        '$shiprate'  => '',
		        '$account'   => $this->session->userdata('id'),
		        '$note'      => $this->input->post('note'),
		        '$prodId'    => $this->input->post('prodId'),
		        '$catId'     => $this->input->post('catId'),
		        '$quantity'  => $this->input->post('quantity'),
		        '$stock'     => $this->input->post('stock'),
		        '$total'     => $this->input->post('total'),
		        '$insur'     => 0,
		        '$gtotal'    => $this->input->post('total'),
		        '$date'      => date("Y-m-d"),
		        '$time'      => date("h:i:s"),
		        '$method'    => $this->input->post('method'),
		        '$price'     => $this->input->post('price'),
		        '$discount'	 => 0,
		        '$discode'	 => ''
		    );
		}
		   

		
		$sales     = $this->Cart_model->fetch();

		$invoiceId = $sales[0]['id'] + 1;

		//////////////////Sale Insert/////////////////////		    
				    				
			$saleData = array(
					 'invoiceNo'          => $invoiceId,
					 'account'	          => $data['$id'], 
					 'saleNotes'          => $data['$note'], 
					 'bill_1'	          => $data['$b_name'], 
					 'bill_2'	          => $data['$b_email'], 
					 'bill_3'             => $data['$b_address'], 
					 'bill_4'             => $data['$b_add'], 
					 'bill_5'             => $data['$b_town'], 
					 'bill_6'             => $data['$b_state'], 
					 'bill_7'             => $data['$b_post'], 
					 'bill_8'             => '', 
					 'bill_9'             => $data['$b_ccode'], 
					 'ship_1'             => $data['$s_name'], 
					 'ship_2'             => $data['$s_email'], 
					 'ship_3'             => $data['$s_address'], 
					 'ship_4'             => $data['$s_add'],   
					 'ship_5'             => $data['$s_town'], 
					 'ship_6'             => $data['$s_state'], 
					 'ship_7'             => $data['$s_post'], 
					 'ship_8'             => $data['$phone'], 
					 'buyerAddress'       => '', 
					 'paymentStatus'      => 'shipping', 
					 'gatewayID'          => '', 
					 'taxPaid'            => round(0.00,2), 
					 'taxRate'            => 0, 
					 'couponCode'         => $data['$discode'], 
					 'couponTotal'        => $data['$discount'],  
					 'codeType'           => '', 
					 'subTotal'           => $data['$total'], 
					 'grandTotal'         => $data['$gtotal'], 
					 'shipTotal'          => $data['$shiprate'], 
					 'globalTotal'        => round(0.00,2), 
					 'insuranceTotal'     => $data['$insur'], 
					 'chargeTotal'        => round(0.00,2), 
					 'globalDiscount'     => 0, 
					 'manualDiscount'     => round(0.00,2), 
					 'isPickup'           => 'no', 
					 'shipSetCountry'     => $data['$s_ccode'], 
					 'shipSetArea'        => $data['$shipcostid'], 
					 'setShipRateID'      => 0, 
					 'shipType'           => 'weight', 
					 'cartWeight'         => 0, 
					 'purchaseDate'       => $data['$date'], 
					 'purchaseTime'       => $data['$time'], 
					 'buyCode'            => md5($invoiceId), 
					 'saleConfirmation'   => 'yes', 
					 'paymentMethod'      => $data['$method'], 
					 'ipAddress'          => $this->input->ip_address(), 
					 'restrictCount'      => 0, 
					 'zipLimit'           => 0, 
					 'downloadLock'       => 'no', 
					 'optInNewsletter'    => 'yes', 
					 'paypalErrorTrigger' => 0, 
					 'trackcode'          => '', 
					 'type'               => 'personal', 
					 'wishlist'           => 0, 
					 'platform'           => 'desktop' 
			);
			$saleInsertId = $this->Cart_model->saleInsert($saleData);
		
		//////////////////Status Insert/////////////////////

			$statusData = array(

					'saleID'		=> $saleInsertId, 
					'statusNotes'	=> 'Order Placed on Website', 
					'dateAdded'		=> $data['$date'], 
					'timeAdded'		=> $data['$time'], 
					'orderStatus'	=> 'shipping', 
					'adminUser'		=> 'system', 	
					'visacc'		=> 'no', 
					'account'		=> $data['$id']
			);
			$this->Cart_model->statusInsert($statusData);

		//////////////////Purchase Insert/////////////////////

			$purchaseData = array(

				'purchaseDate'      => $data['$date'], 
				'purchaseTime'      => $data['$time'], 
				'saleID'            => $saleInsertId, 
				'productType'       => 'virtual', 
				'productID'			=> $data['$prodId'], 
				'giftID'			=> 0, 
				'categoryID'		=> $data['$catId'], 
				'salePrice'			=> $data['$total'], 
				'liveDownload'		=> 'no', 
				'persPrice'			=> 0, 
				'attrPrice'			=> 0, 
				'insPrice'			=> 0, 
				'globalDiscount'	=> 0, 
				'globalCost'		=> 0, 
				'productQty'		=> $data['$quantity'], 
				'productWeight'		=> 0, 
				'downloadAmount'	=> 0, 
				'downloadCode'		=> '', 
				'buyCode'			=> md5($saleInsertId), 
				'saleConfirmation'	=> 'yes', 
				'deletedProductName'=> '', 
				'freeShipping'		=> 'no', 
				'wishpur'			=> 0, 
				'platform'			=> 'desktop'
			);
			$this->Cart_model->purchaseInsert($purchaseData);

		//////////////////Address Book Update/////////////////////

			$regAddressData = array(

				'account'			=> $data['$id'], 
				'nm'				=> $data['$b_name'], 
				'em'				=> $data['$b_email'], 
				'addr1'				=> $data['$b_ccode'], 
				'addr2'				=> $data['$b_address'], 
				'addr3'				=> $data['$b_add'], 
				'addr4'				=> $data['$b_town'], 
				'addr5'				=> $data['$b_state'], 
				'addr6'				=> $data['$b_post'], 
				'addr7'				=> '', 
				'addr8'				=> '', 
				'zone'				=> 0
			);

			$b_where = ['account' => $data['$id'], 'type'	=> 'bill'];

			$this->Cart_model->addressBookUpdate($regAddressData, $b_where);

			//////////////////Discount Insert/////////////////////

			$discountData = array(

					'cCampaign'		=> '', 
					'cDiscountCode' => $data['$discode'], 
					'cUseDate'		=> $data['$date'], 
					'saleID'		=> $saleInsertId, 
					'discountValue' => $data['$discount']
				);
				if(!empty($data['$discount']) && !empty($data['$discode']))
				{

					$this->Cart_model->discountInsert($discountData);
					
				}


			///////////////////////Update Product Qty/////////////////////

				$whereQty = ['id' => $data['$prodId']];
				$updateQty = $data['$stock'] - $data['$quantity'];
				$prodUpdate = array('pStock' => $updateQty);
				$this->Cart_model->prodUpdate($prodUpdate, $whereQty);
				$prodWhere = ['id' => $data['$prodId']];
				$prodDetails = $this->Cart_model->prevQty($prodWhere);


			///////////////////////////Admin Email Sent///////////////////

				$from= 'no-reply@gamil.com';
				//$to ="testdevloper007@gmail.com";
				$to ="arijit.dutta48@gmail.com";
				
				
				$subject = 'Purchase Product Details'; 
				$message="<p>Hi Admin, <br>
				<br> Massege: Product Details:
				<br> Buy Code : ".md5($saleInsertId).
				";<br>Package Name : ".$prodDetails[0]['pName'].
				";<br>Package Qty: ".$data['$quantity'].
				";<br>Total Price: ".$data['$gtotal'].
				";<br>Pruchase Date: ".$data['$date'].
				";<br>Pruchase Time: ".$data['$time'].
				"</p>
				<br>
				<p>Buyer Details:<br>
				Buyer Name: ".$data['$b_name'].
				";<br>Buyer Address: ".$data['$b_address'].
				";<br>".$data['$b_add'].
				";<br>".$data['$b_town'].
				";<br>".$data['$b_state'].
				";<br>".$data['$b_post'].
				"<br><br> Regards,<br> Heritage" ;

				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: '.$from."\r\n".
					'Reply-To: '.$from."\r\n" .
					'X-Mailer: PHP/' . phpversion();

				@mail($to, $subject, $message, $headers);



				///////////////////////////Buyer Email Sent///////////////////

				$from= "arijit.dutta48@gmail.com";
				//$to ="testdevloper007@gmail.com";
				$to = $data['$b_email'];
				
				
				$subject = 'Purchase Product Details'; 
				$message="<p>Hi, <br>" .$data['$b_name']."
				<br> Massege: Product Details:
				<br> Buy Code : ".md5($saleInsertId).
				";<br>Package Name : ".$prodDetails[0]['pName'].
				";<br>Package Qty: ".$data['$quantity'].
				";<br>Total Price: ".$data['$gtotal'].
				";<br>Pruchase Date: ".$data['$date'].
				";<br>Pruchase Time: ".$data['$time'].
				"<br> Email: ".$to."</p>
				<br><br> Regards,<br> Heritage";

				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: '.$from."\r\n".
					'Reply-To: '.$from."\r\n" .
					'X-Mailer: PHP/' . phpversion();

				@mail($to, $subject, $message, $headers);


				$this->cart->destroy();
			
				
			

	}

	

	

	
}
