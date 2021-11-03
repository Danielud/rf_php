<?php 
if (isset($_POST['submit'])) {
	echo "http://127.0.0.1/index.php?pt_full_name=" . $_POST['pt_full_name'] . "&dob=" . $_POST['dob'];
	} else {
		?>
<!DOCTYPE html>
<html>
<head>
	<title>Facial Imaging</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>

<body>

<div id="container">

	<div id="header"><h1>Facial Imaging</h1>
	</div>

	<div id="refferral_form">
	   <form action="index.php" method="POST">
	   <div id="pt_info">
		<fieldset id="patient_information" style="height:350px;">
			<legend id="legend_text">Patient Information</legend>
						  Full Name: <input type="text" name="pt_full_name" value="<?php echo isset($_GET['pt_full_name']) ? $_GET['pt_full_name'] : '' ?>" required />
						  Day of Birth: <input type="date" name="dob" />
					      Address: <Input style="" type="text" name="pt_address" />
					      Phone: <input type="tel" name="pt_phone" required />
		</fieldset>
		</div>
		
		<div id="refer_doctor">
		<fieldset id="referring_doctor_information" style="height:350px;">
			<legend id="legend_text">Referring Doctor Information</legend>
						Full Name: <br><input type="text" name="dr_full_name" required />
						Address: <Input type="text" name="dr_address" required />
						Phone: <input type="tel" name="dr_phone" required />
						Fax: <input type="tel" name="dr_fax" /> 
						E-mail<input type="email" name="dr_email"  required />
		</fieldset>
		</div>
		
		<div id="treat_plan">
			<fieldset>
				<legend id="legend_text">Treatment Plan</legend>
					<div id="treat_side_1">
						<input type="checkbox" name="check_implants" value="check_implants" <?php if (isset($_GET['check_implants'])) { echo "checked";} ?>> Implants<br>
						<input type="checkbox" name="check_dental_impaction" value="check_dental_impaction"> Dental Impaction<br> 
						<input type="checkbox" name="group1" value="check_airway_assessment"> Airway Assessment<br> 
						<input type="checkbox" name="group1" value="check_ortho"> Ortho<br> 
						<br>
					</div>
					<div id="treat_side_2">
						<input type="checkbox" name="group1" value="check_sinus_exam"> Sinus Exam<br> 
						<input type="checkbox" name="group1" value="check_tmj_exam"> TMJ Exam<br> 
						<input type="checkbox" name="group1" value="check_endodontics"> Endodontics<br> 
						<input type="checkbox" name="group1" value="check_oral_pathology"> Oral Pathology<br>
						<br>
					</div>
					 Other: <input type="text" name="treat_plan_other" />
					 <br>
					 
					 <p>Is your patient coming with a radiological template ? <input type="radio" name="group2" value="radio_yes"> Yes <input type="radio" name="group2" value="radio_no">No</p>
					 <p>If yes then&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="group3" value="radio_trained"> Pt. was trained to place template&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="group3" value="radio_not_trained"> Dr. will be on scanning site </p><br>
					 
					 <div style="float:left;  margin:30px;" >
						<input type="radio" name="group4" value="radio_maxi" <?php if (isset($_GET['group4']) && $_GET['group4'] == 'radio_maxi') { echo "checked"; } ?>> Maxilla<br>
						<input type="radio" name="group4" value="radio_mandi"> Mandible<br>
						<input type="radio" name="group4" value="radio_both"> Both Arches<br>
					 </div>
						<img src="skull.jpg" alt="Choose Arch" height="120" width="500" style="float:right; padding:0px 50px 0px 0px;"> 
			</fieldset>
		</div>
		
		<div id="software">
			<fieldset>
				<legend id="legend_text">Software</legend>
					<div id="software_side_1">
						<input type="checkbox" name="group5" value="check_simplant"> SimPlant<br> 
						<input type="checkbox" name="group5" value="check_nobel"> Nobel<br> 
						<input type="checkbox" name="group5" value="check_easyguide"> Easy Guide<br> 
						<input type="checkbox" name="group5" value="check_vip"> VIP<br><br>
					</div>
					<div id="software_side_2">
						<input type="checkbox" name="group5" value="check_free_invivo"> Free Invivo Viewer<br> 
						<input type="checkbox" name="group5" value="check_free_simplant"> Free SimPlant Viewer<br> 
						<input type="checkbox" name="group5" value="check_ident"> Ident<br><br>
					</div>
					<div style="clear:both;">Other</div><Input type="text" name="software_other" />
			</fieldset>
		</div>
		
		<div id="preferred_reproduction_format">
			<fieldset>
				<legend id="legend_text">Preferred Reproduction Format</legend>
					<div style="text-align:center;">
						<input type="checkbox" name="group6" value="check_cd"> CD
						<input type="checkbox" name="group6" value="check_prints"> Prints 
						<input type="checkbox" name="group6" value="check_internet"> Via Internet 
						<input type="checkbox" name="group6" value="check_rr"> Radiological Report
						<input type="checkbox" name="group6" value="check_full"> All of the above
					</div>
			</fieldset>
		</div>
		
		<div id="processing">
			<fieldset>
				<legend id="legend_text">Processing</legend>
						<input type="checkbox" name="group7" value="check_dual"> Dual Scan (Additional 100$ for each arch)<br><br>
						  &nbsp;Masking (Additional 50$ for each arch) <input type="checkbox" name="group7" value="check_mask_maxi"> Mask Maxilla <input type="checkbox" name="group7" value="check_mask_mandi"> Mask Mandible<br><br>
						<input type="checkbox" name="group7" value="check_ASAP"> ASAP
			</fieldset>
		</div>
		
		<input type="submit" value="Send" name="submit"><input type="reset" value="Clear">
	   </form>
	</div>
</div>
</body>
</html>

	<?php }
  ?>












