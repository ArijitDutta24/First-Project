<?php
 class Utility{
 	protected $CI;
	private $font = 'font/monofont.ttf';
 	public function __construct($rules = array())
	{
		$this->CI =& get_instance();
		if(!$this->CI->session->userdata('user_session'))
		      $this->setSecurity(uniqid());
		
	}
	public function setSecurity($security_code)
	{
	        $this->CI->session->set_userdata('user_session',$security_code);
	}
	public function getSecurity()
	{
		if($this->CI->session->userdata('user_session')=='')
		      $this->setSecurity(uniqid()); 
		return $this->CI->session->userdata('user_session');
	}
	function showMsg()
	{
	     if($this->CI->session->userdata('msg'))
	     {    
                $caption="Alert!!";
                $icon="fa-ban";
                if($this->CI->session->userdata('class')=="alert-success")
                {
                    $caption="Success!!";
                    $icon="fa-check";
                }
                echo '
                    <div class="alert '.$this->CI->session->userdata('class').' alert-dismissable">
                       <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                           <h4><i class="icon fa '.$icon.'"></i> '.$caption.'</h4>
                           '.$this->CI->session->userdata('msg').'
                   </div>';

                $this->CI->session->unset_userdata('msg');
                $this->CI->session->unset_userdata('class');
	     }
	}
	function setMsg($str,$type)
	{
		$this->CI->session->set_userdata('class','alert-success');
		$this->CI->session->set_userdata('msg',$str);
		if($type=='ERROR'){
			$this->CI->session->set_userdata('class','alert-danger');
			$this->CI->session->set_userdata('msg',$str);
		}
		
	}
	function checkLog()
	{
		  if(!$this->CI->session->userdata('user_id')){
		    $url=base_url()."profile/login/";
			redirect($url);
		    }
		    else{
		    return true;
		    }
	 }
	function sendMail($to,$sub,$body,$from='',$template=TRUE)
	{
    	  $from='no-reply@'.strtolower(EMAIL_CAPTION);
    	  $this->CI->load->library('email');
    	  $this->CI->email->set_mailtype("html");
    	  $this->CI->email->from($from, TITLE);
    	  $this->CI->email->to($to); 
    	  $this->CI->email->subject($sub);
		  if($template){
    	  $cont='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    	  <html xmlns="http://www.w3.org/1999/xhtml">
    	  <head>
    	   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	    <title>Untitled Document</title>
    	  </head>
    	
    	  <body>
    		<div style="width:600px; float:left; background:#F3F3F3; border:0px solid #388E1A;">
    		 <div style="text-align:left;padding:10px;background:#fff;"><a href="'.base_url().'"><img alt="'.COMPANY_NAME.'" src="'.base_url().'images/upload/'.SITE_LOGO.'"></a></div>
    		 <div style="font-family:Arial, Helvetica, sans-serif; font-weight:bold; font-size:15px; color:#333; padding:20px; margin: 0; border-top:0px solid #0BB1E0;">
    		   <div>'.$body.'</div>
    	       <p style="color:#388E1A;">Don\'t Reply this Mail. This is Automatic Generated Mail from <br>'.EMAIL_CAPTION.'</p>
    	     </div>
    	    </div>
    	  </body>
    	 </html>';
		 }
		 else{
		 $cont=$body;
		 }
		 //echo $cont;
    	 $this->CI->email->message($cont);
    	 return $this->CI->email->send();
	}
	function pagination($target,$total_rows,$per_page,$uri=3,$search=null)
    {
	   $this->CI->load->library('pagination');
	   $config['base_url'] = $target;
	   $config['total_rows'] = $total_rows;
	   $config['per_page'] = $per_page; 
	   $config['full_tag_open'] = '<div class="pagination">';
	   $config['full_tag_close'] = '</div>';
	   $config['uri_segment'] = $uri;
	   $this->CI->pagination->initialize($config); 
	   return $this->CI->pagination->create_links($search);
	}
    function delTree($dir)
    {
        $files = array_diff(scandir($dir), array('.','..')); 
        foreach ($files as $file) { 
            (is_dir("$dir/$file")) ? $this->delTree("$dir/$file") : unlink("$dir/$file"); 
        }
        return rmdir($dir); 
    }
    function passwordGenaretor( $length = 8, $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.?*}{[]' ) 
    {
        return substr( str_shuffle( $chars ), 0, $length );
    }
function pic_resize($source_path,$thumb_path,$width,$height)
{
	$this->CI->load->library('image_lib');
    $config['image_library'] = 'gd2';
    $config['source_image']  = $source_path;
    $config['new_image']  =  $thumb_path;
	$config['overwrite'] = TRUE;
	if($width>0)
	$config['width']	 = $width;
		if($height>0)
    $config['height'] = $height;  
	$config['maintain_ratio'] = TRUE;
    $this->CI->image_lib->initialize($config);      
    $this->CI->image_lib->resize();
}
function images_upload($source_path='picture/',$width=0,$height=0)
{
      if(isset($_FILES['picture']) and $_FILES['picture']['size']!='')
	 {
        $config['upload_path'] = $source_path;
        $config['allowed_types'] = 'jpg|jpeg|gif|png|PNG';
	    $config['file_name']=time();
	    $this->CI->load->library('upload', $config);
            if(!$this->CI->upload->do_upload('picture'))
            {
               $img['msg'] = $this->CI->upload->display_errors();
            }
            else
            {
               $img=$this->CI->upload->data();  
	           $this->pic_resize($source_path.$img['orig_name'],$source_path.'thumb/'.$img['orig_name'],$width,$height);
            }
	      return $img;
     }
   }
 function excel($data=array(),$filename='excel'){//it's work when Excel_Xml.php is present in library folder
 $config=array('sEncoding'=>'UTF-8', 'bConvertTypes'=>false, 'sWorksheetTitle'=>'Sheet1');
	$this->CI->load->library('Excel_XML',$config);
	$this->CI->excel_xml->addArray($data);
	$this->CI->excel_xml->generateXML($filename);
 }
	function check_email($check) {
		$expression = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$/";
		if (preg_match($expression, $check)) {
			return true;
		} 
		else 
		{
			return false;
		} 
	}
	public function info_cleanQuery($str) {	
		return addslashes(htmlspecialchars($str, ENT_QUOTES));
	}

	public function checkLogin(){
		if(!$this->CI->session->userdata('user_id'))
			redirect(base_url().'login');
	}

	public function time_elapsed_string($ptime)
	{
		$etime = time() - $ptime;
		if ($etime < 1)
		{
			return '0 seconds';
		}
		$a = array( 365 * 24 * 60 * 60  =>  'year',
					 30 * 24 * 60 * 60  =>  'month',
						  24 * 60 * 60  =>  'day',
							   60 * 60  =>  'hour',
									60  =>  'minute',
									 1  =>  'second'
					);
		$a_plural = array( 'year'   => 'years',
						   'month'  => 'months',
						   'day'    => 'days',
						   'hour'   => 'hours',
						   'minute' => 'minutes',
						   'second' => 'seconds'
					);

		foreach ($a as $secs => $str)
		{
			$d = $etime / $secs;
			if ($d >= 1)
			{
				$r = round($d);
				return $r . ' ' . ($r > 1 ? $a_plural[$str] : $str) . ' ago';
			}
		}
	}
	
	public function getVimeoThumb($id) {
		$data = file_get_contents("http://vimeo.com/api/v2/video/$id.json");
		$data = json_decode($data);
		return $data[0]->thumbnail_small;
	}
	public function getYoutubeThumb($id)
	{
		return 'http://img.youtube.com/vi/'.$id.'/default.jpg';
	}
	
	public function getVimeoData($id) {
		$data = file_get_contents("http://vimeo.com/api/v2/video/$id.json");
		$data = json_decode($data);
		return $data;
	}
	public function getVimeoTitle($id) {
		$data = file_get_contents("http://vimeo.com/api/v2/video/$id.json");
		$data = json_decode($data);
		return $data;
	}
	
	public function youtube_title($id) {
	  // $id = 'YOUTUBE_ID';
	  // returns a single line of XML that contains the video title. Not a giant request.
	  $videoTitle = @file_get_contents("https://gdata.youtube.com/feeds/api/videos/{$id}?v=2&fields=title");
	  // despite @ suppress, it will be false if it fails
	  if ($videoTitle) {
		// look for that title tag and get the insides
		preg_match("/<title>(.+?)<\/title>/is", $videoTitle, $titleOfVideo);
		return $titleOfVideo[1];
	  } else {
		return false;
	  }
	  // usage:
	  // $item = youtube_title('zgNJnBKMRNw');
	}

	
	public function youtube_id_from_url($url) {
	   $pattern =
		'%^# Match any youtube URL
		(?:https?://)?  # Optional scheme. Either http or https
		(?:www\.)?      # Optional www subdomain
		(?:             # Group host alternatives
		  youtu\.be/    # Either youtu.be,
		| youtube\.com  # or youtube.com
		  (?:           # Group path alternatives
			/embed/     # Either /embed/
		  | /v/         # or /v/
		  | .*v=        # or /watch\?v=
		  )             # End path alternatives.
		)               # End host alternatives.
		([\w-]{10,12})  # Allow 10-12 for 11 char youtube id.
		($|&).*         # if additional parameters are also in query string after video id.
		$%x'
		;
		$result = preg_match($pattern, $url, $matches);
		if (false !== $result) {
		  return $matches[1];
		}
		return false;
	}
	
	public function vimeo_id_from_url($link){
 
        $regexstr = '~
            # Match Vimeo link and embed code
            (?:<iframe [^>]*src=")?       # If iframe match up to first quote of src
            (?:                         # Group vimeo url
                https?:\/\/             # Either http or https
                (?:[\w]+\.)*            # Optional subdomains
                vimeo\.com              # Match vimeo.com
                (?:[\/\w]*\/videos?)?   # Optional video sub directory this handles groups links also
                \/                      # Slash before Id
                ([0-9]+)                # $1: VIDEO_ID is numeric
                [^\s]*                  # Not a space
            )                           # End group
            "?                          # Match end quote if part of src
            (?:[^>]*></iframe>)?        # Match the end of the iframe
            (?:<p>.*</p>)?              # Match any title information stuff
            ~ix';
 
        preg_match($regexstr, $link, $matches);
 
        return $matches[1];
 
    }
	
	private function generateCode($characters) {
		/* list all possible characters, similar looking characters and vowels have been removed */
		$possible = '23456789bcdfghjkmnpqrstvwxyz';
		$code = '';
		$i = 0;
		while ($i < $characters) { 
			$code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
			$i++;
		}
		return $code;
	}
	
	public function CaptchaSecurityImages($width='120',$height='40',$characters='6') {
		$code = $this->generateCode($characters);
		/* font size will be 75% of the image height */
		$font_size = $height * 0.75;
		$image = @imagecreate($width, $height) or die('Cannot initialize new GD image stream');
		/* set the colours */
		$background_color = @imagecolorallocate($image, 33, 33, 33);
		$text_color = @imagecolorallocate($image, 253, 221, 3);
		$noise_color = @imagecolorallocate($image, 100, 120, 180);
		/* generate random dots in background */
		for( $i=0; $i<($width*$height)/3; $i++ ) {
			@imagefilledellipse($image, mt_rand(0,$width), mt_rand(0,$height), 1, 1, $noise_color);
		}
		/* generate random lines in background */
		for( $i=0; $i<($width*$height)/150; $i++ ) {
			@imageline($image, mt_rand(0,$width), mt_rand(0,$height), mt_rand(0,$width), mt_rand(0,$height), $noise_color);
		}
		/* create textbox and add text */
		$textbox = @imagettfbbox($font_size, 0, $this->font, $code) or die('Error in imagettfbbox function');
		$x = ($width - $textbox[4])/2;
		$y = ($height - $textbox[5])/2;
		@imagettftext($image, $font_size, 0, $x, $y, $text_color, $this->font , $code) or die('Error in imagettftext function');
		/* output captcha image to browser */
		header('Content-Type: image/jpeg');
		@imagejpeg($image);
		@imagedestroy($image);
		//$_SESSION['security_code']=$code;
		$this->CI->session->set_userdata('security_code',$code);
	}
	
	public function convertImage($originalImage, $outputImage, $quality)
	{
		// jpg, png, gif or bmp?
		$exploded = explode('.',$originalImage);
		$ext = $exploded[count($exploded) - 1]; 

		if (preg_match('/jpg|jpeg/i',$ext))
			$imageTmp=imagecreatefromjpeg($originalImage);
		else if (preg_match('/png/i',$ext))
			$imageTmp=imagecreatefrompng($originalImage);
		else if (preg_match('/gif/i',$ext))
			$imageTmp=imagecreatefromgif($originalImage);
		else if (preg_match('/bmp/i',$ext))
			$imageTmp=imagecreatefrombmp($originalImage);
		else
			return 0;
		// quality is a value from 0 (worst) to 100 (best)
		imagejpeg($imageTmp, $outputImage, $quality);
		imagedestroy($imageTmp);
		return 1;
	}
	public function xmlToArray($xml, $options = array()) {
		$defaults = array(
			'namespaceSeparator' => ':',//you may want this to be something other than a colon
			'attributePrefix' => '@',   //to distinguish between attributes and nodes with the same name
			'alwaysArray' => array(),   //array of xml tag names which should always become arrays
			'autoArray' => true,        //only create arrays for tags which appear more than once
			'textContent' => '$',       //key used for the text content of elements
			'autoText' => true,         //skip textContent key if node has no attributes or child nodes
			'keySearch' => false,       //optional search and replace on tag and attribute names
			'keyReplace' => false       //replace values for above search values (as passed to str_replace())
		);
		$options = array_merge($defaults, $options);
		$namespaces = $xml->getDocNamespaces();
		$namespaces[''] = null; //add base (empty) namespace
	 
		//get attributes from all namespaces
		$attributesArray = array();
		foreach ($namespaces as $prefix => $namespace) {
			foreach ($xml->attributes($namespace) as $attributeName => $attribute) {
				//replace characters in attribute name
				if ($options['keySearch']) $attributeName =
						str_replace($options['keySearch'], $options['keyReplace'], $attributeName);
				$attributeKey = $options['attributePrefix']
						. ($prefix ? $prefix . $options['namespaceSeparator'] : '')
						. $attributeName;
				$attributesArray[$attributeKey] = (string)$attribute;
			}
		}
	 
		//get child nodes from all namespaces
		$tagsArray = array();
		foreach ($namespaces as $prefix => $namespace) {
			foreach ($xml->children($namespace) as $childXml) {
				//recurse into child nodes
				$childArray = $this->xmlToArray($childXml, $options);
				list($childTagName, $childProperties) = each($childArray);
	 
				//replace characters in tag name
				if ($options['keySearch']) $childTagName =
						str_replace($options['keySearch'], $options['keyReplace'], $childTagName);
				//add namespace prefix, if any
				if ($prefix) $childTagName = $prefix . $options['namespaceSeparator'] . $childTagName;
	 
				if (!isset($tagsArray[$childTagName])) {
					//only entry with this key
					//test if tags of this type should always be arrays, no matter the element count
					$tagsArray[$childTagName] =
							in_array($childTagName, $options['alwaysArray']) || !$options['autoArray']
							? array($childProperties) : $childProperties;
				} elseif (
					is_array($tagsArray[$childTagName]) && array_keys($tagsArray[$childTagName])
					=== range(0, count($tagsArray[$childTagName]) - 1)
				) {
					//key already exists and is integer indexed array
					$tagsArray[$childTagName][] = $childProperties;
				} else {
					//key exists so convert to integer indexed array with previous value in position 0
					$tagsArray[$childTagName] = array($tagsArray[$childTagName], $childProperties);
				}
			}
		}
	 
		//get text content of node
		$textContentArray = array();
		$plainText = trim((string)$xml);
		if ($plainText !== '') $textContentArray[$options['textContent']] = $plainText;
	 
		//stick it all together
		$propertiesArray = !$options['autoText'] || $attributesArray || $tagsArray || ($plainText === '')
				? array_merge($attributesArray, $tagsArray, $textContentArray) : $plainText;
	 
		//return node as array
		return array(
			$xml->getName() => $propertiesArray
		);
	}
	public function curlRequest($opta)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$opta);
		curl_setopt($ch, CURLOPT_FAILONERROR,1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 15);
		// Set query data here with CURLOPT_POSTFIELDS
		//curl_setopt($ch, CURLOPT_POSTFIELDS, $qry_str);
		
		$content = curl_exec($ch);
		curl_close($ch);
		return $content;
	}
	public function slug($str=''){
		$search=array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '+', '=', '|', '~', '`', ',', '.', ';', ':', '"', '{', '}','?','/');
		$replace=array('', '', '', '', '', '', '', '', '', '', '-', '', '', '-', '', '', '', '', '', '', '', '', '','','' );
		$subject=trim($str);
		$course_slug=str_replace($search, $replace,$subject);
		$course_slug=str_replace(' ','-',$course_slug);
		$course_slug=str_replace('--','-',$course_slug);
		return strtolower($course_slug);
	}
	
	public function getOS($user_agent) { 
		$os_platform    =   "Unknown OS Platform";
		$os_array       =   array(
								'/windows nt 10/i'     =>  'Windows 10',
								'/windows nt 6.3/i'     =>  'Windows 8.1',
								'/windows nt 6.2/i'     =>  'Windows 8',
								'/windows nt 6.1/i'     =>  'Windows 7',
								'/windows nt 6.0/i'     =>  'Windows Vista',
								'/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
								'/windows nt 5.1/i'     =>  'Windows XP',
								'/windows xp/i'         =>  'Windows XP',
								'/windows nt 5.0/i'     =>  'Windows 2000',
								'/windows me/i'         =>  'Windows ME',
								'/win98/i'              =>  'Windows 98',
								'/win95/i'              =>  'Windows 95',
								'/win16/i'              =>  'Windows 3.11',
								'/macintosh|mac os x/i' =>  'Mac OS X',
								'/mac_powerpc/i'        =>  'Mac OS 9',
								'/linux/i'              =>  'Linux',
								'/ubuntu/i'             =>  'Ubuntu',
								'/iphone/i'             =>  'iPhone',
								'/ipod/i'               =>  'iPod',
								'/ipad/i'               =>  'iPad',
								'/android/i'            =>  'Android',
								'/blackberry/i'         =>  'BlackBerry',
								'/webos/i'              =>  'Mobile'
							);

		foreach ($os_array as $regex => $value) { 
			if (preg_match($regex, $user_agent)) {
				$os_platform    =   $value;
			}
		}   
		return $os_platform;
	}
	
	public function getBrowser($user_agent) {
		$browser        =   "Unknown Browser";
		$browser_array  =   array(
								'/msie/i'       =>  'Internet Explorer',
								'/firefox/i'    =>  'Firefox',
								'/safari/i'     =>  'Safari',
								'/chrome/i'     =>  'Chrome',
								'/opera/i'      =>  'Opera',
								'/netscape/i'   =>  'Netscape',
								'/maxthon/i'    =>  'Maxthon',
								'/konqueror/i'  =>  'Konqueror',
								'/mobile/i'     =>  'Handheld Browser'
							);

		foreach ($browser_array as $regex => $value) { 

			if (preg_match($regex, $user_agent)) {
				$browser    =   $value;
			}

		}
		return $browser;
	}
	public function google_ads_sizes()
        {
            $googleAdsSize=array(
                '120 x 600'=>'120 x 600 Skyscraper',
                '160 x 600'=>'160 x 600 Widecraper',
                '300 x 600'=>'300 x 600 Half-Page',
                '336 x 280'=>'336 x 280 Large Rectangle',
                '300 x 250'=>'300 x 250 Inline Rectangle',
                '250 x 250'=>'250 x 250 Square',
                '120 x 240'=>'120 x 240 Vertical Banner',
                '336 x 200'=>'336 x 200 Large Rectangle',
                '200 x 200'=>'200 x 200 Square',
                '320 x 100'=>'320 x 100 Large Mobile Banner',
                '180 x 150'=>'180 x 150 Small Rectangle',
                '125 x 125'=>'125 x 125 Button',
                '970 x 90'=>'970 x 90 Large Leaderboard',
                '728 x 90'=>'728 x 90 Leaderboard',
                '200 x 90'=>'200 x 90 Link Ads',
                '180 x 90'=>'180 x 90 Link Ads',
                '160 x 90'=>'160 x 90 Link Ads',
                '120 x 90'=>'120 x 90 Link Ads',
                '468 x 60'=>'468 x 60 Banner',
                '468 x 60'=>'468 x 60 Banner',
                '234 x 60'=>'234 x 60 Half Banner',
                '320 x 50'=>'320 x 50 Mobile Leaderboard',
                '728 x 15'=>'728 x 15 Link Ads',
                '468 x 15'=>'468 x 15 Link Ads',
            );
            return $googleAdsSize;
        }
        
        public function getCurrencySymbol($currency_code="")
        {
            $currency_symbols_set = array(
                'AED' => '&#1583;&#1573;', // ?
                'AFN' => '&#65;&#102;',
                'ALL' => '&#76;&#101;&#107;',
                'AMD' => '',
                'ANG' => '&#402;',
                'AOA' => '&#75;&#122;', // ?
                'ARS' => '&#36;',
                'AUD' => '&#36;',
                'AWG' => '&#402;',
                'AZN' => '&#1084;&#1072;&#1085;',
                'BAM' => '&#75;&#77;',
                'BBD' => '&#36;',
                'BDT' => '&#2547;', // ?
                'BGN' => '&#1083;&#1074;',
                'BHD' => '&#1583;&#1576;', // ?
                'BIF' => '&#70;&#66;&#117;', // ?
                'BMD' => '&#36;',
                'BND' => '&#36;',
                'BOB' => '&#36;&#98;',
                'BRL' => '&#82;&#36;',
                'BSD' => '&#36;',
                'BTN' => '&#78;&#117;&#46;', // ?
                'BWP' => '&#80;',
                'BYR' => '&#112;&#46;',
                'BZD' => '&#66;&#90;&#36;',
                'CAD' => '&#36;',
                'CDF' => '&#70;&#67;',
                'CHF' => '&#67;&#72;&#70;',
                'CLF' => '', // ?
                'CLP' => '&#36;',
                'CNY' => '&#165;',
                'COP' => '&#36;',
                'CRC' => '&#8353;',
                'CUP' => '&#8396;',
                'CVE' => '&#36;', // ?
                'CZK' => '&#75;&#269;',
                'DJF' => '&#70;&#100;&#106;', // ?
                'DKK' => '&#107;&#114;',
                'DOP' => '&#82;&#68;&#36;',
                'DZD' => '&#1583;&#1580;', // ?
                'EGP' => '&#163;',
                'ETB' => '&#66;&#114;',
                'EUR' => '&#8364;',
                'FJD' => '&#36;',
                'FKP' => '&#163;',
                'GBP' => '&#163;',
                'GEL' => '&#4314;', // ?
                'GHS' => '&#162;',
                'GIP' => '&#163;',
                'GMD' => '&#68;', // ?
                'GNF' => '&#70;&#71;', // ?
                'GTQ' => '&#81;',
                'GYD' => '&#36;',
                'HKD' => '&#36;',
                'HNL' => '&#76;',
                'HRK' => '&#107;&#110;',
                'HTG' => '&#71;', // ?
                'HUF' => '&#70;&#116;',
                'IDR' => '&#82;&#112;',
                'ILS' => '&#8362;',
                'INR' => '&#8377;',
                'IQD' => '&#1593;&#1583;', // ?
                'IRR' => '&#65020;',
                'ISK' => '&#107;&#114;',
                'JEP' => '&#163;',
                'JMD' => '&#74;&#36;',
                'JOD' => '&#74;&#68;', // ?
                'JPY' => '&#165;',
                'KES' => '&#75;&#83;&#104;', // ?
                'KGS' => '&#1083;&#1074;',
                'KHR' => '&#6107;',
                'KMF' => '&#67;&#70;', // ?
                'KPW' => '&#8361;',
                'KRW' => '&#8361;',
                'KWD' => '&#1583;&#1603;', // ?
                'KYD' => '&#36;',
                'KZT' => '&#1083;&#1074;',
                'LAK' => '&#8365;',
                'LBP' => '&#163;',
                'LKR' => '&#8360;',
                'LRD' => '&#36;',
                'LSL' => '&#76;', // ?
                'LTL' => '&#76;&#116;',
                'LVL' => '&#76;&#115;',
                'LYD' => '&#1604;&#1583;', // ?
                'MAD' => '&#1583;&#1605;', //?
                'MDL' => '&#76;',
                'MGA' => '&#65;&#114;', // ?
                'MKD' => '&#1076;&#1077;&#1085;',
                'MMK' => '&#75;',
                'MNT' => '&#8366;',
                'MOP' => '&#77;&#79;&#80;&#36;', // ?
                'MRO' => '&#85;&#77;', // ?
                'MUR' => '&#8360;', // ?
                'MVR' => '&#1923;', // ?
                'MWK' => '&#77;&#75;',
                'MXN' => '&#36;',
                'MYR' => '&#82;&#77;',
                'MZN' => '&#77;&#84;',
                'NAD' => '&#36;',
                'NGN' => '&#8358;',
                'NIO' => '&#67;&#36;',
                'NOK' => '&#107;&#114;',
                'NPR' => '&#8360;',
                'NZD' => '&#36;',
                'OMR' => '&#65020;',
                'PAB' => '&#66;&#47;&#46;',
                'PEN' => '&#83;&#47;&#46;',
                'PGK' => '&#75;', // ?
                'PHP' => '&#8369;',
                'PKR' => '&#8360;',
                'PLN' => '&#122;&#322;',
                'PYG' => '&#71;&#115;',
                'QAR' => '&#65020;',
                'RON' => '&#108;&#101;&#105;',
                'RSD' => '&#1044;&#1080;&#1085;&#46;',
                'RUB' => '&#1088;&#1091;&#1073;',
                'RWF' => '&#1585;&#1587;',
                'SAR' => '&#65020;',
                'SBD' => '&#36;',
                'SCR' => '&#8360;',
                'SDG' => '&#163;', // ?
                'SEK' => '&#107;&#114;',
                'SGD' => '&#36;',
                'SHP' => '&#163;',
                'SLL' => '&#76;&#101;', // ?
                'SOS' => '&#83;',
                'SRD' => '&#36;',
                'STD' => '&#68;&#98;', // ?
                'SVC' => '&#36;',
                'SYP' => '&#163;',
                'SZL' => '&#76;', // ?
                'THB' => '&#3647;',
                'TJS' => '&#84;&#74;&#83;', // ? TJS (guess)
                'TMT' => '&#109;',
                'TND' => '&#1583;&#1578;',
                'TOP' => '&#84;&#36;',
                'TRY' => '&#8356;', // New Turkey Lira (old symbol used)
                'TTD' => '&#36;',
                'TWD' => '&#78;&#84;&#36;',
                'TZS' => '',
                'UAH' => '&#8372;',
                'UGX' => '&#85;&#83;&#104;',
                'USD' => '&#36;',
                'UYU' => '&#36;&#85;',
                'UZS' => '&#1083;&#1074;',
                'VEF' => '&#66;&#115;',
                'VND' => '&#8363;',
                'VUV' => '&#86;&#84;',
                'WST' => '&#87;&#83;&#36;',
                'XAF' => '&#70;&#67;&#70;&#65;',
                'XCD' => '&#36;',
                'XDR' => '',
                'XOF' => '',
                'XPF' => '&#70;',
                'YER' => '&#65020;',
                'ZAR' => '&#82;',
                'ZMK' => '&#90;&#75;', // ?
                'ZWL' => '&#90;&#36;',
            );
            if(!empty($currency_code))
                return $currency_symbols_set[$currency_code];
            return false;
        }
        
        public function getCurrencySet()
        {
            $currency_symbols_set = array(
                'AED' => '&#1583;&#1573;', // ?
                'AFN' => '&#65;&#102;',
                'ALL' => '&#76;&#101;&#107;',
                'AMD' => '',
                'ANG' => '&#402;',
                'AOA' => '&#75;&#122;', // ?
                'ARS' => '&#36;',
                'AUD' => '&#36;',
                'AWG' => '&#402;',
                'AZN' => '&#1084;&#1072;&#1085;',
                'BAM' => '&#75;&#77;',
                'BBD' => '&#36;',
                'BDT' => '&#2547;', // ?
                'BGN' => '&#1083;&#1074;',
                'BHD' => '&#1583;&#1576;', // ?
                'BIF' => '&#70;&#66;&#117;', // ?
                'BMD' => '&#36;',
                'BND' => '&#36;',
                'BOB' => '&#36;&#98;',
                'BRL' => '&#82;&#36;',
                'BSD' => '&#36;',
                'BTN' => '&#78;&#117;&#46;', // ?
                'BWP' => '&#80;',
                'BYR' => '&#112;&#46;',
                'BZD' => '&#66;&#90;&#36;',
                'CAD' => '&#36;',
                'CDF' => '&#70;&#67;',
                'CHF' => '&#67;&#72;&#70;',
                'CLF' => '', // ?
                'CLP' => '&#36;',
                'CNY' => '&#165;',
                'COP' => '&#36;',
                'CRC' => '&#8353;',
                'CUP' => '&#8396;',
                'CVE' => '&#36;', // ?
                'CZK' => '&#75;&#269;',
                'DJF' => '&#70;&#100;&#106;', // ?
                'DKK' => '&#107;&#114;',
                'DOP' => '&#82;&#68;&#36;',
                'DZD' => '&#1583;&#1580;', // ?
                'EGP' => '&#163;',
                'ETB' => '&#66;&#114;',
                'EUR' => '&#8364;',
                'FJD' => '&#36;',
                'FKP' => '&#163;',
                'GBP' => '&#163;',
                'GEL' => '&#4314;', // ?
                'GHS' => '&#162;',
                'GIP' => '&#163;',
                'GMD' => '&#68;', // ?
                'GNF' => '&#70;&#71;', // ?
                'GTQ' => '&#81;',
                'GYD' => '&#36;',
                'HKD' => '&#36;',
                'HNL' => '&#76;',
                'HRK' => '&#107;&#110;',
                'HTG' => '&#71;', // ?
                'HUF' => '&#70;&#116;',
                'IDR' => '&#82;&#112;',
                'ILS' => '&#8362;',
                'INR' => '&#8377;',
                'IQD' => '&#1593;&#1583;', // ?
                'IRR' => '&#65020;',
                'ISK' => '&#107;&#114;',
                'JEP' => '&#163;',
                'JMD' => '&#74;&#36;',
                'JOD' => '&#74;&#68;', // ?
                'JPY' => '&#165;',
                'KES' => '&#75;&#83;&#104;', // ?
                'KGS' => '&#1083;&#1074;',
                'KHR' => '&#6107;',
                'KMF' => '&#67;&#70;', // ?
                'KPW' => '&#8361;',
                'KRW' => '&#8361;',
                'KWD' => '&#1583;&#1603;', // ?
                'KYD' => '&#36;',
                'KZT' => '&#1083;&#1074;',
                'LAK' => '&#8365;',
                'LBP' => '&#163;',
                'LKR' => '&#8360;',
                'LRD' => '&#36;',
                'LSL' => '&#76;', // ?
                'LTL' => '&#76;&#116;',
                'LVL' => '&#76;&#115;',
                'LYD' => '&#1604;&#1583;', // ?
                'MAD' => '&#1583;&#1605;', //?
                'MDL' => '&#76;',
                'MGA' => '&#65;&#114;', // ?
                'MKD' => '&#1076;&#1077;&#1085;',
                'MMK' => '&#75;',
                'MNT' => '&#8366;',
                'MOP' => '&#77;&#79;&#80;&#36;', // ?
                'MRO' => '&#85;&#77;', // ?
                'MUR' => '&#8360;', // ?
                'MVR' => '&#1923;', // ?
                'MWK' => '&#77;&#75;',
                'MXN' => '&#36;',
                'MYR' => '&#82;&#77;',
                'MZN' => '&#77;&#84;',
                'NAD' => '&#36;',
                'NGN' => '&#8358;',
                'NIO' => '&#67;&#36;',
                'NOK' => '&#107;&#114;',
                'NPR' => '&#8360;',
                'NZD' => '&#36;',
                'OMR' => '&#65020;',
                'PAB' => '&#66;&#47;&#46;',
                'PEN' => '&#83;&#47;&#46;',
                'PGK' => '&#75;', // ?
                'PHP' => '&#8369;',
                'PKR' => '&#8360;',
                'PLN' => '&#122;&#322;',
                'PYG' => '&#71;&#115;',
                'QAR' => '&#65020;',
                'RON' => '&#108;&#101;&#105;',
                'RSD' => '&#1044;&#1080;&#1085;&#46;',
                'RUB' => '&#1088;&#1091;&#1073;',
                'RWF' => '&#1585;&#1587;',
                'SAR' => '&#65020;',
                'SBD' => '&#36;',
                'SCR' => '&#8360;',
                'SDG' => '&#163;', // ?
                'SEK' => '&#107;&#114;',
                'SGD' => '&#36;',
                'SHP' => '&#163;',
                'SLL' => '&#76;&#101;', // ?
                'SOS' => '&#83;',
                'SRD' => '&#36;',
                'STD' => '&#68;&#98;', // ?
                'SVC' => '&#36;',
                'SYP' => '&#163;',
                'SZL' => '&#76;', // ?
                'THB' => '&#3647;',
                'TJS' => '&#84;&#74;&#83;', // ? TJS (guess)
                'TMT' => '&#109;',
                'TND' => '&#1583;&#1578;',
                'TOP' => '&#84;&#36;',
                'TRY' => '&#8356;', // New Turkey Lira (old symbol used)
                'TTD' => '&#36;',
                'TWD' => '&#78;&#84;&#36;',
                'TZS' => '',
                'UAH' => '&#8372;',
                'UGX' => '&#85;&#83;&#104;',
                'USD' => '&#36;',
                'UYU' => '&#36;&#85;',
                'UZS' => '&#1083;&#1074;',
                'VEF' => '&#66;&#115;',
                'VND' => '&#8363;',
                'VUV' => '&#86;&#84;',
                'WST' => '&#87;&#83;&#36;',
                'XAF' => '&#70;&#67;&#70;&#65;',
                'XCD' => '&#36;',
                'XDR' => '',
                'XOF' => '',
                'XPF' => '&#70;',
                'YER' => '&#65020;',
                'ZAR' => '&#82;',
                'ZMK' => '&#90;&#75;', // ?
                'ZWL' => '&#90;&#36;',
            );
            return $currency_symbols_set;
        }
}