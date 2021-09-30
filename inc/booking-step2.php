<?php
session_start();
function mail_send($data)
{
    
    $url = 'https://api.sendgrid.com/';    
    $user = 'getrafic';
    $pass = 'Emails@2017';
    
    $message= $data['Message'];
    $params = array(            
        'api_user'  => $user,
        'api_key'   => $pass,
        'to'        => $data['To_email'],
        //'cc'=>$data['CC_email'],
       // 'bcc'=>$data['BCC_email'],
        'subject'   => $data['Subject'],
        'html'      => $message,
        'fromname'  => $data['From_name'],
        'text'      => '',   
        'from'      => '<noreply@helferz.com>',
        );
    $request =  $url.'api/mail.send.json';
    $session = curl_init($request);
    curl_setopt ($session, CURLOPT_POST, true);
    curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
    curl_setopt($session, CURLOPT_HEADER, false);
    curl_setopt($session, CURLOPT_SSLVERSION, 'CURL_SSLVERSION_TLSv1_2');
    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($session);
    curl_close($session);

}


if($_POST['how_often']!="")
{
	$_SESSION['how_often']=$_POST['how_often'];
	$_SESSION['time_range']=$_POST['time_range'];
	$_SESSION['no_cleaner']=$_POST['no_cleaner'];
	$_SESSION['requre_clean_material']=$_POST['requre_clean_material'];
	$_SESSION['calendarval']=$_POST['calendarval'];
	$_SESSION['clean_time']=$_POST['clean_time'];
	$_SESSION['clean_time1']=$_POST['clean_time1'];
	$_SESSION['demo_instruction']=$_POST['demo_instruction'];
	$_SESSION['need_ironing']=$_POST['need_ironing'];
}
if($_SESSION['how_often']=="")
{
	header("Location:booking.php");
}
if($_POST['submitDetails']!="")
{
	$data['To_email']="pramod.seoinfotechsolution@gmail.com";
	$data['Subject']="New Cleaning Request BY: ".$_POST['full_name'];
	$data['From_name']=$_POST['full_name'];
	$full_name=$_POST['full_name'];
	$phone_number=$_POST['phone_number'];
	$email_id=$_POST['email_id'];
	$cityname=$_POST['cityname'];
	$building_name=$_POST['building_name'];
	$appartment_viall_no=$_POST['appartment_viall_no'];
	$address_landmark=$_POST['address_landmark'];
	$basic_instruction_to_reach=$_POST['basic_instruction_to_reach'];
	$availability=$_POST['availability'];


	$data['Message']='<body style="font-family: arial,sans-serif; background-color:#e9e9e9;">
	<table width="598" border="0" cellpadding="0" cellspacing="0" align="center" class="" style="background-color:#26b9ec">
                  <tbody>
                  <tr>
                     <td style="background-color:#df7100">
                        <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0" style="max-width:100%;border-spacing:0px;">
                           <tbody>
                           <tr>
                              <td style="text-align:center;">
                                 <table width="100%" height="" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align:middle;color:#fff;font-size:15px;font-weight:bold;">
                                    <tbody>
                                    <tr>
                                       <td style="padding:5px 5px 8px 5px;text-align:right;width:50%"><table width="100%" border="0" align="center" cellpadding="4" cellspacing="0" style="max-width:100%;border-spacing:0px;"><tbody><tr><td align="left" style="padding:0 5px"><a href="#" style="color:#fff; text-decoration:none;">Phone : +1 XXX-XXX-XXXX</a></td>
                                               
                                             </tr>
                                          </tbody></table>
                                       </td>
                                       
                                       <td style="padding:5px 5px 8px 5px;text-align:right;width:50%"><table width="100%" border="0" align="center" cellpadding="4" cellspacing="0" style="max-width:100%;border-spacing:0px;"><tbody><tr><td align="right" style="padding:0 5px"><a href="#" style="color:#fff; text-decoration:none;">Email : booking@helferz.com</a></td>
                                               
                                             </tr>
                                          </tbody></table>
                                       </td>
                                    </tr>
                                 </tbody></table>
                              </td>
                           </tr>
                        </tbody></table>
                     </td>
                  </tr>
                  <tr>
                     <td style="background:#fff;padding:0;color:#ffffff;text-align:center;font-size:0px">
                     </td>
                  </tr>
                  
                  <tr>
                     <td style="text-align:center;padding:20px 20px 10px;background:linear-gradient(to right, #152e4c, #5fe89a)">
                        <table width="100%" height="" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align:middle;color:#777;font-size:12px;font-weight:bold;">
                           <tbody><tr>
                              <td style="text-align:center"><a href="#">
                              <img style="margin-top: 10px; height: 30px; margin-bottom: 10px;" src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png"   width="" alt="" title="" style="border:0" class=""></a></td>
                           </tr>
                        </tbody></table>
                     </td>
                  </tr>
                  <tr>
                     <td style="text-align:center;padding:10px 20px;background:linear-gradient(to right, #152e4c, #5fe89a)">
                        <table width="100%" height="" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align:middle;color:#777;font-size:12px;font-weight:bold;">
                           <tbody><tr>
                              <td style="border-top: solid 1px #ffffff3b;padding:30px 0px;font-size:21px;text-align:left;line-height:20px;color:#fff;text-align:center;text-transform:uppercase;width:100%;">
                                          Welcome To COMPANY
                                       </td>
                           </tr>
                        </tbody></table>
                     </td>
                  </tr>
                  <tr>
                     <td class="" style="background-color:#f5f5f5;padding:10px">
                        <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0" style="max-width:100%;border-spacing:0px">
                           <tbody>
                           <tr>
                              <td style="background-color:#f5f5f5">
                                 <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0" style="max-width:100%;border-spacing:0px;background-color:#f5f5f5">
                                    <tbody><tr>
                                       <td style="font-size:15px;text-align:left;line-height:20px;color:#4f4f4f;background:#f5f5f5;text-align:left;width:100%;padding:10px 15px 10px;font-weight:bold;">
                                           Hi Admin, 
                                             Here is a New Enquiry From Your website
                                       </td>
                                    </tr>
                                 </tbody></table>
                              </td>
                           </tr>
                           
                           <tr>
                              <td style="background-color:#f5f5f5">
                                 <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0" style="max-width:100%;border-spacing:0px;background-color:#f5f5f5;border-bottom:1px solid #e0dfdf ">
                                    <tbody><tr>
                                       <td style="font-size:15px;text-align:left;line-height:20px;color:#4f4f4f;background:#fff;text-align:left;width:100%;padding:15px 15px 5px;font-weight:bold;">
                                          Inquiry Details: <br>
                           
                                          <table>
                                             <tr>
                                             <td>Fullname:</td>
                                             <td>'.$full_name.'</td>
                                             </tr>
                                             <tr>
                                             <td>Email Id: </td>
                                             <td>'.$email_id.'</td>
                                             </tr>
                                             <tr>
                                             <td>Phone Number:</td>
                                             <td>'.$phone_number.'</td>
                                             </tr>
                                             <tr>
                                             <td>City Name :</td>
                                             <td>'.$cityname.'</td>
                                             </tr>
                                             <tr>
                                             <td>Building Name :</td>
                                             <td>'.$building_name.'</td>
                                             </tr>
                                             <tr>
                                             <td>Appartment Name :</td>
                                             <td>'.$appartment_viall_no.'</td>
                                             </tr>
                                             <tr>
                                             <td>Basic Land Mark :</td>
                                             <td>'.$address_landmark.'</td>
                                             </tr>
											 <tr>
                                             <td>Basic Instruction to Reach :</td>
                                             <td>'.$basic_instruction_to_reach.'</td>
                                             </tr>
                                             <tr>
                                             <td>My Availability :</td>
                                             <td>'.$availability.'</td>
                                             </tr>
                                          </table>
                                          	Service Information
                                          	<table>
                                          		<tr>
	                                          		<td>How Often</td>
	                                          		<td>'.$_SESSION['how_often'].'</td>
                                          		</tr>
                                          		<tr>
	                                          		<td>For How Many Hours</td>
	                                          		<td>'.$_SESSION['time_range'].' Hours</td>
                                          		</tr>
                                          		<tr>
	                                          		<td>No Of Cleaner Needed</td>
	                                          		<td>'.$_SESSION['no_cleaner'].' Cleaners</td>
                                          		</tr>
                                          		<tr>
	                                          		<td>Require Cleaning Materials</td>
	                                          		<td>'.$_SESSION['requre_clean_material'].'</td>
                                          		</tr>
                                          		<tr>
	                                          		<td>Date to Start</td>
	                                          		<td>'.date('dS M Y',strtotime($_SESSION['calendarval'])).'</td>
                                          		</tr>
                                          		<tr>
	                                          		<td>Cleaning Time</td>
	                                          		<td>'.$_SESSION['clean_time'].$_SESSION['clean_time1'].'</td>
                                          		</tr>
                                          		<tr>
	                                          		<td>Instruction</td>
	                                          		<td>'.$_SESSION['demo_instruction'].'</td>
                                          		</tr>
                                          		<tr>
	                                          		<td>Need Ironing</td>
	                                          		<td>'.$_SESSION['need_ironing'].'</td>
                                          		</tr>
                                          	</table>
                                       </td>
                                    </tr>
                                 </tbody></table>
                              </td>
                           </tr>
                           

                                                      <tr>
                              <td style="background-color:#f5f5f5">
                              </td>

                           </tr>
                                                  
                           <tr>
                              <td style="background-color:#f5f5f5">
                                 <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0" style="max-width:100%;border-spacing:0px;background-color:#f5f5f5;border-bottom:1px solid #e0dfdf">
                                    
                                    <tbody><tr>
                                       <td style="font-size:15px;text-align:left;line-height:20px;color:#4f4f4f;background:#fff;text-align:left;width:100%;padding:15px 15px 15px;">
                                           If you would like assistance or have any questions, call us at <b>+1 XXX-XXX-XXXX</b> and we will be happy to help.
                                       </td>
                                    </tr>
                                 </tbody></table>
                              </td>
                           </tr>
                           
                           <tr>
                              <td style="background-color:#f5f5f5">
                                 <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0" style="max-width:100%;border-spacing:0px;background-color:#f5f5f5">
                                    <tbody><tr>
                                       <td style="font-size:15px;text-align:left;line-height:25px;color:#4f4f4f;background:#f5f5f5;text-align:left;width:100%;padding:5px 15px 10px">
                                          Cheers
                                         <span style="display:block">Team <div class="gmail_default" style="font-size:large;display:inline">&#8203;COMPANY&nbsp;</div></span>
                                       </td>
                                    </tr>
                                 </tbody></table>
                              </td>
                           </tr>

<tr>
                          
                  
                  </tr>
                  <tr>
                     <td style="background-color:#000">
                        <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0" style="max-width:100%;border-spacing:0px;background-color:#000">
                           <tbody><tr>
                              <td style="text-align:center;background-color:#000">
                                 <table width="100%" height="" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align:middle;color:#fff;font-size:15px;font-weight:bold;background-color:#000">
                                    <tbody>
                                 </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                        </table>
                     </td>
                  </tr>
                  <tr>
                     <td style="font-size:13px;text-align:center;line-height:25px;color:#9d9d9d;background:#000;width:100%;">
                        © 2018 All rights reserved by COMPANY
                     </td>
                  </tr>
                  <tr>
                     <td style="font-size:13px;text-align:center;line-height:25px;color:#9d9d9d;background:#000;width:100%;padding:0px 10px 20px"><div class="gmail_default" style="font-size:large;display:inline">&#8203;COMPANY &#8203;</div><br></td>
                  </tr>
                  
               </tbody></table>
            </td>
         </tr>
         
         
      </tbody>
      </table>
</body>';
mail_send($data);
header("Location:thanks.php");

}
include( "inc/header.php" );

