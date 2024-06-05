<html>

<head>
  <title>Become a Member</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="croppie.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="croppie.css" />
  <link rel='stylesheet' href='stylesnew.css' />
</head>

<body>
  <div style="text-align: center;">
    <img src="header.jpeg" style="max-width: 100%;">
  </div>
  <!--<header class='speaker-form-header'>
      <h1>Become a Member</h1>
      <p><em>Just fill up the form below to be one of our members</em></p>
    </header>-->

  <form action='redirect.php' method="POST" class='speaker-form'>
    <div class='form-row'>
      <label for='firstname'>First Name</label>
      <input id='firstname' name='firstname' type='text' required />
    </div>
    <div class='form-row'>
      <label for='lastname'>Last Name</label>
      <input id='lastname' name='lastname' type='text' required />
    </div>
    <div class='form-row'>
      <label for='email'>Email</label>
      <input id='email' name='email' type='email' required placeholder='joe@example.com' />
    </div>
    <div class='form-row'>
      <label for='phone'>Phone</label>
      <input id='phone' name='phone' type='text' placeholder="98515*****" maxlength="10" required />
    </div>
    <div class='form-row'>
      <label for='district'>District</label>
      <!--<input id='district'
               name='district'
               required
               type='text'/>-->
      <select id="district" name="district" required style="font-size: 14px; display: flex; justify-content: flex-start; flex-direction: column; flex-wrap: wrap; background-color: #FFFFFF; border: 1px solid #D6D9DC; border-radius: 3px; padding: 7px;">
        <option selected hidden value="">Select District</option>
        <option>Ahmednagar</option>
        <option>Akola</option>
        <option>Amravati</option>
        <option>Aurangabad</option>
        <option>Beed</option>
        <option>Bhandara</option>
        <option>Buldhana</option>
        <option>Chandrapur</option>
        <option>Dhule</option>
        <option>Gadchiroli</option>
        <option>Gondia</option>
        <option>Hingoli</option>
        <option>Jalgaon</option>
        <option>Jalna</option>
        <option>Kolhapur</option>
        <option>Latur</option>
        <option>Mumbai City</option>
        <option>Mumbai Suburban</option>
        <option>Nagpur</option>
        <option>Nanded</option>
        <option>Nandurbar</option>
        <option>Nashik</option>
        <option>Osmanabad</option>
        <option>Palghar</option>
        <option>Parbhani</option>
        <option>Pune</option>
        <option>Raigad</option>
        <option>Ratnagiri</option>
        <option>Sangli</option>
        <option>Satara</option>
        <option>Sindhudurg</option>
        <option>Solapur</option>
        <option>Thane</option>
        <option>Wardha</option>
        <option>Washim</option>
        <option>Yavatmal</option>
      </select>
    </div>
    <div class='form-row'>
      <label for='village'>Village</label>
      <input id='village' name='village' required type='text' />
    </div>
    <div class='form-row'>
      <label for='pincode'>Pincode</label>
      <input id='pincode' name='pincode' type='text' required maxlength="6" />
    </div>
    <div class='form-row'>
      <label for='date'>Birth Date</label>
      <input type="date" name="date" id="date" required style="width: 250px">
    </div>
    <div class='form-row'>
      <input type="reset" name="" required style="margin-left: 50px; background-color: #5995DA; color: #FFFFFF; border: none; padding: 5px 15px;">
    </div>








    <!--<fieldset class='legacy-form-row'>
        <legend>Gender</legend>
        <input id='talk-type-1'
               name='gender'
               type='radio'
               value='m' />
        <label for='talk-type-1' class='radio-label'>Male</label>
        <input id='talk-type-2'
               name='gender'
               type='radio'
               value='f'
               checked />
        <label for='talk-type-2' class='radio-label'>Female</label>
        <input id='talk-type-2'
               name='gender'
               type='radio'
               value='o'
               checked />
        <label for='talk-type-2' class='radio-label'>Other</label>
      </fieldset>-->

    <div class='form-row'>
      <button>Submit</button>
    </div>
  </form>






  <!--<div style="text-align: center; padding-top: 30px">
	<form>
		<fieldset>
		<legend>User details</legend>
		<label for="name">Your Name</label>
		First Name: <input type="text" name="firstname" style="width: 500px;">
		<br>
		Last Name: <input type="text" name="lastname" style="width: 500px;">
		</fieldset>

	</form>

</div>-->



</body>

</html>