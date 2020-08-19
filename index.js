
$(document).ready(function () {

  $("#forme").change(function () {
    var forme = $("#forme").val();
    var formulaire = $("#formulaire");
    $(".empty").empty(); // remove
    $(".hidden").css("display","none");

    switch (forme) {
      case 'rectangle':
      var label1 = $("<label>");
      label1.attr("for", "hauteur");
      label1.attr("class", "empty");
      label1.text("Hauteur");
      formulaire.append(label1).append("<p></p>");
      var input1 = $("<input>");
      input1.attr("type", "text");
      input1.attr("name", "hauteur");
      input1.attr("class", "hidden");
      formulaire.append(input1).append("<p></p>");
      var label2 = $("<label>");
      label2.attr("for", "longueur");
      label2.attr("class", "empty");
      label2.text("Longueur");
      formulaire.append(label2).append("<p></p>");
      var input2 = $("<input>");
      input2.attr("type", "text");
      input2.attr("name", 'longueur');
      input2.attr("class", "hidden");
      formulaire.append(input2).append("<p></p>");
        break;

      case 'cercle':
      var label3 = $("<label>");
      label3.attr("for", "rayon");
      label3.attr("class", "empty");
      label3.text("Rayon");
      formulaire.append(label3).append("<p></p>");
      var input3 = $("<input>");
      input3.attr("type", "text");
      input3.attr("name", "rayon");
      input3.attr("class", "hidden");
      formulaire.append(input3).append("<p></p>");
        break;
    }

  });


});


/*  case 'triangle':
  var label4 = $("<label>");
  label4.attr("for", "points");
  label4.attr("class", "empty");
  label4.text("x");
  formulaire.append(label4).append("<p></p>");
  var input4 = $("<input>");
  input4.attr("type", "text");
  input4.attr("name", "point1");
  input4.attr("class", "hidden");
  formulaire.append(input4).append("<p></p>");
  var label5 = $("<label>");
  label5.attr("for", "points");
  label5.attr("class", "empty");
  label5.text("y");
  var input5 = $("<input>");
  input5.attr("type", "text");
  input5.attr("name", "point2");
  input5.attr("class", "hidden");
  formulaire.append(input5).append("<p></p>");

  var label6 = $("<label>");
  label6.attr("for", "points");
  label6.attr("class", "empty");
  label6.text("x");
  formulaire.append(label6).append("<p></p>");
  var input6 = $("<input>");
  input6.attr("type", "text");
  input6.attr("name", "point3");
  input6.attr("class", "hidden");
  formulaire.append(input6).append("<p></p>");

  var input7 = $("<input>");
  input7.attr("type", "text");
  input7.attr("name", "point4");
  input7.attr("class", "hidden");
  formulaire.append(input7).append("<p></p>");

    break;*/
