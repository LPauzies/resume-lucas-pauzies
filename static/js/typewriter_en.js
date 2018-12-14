function removeAnimation(classname, name_animation) {
  var e = document.getElementsByClassName(classname)[0];
  e.classList.remove(classname);
  e.classList.remove('tw');
  e.classList.add('tw-done');
}

function addAnimation(id, name_animation) {
  var e = document.getElementById(id);
  e.classList.remove('tw-done');
  e.classList.add('tw');
}

function removeAnimationTime(classname, name_animation, time) {
  setTimeout(removeAnimation, time, classname, name_animation);
}

function addAnimationTime(id, name_animation, time) {
  setTimeout(addAnimation, time, id, name_animation);
}

removeAnimationTime("anim-typewriter1","anim-typewriter1",2500);
addAnimationTime("2","anim-typewriter2",2500);
removeAnimationTime("anim-typewriter2","anim-typewriter2",5500);
addAnimationTime("3","anim-typewriter3",5500);
removeAnimationTime("anim-typewriter3","anim-typewriter3",8300);
addAnimationTime("4","anim-typewriter4",8300);
removeAnimationTime("anim-typewriter4","anim-typewriter4",11700);
addAnimationTime("5","anim-typewriter5",11700);
removeAnimationTime("anim-typewriter5","anim-typewriter5",15400);
addAnimationTime("6","anim-typewriter6",15400);
removeAnimationTime("anim-typewriter6","anim-typewriter6",18500);
addAnimationTime("7","anim-typewriter7",18500);
removeAnimationTime("anim-typewriter7","anim-typewriter7",22100);
addAnimationTime("8","anim-typewriter8",22100);
removeAnimationTime("anim-typewriter8","anim-typewriter8",23300);
addAnimationTime("9","anim-typewriter9",23300);
removeAnimationTime("anim-typewriter9","anim-typewriter9",23900);
addAnimationTime("10","anim-typewriter10",23900);
