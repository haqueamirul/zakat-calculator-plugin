
document.getElementById('cash_id').style.display = 'none';
function labelcheck() {
  if (document.getElementById('cash').checked) {
    document.getElementById('cash_id').style.display = 'block';
    document.getElementById('cash_id_new').style.display = 'block';
  } else {
    document.getElementById('cash_id').style.display = 'none';
    document.getElementById('cash_id_new').style.display = 'none';
  }
}

function pensionscheck() {
  if (document.getElementById('Pensions').checked) {
    document.getElementById('pensions_id').style.display = 'block';
    document.getElementById('cash_id_new').style.display = 'block';
  } else {
    document.getElementById('pensions_id').style.display = 'none';
    document.getElementById('cash_id_new').style.display = 'none';
  }
}

function moneyowedcheck() {
  if (document.getElementById('Money').checked) {
    document.getElementById('money_owed').style.display = 'block';
    document.getElementById('cash_id_new').style.display = 'block';
  } else {
    document.getElementById('money_owed').style.display = 'none';
    document.getElementById('cash_id_new').style.display = 'none';
  }
}

function goldsilvercheck() {
  if (document.getElementById('Gold').checked) {
    document.getElementById('gold_silver').style.display = 'block';
    document.getElementById('cash_id_new').style.display = 'block';
  } else {
    document.getElementById('gold_silver').style.display = 'none';
    document.getElementById('cash_id_new').style.display = 'none';
  }
}

function sharercheck() {
  if (document.getElementById('Shares').checked) {
    document.getElementById('my_share').style.display = 'block';
  } else {
    document.getElementById('my_share').style.display = 'none';
  }
}

function isacheck() {
  if (document.getElementById('trusts').checked) {
    document.getElementById('ISAs_trust').style.display = 'block';
  } else {
    document.getElementById('ISAs_trust').style.display = 'none';
  }
}

function cryptocurrencycheck() {
  if (document.getElementById('Crypto').checked) {
    document.getElementById('Cryptocurrency_id').style.display = 'block';
  } else {
    document.getElementById('Cryptocurrency_id').style.display = 'none';
  }
}

function businesscheck() {
  if (document.getElementById('assets').checked) {
    document.getElementById('business_assets').style.display = 'block';
  } else {
    document.getElementById('business_assets').style.display = 'none';
  }
}


function mortgagesscheck() {
  if (document.getElementById('mortgagess').checked) {
    document.getElementById('mortgage_new').style.display = 'block';
    document.getElementById('money_mortgage').style.display = 'block';
  } else {
    document.getElementById('mortgage_new').style.display = 'none';
    document.getElementById('money_mortgage').style.display = 'none';
  }
}

function utilitycheck() {
  if (document.getElementById('bills').checked) {
    document.getElementById('utility').style.display = 'block';
    document.getElementById('money_mortgage').style.display = 'block';
  } else {
    document.getElementById('utility').style.display = 'none';
    document.getElementById('money_mortgage').style.display = 'none';
  }
}

function personalloancheck() {
  if (document.getElementById('loans').checked) {
    document.getElementById('personalloan').style.display = 'block';
    document.getElementById('money_mortgage').style.display = 'block';
  } else {
    document.getElementById('personalloan').style.display = 'none';
    document.getElementById('money_mortgage').style.display = 'none';
  }
}

function overdraftcheck() {
  if (document.getElementById('Overdraft').checked) {
    document.getElementById('overdraft_id').style.display = 'block';
    document.getElementById('money_mortgage').style.display = 'block';
  } else {
    document.getElementById('overdraft_id').style.display = 'none';
    document.getElementById('money_mortgage').style.display = 'none';
  }
}

function creditcheck() {
  if (document.getElementById('Credit').checked) {
    document.getElementById('credit').style.display = 'block';
    document.getElementById('money_mortgage').style.display = 'block';
  } else {
    document.getElementById('credit').style.display = 'none';
    document.getElementById('money_mortgage').style.display = 'none';
  }
}

function busi_utilitycheck() {
  if (document.getElementById('liabilities').checked) {
    document.getElementById('busi_utility').style.display = 'block';
    document.getElementById('money_mortgage').style.display = 'block';
  } else {
    document.getElementById('busi_utility').style.display = 'none';
    document.getElementById('money_mortgage').style.display = 'none';
  }
}


function realestatecheck() {
  if (document.getElementById('realestate').checked) {
    document.getElementById('real_estate').style.display = 'block';
  } else {
    document.getElementById('real_estate').style.display = 'none';
  }
}

function live_stockcheck() {
  if (document.getElementById('live_stocks').checked) {
    document.getElementById('live_stock').style.display = 'block';
  } else {
    document.getElementById('live_stock').style.display = 'none';
  }
}



//helper function for getting 
function getValue(id) {
  var value = document.getElementById(id).value;
  if (value == "" || isNaN(value)) {
    return 0;
  } else {
    return parseFloat(value);
  }
}