?>
<section class="overlape">
	<div class="block no-padding">
		<div data-velocity="-.1" style="background: url(images/resource/inbg01.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div>
		<!-- PARALLAX BACKGROUND IMAGE -->
		<div class="container fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="inner-header">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="block no-padding  gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="inner2">
						<div class="inner-title2">
							<h3>Booking</h3>
							
						</div>
						<div class="page-breacrumbs">
							<ul class="breadcrumbs">
								<li><a href="#" title="">Home</a>
								</li>

								<li><a href="#" title="">Booking</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section>
	<div class="container">

		

		<div class="row" style="margin-top:35px;">

			<div class="col-md-8">
				<script language="javascript">
					function checkfinal()
					{
						var obj=document.finalsub;
						if(obj.full_name.value=="")
						{
							alert("Name can not be left as Blank");
							obj.full_name.focus();	
							return false;
						}
						if(obj.phone_number.value=="")
						{
							alert("Phone can not be left as Blank");
							obj.phone_number.focus();	
							return false;
						}
						if(obj.phone_number.value.length!=8)
						{
							alert("Qatar has 8 Digit Mobile Number");
							obj.phone_number.focus();	
							return false;
						}
						if(isNaN(obj.phone_number.value))
						{
							alert("Mobile Number is Digits Only");
							obj.phone_number.focus();	
							return false;
						}
						if(obj.cityname.value=="")
						{
							alert("City can not be left as Blank");
							obj.cityname.focus();	
							return false;
						}
						if(obj.area_name.value=="")
						{
							alert("Area can not be left as Blank");
							obj.area_name.focus();	
							return false;
						}
					}
				</script>
				<form method="POST" name="finalsub" onsubmit="return checkfinal()">
					<div>
						

						<div class="row">
							<div class="col-lg-12">
								<div class="tab-sec" style="background: none;">
									<!-- <ul class="nav nav-tabs">
										<li><a class="current" data-tab="rjobs">I am a new user</a>
										</li>
										<li><a data-tab="fjobs" class="">I already have an account</a>
										</li>
									</ul> -->

									<div id="rjobs" class="tab-content current ">
										<div class="row mbtlr20 boxm0">
											
											<div class="form__header fheader5">
							               <h3>Complete your personal details</h3>
						                  
											</div>
											<div class="col-md-12 box boxmargino"><div class="row mb20">
					 					<div class="col-lg-6">
					 						<span class="pf-title">Full Name</span>
					 						<div class="pf-field">
					 							<input placeholder="Entre Your Name" name="full_name" type="text" required />
					 						</div>
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Mobile Phone</span>
					 						<div class="pf-field">
					 							<input placeholder="Entre Your Phone No." name="phone_number" type="text" required />
					 						</div>
					 					</div>
					 					
					 					<div class="col-lg-6">
					 						<span class="pf-title">Email address</span>
					 						<div class="pf-field">
					 							<input placeholder="Entre Your email" type="email" name="email_id" required>
					 						</div>
					 					</div>
					 					
					 					
					 				
					 				</div></div>
											
										</div>
										
										<div class="row mbtlr20 boxm0">
											
											<div class="form__header fheader5" >
							                <h3 >Complete your address</h3>
						                 
											</div>
											<div class="col-md-12 box boxmargino">
											<div class="row mb20">
					 					<div class="col-lg-6">
					 						<span class="pf-title">City</span>
					 						<div class="pf-field">
					 							<input id="tags" placeholder="Entre Your City" name="cityname" type="text" required>
					 						</div>
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Area</span>
					 						<div class="pf-field">
					 							<input placeholder="Entre Your Area" name="area_name" type="text" required />
					 						</div>
					 					</div>
					 					
					 					<div class="col-lg-6">
					 						<span class="pf-title">Building Name or No</span>
					 						<div class="pf-field">
					 							<input placeholder="Entre Your Building Name" name="building_name" type="text">
					 						</div>
					 					</div>
					 					
					 					<div class="col-lg-6">
					 						<span class="pf-title">Apartment/Villa No</span>
					 						<div class="pf-field">
					 							<input placeholder="Entre Your Apartment/Villa No" name="appartment_viall_no" type="text">
					 						</div>
					 					</div>
					 					
					 					<div class="col-lg-12">
					 						<span class="pf-title">Address description (landmarks, directions, etc.)</span>
					 						<div class="pf-field">
					 							<textarea style="height:80px;" name="address_landmark"></textarea>
					 						</div>
					 					</div>
					 				
					 				</div>
					 				
					 				</div>
										
										</div>
										
										</div>

						<div class="form__header fheader5" >
							<h3 style="text-align: left;">How should your cleaner get in?</h3>
						</div>
						<div class="box2 mbtlr25">
							<div class="row">
								<div class="col-lg-12">
									<div class="contact-form">


										<div class="row">



											<div class="col-lg-12">
												<span class="pf-title" style="margin-top: 1px;  font-size: 16px;">Instructions</span>
												<div class="pf-field">
													<textarea name="basic_instruction_to_reach"></textarea>
												</div>
											</div>
											<div class="col-lg-4">
												<p class="remember-label">
													<input name="availability" value="I will be home" id="availability1" type="radio" checked><label class="font17" for="availability1" >I'll be home</label>
												</p>
											</div>
											
											<div class="col-lg-4">
												<p class="remember-label">
													<input name="availability" value="I will Leave the Key" id="availability2" type="radio" style="margin-top: 5px;"><label class="font17" for="availability2">I'll leave the key </label>
												</p>
											</div>
											
											<div class="col-lg-4">
												<p class="remember-label">
													<input name="availability" value="Other" id="availability3" type="radio" style="margin-top: 5px;"><label class="font17" for="availability3">Other</label>
												</p>
											</div>


										</div>

									</div>
								</div>
								<div></div>
							</div>
						</div>
						


					</fieldset>
									</div>

									

								</div>
							</div>
							<div></div>
						</div>
						


					</fieldset>

					



					<button class="button large action expanded" name="submitDetails"  value="final_submit" type="submit" >Submit</button>
				</form>
			</div>
			<div class="col-md-4 hid">

				<div style="position: relative;">
					<div class="ybs">
						<header class="ybs-header">
							<h4>Your booking summary</h4><a class="ybs-close">×</a>
							
						</header>
						<div class="ybs-content">
							
							<section class="ybs-section">
								<div class="ybs-row ybs-details">
									<ul class="ybs-list ybs-list--condensed">
										<li class="ybs-list-item">
											<div class="ybs-title">
												<h6 class="">Working Location</h6>
											</div>
											<div class="ybs-value"> <?=$_SESSION['choosen_city']?></div>
										</li>
									</ul>
								</div>
							</section>
							<section class="ybs-section">
								<div class="ybs-row ybs-details">
									<ul class="ybs-list ybs-list--condensed">
										<li class="ybs-list-item">
											<div class="ybs-title">
												<h6 class="">Number of Cleaner</h6>
											</div>
											<div class="ybs-value"> <?=$_SESSION['no_cleaner']?> Cleaner</div>
										</li>
									</ul>
								</div>
							</section>
							<section class="ybs-section">
								<div class="ybs-row ybs-details">
									<ul class="ybs-list ybs-list--condensed">
										<li class="ybs-list-item">
											<div class="ybs-title">
												<h6 class="">Cleaning Hours</h6>
											</div>
											<div class="ybs-value"><?=$_SESSION['time_range']?> hours</div>
										</li>
									</ul>
								</div>
							</section>
                            <section class="ybs-section">
								<div class="ybs-row ybs-details">
									<ul class="ybs-list ybs-list--condensed">
										<li class="ybs-list-item">
											<div class="ybs-title">
												<h6 class="">Require cleaning materials?</h6>
											</div>
											<div class="ybs-value"> <?=$_SESSION['requre_clean_material']?></div>
										</li>
									</ul>
								</div>
							</section>
							
							
							
						</div>
						<footer class="ybs-footer">
							<div class="ybs-row ybs-row--highlight ybs-ow--grid">
								<div class="ybs-toggle">▲</div>
								<ul class="ybs-list" id="ybs-items">
									<li class="ybs-list-item">
										<div class="ybs-title">
											<h4>Total</h4>
										</div>
										<div class="ybs-value">
											<?php
												$baseperhr=30;
												if($_SESSION['requre_clean_material']=="Yes")
												{
													$equipadditional=10;
													$totalprice=($_SESSION['time_range']*$_SESSION['no_cleaner']*$baseperhr)+($equipadditional*$_SESSION['time_range']*$_SESSION['no_cleaner']);
												}
												else
												{
													$totalprice=($_SESSION['time_range']*$_SESSION['no_cleaner']*$baseperhr);
												}
											?>
											<h4><?=$totalprice?> QAR</h4>
										</div>
									</li>
									
								</ul>
							</div>
						</footer>
						<div class="ybs-overlay">
							<div class="ybs-loader sk-three-bounce">
								<div class="sk-child sk-bounce1"></div>
								<div class="sk-child sk-bounce2"></div>
								<div class="sk-child sk-bounce3"></div>
							</div>
						</div><a class="ybs-teaser"><svg class="icon"><use xlink:href="#icon-present"></use></svg> Got a voucher?</a>
					</div>
					
				</div>

			</div>
		</div>
	</div>
</section>


<?php
include( "inc/footer.php" );
?>
  