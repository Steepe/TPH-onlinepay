<?php
    /**
     * Created by PhpStorm.
     * Author: Oluwamayowa Steepe
     * Date: 30-Jun-16
     * Time: 10:08 PM
     */

    require_once(APPPATH.'views/include/header.php');

?>



   <ol  class="breadcrumb" style="border:#ccc solid thin; width: 900px; margin-top: 10px; margin-left: 240px">
        <li> <i class="fa fa-home"></i><a href="http://www.thispresenthouse.org" style="color: #666 ">TPH home  </a></li>
       <li><a href="https://www.thispresenthouse.org/watch-online" target="_blank" style="color: #666 ">Watch Our Service Online </a></li>
    </ol>


    <div id="give_header" class="alert alert-info text-center col-md-12" style="margin-top: 50px;">
        <p class="fontstyle1"><em>In giving to the work of Gods Kingdom you contribute to advancing it here on earth.</br>

                Your financial involvement could also be the greatest investment you make in the lives of others.</br>

                Your generosity helps spread Christ's message of hope and healing.</em></></p>
    </div>


    <br>


    <div class="row" style="background-color: #fff; padding-top: 10px;">
        <form method="post" action="<?php echo base_url('do_step1');?>" id="first_step">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h6 class="panel-title">PERSONAL INFORMATION</h6></div>
                <div class="panel-body">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="icon-prepend fa fa-user"></i></span>
                        <input type="text" class="form-control" id="names" name="names" required="required" placeholder="Enter Full Name Here">
                    </div>
                    <br>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="icon-prepend fa fa-envelope"></i></span>
                        <input type="email" class="form-control" id="email_address" name="email_address" required="required" placeholder="Enter E-Mail Address">
                    </div>
                    <br>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="icon-prepend fa fa-phone"></i></span>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" required="required" placeholder="Enter Valid Phone Here : +4470299800923">
                    </div>

                    <br>
                        <textarea rows="5" cols="50" id="remarks" name="remarks"  class="form-control" placeholder="Remarks"></textarea>

                    <br><br><br><br><br>
                    <input type="submit" id="cmdsubmit"   value="Proceed to payment">


                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h6 class="panel-title">OFFERING</h6></div>
                <div class="panel-body">
                    <div class="input-group">
						<span class="input-group-addon">
							<input type="checkbox" class="enabler" alt="offering">
						</span>
                        <input type="number" class="form-control" id="offering" name="offering" placeholder="Offering : 0.00" disabled="disabled">
                    </div>
                    <br>
                    <div class="input-group">
						<span class="input-group-addon">
							<input type="checkbox" class="enabler" alt="tithe">
						</span>
                        <input type="number" class="form-control" id="tithe" name="tithe" placeholder="Tithe : 0.00" disabled="disabled">
                    </div>
                    <br>
                    <div class="input-group">
						<span class="input-group-addon">
							<input type="checkbox" class="enabler" alt="freedom_center">
						</span>
                        <input type="number" class="form-control" id="freedom_center" name="freedom_center" placeholder="Freedom Center : 0.00"  disabled="disabled">
                    </div>
                    <br>
                    <div class="input-group">
						<span class="input-group-addon">
							<input type="checkbox" class="enabler" alt="freedom_foundation">
						</span>
                        <input type="number" class="form-control" id="freedom_foundation" name="freedom_foundation" placeholder="Freedom Foundation : 0.00" disabled="disabled">
                    </div>
                    <br>
                    <div class="input-group">
						<span class="input-group-addon">
							<input type="checkbox" class="enabler" alt="thanksgiving">
						</span>
                        <input type="number" class="form-control" id="thanksgiving" name="thanksgiving" placeholder="Thanksgiving : 0.00" disabled="disabled">
                    </div>
                    <br>
                    <div class="input-group">
						<span class="input-group-addon">
							<input type="checkbox" class="enabler" alt="pledges">
						</span>
                        <input type="number" class="form-control" id="pledges" name="pledges" placeholder="Pledges : 0.00" disabled="disabled">
                    </div>
                    <br>
                    <div class="input-group">
						<span class="input-group-addon">
							<input type="checkbox" class="enabler" alt="others">
						</span>
                        <input type="number" class="form-control" id="others" name="others" placeholder="Other : 0.00"disabled="disabled">
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Currency</span>

                            <select class="form-control select-full" id="currency" name="currency" required="required" data-placeholder="Choose a Country..." tabindex="2">
                                <option value=""></option>
                                <option value="NGN">Naira ₦ </option>
                                <option value="USD">Dollars $ </option>
                                <option value="GBP">British Pounds £ </option>
                                <option value="EUR">Euros € </option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </form>

    </div>





    <!-- panel-footer -->

    <div class="well row">



        <h3 class="text-center">You can make transfer/wire to any of the banks below.</h3>




        <table  class=" table table-condensed table-responsive table-hover ">

            <tbody>
            <tr class="warning">
                <td>
                    <label>BANK NAME: SKYE BANK </label><br />
                    <label>ACCOUNT NAME:</label> This Present House<br />
                    <label>ACCOUNT NUMBER:</label> 1770004132<br />
                    <label>SORT CODE: </label>
                </td>
                <td>
                    <label>BANK NAME: ZENITH BANK PLC</label><br />
                    <label>ACCOUNT NAME:</label> This Present House<br />
                    <label>ACCOUNT NUMBER: </label>1012327255<br />
                    <label>SORT CODE:</label>
                </td>
            </tr>
            <tr  class="success">
                <td>
                    <label>BANK NAME: Guaranty Trust BANK PLC</label><br />
                    <label>ACCOUNT NAME: </label>This Present House<br />
                    <label>ACCOUNT NUMBER: </label>0008486038<br />
                    <label>SORT CODE:</label>
                </td>
                <td>
                    <label>BANK NAME: Stanbic IBTC BANK PLC</label><br />
                    <label>ACCOUNT NAME:</label> This Present House<br />
                    <label>ACCOUNT NUMBER:</label> 0002516225<br />
                    <label>SORT CODE: </label>
                </td>
            </tr>
            <tr  class="warning">
                <td>
                    <label>BANK NAME: UBA</label><br />
                    <label>ACCOUNT NAME: </label>This Present House<br />
                    <label>ACCOUNT NUMBER: </label>1010999863<br />
                    <label>SORT CODE:</label>
                </td>
                <td>
                    <label>BANK NAME: FCMB</label><br />
                    <label>ACCOUNT NAME:</label> This Present House<br />
                    <label>ACCOUNT NUMBER:</label> 0723004016<br />
                    <label>SORT CODE: </label>
                </td>
            </tr>
            <tr  class="success">
                <td>
                    <label>BANK NAME: ZENITH BANK PLC</label><br />
                    <label>ACCOUNT NAME: </label>This Present House(Freedom Center)<br />
                    <label>ACCOUNT NUMBER: </label>1013527083<br />
                    <label>SORT CODE:</label>
                </td>
                <td>
                </td>
            </tr>
            </tbody>
        </table>

        <p>For giving related issues, Please call +234(0)809 040 3266 or send a mail to web@thispresenthouse.org</p>


    </div>


</div>


<?php
    require_once(APPPATH.'views/include/footer.php');
?>
