<?php 
/**
 * Plugin Name:       EH Zakat Calculator
 * Plugin URI:        https://wordpress.org/plugins/eh-zakat-calculator/
 * Description:       It is a simple and easy way to know how to fulfill the obligation of Zakah. Just enter the amount of money and you will get the amount you should give out.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Emran Hoque
 * Author URI:        https://emranhoque.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       ehzakat
 * Domain Path:       /languages
 */


 /**
 * Proper way to enqueue styles
 */
function ehzakat_enqueue_style() {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' );
    wp_enqueue_style( 'googleapis', 'https://fonts.googleapis.com' );
    wp_enqueue_style( 'gstatic', 'https://fonts.gstatic.com' );
    wp_enqueue_style( 'Barlow', 'https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,500;1,400&display=swap' );
    wp_enqueue_style( 'Barlow', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap' );
    // wp_enqueue_style( 'Montserrat', plugins_url( 'css/zakat.css', __FILE__ ) );
    wp_enqueue_style( 'custom', plugins_url( 'css/custom.css', __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'ehzakat_enqueue_style' );

/**
 * Proper way to enqueue scripts
 */
function ehzakat_enqueue_scripts() {
    wp_enqueue_script( 'jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', '1.0.0', true );
    wp_enqueue_script( 'bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', '1.0.0', true );
    wp_enqueue_script( 'custom', plugins_url( 'js/custom.js', __FILE__ ), array(), '1.0.0', true );
    wp_enqueue_script( 'zakat', plugins_url( 'js/zakat.js', __FILE__ ), array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'ehzakat_enqueue_scripts' );


function ehcal_zakat_calculator($atts){ ?>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2 id="heading">Zakat Calculator</h2>
                    <p>Please select the options that you think may apply to you. If you're not sure about an option, select it anyway and more information will follow to help you decide.</p>
                    <form id="msform">
                            <div class="form-card">
                                <h2>What I Own</h2>
                                <div class="whatiown mt-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input class="radio-cash" type="checkbox" name="exampleRadios" id="cash" value="option1" onClick="labelcheck()">
                                                <label class="radio-label" id="exampleRadios1" for="cash">
                                                    Cash
                                                </label>
                                                <br>
                                                <input class="radio-cash" type="checkbox" name="exampleRadios" id="Money" value="option1" onClick="moneyowedcheck()">
                                                <label class="radio-label" id="exampleRadios1" for="Money">
                                                    Money owed to me  
                                                </label>
                                                <br>
                                                <input class="radio-cash" type="checkbox" name="exampleRadios" id="Gold" value="option1" onClick="goldsilvercheck()">
                                                <label class="radio-label" id="exampleRadios1" for="Gold">
                                                    Gold and Silver   
                                                </label>
                                                <br>
                                                <input class="radio-cash" type="checkbox" name="exampleRadios" id="Shares" value="option1" onClick="sharercheck()">
                                                <label class="radio-label" id="exampleRadios1" for="Shares">
                                                    Shares 
                                                </label>
                                                <br>
                                                <input class="radio-cash" type="checkbox" name="exampleRadios" id="realestate" value="option1" onClick="realestatecheck()">
                                                <label class="radio-label" id="exampleRadios1" for="realestate">
                                                    Real Estate 
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="radio-cash" type="checkbox" name="exampleRadios" id="Pensions" value="option1" onClick="pensionscheck()">
                                                <label class="radio-label" id="exampleRadios1" for="Pensions">
                                                    Pensions
                                                </label>
                                                <br>
                                                <input class="radio-cash" type="checkbox" name="exampleRadios" id="trusts" value="option1" onClick="isacheck()">
                                                <label class="radio-label" id="exampleRadios1" for="trusts" >
                                                    ISAs and trusts  
                                                </label>
                                                <br>
                                                <input class="radio-cash" type="checkbox" name="exampleRadios" id="Crypto" value="option1" onClick="cryptocurrencycheck()">
                                                <label class="radio-label" id="exampleRadios1" for="Crypto">
                                                    Crypto  
                                                </label>
                                                <br>
                                                <input class="radio-cash" type="checkbox" name="exampleRadios" id="assets" value="option1" onClick="businesscheck()">
                                                <label class="radio-label" id="exampleRadios1" for="assets">
                                                    Business assets  
                                                </label>
                                                <br>
                                                <input class="radio-cash" type="checkbox" name="exampleRadios" id="live_stocks" value="option1" onClick="live_stockcheck()">
                                                <label class="radio-label" id="exampleRadios1" for="live_stocks">
                                                    Live stock and Land 
                                                </label>
                                            </div>
                                        </div>
                                </div>

                                <h2 class="mt-5">My Liabilities</h2>
                                <div class="whatiown mt-3 mb-5">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input class="radio-cash" type="checkbox" name="exampleRadios" id="mortgagess" value="option1" onClick="mortgagesscheck()">
                                            <label class="radio-label" id="exampleRadios1" for="mortgagess">
                                                Mortgage 
                                            </label>
                                            <br>
                                            <input class="radio-cash" type="checkbox" name="exampleRadios" id="loans" value="option1" onClick="personalloancheck()">
                                            <label class="radio-label" id="exampleRadios1" for="loans">
                                                Personal loans   
                                            </label>
                                            <br>
                                            <input class="radio-cash" type="checkbox" name="exampleRadios" id="Credit" value="option1" onClick="creditcheck()">
                                            <label class="radio-label" id="exampleRadios1" for="Credit">
                                                Credit card    
                                            </label>

                                        </div>
                                        <div class="col-md-6">
                                            <input class="radio-cash" type="checkbox" name="exampleRadios" id="bills" value="option1" onClick="utilitycheck()">
                                            <label class="radio-label" id="exampleRadios1" for="bills">
                                                Outstanding Utility bills 
                                            </label>
                                            <br>
                                            <input class="radio-cash" type="checkbox" name="exampleRadios" id="Overdraft" value="option1" onClick="overdraftcheck()">
                                            <label class="radio-label" id="exampleRadios1" for="Overdraft">
                                                Overdraft  
                                            </label>
                                            <br>
                                            <input class="radio-cash" type="checkbox" name="exampleRadios" id="liabilities" value="option1" onClick="busi_utilitycheck()">
                                            <label class="radio-label" id="exampleRadios1" for="liabilities">
                                                Business liabilities   
                                            </label>

                                        </div>
                                    </div>
                                </div>

                                <a href="#cash_id"><button type="button" class="btn btn-primary btn-lg">Start Calculation</button></a>

                                <div id="cash_id" style="margin-top: 220px;">
                                    <h2>My Cash</h2>
                                    <p style="border-bottom: 2px dotted;padding-bottom: 20px;border-color: #86cbc9;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum ad temporibus dolor rem ex, eveniet eum? Doloribus, fugiat. Laborum nesciunt quos corporis enim eos ut hic, dicta animi eveniet atque?</p>

                                    <label for="cash_hand">Cash in hand</label>
                                    <input id="cash_hand" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>

                                    <label for="cash_bank">Cash in current accounts</label>
                                    <input id="cash_bank" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>

                                    <label for="cash_saving">Cash in saving</label>
                                    <input id="cash_saving" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>

                                    <label for="stock_shares">Stock & shares ISA/CTF</label>
                                    <input id="stock_shares" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>

                                    <label for="cash_isa">Cash ISA</label>
                                    <input id="cash_isa" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>




                                    <!-- <label for="amount_bank">Bank Account Balance</label> -->
                                    <input id="amount_bank" step="any" type="hidden" onchange="calculate()"/>

                                    <!-- <label for="amount_shares">Cash value of Stocks and Equities</label> -->
                                    <input id="amount_shares" step="any" type="hidden" onchange="calculate()"/>

                                    <!-- <label for="amount_merchandise">Profits &amp; Inventory</label> -->
                                    <input id="amount_merchandise" step="any" type="hidden" onchange="calculate()"/>


                                    <!-- <label for="amount_gold">Gold &amp; Silver</label> -->
                                    <input id="amount_gold" step="any" type="hidden" onchange="calculate()"/>


                                    <!-- <label for="">Investment Property</label> -->
                                    <input id="amount_property" step="any" type="hidden" onchange="calculate()">

                                    <!-- <label for="">Debts</label> -->
                                    <input id="amount_debts" step="any" type="hidden" onchange="calculate()">

                                    <!-- <label for="">Expenses</label> -->
                                    <input id="amount_expenses" step="any" type="hidden" onchange="calculate()">

                                    <!-- <label for="">Amount Eligible For Zakat</label> -->
                                    <input id="amount_eligable" type="hidden" readonly="readonly" onchange="calculate()">

                                    <!-- <label for="">Your Zakat Total (2.5% of Eligible Amount)</strong></label> -->
                                    <input id="amount_zakat" type="hidden" readonly="readonly">

                                    <!-- <a href="#pensions_id"><button type="button" class="btn btn-primary btn-lg">Continue</button></a> -->

                                </div>

                                <div id="money_owed" style="margin-top: 80px;">
                                    <h2>Money owed to me</h2>
                                    <p style="border-bottom: 2px dotted;padding-bottom: 20px;border-color: #86cbc9;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum ad temporibus dolor rem ex, eveniet eum? Doloribus, fugiat. Laborum nesciunt quos corporis enim eos ut hic, dicta animi eveniet atque?</p>

                                    <label for="load_amt">Loan</label>
                                    <input id="load_amt" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>

                                    <label for="money_sale">Money expected from a sale</label>
                                    <input id="money_sale" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>


                                </div>

                                <div id="gold_silver" style="margin-top: 80px;">
                                    <h2>My Gold & Silver</h2>
                                    <p style="border-bottom: 2px dotted;padding-bottom: 20px;border-color: #86cbc9;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum ad temporibus dolor rem ex, eveniet eum? Doloribus, fugiat. Laborum nesciunt quos corporis enim eos ut hic, dicta animi eveniet atque?</p>

                                    <label for="gold_amt">Gold</label>
                                    <input id="gold_amt" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>

                                    <label for="silver_amt">Silver</label>
                                    <input id="silver_amt" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>


                                </div>

                                <div id="my_share" style="margin-top: 80px;">
                                    <h2>My shares</h2>
                                    <p style="border-bottom: 2px dotted;padding-bottom: 20px;border-color: #86cbc9;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum ad temporibus dolor rem ex, eveniet eum? Doloribus, fugiat. Laborum nesciunt quos corporis enim eos ut hic, dicta animi eveniet atque?</p>

                                    <label for="share_bought">Shares bought exclusively to resell for capital gain</label>
                                    <input id="share_bought" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>

                                    <label for="share_reason">Shares bought for any other reason</label>
                                    <input id="share_reason" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>


                                </div>

                                <div id="real_estate" style="margin-top: 80px;">
                                    <h2>Real Estate</h2>
                                    <p style="border-bottom: 2px dotted;padding-bottom: 20px;border-color: #86cbc9;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum ad temporibus dolor rem ex, eveniet eum? Doloribus, fugiat. Laborum nesciunt quos corporis enim eos ut hic, dicta animi eveniet atque?</p>

                                    <label for="real_estates">Amount</label>
                                    <input id="real_estates" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>

                                </div>

                                <div id="pensions_id" style="margin-top: 80px;">
                                    <h2>My pensions</h2>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum ad temporibus dolor rem ex, eveniet eum? Doloribus, fugiat. Laborum nesciunt quos corporis enim eos ut hic, dicta animi eveniet atque?</p>

                                    <label for="">pensions amount</label>
                                    <input id="amount_other" step="any" type="number" placeholder="Enter amount" onchange="calculate()">
                                </div>

                                <div id="ISAs_trust" style="margin-top: 80px;">
                                    <h2>My ISAs, Junior ISAs & Child Trust Funds</h2>
                                    <p style="border-bottom: 2px dotted;padding-bottom: 20px;border-color: #86cbc9;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum ad temporibus dolor rem ex, eveniet eum? Doloribus, fugiat. Laborum nesciunt quos corporis enim eos ut hic, dicta animi eveniet atque?</p>

                                    <label for="isa_stock">Stocks & shares ISA/CTF</label>
                                    <input id="isa_stock" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>

                                    <label for="isa_cash">Cash ISA</label>
                                    <input id="isa_cash" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>


                                </div>

                                <div id="Cryptocurrency_id" style="margin-top: 80px;">
                                    <h2>My Crypto</h2>
                                    <p style="border-bottom: 2px dotted;padding-bottom: 20px;border-color: #86cbc9;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum ad temporibus dolor rem ex, eveniet eum? Doloribus, fugiat. Laborum nesciunt quos corporis enim eos ut hic, dicta animi eveniet atque?</p>

                                    <label for="cryptocurrency">Cryptocurrency value</label>
                                    <input id="cryptocurrency" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>

                                </div>

                                <div id="business_assets" style="margin-top: 80px;">
                                    <h2>My business assets</h2>
                                    <p style="border-bottom: 2px dotted;padding-bottom: 20px;border-color: #86cbc9;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum ad temporibus dolor rem ex, eveniet eum? Doloribus, fugiat. Laborum nesciunt quos corporis enim eos ut hic, dicta animi eveniet atque?</p>

                                    <label for="bsines_cash">Cash</label>
                                    <input id="bsines_cash" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>

                                    <label for="business_recv">Receivables</label>
                                    <input id="business_recv" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>

                                    <label for="business_stock">Stock</label>
                                    <input id="business_stock" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>


                                </div>

                                <div id="live_stock" style="margin-top: 80px;">
                                    <h2>Live stock and Land</h2>
                                    <p style="border-bottom: 2px dotted;padding-bottom: 20px;border-color: #86cbc9;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum ad temporibus dolor rem ex, eveniet eum? Doloribus, fugiat. Laborum nesciunt quos corporis enim eos ut hic, dicta animi eveniet atque?</p>

                                    <label for="livestock">Live stock and Land Amount</label>
                                    <input id="livestock" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>


                                </div>

                                <div id="money_mortgage" style="margin-top: 80px;">
                                    <h2>Money I owe</h2>
                                    <p style="border-bottom: 2px dotted;padding-bottom: 20px;border-color: #86cbc9;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum ad temporibus dolor rem ex, eveniet eum? Doloribus, fugiat. Laborum nesciunt quos corporis enim eos ut hic, dicta animi eveniet atque?</p>

                                    <div class="row">
                                        <div class="col-md-6" id="mortgage_new">
                                            <label for="mortgage">Mortgage</label>
                                            <input id="mortgage" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>
                                        </div>
                                        <div class="col-md-6" id="utility">
                                            <label for="utility_bill">Utility bills</label>
                                            <input id="utility_bill" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>
                                        </div>
                                        <div class="col-md-6" id="personalloan">
                                            <label for="personal_loan">Personal loans</label>
                                            <input id="personal_loan" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>
                                        </div>
                                        <div class="col-md-6" id="overdraft_id">
                                            <label for="overdraft">Overdraft</label>
                                            <input id="overdraft" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>
                                        </div>
                                        <div class="col-md-6" id="credit">
                                            <label for="credit_card">Credit card</label>
                                            <input id="credit_card" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>
                                        </div>
                                        <div class="col-md-6" id="busi_utility">
                                            <label for="business_liabilities">Business liabilities</label>
                                            <input id="business_liabilities" step="any" type="number" placeholder="Enter amount" onchange="calculate()"/>
                                        </div>

                                    </div>

                                </div>

                                <div class="who mt-5 text-center" id="cash_id_new">
                                    <h4 class="mb-3">Who Can I Give My Zakat To?</h4>
                                    <a href="#"><button type="button" class="btn btn-primary btn-lg">Click here</button></a>
                                </div>
                                
                            </div> 
                    </form>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="side">
                    <div class="row">
                        <h4>Today Nisab Is: <span style="padding-left: 20px;">£ 391.91</span></h4>
                        <!-- <div class="col-md-6">
                            <h4>Gold Nisab</h4>
                            <p>£ 4,142</p>
                            <p>(87.48g)</p>
                        </div>
                        <div class="col-md-6">
                            <h4>Silver Nisab</h4>
                            <p>£ 373</p>
                            <p>(612.36g)</p>
                        </div> -->
                        <span>Nisab values are updated regularly</span>
                        <hr>
                        <h3>Your Zakat summary</h3>
                        <table class="table table-borderless">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>

                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th>What I have: </th>
                                <td id="total_assets" style="text-align: end;">£ 00</td>
                              </tr>
                              <tr>
                                <th scope="row">Minus what I owe:</th>
                                <td id="less_amount" style="text-align: end;">£ 00</td>
                              </tr>
                              <tr>
                                <th scope="row">Equals Total Zakatable:</th>
                                <td id="zakatable" style="text-align: end;">£ 00 </td>
                              </tr>
                              <tr>
                                <th scope="row">So my Zakat (2.5%) is: </th>
                                <td id="payable_zakat" style="text-align: end;">£ 00</td>
                              </tr>
                            </tbody>
                          </table>
                          <button id="donate_button" type="button" aria-label="Donate" data-amount="50" data-formId="2426" style="padding: 12px 35px; font-size: 18px; border-radius: 8px; margin: 0px auto; background-color: #86cbc9; color: #fff; border: none; outline: none; cursor: pointer; display: block">Your Zakat</button>  
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
}
add_shortcode('zakatcal','ehcal_zakat_calculator');


?>