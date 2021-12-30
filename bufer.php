var length_arr = document.getElementsByName('tip_izdel').length;
var tip_izdel = [];
var kol_izdel = [];
for (var  a = 0; a < length_arr; a++) {
  tip_izdel[a] = document.getElementsByName('tip_izdel')[a].value;
  kol_izdel[a] = document.getElementById('input_dogovor_kol')[a].value;
  var proverka = kol_izdel[a].match(/\D+/g);
  if (tip_izdel[a] == 0 || kol_izdel[a] == 0) {
    error = "Вы оставили какое-либо поле пустым";
    document.getElementById('error').innerHTML = error;
    return false;
  } else if (proverka != null) {
    error = "В поле ввода номеров присутствуют символы, которых быть не должно";
    document.getElementById('error').innerHTML = error;
    return false;
  }
}
document.getElementById('error').innerHTML = "";
var table = document.getElementById('dogovor_chast2_2');
table.parentNode.removeChild(table);
var new_table = document.getElementById('dogovor_chast2').innerHTML="<table class='form_dogovor2' id='dogovor_chast2_5'><tbody><tr><td>Тип изделия</td><td>Количество</td></tr></tbody><tbody id='new_line'></tbody></table>";
var new_line = "";
for (var  c = 0; c < length_arr; c++) {
  new_line = document.getElementById('new_line').innerHTML = new_line + "<tr><td><input type='text' name='tip_izdel_"+c+"' required class='input_dogovor2' value='"+tip_izdel[c]+"' readonly></td><td><input type='INT' name='kol_izdel_"+c+"' required class='input_dogovor' id='input_dogovor_kol' value='"+kol_izdel[c]+"' readonly></td></tr>";
}
new_line = document.getElementById('new_line').innerHTML = new_line + "<tr><td><input type='INT' name='kol_strok' required class='input_dogovor2' value='"+length_arr+"' readonly id='kol_strok'></td></tr>";
dalee = false;
return true;
