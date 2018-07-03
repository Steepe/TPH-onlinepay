<?php
    /**
     * Created by PhpStorm.
     * Author: Oluwamayowa Steepe
     * Date: 30-Jun-16
     * Time: 10:08 PM
     */

    require_once(APPPATH.'views/include/header.php');

?>




    <ol  class="breadcrumb" style="border:#ccc solid thin">
        <li> <i class="fa fa-home"></i><a href="http://www.thispresenthouse.org" style="color: #666 ">TPH home  </a></li>
        <li><a href="http://www.thispresenthouse.org/onlinepay/how-it-works.php" style="color: #666 ">How it works </a></li>
    </ol>


    <div id="give_header" class="alert alert-info text-center">
        <h2>Give</h2>
        <h3 class="fontstyle1"><em>"As we sow generously, we will reap generously". 2 Corinthians 9:6"</em></h3>
    </div>

    <div class="text-center pageheader5">
        <p>In giving to the work of Gods Kingdom you contribute to advancing it here on earth.</p>

        <p>Your financial involvement could also be the greatest investment you make in the lives of others.</p>

        <p>Your generosity helps spread Christ's message of hope and healing.</p>
    </div>

    <br>  <br><br>



    <div class="panel panel-default registration">

        <div class="panel-heading">
            <div class="row">
                <h1 class="panel-title col-lg-7 col-md-5 col-sm-7">PERSONAL INFORMATION</h1>
            </div>
        </div>

        <div class="panel-body">
            <!--FORM STARTS-->
            <!--FORM STARTS-->
            <!--FORM STARTS-->

            <form method="post" action="<?php echo base_url('do_step1');?>">

                <span style="color: red">*</span>Full Name:
                <input type="text"  class="form-control" id="names" name="names" required="required" >  <br/>

                <span style="color: red">*</span>Email Address: <input type="email" class="form-control" id="email_address" name="email_address" required> <br/>
                <span style="color: red">*</span>Phone Number: <input type="text" class="form-control"  name="phone_number" required > <br/>

                <input type="checkbox" id="chk_offering" name="chk_offering">

                       Offering: <input type="text" class="form-control" name="offering" id="offering"><br>
                Tithe: <input type="text" class="form-control" name="tithe" id="tithe"><br>
                Freedom Center: <input type="text" class="form-control" name="freedom_center" id="freedom_center"><br>
                Freedom Foundation: <input type="text" class="form-control" name="freedom_foundation" id="freedom_foundation"><br>
                Thanksgiving: <input type="text" class="form-control" name="thanksgiving" id="thanksgiving"><br>
                Pledges: <input type="text" class="form-control" name="pledges" id="pledges"><br>
               Others: <input type="text" class="form-control" name="others" id="others"><br>

                <span style="color: red">*</span>Currency: <select name="currency" class="form-control" required >
                    <option value="NGN">Naira ₦ </option>
                    <option value="USD">Dollars $ </option>
                    <option value="GBP">British Pounds £ </option>
                    <option value="EUR">Euros € </option>
                </select> <br/>
                <input type="submit" id="cmdsubmit"  class="btn btn-lg btn-danger" value="Continue >>>>">
            </form>
            <!--FORM ENDS-->
            <!--FORM ENDS-->
            <!--FORM ENDS-->
        </div>
    </div>




    <!-- panel-footer -->

    <div class="well">



        <h3 class="text-center">You can make transfer/wire to any of the below banks</h3>




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
