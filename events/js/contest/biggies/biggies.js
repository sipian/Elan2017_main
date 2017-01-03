$(document).ready(function(){$('body').on("click",".elan-e-jung",function(){$('.biggiesBigDiv').hide("slide",{direction:"up"},450,function(){$(".biggiesBigDiv").html(getBiggiesContent('elan-e-jung'));$('.biggiesBigDiv').show('slide',{direction:"down"},450);});window.history.pushState("","",'#elanejung');});if(window.location.href.indexOf("elanejung")>-1)
$(".biggiesBigDiv").html(getBiggiesContent('elan-e-jung'));$('body').on("click",".elan-e-jungButton",function(){if(track==0){alert('Please Sign In Before Registering');return;}
if(verified==2){alert('Please Verify Your Mail Id First');return;}
if(events.indexOf('elanejung')==-1){$.post("../registerEvent.php",{id:_id,email:email,elanId:elanId,contest:'elanejung'},function(result){if(result!="failure"){alert('Successfully registered for Elan E Jung');$('.elan-e-jungButton').html('UNREGISTER');events=result;}
else
alert('Some Error Ocurred While Registering');});}
else{$.post("../unregisterEvent.php",{id:_id,email:email,elanId:elanId,contest:'elanejung'},function(result){if(result!="failure"){alert('Successfully Deregistered from Elan E Jung');$('.elan-e-jungButton').html('REGISTER');events=result;}
else
alert('Some Error Ocurred While Deregistering');});}});$('body').on("click",".manthan",function(){$('.biggiesBigDiv').hide("slide",{direction:"up"},450,function(){$(".biggiesBigDiv").html(getBiggiesContent('manthan'));$('.biggiesBigDiv').show('slide',{direction:"down"},450);});window.history.pushState("","",'#manthan');});$('body').on("click",".manthanButton",function(){if(track==0){alert('Please Sign In Before Registering');return;}
if(verified==2){alert('Please Verify Your Mail Id First');return;}
if(events.indexOf('manthan')==-1){$.post("../registerEvent.php",{id:_id,email:email,elanId:elanId,contest:'manthan'},function(result){if(result!="failure"){alert('Successfully registered for Manthan');$('.manthanButton').html('UNREGISTER');events=result;}
else
alert('Some Error Ocurred While Registering');});}
else{$.post("../unregisterEvent.php",{id:_id,email:email,elanId:elanId,contest:'manthan'},function(result){if(result!="failure"){alert('Successfully Deregistered from Manthan');$('.manthanButton').html('REGISTER');events=result;}
else
alert('Some Error Ocurred While Deregistering');});}});if(window.location.href.indexOf("manthan")>-1)
$(".biggiesBigDiv").html(getBiggiesContent('manthan'));$('body').on("click",".campus_princess",function(){$('.biggiesBigDiv').hide("slide",{direction:"up"},450,function(){$(".biggiesBigDiv").html(getBiggiesContent('campus_princess'));$('.biggiesBigDiv').show('slide',{direction:"down"},450);});window.history.pushState("","",'#campus_princess');});$('body').on("click",".campus_princessButton",function(){if(track==0){alert('Please Sign In Before Registering');return;}
if(verified==2){alert('Please Verify Your Mail Id First');return;}
if(events.indexOf('campus_princess')==-1){$.post("../registerEvent.php",{id:_id,email:email,elanId:elanId,contest:'campus_princess'},function(result){if(result!="failure"){alert('Successfully registered for Campus Princess');$('.campus_princessButton').html('UNREGISTER');events=result;}
else
alert('Some Error Ocurred While Registering');});}
else{$.post("../unregisterEvent.php",{id:_id,email:email,elanId:elanId,contest:'campus_princess'},function(result){if(result!="failure"){alert('Successfully Deregistered from Campus Princess');$('.campus_princessButton').html('REGISTER');events=result;}
else
alert('Some Error Ocurred While Deregistering');});}});if(window.location.href.indexOf("campus_princess")>-1)
$(".biggiesBigDiv").html(getBiggiesContent('campus_princess'));$('body').on('click',"#backBiggies",function(){setTimeout(function(){changeBiggiesContent();$('.biggiesDiv').css("display","block");},50);});});
