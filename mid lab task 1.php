<!DOCTYPE html>
<html>
     <head>
	 <title>Donor information </title>
	 <head/>
	 <body>
	      <small>* - Denotes Required Information</small></br>
		  <b>> 1 Donation</b> <body> &nbsp &nbsp > 2 Confirmation  &nbsp &nbsp    > Thank You!</body>
		<h4 style=color:red> Donor information </h4>
		
		<form>
		<style>
  label {font-weight:bold;
  
  }
</style>


	
	 <div >
	 <label for="firstname">First Name: </label>
	 <input type="text" name="firstname" id="firstname" required></input>
	 </div>
	 <div >
	 <label for="lasttname">Last Name: </label>
	 <input type="text" name="lastname" id="lastname" required></input>
	 </div>
	 <div >
	 <label for="company" >Company: </label>
	 <input type="text" name="company" id="company" required></input>
	 </div>
	 <div >
	 <label for="address">Address 1: </label>
	 <input  type="text" name="address" id="address" required></input>
	 </div>
	 <label for="address">Address 2: </label>
	 <input type="text" name="address" id="address" required></input>
	 </div>
	 <div >
	 <label for="city">City: </label>
	 <input type="text" name="city" id="city" required></input>
	 </div>
	 
	 <div >
	 <label for="state">State: </label>
	 <select id="state" name="state" size="1">
	 <option selected>Select a state</option>
	 <option value="bd">Bangladesh</option>
	 <option value="ind">India</option>
	 <option value="Pak">Pakistan</option>
	 <option value="nep">Nepal</option>
	 </select>
	 
	 <div >
	 <label for="zip">Zip Code: </label>
	 <input type="int" name="zip" id="zip" required></input>
	 </div>
	 
	 
	 <div>
	 <label for="country">Country: </label>
	 <select id="country" name="country" size="1">
	 <option selected>Select a country</option>
	 <option value="bd">Bangladesh</option>
	 <option value="ind">India</option>
	 <option value="Pak">Pakistan</option>
	 <option value="nep">Nepal</option>
	 </select>
	 
	 <div>
	 <label for="phn">Phone: </label>
	 <input type="text" name="phn" id="phn" required></input>
	 </div>
	 
	 <div >
	 <label for="fax">Fax: </label>
	 <input type="text" name="fax" id="fax" required></input>
	 </div>
	 
	 <div >
	 <label for="mail">Email: </label>
	 <input type="email" name="mail" id="mail" required></input>
	 </div>
	 
	 <div>	 

	 <label for="ammount" >Donation Amount: </label>
	 <input type="radio" name="amount" id="amount" value="0"> None</input>
	 <input type="radio" name="amount" id="amount"value="50$"> 50$</input>
	 <input type="radio" name="amount" id="amount"value="75$"> 75$</input>
	 <input type="radio" name="amount" id="amount"value="100$"> 100$</input>
	 <input type="radio" name="amount" id="amount"value="250$"> 250$</input>
	 <input type="radio" name="amount" id="amount" value=""> Other</input>
	 </div> <small>(Check a button or type in your amount)</small>
	 
	 <div >
	 <label for="ammount">Other ammount: </label>
	 <input type="text" name="ammount" id="ammount"></input>
	 </div>
	 
	 <div >
	 <label for="requier">Requiring Donation: </label>
	 <input type="checkbox" name="mail" id="mail" required>I am interested in giving on a regular basis.</input>
	 </div><small>(Check if yes)</small>
	 
	 <div >
	 <label for="ammount">Monthly Credit card $ </label>
	 <input type="text" name="ammount" id="ammount" size="1"></input> For
	 	 <input type="text" name="ammount" id="ammount" size="1"> Months </input>

	 </div>
	 <h4 style=color:red> Honorarium and Memorial Donation Information </h4>
	 
	  <div >
	 <label for="system">I would like to made this donation </label>
	 <input type="radio" name="system" id="system" value="To Honor">To Honor</input>
	 	 <input type="radio" name="system" id="system" value="In Memory of">In Memory of</input>

	 </div>
	 
	 
	 <div >
	 <label for="name">Name: </label>
	 <input type="text" name="name" id="name" required></input>
	 </div>
	 
	  <div >
	 <label for="address">Address: </label>
	 <input  type="text" name="address" id="address" required></input>
	 </div>
	 
	 	 <div >
	 <label for="donation_to">Acknowledge Donation to:: </label>
	 <input type="text" name="donation_to" id="donation_to" ></input>
	 </div>
	 	 <div >
	 <label for="city">City: </label>
	 <input type="text" name="city" id="city" required></input>
	 </div>
	 
	  <div >
	 <label for="state">State: </label>
	 <select id="state" name="state" size="1">
	 <option selected>Select a state</option>
	 <option value="bd">Bangladesh</option>
	 <option value="ind">India</option>
	 <option value="Pak">Pakistan</option>
	 <option value="nep">Nepal</option>
	 </select>
	 
	 <div >
	 <label for="zip">Zip Code: </label>
	 <input type="int" name="zip" id="zip" required></input>
	 </div>
	 	 <h4 style=color:red> Addintional Information </h4>
		 <small>Please enter your name, company or organization as you would like it to appear in our publication:
<div >
	 <label for="name">Name: </label>
	 <input type="text" name="name" id="name" required></input>
	 </div>
	 
	  <div >
	 
	 <input type="checkbox" name="mail" id="mail" required>I would like my gift to remain anonymous.</input>
	 </div> 
	 <div >
	 <input type="checkbox" name="mail" id="mail" required>My employer offers a matching gift program.</input>
	 </div>
	 <div >
	 <input type="checkbox" name="mail" id="mail" required>Please save to cost of acknowledging this gift by not mailing a thank you leeter.</input>
	 </div>
	 <div>
	 <label for="comment" >Comment: </label></br>
	 <textarea cols="20" rows="5" required></textarea>
	 
	 <div >
	 <label for="contact">How may we contact you?: </label><br>
	 <input type="checkbox" name="contact" id="contact" >E-mail</input><br>
	 <input type="checkbox" name="contact" id="contact" >Postal mail</input><br>
	 <input type="checkbox" name="contact" id="contact" >Telephone</input><br>
	 <input type="checkbox" name="contact" id="contact" >Fax</input><br>
	 <small>I would like to receive  newsletters and information about special events by:</small><br>
	 <input type="checkbox" name="contact" id="contact" >E-mail</input><br>
	 <input type="checkbox" name="contact" id="contact" >Postal mail</input><br><br>
	 <input type="checkbox" name="contact" id="contact" >I would like information about volunteering.</input>
	 </div>
	 
	 <br><br>
	 <div>
	 <input style=background-color:green text:w type="submit" value="Continue">
	 <input style=background-color:red type="reset" value="Reset">
	 </div>
	 
	 <p> &#128274; Donate online with confidence.You are on a secure server.</p>
	 <p>If you have any problems or question, please contact with us.
	 <p>	&#x1f4e7; shakilhossen566@gmail.com</p>
	
		</form> 
	 </body>



</html>