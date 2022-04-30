
class Buttonripple {
  // 1. describe and create/initiate our object
  constructor() {
    this.btnRipple = document.querySelectorAll('.btn-ripple');
    this.events()
    //alert('test')
  }
  // 2. events
  events() {
    

    this.btnRipple.forEach(btn => {
      btn.addEventListener('click', e => {
        
        let x = e.clientX - e.target.offsetLeft;
        let y = e.clientY - e.target.offsetTop;

        console.log(x)
        console.log(y)
        
        let ripples = document.createElement('span');
        ripples.style.left = x + 'px';
        ripples.style.top = y + 'px';
        btn.appendChild(ripples);
      
        setTimeout(() => {
          ripples.remove()
        },1000);
      });
    });

  }

  // 3. methods (function, action...)
}

export default Buttonripple