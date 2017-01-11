$(document).ready(function() {						
	var fnamemsg = $('#fsname');
	var fnameh = $('input[name="firstname"]');	
	fnameh.on('blur',function() {
	if(fnameh.val().length === 0)
	{
		fnamemsg.text("This field is required");
		fnamemsg.css("visibility","visible");
	}
	else if(fnameh.prop("validity").patternMismatch)
	{
		fnamemsg.text("Accepts 2 to 30 alphabets , . ' -");
		fnamemsg.css("visibility","visible");
	}
	else
		fnamemsg.css("visibility","hidden");
	});

	var mnamemsg = $('#midname');
	var mnameh = $('input[name="middlename"]');	
	mnameh.on('blur',function() {
	if(mnameh.prop("validity").patternMismatch)
	{
		mnamemsg.text("Accepts 2 to 30 alphabets , . ' -");
		mnamemsg.css("visibility","visible");
	}
	else
		mnamemsg.css("visibility","hidden");
	});

	var lnamemsg = $('#lsname');
	var lnameh = $('input[name="lastname"]');	
	lnameh.on('blur',function() {
	if(lnameh.val().length === 0)
	{
		lnamemsg.text("This field is required");
		lnamemsg.css("visibility","visible");
	}
	else if(lnameh.prop("validity").patternMismatch)
	{
		lnamemsg.text("Accepts 2 to 30 alphabets , . ' -");
		lnamemsg.css("visibility","visible");
	}
	else
		lnamemsg.css("visibility","hidden");
	});

	var dobmsg = $('#dobdiv');
	var dobh = $('input[name="dob"]');	
	var dobfail = false;
	dobh.on('blur',function() {
	if(dobh.val().length === 0)
	{
		dobmsg.text("This field is required");
		dobmsg.css("visibility","visible");
		dobfail=false;
	}
	else if(dobh.prop("validity").patternMismatch)
	{
		dobmsg.text("Must be in MM/DD/YYYY format");
		dobmsg.css("visibility","visible");
		dobfail=false;
	}
	else
	{
	  var str=dobh.val();
	  var month=str.charAt(0)+str.charAt(1);
      var day=str.charAt(3)+str.charAt(4);
      var year=str.charAt(6)+str.charAt(7)+str.charAt(8)+str.charAt(9);
      var validDate=0;
      if(month>=1 && month<=12)
      {
        if(month==2 && day>=1 && day<=28 && year%4!=0)
          validDate=1;
        else if(month==2 && day>=1 && day<=29 && year%4==0)
          validDate=1;
        else if((month==1||month==3||month==5||month==7||month==8||month==10||month==12) && day>=1 && day<=31)
          validDate=1;
        else if((month==4||month==6||month==9||month==11) && day>=1 && day<=31)
          validDate=1;  
      }
      if(validDate==0)
      {
        dobmsg.text("Enter valid date");
        dobh.addClass("borderClass");
        dobmsg.css("visibility","visible");
        dobfail=false;
      }
      else
      {
        var validAge=0;
        var today = new Date();
        var age = today.getFullYear() - year;
        var m = today.getMonth() - month;
        if (m < 0 || (m === 0 && today.getDate() < day)) 
        age--;

        if(age>=10 && age<=80)
          validAge=1;

        if(validAge==0)
        {
        	dobmsg.text("Age allowance between 10 to 80 only");
        	dobh.addClass("borderClass");
        	dobmsg.css("visibility","visible");
        	dobfail=false;
        }
        else
        {
         	dobmsg.css("visibility","hidden");
         	dobh.removeClass("borderClass");
          	dobfail=true;
        }
	  }
	}
  	});

	var picmsg = $('#picdiv');
	var pich = $('input[name="file"]');
	pich.on('blur',function() {
		if(pich.val().length === 0)
	{
		picmsg.text("This field is required");
		picmsg.css("visibility","visible");
	}
	else
		picmsg.css("visibility","hidden");
	});

  	var addrmsg = $('#adddiv1');
	var addrh = $('input[name="add1"]');	
	addrh.on('blur',function() {
	if(addrh.val().length === 0)
	{
		addrmsg.text("This field is required");
		addrmsg.css("visibility","visible");
	}
	else
		addrmsg.css("visibility","hidden");
	});

	var citymsg = $('#citydiv');
	var cityh = $('input[name="city"]');	
	cityh.on('blur',function() {
	if(cityh.val().length === 0)
	{
		citymsg.text("This field is required");
		citymsg.css("visibility","visible");
	}
	else
		citymsg.css("visibility","hidden");
	});

	var statemsg = $('#statediv');
	var stateh = $('input[name="states"]');	

	stateh.on('blur',function() {
	if(stateh.val().length === 0)
	{
		statemsg.text("This field is required");
		statemsg.css("visibility","visible");
	}
	else if(!(stateh.val() == 'AK' || 'AL' || 'AR' || 'AZ' || 'CA' || 'CO' || 'CT'|| 'DC'|| 'DE'|| 'FL'|| 'GA'|| 'HI'|| 'IA'|| 'ID'|| 'IL'|| 'IN'|| 'KS'|| 'KY'|| 'LA'|| 'MA'|| 'MD'|| 'ME'|| 'MI'|| 'MN'|| 'MO'|| 'MS'|| 'MT'|| 'NC'|| 'ND'|| 'NE'|| 'NH'|| 'NJ'|| 'NM'|| 'NV'|| 'NY'|| 'OH'|| 'OK'|| 'OR'|| 'PA'|| 'RI'|| 'SC'|| 'SD'|| 'TN'|| 'TX'|| 'UT'|| 'VA'|| 'VT'|| 'WA'|| 'WI'|| 'WV'|| 'WY')) 
	{
		statemsg.text("Please select a valid state");
		statemsg.css("visibility","visible");
		stafail=false;
	}
	else
	{
		statemsg.css("visibility","hidden");
		stafail=true;
	}
	});	

	var zipmsg = $('#zipdiv');
	var ziph = $('input[name="zipcode"]');	
	ziph.on('blur',function() {
	if(ziph.val().length === 0)
	{
		zipmsg.text("This field is required");
		zipmsg.css("visibility","visible");
	}
	else if(ziph.prop("validity").patternMismatch)
	{
		zipmsg.text("Must be 5 digit number.");
		zipmsg.css("visibility","visible");
	}
	else
		zipmsg.css("visibility","hidden");
	});

	var mailmsg = $('#maildiv');
	var mailh = $('input[name="email"]');	
	mailh.on('blur',function() {
	if(mailh.val().length === 0)
	{
		mailmsg.text("This field is required");
		mailmsg.css("visibility","visible");
	}
	else if(mailh.prop("validity").valid == 0)
	{
		mailmsg.text("Enter valid e-mail.");
		mailmsg.css("visibility","visible");
	}
	else
		mailmsg.css("visibility","hidden");
	});

	var p1 = $('input[name="mob1"]');	
	var p2 = $('input[name="mob2"]');	
	var p3 = $('input[name="mob3"]');	
	var phonemsg = $('#phonediv');
	p3.on('blur', function() {
    var w1=p1.prop("validity").patternMismatch;
    var w2=p2.prop("validity").patternMismatch;
    var w3=p3.prop("validity").patternMismatch;
    if(p1.val()==""||p2.val()==""||p3.val()=="")
     phonemsg.css("visibility","visible");
   else if(w1==1 || w2==1 || w3==1)
    {
      phonemsg.text("Enter a valid phone number");
      phonemsg.css("visibility","visible");
    }
    else
      phonemsg.css("visibility","hidden");
  });

	var submith = $("#subbut");
	submith.on('click', function(e) {
	var genmsg = $("#genrad");
	var gencheck = $('input[name="gender"]');
    var gen=false;
    var i=0;
    while (!gen && i < gencheck.length)
    {
        if (gencheck[i].checked) 
          gen = true;
        i++;        
    }
    if (!gen) 
      genmsg.css("visibility","visible");
    else
      genmsg.css("visibility","hidden");

  	var expmsg = $("#expdiv");
	var expcheck = $('input[name="explevel"]');
    var exp=false;
    var i=0;
    while (!exp && i < expcheck.length)
    {
        if (expcheck[i].checked) 
          exp = true;
        i++;        
    }
    if (!exp) 
      expmsg.css("visibility","visible");
    else
      expmsg.css("visibility","hidden");

  	var catmsg = $("#catdiv");
	var catcheck = $('input[name="category"]');
    var cat=false;
    var i=0;
    while (!cat && i < catcheck.length)
    {
        if (catcheck[i].checked) 
          cat = true;
        i++;        
    }
    if (!cat) 
      catmsg.css("visibility","visible");
    else
      catmsg.css("visibility","hidden");

	
  	if((dobfail == false)||(stafail == false))
		{	e.preventDefault();
			return false;
		}	
	else {	
		alert("Inside");
		VerifyDup();

       }

	});

	 function VerifyDup() {      
	 alert("verifying");    
        var params = "email=" + $('input[name="email"]').val();
        var url="userexists.php?"+params;
        alert("here");
        $.get(url, function(response) {
        	alert(response);
    		if(response == "dup") {
        		$('#useravail').text("ERROR, the record appears to be a duplicate");
    		}
    		else if(response == "OK") {
        		$('#formmy').serialize();
        		$('#formmy').submit();
        	}
    		else {
        		alert(response);
    		}
    	});
	}
});