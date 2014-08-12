                    <h2>
                        Sign Up <br/>
                    </h2><br />
                    <h3>
                    	<?php
                   $message = $this->session->userdata('message');
						if(isset($message)){
							
						
						echo $message ;
							$this->session->unset_userdata('message');
                    	
						}
     ?>
                    	
                    </h3>
<form action="<?php echo base_url();?>index.php/login/save_user" method="post" onsubmit="return validateStandard(this)">
                        <table border="0" align="center">
                            <tr>
                                <td>First Name:</td>
                                <td><input type="text" name="first_name" placeholder="First Name" tabindex="1" required="1" regexp="JSVAL_RX_ALPHA" err="Enter Valid Name"/><span class="required"> *</span></td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><input type="text" name="last_name" placeholder="Last Name" tabindex="2" required="1" regexp="JSVAL_RX_ALPHA" err="Enter Valid Name"/><span class="required"> *</span></td>
                            </tr>
                            <tr>
                                <td>Email Address:</td>
                                <td><input type="text" name="email_address" placeholder="Email Address" tabindex="3" required="1" regexp="JSVAL_RX_EMAIL"/><span class="required"> *</span></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="password" placeholder="Your Password" tabindex="4" required="1" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE"/><span class="required"> *</span></td>
                            </tr>
                            <tr>
                                <td>Confirm Password:</td>
                                <td><input type="password" name="confirm password" equals="password" placeholder="Confirm Password" tabindex="4" err="password does not match !!"/><span class="required"> *</span></td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td><textarea cols="30" rows="10" name="address" placeholder="Your Address" tabindex="6"></textarea><span class="required"> *</span></td>
                            </tr>
                            <tr>
                                <td>Mobile No:</td>
                                <td><input type="text" name="mobile_no" placeholder="Your Mobile No" tabindex="7"  required="1" /><span class="required"> *</span></td>
                            </tr>
                            <tr>
                                <td>City:</td>
                                <td><input type="text" name="city" placeholder="Your City" tabindex="8" /><span class="required"> *</span></td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td>
                                    <input type="radio" name="gender" value="male"  />Male
                                    <input type="radio" name="gender" value="female" checked="checked" />Female
                                </td>
                            </tr>
                            <tr>
                                <td>Country:</td>
                                <td><select tabindex="9" required="1" exclude=" " name="country">
                                        <option value=" ">Select Country</option>
                                        <script type="text/javascript" >
                                        printCountryOptions();
                                        </script>
                                   </select><span class="required"> *</span> 
                                </td>
                            </tr>
                            <tr>
                                <td>Zip Code:</td>
                                <td><input type="text" name="zip_code" placeholder="Your Zip Code" tabindex="10" required="1" /><span class="required"> *</span></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="btn" tabindex="11" value="Sign Up"/></td>
                            </tr>
                        </table>
                    </form>