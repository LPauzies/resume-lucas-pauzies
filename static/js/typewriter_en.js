function removeAnimation(classname, name_animation) {
  var e = document.getElementsByClassName(classname)[0];
  e.classList.remove(classname);
  e.classList.remove('tw');
  e.classList.add('tw-done');
}

function addAnimation(id, name_animation) {
  var e = document.getElementById(id);
  console.log(e);
  e.classList.remove('tw-done');
  e.classList.add('tw');
}

function removeAnimationTime(classname, name_animation, time) {
  setTimeout(removeAnimation, time, classname, name_animation);
}

function addAnimationTime(id, name_animation, time) {
  setTimeout(addAnimation, time, id, name_animation);
}

removeAnimationTime("anim-typewriter1","anim-typewriter1",3500);
addAnimationTime("2","anim-typewriter2",3500);
removeAnimationTime("anim-typewriter2","anim-typewriter2",7500);
addAnimationTime("3","anim-typewriter3",7500);
removeAnimationTime("anim-typewriter3","anim-typewriter3",11300);
addAnimationTime("4","anim-typewriter4",11300);
removeAnimationTime("anim-typewriter4","anim-typewriter4",15700);
addAnimationTime("5","anim-typewriter5",15700);
removeAnimationTime("anim-typewriter5","anim-typewriter5",20400);
addAnimationTime("6","anim-typewriter6",20400);
removeAnimationTime("anim-typewriter6","anim-typewriter6",24500);
addAnimationTime("7","anim-typewriter7",24500);
removeAnimationTime("anim-typewriter7","anim-typewriter7",29600);
addAnimationTime("8","anim-typewriter8",29600);
removeAnimationTime("anim-typewriter8","anim-typewriter8",31500);
addAnimationTime("9","anim-typewriter9",31500);
removeAnimationTime("anim-typewriter9","anim-typewriter9",32000);
addAnimationTime("10","anim-typewriter10",32000);
