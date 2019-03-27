<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('common_helper');
		$this->load->model('Packages_model');
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
	}

	public function index()
	{

		$content_data = array();
		$sales = $this->Packages_model->saleRecord();
		$content_data['sales'] = $sales;
		$curr = $this->Packages_model->currFetch();
		$content_data['curr'] = $curr;
		$data['content'] = $this->load->view('admin/order/list', $content_data, TRUE);
		$this->load->view('admin/layout', $data);
		
		
	}



	public function details($product_id='') 
	{
		$product_id = base64_decode($product_id);
		$content_data = array();
		$content_data['type'] = $this->Packages_model->orderFetch3(array('saleID'=>$product_id));
		$content_data['package'] = $this->Packages_model->orderFetch1(array('saleID'=>$product_id));
		$content_data['activity'] = $this->Packages_model->orderFetch2(array('saleID'=>$product_id));
		$curr = $this->Packages_model->currFetch();
		$content_data['curr'] = $curr;
		$data['content'] = $this->load->view('admin/order/details', $content_data, TRUE);
		$this->load->view('admin/layout', $data);
	}



	public function update_status()
	{
		
		if($this->input->post('selectId')==1)
		{
			$insert_array=array('payment_status'=>0, 'transaction_id'=>0);
		}
		elseif($this->input->post('selectId')==2)
		{
            $insert_array=array('payment_status'=>1, 'transaction_id'=>'CASH_'.date('Ymdhis'));


		}
		else
		{
			$insert_array=array('payment_status'=>1, 'transaction_id'=>'CARD_'.date('Ymdhis'));
		}
		
		$id=$this->input->post('id');
		$this->Packages_model->trnasUpdate($insert_array,array('sale_id'=> $id));

		$data = $this->Packages_model->trnasFetch(array('sale_id'=> $id));

		

		 ///////////////////////////Admin Email Sent///////////////////

				$from= 'no-reply@gamil.com';
				//$to ="testdevloper007@gmail.com";
				$to ="arijit.dutta48@gmail.com";
				
				
				$subject = 'Purchase Package And Activity Details';
				$message = "";
				$message .="<img src='".base_url('assets/images/logo.png')."' alt='' height='42' width='42' align='left'><br><br> 
				<p>Hi Admin,<br><h2>".$data[0]['bill_1']." Your Payment Proceed Successfully And You Paid By ";

				if ($this->input->post('selectId')==2) 
				{
					$message .="Cash";
				}
				else if($this->input->post('selectId')==3)
				{
					$message .="Card</h2>";
				}

				$message .= "<h3>".$data[0]['bill_1']." Booking ID is: ".$data[0]['booking_id']."</h3><h3>".$data[0]['bill_1']." Transaction ID is: ".$data[0]['transaction_id'] ;
				$purwhere = ['saleID' => $id];
            	$Pdetails = $this->Packages_model->orderFetch1($purwhere);
            	$count = count($Pdetails);
            	if($count>0)
		        {
					$message .=
					"<br><h3>Package Details:</h3><br> 
						<table style='border: 1px solid black; border-collapse: collapse;'>
						  <thead>
	                        <tr>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Package Name</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Package Category</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Package Price</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Package Quantity</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Total</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Package Booking Date</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Package Notes</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Package Buy Code</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Package Date</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Package Time</th>

	                            
	                        </tr>
                    	  </thead>
                    	<tbody>";
                	foreach ($Pdetails as $value) 
			        {
			          $total = $value['productQty']*$value['pPrice'];
                		$message .=
                			"<tr>
	                    		<td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['pName']."</td>
		                        <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['catname']."</td>
		                        <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>$".$value['pPrice']."</td>
		                        <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['productQty']."</td>
		                        <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$total."</td>
		                        <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['booking_date']."</td>";
		                    
		                        if($data[0]['saleNotes'] != '')
		                        {
		         					$message .="<td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$data[0]['saleNotes']."</td>";
		                    	}
		                    	else
		                    	{
		                    	  $message .="<td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>N/A</td>";
		                    	}
		        $message .= 
								"<td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".md5($id)."</td>
		                        <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['purchaseDate']."</td>
		                        <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['purchaseTime']."</td>
		                        
                        
                    		</tr>";
                    		}
                $message .= 	
                		"<tbody>
                    </table><br><br>";
                }
                $Adetails = $this->Packages_model->orderFetch2($purwhere);
	            $count1 = count($Adetails);
		        if($count1>0)
		        {
                $message .=
                "<h3>Activity Details:</h3><br>

                    <table style='border: 1px solid black; border-collapse: collapse;'>
	                   <thead>
	                   <tr>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Activity Name</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Activity Category</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Activity Price</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Activity Quantity</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Total</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Activity Booking Date</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Activity Notes</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Activity Buy Code</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Activity Date</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Activity Time</th>
	                            
	                        </tr>
	                    </thead>
	                    <tbody>";
	            foreach ($Adetails as $value) 
		        {
                   $total1 = $value['productQty']*$value['activity_price'];
	           $message .=
	                        "<tr>
                          
	                            <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['activity_name']."</td>
	                            <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['theme_name']."</td>
	                            <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>$".$value['activity_price']."</td>
	                            <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['productQty']."</td>
	                            <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$total1."</td>
	                            <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['booking_date']."</td>";
		                    
		                        if($data[0]['saleNotes'] != '')
		                        {
		         					$message .="<td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$data[0]['saleNotes']."</td>";
		                    	}
		                    	else
		                    	{
		                    	  $message .="<td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>N/A</td>";
		                    	}
		       $message .= 
								"<td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".md5($id)."</td>
	                            <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['purchaseDate']."</td>
		                        <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['purchaseTime']."</td>
	                            
                            
                        	</tr>";
                        }                      
                $message .=
               			 "</tbody>
                    </table>";
                }
                    if($data[0]['discounted_amount'] != 0.00)
                    {
						$message .=
						"<br><h3>Discount Price: $".$data[0]['discounted_amount']."</h3>";
					}
				$message .= "<h3>Total Purchase Price: $".$data[0]['transaction_amount']."</h3>
				<h3>Buyer Details:</h3><br>
				<table style='border: 1px solid black; border-collapse: collapse;'>
						<thead>
	                        <tr>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Buyer Name:</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Buyer Address:</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Buyer Email</th>
	                        </tr>
                    	</thead>
                    	<tbody>
                    		<tr>
	                    		<td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$data[0]['bill_1']."</td>
		                        <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$data[0]['bill_3'].',&nbsp;'.$data[0]['bill_4'].',&nbsp;'.$data[0]['bill_5'].',&nbsp;'.$data[0]['bill_6'].',&nbsp;'.$data[0]['bill_7']."</td>
		                        <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$data[0]['bill_2']."</td>
                        
                    		</tr>
                    	<tbody>
                    </table><br><br>
				
				Regards,<br><h5>Heritage</h5>";

				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: '.$from."\r\n".
					'Reply-To: '.$from."\r\n" .
					'X-Mailer: PHP/' . phpversion();

				@mail($to, $subject, $message, $headers);


	///////////////////////////Buyer Email Sent///////////////////

				$from= "arijit.dutta48@gmail.com";
				//$to ="testdevloper007@gmail.com";
				$to = $data[0]['bill_2'];
				
				
				$subject = 'Purchase Package And Activity Details'; 
				$message = "";
				
				$message .="<img src='".base_url('assets/images/logo.png')."' alt='' height='42' width='42' align='left'><br><br> 
				<p>Hi Admin,<br>
				<h2>".$data[0]['bill_1']." Your Payment Proceed Successfully And You Paid By ";
				if ($this->input->post('selectId')==2) 
				{
					$message .="Cash";
				}
				elseif($this->input->post('selectId')==3)
				{
					$message .="Card";
				}
			$message .= "</h2><h3>".$data[0]['bill_1']." Booking ID is: ".$data[0]['booking_id']."</h3><h3>".$data[0]['bill_1']." Transaction ID is: ".$data[0]['transaction_id'] ;
				// $purwhere = ['saleID' => $id];
            	$Pdetails = $this->Packages_model->orderFetch1($purwhere);
            	$count = count($Pdetails);
            	if($count>0)
		        {
				$message .=
				"<br><h3>Package Details:</h3><br> 
					<table style='border: 1px solid black; border-collapse: collapse;'>
						<thead>
	                        <tr>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Package Name</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Package Category</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Package Price</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Package Quantity</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Total</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Package Booking Date</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Package Notes</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Package Buy Code</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Package Date</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Package Time</th>

	                            
	                        </tr>
                    	</thead>
                    	<tbody>";
                	foreach ($Pdetails as $value) 
			        {
			          $total = $value['productQty']*$value['pPrice'];
                $message .=
                			"<tr>
	                    		<td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['pName']."</td>
		                        <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['catname']."</td>
		                        <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>$".$value['pPrice']."</td>
		                        <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['productQty']."</td>
		                        <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$total."</td>
		                        <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['booking_date']."</td>";
		                    
		                        if($data[0]['saleNotes'] != '')
		                        {
		         					$message .="<td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$data[0]['saleNotes']."</td>";
		                    	}
		                    	else
		                    	{
		                    	  $message .="<td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>N/A</td>";
		                    	}
		        $message .= 
								"<td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".md5($id)."</td>
		                        <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['purchaseDate']."</td>
		                        <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['purchaseTime']."</td>
		                        
                        
                    		</tr>";
                    		}
                $message .= 	
                		"<tbody>
                    </table><br><br>";
                }
                $Adetails = $this->Packages_model->orderFetch2($purwhere);
	            $count1 = count($Adetails);
		        if($count1>0)
		        {
                $message .=
                "<h3>Activity Details:</h3><br>

                    <table style='border: 1px solid black; border-collapse: collapse;'>
	                   <thead>
	                   <tr>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Activity Name</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Activity Category</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Activity Price</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Activity Quantity</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Total</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Activity Booking Date</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Activity Notes</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Activity Buy Code</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Activity Date</th>
	                            <th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Activity Time</th>
	                            
	                        </tr>
	                    </thead>
	                    <tbody>";
	            foreach ($Adetails as $value) 
		        {
                   $total1 = $value['productQty']*$value['activity_price'];
	           $message .=
	                        "<tr>
                          
	                            <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['activity_name']."</td>
	                            <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['theme_name']."</td>
	                            <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>$".$value['activity_price']."</td>
	                            <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['productQty']."</td>
	                            <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$total1."</td>
	                            <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['booking_date']."</td>";
		                    
		                        if($data[0]['saleNotes'] != '')
		                        {
		         					$message .="<td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$data[0]['saleNotes']."</td>";
		                    	}
		                    	else
		                    	{
		                    	  $message .="<td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>N/A</td>";
		                    	}
		       $message .= 
								"<td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".md5($id)."</td>
	                            <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['purchaseDate']."</td>
		                        <td align='center' style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$value['purchaseTime']."</td>
	                            
                            
                        	</tr>";
                        }                      
                $message .=
               			 "</tbody>
                    </table>";
                }
                    if($data[0]['discounted_amount'] != 0.00)
                    {
						$message .=
						"<br><h3>Discount Price: $".$data[0]['discounted_amount']."</h3>";
					}
				$message .= "<h3>Total Purchase Price: $".$data[0]['transaction_amount']."</h3>				
				Regards,<br><h5>Heritage</h5>";

				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: '.$from."\r\n".
					'Reply-To: '.$from."\r\n" .
					'X-Mailer: PHP/' . phpversion();

				@mail($to, $subject, $message, $headers);

		
                  	
			
				
				
		
	}


	
	
	


	
}
