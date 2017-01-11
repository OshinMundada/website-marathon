window.onload=function()
   {
    var fnameh=document.getElementById("ipfname");
    fnameh.addEventListener("blur",function() {
    
    if(fnameh.value=="")
     document.getElementById("fsname").style.visibility="visible";
    else if(fnameh.validity.patternMismatch==1)
    {
      document.getElementById("fsname").innerHTML="Accepts 2 to 30 alphabets , . ' -";
      document.getElementById("fsname").style.visibility="visible"; 
    }
    else
      document.getElementById("fsname").style.visibility="hidden";
   });
  

   var midnameh=document.getElementById("ipmidname");
    midnameh.addEventListener("blur",function() {
    if(midnameh.validity.patternMismatch==1)
      document.getElementById("midname").style.visibility="visible"; 
    else
      document.getElementById("midname").style.visibility="hidden";
   });
 

   var lsnameh=document.getElementById("iplsname");
   lsnameh.addEventListener("blur",function() {
    
    if(lsnameh.value=="")
     document.getElementById("lsname").style.visibility="visible";
   else if(lsnameh.validity.patternMismatch==1)
    {
      document.getElementById("lsname").innerHTML="Accepts 2 to 30 alphabets , . ' -";
      document.getElementById("lsname").style.visibility="visible"; 
    }
    else
      document.getElementById("lsname").style.visibility="hidden";
   });

   dobh=document.getElementById("ipdob");
   dobh.addEventListener("blur", function() {
    var str=document.forms["myForm"]["dob"].value;
    if(str=="")
      {
        document.getElementById("dobdiv").style.visibility="visible";
        return false;
      }
    else if(dobh.validity.patternMismatch==1)
    {
      document.getElementById("dobdiv").innerHTML="Must be in MM/DD/YYYY format";
      document.getElementById("dobdiv").style.visibility="visible";
      return false;
    }
    else
    {
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
        document.getElementById("dobdiv").innerHTML="Enter valid date";
        dobh.style.borderColor = "red";
        document.getElementById("dobdiv").style.visibility="visible"; 
        return false;
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
          document.getElementById("dobdiv").innerHTML="Age allowance between 10 to 80 only";
          dobh.style.borderColor = "red";
          document.getElementById("dobdiv").style.visibility="visible"; 
          return false;
          
        }
        else
        {
          document.getElementById("dobdiv").style.visibility="hidden";
          
        }

      }
    }
  });

  addrh=document.getElementById("addr1");
  addrh.addEventListener("blur",function () {
    if(document.forms["myForm"]["add1"].value=="")
     document.getElementById("adddiv1").style.visibility="visible";
    else
      document.getElementById("adddiv1").style.visibility="hidden";
  });

  cityh=document.getElementById("cityip");
  cityh.addEventListener("blur",function() {
    if(cityh.value=="")
     document.getElementById("citydiv").style.visibility="visible";
    else
      document.getElementById("citydiv").style.visibility="hidden";
  });

  statesh=document.getElementById("ipstates");
  statesh.addEventListener("blur", function() {
    if(statesh.value=="")
     document.getElementById("statediv").style.visibility="visible";
    else if(statesh.checkValidity==0)
    {
      document.getElementById("statediv").innerHTML="Select valid value";
      document.getElementById("statediv").style.visibility="visible";
    }
    else
      document.getElementById("statediv").style.visibility="hidden";
  });

  ziph=document.getElementById("zipid");
  ziph.addEventListener("blur", function() {
    if(ziph.value=="")
     document.getElementById("zipdiv").style.visibility="visible";
   else if(ziph.validity.patternMismatch==1)
    {
      document.getElementById("zipdiv").innerHTML="Must be 5 digit number";
      document.getElementById("zipdiv").style.visibility="visible"; 
    }
    else
      document.getElementById("zipdiv").style.visibility="hidden";
  });


  mailh=document.getElementById("mailid");
  mailh.addEventListener("blur", function() {
    if(mailh.value=="")
     document.getElementById("maildiv").style.visibility="visible";
   else if(mailh.validity.valid==0)
    {
      document.getElementById("maildiv").innerHTML="Enter a valid mail id";
      document.getElementById("maildiv").style.visibility="visible"; 
    }
    else
      document.getElementById("maildiv").style.visibility="hidden";
  });

  phoneh=document.getElementById("mobi3");
  phoneh.addEventListener("blur", function() {
    var p1=document.forms["myForm"]["mob1"].value;
    var p2=document.forms["myForm"]["mob2"].value;
    var p3=document.forms["myForm"]["mob3"].value;
    var w1=document.getElementById("mobi1").validity.patternMismatch;
    var w2=document.getElementById("mobi2").validity.patternMismatch;
    var w3=phoneh.validity.patternMismatch;
    if(p1==""||p2==""||p3=="")
     document.getElementById("phonediv").style.visibility="visible";
   else if(w1==1 || w2==1 || w3==1)
    {
      document.getElementById("phonediv").innerHTML="Enter a valid phone number";
      document.getElementById("phonediv").style.visibility="visible"; 
    }
    else
      document.getElementById("phonediv").style.visibility="hidden";
  });

   submith=document.getElementById("subbut");
   submith.addEventListener("click", function() {
    var gencheck=document.getElementsByName("gender");
    var gen=false;
    var i=0;
    while (!gen && i < gencheck.length)
    {
        if (gencheck[i].checked) 
          gen = true;
        i++;        
    }
    if (!gen) 
      document.getElementById("genrad").style.visibility="visible";
    else
      document.getElementById("genrad").style.visibility="hidden";

    var expcheck=document.getElementsByName("explevel");
    var exp=false;
    var j=0;
    while (!exp && j < expcheck.length)
    {
        if (expcheck[j].checked) 
          exp = true;
        j++;        
    }
    if (!exp) 
      document.getElementById("expdiv").style.visibility="visible";
    else
      document.getElementById("expdiv").style.visibility="hidden";

    var catcheck=document.getElementsByName("category");
    var cat=false;
    var k=0;
    while (!cat && k < catcheck.length)
    {
        if (catcheck[k].checked) 
          cat = true;
        k++;        
    }
    if (!cat) 
      document.getElementById("catdiv").style.visibility="visible";
    else
      document.getElementById("catdiv").style.visibility="hidden";

   });
 }