function calculate() {

  // The price of about 3oz of gold
  var amt_nisab = 391.91; 
  var amt_home = getValue("cash_hand");
  var amt_cashbank = getValue("cash_bank");
  var amt_loan = getValue("load_amt");
  var amt_money_sale = getValue("money_sale");
  var amt_goldd = getValue("gold_amt");
  var amt_silver = getValue("silver_amt");
  var amt_share_bought = getValue("share_bought");
  var amt_share_reason = getValue("share_reason");
  var amt_isa_stock = getValue("isa_stock");
  var amt_isa_cash = getValue("isa_cash");
  var amt_cryptocurrency = getValue("cryptocurrency");
  var amt_business_cash = getValue("bsines_cash");
  var amt_business_recv = getValue("business_recv");
  var amt_business_stock = getValue("business_stock");
  var amt_real_estate = getValue("real_estates");
  var amt_livestock = getValue("livestock");
  var amt_cash_saving = getValue("cash_saving");
  var amt_stock_shares = getValue("stock_shares");
  var amt_cash_isa = getValue("cash_isa");


  // minus amounts
  var amt_mortgage = getValue("mortgage");
  var amt_utility_bill = getValue("utility_bill");
  var amt_personal_loan = getValue("personal_loan");
  var amt_overdraft = getValue("overdraft");
  var amt_credit_card = getValue("credit_card");
  var amt_business_liabilities = getValue("business_liabilities");



  var amt_bank = getValue("amount_bank");
  var amt_shares = getValue("amount_shares");
  var amt_merchandise = getValue("amount_merchandise");
  var amt_gold = getValue("amount_gold");
  var amt_property = getValue("amount_property");
  var amt_other = getValue("amount_other");
  var amt_debts = getValue("amount_debts");
  var amt_expenses = getValue("amount_expenses");
  
  // The sum of all of your different assets that you've had for the last
  // lunar year
  var amt_assets_gross = amt_home + amt_cashbank + amt_loan + amt_money_sale + amt_goldd + amt_silver + amt_share_bought + amt_share_reason + amt_isa_stock + amt_isa_cash + amt_cryptocurrency + amt_business_cash + amt_business_recv + amt_business_stock + amt_real_estate + amt_livestock + amt_cash_saving + amt_stock_shares + amt_cash_isa + amt_bank + amt_shares + amt_merchandise + amt_gold + amt_property + amt_other;
  
  // Gross assets minus the liabilities you have. Again these are typically
  // immediate liabilities. Not the totality of a large loan like a mortgage
  var total_liabilities = amt_mortgage + amt_utility_bill + amt_personal_loan + amt_overdraft + amt_credit_card + amt_business_liabilities + amt_debts + amt_expenses;

  var amt_assets_net = amt_assets_gross - total_liabilities; 
  var amt_eligable = 0; 

  // If this net amount is bigger than the nisab, then it's eligible
  // to have Zakat assessed against it
  if (amt_assets_net > amt_nisab ); {
    amt_eligable = Math.ceil(amt_assets_net);
  }

  // Zakat is 2.5% of ones eligible wealth if it above 
  // Nisab
  var amt_zakat = Math.ceil(amt_eligable * .025);

  var formatter = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'GBP',
  });

  // Write the values back for the user
  document.getElementById("amount_eligable").value = formatter.format(amt_eligable);
  document.getElementById("amount_zakat").value = formatter.format(amt_zakat);


  // If the user is eligible to contribute Zakat, set up a Funraise donation
  // button with their Zakat amount. Else, just ask them for a $50 one time donation
  if(amt_assets_gross > 0) {
    document.getElementById("total_assets").innerText = formatter.format(amt_assets_gross) + '';
    document.getElementById("total_assets").dataset.amount = amt_assets_gross;
  } else {
    document.getElementById("total_assets").text = 'Donate Now';
    document.getElementById("total_assets").dataset.amount = 50;
  }


  if(total_liabilities > 0) {
    document.getElementById("liabilities").innerText = formatter.format(total_liabilities) + 'Hello';
    document.getElementById("liabilities").dataset.amount = total_liabilities;
  } else {
    document.getElementById("liabilities").text = 'Donate Now';
    document.getElementById("liabilities").dataset.amount = 50;
  }

  if(amt_assets_net > 0) {
    document.getElementById("zakatable").innerText = formatter.format(amt_assets_net) + '';
    document.getElementById("zakatable").dataset.amount = amt_assets_net;
  } else {
    document.getElementById("zakatable").text = 'Donate Now';
    document.getElementById("zakatable").dataset.amount = 50;
  }

   if(total_liabilities > 0) {
      document.getElementById("less_amount").innerText = formatter.format(total_liabilities) + '';
      document.getElementById("less_amount").dataset.amount = total_liabilities;
    } else {
      document.getElementById("less_amount").text = 'Donate Now';
      document.getElementById("less_amount").dataset.amount = 50;
    }

  if(amt_zakat > 0) {
    document.getElementById("payable_zakat").innerText = formatter.format(amt_zakat) + '';
    document.getElementById("payable_zakat").dataset.amount = amt_zakat;
  } else {
    document.getElementById("payable_zakat").text = 'Donate Now';
    document.getElementById("payable_zakat").dataset.amount = 50;
  }


  if(amt_zakat > 0) {
    document.getElementById("donate_button").innerText = formatter.format(amt_zakat) + ' Zakat';
    document.getElementById("donate_button").dataset.amount = amt_zakat;
  } else {
    document.getElementById("donate_button").text = 'Donate Now';
    document.getElementById("donate_button").dataset.amount = 50;
  }

}

// All of your typical Funraise giving form setup stuff below
(function(f,u,n,r,a,i,s,e){var data={window:window,document:document,tag:"script",data:"funraise",orgId:f,uri:u,common:n,client:r,script:a};var scripts;var funraiseScript;data.window[data.data]=data.window[data.data]||[];if(data.window[data.data].scriptIsLoading||data.window[data.data].scriptIsLoaded)return;data.window[data.data].loading=true;data.window[data.data].push("init",data);scripts=data.document.getElementsByTagName(data.tag)[0];funraiseScript=data.document.createElement(data.tag);funraiseScript.async=true;funraiseScript.src=data.uri+data.common+data.script+"?orgId="+data.orgId;scripts.parentNode.insertBefore(funraiseScript,scripts)})('1e78fec4-8fd0-4a3e-b82b-866c29012531','https://assets-dev.funraise.io','/widget/common/2.0','/widget/client','/inject-form.js');

window.funraise.push('create', { form: 2426 });