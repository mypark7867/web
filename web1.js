var selectedBody = document.querySelector('body');
set = {
  bodyColor:function(color) { selectedBody.style.color = color; },
  bodyBackgroundColor:function(color) { selectedBody.style.backgroundColor = color; },
  dayNighButtonValue:function(buttonValue) {
    var dayNightInput = document.querySelectorAll('#dayNight');
    var i = 0;
    while (i < dayNightInput.length) {
      dayNightInput[i].value = buttonValue;
      i = i + 1;
  }
  }
}
function changeDayNight(self) {
  if(self.value === '야간모드') {
    set.bodyColor('white');
    set.bodyBackgroundColor('black');
    set.dayNighButtonValue('주간모드');
  } else {
    set.bodyColor('black');
    set.bodyBackgroundColor('white');
    set.dayNighButtonValue('야간모드');
  }
}
