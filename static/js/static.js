$(document).ready(function () {
  /* On ready document, do stuff */
  $('.modal').modal();
  $('textarea#textarea').characterCounter();
});

$("#buttonSubmit").click(function() {

  //Check the form
  var email = $("#email").val();
  var topic = $("#topic").val();
  var body = $("#textarea").val();

  var regexEmail = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

  if (!regexEmail.test(email)) {
    $("#formErrorEmail").show();
    $("#formErrorTopic").hide();
    $("#formErrorBody").hide();
    $("#formSuccess").hide();
  } else if (topic === "") {
    $("#formErrorTopic").show();
    $("#formErrorBody").hide();
    $("#formErrorEmail").hide();
    $("#formSuccess").hide();
  } else if (body === "") {
    $("#formErrorBody").show();
    $("#formErrorTopic").hide();
    $("#formErrorEmail").hide();
    $("#formSuccess").hide();
  } else {
    $("#formErrorEmail").hide();
    $("#formErrorBody").hide();
    $("#formErrorTopic").hide();
    $("#formSuccess").show();
    //Submit it
    $("#buttonSubmit").submit();
  }
});

/* Button to top behaviour */
window.onscroll = function() {
  scrollFunction()
};

function scrollFunction() {
  if (document.body.scrollTop > screen.height/1.5 || document.documentElement.scrollTop > screen.height/1.5) {
    document.getElementById("buttonsticked").style.display = "block";
  } else {
    document.getElementById("buttonsticked").style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function changeLogo(path_img,el) {
  setTimeout(function () {
    $("#"+el).attr("src",path_img);
  }, 200);
}
