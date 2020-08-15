function changeStatus1() {
  var status = document.getElementById("Speech_Therapy");
  if(status.value == "Yes") {
    document.getElementById("Speech_Therapy_text").style.visibility="";
  }
  else {
    document.getElementById("Speech_Therapy_text").style.visibility="hidden";
  }
}
function changeStatus2() {
  var status = document.getElementById("Expressing_option");
  if(status.value == "Yes") {
    document.getElementById("Expressing_text").style.visibility="";
  }
  else {
    document.getElementById("Expressing_text").style.visibility="hidden";
  }
}
function changeStatus3() {
  var status = document.getElementById("Understand_option");
  if(status.value == "Yes") {
    document.getElementById("Understand_text").style.visibility="";
  }
  else {
    document.getElementById("Understand_text").style.visibility="hidden";
  }
}
function changeStatus4() {
  var status = document.getElementById("Remember_option");
  if(status.value == "Yes") {
    document.getElementById("Remember_text").style.visibility="";
  }
  else {
    document.getElementById("Remember_text").style.visibility="hidden";
  }
}
function changeStatus5() {
  var status = document.getElementById("find_option");
  if(status.value == "Yes") {
    document.getElementById("find_text").style.visibility="";
  }
  else {
    document.getElementById("find_text").style.visibility="hidden";
  }
}
function changeStatus6() {
  var status = document.getElementById("read_option");
  if(status.value == "Yes") {
    document.getElementById("read_text").style.visibility="";
  }
  else {
    document.getElementById("read_text").style.visibility="hidden";
  }
}
function changeStatus7() {
  var status = document.getElementById("change_option");
  if(status.value == "Yes") {
    document.getElementById("change_text").style.visibility="";
  }
  else {
    document.getElementById("change_text").style.visibility="hidden";
  }
}
function changeStatus8() {
  var status = document.getElementById("hear_option");
  if(status.value == "Yes") {
    document.getElementById("hear_text").style.visibility="";
  }
  else {
    document.getElementById("hear_text").style.visibility="hidden";
  }
}
function changeStatus9() {
  var status = document.getElementById("apra_option");
  if(status.value == "Yes") {
    document.getElementById("apra_text").style.visibility="";
  }
  else {
    document.getElementById("apra_text").style.visibility="hidden";
  }
}
function changeStatus10() {
  var status = document.getElementById("dysa_option");
  if(status.value == "Yes") {
    document.getElementById("dysa_text").style.visibility="";
  }
  else {
    document.getElementById("dysa_text").style.visibility="hidden";
  }
}
function changeStatus11() {
  var status = document.getElementById("dis_option");
  if(status.value == "Yes") {
    document.getElementById("dis_text").style.visibility="";
  }
  else {
    document.getElementById("dis_text").style.visibility="hidden";
  }
}
function changeStatus12() {
  var status = document.getElementById("stim_option");
  if(status.value == "Yes") {
    document.getElementById("stim_text").style.visibility="";
  }
  else {
    document.getElementById("stim_text").style.visibility="hidden";
  }
}
function changeStatus13() {
  var status = document.getElementById("dysf_option");
  if(status.value == "Mid") {
    document.getElementById("dysf_text").style.visibility="";
  }
  else if(status.value == "Several") {
    document.getElementById("dysf_text").style.visibility="";
  }
  else if(status.value == "Moderate") {
    document.getElementById("dysf_text").style.visibility="";
  }
  else {
    document.getElementById("dysf_text").style.visibility="hidden";
  }
}
function changeStatus14() {
  var status = document.getElementById("secon_option");
  if(status.value == "Yes") {
    document.getElementById("secon_text").style.visibility="";
  }
  else {
    document.getElementById("secon_text").style.visibility="hidden";
  }
}
function changeStatus15() {
  var status = document.getElementById("vol_option");
  if(status.value == "Yes") {
    document.getElementById("vol_text").style.visibility="";
  }
  else {
    document.getElementById("vol_text").style.visibility="hidden";
  }
}
function changeStatus16() {
  var status = document.getElementById("Qual_option");
  if(status.value == "Yes") {
    document.getElementById("Qual_text").style.visibility="";
  }
  else {
    document.getElementById("Qual_text").style.visibility="hidden";
  }
}
function changeStatus17() {
  var status = document.getElementById("reso_option");
  if(status.value == "Yes") {
    document.getElementById("reso_text").style.visibility="";
  }
  else {
    document.getElementById("reso_text").style.visibility="hidden";
  }
}
function changeStatus18() {
  var status = document.getElementById("pit_option");
  if(status.value == "Yes") {
    document.getElementById("pit_text").style.visibility="";
  }
  else {
    document.getElementById("pit_text").style.visibility="hidden";
  }
}
function myFunction() {
  var b = document.getElementById("st_option").checked;
  var r = confirm("By checking this box you are indicating that you will be discharging the patient in the next few visits and the office will not be requesting more authorization.");
  if (r == true) {
    if (b) {
      document.getElementById("st_option").checked = true;
      document.getElementById("week_option").style.visibility="hidden";
      document.getElementById("freq_option").style.visibility="hidden";
    }
    else if (b == false) {
      document.getElementById("st_option").checked = false;
      document.getElementById("week_option").style.visibility="";
      document.getElementById("freq_option").style.visibility="";
    }

  }
}
