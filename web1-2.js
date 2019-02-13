var selectedBody = document.querySelector('body');
var set = {
  bodyColor : function(color) { selectedBody.style.color = color; },
  backgroundColor : function(color) { selectedBody.style.backgroundColor = color; }
}
var changeDayNight = function(self) {
  if(self.value === '야간모드') {
    set.bodyColor('white');
    set.backgroundColor('black');
    self.value = '주간모드';
  } else {
    set.bodyColor('black');
    set.backgroundColor('white');
    self.value = '야간모드';
  }
}
